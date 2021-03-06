@extends('layouts.monitor')

@section('title')
	<a href="{{ route("server.show", ['id' => $server["id"]])  }}" class="text-white"><span class="text-white display-4 align-baseline">{{$server["description"]}}</span></a> 
@endsection

@section('menu')
	<div class="pb-2">
		<a href="{{ route("cpu.show", ['id' => $server["id"]])  }}" class="text-white">CPU</a>
	</div>
	<div class="pb-2">
		<a href="{{ route("memory.show", ['id' => $server["id"]])  }}" class="text-white">Memory</a>
	</div>
	<div class="pb-2">
		<a href="{{ route("disk.show", ['id' => $server["id"]])  }}" class="text-white">Disks</a>
	</div>
	<div class="pb-2">
		<a href="{{ route("hosting.show", ['id' => $server["id"]])  }}" class="text-white">Hosting</a>
	</div>
	<div class="pb-2">
		<a href="{{ route("alert.show", ['id' => $server["id"]])  }}" class="text-white">Alerts</a>
	</div>
@endsection

@section('servers')
@endsection

@section('body')
	<div class="row">
		<div class="col-3 h3">
			IP Address: 
		</div>
		<div class="col-9 h3">
			{{$server["ip_address"]}}
		</div>
	</div>
	<div class="row">
		<div class="col-3 h3">
			Up Time: 
		</div>
		<div class="col-9 h3">
			{{$server["uptime"]}}
		</div>
	</div>
	<div class="row">
		<div class="col-3 h3">
			SQL Server: 
		</div>
		<div class="col-9 h3">
			{{$server["mysql_version"]}}
		</div>
	</div>
	<div class="row">
		<div class="col-3 h3">
			SQL Up Time: 
		</div>
		<div class="col-9 h3">
			{{$server["mysql_uptime"]}}
		</div>
	</div>
@endsection