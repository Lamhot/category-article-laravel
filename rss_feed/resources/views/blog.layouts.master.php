// Change the line below
  <title>{{ $title or config('blog.title') }}</title>

// To the following
  <title>{{ $title or config('blog.title') }}</title>

  <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}"
        title="RSS Feed {{ config('blog.title') }}">