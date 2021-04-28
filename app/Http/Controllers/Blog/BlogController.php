<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogComments;
use App\Models\Blogs;
use App\Models\HotelComments;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        $recentPost = Blogs::OrderByDesc('created_at')->take(5)->get();

        return view('blog.blog', compact('blogs', 'recentPost'));
    }
    public function blog($id){
        $blogs = Blogs::findOrFail($id);
        $recentPost = Blogs::OrderByDesc('created_at')->take(5)->get();

        return view('blog.blog-single', compact('blogs', 'recentPost'));
    }
    public function postComment(Request $request)
    {
        BlogComments::create($request->all());

        return redirect()->back();
    }
}
