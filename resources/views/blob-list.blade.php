  @extends('header')
  @section('body')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-11">
    <h1 class="text-center">Blob List</h1><a href="{{route('blobs')}}" class="btn btn-primary" style="position: absolute;top: 10px;right:10px;">Add</a>
    </div>
    <div class="col-md-1">
       
    </div>
  </div>   
  </div>
<div class="container">                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>@lang('home.id')</th>
        <th>Title</th>
        <th>Description</th>
        <th>@lang('home.edit')</th>
        <th>@lang('home.delete')</th>
      </tr>
    </thead>
    @foreach($blob as $id=> $use)
    <tbody>
      <tr>
        <td>{{ $id+1 }}</td>
        <td>{{ $use->title }}</td>
        <td>{{ $use->description }}</td>
        <td><a href="{{ route('editblob',['id'=>$use->id]) }}">edit</td>
        <td onclick="deleteBlob(this,'{{ $use->id }}')">delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
  </div>
  <div class="col-sm-2"></div>

</div>
</div>
@endsection