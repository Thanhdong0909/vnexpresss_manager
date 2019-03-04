<?php

namespace App\Http\Controllers;

use App\Kind;
use App\Category;
use Illuminate\Http\Request;

class KindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listKind =  Kind::all();
        return view('admin.kind.listKind', compact('listKind'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idtheloai = Category::pluck('TenTL','id');
        //dd($idtheloai);
        return view('admin.kind.addKind', compact('idtheloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $listKind =  Kind::create($data);
        //dd($data);
        return redirect()->route('kinds.index', compact('listKind'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function show(Kind $kind)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function edit(Kind $kind)
    {
        $idtheloai = Category::pluck('TenTL','id');
        return view('admin.kind.edit', compact('kind', 'idtheloai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kind $kind)
    {
        $data = $request->all();
        $listKind = $kind->update($data);
        //$kind->name = $request->name;
        return redirect()->route('kinds.index', compact('listKind'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kind $kind)
    {
        $listKind = $kind->delete();
        return redirect()->route('kinds.index', compact('listKind'));
    }
}
