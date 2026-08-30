<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSE Courses | Redline Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0 !important; 
            overflow-x: hidden !important;
        }

        /* General Navbar Styles */
.navbar {
    background-color: #ffffff; /* Clean white background */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
}

.navbar-brand {
    font-size: 1.8rem;
    font-weight: bold;
    color: #004080; /* Professional blue */
    transition: color 0.3s ease-in-out;
}

.navbar-brand:hover {
    color: #002050; /* Slightly darker blue on hover */
}

.navbar-nav .nav-link {
    font-size: 1rem;
    font-weight: 500;
    color: #333333;
    transition: all 0.3s ease-in-out;
    padding: 10px 15px;
}

.navbar-nav .nav-link:hover {
    color: #004080;
    text-decoration: underline; /* Subtle emphasis */
}

.navbar-toggler {
    border: none;
    padding: 10px;
}

.navbar-toggler-icon {
    background-color: transparent;
    position: relative;
    display: block;
    width: 30px;
    height: 2px;
    background-color: #004080;
    border-radius: 2px;
}

.navbar-toggler-icon::before,
.navbar-toggler-icon::after {
    content: "";
    position: absolute;
    left: 0;
    width: 30px;
    height: 2px;
    background-color: #004080;
    transition: all 0.3s ease-in-out;
}

.navbar-toggler-icon::before {
    top: -8px;
}

.navbar-toggler-icon::after {
    top: 8px;
}

/* Active Page Link */
.navbar-light .navbar-nav .active {
    color: #004080;
    font-weight: bold;
    text-decoration: underline;
}

/* Dropdown Menu */
.navbar-nav .dropdown-menu {
    background-color: #ffffff;
    border: 1px solid #ddd;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-nav .dropdown-item {
    font-size: 1rem;
    color: #333333;
    padding: 10px 20px;
    transition: background-color 0.3s ease-in-out;
}

.navbar-nav .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #004080;
}

/* Center Navigation Items */
.navbar-collapse {
    justify-content: center;
}

.navbar-nav {
    gap: 20px; /* Space between navigation links */
}

/* Footer Adjustments */
.footer h5 {
    font-size: 1.2rem;
    color: yellow;
}

.footer a {
    font-size: 1rem;
    color: yellow;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.footer a:hover {
    color: #004080;
    text-decoration: underline;
}

/* Media Queries for Responsiveness */
@media (max-width: 992px) {
    .navbar-nav .nav-link {
        font-size: 0.9rem;
        padding: 8px 10px;
    }

    .navbar-brand {
        font-size: 1.5rem;
    }

    .navbar-toggler-icon {
        width: 25px;
        height: 2px;
    }

    .navbar-toggler-icon::before {
        top: -7px;
    }

    .navbar-toggler-icon::after {
        top: 7px;
    }

    .section-title,
    .footer h5 {
        font-size: 1.2rem;
    }

    .footer a {
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .dropdown-menu {
        width: 100%; /* Full width dropdown for mobile */
    }

    .navbar-brand {
        font-size: 1.3rem;
    }

    .section-title {
        font-size: 1.1rem;
    }

    .footer h5,
    .footer a {
        font-size: 0.9rem;
    }
}

  /* Card Styling */
.course-card {
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    background-color: #dddddd !important;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    height: 250px;
    width: 250px;  /* Fixed square size */
}

/* Hover Effect */
.course-card:hover {
    transform: scale(1.05);
}

/* Gradient Effect on Edges */
.corner-gradient::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 0.4) 0%,   /* Light translucent white at the top left */
        rgba(255, 255, 255, 0) 40%,     /* Fades out to transparent */
        rgba(255, 255, 255, 0.4) 100%   /* Light translucent white at the bottom right */
    );
    border-radius: 10px;
    pointer-events: none;
    z-index: 0;
}

/* Course Category and Title */
.course-category {
    font-size: 0.9rem;
    color: #6c757d;
}

