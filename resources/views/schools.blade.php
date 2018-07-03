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

                    @foreach ($school_topics as $sch_top)
                             @if ($schools->id==$sch_top->subcategory)
                                    <td>{{$sch_top->cnt_sbct}}</td>

                            <td>@foreach ($cnt_subcatcomm as $sbctcomm)
                                       @if ($sch_top->subcategory==$sbctcomm->subcat_id)
                                    {{$sbctcomm->sbcomm}}

                                        @endif
                                    @endforeach
                            </td>

                                    <td>Re: Part time linux user
                                        by phd21 View the latest post
                                        Fri Jun 15, 2018 9:28 pm</td>


                                @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>


    {{$school->links("pagination::bootstrap-4")}}




    @endsection