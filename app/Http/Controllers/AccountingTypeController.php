<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountingType;

class AccountingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the types
        $types = AccountingType::all();
        // Return the appropriate view
        return view('account.index')->withTypes($types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the appropriate view
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new object of AccountingType
        $accounting_type = new AccountingType;

        // Assign the request values to the new accounting type
        $accounting_type->name = $request->input('name');

        // Save the new accountingtype
        $accounting_type->save();

        // Return the appropriate view
        return redirect()->route('accountType.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get the targeted accounting type
        $accounting_type = AccountingType::find($id);
        // Return the appropriate view
        return view('account.edit')->withAccountingType($accounting_type);
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
        // Get the targeted accounting type
        $accounting_type = AccountingType::find($id);

        // Update the properties of the accounting type
        $accounting_type->name = $request->input('name');

        // Save the updates
        $accounting_type->save();

        // Return the appropriate view
        return redirect()->route('accountType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the targeted accounting type
        $accounting_type = AccountingType::find($id);

        // Delete the record
        $accounting_type->delete();

        // Return the appropriate view
        return redirect()->route('accountType.index');
    }
}
