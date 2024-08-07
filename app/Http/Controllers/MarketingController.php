<?php

namespace App\Http\Controllers;

use App\Exports\MarketingsExport;
use App\Models\Marketing;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Marketing.index', [
            'marketings' => Marketing::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Marketing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'branch' => 'required',  
            'item' => 'required',  
            'purpose' => 'required',  
            'requestor' => 'required',  
            'quantity' => 'required',  
            'date_received' => 'required',  
            'status' => 'required'
        ]);

        Marketing::create($request->all());
        return back();
    }

    /**
     * Export the specified resource.
     */
    public function export()
    {
        //
        return Excel::download(new MarketingsExport, 'marketings.xlsx');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketing $marketing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketing $marketing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketing $marketing)
    {
        //
    }
}