.course-title {
    font-size: 1.3rem;
    font-weight: bold;
    color: #0056b3;
}

/* Small Logo Styling */
.small-logo {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 40px;
    height: auto;
    opacity: 0.7;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.course-card:hover .small-logo {
    transform: scale(1.1);
}

/* Flexbox Row to Align Cards */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;  /* Adjusted space between cards */
}

/* Force each card to take 24% width to ensure 4 fit in one row */
.course-item {
    flex: 0 0 24%;  /* 4 items per row */
    max-width: 24%;  /* Ensure they fit correctly */
    margin-bottom: 10px;  /* Adjusted space between rows */
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .course-item {
        flex: 0 0 48%; /* 2 items per row for smaller screens */
        max-width: 48%;
    }
}

@media (max-width: 991px) {
    .course-item {
        flex: 0 0 48%; /* 2 items per row */
        max-width: 48%;
    }
}

@media (max-width: 767px) {
    .course-item {
        flex: 0 0 100%; /* Full width for small screens */
        max-width: 100%;
    }
}

@media (max-width: 575px) {
    .course-item {
        flex: 0 0 100%; /* Full width for very small screens */
        max-width: 100%;
    }
}

/* Search Container */
.search-container {
    position: relative;
    width: 100%;
}

/* Search Field */
#courseSearch {
    width: 100%;
    padding: 10px 40px 10px 10px;  /* Space for the refresh icon on the right */
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
}

#courseSearch::placeholder {
    color: #888;
    font-style: italic;
}

/* Rotation animation for refresh icon */
@keyframes rotateIcon {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Refresh Logo inside Search Field */
#refreshLogo {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 25px;
    height: 25px;
    cursor: pointer;
    opacity: 0.7;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

#refreshLogo:hover {
    transform: translateY(-50%) scale(1.1);
    opacity: 1;
}

        .footer {
    background: #f4f4f4;
    padding: 20px 0;
    color: yellow;
}

.footer .col-md-4 {
    padding: 10px;
}

.footer h5 {
    font-size: 1.3rem;
    margin-bottom: 10px; /* Smaller gap after heading */
    color: #004080;
}

.footer p,
.footer ul {
    margin-bottom: 5px; /* Reduce spacing for text and links */
}

.footer iframe {
    margin-top: 10px; /* Adjust spacing for the map */
    margin-right: 8000px !important;
}

.footer a {
    font-size: 1.1rem;
    color: #004080;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
    color: #002060;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .navbar-brand {
        font-size: 1.5rem; /* Adjust navbar brand size for smaller screens */
    }

    .carousel-caption h1 {
        font-size: 2rem; /* Adjust heading size for smaller screens */
    }

    .section-title {
        font-size: 1.5rem; /* Adjust section title size */
    }

    .navbar-nav .nav-link {
        font-size: 0.9rem; /* Adjust navigation link size */
    }

    .footer h5 {
        font-size: 1.1rem; /* Smaller heading size for footer on mobile */
    }

    .footer a {
        font-size: 0.9rem; /* Smaller link size for mobile */
    }
}
    </style>
</head>
<body>

     <!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-center">
    <a class="navbar-brand" href="index.php">
            <img src="images/Redline LOGO.png" alt="Logo" width="150" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="About-Us.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
    <a class="nav-link active dropdown-toggle" aria-current="page" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Courses
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="FAC.php">Construction & Industrial Safety Training</a></li>
                        <li><a class="dropdown-item" href="FSER.php">Specialized Safety Training</a></li>
                        <li><a class="dropdown-item" href="WSE.php">Environmental Safety Training</a></li>
                        <li><a class="dropdown-item" href="SIT.php">Food Safety Training</a></li>
                    </ul>
