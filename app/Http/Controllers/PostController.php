<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Posts::Paginate(10);
        return view ('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \App\Tags::All();
        $category = \App\Category::All();
        return view ('admin.post.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $New_gambar = time().$gambar->getClientOriginalName();

        $posts = \App\Posts::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/posts/'.$New_gambar,
            'slug' => Str::Slug($request->judul)
        ]);
        
        $posts->tags()->attach($request->tags);
        $gambar->move('public/uploads/posts/', $New_gambar);
        return redirect()->back()->with('success','Post Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = \App\Category::All();
        $tags = \App\Tags::All();
        $posts = \App\Posts::All();
        return view('admin.post.edit', compact('posts','tags','category'));
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
        $this->validate($request,[
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        

        $posts = \App\Posts::find($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $New_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $New_gambar);
            $post_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'gambar' => 'public/uploads/posts/'.$New_gambar,
                'slug' => Str::Slug($request->judul)
            ];
        }
        else{
            $post_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'slug' => Str::Slug($request->judul)
            ];
        }
        $posts->tags()->sync($request->tags);
        $posts->update($post_data);
        
        return redirect()->route('post.index')->with('success','Post Berhasil Diganti');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = \App\Posts::find($id);
        $posts->delete(); 

        return redirect()->back()->with('success','post berhasil dihapus (cek trashed post)');
    }

    public function trashed()
    {
        $posts = \App\Posts::onlyTrashed()->paginate(10);
        return view('admin.post.trashed', compact('posts'));
    }

    public function restore($id)
    {
        $posts = \App\Posts::withTrashed()->where('id', $id)->first();
        $posts->restore();  

        return redirect()->back()->with('success','post berhasil direstore (cek list post)');
    }

    public function kill($id)
    {
        $posts = \App\Posts::withTrashed()->where('id', $id)->first();
        $posts->forceDelete();  

        return redirect()->back()->with('success','post berhasil dihapus permanen');
    }
}
