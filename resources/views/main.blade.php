@extends('base')

@section('content')



<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
      <th><a href="{{ url('/subsection') }}">Обсуждение школ</a></th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>

    @foreach($school as $school)
   <tr>
       <td><a href="">{!!$school->name!!}</a></td>
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

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Поступление</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Выпускной</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Преподаватели</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Организация экскурсий</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Дополнительные секции</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Учебники и литература</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
</table>
</div>

<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>
    <th>Беседка</th>
    <th>Темы</th>
    <th>Сообщения</th>
    <th>Последнее сообщение</th>
  </tr>
   <tr>
    <td><a href="">Topic1</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    <tr>
    <td><a href="">Topic2</a></td>
    <td>500</td>
      <td>8000</td>
    <td>Re: Part time linux user
by phd21 View the latest post
Fri Jun 15, 2018 9:28 pm</td>
  </tr>
    </tr>
   <tr>
    <td><a href="">Topic3</a></td>
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