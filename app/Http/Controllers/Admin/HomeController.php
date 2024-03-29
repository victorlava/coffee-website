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

    $home = Home::first();

    return view('admin/home/index', ['home' => $home, 'imageSize' => $this->getImageSize()]);
  }

  public function create()
  {

    $home = Home::first();

    return view('admin/home/create', ['home' => $home, 'imageSize' => $this->getImageSize()]);
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

    $page = Home::first();

    Home::updateOrCreate([
      'id' => ($page) ? $page->id : 0
    ],[
      'title' => $request->title,
      'sub_title' => $request->sub_title,
      'description' => $request->description,
      'button_text' => $request->button_text,
      'button_link' => $request->button_link,
      'meta_title' => $request->meta_title,
      'meta_description' => $request->meta_description
    ]);

    if($request->hasFile('image')) {
      $request->image->storeAs('/', 'home.jpg', 'pages');
    }

    return redirect()->route('admin.home.index')->with('message', 'The data have been updated succesfully.');
  }

  private function getImageSize() {
    $imageExists = Storage::disk('pages')->exists('home.jpg');
    return ($imageExists) ? (int) round(Storage::disk('pages')->size('home.jpg') / 1000) : 0;
  }

}
