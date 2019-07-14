@extends('layouts.monitor')

@section('title')
	<a href="{{ route("server.show", ['id' => $server["id"]])  }}" class="text-white"><span class="text-white display-4 align-baseline">{{$server["description"]}}</span></a> 
@endsection

@section('menu')
	<div class="pb-2">
		<a href="{{ route("cpu.show", ['id' => $server["id"]])  }}" class="text-primary">CPU</a>
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

@section('body')
	<div class="row">
		<div class="col-2 text-black-50 bg-white strong mr-1">Interval</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">Load 1</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">Load 5</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">Load 15</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">User CPU</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">Sys CPU</div>
	</div>
	@foreach ($cpu as $key=>$data)
		<div class="row">
			<div class="col-2 mr-1">
				{{ $key }}
			</div>
			<div class="col-1 mr-1">
				{{ $data["L1"] }}
			</div>
			<div class="col-1 mr-1">
				{{ $data["L5"] }}
			</div>
			<div class="col-1 mr-1">
				{{ $data["L15"] }}
			</div>
			<div class="col-1 mr-1">
				{{ $data["cpu_user"] }}
			</div>
			<div class="col-1 mr-1">
				{{ $data["cpu_system"] }}
			</div>
		</div>
	@endforeach
@endsection