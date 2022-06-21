<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Models\kycModel;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function add_kyc_details(request $request)
    {
        $response=$request->post();
        
        $data = new kycModel;
        $data->first_name = $response['first_name'];
        $data->last_name = $response['last_name'];
        $data->dob = $response['dob'];
        $data->email=$response['email'];
        $data->mobile_no=$response['mobile_no'];
        $data->address=$response['address'];
        $data->city=$response['city'];
        $data->state=$response['state'];
        $data->country=$response['country'];
        $data->pincode=$response['pincode'];
      
        $data->save();


        return Response::json(array(
            'status' => 'success',
            'collected data' => $data->toArray()),
            200
        );
    }
}
