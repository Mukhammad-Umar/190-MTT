<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('both', ['except' => ['index']]);
     }
     
     /**
     * Back Gallery page.
     *
     * @return void
     */
     public function index(Request $request)
      {
         $galleries = Gallery::get();

         // Ajax response
          if ($request->ajax()) {
             return response()->json([
                'table' => view("back.components.gallery-component", compact('galleries'))->render(),
             ]);
          };

         return view('back.table', compact('galleries'));
      }
      
      /**
       * Create a new controller instance.
       *
       * @return void
       */
       public function create()
       {
        return view('back.store-update.create');
       }
      
       public function show($id)
       {
        return abort(404);
       }  
       
      /**
       * Create a new controller instance.
       *
       * @return void
       */
       public function upload(Request $request)
       {
          $file = $request->image;
          $filecontent = $file->openFile()->fread($file->getSize());
          $filename = date('YmdHis') . $file->getClientOriginalName();
          $file->move(public_path() . '/images/gallery/', $filename);
          return view('back.store-update.create', ['image' => $filename]);
       }
 
      /**
       * Add new photo into gallery.
       *
       * @return void
       */
       public function store(Request $request)
       {
          $gallery = new Gallery();
          $gallery->create($request->all());
 
          return redirect(route('galleries.create'))->with('message-ok', 'Yangi rasm omadli tarzda qo`shildi!');
       }
       
      /**
     * Show the form for editing the specified resource.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
      */
      public function edit(Gallery $gallery)
      {
          return view('back.store-update.edit', compact('gallery'));
      }
 
      /** *  Update the specified resource in storage. */
      public function update(Request $request, Gallery $gallery)
      {
         $gallery->update($request->all());
 
        return redirect(route('galleries.index'))->with('message-updated', 'Rasm omadli tarzda o`zgartirildi! ');
      }
       
      /**   Delete a photo from gallery. */
      public function destroy(Request $request, Gallery $gallery)
      {
         $image = 'images/' . $gallery->image;
         
         if(File::exists($image)){
            File::delete($image);
         }
   
         $gallery->delete();
 
         return $this->index($request);
      }

}
