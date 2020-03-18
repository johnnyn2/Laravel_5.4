<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel';
        $content = 'This is the laravel application from the "Laravel from Scratch" Youtube series';
        $data = array(
            'title' => $title,
            'content' => $content,
        );
        return view('pages/index')->with('data', $data);
    }

    public function about() {

        return view('pages/about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'],
        );
        return view('pages/services')->with('data', $data);
    }
}
