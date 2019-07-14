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
		<a href="{{ route("hosting.show", ['id' => $server["id"]])  }}" class="text-primary">Hosting</a>
	</div>
	<div class="pb-2">
		<a href="{{ route("alert.show", ['id' => $server["id"]])  }}" class="text-white">Alerts</a>
	</div>
@endsection

@section('body')
	<div class="row">
		<div class="col-3 text-black-50 bg-white strong mr-1">Domain</div>
		<div class="col-2 text-black-50 bg-white strong mr-1 text-right">Day</div>
		<div class="col-2 text-black-50 bg-white strong mr-1 text-right">Week</div>
		<div class="col-2 text-black-50 bg-white strong mr-1 text-right">30 Days</div>
	</div>
	@foreach ($hosts as $key=>$data)
		<div class="row">
			<div class="col-3 mr-1">
				{{ $data["domain"] }}
			</div>
			<div class="col-2 mr-1 text-right">
				{{ $data["Day"] }}
			</div>
			<div class="col-2 mr-1 text-right">
				{{ $data["Week"] }}
			</div>
			<div class="col-2 mr-1 text-right">
				{{ $data["30 Days"] }}
			</div>
		</div>
	@endforeach
@endsection