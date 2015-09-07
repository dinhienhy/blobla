<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use App\Content;
use Input;
use Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        if (!Auth::check())
        {
            return redirect('/auth/login');
        }
        $contents = Content::all();
        return view('admin.index')->with('datas', $contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        if (!Auth::check())
        {
            return redirect('/auth/login');
        }
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        if (!Auth::check())
        {
            return redirect('/auth/login');
        }
        $user = Auth::user();
        $data = $request->all();
        $content = new Content;
        $content->content = $data['content'];
        $content->user_id = $user->id;
        
        $content->save();
        
        return redirect('admin');
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
        if (!Auth::check())
        {
            return redirect('/auth/login');
        }
        $content = Content::findOrFail($id);
        return view('admin.edit', compact('content'));
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
        if (!Auth::check())
        {
            return redirect('/auth/login');
        }
        $content = Content::findOrFail($id);
		$content->update($request->all());
        return redirect('admin');
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
    
    
    public function delete(){
        if(Request::ajax()) {
            $data = Input::all();
            $content = Content::find($data['id']);
            $content->delete();
            $response = array(
                'status' => 'success'
            );
            return Response::json( $response );
        }
        $response = array(
            'status' => 'error'
        );
        return Response::json( $response );
    }
}
