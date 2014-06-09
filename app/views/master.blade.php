<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Styles -->
    @include('headers.styles')
    <!-- Styles -->

</head>
<body>

@yield('content')

    <!-- JavaScripts -->
    @include('headers.scripts')
    <!-- JavaScripts -->


    <!-- Angular Scripts -->
    @include('headers.angular')
    <!-- AngularScripts -->
</body>
</html>