@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
  @lang('messages.stockList')
  <span>
	<a class="btn btn-success" href="{{ URL::to('stocks/create') }}" >{{ __('messages.addShare')}}</a>
  </span>
  </div>
  
  <div class="card-body">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">{{ __('messages.shareName')}}</th>
			  <th scope="col">{{ __('messages.sharePrice')}}</th>
			  <th scope="col">{{ __('messages.shareQty')}}</th>
			  <th scope="col">{{ __('messages.action')}}</th>
			</tr>
		  </thead>
		  <tbody>
		  @foreach ($stocks as $stock)
			<tr>
			  <th data-label="Serial Number" scope="row">{{ $loop->iteration }}</th>
			  <td data-label="Link Text"><a href="#" class="text-secondary">{{ $stock->share_name }}</a></td>
			  <td data-label="Link Text"><a href="#" class="text-secondary">{{ $stock->share_price }}</a></td>
			  <td data-label="Link Text"><a href="#" class="text-secondary">{{ $stock->stock_qty }}</a></td>
			  <td>
					<a href="{{ URL::to('stocks/edit/'.$stock->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">{{ __('messages.btnEdit')}}</a> 
				</td>
			</tr>
			@endforeach
		  </tbody>
		</table>
  </div>
</div>
@endsection