<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_products()
{
    $response = $this->get('/products');
    $response->assertOk();
    
    $response->assertViewIs('products.index');

$expectedPage1NameData = Product::orderBy('created_at', 'desc')
    ->take(20)
    ->pluck('price');

$response->assertSeeInOrder(array_merge([
    'All of our products'
], $expectedPage1NameData->toArray()));


}

public function test_update_products() 
{
    $newPrice = 'Some test price';
    $product = Product::factory()->create();

    $response = $this->actingAs($product->user)
        ->followingRedirects()
        ->patch("/products/{$product->id}", [
            'price' => $newPrice
        ]);
        
    $newProduct = $product->fresh();

     $response->assertOk();        
    $this->assertEquals($newPrice, $newProduct->price);
}

}
