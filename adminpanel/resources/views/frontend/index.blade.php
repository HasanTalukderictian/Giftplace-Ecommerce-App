<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS to fix potential z-index issue -->
    <style>
        .navbar {
            z-index: 1050;
        }
    </style>
</head>
<body>

    <!-- Include NavBar and Banner Blade Files -->
    <div>
        <nav>
            @include('frontend.NavBar')
        </nav>

        <section>
            <div class="container-fluid">
                <div class="row">
                    @include('frontend.Banner')
                </div>
            </div>
        </section>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
