<?php

use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// // senza controller con la closure
// // tutti i posts respondse json
// Route::get('posts', function(){
//     $posts = Post::all();
//     return response()->json([
//        'total results' => count($posts),
//        'status code' => 200,
//        'response' => $posts,


//     ]);

// });

// scorciatoia

// Route::get('posts', function(){
//     $posts = Post::all();
//     return $posts;

// });


// scorciatoia con paginazione

// Route::get('posts', function(){
//     $posts = Post::paginate();
//     return $posts;
// });

// // scorciatoia con relazioni senza paginazione

// Route::get('posts', function(){
//     $posts = Post::with(['category'])->get();
//     return $posts;

// });

// scorciatoia relazione + paginazione
// Route::get('posts', function(){
//     $posts = Post::with(['category'])->paginate();
//     return $posts;

// });


Route::get('posts', 'API\PostController@index');


Route::get('posts/{post}', function(Post $post){
    return new PostResource($post);

});






