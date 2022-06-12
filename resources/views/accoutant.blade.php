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
<!-- header  -->
    <header>
        <div class="back">
            <p>Back</p>
        </div>
        <div class="links">
            <p>Services</p>
            <p>Contact</p>
        </div>
    </header>

    <!-- service-data -->

    <section id="service-data" class="service-data-container">
        <div class="clock">
            <div id="Date"></div>
        </div>
        <div class="service">
            <div class="service-icon">
                <img src="{{ asset('image/accountant.png') }} " alt="">
            </div>
            <div class="service-info">
                <h4 class="my-3">Sathie Accountant</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum quo inventore harum ex magni, dicta impedit.</p>

            </div>
        </div>

        <!-- =========== take inputs ========== -->
        <div class="service-input-container">
            <form name="accountant" id="accountant" action="{{ url('accoutant') }}" method="post">
                {{ csrf_field() }}
            <input type="hidden" name="type" value="first">

            <div class="type-of-person input-item">
                <div class="input-item-title">
                    Type of Person / Customer <span>*</span>
                </div>
                <div class="input-item-data">
                    <div class="Employment-list">
                        <input type="radio" id="self-employed" name="employment" value="self-employed">
                        <label for="self-employed">Self-Employed</label>
                    </div>
                    <div class="Employment-list">
                        <input type="radio" id="salaried-employed" name="employment" value="salaried-employed">
                        <label for="salaried-employed">Salaried-Employed</label>
                    </div>
                </div>
            </div>
            <div class="type-of-service input-item">
                <div class="input-item-title">
                    Type of Service <span>*</span>
                </div>
                <div class="input-item-data">
                    <select class="form-select" aria-label="Select Category" required id="category" onchange="submenu()" name="category" placeholder="Select">
                        @foreach($category as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                
            </div>
            <div class="type-of-service input-item">
                <div class="input-item-title">
                    Type of Sub Services <span>*</span>
                </div>
                <div class="input-item-data">
                    <select class="form-select" aria-label="Select Category" id="sub_cat" name="sub_category" placeholder="Select Submenu">
                        <option value="">Sub Category</option>
                    </select>
                </div>

            </div>
            
            <div class="next-btn primary-btn">
                <button type="submit">Go</button>
                <!-- <button onclick="sendMail()">GO</button> -->
            </div>

            <!-- instructions -->
            <div class="instructions">
                <ul>
                    <li>
                        Mandatory fields are marked with an asterisk (*)
                    </li>
                    <li>
                        State Bank Collect is a unique service for paying online to educational institutions,
                        temples, charities and/or any other corporates/institutions who maintain their accounts with
                        the Bank.
                    </li>
                </ul>
            </div>

            </form>
        </div>
    </section>
@endsection

@section('footer')
    <script>
        document.querySelectorAll(".select-wrap").forEach(function (wrap) {
            let select = wrap.querySelector(".custom-select");
            let classes = select.getAttribute("class"),
                id = select.getAttribute("id"),
                name = select.getAttribute("name");
            let template = '<div class="' + classes + '">';
            template +=
                '<span class="custom-select-trigger">' +
                select.getAttribute("placeholder") +
                "</span>";
            template += '<div class="custom-options">';
            select.querySelectorAll("option").forEach(function (option) {
                template +=
                    '<span class="custom-option' +
                    '"data-value="' +
                    option.getAttribute("value") +
                    '">' +
                    option.innerText +
                    "</span>";
            });
            template += "</div></div>";
            let select_wrapper = document.createElement("div");
            select.style.display = "none";
            select_wrapper.innerHTML = `<div class="custom-select-wrapper">${template}</div>`;
            wrap.appendChild(select_wrapper);
        });

        document
            .querySelector(".custom-select-trigger")
            .addEventListener("click", function () {
                document
                    .querySelector(".custom-select-trigger")
                    .closest(".custom-select")
                    .classList.toggle("opened");
            });
        document.querySelectorAll(".custom-option").forEach((option) => {
            option.addEventListener("click", function () {
                option
                    .closest(".select-wrap")
                    .querySelector("select").value = option.getAttribute("data-value");
                option.closest(".custom-select").classList.remove("opened");
                option
                    .closest(".custom-select")
                    .querySelector(".custom-select-trigger").innerText = option.innerText;
            });
        });

        document.querySelectorAll(".select-wraped").forEach(function (wrap) {
            let select = wrap.querySelector(".custom-select");
            let classes = select.getAttribute("class"),
                id = select.getAttribute("id"),
                name = select.getAttribute("name");
            let template = '<div class="' + classes + '">';
            template +=
                '<span class="custom-select-trigger">' +
                select.getAttribute("placeholder") +
                "</span>";
            template += '<div class="custom-options">';
            select.querySelectorAll("option").forEach(function (option) {
                template +=
                    '<span class="custom-option' +
                    '"data-value="' +
                    option.getAttribute("value") +
                    '">' +
                    option.innerText +
                    "</span>";
            });
            template += "</div></div>";
            let select_wrapper = document.createElement("div");
            select.style.display = "none";
            select_wrapper.innerHTML = `<div class="custom-select-wrapper">${template}</div>`;
            wrap.appendChild(select_wrapper);
        });

        
        function submenu(){
            var cat = $('#category').val();    

            token = $("input[type='hidden'][name='_token']").val();

            $.ajax({
                type: "post",
                url:"{{ url('getSubCategory') }}",
                data: {_token:token,cat:cat},
                beforeSend: function () {
                },
                success: function (data) {
                    $('#sub_cat').html(data);    
                },
                error: function () {
                }
            });

        }

        
        const sendMail = () => {
            const mailAdress = "garbdynasty@gmail.com"
            const ccRecipients = "cyberlearnwithzid@gmail.com"
            const subject = encodeURIComponent("This is my subject")
            const body = encodeURIComponent(document.getElementById('service-data').value)
            const link = `mailto:${mailAdress}?cc=${ccRecipients}&subject=${subject}&body=${body}`
            window.location.href = link;

        };
    </script>
@endsection
