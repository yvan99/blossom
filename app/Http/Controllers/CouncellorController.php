<?php

namespace App\Http\Controllers;
use App\Models\Councelor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CouncellorController extends Controller
{
    public function CreateCouncellor(Request $request){
        $rules = [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telephone' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->only('fullname','email','password','telephone'))->withErrors($validator);
        } else {

            $councellorData = $request->input();

            try {
                $councelor = new Councelor();
                $councelor-> couns_fullnames = $councellorData['fullname'];
                $councelor-> email = $councellorData['email'];
                $councelor->password = bcrypt('password');
                $councelor->couns_telephone = $councellorData['telephone'];
                $councelor->save();
                return redirect()->back()->with('status', "Councellor created successfully");
            } catch (Exception $e) {
                return redirect()->back()->with('status', "operation failed");
            }
    }
}}
