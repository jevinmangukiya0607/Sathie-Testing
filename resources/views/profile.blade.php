@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
<script src="{{ asset('js/toggleMenu.js') }}"></script>
@endsection

@section('content')
<div class="profile-container">
    <form action="{{ url('profile_update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $user->id }}">

        
        

        <!-- <img src="{{ url('image/'.$user->photo) }}" height="100" /> -->


        <div class="pic-container">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview"
                        style="background-image: url("https://media.istockphoto.com/photos/funny-winking-kitten-picture-id1267021092?k=20&m=1267021092&s=612x612&w=0&h=yzwxZXklHn5NwDTgKmbq2Ojtg3pga6j8K3oT7lLneAY=") alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-form-container">
                <h3 class="text-center">
                    Edit Personal Information
                </h3>
                <div class="row">
                    <div class="Inputfield">
                        <label class="profile_details_text">Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="Inputfield">

                        <label class="profile_details_text">Email Address:</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="Inputfield">

                        <label class="profile_details_text">Mobile Number:</label>
                        <input type="tel" name="mobile_number" class="form-control" value="{{ $user->mobile_number }}" required pattern=[0-9]{10}>

                    </div>
                </div>
                <div class="row">
                    <div class="Inputfield">

                        <label class="profile_details_text">Date Of Birth:</label>
                        <input type="date" name="date_of_birth" class="form-control" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="Inputfield">

                        <label class="profile_details_text">Address</label>
                        <input type="text" name="address" class="form-control" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="submit">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </div>
            
        </div>
    </form>
</div>
@endsection

@section('footer')

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imagePreview").css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imageUpload").change(function () {
    readURL(this);
});
</script>

@endsection