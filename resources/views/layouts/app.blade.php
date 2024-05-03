<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles
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
    document.addEventListener("DOMContentLoaded", function() {
    var tabNavItems = document.querySelectorAll(".tab_nav li");

    tabNavItems.forEach(function(item) {
        item.addEventListener("click", function() {
            var tab = this.getAttribute("data-tab");

            // Remove 'active' class from all tab nav items
            tabNavItems.forEach(function(navItem) {
                navItem.classList.remove('show');
            });

            // Add 'active' class to the clicked tab nav item
            this.classList.add('show');

            // Remove 'active' class from all content divs
            var contentDivs = document.querySelectorAll('.contents > div');
            contentDivs.forEach(function(contentDiv) {
                contentDiv.classList.remove('show');
            });

            // Add 'active' class to the content div corresponding to the clicked tab
            var tabContent = document.querySelector('.contents > div#' + tab);
            if (tabContent) {
                tabContent.classList.add('show');
            }
        });
    });
});
    

  </script>
<body style="background: #f6f9fad4;">
    @include('layouts.header')
        @yield('content')
    @include('layouts.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        @livewireScripts
</body>

</html>
