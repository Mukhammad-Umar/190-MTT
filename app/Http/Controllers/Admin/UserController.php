<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(AdminRepository $repository)
     {
         $this->repository = $repository;
     }
     
    /**
     * Back User page.
     *
     * @return void
     */
     public function index(Request $request)
     {
        $users = User::get();

        // Ajax response
         if ($request->ajax()) {
            return response()->json([
               'table' => view("back.components.user-component", compact('users'))->render(),
            ]);
         };

        return view('back.table', compact('users'));
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
     * Create new user instance.
     *
     * @return void
     */
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'role' => 'required|exists:users,role',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
         ]);
         
         $validator->validate();

        $this->repository->store($request);

        return redirect(route('users.create'))->with('message-ok', 'Yangi user qo`shildi!');
     }
     
    /**
   * Show the form for editing the specified resource.
   *
   * @param  ...
   * @return \Illuminate\Http\Response
    */
    public function edit(User $user)
    {
        return view('back.store-update.edit', compact('user'));
    }

    /** *  Update the specified resource in storage. */
    public function update(Request $request, User $user)
    {
      $this->repository->updateUser($request, $user);

      return redirect(route('users.index'))->with('message-updated', 'User o`zgartirildi! ');
    }
     
    /**   Delete a user. */
    public function destroy(Request $request, User $user)
    {
       $user->delete();

       return $this->index($request);
    }

}
