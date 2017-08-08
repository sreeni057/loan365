<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
class purchases extends Model
{
    use SoftDeletes;
    /*Table Name*/
	protected $table = 'purchases';

	protected $fillable = [
        'user_id', 'mortgage_type', 'buyer_type','applying_type','earn_each_year','stamp_duty','rental_cover','outstanding_cc_balances','monthly_repay_loan','country_court_judegment','iva','appeals_type','introductory_rate','capital_type','user_name','user_email','user_dob','updated_at','deleted_at'
    ];
	/*Delete row*/
	public static function deletevalues($id)
	{
		$deletevalues         = DB::table('purchases')
    						 	->where('id',$id)
								->delete();
    	return $deletevalues;
	}
	/*validation*/
	public static function validation($inputArr)
    {

        $rules    =[
			                'mortgage_type' => 'required',
			                'buyer_type' => 'required',
                   ];
                  

        $messages = array(
				            'mortgage_type.required' => 'Please Select Mortgage Type',
				            'buyer_type.required' => 'Please Select Buyer Type',
        				 );
        $validator = \Validator::make($inputArr, $rules, $messages);
        return $validator;
    }
	
}
