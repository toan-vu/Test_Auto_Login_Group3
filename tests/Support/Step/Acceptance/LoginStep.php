<?php

declare(strict_types=1);

namespace Tests\Support\Step\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Page\Acceptance\LoginPage;

class LoginStep extends AcceptanceTester
{
    public function login($email, $password){
        $loginPage = new LoginPage($this);
        $loginPage->onPage()
            ->fillEmail($email)
            ->fillPassword($password);
    }
}
