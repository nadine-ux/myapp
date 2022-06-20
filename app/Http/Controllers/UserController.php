<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));*/
        return view('users.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');*/ 
                        $data = $request->validate([
                            'name' => ['required', 'string', 'max:255'],
                            'role' => ['required', 'string', 'max:255'],
                            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                            'password' => ['required', 'confirmed', Rules\Password::defaults()],
                           
                            
                        ]);
                        $user = new User;
                        $user->name = $request->name;
                        $user->role = $request->role;
                        $user->email = $request->email;
                        $user->password = Hash::make($request->password);
                        
                      
                        $user->save();
                        
                    //    return back()->with('message', "l'utilisateur  a bien ete creer !");   
                    return redirect()->route('users.index')
                    ->with('success','User deleted successfully');  
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
       
        $user = User::find($user); 
        return view('users.edit', compact('user'));
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
        $request->validate([
            'name'=>'required',
            'role'=>'required',
            'email'=> 'required',
            'password' => 'required',
           
        ]);
 
 
        $user = USER::find($id);
        $user->name = $request->get('name');
        $user->role = $request->get('role');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        
        $user->save();
 
        $user->update();
       // return back()->with('message', "l'utilisateur a bien  été modifié !");
       return redirect()->route('users.index')
       ->with('success','User deleted successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}