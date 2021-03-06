<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ApiController;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\SigninRequest;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signIn(SigninRequest $request)
    {
       $credentials = $request->all('email', 'password');
       $token = null;
       try {
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'response' => 'error',
                'message' => 'invalid_email_or_password',
            ]);
        }
    } catch (JWTAuthException $e) {
        return response()->json([
            'response' => 'error',
            'message' => 'failed_to_create_token',
        ]);
    }
    return response()->json([
        'response' => 'success',
        'result' => [
            'token' => $token,
        ],
        'user'=>JWTAuth::toUser($token)
    ]);
}
public function getAuthUser(Request $request){
    $user = JWTAuth::toUser($request->token);        
    return response()->json($user);
}
public function updateLanguage(Request $request)
{ 
    $user = JWTAuth::toUser($request->token);
    $user->languagedefault=$request->languagedefault;
    $user->save();
    return response()->json($user);
}
public function index()
{
    $users = User::all();

    return $this->showAll($users);
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
    public function store(CreateUserRequest $request)
    {
        $data = $request->all();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone'] = $request->phone;
        $data['extendinfo'] = $request->extendinfo;
        $data['position'] = $request->position;
        $data['organization_id'] = $request->organization_id;
        $data['group_id'] = $request->group_id;
        $data['status'] = $request->status;

        $user = User::create($data);

        return $this->showOne($user, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $this->showOne($user);
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
    public function update(UpdateUserRequest $request, User $user)
    {
     $user->fullname = $request->fullname;
     $user->email = $request->email;
     $user->phone = $request->phone;
     $user->extendinfo = $request->extendinfo;
     $user->position = $request->position;
     $user->organization_id = $request->organization_id;
     $user->group_id = $request->group_id;
     $user->status = $request->status;

     $user->save();

     return $this->showOne($user, 200);
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return $this->showOne($user);
    }
}
