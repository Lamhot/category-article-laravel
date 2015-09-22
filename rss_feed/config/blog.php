<?php

return [
    'id' => "id",
    'title' => "title",
    'url' => 'link',
    'thumnail_url' => 'thumnail',
    'summary' => 'summary',
    'content' => 'isi',
    'publish_date' => 'publish date',
    'category_id' => 'category',
    'website_id' => 'website',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];
