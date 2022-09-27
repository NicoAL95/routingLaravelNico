<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicoController extends Controller
{
    // About
    public function about() {
        return view('aboutPage.about');
    }

    // News
    public function news() {
        return view('newsPage.news');
    }

    // Contact
    public function contact() {
        return view('contactPage.contact');
    }

    // Recipes
    public function recFruit() {
        return view('recipesPage.fruit.fruit');
    }
    public function recDairy() {
        return view('recipesPage.dairy.dairy');
    }

    // Community
    public function comForum() {
        return view('communityPage.forum.forum');
    }
    public function comGallery() {
        return view('communityPage.gallery.gallery');
    }
}
