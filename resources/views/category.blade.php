<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Categories</title>
</head>

<body>
    <section class="blogs" id="blogs">
        <h1 class="heading">Related Articles</h1>
        <!--This is the article view page that displays all articles have the same category -->
        <div class="box-container">
            <!--Each article is displayed in cards with basic information next to each other-->
            @foreach($articles as $article)
            <div class="box">
                <div class="image">
                    <img src="/images/blog/card{{$article->id}}.jpg" alt="/images/blog/alt.jpg">
                </div>
                <div class="content">
                    <a href="/article/{{$article->id}}" class="title">{{$article->title}}</a><br>
                    <a href="/category/{{$article->slug}}" class="button">{{$article->CatName}}</a>
                    <div>
                        @php
                        $tags = explode(',', $article->tags);
                        @endphp

                        @foreach($tags as $tag)
                        <a href="/tags/{{$tag}}" class="button"> {{$tag}}</a>
                        @endforeach
                    </div>
                    <span>Creation Date: {{$article->creationDate}}</span>
                    <p>{{Str::limit($article->content, 200)}}</p>

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