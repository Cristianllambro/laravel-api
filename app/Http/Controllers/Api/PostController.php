<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //richiesta per 6 post con il controllo per la home
        $data = $request->all();
        if (array_key_exists('home', $data)) {
            return response()->json([
                'success' => true,
                'response' =>[
                    'data' => Post::inRandomOrder()->limit(3)->get(),
                ]        
            ]);
        }

        $element = $this->composeQuery($request);

        // richiesta per tutti i post
        $element = $element->with(['user', 'category', 'tags'])->paginate(20);
        return response()->json([
            'success' => true,
            'response' => $element,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $element = Post::with(['user', 'category', 'tags'])->where('slug', $slug)->first();
        if($element) {
            return response()->json([
                'success' => true,
                'response' => [
                    'data' => $element,
                ]
            ]);
        }else{
            return response()->json([
                'success' => false,
                'response' => [
                    'data' => 'Post not found',
                ]
            ]);
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
