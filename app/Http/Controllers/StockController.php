<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'share_name'=>'required',
            'share_price'=> 'required',
            'share_qty' => 'required|integer'
        ]);
         $share = new Stock([
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'stock_qty'=> $request->get('share_qty')
      ]);
      $share->save();
      return redirect('/stocks')->with('success', 'Stock has been added');
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
        $share = Stock::find($id);
        return view('stocks.edit',compact('share'));
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
         $request->validate([
            'share_name'=>'required',
            'share_price'=> 'required',
            'share_qty' => 'required|integer'
          ]);
        $share = Stock::find($id);
        $share->share_name = $request->get('share_name');
        $share->share_price = $request->get('share_price');
        $share->stock_qty = $request->get('share_qty');
        $share->save();
        return redirect('/stocks')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();
        return redirect('/stocks')->with('success', 'Stock has been deleted Successfully');
    }
}
