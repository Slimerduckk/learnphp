<?php

namespace App\Controllers;

use App\DB;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some World title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some World content 1',
            ],
            [
                'title' => 'Some World title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some World content 2',
            ],
            [
                'title' => 'Some World title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some World content 3',
            ],
            [
                'title' => 'Some World title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some World content 4',
            ],
        ];
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S content 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some U.S content 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some U.S content 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some U.S content 4',
            ],
        ];
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';
        $posts = [
            [
                'title' => 'Some Technology title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some Technology content 1',
            ],
            [
                'title' => 'Some Technology title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some Technology content 2',
            ],
            [
                'title' => 'Some Technology title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some Technology content 3',
            ],
            [
                'title' => 'Some Technology title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some Technology content 4',
            ],
        ];
        view('tech', compact('title', 'posts'));
    }
    public function test() {
        $db = new DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}