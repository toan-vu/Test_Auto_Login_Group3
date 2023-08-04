<?php

declare(strict_types=1);

namespace Tests\Support\Page\Acceptance;

use \Tests\Support\AcceptanceTester;
class LoginPage
{
    public static $URL = '/login';

    const EMAIL_FIELD = '//input[@id ="email"]';
    const PASSWORD_FIELD = '//input[@id ="password"]';
    const REMEMBER_ME_CHECKBOX = '//input[@type="checkbox"]';
    const LOGIN_BUTTON = '//button[@type="submit"]';
    const FORGOT_PASSWORD_LINK = '//a[normalize-space()="Forgot Your Password?"]';
    public static function route($param)
    {
        return static::$URL.$param;
    }
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public function onPage(){
        $this->acceptanceTester->amOnPage(self::$URL);
        return $this;
    }

    public function fillEmail($email){
        $this->acceptanceTester->retryFillField(self::EMAIL_FIELD, $email);
        return $this;
    }

    public function fillPassword($password){
        $this->acceptanceTester->retryFillField(self::PASSWORD_FIELD, $password);
        return $this;
    }

    public function checkRememberMe(){
        $this->acceptanceTester->retryCheckOption(self::REMEMBER_ME_CHECKBOX);
        return $this;
    }

    public function clickLoginButton(){
        $this->acceptanceTester->retryClick(self::LOGIN_BUTTON);
        return $this;
    }

    public function clickForgotPassword(){
        $this->acceptanceTester->retryClick(self::FORGOT_PASSWORD_LINK);
        return $this;
    }


}
