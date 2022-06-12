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

<form id="frmFeeParams" method="post" autocomplete="off" action="">
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
                            <option>Goods and Service Tax</option>
                        </select>

                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Name *
                        </label>
                        <input type='Text' name='outref11' maxLength='75' value='' id='outref11' />
                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Gender *
                        </label>
                        <select name='outref14' id='outref14' class="custom-select">
                            <option value=''>--Select Gender--</option>
                            <option value='female'>Female</option>
                            <option value='male'>Male</option>
                        </select>
                    </div>
                    

                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Date of Birth(DD-MM-YY) *
                        </label>
                        <input type='Text' name='outref12' maxLength='75' value='' id='outref12'/>
                    </div>
                    <input type='hidden' name='controls' value='outref12' id='controls' />
                    <input type='hidden' name='validateMandatory' id='validateMandatory'
                        value='outref12#SEP#Date of Birth(DD-MM-YY)#SEP#(^[0-9a-zA-Z&_. /@-]{1,76}$)#SEP#Date of Birth(DD-MM-YY) Should be valid.' />


                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Address *
                        </label>
                        <input type='Text' name='outref13' maxLength='125' value='' id='outref13' />
                    </div>
                    <input type='hidden' name='controls' value='outref13' id='controls' />
                    <input type='hidden' name='validateMandatory' id='validateMandatory'
                        value='outref13#SEP#Address1#SEP#(^[0-9a-zA-Z&_. /@-]{1,76}$)#SEP#Address1 Should be valid.' />


                    <!--Populating fields from control tag-->
                    <div class='row_accord'><label>
                            Mobile/Contact No *
                        </label>
                        <input type='Text' name='outref14' maxLength='75' value='' id='outref14' />
                    </div>
                    <input type='hidden' name='controls' value='outref14' id='controls' />
                    <input type='hidden' name='validateMandatory' id='validateMandatory'
                        value='outref14#SEP#Mobile/Contact No#SEP#(^[0-9a-zA-Z&_. /@-]{1,76}$)#SEP#Mobile/Contact No Should be valid.' />



                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            E-mail Id *
                        </label>
                        <input type='Text' name='outref15' maxLength='75' value='' id='outref15' />
                    </div>
                    <input type='hidden' name='controls' value='outref15' id='controls' />
                    <input type='hidden' name='validateMandatory' id='validateMandatory'
                        value='outref15#SEP#E-mail Id#SEP#(^[0-9a-zA-Z&_. /@-]{1,76}$)#SEP#E-mail Id Should be valid.' />

                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            Aadharcard *
                        </label>
                        <input type='file' name='outref16' maxLength='75' value='' id='outref16'
                            accept="image/png, image/jpg, image/jpeg" />
                    </div>

                    <!--Populating fields from control tag-->
                    <div class='row_accord'>
                        <label>
                            Pancard *
                        </label>
                        <input type='file' name='outref17' maxLength='75' value='' id='outref17'
                            accept="image/png, image/jpg, image/jpeg" />
                    </div>

                    <div class='row_accord'>
                        <label>
                            Bank Statement *
                        </label>
                        <input type='file' name='outref17' maxLength='75' value='' id='outref17'
                            accept="image/png, image/jpg, image/jpeg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_btn">
        <div class="primary-btn submit-service-data">
            <button type="button" class="btn" value="Submit"
                onclick="javascript:validateAndSubmitFeeParams('frmFeeParams')">Submit</button>
        
        <div class="reset-service-data secondary-btn">
            <button type="button" class="btn" value="Reset"
                onclick="javascript:resetFeeParams('frmFeeParams')">Reset</button>
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

    <input type="hidden" name="__ncforminfo"
        value="Vw3n7_TQg0mYrsnVgEf2kaaoYfsuaSUmmi121stx_2QSWcIOaCNrOtBcD3wtuOvm5iTl7Jhl4m7okHFXeFHI5vEsv738f1_TLexPlIvmyxfVwRTUdvOWItWIJrAMP5HuQX1x3Z441A4qH0edNM4XAltwoGLCLBLvzkQqLNTryCfANUGCPlX1ESkNijHD5-4L3rwiWIUwzOq9A0bjAnz6G3xvNoV2yTT5" />
</form>
@endsection

@section('footer')
    
@endsection
