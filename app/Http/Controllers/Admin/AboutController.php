<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
  public function index()
  {

    $about = About::first();
    $imageSize = $this->getImageSize();

    // compact('about', 'imageSize') === ['about' => $about, 'imageSize' => $imageSize];
    return view('admin/about/index', compact('about', 'imageSize'));
  }

  public function create()
  {

    $about = About::first();
    $imageSize = $this->getImageSize();

    return view('admin/about/create', compact('about', 'imageSize'));
  }

  public function store(Request $request)
  {

    $request->validate([
      'title' => 'required|string|max:100',
      'sub_title' => 'required|string|max:100',
      'description' => 'required|string|max:255',
      'meta_title' => 'required|string|max:100',
      'meta_description' => 'required|string|max:200',
      'image' => 'dimensions:min_width=300,min_height:300|max:512'
    ]);

    $page = About::first();

    About::updateOrCreate([
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
      $request->image->storeAs('/', 'about.jpg', 'pages');
    }

    return redirect()->route('admin.about.index')->with('message', 'The data have been updated succesfully.');
  }

  private function getImageSize() {
    $imageExists = Storage::disk('pages')->exists('home.jpg');
    return ($imageExists) ? (int) round(Storage::disk('pages')->size('home.jpg') / 1000) : 0;
  }

}
