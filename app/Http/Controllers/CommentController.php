<?php

namespace App\Http\Controllers;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;
use App\User;
use App\Post;
use App\Notifications\NotifyPostOwner;
use DB;

class CommentController extends Controller
{
    
  public function store(Post $post)
    {
        $comment = new comment;
        $comment->post_id=$post->id;
        $comment->user_id = auth()->user()->id;
       $comment->body = request('body');
     
        $comment->save();
        $posts=Post::find($comment->post_id);
        $user= DB::table('posts')
                ->select('user_id')
                ->where('id', '=', ($comment->post_id))
                ->get();
                $b=$user[0]->user_id;
                $use=User::find($b);
 
         Notification::send($use , new NotifyPostOwner($posts));    
     /* for real time stream    $data = 'You have New Comment for  ' .$post->title ." <br> Added By " . auth()->user()->name;
        StreamLabFacades::pushMessage('test' , 'NotifyPostOwner' , $data);*/
         
      
        
     return back();
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function search()
    {
    	$q = Input::get ( 'search' );
		$post = Post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->get ();
	 if (count ( $post ) > 0)
		return view ( 'posts.search' )->withDetails ( $post )->withQuery ( $q );
	  else
		return view ( 'posts.search' )->withMessage ( "We couldn't find anything for" )->withQuery ( $q );
    }
    public function destroy($id)
    {
        $comment=comment::find($id);
         if(auth()->user()->id !==$comment->user_id){
            return back()->with('error', 'Unauthorized Page');
        }
        $comment->delete();
        return back(); 
    }
}