</li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                        <li><a class="dropdown-item" href="On-Site Training.php">On-Site Training</a></li>
                        <li><a class="dropdown-item" href="HSE Consultancy.php">HSE Consultancy</a></li>
                        <li><a class="dropdown-item" href="Certification Programs.php">Certification Programs</a></li>
                        <li><a class="dropdown-item" href="Corporate Training.php">Corporate Training</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Redline Manpower Supply.php">Redline Manpower Supply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Bright Medical Company.php">Bright Medical Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Equipment Rental.php">Equipment Rental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Style for the active link */
    .dropdown-item.active {
        font-weight: bold;
        color: #007bff; /* Optional: Change color to indicate active state */
    }
</style>

  <!-- Courses -->
  <div class="container py-5">
    <h1 class="text-center mb-4">HSE Courses</h1>
    <p class="text-center text-muted">Explore our extensive range of health, safety, and environment courses designed to ensure workplace safety and compliance.</p>

    <!-- Search and Refresh Section -->
    <div class="row mb-4 justify-content-center">
        <div class="col-md-8">
            <div class="search-container">
                <input type="text" id="courseSearch" class="form-control" placeholder="Search for a course">
                <img id="refreshLogo" src="images/Refresh.jpeg" alt="Refresh">
            </div>
        </div>
    </div>
</div>

<!-- Course List Section -->
<div class="container">
    <div class="row" id="courseList">
        <!-- Aerial Lift/Man Lift/Scissor Lift Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Aerial Lift/Man Lift/Scissor Lift Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Air Hoist Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Air Hoist</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Authorized Gas Testing Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Authorized Gas Testing</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Back Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Back Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Basic Fire Fighting (BFF) Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Basic Fire Fighting (BFF)</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Buildozer Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Buildozer Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Carbon Monoxide (CO) Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Carbon Monoxide (CO) Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Chemical Spill Response Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Chemical Spill Response</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Combustible Dust Hazards and Controls Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Combustible Dust Hazards and Controls</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Compressed Gas Cylinders Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Compressed Gas Cylinders Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Confined Space Entry Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Confined Space Entry</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Construction Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Construction Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Crane, Rigging and Lifting Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Crane, Rigging and Lifting Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Dangerous Goods Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Dangerous Goods</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Defensive Driving (DD) Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Defensive Driving (DD)</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

    <!-- Desert Driving Course -->
    <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Desert Driving</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Electrical Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Electrical Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Emergency Preparedness & Response & Reporting Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Emergency Preparedness & Response & Reporting</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Emergency Response Team Leader Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Emergency Response Team Leader</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Excavation Safety Precautions Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Excavation Safety Precautions</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Ergonomics Hazards (Law of Work) Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Ergonomics Hazards (Law of Work)</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                </div>
                <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
            </div>
        </div>

        <!-- Excavator Safety Course -->
        <div class="col-md-2 course-item">
            <div class="card course-card position-relative">
                <div class="corner-gradient"></div>
                <div class="card-body">
                    <h5 class="course-title">Excavator Safety</h5>
                    <h6><strong>Duration:</strong></h6>
                    <p>---</p>
                    <h6><strong>Fees:</strong></h6>
                    <p>---</p>
                 </div>
                 <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
             </div>
         </div>

         <!-- Fall Protection Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fall Protection</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Fire and Emergency Response Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fire and Emergency Response</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Fire Extinguisher Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fire Extinguisher</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Fire Prevention & Protection Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fire Prevention & Protection</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Fire Warden Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fire Warden</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Fire Watch Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Fire Watch</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Forklift Safety/Forklift Operators Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Forklift Safety/Forklift Operators</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- H2S Awareness & SCBA Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">H2S Awareness & SCBA</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hand, wrist & finger safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hand, wrist & finger safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hand & Power tools safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hand & Power tools safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hazard Communication (Safe Chemical Handling) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hazard Communication (Safe Chemical Handling)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hazard Identification Study Workshop Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hazard Identification Study Workshop</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hazard Recognition Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hazard Recognition</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Hazardous Material Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Hazardous Material</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Health & Safety Induction Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Health & Safety Induction</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>
