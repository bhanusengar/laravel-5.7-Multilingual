@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   {{ __('messages.editShare')}}
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
      <form method="post" action="{{ route('stocks.update', $share->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">{{ __('messages.shareName')}}:</label>
          <input type="text" class="form-control" name="share_name" value={{ $share->share_name }} />
        </div>
        <div class="form-group">
          <label for="price">{{ __('messages.sharePrice')}} :</label>
          <input type="text" class="form-control" name="share_price" value={{ $share->share_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">{{ __('messages.shareQty')}}:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $share->stock_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.btnUpdate')}}</button>
		<a class="btn btn-danger" href="{{ URL::to('stocks') }}" >{{ __('messages.cancelBtn')}}</a>
      </form>
  </div>
</div>
@endsection