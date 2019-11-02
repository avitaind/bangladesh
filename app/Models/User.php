<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laracasts\Presenter\Presenter;
use Laracasts\Presenter\PresentableTrait;
use Silber\Bouncer\Database\HasRolesAndAbilities;


class User extends Authenticatable
{
    use Notifiable;
    use PresentableTrait;


    protected $presenter = 'App\UserPresenter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'name', 'gender', 'birthday', 'profile_pic',
        'country', 'city', 'address', 'mobile', 'phone', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'birthday'
    ];

    public function deviceData( ) {
        return $this->hasMany(DeviceData::class);
    }

    public function tokens()
    {
        return $this->hasMany(UserToken::class )
            ->whereDate('expire_date', '>', Carbon::today());
    }
}

class UserPresenter extends Presenter {

    public function birthday() {

        $birthday = $this->entity->birthday;

        if ( $birthday ) {
            return $birthday->format("Y-m-d");
        } else {
            return null;
        }
    }

    public function gender() {

        $gender_code = $this->entity->gender;

        if ( $gender_code ){
            $genders = array_get( config('constants.genders'), $gender_code );
            return $genders;
        }

        return null;
    }

    public function country() {

        $country = Country::where('code', $this->entity->country)->first();

        if ( $country ) {
            return $country->name();
        } else {
            return null;
        }



    }

}
