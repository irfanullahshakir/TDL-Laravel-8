<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function create_a_book_test()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('POST', '/create', [
            'name' => 'DummyBookName'
        ]);

        $response->assertStatus(201)
                 ->assertJsonCount(4, $key = null);
    }

    /** @test */
    public function a_name_is_required_during_create_a_book()
    {
        $response = $this->json('POST', '/create', [
            'name' => ''
        ]);

        $response->assertSessionHasNoErrors('name');
    }

    /** @test */
    public function a_book_can_be_updated()
    {
        $this->withoutExceptionHandling();
        $this->json('POST', '/create', [
            'name' => 'DummyBookName'
        ]);

        $book = Book::first();

        $response = $this->json('PATCH', '/create/'.$book->id, [
            'name' => 'NewDummyBookName'
        ]);

        $updatedBook = Book::first();

        $this->assertEquals('NewDummyBookName', $updatedBook->name);
    }
    
    
    
}
