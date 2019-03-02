<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getIndex($pair)
    {
        switch ($pair) {
            case 'june2018':
                return view('blog.june2018');
                break;
            
            case 'techsauce':
                return view('blog.techsauce');
                break;

            case 'secatkx':
                return view('blog.secatkx');
                break;

            case 'may2018':
                return view('blog.may2018');
                break;

            case 'media':
                return view('blog.media');
                break;

            case 'past':
                return view('blog.past');
                break;

            case 'zb':
                return view('blog.zb');
                break;

            case 'arbot':
                return view('blog.arbot');
                break;

            case 'ava':
                return view('blog.ava');
                break;
                
        }
        
    }
}
