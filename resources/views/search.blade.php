<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Document</title>
</head>
<!--This is the search page which allows the user to search for articles using 
the article id, tag and category-->

<body>
    <!--Each search attribute has its own name to identify it-->
    <h1>Search Articles</h1>
    <!--The forms below allow the user to search for an article-->
    <div class="container">
        <form action="/searchID">
            <input type="text" name="search" placeholder="Enter the article id...">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <form action="/searchCat">
            <input type="text" name="search" placeholder="Enter the category...">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <form action="/searchTag">
            <input type="text" name="search" placeholder="Enter the tag...">
            <button type="submit">Search</button>
        </form>
    </div>

    <x-cookie />
    <section class="footer">
        <x-footer />
    </section>
</body>


</html>