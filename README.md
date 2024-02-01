
Project-4-PHP-Laravel-SQL-Server
# My Third project which is a Tech Blog

## This is the third project of my bootcamp which instructs us to create a dynamic website that has a very simple blogging theme.
The website has four main article categories:
+ Tech news
+ Software reviews
+ Hardware reviews
+ Opinion pieces

The website must have a way of distinguishing between categories and articles are to be taggable with relevant terms, like “AI”, “Google” or “Singularity”.
The website should have the following pages:
+ Home page
+ Article view page
+ Category view page, where only articles of a certain category are listed.
+ Tag view page, where only articles of a certain tag are listed.
+ About Us page
+ Legal page, including Terms of Use, and Privacy Policy

## Languages and Frameworks used
+ PHP
+ Laravel
+ SQL Server

In this project, I was tasked with the following:
+ Design an appropriate database. It should store articles, their categories, and their tags. Articles must be indexed by creation date, category, and tags so that they can quickly be listed by these features. Note that an article has exactly 1 category, but can have any number (including 0) of tags.
+ Create a Laravel project and link it up with the database.
+ Create the home page. It should feature the latest 5 articles. Display the appropriate titles and the first paragraph of each article. Be sure that where you display an article title, that title is a link to its appropriate article page.
+ Create the article view page. Its URL should have the form /article/{id} and should display the appropriate article’s title, content, creation date, category, and tags.
+ Create the category view page. Its URL should have the form /category/{slug} and should list all articles of a certain category.
+ Create the tag view page. It should behave the same as the category view page, but sort by tag, not category. Everywhere a tag is displayed (i.e. the article view page), it should be a link to the appropriate tag view page.
+ Create the legal page. It must contain generic website Terms of Use and Privacy Policy content.
+ Create a search page. It should have 3 search bars — one for article ID, category, and tag, respectively. Clicking on the appropriate search button should redirect the user to the correct article, category, or tag page.
+ Create a cookie notice that is displayed on every page of the website.
+ Create a footer that is displayed on all web pages. It should contain links to the search page and legal page. It should also display a copyright notice

## My Contribution
Most of the files and folders in this repository are Laravel-generated files. The code I wrote can be found in various places, including in:
+ resources/views
+ resources/views/components
+ routes/web.php

## How to install project
+ Download and install Composer if you don't already have it: https://getcomposer.org/doc/00-intro.md.
+ Install Laravel with the following command from a terminal: composer global requires Laravel/installer.
+ Download Microsoft SQL Server if you don't already have it: https://www.microsoft.com/en-us/sql-server/sql-server-downloads
+ Clone this Github repository into a directory of your choice.
+ Run composer install in the project repository console
+ Run php artisan serve in the console This will start the server and you can access your Laravel application at http://localhost:8000/ in your web browser.
+ If the project does not run then you should run the following in a new repository:
  - composer create-project laravel/laravel example-app
  - replace the public, resources,  routes files, and the .env file with the ones in the cloned repository.
  - Run php artisan serve in the console This will start the server and you can access your Laravel application at http://localhost:8000/ in your web browser.
