<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tasks</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/laravel/rss_feed/public/rss">RSS Feed</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/laravel/rss_feed/public/">Home</a></li>
        <li><a href="http://localhost/laravel/rss_feed/public/website">Websites</a></li>
        <li><a href="http://localhost/laravel/rss_feed/public/article">Articles</a></li>
        <li><a href="http://localhost/laravel/rss_feed/public/rss">RSS</a></li>
        
    </div>
  </div>
</nav>
<main>
         <div id="body">
            @yield('body')
         </div>
</main>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <p class="copyright">Copyright © Lamhot JM Siagian</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>