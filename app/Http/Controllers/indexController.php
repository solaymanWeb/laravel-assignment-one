<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    
    function returnName(Request $request){
        $name = $request->input("name");
        return $name;
    }
    function userAgent(Request $request){
        $userAgent = $request->header("User-Agent");
        return $userAgent;
    }
    function returnPage(Request $request){
        $page = null;

        if(!empty($request->page)){
            $page = $request->page;
        }
        return $page;
    }

    function messageReturn(){

        return response()->json([
            "message"=>"success",
            "data"=>array(
                "name"=>"jhon Doe",
                "age"=>"25"
            )

        ]);
    }
    // 
    function fileUpload(Request $request){

        $avatar = $request->file("avatar");
        $avatar->move('uploads', $avatar->getClientOriginalName());

    }
    function getCookie(Request $request){

        $rememberToken = null;
        if(!empty($request->cookie("laravel_session"))){
            $rememberToken = $request->cookie("laravel_session");
        }
        return $rememberToken;

    }


}
