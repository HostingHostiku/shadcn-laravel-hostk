<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardAccessTest extends TestCase
{
    /**
     * Ensure guests are redirected from the dashboard.
     */
    public function test_guest_is_redirected_from_dashboard(): void
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect(route('login'));
    }
}
