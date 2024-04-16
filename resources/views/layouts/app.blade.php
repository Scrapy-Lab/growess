<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/home/nityanand/project/growess/public/css/header.css') }}" rel="stylesheet">
</head>
<script>
    function tab(evt,tabName) {
    var i,  tablinks;
    var x = document.getElementsByClassName("tab-name");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
