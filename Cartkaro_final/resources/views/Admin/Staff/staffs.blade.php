@extends('Admin.dashboard_layout')
@section('title')
    Staffs
@endsection
@section('main')
    <div class="heading">
        <div class="part1">
            <h1>Manage Staffs</h1>
            <a href="/staffadd">
                <input type="button" class="add-product-btn" value="Add Staff">
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
    </div>

    <table class="content-table">
        <tr class="heading">
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Phone No.</th>
            <th>Action</th>
        </tr>
       <tbody>
            @foreach ($staffs as $staff)
            <tr class="afterheading">
                <td>{{$staff->name}}</td>
                <td>{{$staff->email}}</td>
                <td>{{$staff->position}}</td>
                <td>{{$staff->phone_no}}</td>

                <td class="update">
                <a href="/staff/{{$staff->id}}/edit">
                <button type="submit"class="btn-edit"><i class='bx bxs-pencil'></i></button>
                </a>
                <a href="/staff/{{$staff->id}}/delete">
                <button type="submit"class="btn-delete"><i class='bx bxs-basket'></i></button>
                </a>
                </td>
                
              
            </tr>
            @endforeach
       </tbody>

    </table>
@endsection
