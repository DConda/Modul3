<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/') // Visit the homepage
                    ->assertSee('Enterprise Application Development') // Check for the presence of the title
                    ->ClickLink('Log in') // Click the "Log in" link
                    ->pause(2000) // Wait for 2 seconds
                    ->type("email", "dennismuladi@gmail.com") // Type the email in the email field
                    ->type("password", "123456789") // Type the password in the password field
                    ->press('LOG IN') // Press the "LOG IN" button
                    ->assertSee('Dashboard'); // Check for the presence of the dashboard title

        });
    }
}