<!-- Laboratory Safety Training Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Laboratory Safety Training</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Loader Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Loader Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Lock Out Tag Out (LOTO) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Lock Out Tag Out (LOTO)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Machine Guarding Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Machine Guarding</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Machine Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Machine Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Manual and Mechanical Handling Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Manual and Mechanical Handling</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Manual Handling, Storage & Safe Lifting - Principles & Practice Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Manual Handling, Storage & Safe Lifting - Principles & Practice</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Over Head Crane / Mobile Crane (Operator - Inspector) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Over Head Crane / Mobile Crane (Operator - Inspector)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Nitrogen Handling Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Nitrogen Handling Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Occupational Safety and Health Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Occupational Safety and Health</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Office Ergonomics Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Office Ergonomics</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Office Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Office Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Oil and Gas Safety (Onshore and Offshore) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Oil and Gas Safety (Onshore and Offshore)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Overhead Crane Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Overhead Crane Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Importance/Selection & Care of PPE's Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Importance/Selection & Care of PPE's</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Rescue at Height Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Rescue at Height</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Respiratory Protection Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Respiratory Protection Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Rigging Supervisor Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Rigging Supervisor</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Rigging and Slinging (Rigger III/Rigger II/Rigger 1) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Rigging and Slinging (Rigger III/Rigger II/Rigger 1)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety Audit Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety Audit</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety at Work Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety at Work</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety Harness/Full Body Harness Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety Harness/Full Body Harness</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>
<!-- Safety, Housekeeping & Accident prevention Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety, Housekeeping & Accident prevention</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety, Leadership and Supervision Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety, Leadership and Supervision</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety Self-Inspection Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety Self-Inspection</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Safety Showers, eye washes Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Safety Showers, eye washes</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Scaffolding Erection, Dismantling Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Scaffolding Erection, Dismantling</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Scaffolding Inspector/Supervisor Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Scaffolding Inspector/Supervisor</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Scaffolding Safety Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Scaffolding Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Slip, trip & falls Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Slip, trip & falls</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Spill Prevention, Control and Countermeasure (SPCC) Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Spill Prevention, Control and Countermeasure (SPCC)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Stand by Man / Hole Watch Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Stand by Man / Hole Watch</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Traffic Control & Management Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Traffic Control & Management</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Use of all kinds of Fire Extinguishers Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Use of all kinds of Fire Extinguishers</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Walking/Working Surface Course -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Walking/Working Surface</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>
<!-- Advanced Safety Professional (ASC) -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Advanced Safety Professional (ASC)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Integrated Safety Management Courses (ISMC) -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Integrated Safety Management Courses (ISMC)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Accident Reporting, Investigation & Root Cause Analysis -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Accident Reporting, Investigation & Root Cause Analysis</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Certified Safety Officer -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Certified Safety Officer</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Permit-to-Work (PTW) System -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Permit-to-Work (PTW) System</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Risk Assessment & Management -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Risk Assessment & Management</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- TTT Level 3 Award in Training Skills & Practice (TSP) -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">TTT Level 3 Award in Training Skills & Practice (TSP)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Introduction to HAZOP Technique -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Introduction to HAZOP Technique</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Development of OHS Program Workshop -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Development of OHS Program Workshop</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- HSE Management System & Audits -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">HSE Management System & Audits</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>
<!-- Environment Management -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Environment Management</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Environmental Awareness -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Environmental Awareness</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Pool Safety -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Pool Safety</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Waste Management -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Waste Management</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- HACCP (Level 1-Level 4) -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">HACCP (Level 1-Level 4)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Food Safety (Level 1-Level 4) -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Food Safety (Level 1-Level 4)</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Infection Control -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Infection Control</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Nutrition and Health -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Nutrition and Health</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Food Handler -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Food Handler</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

