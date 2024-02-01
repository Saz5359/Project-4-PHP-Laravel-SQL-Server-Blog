<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/article.css">
    <title>Document</title>
</head>

<body>
    <!--This is the article view page where a user views more details about a selected article-->
    <h1 class="heading"> Article</h1>

    <div class="row">
        <div class="image">
            <img src="/images/blog/card{{$article->id}}.jpg" alt="/images/blog/alt.jpg">
        </div>

        <div class="content">
            <!--This displays all the information about the selected article the infomation is 
        collected from the database-->
            <h3>{{$article-> title}}</h3>
            <a href="/category/{{$article->slug}}" class="button">{{$article->CatName}}</a>
            <div>
                @php
                $tags = explode(',', $article->tags);
                @endphp

                @foreach($tags as $tag)
                <a href="/tags/{{$tag}}" class="button"> {{$tag}}</a>
                @endforeach
            </div>
            <p> {{Str::limit($article->content, 200)}}
            </p>
            <span>{{$article->creationDate}}</span>
        </div>
    </div>
    <x-cookie />
    <section class="footer">
        <x-footer />
    </section>

</body>

</html>