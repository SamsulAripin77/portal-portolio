<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Refresh extends Controller
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
        return $this->respondWithToken(auth()->refresh());
    }
}
