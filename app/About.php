<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  public $timestamps = false;
 
  protected $fillable = ['title', 'sub_title', 'description', 'meta_title', 'meta_description'];
}
