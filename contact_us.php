<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - HighCare Medical Center</title>
    <link rel="icon" type="image/png" href="images/Redline LOGO.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
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
        .contact-section {
            background: linear-gradient(135deg, #007bff, #00bfae);
            color: white;
            text-align: center;
            padding: 100px 50px;
        }

        .contact-section h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .contact-section p {
            font-size: 1.2em;
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        .contact-form {
            background-color: white;
            color: #333;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: -50px auto 50px auto;
        }

        .contact-form h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 30px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.1em;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 15px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 150px;
        }

        .form-group button {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .contact-info {
            margin-top: 50px;
            text-align: center;
        }

        .contact-info p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .contact-info i {
            color: #007bff;
            margin-right: 10px;
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

    <div class="contact-section">
        <h1>Contact Us</h1>
        <p>Have questions or need assistance? Reach out to us, and we’ll get back to you as soon as possible. We are here to help!</p>
    </div>

    <div class="contact-form">
        <h2>Get in Touch</h2>

        <form action="submit_contact.php" method="POST">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit">Send Message</button>
    </div>
</form>
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
