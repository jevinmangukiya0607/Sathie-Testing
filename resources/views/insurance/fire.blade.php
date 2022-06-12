@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <style>
        #Date {
            font-weight: 500;
            font-size: 24px;
            letter-spacing: 0.02em;
            color: #000000;
        }
    </style>
    
@endsection

@section('content')

<form id="frmFeeParams" method="post" autocomplete="off" action="{{ url('insurance') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="category_id" value="{{ $category }}"> 
    <input type="hidden" name="type_of_person" value="{{ $employement }}"> 


    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading heading_active">
                <h4 class="panel-title">
                    Provide details for Fire Insurance
                </h4>
            </div>
            <div class="panel-collapse">
                <div class="panel-body">
                    <div class="row_accord">
                        <!--    <label>Select Payment Category *</label> -->
                        <!--  EMRO starts -->
                        <label>Select Type of Service *</label> <!--  EMRO ends -->
                        <select disabled>
                            @foreach($categories as  $value)
                                <option>{{ $value }}</option>
                            @endforeach
                        </select>

                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Name *
                        </label>
                        <input type='Text' name='name' maxLength='75' value='' id='name' required />
                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Address *
                        </label>
                        <input type='Text' name='address' maxLength='125' value='' id='address' required />
                    </div>
                    

                    <div class='row_accord'><label>
                            Risk Location Address *
                        </label>
                        <input type='Text' name='risk_address' maxLength='125' value='' id='risk_address' required />
                    </div>

                    <div class='row_accord'><label>
                            Building Value
                        </label>
                        <input type='Text' name='building_value' maxLength='75' value='' id='building_value' />
                    </div>

                    <div class='row_accord'><label>
                        Stock Value ( Row ,In Process & Finish Good )
                        </label>
                        <input type='Text' name='stock_value' maxLength='75' value='' id='stock_value' />
                    </div>

                    <div class='row_accord'><label>
                        P & M Value
                        </label>
                        <input type='Text' name='pm_value' maxLength='75' value='' id='pm_value' />
                    </div>    

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Mobile/Contact No *
                        </label>
                        <input type='Text' name='mobile_number' maxLength='75' value='' id='mobile_number' required />
                    </div>
                    

                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            E-mail Id *
                        </label>
                        <input type='Text' name='email_id' maxLength='75' value='' id='email_id' required />
                    </div>
                                        
                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            Last 3 Years Claim Confirm
                        </label>
                        <input type='file' name='three_yr_claim_confirm' maxLength='75' value='' id='three_yr_claim_confirm'
                            accept="image/png, image/jpg, image/jpeg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_btn">
        <div class="primary-btn submit-service-data">
            <button type="submit" class="btn" value="Submit"
                >Submit</button>
        
        <div class="reset-service-data secondary-btn">
            <button type="reset" class="btn" value="Reset"
                >Reset</button>
        </div>
    </div>

    <div class="instructions">
        <ul>
            <li>Mandatory fields are marked with an asterisk (*)</li>
            <li>The payment structure document if available will contain detailed instructions
                about the online payment process.</li>
            <li>Date specified(if any) should be in the format of 'ddmmyyyy'. Eg., 02082008</li>
            <li>For Amount fields, only numbers are allowed and for free text fields
                (mandatory), following special characters are allowed: . / @ - _ &</li>
        </ul>
    </div>

</form>
@endsection

@section('footer')
    
@endsection
    