<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/contact', 'PostController@contact');
//
//Route::get('/post/{id}','PostController@showPost');


/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

//Route::get('/insert', function (){
//    DB::insert('insert into posts(title, content) values(?, ?)', ['C++', 'Next Language that i will learn']);
//
//});

//Route::get('/read', function(){
//    $results = DB::select('select * from posts where id = ?', [1]);
//    foreach ($results as $post){
//        return $post->title;
//    }
//});

//Route::get('/update', function(){
//   $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//   return $updated;
//});

//Route::get('/delete', function(){
//   $delete = DB::delete('delete from posts where id = ?', [1]);
//   return "success";
//});


/*
|--------------------------------------------------------------------------
| Eloquent ORM
|--------------------------------------------------------------------------
*/

//Route::get('/read', function(){
//    $posts = Post::all();
//    foreach($posts as $post){
//        return $post->title;
//    }
//});

//Route::get('/find', function(){
//   $post = Post::find(2);
//   return $post->content;
//    var_dump($post);
//});


//Route::get('/findwhere', function(){
//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//   $posts = Post::where('id', 3)->take(1)->get();
//   return $posts;
//});
//
//Route::get('/findmore', function(){
//    $posts = Post::findOrFail(2);
//    return $posts;
//});

#create
//Route::get('/basicinsert', function(){
//    $post = new Post;
//    $post->title = 'new Eloquant title insert';
//    $post->content = 'lorem ipsum';
//    $post->save();
//});

#update
//Route::get('/basicinsert', function(){
//    $post = Post::find(2);
//    $post->title = 'PHP';
//    $post->content = 'PHP and Laravel forever.';
//    $post->save();
//});

//Route::get('/softdelete', function(){
//    Post::find(4)->delete();
//});
//Route::get('/readsoftdelete', function(){
//    $post = Post::find(2);
//    return $post;
//    $post = Post::withTrashed()->where('id', 3)->get();
//    return $post;
//    $post = Post::onlyTrashed()->get();
//    return $post;
//});
//Route::get('/restore', function(){
//    Post::withTrashed()->where('is_admin', 0)->restore();
//});
//Route::get('/forcedelete', function(){
//   Post::withTrashed()->where('id', 2)->forceDelete();
//});


// One to One relationship
Route::get('/user/{id}/post', function($id){
    return User::find($id)->post;
});

Route::get('/post/{id}/user', function($id){
    return Post::find($id)->user->name;
});

### One to many
Route::get('/posts/{id}', function($id){
    $user = User::find($id);
    foreach($user->posts as $post){
    echo $post->title . "<br>";
    }
});

### many to many relationship

//Route::get('/user/{id}/role', function($id){
//    $user = User::find($id);
//    foreach($user->roles as $role){
//        echo $role->name;
//    }
//});

Route::get('/user/{id}/role', function($id){
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
    return $user;
});

### Accessing the intermediate table / pivot
Route::get('/user/pivot', function(){
    $user = User::find(1);
    foreach($user->roles as $role){
        echo $role->pivot->created_at;
    }
});


Route::get('/user/country', function(){
    $user = Country::find(2);
    foreach($user->posts as $post){
        echo $post->title;
    }
});

### Polymorphic Relations

//Route::get('/user/photos', function(){
//    $user = User::find(1);
//    foreach($user->photos as $photo){
//        return $photo->path;
//    }
//});
//
//Route::get('/post/{id}/photos', function(){
//    $user = Post::find(1);
//    foreach($user->photos as $photo){
//        echo $photo->path . "<br>";
//    }
//});
Route::get('/photo/{id}/post', function($id){
      $photo = Photo::findOrFail($id);
      return $photo->imageable;
});
