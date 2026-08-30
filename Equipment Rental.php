<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Rental | Redline Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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

        header, footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        .intro-section {
        background: linear-gradient(135deg, #1d3557, #457b9d);
        color: white;
        padding: 60px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        margin: 40px auto;
        max-width: 1000px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .intro-section:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.2);
    }

    .intro-section h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.2px;
    }

    .intro-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        max-width: 850px;
        margin: 0 auto;
        font-weight: 300;
    }

    /* Mission & Vision Infographic Section */
#mission-vision-infographic {
    text-align: center;
    padding: 50px 20px;
    background-color: #f8f9fa;
}

#mission-vision-infographic h2 {
    font-size: 2.5rem;
    color: #004080;
    margin-bottom: 40px;
    text-transform: uppercase;
    font-weight: bold;
}

/* Infographic Container */
.infographic-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Ensure responsiveness */
    gap: 20px; /* Add spacing between items */
}

/* Individual Infographic Item */
.infographic-item {
    display: flex;
    align-items: center;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    position: relative;
    min-width: 300px;
    max-width: 400px;
    text-align: left;
}

/* Icon Circle */
.icon-circle {
    background-color: #004080;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
}

.icon-circle img {
    width: 40%;
    height: 40%;
    filter: brightness(100) invert(1); /* Ensures white icons are clear */
}

/* Content */
.content h3 {
    font-size: 1.5rem;
    margin: 0 0 10px;
    color: #004080;
    font-weight: bold;
}

.content p {
    font-size: 1rem;
    color: #333;
    margin: 0;
}

/* Arrow */
.arrow {
    font-size: 2rem;
    font-weight: bold;
    color: #004080;
    margin-left: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .infographic-container {
        flex-direction: column; /* Stack items vertically */
        gap: 30px;
    }

    .infographic-item {
        text-align: center;
        flex-direction: column;
    }

    .icon-circle {
        margin: 0 auto 15px;
    }

    .arrow {
        display: none; /* Hide arrows on smaller screens */
    }
}

        .container {
            padding: 2em 10%;
        }
        h1, h2, h3 {
            color: #004080;
        }
        .section {
            margin-bottom: 2em;
        }

        .values-section {
    background-color: #ffffff;
    padding: 50px;
    border: 2px solid #007bff;
    border-radius: 8px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    text-align: center;
    max-width: 850px;
    margin: 50px auto;
}

.values-section h2 {
    font-size: 2.8em;
    color: #007bff;
    margin-bottom: 30px;
    font-weight: bold;
}

.values-section ul {
    list-style: none;
    padding: 0;
}

.values-section li {
    font-size: 1.3em;
    margin: 25px 0;
    line-height: 1.9;
    color: #555;
    position: relative;
    padding-left: 45px;
    text-align: left;
}

.values-section li::before {
    content: '\2605';
    font-size: 1.6em;
    color: #007bff;
    position: absolute;
    left: 0;
    top: 5px;
}

.highlight {
    color: #0056b3;
    font-weight: 700;
}
.products-services-section {
    background-color: #f5f5f5;
    padding: 70px 50px;
    border-left: 5px solid #007bff;
    border-right: 5px solid #007bff;
    text-align: left;
    max-width: 1000px;
    margin: 50px auto;
}

.products-services-section h2 {
    font-size: 2.8em;
    color: #0056b3;
    margin-bottom: 40px;
    text-align: center;
    font-weight: 700;
}

.products-services-section ul {
    list-style: none;
    padding: 0;
}

.products-services-section li {
    font-size: 1.3em;
    margin: 20px 0;
    line-height: 2;
    color: #444;
    position: relative;
    padding-left: 50px;
}

.products-services-section li::before {
    content: '\2022';
    font-size: 2em;
    color: #007bff;
    position: absolute;
    left: 0;
    top: 5px;
}
 /* Our Commitment Section */
 #our-commitment {
    width: 100%;
    height: 300px; /* Reduced height for a cleaner layout */
    background: url('images/Bin Hendy.jpg') no-repeat center center;
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
    background: rgba(0, 0, 0, 0.7); /* Black overlay with 70% opacity */
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

.choose-us-section {
    background-color: #f5f5f5;
    padding: 70px 50px;
    border-left: 5px solid #007bff;
    border-right: 5px solid #007bff;
    text-align: left;
    max-width: 1000px;
    margin: 50px auto;
}

.choose-us-section h2 {
    font-size: 2.8em;
    color: #0056b3;
    margin-bottom: 40px;
    text-align: center;
    font-weight: 700;
}

.choose-us-section ul {
    list-style: none;
    padding: 0;
}

.choose-us-section li {
    font-size: 1.3em;
    margin: 20px 0;
    line-height: 2;
    color: #444;
    position: relative;
    padding-left: 50px;
}

.choose-us-section li::before {
    content: '\2713'; /* Unicode for tick symbol */
    font-size: 2em;
    color: #007bff;
    position: absolute;
    left: 0;
    top: 5px;
}

