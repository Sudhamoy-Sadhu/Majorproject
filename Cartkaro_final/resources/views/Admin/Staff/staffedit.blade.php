@extends('Admin.dashboard_layout')
@section('title')
    Staffs
@endsection
@section('main')
    <section class="container">
        <header> Edit Staff </header>
        <form action="/staff/{{ $staff->id }}/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <label>Name</label><br>
                <input type="text" name="name" value="{{ old('name', $staff->name) }}">
            </div>
            <div class="input-box">
                <label>Email</label><br>
                <input type="text"name="email" value="{{ old('email', $staff->email) }}">
            </div>
            <div class="input-box">
                <label>Phone No.</label><br>
                <input type="text" name="Phone_no" value="{{old('Phone_no', $staff->Phone_no)}}">
            </div>

            <div class="input-box position">

                <label>Position</label><br>
                {{-- <input type="text" name="position" value="{{ old('position', $staff->position) }}"> --}}

                <div class="column">
                    <div class="select-box">
                        <select name="position">
                            <option value="CEO">CEO</option>
                            <option value="MANAGER">Manager</option>
                            <option value="CASHIER">Cashier</option>
                            <option value="ANALYST">Analyst</option>
                            <option value="DEVELOPER">Developer</option>
                        </select>

                    </div>
                </div>
                <div class="input-box">
                    <label>Date Of Joining</label><br>
                    <input type="text" name="date_of_joining"
                        value="{{ old('date of joining', $staff->date_of_joining) }}">
                </div>
                <div class="input-box">
                    <label>Aadhar No.</label><br>
                    <input type="text" name="aadhar_no" value="{{ old('Aadhar no.', $staff->aadhar_no) }}">
                </div>
                <div class="input-box">
                    <label>Upload your aadhar image here</label><br>
                    <div class="img-box">
                        <i class='bx bxs-cloud-upload'></i>
                        <label for="file-upload" class="custom-file-upload">
                            Drag and drop to browse to choose a file
                        </label>
                        <input id="file-upload" type="file" name="imageName"
                            value="{{ old('imageName', $staff->imageName) }}">
                    </div>
                </div>
                <div class="input-box">
                    <input type="submit" value="Save Staffs" class="savechanges">
                </div>
        </form>
    </section>
    @endsection