<!-- Food Manager -->
<div class="col-md-2 course-item">
    <div class="card course-card position-relative">
        <div class="corner-gradient"></div>
        <div class="card-body">
            <h5 class="course-title">Food Manager</h5>
            <h6><strong>Duration:</strong></h6>
            <p>---</p>
            <h6><strong>Fees:</strong></h6>
            <p>---</p>
        </div>
        <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
    </div>
</div>

</div>
</div>
</div>

 <!-- Footer -->
 <footer class="footer" style="background: linear-gradient(to right, #000000, #949494); color: white; padding: 20px 0;">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-3">
                <h5 class="footer-heading">About Company</h5>
                <p>We Are Health & Environmental Training Center</p>
                <h5 class="footer-heading">Quick Connect</h5>
                <!-- Social Icons -->
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <!-- Barcode -->
                <div style="margin-top: 20px; margin-left: 20px;">
                    <img src="images/QR Code Redline Location.png" alt="Barcode" style="width: 100px; height: auto;">
                </div>
                <!-- Contact Info -->
                <p style="margin-top: 10px;">
                    <strong>Email:</strong> 
                    <a href="mailto:admin@redlinetrainingksa.com" style="color: #87ceeb; text-decoration: none;">admin@redlinetrainingksa.com</a><br>
                    <strong>Phone:</strong> 
                    <a href="tel:+9660138225410" style="color: #87ceeb; text-decoration: none;">(013) 822 5410</a> | 
                    <a href="tel:+966558294428" style="color: #87ceeb; text-decoration: none;">+966558294428</a>
                </p>
            </div>
            <!-- Column 2 -->
            <div class="col-md-3">
                <h5 class="footer-heading">Our Links</h5>
                <ul style="list-style-type: none; padding: 0;">
                    <li><a href="#" style="color: white; text-decoration: none;">Get Started</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Our Team</a></li>
                    <li><a href="About-Us.php" style="color: white; text-decoration: none;">About Us</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Contact Us</a></li>
                </ul>
            </div>
            <!-- Column 3 -->
            <div class="col-md-3">
                <h5 class="footer-heading">Your Map</h5>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.5073498939995!2d50.0603938!3d26.4251685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fd8cf6d42349%3A0x8b782acfaf6ea6d7!2sRedline%20Training%20Center!5e0!3m2!1sen!2ssa!4v1702561657226!5m2!1sen!2ssa" 
                    width="100%" 
                    height="250" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS for Theme and Hover Effects -->
<style>
    .footer-heading {
        color: #87ceeb !important; 
    }

    .social-icon {
        color: #87ceeb !important;
        font-size: 20px;
        margin-right: 10px;
        transition: color 0.3s ease !important;
    }

    .social-icon:hover {
        color: #ff0000 !important; 
    }
</style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Example of dynamic behavior with jQuery (e.g., toggle course details)
        $(document).ready(function() {
            $(".course-card").on("click", function() {
                $(this).find(".benefits-list").toggle();
            });
        });
    </script>

    <script>
    // JavaScript to handle bolding the clicked link
    document.querySelectorAll('.dropdown-item').forEach(function(item) {
        item.addEventListener('click', function() {
            // Remove active class from all dropdown items
            document.querySelectorAll('.dropdown-item').forEach(function(link) {
                link.classList.remove('active');
            });
            // Add active class to the clicked item
            this.classList.add('active');
        });
    });
</script>

<script>
    // JavaScript for Course Search
