<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInfo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    
    public function __invoke(Request $request)
    {
        return response()->json(auth()->user());
    }
}
