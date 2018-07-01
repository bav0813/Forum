@extends('base')

@section('content')


    {{--<h1>Обсуждение школ/{{$topics[0]->sub_descr}}</h1>--}}
    <h1>Обсуждение школ/{{$sub_descr}}</h1>

    <div class="category">
        <table border="1">
            <col class="col1">
            <col class="col2">
            <col class="col3">
            <col class="col4">
            <tr>
                <th>Обсуждение школ</th>
                <th></th>
                <th>Сообщения</th>
                <th>Последнее сообщение</th>
            </tr>
            @foreach($topics as $topic)
                <tr>
                    <td><a href="/schools/{{$topic->subcategory}}/{{$topic->id}}">{!!$topic->description!!}</a></td>
                    {{--<td><a href="{{ url('/about') }}">Школа 200</a></td>--}}

                    <td></td>
                    <td> @foreach ($cnt_posts as $cnt_post)
                            @if ($cnt_post->topic_id==$topic->id) {{$cnt_post->cnt_comm}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$topic->comment}}</td>
                </tr>
            @endforeach
        </table>
    </div>


    {{$topics->links("pagination::bootstrap-4")}}

    <div class="new topic">
        <form  method="get" action="/createtopicschools/{{$topic->subcategory}}">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            <input type="text" name="topicname">
            <button type="submit">Создать тему</button>
        </form>
    </div>


@endsection