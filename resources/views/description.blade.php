  @extends('header')
  @section('body')
<div class="container">
  <h2 class="text-center welcome">{{__('home.hello')}}. {{Auth::user()->name}}</h2>
   @foreach($desc as $post)
  <div class="card">
    <div class="card-header text-center">{{$post->title}}</div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4 uploadimage">
          <img src="uploads/{{$post->file}}" width="100%" class="uploadImage">
        </div>
        <div class="col-sm-8">
          {{$post->description}}
        </div>
      </div>
    </div> 
    <div class="card-footer">
      <div class="col-sm-8">
        <span id="{{$post->id}}">{{$post->liked}}</span>
        <button class="btn-dark" onclick="like(this,'{{$post->id}}','1')">{{__('home.like')}}</button>
        <span class="{{$post->id}}">{{$post->dislike}}</span>
        <button class="btn-dark" onclick="like(this,'{{$post->id}}','2')">{{__('home.unlike')}}</button>
        <span id="com+{{$post->id}}">{{$post->comment}}</span>
        <button class="btn-success com" onclick="comment(this,'{{$post->id}}')">{{__('home.comment')}}</button>
        <label style="display: none;">
          <textarea style="resize: none;position: relative;top: 20px;" onkeyup="writeUser(this)"></textarea><button class="btn-info" onclick="post(this,'{{$post->id}}')">{{__('home.post')}}</button>
        </label>
        <button class="btn-primary" onclick="viewcomment(this,'{{$post->id}}')">{{__('home.view_comment')}}</button>
      </div>
      <div id="download">
        <a href="/download/{{$post->file}}"> Download  </a>
      </div>
    </div>
    <div class="col-sm-5 card-header viewcomment" style="display: none;border: 1px solid #808080;"></div>
  </div>
  @endforeach
</div>
<input type="hidden" id="_token" value="{{ csrf_token() }}">
@endsection
