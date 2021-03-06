<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variale to store all the blog post in the variablle
        $posts = Post::orderBY('id', 'desc')->paginate(5);

        //return a view and paa in the above variablle
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $first = 'Emmanuel';
        $second = 'Vitus';
        $log='blog';
        $full = $first . " " . $second;
        $mail = 'emmanuelvitus01@gmail.com';
        $blog = $first . "'s " . $log;

        $data = [];
        $data['email'] = $mail;
        $data['fullname']= $full;
        $data['tlog']=$blog;
        return view ('posts.create') -> withInfo($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //1st Validate the incoming data
        $this->Validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255',
            'body' => 'required'
        ));
        //2nd Store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;

        $post -> save();


        //after saving, flash this MessageFormatter
        Session::flash('success', 'Post Uploaded');


        //3rd redirect to another page
        return redirect() -> route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $first = 'Emmanuel';
        $second = 'Vitus';
        $log='blog';
        $full = $first . " " . $second;
        $mail = 'emmanuelvitus01@gmail.com';
        $blog = $first . "'s " . $log;

        $data = [];
        $data['email'] = $mail;
        $data['fullname']= $full;
        $data['tlog']=$blog;

        $post = Post::find($id);
        return view('posts.show')-> withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the psot in the database and save it in a variale
        $post = Post::find($id);
        //return the view and pass in the created variable
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $post = Post::find($id);
        if ($request -> input('slug') == $post -> slug) {
          $this->Validate($request, array(
              'title' => 'required|max:255',
              'body' => 'required'
          ));
        }
        else {
          $this->Validate($request, array(
              'title' => 'required|max:255',
              'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'body' => 'required'
          ));
        }

        //save the data to the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');

        $post -> save();
        //set flash message with succes message
        Session::flash('success', 'successfully updated.');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Deleted Successfully');
        return redirect()->route('posts.index');
    }
}
