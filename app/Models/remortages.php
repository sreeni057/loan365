<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
class remortages extends Model
{
    use SoftDeletes;
    /*Table Name*/
	protected $table         = 'remortages';

	protected $fillable = [
        'user_id', 'mortgage_type', 'remortgage_type','value_of_home','monthly_mortages_repay','total_years_mortages','balance_current_mortages','end_date_mortgage_introductory','applying_type','earn_each_year','stamp_duty','rental_cover_property','outstanding_cc_balances','monthly_repay_loan','country_court_judegment','iva','appeals_type','introductory_rate','capital_type','user_name','user_email','user_dob','monthly_rental_cover'
    ];
	/*Delete row*/
	public static function deletevalues($id)
	{
		$deletevalues        = DB::table('remortages')
    						 	->where('id',$id)
								->delete();
    	return $deletevalues;
	}
}
