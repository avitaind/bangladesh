<?php

namespace App\Http\Controllers\Integration;

use App\UserToken;
use function GuzzleHttp\Psr7\build_query;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;

class ApplicationController extends Controller
{

    /**
     * @var ApplicationManager
     */
    protected $appManager;

    public function __construct( ApplicationManager $appManager )
    {
        $this->appManager = $appManager;
    }

    //
    public function showApprovalForm(Request $request, $app_code) {

        return view('integration.approve');

        // Directly redirect to HnT page.
//        return $this->handleSuccessLogin($request, $app_code);
    }


    public function handleApproval(Request $request, $app_code) {

        $isAccepted = ( $request->get('accept') == 'accept' );

        if ($isAccepted) {
            return $this->handleSuccessLogin($request, $app_code);
        } else {
            // Nothing happen.
            return redirect()->route('member.profile');
        }

        return redirect('/');
    }

    protected function notifyServiceProvide( UserToken $token )
    {
        $callbackURL = session('auth_callback_url');

        $query = parse_url($callbackURL, PHP_URL_QUERY);

        parse_str($query, $url_params);

        $callbackURL = array_get( explode("?", $callbackURL), 0);

        if ( $callbackURL ) {

            $client = new HttpClient();

            try{

                $form_params = [
                    'token' => $token->token,
                    'expire_date' => $token->expire_date->format("Y-m-d"),
                ];

                \Log::info("Send Callback To: ". $callbackURL, $form_params);

                $result = $client->request('POST', $callbackURL, [
                    'form_params' => $form_params + $url_params
                ]);

            } catch ( RequestException $exception ) {
                \Log::error("Send Callback fail: ". $exception->getMessage() );
            }

            session()->forget('auth_callback_url');
            session()->forget('auth_source');
        }



    }

    protected function getAuthRedirectURL( $token ) {

        $redirect_url = session('auth_redirect_url');

        if ( !$redirect_url ) {
            return null;
        }

        $query = parse_url($redirect_url, PHP_URL_QUERY);

        parse_str($query, $url_params);

        // Distill the Redirect URL
        $redirect_url = array_get( explode("?", $redirect_url), 0);

        $form_params = [
            'token' => $token->token,
            'expire_date' => $token->expire_date->format("Y-m-d"),
        ];

        $form_params = $form_params + $url_params ;

        return $redirect_url.'?'.build_query($form_params);
    }

    protected function handleSuccessLogin(Request $request, $app_code ) {

        // Generate Token
        $user = \Auth::user();
        $user_token = $this->appManager->addNewToken( $user, $app_code );

        $this->notifyServiceProvide( $user_token );

        // Handle Redirection
        $redirect_url = $this->getAuthRedirectURL( $user_token );

        if (!$redirect_url) {
            $redirect_url = url('/');
        }



        // Mirror URL redirect
//        $url = "http://yun.raysgem.com.cn/rj-web/file/html/avita/index.html";


        $redirect_url = route('member.profile');

        session()->forget('auth_redirect_url');

        // Notify provide by callback.
        return redirect()->to($redirect_url);

    }
}
