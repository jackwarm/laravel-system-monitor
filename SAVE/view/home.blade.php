@extends('layouts.monitor')

@section('title')
	<span class="text-white display-4 align-baseline">Server Monitor</span>
@endsection

@section('menu')
@endsection

@section('servers')
@endsection

@section('body')
	<div class="row">
		@foreach ($servers as $server)
			<a href="{{ route("server.show", ['id' => $server["id"]]) }}" role="button" class="btn">
  			<div class="m-1 bg-info p-2 flex-fill justify-content-left">
					<h1>{{$server["description"]}}</h1>
					<strong>IP Address: </strong>{{$server["ip_address"]}}<br>
					<strong>Up Time: </strong>{{$server["uptime"]}}<br>
					<strong>SQL: </strong>{{$server["mysql_version"]}}<br>
					<strong>SQL Uptime: </strong>{{$server["mysql_uptime"]}}
			</div>
			</a>
		@endforeach
	</div>
@endsection