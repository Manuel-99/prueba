<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;


class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer = Trainer::all();
        return view("trainers.index", compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("trainers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('txtAvatar')){

            $file = $request->file('txtAvatar');
            $nombre = time().$file->getClientOriginalName();
            $file->move( public_path() . '/images/', $nombre);
        }
        $trainer = new Trainer();
        $trainer->name = $request->input('txtNombre');
        $trainer->avatar = $nombre;
        $trainer->save();
        $trainer = Trainer::all();
        return view("trainers.index", compact('trainer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Trainer $trainer )
    {
        //return $slug;
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Trainer $trainer )
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //return $request;
        //return $trainer;
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('txtAvatar')){

            $file = $request->file('txtAvatar');
            $nombre = time().$file->getClientOriginalName();
            $trainer->avatar = $nombre;
            $file->move( public_path() . '/images/', $nombre);
        }
        return $trainer;
        //$trainer->save();

        //return 'Actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //this is a comment
    }
}
