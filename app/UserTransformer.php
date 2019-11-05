<?php

namespace App;


class UserTransformer
{

    public function transform(User $user)
    {
        return [
            "first_name" => $user->first_name,
            "last_name"  => $user->last_name,
            "nick_name"  => $user->name,
            "email"      => $user->email,
            "gender"     => $user->gender,
            "birthday"   => $user->birthday ? $user->birthday->format("Y-m-d") : null,
//            "profile_pic" => $user->profile_pic,
        ];

        return $user;
    }
}