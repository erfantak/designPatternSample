<?php


namespace Facade;


use Facade\Authentication\LoginService;
use Facade\Authentication\SignupService;

class AuthenticationFacadeService
{
    private SignupService $signupService;

    private LoginService $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
        $this->signupService = new SignupService();
    }

    public function createAccount($data)
    {
        $this->signupService->createAccount($data);
    }

    public function login($data)
    {
        $this->loginService->loginUser($data);
    }

    public function logout($data)
    {
        $this->loginService->logOutUser($data);
    }

    public function deleteAccount($data)
    {
        $this->signupService->deleteAccount($data);
    }
}