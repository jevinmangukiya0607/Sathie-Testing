<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <!-- <img src="assets/img/navbar-logo.svg" alt="..." /> -->
                <p>Sathie.in</p>
            </a>
            <div class="navbar-combined" id="navbarResponsive">
                <div class="notification">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="profile-button" onclick="menuToggle();">
                    <div class="profile-pic">
                        <img src="https://media.istockphoto.com/photos/funny-winking-kitten-picture-id1267021092?k=20&m=1267021092&s=612x612&w=0&h=yzwxZXklHn5NwDTgKmbq2Ojtg3pga6j8K3oT7lLneAY="
                            alt="">
                    </div>
                    <div class="service-centre-name">
                        {{ Auth::user()->name }}
                    </div>
                </div>
                <div class="profile-menu">
                    <ul>
                        <li>
                            <i class="fa-solid fa-user-pen"></i>
                            <a href="{{ url('edit-profile') }}">Edit Profile</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-rotary"></i>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-id-card-clip"></i>
                            <a href="{{ url('about-us') }}">About Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-shield-keyhole"></i>
                            <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-info"></i>
                            <a href="">Help</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>