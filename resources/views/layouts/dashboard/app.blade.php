<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>El Rey Jesús Punto Fijo :: Panel de Control</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    
    <!-- Tailwind foundation's -->
    <link rel="stylesheet" href="{{ asset('assets_dashboard/css/tailwind.output.css') }}" />

    <!-- Tailwind CDN's -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Customization -->
    <link rel="stylesheet" href="{{ asset('assets_dashboard/css/customization.css') }}" />

    @yield('styles')

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets_dashboard/js/init-alpine.js') }}"></script>

    <!-- Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('assets_dashboard/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('assets_dashboard/js/charts-pie.js') }}" defer></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets_dashboard/js/main.js') }}" defer></script>

    <!-- SweetaAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Simon's plugins -->
    <script src="{{asset('assets_dashboard/js/form_submit.js')}}"></script>

    <!-- jQuery Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
  </head>
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      @include('layouts.dashboard.includes.first_aside')
      @include('layouts.dashboard.includes.mobile_sidebar')
      <div class="flex flex-col flex-1 w-full">
        <!-- Inicio del Header -->
        @include('layouts.dashboard.includes.header')
        <!-- Fin del Menú -->

        <main class="h-full overflow-y-auto">
            @yield('content')
        </main>
      </div>
    </div>
    @yield('scripts')
  </body>
</html>
