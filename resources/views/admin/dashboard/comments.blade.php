@extends('admin.dashboard.index')

@section('content')
    <h1>Комментарии, ожидающие модерацию</h1>

    <form method="post">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="col-md-8">




            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Comment</th>
                    <th scope="col">is_active</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <th scope="row">{{$comment->id}}</th>
                        <td>{{ $comment->created_at }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td><input class="form-check-input" type="checkbox" name="{{$comment->id}}" id="isactivecomment{{$comment->id}}"  @if ($comment->is_active) checked @endif></td>

                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </form>
    <br>
    {{$comments->links("pagination::bootstrap-4")}}

@endsection