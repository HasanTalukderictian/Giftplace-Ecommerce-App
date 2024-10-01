<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->

    <style>
        /* Custom navbar background color */
        .navbar-custom {
            background-color: #1e2a38; /* Darker blue */
            padding: 10px;
            display: flex;
            justify-content: space-between; /* Space between nav items and button */
            align-items: center;
            position: relative; /* Position relative for dropdown */
        }

        /* Custom unordered list for navbar */
        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row; /* Horizontal stack of nav items */
        }

        /* Custom styling for nav links */
        .navbar-nav li {
            margin-right: 5px;
            margin-left: 50px; /* Spacing between the items */
            position: relative; /* Position relative for dropdown */
        }

        .nav-link {
            text-decoration: none;
            color: #ffffff; /* White text for nav links */
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            display: inline-block;
            transition: color 0.3s ease; /* Smooth color transition */
        }

        /* Hover effect for nav-links */
        .nav-link:hover {
            color: #1ec5f0; /* Light blue on hover */
        }

        /* Dropdown styling */
        .dropdown {
            display: none; /* Initially hidden */
            position: absolute; /* Position absolute for dropdown */
            top: 100%; /* Align with the bottom of the parent */
            left: 0; /* Align left to the parent */
            background-color: #1e2a38; /* Same as navbar background */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Shadow effect */
            z-index: 1; /* Ensure it appears above other elements */
            border-radius: 5px; /* Rounded corners */
            min-width: 150px; /* Optional: set minimum width */
        }

        /* Show dropdown on hover */
        .navbar-nav li:hover .dropdown {
            display: block; /* Show dropdown */
        }

        /* Dropdown item styling */
        .dropdown-item {
            padding: 10px 20px; /* Padding for dropdown items */
            color: #ffffff; /* White text */
            text-decoration: none; /* No underline */
            display: block; /* Block display */
            margin: 0; /* Remove margin to eliminate extra space */
        }

        /* Hover effect for dropdown items */
        .dropdown-item:hover {
            background-color: #1ec5f0; /* Light blue on hover */
        }

        /* Custom styling for login button */
        .login-btn {
            background-color: #1ec5f0; /* Light blue background */
            color: #ffffff; /* White text */
            border: none;
            border-radius: 5px;
            padding: 10px 20px; /* Padding for button */
            font-size: 16px; /* Font size for button text */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s ease; /* Smooth background transition */
        }

        /* Hover effect for login button */
        .login-btn:hover {
            background-color: #007bb5; /* Darker blue on hover */
        }
    </style>
</head>
<body>

  <!-- Custom Navbar with horizontal navigation -->
  <nav class="navbar-custom">
    <ul class="navbar-nav">
      <li>
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li>
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li>
        <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a> <!-- Dropdown arrow using Font Awesome -->
        <!-- Dropdown for Products -->
        <ul class="dropdown">
          <li><a class="dropdown-item" href="#">Men</a></li>
          <li><a class="dropdown-item" href="#">Women</a></li>
          <li><a class="dropdown-item" href="#">Children</a></li>
          <li><a class="dropdown-item" href="#">Kids</a></li>
        </ul>
      </li>
      <li>
        <a class="nav-link" href="#">Blogs</a>
      </li>
      <li>
        <a class="nav-link" href="#">Career</a>
      </li>
      <li>
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <button class="login-btn">Login</button> <!-- Login button on the right end -->
  </nav>

</body>
</html>
