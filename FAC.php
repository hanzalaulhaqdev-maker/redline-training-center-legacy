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
         /* Navbar container */
.navbar-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            overflow: visible;
            position: fixed; 
            top: 0;
            width: 100%;
            z-index: 1000; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Branding Section */
        .branding {
            display: flex;
            align-items: center;
            padding: 10px 15px;
        }

        .branding img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .branding div p:first-child {
            font-size: 20px;
            font-weight: bold;
            color: #d2232a;
            margin: 0;
        }

        .branding div p:last-child {
            font-size: 12px;
            color: #333;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            flex-grow: 1;
            overflow: visible;
            position: relative; /* Set a positioning context */
    z-index: 100;
    clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
        }

        .navbar-container .navbar {
            display: flex;
            background-color: #d2232a;
            clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
            clip-path: none;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .navbar-nav .nav-item {
            margin: 0 5px;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 14px;
            font-weight: bold;
            text-transform: capitalize;
            text-align: center;
            padding: 15px 20px;
            position: relative;
            display: block;
            background-color: transparent;
        }

        /* Diagonal separators between nav items */
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10px;
            width: 10px;
            height: 100%;
            background-color: #b71e2a;
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        }

        .navbar-nav .nav-item:last-child .nav-link::before {
            display: none; /* Remove diagonal on the last nav item */
        }

        .navbar-nav .nav-link:hover {
            background-color: #b71e2a;
        }

        /* Dropdown Styling */
        .dropdown-menu {
            background-color: #b71e2a;
            border: none;
            position: absolute; /* Ensure it appears correctly */
             z-index: 1050; 
             display: none;
             background-color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu .dropdown-item {
            font-size: 14px;
            color: black;
        }

        .dropdown-menu .dropdown-item:hover {
            color: white; 
            background-color: #d2232a;
        }

        /* Media Queries for Responsiveness */
@media (max-width: 992px) {
    .navbar-toggler-icon {
        width: 25px !important;
        height: 2px !important;
    }

    .navbar-toggler-icon::before {
        top: -7px !important;
    }

    .navbar-toggler-icon::after {
        top: 7px !important;
    }

    .section-title,
    .footer h5 {
        font-size: 1.2rem !important;
    }

    .footer a {
        font-size: 0.9rem !important;
    }
}

@media (max-width: 768px) {
    .navbar-nav {
        text-align: center !important;
    }

    .navbar-nav .dropdown-menu {
        width: 100% !important; /* Full width dropdown for mobile */
    }

    .navbar-brand {
        font-size: 1.3rem !important;
    }

    .section-title {
        font-size: 1.1rem !important;
    }

    .footer h5,
    .footer a {
        font-size: 0.9rem !important;
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

</style>
</head>
<body>
<!-- Navbar Container -->
<div class="navbar-container">
        <!-- Branding Section -->
        <div class="branding">
            <a href="index.php">
                <img src="images/Redline LOGO.png" alt="Logo">
            </a>
            <div>
                <p>Redline Training Center</p>
                <p>ISO Certified | Registered with Aramco & Sabic</p>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="About-Us.php">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="FAC.php">Construction & Industrial Safety</a></li>
                                <li><a class="dropdown-item" href="FSER.php">Specialized Safety Training</a></li>
                                <li><a class="dropdown-item" href="WSE.php">Environmental Safety</a></li>
                                <li><a class="dropdown-item" href="SIT.php">Food Safety Training</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                                <li><a class="dropdown-item" href="On-Site Training.php">On-Site Training</a></li>
                                <li><a class="dropdown-item" href="HSE Consultancy.php">HSE Consultancy</a></li>
                                <li><a class="dropdown-item" href="Certification Programs.php">Certification Programs</a></li>
                                <li><a class="dropdown-item" href="Corporate Training.php">Corporate Training</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Redline Manpower Supply.php">Manpower Supply</a></li>
                        <li class="nav-item"><a class="nav-link" href="Bright Medical Company.php">Medicine Supply</a></li>
                        <li class="nav-item"><a class="nav-link" href="Equipment Rental.php">Equipment Rental</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

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

</div>
</div>
</div>

<!-- Footer -->
<footer class="footer" style="background: #f5f5f5; color: #000; padding: 20px 0; border-top: 5px solid #ce1126;">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
                <h5 style="font-weight: bold; color: #ce1126;">About Company</h5>
                <p>We Are Health & Environmental Training Center</p>
                <h6 style="font-weight: bold; color: #ce1126;">Quick Connect</h6>
                <!-- Social Icons -->
                <a href="#" class="social-icon" style="color: #000; margin-right: 10px; font-size: 20px;"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" style="color: #000; margin-right: 10px; font-size: 20px;"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon" style="color: #000; font-size: 20px;"><i class="fab fa-twitter"></i></a>
                <!-- Contact Info -->
                <p style="margin-top: 10px; font-size: 14px;">
                    <strong>Email:</strong> 
                    <a href="mailto:admin@redlinetrainingksa.com" style="color: #ce1126; text-decoration: none;">admin@redlinetrainingksa.com</a><br>
                    <strong>Phone:</strong> 
                    <a href="tel:+9660138225410" style="color: #ce1126; text-decoration: none;">(013) 822 5410</a> | 
                    <a href="tel:+966558294428" style="color: #ce1126; text-decoration: none;">+966558294428</a>
                </p>
            </div>
            <!-- Column 2 -->
            <div class="col-md-4 text-center">
                <h5 style="font-weight: bold; color: #ce1126;">Our Links</h5>
                <ul style="list-style-type: none; padding: 0; font-size: 14px;">
                    <li><a href="index.php" style="color: #000; text-decoration: none;">Get Started</a></li>
                    <li><a href="index.php" style="color: #000; text-decoration: none;">Our Team</a></li>
                    <li><a href="About-Us.php" style="color: #000; text-decoration: none;">About Us</a></li>
                    <li><a href="contact_us.php" style="color: #000; text-decoration: none;">Contact Us</a></li>
                </ul>
                <!-- QR Code -->
                <div style="margin-top: 10px;">
                    <img src="images/QR Code Redline Location.png" alt="Barcode" style="width: 100px; height: auto;">
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-md-4">
                <h5 style="font-weight: bold; color: #ce1126;">Your Map</h5>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.5073498939995!2d50.0603938!3d26.4251685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fd8cf6d42349%3A0x8b782acfaf6ea6d7!2sRedline%20Training%20Center!5e0!3m2!1sen!2ssa!4v1702561657226!5m2!1sen!2ssa" 
                    width="100%" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <div style="background: #002855; color: white; padding: 10px 0; text-align: center; margin-top: 10px;">
        <p style="margin: 0; font-size: 14px;">&copy; 2025 Redline Training Center. All Rights Reserved.</p>
    </div>
</footer>

<!-- Hover Effect CSS -->
<style>
    .social-icon {
        transition: color 0.3s ease;
    }

    .social-icon:hover i.fa-instagram {
        background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .social-icon:hover i.fa-facebook {
        color: #1877f2;
    }

    .social-icon:hover i.fa-twitter {
        color: #1da1f2;
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