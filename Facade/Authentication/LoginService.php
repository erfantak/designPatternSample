<?php


namespace Facade\Authentication;


class LoginService
{

    public function loginUser($data)
    {
        echo 'you are logged in';
    }

    public function logOutUser($data)
    {
        echo 'you are logged out';
    }
}