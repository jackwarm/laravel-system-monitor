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
		<a href="{{ route("disk.show", ['id' => $server["id"]])  }}" class="text-primary">Disks</a>
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
		<div class="col-1 text-black-50 bg-white strong mr-1">Mount</div>
		<div class="col-2 text-black-50 bg-white strong mr-1">Device</div>
		<div class="col-2 text-black-50 bg-white strong mr-1">Total</div>
		<div class="col-2 text-black-50 bg-white strong mr-1">Free Space</div>
		<div class="col-2 text-black-50 bg-white strong mr-1">Used Space</div>
		<div class="col-1 text-black-50 bg-white strong mr-1">PCT</div>
	</div>
	@foreach ($disks as $disk)
		<div class="row">
			<div class="col-1 mr-1">
				{{ $disk["mount_point"] }}
			</div>
			<div class="col-2 mr-1">
				{{ $disk["filesystem"] }}
			</div>
			<div class="col-2 mr-1 text-right">
				{{ number_format($disk["total_space"]) }} Kb
			</div>
			<div class="col-2 mr-1 text-right">
				{{ number_format($disk["free_space"]) }} Kb
			</div>
			<div class="col-2 mr-1 text-right">
				{{ number_format($disk["used_space"]) }} Kb
			</div>
			<div class="col-1 mr-1 text-right">
				{{ round($disk["used_space"] / $disk["total_space"],4)*100 }}%
			</div>
		</div>
	@endforeach
@endsection 