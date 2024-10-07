<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar {
            z-index: 1050;
        }

        /* Custom style for the video */
        .video-container {
            width: 80%; /* Set width to 90% */
            height: 500px; /* Set height to 500px */
            margin: 0 auto; /* Center the video horizontally */
            border: 8px solid #edf0f5; /* Add a solid border of 5px with a color */
            border-radius: 10px; /* Optional: add border radius for rounded corners */
            overflow: hidden; /* Prevents overflow from rounded corners */
        }

        .video-container iframe {
            width: 100%; /* Make the iframe fill the container */
            height: 100%; /* Make the iframe fill the container */
            border: none; /* Remove default iframe border */
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

            <!-- "How It Works" Section with Video -->
            <div class="container-fluid mt-4 mb-4">
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <h2 class="font-weight-bold mt-5 mb-1">How it Works: Our Easy Process</h2>
                        <p class="text-muted mb-5">Choose from unique design concepts from multiple accomplished online interior designers</p>
                    </div>
                    <div class="col-12">
                        <!-- YouTube Video Embed -->
                        <div class="video-container">
                            <iframe class="embed-responsive-item rounded"
                                    src="https://www.youtube.com/embed/5VnSscv0mWw?rel=0&autoplay=1"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
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
