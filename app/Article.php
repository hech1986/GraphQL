<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Article extends Eloquent
{
    protected $fillable = ['title', 'text'];

    protected $connection = 'mongodb';
}
