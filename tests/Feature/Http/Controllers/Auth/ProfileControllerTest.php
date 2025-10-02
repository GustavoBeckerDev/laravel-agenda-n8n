<?php

namespace Tests\Feature\Http\Controllers\Auth;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Auth\ProfileController
 */
final class ProfileControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function edit_displays_view(): void
    {
        $profile = Profile::factory()->create();

        $response = $this->get(route('profiles.edit', $profile));

        $response->assertOk();
        $response->assertViewIs('auth.profile.edit');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Auth\ProfileController::class,
            'update',
            \App\Http\Requests\Auth\ProfileUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $profile = Profile::factory()->create();

        $response = $this->put(route('profiles.update', $profile));

        $profile->refresh();

        $response->assertRedirect(route('auth.profile.edit'));
    }
}
