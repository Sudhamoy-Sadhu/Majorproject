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
        <header> Add New Product </header>
        <form method="post" action="/product/store" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <label>Name</label><br><input type="text" name="Name">
                @if ($errors->has('Name'))
                    <span class="text-danger">{{ $errors->first('Name') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Description</label><br><input type="text" name="Description">
                @if ($errors->has('Description'))
                    <span class="text-danger">{{ $errors->first('Description') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Price</label><br><input type="text" name="Price">
                @if ($errors->has('Price'))
                    <span class="text-danger">{{ $errors->first('Price') }}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Total Quantity</label><br><input type="text" name="Total_Qty">
                @if ($errors->has('Total_Qty'))
                    <span class="text-danger">{{ $errors->first('Total_Qty') }}</span>
                @endif
            </div>

            <div class="input-box position">
                <div class="input-box">
                    <input type="submit" class="savechanges" value="Save changes">
                </div>
        </form>
    </section>
@endsection
