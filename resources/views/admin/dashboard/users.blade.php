@extends('admin.dashboard.index')

@section('content')
    <h1>Users Info:</h1>

    <form method="post">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="col-md-4">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">is_active</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><input class="form-check-input" type="checkbox" name="{{$user->id}}" id="isactiveuser{{$user->id}}"  @if ($user->is_active) checked @endif></td>

                    </tr>
                @endforeach


                </tbody>
            </table>
            {{--<input type="submit" value="Submit">--}}

        </div>
    </form>
    <br>



@endsection