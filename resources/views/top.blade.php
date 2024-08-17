<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>カレンダー</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <!-- FullCalendar Stylesheet -->
        {{-- <link href="{{ asset('fullcalendar-6.1.15/dist/index.global.css') }}" rel="stylesheet"> --}}
        <!-- Script -->
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        <!-- FullCalendar Script -->
        <script src="{{ asset('fullcalendar-6.1.15/dist/index.global.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'
                });
                calendar.render();
            });
        </script>
    </body>
</html>