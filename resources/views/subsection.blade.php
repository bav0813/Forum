@extends('base')

@section('content')

    <div class="category">
        <table border="1">
            <col class="col1">
            <col class="col2">
            <col class="col3">
            <col class="col4">
            <tr>
                <th>Обсуждения школ</th>
                <th>Темы</th>
                <th>Сообщения</th>
                <th>Последнее сообщение</th>
            </tr>
            <tr>
                <td><a href="{{ url('/about') }}">Школа 200</a></td>
                <td>500</td>
                <td>8000</td>
                <td>Re: Part time linux user
                    by phd21 View the latest post
                    Fri Jun 15, 2018 9:28 pm</td>
            </tr>
            <tr>
                <td><a href="">Школа 235</a></td>
                <td>500</td>
                <td>8000</td>
                <td>Re: Part time linux user
                    by phd21 View the latest post
                    Fri Jun 15, 2018 9:28 pm</td>
            </tr>
            </tr>
            <tr>
                <td><a href="">Гимназия "Академия"</a></td>
                <td>500</td>
                <td>8000</td>
                <td>Re: Part time linux user
                    by phd21 View the latest post
                    Fri Jun 15, 2018 9:28 pm</td>
            </tr>
            </tr>
        </table>
    </div>




    @endsection