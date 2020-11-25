<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ {
    Models\News,
    Models\Gallery,
    Models\Contact,
    Http\Requests\ContactRequest,
};

class FrontController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->take(4)->get();

        return view('front.index', compact('news'));
    }

    /**
     * Show Single News.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news($id)
    {
        $news = News::where('id', $id)->get();

        return view('front.single-news', compact('news'));
    }

    /**
     * Show the gallery page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gallery()
    {
        $photos = Gallery::get();

        return view('front.gallery', compact('photos'));
    }

    /**
     * Show the about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * Show the admission page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admission()
    {
        return view('front.admission');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('front.contact');
    }
    
     /**
      * Adding persons to Contact.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
    public function tocontact(ContactRequest $request)
    {
        Contact::create($request->all());

        return redirect(route('contact'))->withSuccess(['So`rovingiz yuborildi!']); 
    }
}
