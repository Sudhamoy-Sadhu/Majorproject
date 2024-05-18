@extends('Admin.dashboard_layout')
@section('title')
    Products
@endsection
@section('main')
    <!-- Include Font Awesome CSSEta chere rakh dekhchi okok  -->
    <div class="heading">
        <div class="part1">
            <h1>Manage Products</h1>
            <a href="/productadd">
                <input type="button" class="add-product-btn" value="Add Product">
            </a>
        </div>
    </div>
    <div class="part2">
        <form>
            <input type="text" placeholder=" &#128269; search for name,id etc" />
        </form>

        <div class="entries">
            <h4>Show Entries</h3>
                <select name="" id="">
                    <option value="000">000</option>
                </select>
        </div>
    </div>

    <table class="content-table">
        <tr class="heading">
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
            <tr class="afterheading">
                <td>{{ $product->Name }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Description }}</td>
                <td>{{ $product->Total_Qty }}</td>

                <td class="update">
                    <a href="/product/{{ $product->id }}/edit">
                        <button type="submit" class="btn-edit"><i class='bx bxs-pencil sa'></i></button>
                    </a>
                    <a href="/product/{{$product->id}}/delete">
                        <button type="submit" class="btn-delete"><i class='bx bxs-cart-add sa'></i></button>
                    </a>
                </td>


            </tr>
        @endforeach
    </table>
@endsection