document.getElementById('courseSearch').addEventListener('input', function() {
    let searchQuery = this.value.toLowerCase();  // Get the search query and convert it to lowercase
    let courses = document.querySelectorAll('.course-item');  // Get all course items

    // Loop through all course items and show/hide based on search query
    courses.forEach(function(course) {
        let title = course.querySelector('.course-title').textContent.toLowerCase();  // Get the course title and make it lowercase
        let category = course.querySelector('.course-category').textContent.toLowerCase();  // Get the course category

        // Check if the search query matches either the title or category of the course
        if (title.includes(searchQuery) || category.includes(searchQuery)) {
            course.style.display = 'block';  // Show the course
        } else {
            course.style.display = 'none';  // Hide the course
        }
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>


<script>
// Sample Course Data (you can dynamically generate this with PHP if needed)
const courses = [
    {
        title: "Aerial Lift/Man Lift/Scissor Lift Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Air Hoist",
        duration: "---",
        fees: "---"
    },
    {
        title: "Authorized Gas Testing",
        duration: "---",
        fees: "---"
    },
    {
        title: "Back Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Basic Fire Fighting (BFF)",
        duration: "---",
        fees: "---"
    },
    {
        title: "Buildozer Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Carbon Monoxide (CO) Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Chemical Spill Response",
        duration: "---",
        fees: "---"
    },
    {
        title: "Combustible Dust Hazards and Controls",
        duration: "---",
        fees: "---"
    },
    {
        title: "Compressed Gas Cylinders Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Confined Space Entry",
        duration: "---",
        fees: "---"
    },
    {
        title: "Construction Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Crane, Rigging and Lifting Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Dangerous Goods",
        duration: "---",
        fees: "---"
    },
    {
        title: "Defensive Driving (DD)",
        duration: "---",
        fees: "---"
    },
    {
        title: "Desert Driving",
        duration: "---",
        fees: "---"
    },
    {
        title: "Electrical Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Emergency Preparedness & Response & Reporting",
        duration: "---",
        fees: "---"
    },
    {
        title: "Emergency Response Team Leader",
        duration: "---",
        fees: "---"
    },
    {
        title: "Excavation Safety Precautions",
        duration: "---",
        fees: "---"
    },
    {
        title: "Ergonomics Hazards (Law of Work)",
        duration: "---",
        fees: "---"
    },
    {
        title: "Excavator Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fall Protection",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fire and Emergency Response",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fire Extinguisher",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fire Prevention & Protection",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fire Warden",
        duration: "---",
        fees: "---"
    },
    {
        title: "Fire Watch",
        duration: "---",
        fees: "---"
    },
    {
        title: "Forklift Safety/Forklift Operators",
        duration: "---",
        fees: "---"
    },
    {
        title: "H2S Awareness & SCBA",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hand, wrist & finger safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hand & Power tools safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hazard Communication (Safe Chemical Handling)",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hazard Identification Study Workshop",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hazard Recognition",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hazardous Material",
        duration: "---",
        fees: "---"
    },
    {
        title: "Health & Safety Induction",
        duration: "---",
        fees: "---"
    },
    {
        title: "Health, Hygiene & Housekeeping in Company Premises",
        duration: "---",
        fees: "---"
    },
    {
        title: "Hearing Safety",
        duration: "---",
        fees: "---"
    },
    {
        title: "Heat & Cold Stress",
        duration: "---",
        fees: "---"
    },
    {
        title: "Heat Stress",
        duration: "---",
        fees: "---"
    },
    {
        title: "Housekeeping & Walking Surface",
        duration: "---",
        fees: "---"
    },
    {
        title: "Health, Safety & Environment - General",
        duration: "---",
        fees: "---"
    },
    {
        title: "Industrial Ergonomics",
        duration: "---",
        fees: "---"
    },
    {
        title: "Industrial Safety",
        duration: "---",
        fees: "---"
    },
    {
    title: "Laboratory Safety Training",
    duration: "---",
    fees: "---"
},
{
    title: "Loader Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Lock Out Tag Out (LOTO)",
    duration: "---",
    fees: "---"
},
{
    title: "Machine Guarding",
    duration: "---",
    fees: "---"
},
{
    title: "Machine Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Manual and Mechanical Handling",
    duration: "---",
    fees: "---"
},
{
    title: "Manual Handling, Storage & Safe Lifting-Principles & Practice",
    duration: "---",
    fees: "---"
},
{
    title: "Over Head Crane / Mobile Crane (Operator - Inspector)",
    duration: "---",
    fees: "---"
},
{
    title: "Nitrogen Handling Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Occupational Safety and Health",
    duration: "---",
    fees: "---"
},
{
    title: "Office Ergonomics",
    duration: "---",
    fees: "---"
},
{
    title: "Office Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Oil and Gas Safety (Onshore and Offshore)",
    duration: "---",
    fees: "---"
},
{
    title: "Overhead Crane Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Importance/Selection & Care of PPE's",
    duration: "---",
    fees: "---"
},
{
    title: "Rescue at Height",
    duration: "---",
    fees: "---"
},
{
    title: "Respiratory Protection Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Rigging Supervisor",
    duration: "---",
    fees: "---"
},
{
    title: "Rigging and Slinging (Rigger III/Rigger II/Rigger 1)",
    duration: "---",
    fees: "---"
},
{
    title: "Safety Audit",
    duration: "---",
    fees: "---"
},
{
    title: "Safety at Work",
    duration: "---",
    fees: "---"
},
{
    title: "Safety Harness/Full Body Harness",
    duration: "---",
    fees: "---"
},
{
    title: "Safety, Housekeeping & Accident prevention",
    duration: "---",
    fees: "---"
},
{
    title: "Safety, Leadership and Supervision",
    duration: "---",
    fees: "---"
},
{
    title: "Safety Self-Inspection",
    duration: "---",
    fees: "---"
},
{
    title: "Safety Showers, eye washes",
    duration: "---",
    fees: "---"
},
{
    title: "Scaffolding Erection, Dismantling",
    duration: "---",
    fees: "---"
},
{
    title: "Scaffolding Inspector/Supervisor",
    duration: "---",
    fees: "---"
},
{
    title: "Scaffolding Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Slip, trip & falls",
    duration: "---",
    fees: "---"
},
{
    title: "Spill Prevention, Control and Countermeasure (SPCC)",
    duration: "---",
    fees: "---"
},
{
    title: "Stand by Man / Hole Watch",
    duration: "---",
    fees: "---"
},
{
    title: "Traffic Control & Management",
    duration: "---",
    fees: "---"
},
{
    title: "Use of all kinds of Fire Extinguishers",
    duration: "---",
    fees: "---"
},
{
    title: "Walking/Working Surface",
    duration: "---",
    fees: "---"
},
{
    title: "Work Permit Receiving (WPR)",
    duration: "---",
    fees: "---"
},
{
    title: "Work place stress",
    duration: "---",
    fees: "---"
},
{
    title: "Working at Height (WAH)",
    duration: "---",
    fees: "---"
},
{
    title: "Working Safely",
    duration: "---",
    fees: "---"
},
{
    title: "Workplace lighting",
    duration: "---",
    fees: "---"
},
{
    title: "Workplace Violence",
    duration: "---",
    fees: "---"
},
{
    title: "Warehouse Management",
    duration: "---",
    fees: "---"
},
{
    title: "Turnaround Safety Awareness (English, Hindi/Urdu)",
    duration: "---",
    fees: "---"
},
{
    title: "Breathing Air 'Bottle Watch' Emergency Standby",
    duration: "---",
    fees: "---"
},
{
    title: "Advanced Safety Professional (ASC)",
    duration: "---",
    fees: "---"
},
{
    title: "Integrated Safety Management Courses (ISMC)",
    duration: "---",
    fees: "---"
},
{
    title: "Accident Reporting, Investigation & Root Cause Analysis",
    duration: "---",
    fees: "---"
},
{
    title: "Certified Safety Officer",
    duration: "---",
    fees: "---"
},
{
    title: "Permit-to-Work (PTW) System",
    duration: "---",
    fees: "---"
},
{
    title: "Risk Assessment & Management",
    duration: "---",
    fees: "---"
},
{
    title: "TTT Level 3 Award in Training Skills & Practice (TSP)",
    duration: "---",
    fees: "---"
},
{
    title: "Introduction to HAZOP Technique",
    duration: "---",
    fees: "---"
},
{
    title: "Development of OHS Program Workshop",
    duration: "---",
    fees: "---"
},
{
    title: "HSE Management System & Audits",
    duration: "---",
    fees: "---"
},
{
    title: "Industrial/Occupational Hygiene",
    duration: "---",
    fees: "---"
},
{
    title: "Process Safety Management",
    duration: "---",
    fees: "---"
},
{
    title: "Job Safety Analysis / Job Hazard Analysis",
    duration: "---",
    fees: "---"
},
{
    title: "Hazardous Waste Operations & Emergency Response (HAZWOPER)",
    duration: "---",
    fees: "---"
},
{
    title: "Environment Management",
    duration: "---",
    fees: "---"
},
{
    title: "Environmental Awareness",
    duration: "---",
    fees: "---"
},
{
    title: "Pool Safety",
    duration: "---",
    fees: "---"
},
{
    title: "Waste Management",
    duration: "---",
    fees: "---"
},
{
    title: "HACCP (Level 1-Level 4)",
    duration: "---",
    fees: "---"
},
{
    title: "Food Safety (Level 1-Level 4)",
    duration: "---",
    fees: "---"
},
{
    title: "Infection Control",
    duration: "---",
    fees: "---"
},
{
    title: "Nutrition and Health",
    duration: "---",
    fees: "---"
},
{
    title: "Food Handler",
    duration: "---",
    fees: "---"
},
{
    title: "Food Manager",
    duration: "---",
    fees: "---"
}
];

// Create an instance of Fuse.js with the course data and updated threshold
const options = {
    includeScore: true,
    keys: ['title'],
    threshold: 0.3  // More lenient search, lower is more lenient
};
const fuse = new Fuse(courses, options);

// Function to display courses
function displayCourses(coursesToDisplay) {
    const courseList = document.getElementById('courseList');
    courseList.innerHTML = "";  // Clear existing courses

    if (coursesToDisplay.length === 0) {
        courseList.innerHTML = "<p class='text-center text-muted'>No courses found. Try a different search.</p>";
        return;
    }

    // Loop through the course data and display the matching courses
    coursesToDisplay.forEach(course => {
        const courseHTML = `
            <div class="col-md-4 course-item">
                <div class="card course-card position-relative">
                    <div class="corner-gradient"></div>
                    <div class="card-body">
                        <h5 class="course-title">${course.title}</h5>
                        <h6><strong>Duration:</strong></h6>
                        <p>${course.duration}</p>
                        <h6><strong>Fees:</strong></h6>
                        <p>${course.fees}</p>
                    </div>
                    <img src="images/Redline LOGO.png" alt="Logo" class="small-logo">
                </div>
            </div>
        `;
        courseList.innerHTML += courseHTML;
    });
}

// Initial display of all courses
displayCourses(courses);

// Event listener for search input
document.getElementById('courseSearch').addEventListener('input', function() {
    const searchQuery = this.value;  // Get the search query
    const results = fuse.search(searchQuery);  // Use Fuse.js to search the courses

    // Display the search results
    displayCourses(results.map(result => result.item));
});

// Event listener for the refresh button
document.getElementById('refreshButton').addEventListener('click', function() {
    // Clear the search input
    document.getElementById('courseSearch').value = "";

    // Reset and display all courses
    displayCourses(courses);
});
</script>


<script>
// Event listener for the refresh logo (with rotation and page reload)
document.getElementById('refreshLogo').addEventListener('click', function() {
    // Add the rotation animation class
    this.style.animation = 'rotateIcon 0.5s ease';

    // After the rotation ends (500ms), refresh the page
    setTimeout(function() {
        location.reload(); // This will refresh the page
    }, 500); // 500ms matches the duration of the rotation
});
</script>

</body>
</html>
