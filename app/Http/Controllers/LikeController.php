<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Post;
use App\like;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class LikeController extends Controller
{
 


public function like(Post $post)
{
   $a=0;
$likecheck=Like::where(['user_id'=>Auth::id(),'post_id'=>$post->id])->first();
if($likecheck)
{

Like::where(['user_id'=>Auth::id(),'post_id'=>$post->id])->delete();
}else{  
++$a;
 $like = new like;
        $like->post_id=$post->id;
        $like->user_id = auth()->user()->id;
  $like->li=$a;

        $like->save();
 }
 return back();
    }
}
    
