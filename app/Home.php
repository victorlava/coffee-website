<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
   protected $fillable = ['title', 'sub_title', 'description', 'button_text', 'button_link', 'meta_title', 'meta_description'];
}
