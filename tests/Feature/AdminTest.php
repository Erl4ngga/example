<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Notifications\Action;
use Tests\TestCase;

class AdminTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }
    public function test_password_can_be_confirmed()
    {
        $user = Action::create();

        $response = $this->actingAs($user)->post('post.store', [
            'title'=>'was',
            'quote'=>'sd',
            'summary'=>'sds',
            'description'=>'sds',
            'photo'=>'wad',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'1',
            'status'=>'inactive'
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }
}
