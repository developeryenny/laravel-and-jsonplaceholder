<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function index(){
     
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://jsonplaceholder.typicode.com',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);
    
    $response = $client->request('GET', 'posts');
    $posts = json_decode($response->getBody()->getContents());
    return view('posts.index', compact('posts'));  
      
    

    }

    
  public function indexc(){
     
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://jsonplaceholder.typicode.com',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);
    
    $response = $client->request('GET', 'comments');
    $comments = json_decode($response->getBody()->getContents());
    return view('posts.vcomments', compact('comments'));  
    
    }
    
}
