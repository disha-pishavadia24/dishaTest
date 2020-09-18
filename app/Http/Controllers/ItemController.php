<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
	//view items
    public function view()
    {
    	$leftItem = Item::leftitems()->get();
    	$rightItem = Item::rightitems()->get();

    	return view('item.view',compact('leftItem','rightItem'));
    }

    //update the sequence of items ajax method
    public function update(Request $request)
    {
    	$input = $request->all();

    	foreach ($input['leftArr'] as $key => $value) {
    		$key = $key+1;
    		Item::where('id',$value)->update(['side'=>0,'sequence'=>$key]);
    	}

    	foreach ($input['rightArr'] as $key => $value) {
    		$key = $key+1;
    		Item::where('id',$value)->update(['side'=>1,'sequence'=>$key]);
    	}

    	return response()->json(['status'=>'success']);
    }
    //store the items to db with by defualt left side
    public function store(Request $request)
    {
    	$item = new Item();
    	$data = $request->validate([
    		'name' => 'required',
    	]);
    	$item->name = $request->input('name');
    	$item->sequence = (Item::count())+1 ;
    	$item->side = 0;
    	$item->save();
    	return back();
    }
}
