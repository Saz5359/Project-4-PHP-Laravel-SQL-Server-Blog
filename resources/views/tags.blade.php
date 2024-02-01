<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Document</title>
</head>

<body>
    <!--This is the tag view page -->
    <section class="blogs" id="blogs">
        <h1 class="heading">Related Tags</h1>

        <div class="box-container">
            <!--Each article that contain the same tag are listed next to each other-->
            @foreach($posts as $post)
            <div class="box">
                <div class="image">
                    <img src="/images/blog/card{{$post->id}}.jpg" alt="/images/blog/alt.jpg">
                </div>
                <div class="content">
                    <a href="/article/{{$post->id}}" class="title">{{$post->title}}</a><br>
                    <a href="/category/{{$post->slug}}" class="button">{{$post->CatName}}</a>
                    <div>
                        @php
                        $tags = explode(',', $post->tags);
                        @endphp
                        <!--This for each displays all the tags for each article-->
                        @foreach($tags as $tag)
                        <a href="/tags/{{$tag}}" class="button"> {{$tag}}</a>
                        @endforeach
                    </div>
                    <span>Creation Date: {{$post->creationDate}}</span>
                    <p>{{Str::limit($post->content, 200)}}</p>

                </div>
            </div>
            @endforeach
        </div>
    </section>
    <x-cookie />
    <section class="footer">
        <x-footer />
    </section>
</body>

</html>