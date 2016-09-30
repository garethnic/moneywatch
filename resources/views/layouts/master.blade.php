<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="A simple way to keep track of your monthly expenses">
        <meta name="keywords" content="income,expenses,money,overview,amount,net,moneymath">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MoneyMath</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/slicknav.min.css" rel="stylesheet">

        @yield('styles')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        @include('partials.navigation')

        <div class="app-entry">
            @yield('content')
        </div>

        @yield('scripts')

        <script src="js/jquery.slicknav.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.navBar').slicknav({label: ''});
            });
        </script>
    </body>
</html>