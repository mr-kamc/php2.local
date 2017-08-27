<?php


namespace App\Models;


class News extends Model
{
    const TABLE = 'news';
    public $author;
    public $caption;
    public $text;

}