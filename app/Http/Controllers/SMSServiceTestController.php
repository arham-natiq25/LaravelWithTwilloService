<?php

namespace App\Http\Controllers;

use App\Services\SmsService;
use Illuminate\Http\Request;

class SMSServiceTestController extends Controller
{
    public function index(Request $request)
    {
        try {
            $otp = mt_rand(100000, 999999);
            SmsService::sendSms($request->phone,$otp);
            return response()->json(
                [
                    'message'=>'Message sent successfully'
                ]
            );
            }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }
}
