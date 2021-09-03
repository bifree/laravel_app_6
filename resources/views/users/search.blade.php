@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="text-center mb-5 mt-5">
			<h2>ユーザ検索</h2>
		</div>

		<div class="search-box">
			<form class="my-2 my-lg-0 ml-2">
				<table>
					<tr>
						<td>
							<label>フリーワード</label>
						</td>
						<td>
							<input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
						</td>
					</tr>
					<tr>
						<td>
							<label>年齢</label>
						</td>
						<td class="wrap-row">
							<input type="search" class="form-control col-3" name="search" value="">歳から
							<input type="search" class="form-control col-3" name="search" value="">歳の間
						</td>
					</tr>
					<tr>
						<td>
							<label>都道府県</label>
						</td>
						<td>
							<select class="form-group form-control" name="address">
								@foreach(config('prefecture') as $pref_id => $name)
									<option value="{{ $pref_id }}">{{ $name }}</option>
								@endforeach
							</select>
						</td>
						</tr>
				</table>
				<div class="text-center d-block">
					<input type="submit" value="検索" class="btn btn-info"> 
				</div>
			</form>
		</div>
	</div>

@endsection
