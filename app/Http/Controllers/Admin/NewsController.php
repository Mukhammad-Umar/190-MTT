<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
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
     * News page.
     *
     * @return void
     */
     public function index(Request $request)
      {
         $news = News::get();

        // Ajax response
         if ($request->ajax()) {
            return response()->json([
               'table' => view("back.components.news-component", compact('news'))->render(),
            ]);
         };

         return view('back.table', compact('news'));
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
      * Create new news instance.
      *
      * @return void
      */
      public function store(Request $request)
      {
         $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'information' => 'required|string',
         ]);
          
        $validator->validate();
        
         $news = new News();
         $news->create($request->all());

         return redirect(route('news.create'))->with('message-ok', 'Yangi yangilik omadli tarzda yaratilindi!');
      }
      
     /**
    * Show the form for editing the specified resource.
     */
     public function edit(News $news)
     {
         return view('back.store-update.edit', compact('news'));
     }

     /** *  Update the specified resource in storage. */
     public function update(Request $request, News $news)
     {
        $news->update($request->all());

       return redirect(route('news.index'))->with('message-updated', 'Yangilik omadli tarzda o`zgartirildi! ');
     }
      
     /**   Delete a news. */
     public function destroy(Request $request, News $news)
     {
        $news->delete();

        return $this->index($request);
     }

}
