<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostContorollers extends Controller
{
    public function show(Post $Post) {
     
return view('post.show')->with(['post'=>$post]);     
    
}
}
