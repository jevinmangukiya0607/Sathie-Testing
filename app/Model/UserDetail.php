<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class UserDetail extends Model
{
    protected $table ='user_detail';
    
    protected $fillable = [
        'user_id','category_id','subcategory_id','status','type_of_person','name','address','date_of_birth','mobile_number','email_id','pancard_filename','adharcard_filename','last_year_policy','rc','claim_information','sum_insured','three_yr_policy','photo','smoker_non_smoker','alcohol','height','weight','pre_exist_disease','three_year_policy','passport_file','travel_no_days','flight_ticket','no_of_employee','no_of_month','building_value','no_of_years','three_yr_claim_confirm','risk_location_address','stock_value','pm_value','resume_file_name','gender','bank_statement','temp_status',
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = [];
}
