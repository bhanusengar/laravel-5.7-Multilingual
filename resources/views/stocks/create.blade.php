@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   @lang('messages.addShare')
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('stocks.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">{{ __('messages.shareName')}}:</label>
              <input type="text" class="form-control" name="share_name"/>
          </div>
          <div class="form-group">
              <label for="price">{{ __('messages.sharePrice')}} :</label>
              <input type="text" class="form-control" name="share_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">{{ __('messages.shareQty')}}:</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div>
          <button type="submit" class="btn btn-primary">{{ __('messages.addbtn')}}</button>
		  <a class="btn btn-danger" href="{{ URL::to('stocks') }}" >{{ __('messages.cancelBtn')}}</a>
      </form>
  </div>
</div>
@endsection