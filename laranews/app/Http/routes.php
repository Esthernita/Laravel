<?php

use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "Hi Guys ...";
    // return view('welcome');
});
Route::get('/admin/post', function () {
    return "Admin Is Here!";
    // return view('welcome');
});
Route::get('/contact', function () {
    return "Hi, I am Contact";
});

Route::get('/about', function () {
    return "Hi about page";
});
Route::get('/post/{id}', function ($id) {
    return "This is post Number ".$id;
});
Route::get('/post/{id}/{name}', function ($id, $nama) {
    return "This is post Number ".$id." ".$nama;
});

Route::get('/admin/post/example', array('as'=>'admin.home', function () {
	$url = route('admin.home');
    return "This url is : ".$url;
}));


// Route::get('/post/{id}', 'PostController@index');
Route::resource('posts', 'PostController');
Route::get('/contact', 'PostController@contact');
Route::get('/post/{id}', 'PostController@show_post');
Route::get('/post/{id}/{nama}/{jurusan}', 'PostController@show_post2');

Route::get('/insert/{title}/{content}', function($title, $content){
    DB::insert("INSERT INTO posts (title,content,created_at) values(?,?,NOW())",
        [$title, $content]);
});

Route::get('/read/{id}', function($id){
    $res = DB::select("SELECT * from posts where id=?",[$id]);
    // foreach($res as $post){
    //     return $post->title;
    // }
    return $res;
});

Route::get('/update/{id}/{title}', function($id, $title){
    $updated = DB::update("UPDATE posts set title = ? where id=?",[$title,$id]);
    return $updated;
});

Route::get('/delete/{id}', function($id){
    $deleted = DB::delete("DELETE FROM posts where id=?",[$id]);
    return $deleted;
});


Route::get('/read/post/1', function(){
    $posts = Post::all();
    foreach($posts as $post){
        print $post->title.", ";
    }
});

Route::get('/find/{id}', function($id){
    $posts = Post::find($id);
    return $posts->title;
});

Route::get('/findwhere', function(){
    $posts1 = Post::where('is_admin', 0)->orderBy('id', 'desc')->take(1)->get();
    return $posts1;
});

Route::get('/basicinsert', function(){
    $post = new Post;
    $post->title = 'Basic insert';
    $post->content = 'Basic insert content';
    $post->save();
});


