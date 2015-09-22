<?php
namespace App\Http\Controllers;

use App\Services\RssFeed;

class BlogController extends Controller {

// Add the following method
    public function rss(RssFeed $feed) {
        $rss = $feed->getRSS();

        return response($rss)
                        ->header('Content-type', 'application/rss+xml');
    }

}
