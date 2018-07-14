@extends('base')

@section('content')

    <div class="categorytopic">

            <h6>{{$topics->description}}</h6>
    </div>

    {{--@foreach($comments as $comment )--}}
    <div class="container-fluid">
        <div class="row">

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
                                <p>@if (isset($comment->avatar)) <img src="{{asset ('images/')}}/{{$comment->avatar}}" width="200" height="150"> @endif</p>
                                <p>Зарегестрирован: {{(new DateTime ($comment->usr_created))->format('d.m.Y ')}}</p>
                                <p>@foreach($cnt_user_comments as $cnt_comment)
                                       @if ($cnt_comment->user_id==$comment->user_id)
                                         Сообщений: {{$cnt_comment->cnt_comments}}
                                       @endif
                                   @endforeach</p></td>


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

        <div class="info">
            <p>Сообщения от незарегистрированных пользователе отображаются только после одобрения модератором</p>
        </divн

    </div>



</div>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                There were some problems while storing comment:
                <br />
                <ul>

                    <li>{{ $errors }}</li>
                </ul>
            </div>
    @endif








@endsection