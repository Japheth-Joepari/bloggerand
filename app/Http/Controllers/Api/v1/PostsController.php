<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
  public function postslist(){
      $posts = Post::all();
      return response()->json([
        "status" => 200,
        "posts" => $posts
      ]);
    }

    public function addpost(Request $request){
        $posts = new Post;
          $posts->post_title = $request->post_title;
          $posts->post_body = $request->post_body;
          $posts->post_image = $request->post_image;
          $posts->category_id = $request->category_id;
        if($posts->save()){
          return response()->json([
            "status" => 200,
            "message" => 'posts Successfully created',
            "posts" => $posts,
          ]);
        }
    }

  public function editpost(Request $request, $id){
          $posts = Post::find($id);
          $posts->post_title = $request->post_title;
          $posts->post_body = $request->post_body;
          $posts->post_image = $request->post_image;
          $posts->category_id = $request->category_id;
        if($posts->save()){
          return response()->json([
            "status" => 200,
            "message" => 'posts Successfully updated',
            "posts" => $posts,
          ]);
        }
        }

        public function deletepost(Request $request, $id){
                $posts = Post::find($id);

              if($posts->delete()){
                return response()->json([
                  "status" => 200,
                  "message" => 'posts Successfully deleted',
                  "posts" => $posts,
                ]);
        }
        }

      }
