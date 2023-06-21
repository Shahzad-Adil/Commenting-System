<?php

namespace App\Http\Controllers;

use App\Events\CommentPostedEvent;
use App\Models\Comment;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $data = [
            'posts' => (new Post())->all()
        ];
        return view('index', $data);
    }

    public function post($id){
        $data = [
            'post_id' => $id,
            'post' => (new Post())->find($id)
        ];

        return view('post', $data);
    }
    public function postComment(Request $request){
        try {

            $comment = $request->get('comment');
            $post_id = $request->get('post_id');

            if(!$comment){
                return response()->json([
                    'status' => false,
                    'message' => 'Comment field is required.'
                ]);
            }

            (new Comment())->create([
                'post_id' => $post_id,
                'user_id' => auth()->user()->id,
                'comment' => $comment,
            ]);

            event(new CommentPostedEvent($post_id));

            return response()->json([
                'status' => true,
                'message' => 'Comment posted!'
            ]);


        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.'
            ]);
        }
    }
}
