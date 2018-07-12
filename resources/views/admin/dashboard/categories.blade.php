@extends('admin.dashboard.index')

@section('content')
    <h1>Categories Management</h1>

    <form method="post">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="col-md-8">




            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Description_en</th>
                    <th scope="col">is_active</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->description_en }}</td>
                        <td><input class="form-check-input" type="checkbox" name="{{$category->id}}" id="isactivecategory{{$category->id}}"  @if ($category->is_active) checked @endif></td></td>


                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </form>

    <div class="new_ipban">
        <form  method="post" action="/admin/dashboard/categories/addcategory">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            <input type="text" name="description">
            <input type="text" name="description_en">

            <button type="submit" class="btn poiskbtn">Добавить категорию</button>
        </form>
    </div>


    <br>
    {{$categories->links("pagination::bootstrap-4")}}

@endsection