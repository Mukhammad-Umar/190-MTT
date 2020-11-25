<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminRepository
{

    /**
     * The news_model instance.
     * The gallery_model instance.
     *
     */
    protected $user_model;


    /**
     * Create a new AdminRepository instance.
     */
    public function __construct(User $user)
    {
        $this->user_model = $user;
    }
    
     /**
      * Creating new news.
      *
      * @return void
      */
      public function store($request)
      {
          $this->user_model->name = $request->name;
          $this->user_model->role = $request->input('role');
          $this->user_model->email = $request->email;
          $this->user_model->password = bcrypt($request->password);
          $this->user_model->save();
      }
      
     /**
     * Update User.
     */
     public function updateUser($request, $user)
     {
        $validator = Validator::make($request->all(), [
           'name' => 'required|string',
           'role' => 'required|exists:users,role',
           'email' => 'required|email',
        ]);
        
        $validator->validate();

        $result = User::where('id', $user->id)
        ->update([
            'name' => $request->name,
            'role' => $request->input('role'),
            'email' => $request->email,
          ]);
     }

     /**
     * Update news.
     *
     * @param  \App\Models\Product $product
     * @return void
     */
    //  public function update($request, $news)
    //  {
    //     $news->update($request->all());
    //  }
}
