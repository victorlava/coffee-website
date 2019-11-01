<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
  public function index()
  {

    $home = Home::orderBy('created_at', 'desc')->first();

    $imageExists = Storage::disk('public')->exists('pages/home.jpg');
    $imageSize = ($imageExists) ? (int) round(Storage::disk('public')->size('pages/home.jpg') / 1000) : 0;

    return view('admin/home', ['home' => $home, 'imageSize' => $imageSize]);
  }

  public function store(Request $request)
  {

    $request->validate([
      'title' => 'required|string|max:100',
      'sub_title' => 'required|string|max:100',
      'description' => 'required|string|max:255',
      'button_text' => 'required|string|max:20',
      'button_link' => 'required|url|max:2000',
      'meta_title' => 'required|string|max:100',
      'image' => 'dimensions:min_width=300,min_height:300|max:512',
      'meta_description' => 'required|string|max:200',
    ]);

    $home = new Home();
    $home->title = $request->title;
    $home->sub_title = $request->sub_title;
    $home->description = $request->description;
    $home->button_text = $request->button_text;
    $home->button_link = $request->button_link;
    $home->meta_title = $request->meta_title;
    $home->meta_description = $request->meta_description;
    $home->save();

    if($request->hasFile('image')) {
      $request->image->storeAs('pages', 'home.jpg', 'public');
    }

    return redirect()->route('admin.home')->with('message', 'The data have been updated succesfully.');
  }
}
