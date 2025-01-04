<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function main_page() {
        return "Main page";
    }
    public function contact_page() {
        return "Contact us";
    }
    public function about_page() {
        return "about page";
    }
    public function  news_page() {
        return "news about our company";
    }
    public function admin_page() {
        return "Here is admin page, only for admins";
    }
    public function registration_page() {
        return "registracion page";
    }
    public function forum_page() {
        return "forum page";
    }
}
