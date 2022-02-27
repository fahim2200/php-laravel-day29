<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    protected $manages;
    protected $manage;
    protected $blog;
    protected $blogs;
    public function index()
    {
        return view("add-blog");
    }
    public function createBlog(Request $request)
    {
//        return $request->all();
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect()->back()->with('message', 'Student info save sucessfully,');

    }
    public function manage()
    {
        $this->manages = Blog::orderBy('id', 'desc')->get();
//        return Student::
        return view('manage-blog',['manages' => $this->manages]);

    }
    public function edit($id)
    {
        $this->blog = Blog::find($id);

        return view('edit-blog',['blog'=> $this->blog]);
    }
}
