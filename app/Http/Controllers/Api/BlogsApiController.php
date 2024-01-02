<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsApiController extends Controller
{
    
    public function index($id)
    {
        $blog = Blog::where('id',$id)->get()->toArray();
        return response($blog, 200);
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        {
            try {
                $blog = new Blog();
                $blog->title = $request->title;
                $blog->short_description = $request->short_description;
                $blog->description = $request->description;
                $blog->publish_date = $request->publish_date;
                $blog->author = $request->author;
                if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/blog'), $imageName);
                $blog->image=$imageName;
                }
                if ($blog->save()) {
                    return redirect()->route('blog.index')->with('success', 'Blog created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create Blog');
                }
            } catch (Exception $e) {
                  //dd($e);
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
        
    }
 
    public function edit(Blog $blog)
    {
     return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        try {
           
            $blog->title = $request->title;
            $blog->short_description = $request->short_description;
            $blog->description = $request->description;
            $blog->publish_date = $request->publish_date;
            $blog->author = $request->author;
    
          
            if ($request->hasFile('image')) {
                $imageName = rand(111,999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/blog'), $imageName);
                $blog->image = $imageName;
            }
    
            if ($blog->save()) {
                return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update Blog');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully');
    }
}
