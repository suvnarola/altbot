<?php

namespace App\Http\Controllers;


use App\Blog;
use App\Newsletter;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $data =  [
            'title' => $request->title,
            'user_id' => \Auth::user()->id,
            'tags' => $request->tags,
            'content' => $request->content,
            'date' => $request->data,
            'status' => $request->status,
        ];

        $create = Blog::create($data);
        $data['id'] = $create->id;
        $subscribers = Newsletter::all();
        return  redirect('admin/blog')->with('status', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $data =  [
            'title' => $request->title,
            'user_id' => \Auth::user()->id,
            'tags' => $request->tags,
            'content' => $request->content,
            'date' => $request->data,
            'status' => $request->status,
        ];

        $blog->update($data);


        return  redirect('admin/blog')->with('status', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // $blog->delete();
        return "deleted";
        // return  redirect('admin/blog')->with('status', 'Blog has been deleted Successfully');
    }
}
