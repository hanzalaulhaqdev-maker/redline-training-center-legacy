<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Redline Training Center</title>
    <link rel="icon" type="image/png" href="images/Redline LOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Redline Training Center",
  "url": "https://redlinetrainingksa.com/",
  "logo": "https://redlinetrainingksa.com/images/Redline LOGO.png"
}
</script>

   <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0 !important; 
            overflow-x: hidden !important;
        }

        #hero-carousel {
            height: 100vh; /* Make the hero section taller than the viewport */
        }

        #hero-carousel .carousel-item {
            height: 100%;
            opacity: 0; /* Initially make items invisible */
            transition: opacity 1s ease-in-out; /* Smooth transition */
        }

        #hero-carousel .carousel-item.active {
            opacity: 1; /* Show the active slide */
        }

        #hero-carousel .carousel-inner {
            height: 100%;
        }

        #hero-carousel .carousel-item img {
            height: 100%; /* Ensure the image stretches fully within the carousel item */
            object-fit: cover;
        }

        /* Adjusting content inside the hero carousel */
        .carousel-caption h1 {
            font-size: 3rem; /* Larger text for the title */
            line-height: 1.3;
            text-align: center;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.5);
            color: yellow !important;
            padding: 10px;
            border-radius: 5px;
        }

        /* Update to Hero text position */
        .hero-text {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            z-index: 10;
        }

        .section-title {
            color: #004080;
            margin-bottom: 20px;
        }

        .values-list, .industries-list {
            list-style-type: none;
            padding: 0;
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

        /* Adjusting content for welcome section */
        .container.py-5 {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important; 
        }

        /* Styling for sections */
        h2.section-title {
            font-size: 2rem;
            font-weight: 600;
            color: #004080;
            text-align: center;
            margin-bottom: 2rem;
        }

        h3.section-title {
            font-size: 1.6rem;
            color: #004080;
            margin-bottom: 1rem;
        }

        ul.values-list {
            font-size: 1.1rem;
            padding-left: 20px;
        }

        ul.values-list li {
            margin-bottom: 10px;
        }
        .row {
    margin-bottom: 0 !important; /* Reset row margins */
}
.col {
    margin-bottom: 0 !important; /* Reset column margins */
}
      /* General Styling for Hero Section */
.hero-section {
    display: flex;
    position: relative;
    height: 570px;
    width: 100%;
}

/* Hero Image */
.image-container {
    flex: 1;
    position: absolute; /* Absolute position to allow the image to extend behind the content */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0; /* Ensure the image is behind the content */
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Content Container */
.content-container {
    position: relative;
    z-index: 1; /* Ensure the text is above the image */
    width: 50%; /* Adjust the width of the content */
    background-color: #003366; /* Navy blue background */
    padding: 20px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 599px; /* Move the content container to the right */
    margin-right: 0; /* Ensure no margin on the right */
}

/* Cards Section: Eliminate space below */
#cards-container {
    margin-bottom: 0; /* Remove all margin below */
    padding-bottom: 0rem; /* Slight padding for visual balance */
}

/* Welcome Section: Eliminate space above */
.container.py-5 {
    margin-top: 0; /* Remove any margin above */
    padding-top: 0rem; /* Minimal padding above for spacing */
}

/* Row within Cards Section: Remove row-level spacing */
.row {
    margin-bottom: 0; /* No margin between rows */
}

/* Optional: Ensure alignment consistency */
.col-md-3, .col-md-6 {
    margin-bottom: 0 !important; /* Remove any margin applied to columns */
}

/* Heading and Tagline */
.heading {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.tagline {
    font-size: 1rem;
    margin-bottom: 20px;
}

/* Mission and Vision */
.mission-vision h3 {
    font-size: 1.25rem;
    margin-top: 10px;
}

.mission-vision p {
    font-size: 1rem;
}

/* General Styling for Core Value Cards */
.core-value-card {
    border: 1px solid #004080;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    position: relative;
    padding: 20px;
    margin-bottom: 20px;
    background-color: white;
    transition: transform 0.3s ease-in-out;
}

.core-value-card:hover {
    transform: translateY(-10px); /* Slightly lift the card when hovered */
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #004080;
    transition: color 0.3s ease;
}

.card-title:hover {
    color: #007bff; /* Change color on hover */
}

.card-text {
    font-size: 1rem;
    color: #555;
    line-height: 1.5;
}

/* Arrow Styles */
.arrow-container {
    position: absolute;
    bottom: 10px;
    right: 10px;
    transition: transform 0.3s ease-in-out;
}

.arrow {
    font-size: 1.5rem;
    color: #004080;
    cursor: pointer;
}

.arrow-container:hover {
    transform: translateX(20px); /* Move arrow to the right on hover */
}

/* Core Values Section Cards */
.card {
    background-color: #003366; /* Navy blue background */
    border: none;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    text-align: center;
    color: white;
    padding: 20px;
    position: relative;
    z-index: 10;  /* Ensure cards are above the hero section */
}

/* Hover effect for cards */
.card:hover {
    background-color: #004080; /* Slightly lighter navy color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transform: translateY(-10px); /* Move the card upwards */
}

#card1, #card2, #card3, #card4 {
    position: relative;
    top: -140px; 
    z-index: 10;
    
}
.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: white;
}

