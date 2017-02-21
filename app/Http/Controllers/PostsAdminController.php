<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;

class PostsAdminController extends Controller
{
    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
  
    public function index()
    {
        $posts = $this->post->paginate(10);
        return view("admin.posts.index", compact('posts'));
    }
    
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = $this->post->create($request->all());

        $arTags = $this->getTagsIds($request->tags);
        $post->tags()->sync($arTags);

        return redirect()->route("admin.posts.index");
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        return view("admin.posts.edit", compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());

        $post = $this->post->find($id);
        $arTags = $this->getTagsIds($request->tags);
        $post->tags()->sync($arTags);

        return redirect()->route("admin.posts.index");
    }


    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route("admin.posts.index");
    }

    private function getTagsIds($tags)
    {
        //Tratando o array
        $arTags = array_filter(array_map('trim',explode(',', $tags)));

        $arIdsTags = [];
        if(is_array($arTags) && count($arTags) > 0){
            foreach ($arTags AS $tagNome){
                $arIdsTags[] = Tag::firstOrCreate(['name' => $tagNome])->id;
            }
        }

        return $arIdsTags;
    }
}
