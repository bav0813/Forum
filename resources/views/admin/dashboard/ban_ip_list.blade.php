@extends('admin.dashboard.index')

@section('content')
    <h1>IP временно заблокированных хостов</h1>

    <form method="post">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="col-md-8">




            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IP</th>
                    <th scope="col">time from</th>
                    <th scope="col">time till</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ipban as $ip)
                    <tr>
                        <th scope="row">{{$ip->id}}</th>
                        <td>{{ $ip->ip }}</td>
                        <td>{{ $ip->time_from }}</td>
                        <td>{{ $ip->time_till }}</td>


                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </form>

    <div class="new_ipban">
        <form  method="post" action="admin/dashboard/ipban/addip4ban">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            <input type="text" name="hostip">
            <button type="submit" class="btn poiskbtn">Добавить хост</button>
        </form>
    </div>


    <br>
    {{$ipban->links("pagination::bootstrap-4")}}

@endsection