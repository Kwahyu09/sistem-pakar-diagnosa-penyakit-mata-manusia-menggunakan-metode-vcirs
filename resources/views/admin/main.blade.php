<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar - Penyakit Mata</title>
@include('admin.partials.link')
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        @include('admin.partials.sidebare')
        <div id="main"  class="flex-grow-1">            
            @include('admin.partials.navbar')
            @yield('content')
        </div>
    </div>
    
</body>
@include('admin.partials.script')
</html>