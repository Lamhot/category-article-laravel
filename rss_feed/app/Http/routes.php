<?php

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
define('THUMBS_DIR','thumbs');
define('THUMBS_DIR_PATH', public_path() . '/' . THUMBS_DIR);
Route::get('/', function(){ return redirect('/category'); });
Route::resource('/category', 'CategoryController');
Route::resource('/website', 'WebsiteController');
Route::resource('/article', 'ArticleController');

/*Route::get('feed', function(){

    // create new feed
    $feed = Feed::make();

    // cache the feed for 60 minutes (second parameter is optional)
    $feed->setCache(60, 'laravelFeedKey');

    // check if there is cached feed and build new only if is not
    if (!$feed->isCached())
    {
       // creating rss feed with our most recent 20 posts
       $posts = DB::table('posts')->orderBy('created_at', 'desc')->take(20)->get();

       // set your feed's title, description, link, pubdate and language
       $feed->title = 'Your title';
       $feed->description = 'Your description';
       $feed->logo = 'http://yoursite.tld/logo.jpg';
       $feed->link = URL::to('feed');
       $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
       $feed->pubdate = $posts[0]->created_at;
       $feed->lang = 'en';
       $feed->setShortening(true); // true or false
       $feed->setTextLimit(100); // maximum length of description text

       foreach ($posts as $post)
       {
           // set item's title, author, url, pubdate, description and content
           $feed->add($post->title, $post->author, URL::to($post->slug), $post->created, $post->description, $post->content);
       }

    }

    // first param is the feed format
    // optional: second param is cache duration (value of 0 turns off caching)
    // optional: you can set custom cache key with 3rd param as string
    return $feed->render('atom');

    // to return your feed as a string set second param to -1
    // $xml = $feed->render('atom', -1);

});*/
// After the following line
Route::post('contact', 'ContactController@sendContactInfo');

// Add the new route
get('rss', 'BlogController@rss');