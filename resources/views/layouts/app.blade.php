<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    function toggleContainers() {
        var container1 = document.getElementById("container1");
        var container2 = document.getElementById("container2");

        if (container1.style.display === "none") {
            container1.style.display = "block";
            container2.style.display = "none";
        } else {
            container1.style.display = "none";
            container2.style.display = "block";
        }
    }
    function toggleActive(divId) {
        var div1 = document.getElementById('myDiv1');
        var div2 = document.getElementById('myDiv2');
        // Check which div was clicked and toggle its active state
        if (divId === 'myDiv1') {
            div1.classList.add('active');
            div2.classList.remove('active');
        } else if (divId === 'myDiv2') {
            div1.classList.remove('active');
            div2.classList.add('active');
        }
    }
    // Function to open the outer popup
    function openOuterPopup() {
        var outerPopup = document.getElementById('outerPopup');
        outerPopup.style.display = 'block';
    }

    // Function to close the outer popup
    function closeOuterPopup() {
        var outerPopup = document.getElementById('outerPopup');
        outerPopup.style.display = 'none';
    }

    // Function to open the inner popup
    function openInnerPopup() {
        var innerPopup = document.getElementById('innerPopup');
        innerPopup.style.display = 'block';
    }

    // Function to close the inner popup
    function closeInnerPopup() {
        var innerPopup = document.getElementById('innerPopup');
        innerPopup.style.display = 'none';
    }
  </script>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
