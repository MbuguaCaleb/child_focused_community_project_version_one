<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HouseHoldDetailsRequest;
use App\Models\HouseHoldDetails;


class HouseHoldDetailsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('households.details.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('households.details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(HouseHoldDetailsRequest $request)
    {

        try {

            //uploading the image
            if ($image = $request->file('profile_picture')) {
                $destinationPath = 'uploads/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
            }

            //Save image to database
            $houseHoldDetails = new HouseHoldDetails();
            $houseHoldDetails->first_name  = $request->first_name;
            $houseHoldDetails->last_name  = $request->last_name;
            $houseHoldDetails->age = $request->age;
            $houseHoldDetails->gender = $request->gender;
            $houseHoldDetails->dob = $request->dob;
            $houseHoldDetails->description = $request->description;
            $houseHoldDetails->profile_picture =   $profileImage;

            $houseHoldDetails->save();

            flash('image successfully uploaded')->success();
            return redirect()->route('household-details-index');
        } catch (\Throwable $th) {
            return $th->getMessage();
            flash('Sorry! Task Ended with an Error, Please try again later.')->error();
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
