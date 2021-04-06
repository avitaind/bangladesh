<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    //
        //
        public function showBlogList(){

            $country = 'in';
            $feature_blog = Blog::latest()->orderBy('id', 'asc')->get();
    
            return view('blog.index', compact('feature_blog','country'));
    
        }
    
        public function showBlogDetail($slug){
    
            $country = 'in';
            $blog_detail = Blog::where('id', $slug)->get()->first();
            return view('blog.detail', compact('blog_detail','country'));
    
        }
}
