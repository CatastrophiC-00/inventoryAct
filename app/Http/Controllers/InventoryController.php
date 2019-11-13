<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
    	$inventories = DB::table('inventory')->get();
    	return view('welcome')->with('inventories', $inventories);
    }
    
}
