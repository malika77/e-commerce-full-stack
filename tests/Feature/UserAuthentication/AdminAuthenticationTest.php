<?php

namespace Tests\Feature\UserAuthentication;



use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{

    use RefreshDatabase;
    public function test_admin_user_can_sign_in()
    {
     // A - Arrange test data for test case

        $user = User::factory()->create();

        //A- Action the test case
        $response = $this->get( 'api/user-sign-in');
        dd( $response->json() );

    }

}
