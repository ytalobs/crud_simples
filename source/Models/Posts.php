<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Posts extends DataLayer
{
    public function __construct()
    {
        parent::__construct("posts", ["id, author, category, title, uri, subtitle, content, cover, views, status"]);
    }
}