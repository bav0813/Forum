@extends('base')

@section('content')

    <div class="categorytopic">

            <h6>{{$topics->description}}</h6>
    </div>

    {{--@foreach($comments as $comment )--}}
    <div class="container-fluid">
        <div class="row">
        {{--<div class="aboutauthor">--}}
            {{--<div class="authorabout">--}}
                {{--<div class="col-sm-3 aboutauthor">--}}
                {{--<p class="authorabout">{{$comment->name}}</p>--}}
                {{--<p>Зарегестрирован: {{$user->created_at->format('d.m.Y ')}}</p>--}}
                {{--<p>Сообщения:</p>--}}
            {{--</div>--}}

                {{--<div class="col-sm-8 topic">--}}
                {{--<p>--}}
                    {{--{{$comment->comment}}--}}
                {{--</p>--}}
            {{--</div>--}}



            <div class="topic">
                <table border="1" class="topab">
                    <col class="col1">
                    <col class="col2">
                    <tr>
                        <th>Автор</th>
                        <th>Сообщения</th>
                    </tr>
                    @foreach($comments as $comment )
                        <tr>
                            <td class="authorab">  <h5 class="authorname">{{$comment->name}}</h5>
                                <p>Зарегестрирован: {{(new DateTime ($comment->usr_created))->format('d.m.Y ')}}</p>
                                <p>Сообщения:</p></td>


                            <td class="sometext">{{$comment->comment}}</td>

                        </tr>
                    @endforeach
                </table>
            </div>







    <div class="message">

    <form action="/{{$category_en}}/{{$topics->id}}/comments" method="post" id="message">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <p><b>Введите сообщение:</b></p>
        <p><textarea rows="5" cols="80" name="comment_body"></textarea></p>
        <p><input type="submit" value="Отправить"></p>
    </form>

    </div>

</div>
    </div>


@endsection