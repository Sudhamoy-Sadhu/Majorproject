@extends('Admin.dashboard_layout')
@section('title')
    Staffs
@endsection
@section('main')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <section class="container">
        <header> Add New Staff </header>
        <form method="post" action="/staff/store" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <label>Name</label><br><input type="text" name="name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Email</label><br><input type="text" name="email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Phone No.</label><br><input type="text" name="phone_no">
                @if ($errors->has('phone_no'))
                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                @endif
            </div>

            <div class="input-box position">

                <label>Position</label><br>
                <div class="column">
                    <div class="select-box">
                        <select name="position">
                            <option value="CEO">CEO</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Analyst">Analyst</option>
                            <option value="Developer">Developer</option>
                        </select>
                        @if ($errors->has('position'))
                            <span class="text-danger">{{ $errors->first('position') }}</span>
                        @endif

                    </div>
                </div>
                <div class="input-box">
                    <label>Date Of Joining</label><br><input type="date" name="date_of_joining">
                    @if ($errors->has('date_of_joining'))
                        <span class="text-danger">{{ $errors->first('date_of_joining') }}</span>
                    @endif
                </div>
                <div class="input-box">
                    <label>Aadhar No.</label><br><input type="text" name="aadhar_no">
                    @if ($errors->has('aadhar_no'))
                        <span class="text-danger">{{ $errors->first('aadhar_no') }}</span>
                    @endif
                </div>
                <div class="input-box">
                    <label>Upload your aadhar image here</label><br>
                    @if ($errors->has('imageName'))
                        <span class="text-danger">{{ $errors->first('imageName') }}</span>
                    @endif
                    <div class="img-box">
                        <i class='bx bxs-cloud-upload'></i>
                        <label for="file-upload" class="custom-file-upload">
                            Drag and drop to browse to choose a file
                        </label>
                        <input id="file-upload" type="file" name="imageName" />

                    </div>
                </div>
                <div class="input-box">
                    <input type="submit" class="savechanges" value="Save changes">
                </div>
        </form>
    </section>
@endsection
