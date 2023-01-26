<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use stdClass;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $post = Posts::with(['user', 'category'])->paginate(5);
        $post = Posts::latest();

        // dd($post->get());

        return view('blog.blog', [
            'title' => 'blog',
            'active' =>'blog',
            'posts' => $post->get(),
            'categories'=> Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        return view('blog.show',[
            'post' => Posts::where('slug', '=', $slug)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}

    //  // Scope
    //  public function scopeFilter(Builder $builder): Builder{
    //     if(request('search')){
    //         return $builder->where('title', 'like', '%' . request('search') . '%')
    //         ->orWhere('body', 'like', '%' . request('search') . '%' );
    //      }
    // }
