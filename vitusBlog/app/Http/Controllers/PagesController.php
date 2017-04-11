<?php

  namespace App\Http\Controllers;
  use App\Post;

class PagesController extends Controller {
  public function getHome(){
    $posts = Post::orderBY('created_at', 'desc')->limit(4)->get();
    return view('pages.home')->withPosts($posts);
  }

  public function getAbout(){

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

    return view('pages.about')->withInfo($data);
  }

  public function getContact(){

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

    return view('pages.contact')->withInfo($data);
  }


}
