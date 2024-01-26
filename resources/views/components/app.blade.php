<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-template.header />
        <x-template.sidebar :menu="$menu" />
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid pt-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <x-template.footer />
        <x-template.controlsidebar />

    </div>
    </div>

    <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
