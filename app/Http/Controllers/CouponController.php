<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function test()
    {
        $coupon = Coupon::where('code', '123')->first();

        if (@$coupon->is_valid){
            dd('True');
        }

        dd('Not found');

    }

}
