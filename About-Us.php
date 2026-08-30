<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us | Redline Training Center</title>
    <link rel="icon" type="image/png" href="images/Redline LOGO.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif !important;
            line-height: 1.6 !important;
            margin: 0 !important; 
            overflow-x: hidden !important;
            padding: auto !important;
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

        h1, h2, h3 {
            color: #004080 !important;
            font-weight: bold !important;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        /* Hero Section */
.hero {
    background: url('images/about-us-banner.jpg') no-repeat center center/cover;
    color: #fff;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative; /* Ensure proper positioning context */
    z-index: 1; /* Lower z-index than navbar */
}

.hero h1 {
    font-size: 2.5rem;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}


        .who-we-are {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding-top: 50px;
}

.triangle-container {
    position: relative;
    width: 50%;
    height: 100%;
    clip-path: polygon(0 0, 100% 50%, 0 100%);
    overflow: hidden;
}

.triangle-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1.1); /* Slight zoom for better fit */
}

.who-we-are-content {
    width: 50%;
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
    padding: 20px 0;
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

    <!-- Hero Section -->
    <section class="hero">
        <h1>About Us</h1>
    </section>

    <!-- Who We Are Section -->
    <section class="who-we-are container">
    <div class="triangle-container">
        <img src="images/Safety Training field.png" alt="Training Image" class="triangle-image">
    </div>
    <div class="who-we-are-content">
        <h2 class="section-title">Who We Are</h2>
        <p>At <b>Redline Training Center</b>, we are passionate about creating safer work environments and empowering individuals with the knowledge and skills needed to respond effectively to workplace challenges. Located in Saudi Arabia, we provide comprehensive training programs designed to meet the unique demands of various industries, including construction, oil and gas, healthcare, and manufacturing.</p>
        <p>With a strong emphasis on practical learning and real-world application, our programs are tailored to equip professionals and organizations with tools to mitigate risks and enhance safety compliance.</p>
    </div>
</section>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
