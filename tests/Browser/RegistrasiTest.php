<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/') // Visit the homepage
                    ->assertSee('Enterprise Application Development')  // Check for the presence of the title
                    ->ClickLink('Register') // Click the "Register" button or link
                    ->pause(3000) // Wait for 3 seconds
                    ->type('name', 'Dennis Muladi') // Type the name in the name field
                    ->type("email", "dennismuladi@gmail.com") // Type the email in the email field
                    ->type("password", "123456789") // Type the password in the password field
                    ->type("password_confirmation", "123456789") // Type the password confirmation
                    ->press('REGISTER'); // Press the "REGISTER" button
        });
    }
}