.highlight {
    font-weight: 700;
    color: #0056b3;
}

.csr-section {
    background: linear-gradient(135deg, #007bff, #00bfae); /* Blue gradient background */
    color: white;
    padding: 80px 50px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    max-width: 1200px;
    margin: 50px auto;
    position: relative;
    overflow: hidden;
}

.csr-section::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    animation: pulse 5s infinite ease-in-out;
}

.csr-section h2 {
    font-size: 3.5em;
    margin-bottom: 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #fff;
    animation: fadeIn 2s ease-in-out;
}

.csr-section p {
    font-size: 1.3em;
    line-height: 1.6;
    color: #f5f5f5;
    margin-bottom: 40px;
    animation: fadeIn 3s ease-in-out;
}

@keyframes pulse {
    0% {
        transform: translate(-50%, -50%) scale(1);
    }
    50% {
        transform: translate(-50%, -50%) scale(1.1);
    }
    100% {
        transform: translate(-50%, -50%) scale(1);
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
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

<div class="intro-section">
    <h2 style="color:white;">Introduction</h2>
    <p>Redline Training Center is a leading supplier and distributor of high-quality industrial products, equipment, and services to businesses in Saudi Arabia. We specialize in providing a wide range of solutions for various industries, including industrial and civil products supply across Saudi Arabia.</p>
</div>


<div class="values-section">
    <h2>Core Values</h2>
    <ul>
        <li><span class="highlight">Quality Assurance:</span> We provide only the highest quality products, backed by world-class suppliers and stringent quality control standards.</li>
        <li><span class="highlight">Customer-Centric Approach:</span> We focus on understanding our clients' needs and providing tailored solutions.</li>
        <li><span class="highlight">Innovation:</span> Constantly adapting to industry trends, embracing new technologies, and offering cutting-edge solutions.</li>
        <li><span class="highlight">Integrity:</span> We conduct business with transparency, ethics, and professionalism.</li>
        <li><span class="highlight">Sustainability:</span> Promoting environmentally-friendly and energy-efficient products and services.</li>
    </ul>
</div>

 <!-- Mission & Vision Section -->
 <section id="mission-vision-infographic">
    <h2>Our Mission & Vision</h2>
    <div class="infographic-container">
        <!-- Mission -->
        <div class="infographic-item">
            <div class="icon-circle">
                <img src="images/mission-icon.webp" alt="Mission Icon">
            </div>
            <div class="content">
                <h3>Mission</h3>
                <p>To ensure safer work environments through world-class training and education.</p>
            </div>
            <div class="arrow">→</div>
        </div>

        <!-- Vision -->
        <div class="infographic-item">
            <div class="icon-circle">
                <img src="images/vision-icon.png" alt="Vision Icon">
            </div>
            <div class="content">
                <h3>Vision</h3>
                <p>To be the leading safety training provider in the region.</p>
            </div>
            <div class="arrow">→</div>
        </div>
    </div>
</section>

<div class="products-services-section">
    <h2>Products & Services</h2>
    <ul>
        <li><span class="highlight">Industrial Equipment Supply:</span> Heavy machinery, pumps, valves, compressors, power generation equipment, boilers, and automation systems.</li>
        <li><span class="highlight">Construction Materials & Supplies:</span> Steel, rebar, cement, concrete, electrical, and HVAC equipment.</li>
        <li><span class="highlight">Oil and Gas Equipment:</span> Drilling tools, pipeline systems, refining components.</li>
        <li><span class="highlight">Safety Equipment:</span> PPE, firefighting gear, and industrial safety systems.</li>
        <li><span class="highlight">Logistics and Distribution:</span> Custom logistics, warehousing, and inventory management across Saudi Arabia.</li>
    </ul>
</div>

 <!-- Our Commitment Section -->
 <section id="our-commitment">
    <div id="our-commitment-section">
        <h2 style="color:white;">Target Market</h2>
        <p style="color:white;">Our products cater to industries including Oil and Gas, Manufacturing, Construction, Utilities, and the Petrochemical sector.</p>
    </div>
</section>

<div class="choose-us-section">
    <h2>Why Choose Us</h2>
    <ul>
        <li><span class="highlight">Local Expertise:</span> In-depth market knowledge and adherence to local standards.</li>
        <li><span class="highlight">Strategic Partnerships:</span> Collaborations with global manufacturers for top-tier solutions.</li>
        <li><span class="highlight">Commitment to Quality:</span> Stringent adherence to international standards.</li>
        <li><span class="highlight">End-to-End Solutions:</span> Comprehensive services from procurement to delivery.</li>
        <li><span class="highlight">Sustainability Focus:</span> Energy-efficient solutions to reduce costs and environmental impact.</li>
    </ul>
</div>

<div class="csr-section">
    <h2>CSR - Corporate Social Responsibility</h2>
    <p>We are dedicated to supporting local initiatives, workforce training, and environmental sustainability, aligning our operations with Saudi Arabia's Vision 2030 goals.</p>
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