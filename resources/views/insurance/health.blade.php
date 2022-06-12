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
                    Provide details for service
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
                            Gender *
                        </label>
                        <select name='gender' id='gender' class="" required>
                            <option value=''>--Select Gender--</option>
                            <option value='female'>Female</option>
                            <option value='male'>Male</option>
                        </select>
                    </div>


                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Address *
                        </label>
                        <input type='Text' name='address' maxLength='125' value='' id='address' required />
                    </div>
                                        

                    <div class='row_accord'><label>
                            Sum Insured
                        </label>
                        <input type='Text' name='sum_insured' maxLength='75' value='' id='sum_insured' required />
                    </div>    

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Date of Birth(DD-MM-YY) *
                        </label>
                        <input type='Text' name='date_of_birth' maxLength='75' value='' id='date_of_birth' required/>
                    </div>
                    

                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            Aadharcard *
                        </label>
                        <input type='file' name='adharcard_filename' maxLength='75' value='' id='adharcard_filename'
                            accept="image/png, image/jpg, image/jpeg" required />
                    </div>
                    

                    <div class='row_accord'><label>
                            Height
                        </label>
                        <input type='Text' name='height' maxLength='75' value='' id='height' required />
                    </div>

                    <div class='row_accord'><label>
                            Weight
                        </label>
                        <input type='Text' name='weight' maxLength='75' value='' id='height' required />
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
                    
                    <div class='row_accord'><label>
                            Pre-existing disease
                        </label>
                        <input type='Text' name='pre_exist_disease' maxLength='75' value='' id='pre_exist_disease' required />
                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            For Port Case Required Last 3 Years Policy
                        </label>
                        <input type='file' name='three_year_policy' maxLength='75' value='' id='three_year_policy'
                            accept="image/png, image/jpg, image/jpeg" required />
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
            <button type="button" class="btn" value="Reset"
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
    