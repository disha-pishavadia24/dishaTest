@extends('item.layout')
 
@section('content')
  <div class="row">
    <div class="col-md-12">
        <h2 class="text-center pb-5 pt-1">Demo Test Drag & Drop Items </h2>
        <div class="row">
          <div class="col-md-12">
          <form action="/create-items" method="POST">
            @csrf
            <div class="form-row pb-5">

              <div class="col">
                <input type="text" class="form-control" placeholder="Item name" name="name">
                <div>{{ $errors->first('name') }}</div>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </div>
          </form> 
         </div>
        </div>
        <div class="row">
            <div class="col-md-5 p-10 bg-dark offset-md-1 adjust">
                <ul class="list-group shadow-lg connectedSortable" id="left-item-drop">
                  @if(!empty($leftItem) && $leftItem->count())
                    @foreach($leftItem as $key=>$value)
                      <li class="list-group-item" item-id="{{ $value->id }}">{{ $value->name }}</li>
                    @endforeach
                  @endif
                </ul>
            </div>
            <div class="col-md-5 p-3 bg-dark offset-md-1 shadow-lg complete-item">
                <ul class="list-group  connectedSortable" id="right-item-drop">
                  @if(!empty($rightItem) && $rightItem->count())
                    @foreach($rightItem as $key=>$value)
                      <li class="list-group-item " item-id="{{ $value->id }}">{{ $value->name }}</li>
                    @endforeach
                  @endif
                </ul>
            </div>
        </div>
    </div>
  </div>
@endsection