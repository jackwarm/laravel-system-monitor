<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="/css/app.css" rel="stylesheet" type="text/css">

  <title>Cieply Monitor Server - Dashboard</title>

</head>

<body id="page-top" class="text-white bg-dark">

<div class="container">
    <div class="row justify-content-left p-2">
        <div class="col-md-12 mt-2 mb-2">
			<a href="{{ route("home") }}" class="btn btn-success" role="button">Home</a>@yield('title')
        </div>
    </div> 
    <div class="row  h-100">
        <div class="col-md-2 justify-content-left">
			@yield('menu')
        </div>
        <div class="col-md-10 justify-content-left">
			@yield('servers')
			@yield('body')
        </div>
    </div>
</div>
</body>
</html>
