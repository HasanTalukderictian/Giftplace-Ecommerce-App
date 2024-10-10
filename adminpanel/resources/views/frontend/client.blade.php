
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <style>
        .testimonial-card {
            background: #ece8e8; /* Light background */
            border: 2px solid wheat; /* Border around each card */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Space inside the card */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effect */
            text-align: center;
        }

        .testimonial-quote {
         display: flex;
         justify-content: center; /* Center horizontally */
         align-items: center; /* Center vertically */
         }

        .testimonial-card:hover {
            transform: scale(1.05); /* Slightly zoom in on hover */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); /* Increase shadow depth on hover */
        }

        .testimonial-img {
            border-radius: 50%; /* Make the image circular */
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .testimonial-text {
            font-size: 14px;
            line-height: 1.6;
        }

        .client-name {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .clients-section {
            padding: 60px 0; /* Add padding to the top and bottom of the section */
            background-image: url('https://i.ibb.co/5jw0C2q/project1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .client-reviews-container {
            max-width: 90%; /* Set max width for the reviews container */
            margin: 0 auto; /* Center align the container */
        }

        @media (min-width: 768px) {
            .client-reviews-container {
                max-width: 85%;
            }
        }

        @media (min-width: 992px) {
            .client-reviews-container {
                max-width: 80%;
            }
        }

        @media (min-width: 1200px) {
            .client-reviews-container {
                max-width: 75%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-4 clients-section">
        <div class="row text-center">
            <div class="col-12 mb-4 mt-4">
                <h2 class="font-weight-bold text-white">Clients Say</h2>
                <p class="text-white">Our clients rave about our exceptional service and stunning designs. From start to finish, we prioritize communication and attention to detail to ensure complete satisfaction. Hear what our happy clients have to say!</p>
            </div>
        </div>

        <div class="client-reviews-container">
            <div class="row justify-content-center client-slider">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="testimonial-card p-4">
                        <div class="testimonial-quote">
                            <img src="https://i.ibb.co.com/TrXkmS3/pexels-andrea-piacquadio-874158.jpg" class="testimonial-img" alt="Client Image">
                        </div>
                        <p class="testimonial-text text-dark">It has been such an amazing experience. The team of Best Interior Design has provided us with the top interior solutions. They are the best interior designers in Dhaka.</p>
                        <h5 class="client-name text-dark">Md Abdul Rahim</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="testimonial-card p-4">
                        <div class="testimonial-quote">
                            <img src="https://i.ibb.co.com/51mq45m/360-F-326985142-1aa-Kc-Ej-MQW6-ULp6o-I9-MYuv8l-N9f8s-Fmj.jpg" class="testimonial-img" alt="Client Image">
                        </div>
                        <p class="testimonial-text text-dark">The experience of working with team Best Interior Design was perfect with their awesome design ideas, responsible team members, and timely completion of my home interior.</p>
                        <h5 class="client-name text-dark">Mr. Jahir Uddin Alamgir</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="testimonial-card p-4">
                        <div class="testimonial-quote">
                            <img src="https://i.ibb.co.com/ZNr3HfL/360-F-224869519-a-Rae-Lneq-ALf-PNBzg0xx-MZXghtv-BXkf-IA.jpg" class="testimonial-img" alt="Client Image">
                        </div>
                        <p class="testimonial-text text-dark">Simply awesome. Highly Professional, Great customer support. When it comes to interior design in Bangladesh I would strongly recommend Best Interior Design.</p>
                        <h5 class="client-name text-dark">Mr. Maruf Hossen</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="testimonial-card p-4">
                        <div class="testimonial-quote">
                            <img src="https://i.ibb.co.com/tHgmN8c/istockphoto-1147066751-612x612.jpg" class="testimonial-img" alt="Client Image">
                        </div>
                        <p class="testimonial-text text-dark">It was a great experience being with Best Interior Design. They keep up the quality and have always been amazing by their innovative ideas and creative ventures.</p>
                        <h5 class="client-name text-dark">Md Sardul Mahmud</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.client-slider').slick({
                dots: true, // Show dots for navigation
                infinite: true, // Infinite loop sliding
                speed: 500, // Speed of transition
                slidesToShow: 2, // Show 2 slides at a time
                slidesToScroll: 1, // Scroll 1 slide at a time
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1 // Show 1 slide on smaller screens
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2 // Show 2 slides on medium screens
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3 // Show 3 slides on large screens
                        }
                    }
                ]
            });
        });
    </script>

