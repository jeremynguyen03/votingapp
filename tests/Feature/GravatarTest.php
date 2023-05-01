<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class GravatarTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_a()
    {
        $user = User::factory()->create([
            'name' => 'Jeremy',
            'email' => 'aeremynguyen03@gmail.com'
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'
            . md5($user->email)
            . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-1.png',
            $gravatarUrl
        );

        $response = Http::get($user->avatar);
        $this->assertTrue($response->successful());
    }

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_z()
    {
        $user = User::factory()->create([
            'name' => 'Jeremy',
            'email' => 'zeremynguyen03@gmail.com'
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'
            . md5($user->email)
            . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-26.png',
            $gravatarUrl
        );

        $response = Http::get($user->avatar);
        $this->assertTrue($response->successful());
    }

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_9()
    {
        $user = User::factory()->create([
            'name' => 'Jeremy',
            'email' => '9eremynguyen03@gmail.com'
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'
            . md5($user->email)
            . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-36.png',
            $gravatarUrl
        );

        $response = Http::get($user->avatar);
        $this->assertTrue($response->successful());
    }
}
