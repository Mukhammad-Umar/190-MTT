<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
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
     * Back Contact page.
     *
     * @return void
     */
     public function index(Request $request)
      {
         $contacts = Contact::get();

         // Ajax response
          if ($request->ajax()) {
             return response()->json([
                'table' => view("back.components.contact-component", compact('contacts'))->render(),
             ]);
          };

         return view('back.table', compact('contacts'));
      }
       
     /**
      * Delete a contact.
      */
     public function deleteOne(Request $request)
     {
         Contact::find($request->id)->delete();
     }

}
