@extends('base')

@section('content')


    <p><b>Имя пользователя:</b>{{$users->name}}</p>
    <p><b>email:</b>{{$users->email}}</p>
    <p><b>Дата регистрации:</b>{{$users->created_at->format('d.m.Y ')}}</p>
    <p><b>Аватар:</b> <img src="{{asset ('images/')}}/{{$users->avatar}}" width="100" height="100"></p>


    <div class="container-fluid">
        <div class="row spec">


            <form action="/avatar" method=post enctype=multipart/form-data>
                {{ csrf_field() }}
                <h5>Выберите файл для загрузки</h5>
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                <input type="file" name="input_img">
                <input type="submit" name="send-request" value="Загрузить"></form>


        </div>
    </div>








@endsection