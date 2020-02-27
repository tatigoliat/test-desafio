<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Ticket;

class TicketTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetTicket()
    {
        #$this->assertTrue(true);
        $ticket = factory(Ticket::class)->create();

        $response = $this->json('GET', '/api/ticket');
        $response->assertStatus(200); #Validar Estructura

    }
}
