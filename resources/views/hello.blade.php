<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel php</title>

    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("p").hide();
            });
        });
    </script>
    <script src='resources/js/app.js'></script>
    <script src="{{asset('resources/js/hide.js') }}" type="text/javascript"></script>

</head>
<body>

<h1> hellow friends </h1>

<p> hide </p>
<button type="button">Hide H1</button>

</body>
</html>