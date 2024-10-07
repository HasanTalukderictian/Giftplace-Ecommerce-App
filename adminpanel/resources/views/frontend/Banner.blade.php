<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banner</title>

    <!-- Bootstrap 4.5.2 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Full-height background for the banner */
        .banner {
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay to enhance text visibility */
        }

        /* Styling the banner content */
        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .banner h1 {
            font-size: 4rem;
            font-weight: 700;
        }

        .banner p {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .banner .contact-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 30px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 1.1rem;
        }

        .contact-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Banner Section -->
    @php
        $banners = \App\Models\Banner::all(); // Fetching all banners from the database
    @endphp

    @foreach ($banners as $banner)
        <div class="banner p-5"  style="background-image: url('{{ asset('storage/' . $banner->image) }}');">
            <div class="banner-overlay"></div>
            <div class="banner-content">
                <h1>{{ $banner->title }}</h1>
                <p>Are you on the search for the top interior design companies in Dhaka, Bangladesh to transform your space? Our team of talented designers is here to turn your vision into reality. Contact us today!</p>
                <a href="tel:+8801712529919" class="contact-btn">+880 1712529919</a>
            </div>
        </div>
    @endforeach

    <!-- Bootstrap JS and dependencies (Bootstrap 4.5.2) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
