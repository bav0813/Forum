@extends('admin.dashboard.index')

@section('content')
    <h1>Все комментарии</h1>

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
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <th scope="row">{{$comment->id}}</th>
                        <td>{{ $comment->created_at }}</td>
                        <td id="body_comment_{{$comment->id}}">{{ $comment->comment }}</td>
                        <td><input class="form-check-input" type="checkbox" name="{{$comment->id}}" id="isactivecomment{{$comment->id}}"  @if ($comment->is_active) checked @endif></td>
                        <td><button type="button" class="btn btn-primary editcomm" id="{{$comment->id}}">Edit</button></td>
                        <td><button type="button" class="btn btn-primary deletecomm" id="{{$comment->id}}">Delete</button></td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </form>
{{$comments->links("pagination::bootstrap-4")}}
    <br>
    <!— Modal —>
    <div class="modal fade" id="myModalcomment" role="dialog">
        <div class="modal-dialog">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Редактировать комментарий</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label for="usr">Comment:</label>
                    <input type="text" class="form-control" id="comments">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="admin_btn_save_comment">Сохранить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>

        </div>
    </div>



    <!— Modal —>
    <div class="modal fade" id="myModaldelete" role="dialog">
        <div class="modal-dialog">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Удалить комментарий</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label for="usr">Comment:</label>
                    <input type="text" class="form-control" id="comment1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="admin_btn_delete_comment">Удалить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>

        </div>
    </div>

@endsection