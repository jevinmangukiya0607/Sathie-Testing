<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_detail')) {
            Schema::create('user_detail', function (Blueprint $table) {
                $table->increments('id');

                $table->integer('user_id')->nullable();
                $table->integer('category_id')->nullable();
                $table->integer('subcategory_id')->nullable();
                $table->string('status')->nullable();

                $table->string('type_of_person')->nullable();
                $table->text('name')->nullable();
                $table->text('address')->nullable();
                $table->text('date_of_birth')->nullable();
                $table->text('mobile_number')->nullable();
                $table->text('email_id')->nullable();
                $table->text('pancard_filename')->nullable();
                $table->text('adharcard_filename')->nullable();
                $table->text('last_year_policy')->nullable();
                $table->text('rc')->nullable();
                $table->text('claim_information')->nullable();
                $table->text('sum_insured')->nullable();
                $table->text('three_yr_policy')->nullable();
                $table->text('photo')->nullable();
                $table->text('smoker_non_smoker')->nullable();
                $table->text('alcohol')->nullable();
                $table->text('height')->nullable();
                $table->text('weight')->nullable();
                $table->text('pre_exist_disease')->nullable();
                $table->text('three_year_policy')->nullable();
                $table->text('passport_file')->nullable();
                $table->text('travel_no_days')->nullable();
                $table->text('flight_ticket')->nullable();
                $table->text('no_of_employee')->nullable();
                $table->text('no_of_month')->nullable();
                $table->text('building_value')->nullable();
                $table->text('no_of_years')->nullable();
                $table->text('three_yr_claim_confirm')->nullable();
                $table->text('risk_location_address')->nullable();
                $table->text('stock_value')->nullable();
                $table->text('pm_value')->nullable();
                $table->text('resume_file_name')->nullable();

                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_detail');
    }
}
