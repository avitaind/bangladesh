<?php

namespace App\Http\Controllers\Admin;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-marketing-data');
    }

    //

    public function showSubcriptionList( ) {

        $subscriptions = Subscription::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.subscription_list', compact('subscriptions'));

    }

}
