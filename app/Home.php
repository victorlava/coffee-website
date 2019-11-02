<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
   public $timestamps = false;
   
   protected $fillable = ['title', 'sub_title', 'description', 'button_text', 'button_link', 'meta_title', 'meta_description'];
}
