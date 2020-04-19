<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        // dd('mhvh');
        // $menus = Menu::all();
        $menus = Menu::with(['Restaurant'])->get();
        return view('menus.index')->with('menus', $menus);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $restaurants = Restaurant::all();
        return view('menus.create')
        ->with('restaurants', $restaurants)
        ->with('success','Item created successfully!');

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
        // dd($request->all());
        $menu = new Menu;
        // $restaurants = Restaurant::find($request->get('restaurant_id'));
        $menu->food_name = $request->input('food_name');
        $menu->price = $request->input('price');
        $menu->status = $request->input('status');
        $menu->food_type = $request->input('food_type');
        $menu->image = $request->file('image')->store('menus','public');
        $menu->restaurant_id = $request->input('restaurant_id');
        $menu->save();
        
        // dd($menus);
        return redirect('/menus')->with('success','Item Store Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // dd($id);
        $menu = Menu::find($id);
        // dd($menu);
        return view('menus.edit')->with('menu', $menu);
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
        $menu = Menu::find($id);
        $menu->food_name = $request->input('food_name');
        $menu->price = $request->input('price');
        $menu->status = $request->input('status');
        $menu->food_type = $request->input('food_type');
        $menu->image = $request->file('image')->store('menus','public');
        $menu->restaurant_id = $request->input('restaurant_id');
        $menu->save();
        // dd($menus);
        return redirect('/menus')->with('success','Item Updated successfully!');
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
        $menus = Menu::find($id);
        $menus->delete();
        return redirect('/menus')->with('success','Item Deleted Successfully!');
    }
}
