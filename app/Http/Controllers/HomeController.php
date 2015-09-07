<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Result;
use App\Content;
use Redirect;
use Input;
use Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(Request::ajax()) {
            $data = Input::all();
            $result = new Result;
            $result->full_name = $data['full_name'];
            $result->gender = $data['gender'];
            $contents = Content::all();
            $arr_content = array();
            foreach($contents as $content){
                array_push($arr_content,$content->id);
            }
            $random_keys=array_rand($arr_content,1);
            $result->content_id = $arr_content[$random_keys];
            $result->save();
            
            $name = "";
            if($result->gender == 'male'){
                $name .= 'Anh ';
            }
            else{
                $name .= 'Chị ';
            }
            $name .= $result->full_name;
            $content = Content::findOrFail($result->content_id);
            $data_return = str_replace('{hoten}', $name, $content->content);
            $response = array(
                'status' => 'success',
                'msg' => $data_return,
            );
            return Response::json( $response );
        }
        $response = array(
            'status' => 'error',
            'msg' => $data_return,
        );
        return Response::json( $response );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function result($id){
        $result = Result::findOrFail($id);
        $name = "";
        if($result->gender == 'male'){
            $name .= 'Anh ';
        }
        else{
            $name .= 'Chị ';
        }
        $name .= $result->full_name;
        
        $content = Content::findOrFail($result->content_id);
        $data = str_replace('{hoten}', $name, $content->content);
        
        return View('home.result')->with('data', $data);
    }
    
}
