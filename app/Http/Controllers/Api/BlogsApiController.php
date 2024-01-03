<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsApiController extends Controller
{
    
    public function index()
    {
        $blog = Blog::get();
        $data=array();
        if($blog){
            foreach($blog as $b){
                $data[]=array(
                    'id'=>$b->id,
                    'title'=>$b->title,
                    'short_description'=>$b->short_description,
                    'image'=>asset('public/uploads/blog/'.$b->image),
                    'author'=>$b->author,
                    'day'=>date("d",strtotime($b->publish_date)),
                    'month'=>date("M",strtotime($b->publish_date))
                );
            }
        }
        return response($data, 200);
    }
    public function recentblogs()
    {
        $blog = Blog::latest()->take(5)->get();
        $data=array();
        if($blog){
            foreach($blog as $b){
                $data[]=array(
                    'id'=>$b->id,
                    'title'=>$b->title,
                    'image'=>asset('public/uploads/blog/'.$b->image),
                    'publish_date'=>date("F d,Y ",strtotime($b->publish_date))
                );
            }
        }
        return response($data, 200);
    }

    public function blogs($id)
    {
        $blog = Blog::where('id',$id)->first();
        $data=array();
        if($blog){
            $data=array(
                'id'=>$blog->id,
                'title'=>$blog->title,
                'short_description'=>$blog->short_description,
                'image'=>asset('public/uploads/blog/'.$blog->image),
                'description'=>$blog->description,
                'author'=>$blog->author,
                'day'=>date("d",strtotime($blog->publish_date)),
                'month'=>date("M",strtotime($blog->publish_date))
            );
            
        }
        return response($data, 200);
    }
}
