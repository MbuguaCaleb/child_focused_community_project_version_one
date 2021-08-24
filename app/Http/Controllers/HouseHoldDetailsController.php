<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HouseHoldDetailsRequest;
use App\Models\HouseHoldDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

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
    public function index($house_id)
    {


        $house_id = Crypt::decryptString($house_id);
        $custodian_id = Auth::user()->id;


        if (Auth::user()->role == 1) {
            //Only view children from your household if you are a household owner

            $house_hold_details = HouseHoldDetails::where('household_id', $house_id)->where('custodian_id', $custodian_id)->get();
        } else {
            //view all the children from all the households if you are a sponsor
            $house_hold_details = HouseHoldDetails::where('household_id', $house_id)->get();
        }

        return view('households.details.index', ['house_hold_details' => $house_hold_details, 'house_id' => $house_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($house_id)
    {

        $house_id = Crypt::decryptString($house_id);

        return view('households.details.create', ['house_id' => $house_id]);
    }



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
            $houseHoldDetails->dob = Carbon::parse($request->dob)->format('Y-m-d');
            $houseHoldDetails->description = $request->description;
            $houseHoldDetails->profile_picture =   $profileImage;
            $houseHoldDetails->custodian_id =   Auth::user()->id;
            $house_id = $request->house_id;
            $houseHoldDetails->household_id = $house_id;


            $houseHoldDetails->save();

            flash('Child Information Successfully Uploaded')->success();
            return redirect()->route('household-details-index', Crypt::encryptString($house_id));
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
    public function edit($house_child_id)
    {
        $child_id = Crypt::decryptString($house_child_id);

        $house_hold_child_detail = HouseHoldDetails::where('id', $child_id)->first();

        return view('households.details.edit', ['house_hold_child_detail' => $house_hold_child_detail]);
    }


    public function update(HouseHoldDetailsRequest $request, $id)
    {
        try {
            $houseHoldDetails = HouseHoldDetails::find($id);
            $houseHoldDetails->first_name  = $request->first_name;
            $houseHoldDetails->last_name  = $request->last_name;
            $houseHoldDetails->age = $request->age;
            $houseHoldDetails->gender = $request->gender;
            $houseHoldDetails->dob = Carbon::parse($request->dob)->format('Y-m-d');
            $houseHoldDetails->description = $request->description;

            $houseHoldDetails->custodian_id =   Auth::user()->id;
            $house_id = $request->house_id;
            $houseHoldDetails->household_id = $house_id;

            if ($request->hasfile('profile_picture')) {
                $destination = 'uploads/' . $houseHoldDetails->profile_picture;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('profile_picture');
                $extention = $file->getClientOriginalExtension();
                $profileImage = date('YmdHis') . '.' . $extention;
                $file->move('uploads/', $profileImage);
                $houseHoldDetails->profile_picture = $profileImage;
            }
            $houseHoldDetails->update();

            flash('Child Information Successfully Updated')->success();
            return redirect()->route('household-details-index', Crypt::encryptString($house_id));
        } catch (\Throwable $th) {
            return $th->getMessage();
            flash('Sorry! Task Ended with an Error, Please try again later.')->error();
            return back();
        }
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
