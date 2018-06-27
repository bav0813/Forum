@extends('base')

@section('content')


<h1>Обсуждение школ</h1>
    <div class="category">
        <table border="1">
            <col class="col1">
            <col class="col2">
            <col class="col3">
            <col class="col4">
            <tr>
                <th>Обсуждение школ</th>
                <th>Темы</th>
                <th>Сообщения</th>
                <th>Последнее сообщение</th>
            </tr>
            @foreach($school as $schools)
                <tr>
                    <td><a href="/schools/{{$schools->id}}">{!!$schools->description!!}</a></td>
                    {{--<td><a href="{{ url('/about') }}">Школа 200</a></td>--}}

                    <td>500</td>
                    <td>8000</td>
                    <td>Re: Part time linux user
                        by phd21 View the latest post
                        Fri Jun 15, 2018 9:28 pm</td>
                </tr>
            @endforeach
        </table>
    </div>


    {{$school->links("pagination::bootstrap-4")}}




    @endsection