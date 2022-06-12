@extends('layouts.app')

@section('content')
<!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="container-title">Services</div>
            <div class="service-card">

                <div class="service">
                    <a href="{{ url('accoutant') }}"> 
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Accountant</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ
                            sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="{{ url('/home') }}">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Recruiter</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="{{ url('banker') }}">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Banker</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="{{ url('insurance') }}">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Insurance</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="https://b2b.easemytrip.com/UserRegistration/UserRegistration" target="_blank">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Tourism</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Payment Service</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
                <div class="service">
                    <a href="">
                        <div class="service-icon">
                            <img src="{{ asset('image/accountant.png') }}" alt="">
                        </div>
                        <h4 class="my-3">Sathie Copy Centret</h4>
                        <p class="text-muted">sathie accountant service is basically eadsad sasdasrasd aedadawQ sathie
                            accountant service is basically eadsadsa sdasras daed adawQ</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
@endsection
