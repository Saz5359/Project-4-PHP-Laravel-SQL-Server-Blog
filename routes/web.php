<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//This route gets the first 5 articles from the articles table in the database and parse the to
//the home view
Route::get('/', function () {
    $posts = DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->where('id', '<', '6')
        ->groupBy('articles.id')
        ->get();
    return view('home', ['posts' => $posts]);
});

//this view returns the article with the entered id 
Route::get('/article/{id}', function ($id) {
    $article =
        DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->groupBy('articles.id')
        ->find($id);
    return view('article', ['article' => $article]);
});

//This route returns all articles with the entered category slug
Route::get('/category/{slug}', function ($slug) {
    $articles
        = DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->where('slug', '=', $slug)
        ->groupBy('articles.id')
        ->get();
    return view('category', ['articles' => $articles]);
});

//This route returns all articles with the entered tag
Route::get('/tags/{tag}', function ($tag) {
    $posts = DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->groupBy('articles.id')
        ->having('tags', 'like', '%' . $tag . '%')
        ->get();
    return view('tags', ['posts' => $posts]);
});

//About page
Route::get('/about', function () {
    return view('about');
});

//search page
Route::get('/search', function () {
    return view('search');
});

//legal page
Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection' => $subsection]);
})->where('subsection', '(tos|privacy)');

//this route returns all articles with the id entered in the search input
Route::get('/searchID', function (Request $request) {
    $article =
        DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->groupBy('articles.id')
        ->find($request->search);
    return view('article', ['article' => $article]);
});

//this route returns all articles with the category entered in the search input
Route::get('/searchCat', function (Request $request) {
    $articles
        = DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->where('CatName', '=', $request->search)
        ->groupBy('articles.id')
        ->get();
    return view('category', ['articles' => $articles]);
});

//this route returns all articles with the tag entered in the search input
Route::get('/searchTag', function (Request $request) {
    $posts = DB::table('articles')
        ->join('categories', 'articles.CatID', '=', 'categories.CatID')
        ->join('article_tag', 'articles.id', '=', 'article_tag.articleID')
        ->join('tags', 'tags.tagID', '=', 'article_tag.tagID')
        ->select('articles.*', 'categories.*', (DB::raw('GROUP_CONCAT(tags.tagName SEPARATOR ", ") AS tags')))
        ->groupBy('articles.id')
        ->having('tags', 'like', '%' . $request->search . '%')
        ->get();
    return view('tags', ['posts' => $posts]);
});
