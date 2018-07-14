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
                    @php $i=0; @endphp

                    @foreach ($school_topics as $sch_top)
                             @if ($schools->id==$sch_top->subcategory)
                                    <td>{{$sch_top->cnt_sbct}}</td>
                                    @php $i++;  @endphp


                            <td>@foreach ($cnt_subcatcomm as $sbctcomm)
                                       @if ($sch_top->subcategory==$sbctcomm->subcat_id)
                                        {{$sbctcomm->sbcomm}}
                                        @endif
                                @endforeach
                            </td>

                                    <td>@foreach ($subcatcomms as $subcatcomm)
                                        @if ($sch_top->subcategory==$subcatcomm->subcategory)
                                        {{$subcatcomm->comment}}
                                            @break
                                        @endif
                                        @endforeach
                                    </td>


                                @endif
                    @endforeach
                    @if ($i==0) <td> </td> <td> </td> <td> </td>@endif
                </tr>
            @endforeach
        </table>
    </div>

    {{$school->links("pagination::bootstrap-4")}}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        There were some problems while creating topic:
        <br />
        <ul>

            <li>{{ $errors }}</li>
        </ul>
    </div>
@endif



    @endsection