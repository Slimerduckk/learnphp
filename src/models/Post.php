<?php

namespace APP\Models;

class Post extends Model {
    public static $table = 'posts';
    public $title;
    public $body;
    public $author;
    public $category;
    public $created_at;
    public $updated_at;
}