@extends('base')

@section('content')

@php
$posts=5;   //posts per category
@endphp

{{----------------------------school---------------------------------}}
    <div class="category">
        <table border="1">
            <col class="col1">
            <col class="col2">
            <col class="col3">
            <col class="col4">
            <tr>


                <th><a href="/allschools">{{$categories[0]->description}}</a></th>
                <th>Темы</th>
                <th>Сообщения</th>
                <th>Последнее сообщение</th>
            </tr>


            @for ($k = 1; $k <= $posts; $k++)
                <tr>
                    <td><a href="/schools/{{$subcat[$k][0]->id}}">{{$subcat[$k][0]->description}}</a></td>

                    <td>{{$cnt_subcat[$k]}}</td>
                    <td>@foreach ($cnt_subcatcomm as $sbcatcomm)
                            @if ($sbcatcomm->subcat_id==$subcat[$k][0]->id) {{$sbcatcomm->sbcomm}}
                            @endif
                        @endforeach
                    </td>
                    <td>@foreach ($get_subcatcomm as $gtcatcomm)
                            @if ($gtcatcomm->subcat_id==$subcat[$k][0]->id) {{$gtcatcomm->comment}}
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endfor
        </table>
    </div>


{{--------------------------other topics---------------------------}}

@foreach($categories as $cat)
@if (($cat->id)>1)
<div class="category"> 
<table border="1">
   <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <tr>


      <th><a href="/{{$cat->description_en}}">{{$cat->description}}</a></th>
    <th>Сообщения</th>
    <th></th>
    <th>Последнее сообщение</th>
  </tr>



    @php $i=0; @endphp
    @foreach ($topics as $topic)
      <tr>
       @if (($cat->id==$topic->category) && ($i<$posts))
           @php $i++; @endphp
              <td><a href="/{{$cat->description_en}}/{{$topic->tpc_id}}">{{$topic->description}}</a></td>
              <td>
                  @foreach ($cnt_topics as $cnt_topic)
                     @if ($cnt_topic->topic_id==$topic->tpc_id) {{$cnt_topic->cnt_comm}}
                     @endif
                  @endforeach
              </td>
              <td></td>
              <td>{{str_limit($topic->comment),50}}</td>
      </tr>

       @endif
    @endforeach
</table>
</div>

@endif
@endforeach





@endsection