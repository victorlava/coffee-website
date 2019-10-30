<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('admin/home');
  }

  public function store(Request $request)
  {

    // dd($request);

    $request->validate([
      'title' => 'required|string|max:100',
      'sub_title' => 'required|string|max:100',
      'description' => 'required|string|max:255',
      'button_text' => 'required|string|max:20',
      'button_link' => 'required|url|max:2000',
      'meta_title' => 'required|string|max:100',
      'meta_description' => 'required|string|max:200',
    ]);

    

    // echo "Valid Form";
    // echo "storing data";
    /*
       1. Retrieve Data
       2. Validate Data
       3. Save Data
     */



  }
}
