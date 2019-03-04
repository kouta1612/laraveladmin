<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Like and Dislike System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="blog-header">
            <h2>Like & Dislike System</h2>
            <p>Laravel 5.5 like and dislike system using Ajax</p>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="blog-post">
                    @foreach ($posts as $post)
                        <div class="post" data-postid="{{ $post->id }}">
                            <a href="#"><h3>{{ $post->title }}</h3></a>
                            <h6>Posted on {{ $post->created_at }} by {{ $post->user->name }}</h6>
                            <p>{{ $post->body }}</p>
                            <div class="interaction">
                                <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like' }}</a> | 
                                <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You dont like this post' : 'Dislike' : 'Dislike' }}</a> | 
                                <hr>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/like.js') }}"></script>
    <script type="text/javascript">
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('like') }}';
    </script>

</body>
</html>
