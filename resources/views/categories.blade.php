@extends('base')

@section('content')


    <h1>{{$cat_ru}}</h1>
    <div class="category">
        <table border="1">
            <col class="col1">
            {{--<col class="col2">--}}
            <col class="col3">
            <col class="col4">
            <tr>
                <th>{{$cat_ru}}</th>
                {{--<th>Темы</th>--}}
                <th>Сообщения</th>
                <th>Последнее сообщение</th>
            </tr>
            @foreach($topics as $topic)
                <tr>
                    <td><a href="/{{$cat_en}}/{{$topic->id}}">{!!$topic->description!!}</a></td>
                    {{--<td><a href="{{ url('/about') }}">Школа 200</a></td>--}}

                    {{--<td>500</td>--}}
                    <td>@foreach($cnt_topics as $cnt_topic)
                          @if ($cnt_topic->topic_id==$topic->id)
                              {{$cnt_topic->cnt_comm}}
                          @endif
                        @endforeach
                    </td>
                    <td>@foreach($subcatcomms as $subcatcomm)
                        @if ($subcatcomm->tpc_id==$topic->id)
                            {{str_limit($subcatcomm->comment,50)}}
                        @endif
                        @endforeach</td>
                </tr>
            @endforeach
        </table>
    </div>


    @if (Auth::check())
    <div class="new topic">
        <form  method="post" action="{{$cat_en}}/create">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            <input type="text" name="topicname">
            <button type="submit">Создать тему</button>
        </form>
    </div>

    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems while creating topic:
            <br />
            <ul>

                    <li>{{ $errors }}</li>
            </ul>
        </div>
    @endif




    {{$topics->links("pagination::bootstrap-4")}}




@endsection