.card-text {
    font-size: 1rem;
    margin-bottom: 20px;
    color: white;
}

/* Arrow Styling */
.arrow-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.arrow {
    font-size: 1.5rem;
    color: white;
    transition: color 0.3s ease-in-out;
}

/* Hover effect for cards */
.card:hover {
    background-color: #004080; /* Lighter blue when hovered */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card:hover .arrow {
    color: #ffcc00; /* Change arrow color on hover */
}

/* Ensure equal height for the cards */
.row.g-4 .col-md-3 {
    display: flex;
    align-items: stretch; /* Make cards equally tall */
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.1rem;
    }

    .card-text {
        font-size: 0.9rem;
    }

    .arrow {
        font-size: 1.2rem;
    }
}

/* Our Commitment Section */
#our-commitment {
    width: 100%;
    height: 300px; /* Reduced height for a cleaner layout */
    background: url('images/Class room.jpg') no-repeat center center;
    background-size: cover; /* Ensure the image fills the section */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    color: yellow !important; /* Deep blue for text */
    position: relative; /* Ensure overlay is positioned correctly */
}

#our-commitment::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
    z-index: 1; /* Place the overlay behind the text */
}

#our-commitment-section {
    color: white !important; /* Ensure text color is consistent */
    position: relative;
    z-index: 2; /* Ensure text is above the overlay */
}

#our-commitment h2 {
    font-size: 2.5rem; /* Heading size */
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Add a subtle shadow for readability */
}

.commitment-text {
    font-size: 1.25rem;
    max-width: 700px; /* Limit text width for better readability */
    margin: 0 auto;
    line-height: 1.8;
    background: rgba(255, 255, 255, 0.8); /* Light background for better text contrast */
    padding: 20px 30px;
    border-radius: 10px; /* Smooth rounded corners */
    position: relative;
    z-index: 2; /* Ensure text block is above the overlay */
}

/* Why Choose Section */
#why-choose {
    background-color: #f8f9fa; /* Light grey background for contrast */
    padding: 50px 20px;
    text-align: center;
}

#why-choose h2 {
    font-size: 2.5rem; /* Bold and prominent heading */
    color: #004080; /* Deep blue for headings */
    margin-bottom: 30px;
    text-transform: uppercase;
    font-weight: bold;
}

.why-list {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
    font-size: 1.25rem;
    line-height: 1.8;
    color: #333; /* Neutral color for body text */
    list-style-type: none; /* Remove bullet points */
    padding: 0;
}

.why-list li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.why-list li::before {
    content: "✓"; /* Checkmark before each list item */
    color: #004080;
    font-weight: bold;
    margin-right: 10px;
    font-size: 1.5rem;
}

/* Meet Our Team Section */
#meet-our-team {
    padding: 50px 20px;
    background-color: #f8f9fa;
    text-align: center;
}

#meet-our-team h2 {
    font-size: 2.5rem;
    color: #004080;
    margin-bottom: 30px;
    text-transform: uppercase;
    font-weight: bold;
}

/* Wrapper for Horizontal Scrolling */
.team-container-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* Navigation Buttons */
.team-nav-btn {
    background-color: #004080;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    z-index: 10;
}

.team-nav-btn.left {
    left: 10px;
}

.team-nav-btn.right {
    right: 10px;
}

/* Team Container with Horizontal Scroll */
.team-container {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 20px 10px;
    max-height: 300px; /* Set a fixed height for the container */
    align-items: flex-start; /* Align all cards to the top */
}

.team-card {
    background-color: white;
    width: 250px;
    text-align: center;
    padding: 15px 10px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex-shrink: 0; /* Prevent cards from shrinking */
}

/* Ensure images fit consistently */
.team-card img {
    width: 100%;
    height: 150px; /* Set a fixed height for images */
    object-fit: cover; /* Maintain aspect ratio and cover the box */
    border-bottom: 3px solid #004080;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.team-card h5 {
    font-size: 1.25rem;
    color: #004080;
    margin: 10px 0 5px;
    font-weight: bold;
}

