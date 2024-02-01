<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Cool tech</title>
</head>

<body>
    <!--This is the home page of the blog-->
    <header class="header">
        <a href="/" class="logo">Cool Tech</a>
        <!--Page navigation bar-->
        <nav class="navbar">
            <a href="/about">About</a>
            <a href="/legal/tos">Terms of Use</a>
            <a href="/legal/privacy">Privacy Policy</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="content">
            <!--Header-->
            <h3>Cool Tech Technical Blog</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis nemo
                qui iusto laudantium? Culpa vero ut aliquid perspiciatis adipisci ipsam
                voluptatem nihil quae dolor amet. Ducimus quo sapiente porro beatae.</p>
            <a href="/about" class="button">Learn more About Us</a>
        </div>
    </section>

    <section class="feature">
        <h1 class="cardhead">Stay updated on the latest Tech News</h1>
        <div class="card-container">
            <div class="card">
                <img src="/images/card1.jpg" alt="">
                <div class="card-content">
                    <h3>Tech News</h3>
                    <p>Latest Technology News and Daily Updates on Gadgets 360. Get trending
                        tech news, mobile phones, laptops, reviews, software updates, video games,
                        internet and other technology updates on gadgets from India and around the
                        world. </p>
                </div>
            </div>
            <div class="card">
                <img src="/images/card2.jpg" alt="">
                <div class="card-content">
                    <h3>Software reviews</h3>
                    <p>This website provides software reviews, comparisons, and more. It has a
                        comprehensive collection of reviews from verified users and experts.
                        You can find reviews for various software categories such as Tech News
                        Software reviews, Hardware reviews, Opinion pieces, and more.

                    </p>
                </div>
            </div>
            <div class="card">
                <img src="/images/card3.jpg" alt="">
                <div class="card-content">
                    <h3>Hardware reviews</h3>
                    <p>See the latest reviews and benchmarks on Tom's Hardware,
                        including PC components, systems, peripherals and other computing
                        technology.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs" id="blogs">
        <h1 class="heading">Featured Blogs</h1>

        <div class="box-container">
            <!--The articles are listed in cards next to each other 
        only the first 5 articles are listed with basic information 
    all the article information is read from the database-->
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