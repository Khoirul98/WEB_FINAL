<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postm = \App\Postms::Paginate(10);
        return view ('admin.postm.index', compact('postm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = \App\Category::All();
        return view ('admin.postm.create', compact('category'));
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

        $postm = \App\Postms::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/postm/'.$New_gambar,
        ]);
    
        $gambar->move('public/uploads/postm/', $New_gambar);
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
        $postm = \App\Postms::All();
        return view('admin.postm.edit', compact('postm','category'));
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

        

        $postm = \App\Postms::find($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $New_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/postm/', $New_gambar);
            $postm_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'gambar' => 'public/uploads/postm/'.$New_gambar
            ];
        }
        else{
            $postm_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content
            ];
        }
        $postm->update($postm_data);
        
        return redirect()->route('postm.index')->with('success','Post Berhasil Diganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $postm->forceDelete();  

        return redirect()->back()->with('success','post berhasil dihapus permanen');
    }
}