.team-card p {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
}

/* Hover Effects */
.team-card:hover {
    transform: translateY(-10px); /* Move card slightly upward */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
}

.team-card:hover img {
    transform: scale(1.05); /* Slightly enlarge the image */
}

/* Make sure that the team container scrolls horizontally */
.team-container::-webkit-scrollbar {
    display: none; /* Hide scrollbar for a cleaner look */
}

/* For better scroll control on mobile */
@media (max-width: 768px) {
    #meet-our-team h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .team-container {
        padding: 10px 0; /* Reduce padding on mobile */
    }

    .team-nav-btn {
        font-size: 1.2rem; /* Reduce button size */
    }
    
    .team-card {
        width: 220px; /* Slightly smaller cards */
    }
}

/* Industries We Serve Section */
#industries-we-serve {
    padding: 50px 20px;
    background-color: #f8f9fa;
    text-align: center;
    position: relative;
}

#industries-we-serve h2 {
    font-size: 3rem; /* Larger title */
    color: #004080;
    margin-bottom: 60px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 3px;
}

/* Container for the items */
.industries-container {
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
    position: relative;
}

/* Individual Industry Item */
.industry-item {
    position: relative;
    text-align: center;
    margin-bottom: 40px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.industry-item img {
    width: 150px; /* Large icons */
    height: 150px;
    object-fit: contain;
    border-radius: 50%;
    margin-bottom: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

/* Text Styling for Industry Names */
.industry-item h5 {
    font-size: 1.5rem;
    color: #004080;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Hover Effects: Making it Dynamic */
.industry-item:hover {
    transform: scale(1.1); /* Slightly enlarge the item */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); /* Enhance shadow */
}

.industry-item:hover img {
    transform: rotate(15deg); /* Rotate image slightly on hover */
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); /* Dynamic shadow effect */
}

/* Responsive Design */
@media (max-width: 768px) {
    #industries-we-serve h2 {
        font-size: 2.5rem; /* Adjust title size on mobile */
    }

    .industries-container {
        flex-direction: column;
        gap: 40px;
    }

    .industry-item img {
        width: 120px; /* Smaller icons for mobile */
        height: 120px;
    }

    .industry-item h5 {
        font-size: 1.2rem; /* Adjust font size */
    }
}

/* Responsive Styling */
@media (max-width: 768px) {
    .team-container {
        flex-direction: column;
        align-items: center;
    }

    .team-card {
        width: 90%;
    }
}

@media (max-width: 768px) {
    #our-commitment {
        height: auto; /* Adjust height for smaller screens */
        padding: 50px 20px; /* Add padding for mobile layout */
    }
    #our-commitment h2 {
        font-size: 2rem; /* Adjust heading size */
    }
    .commitment-text {
        font-size: 1rem;
        padding: 15px 20px; /* Adjust padding for smaller screens */
    }
}

