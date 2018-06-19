@extends('base')

@section('content')

    <div class="category">
        <table border="1">
            <col class="col1">
            <col class="col2">
            <col class="col3">
            <col class="col4">
            <tr>
                <th><a href="">Школа 200</a></th>
                <th>Ответов</th>
                <th>Проссмотров</th>
                <th>Последнее сообщение</th>
            </tr>
            <tr>
                <td><a href="{{ url('/about/topic') }}">Незаконченный ремонт</a>
                    <br>
                    <span class="authorr">автор:</span> <a href="" class="author">Обезьянка</a>
                </td>
                <td>500</td>
                <td>8000</td>
                <td>Re: Part time linux user
                    by phd21 View the latest post
                    Fri Jun 15, 2018 9:28 pm</td>
            </tr>
            <tr>
                <td><a href="">Обвалилась плитка в туалете</a></td>
                <td>500</td>
                <td>8000</td>
                <td>Re: Part time linux user
                    by phd21 View the latest post
                    Fri Jun 15, 2018 9:28 pm</td>
            </tr>
            </tr>
            <tr>
                <td><a href="">Проблемы с паркетом</a></td>
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