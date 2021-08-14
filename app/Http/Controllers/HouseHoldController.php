<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHouseHoldRequest;
use App\Models\HouseHold;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HouseHoldController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        $details = HouseHold::all();
        return view('households.index', ['details' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('households.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHouseHoldRequest $request)
    {

        try {
            HouseHold::create([
                'no_of_children' => auth()->id(),
                'country' => $request->country,
                'custodian_id' => Auth::user()->id,
                'custodian_name' => Auth::user()->username
            ]);
            flash('House Hold Created Successfully!')->success();
            return redirect('/household/index');
        } catch (\Throwable $th) {
            flash('Sorry! Please try again.')->error();
            return back();
        }
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
