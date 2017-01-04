<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;
use App\Category;

Route::get('/', function () {
    
    // create new product and make connection in category_product pivot table

        // $product = new Product;
        // $product->title = 'Apple Mouse';
        // $product->price = 40;

        // $product->save();

    // associates product to category and appends it in category_product table
        // $category = Category::find(1);

        // $product->categories()->attach($category);

    
    // associates existing product to category and appends it in category_product table
    // to create link in pivot table
        // $product = Product::find(4);

        // $category = Category::find(1);

        // $product->categories()->attach($category);

    // to create link in pivot table for multiple categories (existing product)
        // $product = Product::find(4);

        // $category = Category::find([1, 2]);
        // $category = Category::whereIn('title', ['Tech', 'Apple'])->get();

        // $product->categories()->attach($category);

    // to remove link from pivot table
        // $product = Product::find(4);

        // $category = Category::find(1);

        // $product->categories()->detach($category);

    // to remove all products from a category
        // $category = Category::find(1);

        // $product = Product::find([4, 5]);

        // $category->products()->detach($product);

    // if you know e.g. product ids use sync to attach (also avoids duplication)
        // $category = Category::find(1);

        // $category->products()->sync([4, 5]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/products/{product}', 'ProductController@show');

