@extends('Admin.dashboard_layout')
@section('title')
    Settings
@endsection
@section('main')
<style>
    
</style>
    <div class="heading">
        <div class="part1">
            <h1>Profile</h1>
        </div>
        <div class="mainprofile-section">
            <div class="profile-menu">
                <div class="profile-img">
                    {{-- <img src="images\image 2.png" alt=""> --}}
                    <div class="name-section" style="background: #604BE8; width:100%;">
                        <h3>{{Auth::user()->name}}</h3>
                        <h6>{{Auth::user()->role}}</h6>
                    </div>
                </div>
                <div class="box">

                </div>
                <div class="under-menu">
                    <a href="/settings" class="active"><i class='bx bxs-info-circle'></i>Personal Information</a>
                    <a href="/settings2"><i class='bx bxs-group'></i>Login & Password</a>
                    <a href="{{route('logout')}}"><i class='bx bxs-log-out-circle'></i>Logout</a>
                </div>

            </div>
            <div class="personal-info">
                <div class="heading">
                    <h3>Personal Information</h3>
                </div>
                <form action="" method="post">
                    <div class="row">
                        <div class="section">
                            <label for="Name">Name</label>
                            <input type="text" value="{{Auth::user()->name}}">
                        </div>
                        <div class="section">
                            <label for="Name">Email</label>
                            <input type="text" value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="section">
                            <label for="Name">Location</label>
                            <input type="text">
                        </div>
                        <div class="section">
                            <label for="Name">Pin no</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="section">
                            <label for="Name">Phone No.</label>
                            <input type="text" value="{{Auth::user()->phone_no}}">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Save Changes">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
