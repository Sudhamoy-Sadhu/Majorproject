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

            {{-- <div id="productFormContainer" style="display: none;">
                <h2>Add New Product</h2>
                <form id="productForm">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" required><br><br>

                    <label for="productPrice">Price:</label>
                    <input type="number" id="productPrice" name="productPrice" required><br><br>

                    <label for="productDescription">Description:</label><br>
                    <textarea id="productDescription" name="productDescription" required></textarea><br><br>

                    <label for="productCategories">Categories:</label><br>
                    <input type="text" id="productCategories" name="productCategories" required><br><br>

                    <button type="submit">Add Product</button>
                </form>
            </div> --}}
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
            <th>Category</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
            <tr class="afterheading">
                <td>{{ $product->name }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Categories }}</td>
                <td>{{ $product->Description }}</td>

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
