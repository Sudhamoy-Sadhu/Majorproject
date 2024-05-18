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
            </div>

            <div class="input-box position">

                <label>Position</label><br>
                {{-- <input type="text" name="position" value="{{ old('position', $staff->position) }}"> --}}

                <div class="column">
                    <div class="select-box">
                        <select name="position">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>

                    </div>
                </div>
                
                <div class="input-box">
                    <input type="submit" value="Save Staffs" class="savechanges">
                </div>
        </form>
    </section>
    @endsection
