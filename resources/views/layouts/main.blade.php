<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Maritory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="/img/icons.png">

    {{-- Font Google Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    {{-- CDN Boostrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    {{-- CDN Jquery --}}
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/index.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    {{-- Slick --}}
    <link href="http://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />

    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Blade CSS --}}
    @yield('styles')

    {{-- Font Google Frank Ruhl Libre --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&display=swap" rel="stylesheet">

    {{-- Calendar CSS --}}
    <link rel="stylesheet" href="/calendar/dist/simple-calendar.css">

</head>

<body>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <!-- Navbar -->
    @include('partials.navbar')

    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')


    {{-- Calender JS --}}
    <script>
        var $calendar;
        $(document).ready(function() {
            let container = $("#calendar-js").simpleCalendar({
                fixedStartDay: 0, // begin weeks by sunday
                disableEmptyDetails: true,
                events: [
                    // generate new event after tomorrow for one hour
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() + 24))
                            .toDateString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() + 25))
                            .toISOString(),
                        summary: 'Cek The Aesthetic'
                    },
                    // generate new event for yesterday at noon
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() - new Date()
                            .getHours() - 12, 0)).toISOString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() - new Date()
                            .getHours() - 11)).getTime(),
                        summary: 'Cek Ballroom'
                    },
                    // generate new event for the last two days
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() - 48))
                            .toISOString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
                        summary: 'Cek Vendor yang tersedia'
                    }
                ],

            });
            $calendar = container.data('plugin_simpleCalendar')
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/calendar/dist/jquery.simple-calendar.js"></script>


    {{-- Iconify JS --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

</body>

</html>
