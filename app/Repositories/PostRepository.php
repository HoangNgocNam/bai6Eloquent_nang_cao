<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Impl\PostRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($id, $request)
    {
        $data = $request->only("title","content", "user_id");
        $post = Post::findOrFail($id);
        $post -> update($data);
        $post ->categories()->sync($request->category);
    }

//    public function getCategoryOfPost($postId)
//    {
//        $myCategories = [];
//        $categories = DB::table('category_post')->where('post_id',$postId)->get();
//        foreach ($categories as $category){
//            $myCategories[] = $category->category->id;
//        }
//        return $myCategories;
//    }

}
