<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Training | Redline Training Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
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

       /* Hero Section */
.hero {
    background: url('images/about-us-banner.jpg') no-repeat center center/cover;
    color: #fff;
    height: 300px;
    width: 100%; /* Ensure full width */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column; /* Stack items vertically */
    margin: 0; /* Remove margin */
}

.hero h1 {
    font-size: 2.5rem;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    margin: 0; /* Remove margin */
    padding: 0; /* Remove padding */
}

.hero p {
    font-size: 1.2rem;
    margin-top: 10px; /* Space between h1 and p */
}
/* Container for content */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

/* Styling for content sections */
.content {
    margin-top: 30px;
    background-color: #f9f9f9; /* Soft background color for contrast */
    border-radius: 8px; /* Rounded corners */
    padding: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Styling for heading */
.content h2 {
    font-size: 2.5rem;
    color: #004080; /* Professional blue */
    font-weight: bold;
    letter-spacing: 1px;
    margin-bottom: 20px; /* Space below the heading */
}

/* Paragraph styling */
.content p {
    font-size: 1.1rem;
    color: #333;
    line-height: 1.6;
    margin-bottom: 25px;
}

/* List styling */
.content ul {
    padding-left: 25px;
    margin-bottom: 25px;
}

.content ul li {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 15px;
    position: relative;
    padding-left: 30px;
}

/* Custom bullets */
.content ul li::before {
    
    font-size: 1.5rem;
    color: #004080;
    position: absolute;
    left: 0;
    top: 0;
}

/* Hover effect for list items */
.content ul li:hover {
    color: #004080;
    cursor: pointer;
}

.content ul li:hover::before {
    color: #002050;
}

/* Call-to-Action Section */
.cta {
    margin-top: 30px;
    text-align: center;
}

.cta a {
    display: inline-block;
    padding: 12px 20px;
    background-color: #004080;
    color: #fff;
    font-size: 1.2rem;
    font-weight: bold;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.cta a:hover {
    background-color: #002050;
}

#why-choose {
    background-color: #e6f7ff; 
}

/* Style for the 'How It Works' Section */
#how-it-works {
    background-color: #f0f0f0; /* Grey background */
    padding: 40px 20px;
    border-radius: 8px;
}

/* Container for the boxes */
.how-it-works-container {
    display: flex;
    flex-wrap: wrap; /* Allows boxes to wrap to the next row */
    gap: 20px; /* Space between boxes */
}

/* Individual box styling */
.how-it-box {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd; /* Simple border */
    border-radius: 8px; /* Rounded corners */
    flex: 1 1 calc(50% - 20px); /* Two boxes per row, with space between */
    box-sizing: border-box;
}

/* Ensuring text and strong elements are aligned */
.how-it-box strong {
    color: #004080;
    font-size: 1.1rem;
}

/* Adjust text size and padding for smaller screens */
@media (max-width: 768px) {
    .how-it-box {
        flex: 1 1 100%; /* Full width on smaller screens */
    }
}

#enhance-knowledge {
    background-color: #f9f9f9; 
}


#cta-section a {
    background-color: #004080; 
}


#cta-section a:hover {
    background-color: #002050; 
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

    <div class="hero">
        <h1>Corporate Training</h1>
        <p>Empowering organizations to foster safer workplaces.</p>
    </div>

    <div class="container">
    <!-- First Section: Why Choose Our Training Programs? -->
    <div class="content" id="why-choose">
        <h2>Why Choose Our Training Programs?</h2>
        <p>Customized training plans designed for companies of all sizes.</p>
        <ul>
            <li>Interactive sessions to engage employees and enhance safety practices.</li>
            <li>Post-training evaluations and certifications to measure success.</li>
        </ul>
    </div>

    <!-- Second Section: How It Works -->
<div class="content" id="how-it-works">
    <h2>How It Works:</h2>
    <div class="how-it-works-container">
        <div class="how-it-box">
            <strong>Consultation:</strong>
            <p>Identify your organization’s safety training needs.</p>
        </div>
        <div class="how-it-box">
            <strong>Customized Curriculum:</strong>
            <p>Develop courses tailored to your industry and workforce.</p>
        </div>
        <div class="how-it-box">
            <strong>Training Delivery:</strong>
            <p>Flexible scheduling with on-site or virtual training options.</p>
        </div>
        <div class="how-it-box">
            <strong>Assessment & Certification:</strong>
            <p>Evaluate participants’ performance and award certifications.</p>
        </div>
    </div>
</div>

    <!-- Third Section: Enhance Your Safety Knowledge -->
    <div class="content" id="enhance-knowledge">
        <h2>Enhance Your Safety Knowledge</h2>
        <p>For teams and individuals eager to learn more about health, safety, and environment (HSE) best practices, we offer specialized <a href="HSE.php" style="color: #004080; text-decoration: underline;">HSE Courses</a>. These courses are designed to strengthen workplace safety and compliance with industry standards.</p>
    </div>

    <!-- Call to Action Section -->
    <div class="cta" id="cta-section">
        <a href="HSE.php">Explore HSE Courses</a>
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