/* Ensure responsiveness */
@media (max-width: 768px) {
    .hero-section {
        flex-direction: column;
        height: auto;
    }
    .image-container img {
        object-fit: contain; /* Adjust for smaller screen sizes */
    }
    .content-container {
        width: 100%;
        margin-left: 0;
    }
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
                            <li><a class="dropdown-item" href="Corporate Training.php">Corporate Training</a></li>
                                <li><a class="dropdown-item" href="On-Site Training.php">On-Site Training</a></li>
                                <li><a class="dropdown-item" href="HSE Consultancy.php">HSE Consultancy</a></li>
                                <li><a class="dropdown-item" href="Certification Programs.php">Certification Programs</a></li>
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

 <!-- Hero Section with Slider -->
<section id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-wrap="true">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="images/Road side.jpg" class="d-block w-100" alt="Road side Image">
            <div class="hero-text" style="color:yellow;">
                <h1>Empowering Safer Workplaces, Building Confident Professionals!</h1>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="images/Night_Enternce_Building.jpg" class="d-block w-100" alt="Night Enternce Building">
            <div class="hero-text" style="color:yellow;">
                <h1>Empowering Safer Workplaces, Building Confident Professionals!</h1>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<!-- Cards Section (Overlay on Hero) -->
<div class="container py-5" id="cards-container">
    <div class="row">
        <!-- Card 1: ARAMCO -->
        <div class="col-md-3 mb-4 card-overlay" id="card1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ARAMCO</h5>
                    <p class="card-text">We are Aramco Registered Center. <br> Vendor Number: 10113986</p>
                </div>
            </div>
        </div>
        <!-- Card 2: SABIC -->
        <div class="col-md-3 mb-4 card-overlay" id="card2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SABIC</h5>
                    <p class="card-text">We are SABIC Registered Vendor. <br> Vendor Number: 11053231</p>
                </div>
            </div>
        </div>
        <!-- Card 3: ISO -->
        <div class="col-md-3 mb-4 card-overlay" id="card3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ISO</h5>
                    <p class="card-text">We provide all kinds of ISO Classes/Certifications onsite & online platforms.</p>
                </div>
            </div>
        </div>
        <!-- Card 4: HSE Training -->
        <div class="col-md-3 mb-4 card-overlay" id="card4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">HSE Training</h5>
                    <p class="card-text">We provide all kinds of HSE Training/Certifications onsite & online platforms.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
        </div>
    </div>
</div>

<!-- Welcome Section -->
<div class="container py-5">
        <div class="row align-items-center" style="height: 100%;">
            <!-- Left Side: Logo or Image -->
            <div class="col-md-6 d-flex justify-content-center align-items-center mb-4 mb-md-0" style="height: 100%;">
                <img src="images/Welcome.jpg" class="img-fluid rounded" alt="Redline Training Center Logo" style="object-fit: cover; width: 100%; height: 100%; border-radius: 8px;">
            </div>

            <!-- Right Side: Text Content -->
            <div class="col-md-6 d-flex flex-column justify-content-center ps-md-5" style="height: 100%; padding-top: 2rem;">
                <h2 class="section-title mb-4" style="font-size: 2.6rem; font-weight: 800; color: #004080; line-height: 1.4;">
                    Welcome to Redline Training Center
                </h2>
                <p class="mb-3" style="font-size: 1.1rem; color: black; line-height: 1.6;">
                    At Redline Training Center, we are committed to empowering individuals and organizations with the skills, 
                    knowledge, and expertise needed to maintain safe and productive workplaces. Based in Saudi Arabia, 
                    we specialize in providing world-class training solutions tailored to meet the unique demands of industries and businesses.
                </p>
                <!-- Experience Section -->
                <div class="d-flex align-items-center mb-4">
                    <img src="images/experience-icon.png" alt="Experience Icon" style="width: 49px; height: 52px; margin-right: 15px;">
                    <span style="font-size: 1.3rem; font-weight: 700; color: #004080;">+5 Years of Experience</span>
                </div>

                <p class="mb-3" style="font-size: 1.1rem; color: black; line-height: 1.6;">
                    Our training programs are designed to provide practical, hands-on experience and knowledge that can be immediately applied in real-world scenarios. 
                    Whether you’re an individual looking to enhance your skills or an organization striving for better safety standards, Redline Training Center offers 
                    comprehensive solutions to meet your needs.
                </p>
            </div>
        </div>
    </div>

<!-- Core Values Section -->
<div class="container py-5">
    <h2 class="section-title" style="text-align: center; font-size: 2.6rem; font-weight: 800; color: #004080; margin-bottom: 40px;">
        Our Core Values
    </h2>
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card core-value-card">
                <div class="card-body">
                    <h5 class="card-title">Commitment to Excellence</h5>
                    <p class="card-text">We strive to exceed expectations in all training sessions, ensuring top-quality outcomes for our clients.</p>
                    <div class="arrow-container">
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card core-value-card">
                <div class="card-body">
                    <h5 class="card-title">Safety Above All</h5>
                    <p class="card-text">Safety is our number one priority. We promote a culture of safety that drives workplace efficiency and peace of mind.</p>
                    <div class="arrow-container">
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="card core-value-card">
                <div class="card-body">
                    <h5 class="card-title">Integrity and Trust</h5>
                    <p class="card-text">We operate with honesty and transparency, upholding the highest ethical standards in all our practices.</p>
                    <div class="arrow-container">
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="card core-value-card">
                <div class="card-body">
                    <h5 class="card-title">Innovation and Growth</h5>
                    <p class="card-text">We embrace continuous innovation and adapt modern methods to provide impactful and engaging training experiences.</p>
                    <div class="arrow-container">
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Commitment Section -->
<section id="our-commitment">
    <div id="our-commitment-section">
        <h2>Our Commitment</h2>
        <p>At Redline Training Center, we believe that safety is not just a requirement but a responsibility.</p>
        <p>Our commitment is to deliver training that transforms workplaces into safer, more productive 
        environments for everyone.</p>
        <p>Join us in our mission to build a safer tomorrow.</p>
    </div>
</section>

    <!-- Why Choose Us Section -->
    <section id="why-choose">
    <h2>Why Choose Redline Training Center?</h2>
    <ul class="why-list">
        <li>Certified Trainers: Learn from industry experts with years of hands-on experience.</li>
        <li>Customized Programs: Training designed to meet the specific needs of your business or organization.</li>
        <li>Affordable & Accessible: High-quality training at competitive prices.</li>
        <li>Real-World Application: Our training is practical and immediately applicable to workplace scenarios.</li>
    </ul>
</section>

   <!-- Meet Our Team Section -->
<section id="meet-our-team">
    <h2>Meet Our Team</h2>
    <div class="team-container-wrapper">
        <button class="team-nav-btn left" id="prev-btn">←</button>
        <div class="team-container">
            <!-- Team Member 1 -->
            <div class="team-card">
                <img src="images/profile.png" alt="Team Member 1">
                <h5>Jameel Arbani</h5>
                <p style="font-weight:bolder;">Operation Manager</p>
                <p><strong>Working Here Since 6 years</strong></p>
                <p>offers expert safety training, manpower supply, equipment rentals, and industrial material solutions for businesses across Saudi Arabia.</p>
            </div>
            <!-- Team Member 2 -->
            <div class="team-card">
                <img src="images/profile.png" alt="Team Member 2">
                <h5>Saeed Ur Rehman</h5>
                <p style="font-weight:bolder;">Accounts Manager</p>
                <p><strong>Working Here Since 3 years</strong></p>
                <p>Ensures seamless financial operations while supporting expert training, manpower supply, and industrial solutions in Saudi Arabia.</p>
            </div>
            <!-- Team Member 3 -->
            <div class="team-card">
                <img src="images/profile.png" alt="Team Member 3">
                <h5>Waqar Haider</h5>
                <p style="font-weight:bolder;">Marketing Manager</p>
                <p><strong>Working Here Since 3 years</strong></p>
                <p>drives impactful marketing strategies, supporting our training, manpower supply, and industrial solutions in Saudi Arabia.</p>
            </div>
            <!-- Team Member 4 -->
            <div class="team-card">
                <img src="images/profile.png" alt="Team Member 4">
                <h5>Mohammad Ahmed Al-Jaffer</h5>
                <p><strong>General Manager</strong></p>
                <p>Redline Training Center, led by General Manager and owner Mohammad Ahmed Al-Jaffer, delivers top-tier training, manpower, and industrial solutions, serving businesses across Saudi Arabia with excellence.</p>
            </div>
            <!-- Team Member 5 -->
            <div class="team-card">
                <img src="images/profile.png" alt="Team Member 5">
                <h5>Ukasha Asif</h5>
                <p style="font-weight:bolder;">supervisor Training</p>
                <p><strong>Working Here Since 4 years</strong></p>
                <p>As Supervisor Training for 4 years, specializes in managing professional training programs, manpower services, and industrial solutions across Saudi Arabia.</p>
            </div>
        </div>
        <button class="team-nav-btn right" id="next-btn">→</button>
    </div>
</section>

<!-- Industries We Serve Section -->
<section id="industries-we-serve">
    <h2>Industries We Serve</h2>
    <div class="industries-container">
        <!-- Industry 1 -->
        <div class="industry-item">
            <img src="images/construction-icon.jpg" alt="Construction">
            <h5>Construction</h5>
        </div>
        <!-- Industry 2 -->
        <div class="industry-item">
            <img src="images/oil-gas-icon.jpg" alt="Oil & Gas">
            <h5>Oil & Gas</h5>
        </div>
        <!-- Industry 3 -->
        <div class="industry-item">
            <img src="images/healthcare-icon.jpg" alt="Healthcare">
            <h5>Healthcare</h5>
        </div>
        <!-- Industry 4 -->
        <div class="industry-item">
            <img src="images/hospitality-icon.jpg" alt="Hospitality">
            <h5>Hospitality</h5>
        </div>
        <!-- Industry 5 -->
        <div class="industry-item">
            <img src="images/manufacturing-icon.jpg" alt="Manufacturing">
            <h5>Manufacturing</h5>
        </div>
    </div>
</section>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Get references to the buttons and the team container
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const teamContainer = document.querySelector('.team-container');

// Add event listeners to buttons
prevBtn.addEventListener('click', () => {
    teamContainer.scrollBy({ left: -300, behavior: 'smooth' }); // Scroll left
});

nextBtn.addEventListener('click', () => {
    teamContainer.scrollBy({ left: 300, behavior: 'smooth' }); // Scroll right
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

</body>
</html>