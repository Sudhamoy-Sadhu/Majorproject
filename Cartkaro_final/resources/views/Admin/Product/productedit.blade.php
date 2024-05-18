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
        <header> Edit Product </header>
        <form action="/product/{{ $products->id }}/update" method="POST" class="form">
            <div class="input-box">
                <label>Name</label><br><input type="text" value="{{ old('name', $products->Name) }}">
            </div>
            <div class="input-box">
                <label>Description</label><br><input type="text" value="{{ old('description', $products->Description) }}">
            </div>
            <div class="input-box">
                <label>Price</label><br><input type="text" value="{{ old('price', $products->Price) }}">
            </div>
            <div class="input-box">
                <label>Total Quantity</label><br><input type="text" value="{{ old('Total_Qty', $products->Total_Qty) }}">
            </div>

            <div class="input-box position">
                <div class="input-box">

                    <div class="input-box">
                        <input type="submit" value="Save products" class="savechanges">
                    </div>
        </form>
    </section>
@endsection
