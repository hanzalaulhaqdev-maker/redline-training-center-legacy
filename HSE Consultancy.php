<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSE Consultancy — Redline Training Center</title>
    <link rel="icon" type="image/png" href="images/Redline LOGO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --red:#C8102E;--red-dark:#9B0C23;--red-light:#E8304A;
            --navy:#0D1B3E;--gold:#C9973A;--gold-light:#E4B75A;
            --off-white:#F8F5F0;--smoke:#EEEBE6;--charcoal:#2C2C2C;
            --mid-grey:#7A7A7A;--light-grey:#D8D4CE;--white:#FFFFFF;
            --font-display:'Cormorant Garamond',Georgia,serif;
            --font-body:'DM Sans',sans-serif;
            --nav-h:76px;--radius:4px;--trans:0.3s cubic-bezier(0.4,0,0.2,1);
        }
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
        html{scroll-behavior:smooth;}
        body{font-family:var(--font-body);background:var(--white);color:var(--charcoal);overflow-x:hidden;padding-top:var(--nav-h);}
        a{text-decoration:none;color:inherit;}
        img{max-width:100%;display:block;}

        /* NAV */
        .rl-nav{position:fixed;top:0;left:0;right:0;z-index:1000;height:var(--nav-h);display:flex;align-items:stretch;background:var(--white);box-shadow:0 1px 0 var(--light-grey),0 4px 24px rgba(0,0,0,0.06);}
        .rl-brand{display:flex;align-items:center;gap:12px;padding:0 24px;flex-shrink:0;border-right:1px solid var(--smoke);}
        .rl-brand img{width:44px;height:auto;}
        .rl-brand-text p:first-child{font-family:var(--font-display);font-size:1.05rem;font-weight:700;color:var(--red);line-height:1;}
        .rl-brand-text p:last-child{font-size:0.67rem;font-weight:500;letter-spacing:0.08em;text-transform:uppercase;color:var(--mid-grey);margin-top:2px;}
        .rl-nav-links{display:flex;align-items:stretch;list-style:none;margin:0;padding:0;flex-grow:1;}
        .rl-nav-links>li{display:flex;align-items:stretch;}
        .rl-nav-links>li>a,.rl-nav-links>li>.rl-dropdown-trigger{display:flex;align-items:center;gap:5px;padding:0 18px;font-size:0.8rem;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;color:var(--charcoal);border-bottom:2px solid transparent;transition:color var(--trans),border-color var(--trans),background var(--trans);background:none;border-top:none;border-left:none;border-right:none;cursor:pointer;white-space:nowrap;font-family:var(--font-body);}
        .rl-nav-links>li>a:hover,.rl-nav-links>li>.rl-dropdown-trigger:hover{color:var(--red);border-bottom-color:var(--red);background:rgba(200,16,46,0.03);}
        .rl-nav-links>li>.rl-dropdown-trigger i{font-size:0.65rem;transition:transform var(--trans);}
        .rl-nav-links>li.open>.rl-dropdown-trigger i{transform:rotate(180deg);}
        .rl-nav-cta{display:flex;align-items:center;padding:0 20px;border-left:1px solid var(--smoke);flex-shrink:0;}
        .rl-nav-cta a{background:var(--red);color:var(--white);padding:9px 22px;font-size:0.78rem;font-weight:600;letter-spacing:0.07em;text-transform:uppercase;border-radius:var(--radius);transition:background var(--trans);}
        .rl-nav-cta a:hover{background:var(--red-dark);color:var(--white);}
        .rl-dropdown{position:relative;}
        .rl-dropdown-menu{position:absolute;top:100%;left:0;background:var(--white);border:1px solid var(--smoke);border-top:2px solid var(--red);box-shadow:0 12px 40px rgba(0,0,0,0.12);min-width:240px;border-radius:0 0 var(--radius) var(--radius);opacity:0;transform:translateY(-8px);pointer-events:none;transition:opacity var(--trans),transform var(--trans);z-index:999;}
        .rl-dropdown.open .rl-dropdown-menu{opacity:1;transform:translateY(0);pointer-events:auto;}
        .rl-dropdown-menu a{display:flex;align-items:center;gap:10px;padding:11px 20px;font-size:0.82rem;font-weight:500;color:var(--charcoal);border-bottom:1px solid var(--smoke);transition:background var(--trans),color var(--trans),padding-left var(--trans);}
        .rl-dropdown-menu a:last-child{border-bottom:none;}
        .rl-dropdown-menu a i{color:var(--red);font-size:0.75rem;width:14px;}
        .rl-dropdown-menu a:hover{background:var(--off-white);color:var(--red);padding-left:26px;}
        .rl-hamburger{display:none;flex-direction:column;gap:5px;padding:0 20px;cursor:pointer;background:none;border:none;margin-left:auto;}
        .rl-hamburger span{display:block;width:24px;height:2px;background:var(--charcoal);border-radius:2px;transition:all var(--trans);}
        .rl-hamburger.open span:nth-child(1){transform:rotate(45deg) translate(5px,5px);}
        .rl-hamburger.open span:nth-child(2){opacity:0;}
        .rl-hamburger.open span:nth-child(3){transform:rotate(-45deg) translate(5px,-5px);}
        .rl-mobile-nav{display:none;position:fixed;top:var(--nav-h);left:0;right:0;background:var(--white);border-top:1px solid var(--smoke);box-shadow:0 20px 60px rgba(0,0,0,0.15);z-index:999;max-height:calc(100vh - var(--nav-h));overflow-y:auto;}
        .rl-mobile-nav.open{display:block;}
        .rl-mobile-nav a{display:block;padding:14px 24px;font-size:0.88rem;font-weight:600;letter-spacing:0.04em;color:var(--charcoal);border-bottom:1px solid var(--smoke);transition:background var(--trans),color var(--trans);}
        .rl-mobile-nav a:hover{background:var(--off-white);color:var(--red);}
        .rl-mobile-nav .mobile-sub a{padding-left:40px;font-weight:400;font-size:0.82rem;color:var(--mid-grey);background:var(--off-white);}
        .rl-mobile-cta{padding:20px 24px;}
        .rl-mobile-cta a{display:block;text-align:center;background:var(--red);color:var(--white)!important;border-radius:var(--radius);border-bottom:none;}
        @media(max-width:900px){.rl-nav-links,.rl-nav-cta{display:none;}.rl-hamburger{display:flex;}}

        /* PAGE HERO */
        .page-hero{background:linear-gradient(135deg,var(--navy) 0%,#1a2f5e 100%);padding:72px 0 60px;position:relative;overflow:hidden;}
        .page-hero::before{content:'';position:absolute;inset:0;background:url('images/Road side.jpg') center/cover no-repeat;opacity:0.08;}
        .page-hero-inner{position:relative;color:var(--white);}
        .page-breadcrumb{font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.5);margin-bottom:14px;}
        .page-breadcrumb a{color:var(--gold-light);transition:color var(--trans);}
        .page-breadcrumb a:hover{color:var(--white);}
        .page-breadcrumb span{margin:0 8px;}
        .page-hero-inner h1{font-family:var(--font-display);font-size:clamp(2.4rem,5vw,4rem);font-weight:700;color:var(--white);line-height:1.1;}
        .page-hero-inner h1 em{font-style:italic;color:var(--gold-light);}
        .page-hero-inner p{max-width:520px;font-size:1rem;color:rgba(255,255,255,0.72);line-height:1.7;margin-top:14px;}
        .hero-tag{display:inline-flex;align-items:center;gap:8px;background:rgba(200,16,46,0.2);border:1px solid rgba(200,16,46,0.4);border-radius:var(--radius);padding:6px 14px;font-size:0.72rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold-light);margin-bottom:18px;}

        /* MAIN CONTENT */
        .content-section{padding:80px 0;}
        .content-grid{display:grid;grid-template-columns:1fr 1.3fr;gap:64px;align-items:start;}

        /* Section label */
        .section-label{display:inline-flex;align-items:center;gap:10px;font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--gold);margin-bottom:14px;}
        .section-label::before{content:'';display:block;width:28px;height:1px;background:var(--gold);}
        .section-heading{font-family:var(--font-display);font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;line-height:1.15;color:var(--navy);margin-bottom:20px;}
        .section-heading span{color:var(--red);}

        .intro-text{font-size:1rem;color:#555;line-height:1.8;margin-bottom:24px;}

        /* Services list */
        .services-list{list-style:none;margin-bottom:32px;}
        .services-list li{display:flex;align-items:flex-start;gap:14px;padding:16px 0;border-bottom:1px solid var(--smoke);}
        .services-list li:last-child{border-bottom:none;}
        .svc-icon{width:40px;height:40px;background:rgba(200,16,46,0.08);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--red);font-size:0.9rem;flex-shrink:0;}
        .svc-text h5{font-family:var(--font-display);font-size:1.05rem;font-weight:700;color:var(--navy);margin-bottom:2px;}
        .svc-text p{font-size:0.85rem;color:var(--mid-grey);line-height:1.6;}

        /* CTA button */
        .btn-primary-rl{display:inline-flex;align-items:center;gap:10px;background:var(--red);color:var(--white);padding:14px 32px;font-family:var(--font-body);font-size:0.85rem;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;border:none;border-radius:var(--radius);cursor:pointer;transition:background var(--trans),transform var(--trans),box-shadow var(--trans);}
        .btn-primary-rl:hover{background:var(--red-dark);transform:translateY(-2px);box-shadow:0 8px 24px rgba(200,16,46,0.28);color:var(--white);}

        /* Stats strip */
        .stats-strip{background:var(--navy);padding:56px 0;}
        .stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(255,255,255,0.08);}
        .stat-block{background:var(--navy);padding:36px 28px;text-align:center;}
        .stat-block strong{display:block;font-family:var(--font-display);font-size:2.8rem;font-weight:700;color:var(--gold-light);line-height:1;}
        .stat-block span{font-size:0.8rem;letter-spacing:0.06em;text-transform:uppercase;color:rgba(255,255,255,0.5);margin-top:6px;display:block;}

        /* Why us strip */
        .why-strip{padding:80px 0;background:var(--off-white);}
        .why-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px;}
        .why-card{background:var(--white);border:1px solid var(--smoke);border-radius:var(--radius);padding:32px 26px;transition:transform var(--trans),box-shadow var(--trans),border-color var(--trans);position:relative;overflow:hidden;}
        .why-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--red);transform:scaleX(0);transform-origin:left;transition:transform var(--trans);}
        .why-card:hover{transform:translateY(-6px);box-shadow:0 20px 60px rgba(0,0,0,0.1);border-color:transparent;}
        .why-card:hover::before{transform:scaleX(1);}
        .why-card-num{font-family:var(--font-display);font-size:2.8rem;font-weight:700;color:rgba(200,16,46,0.08);line-height:1;margin-bottom:12px;}
        .why-card h4{font-family:var(--font-display);font-size:1.2rem;font-weight:700;color:var(--navy);margin-bottom:8px;}
        .why-card p{font-size:0.85rem;color:var(--mid-grey);line-height:1.7;}

        /* img */
        .content-img{width:100%;height:460px;object-fit:cover;border-radius:var(--radius);}

        /* FOOTER */
        footer{background:var(--navy);color:rgba(255,255,255,0.7);}
        .footer-main{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:48px;padding:72px 0 48px;border-bottom:1px solid rgba(255,255,255,0.08);}
        .footer-brand img{width:52px;margin-bottom:12px;}
        .footer-brand h4{font-family:var(--font-display);font-size:1.3rem;font-weight:700;color:var(--white);margin-bottom:4px;}
        .footer-brand .tagline{font-size:0.72rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold-light);margin-bottom:16px;}
        .footer-brand p{font-size:0.85rem;line-height:1.7;margin-bottom:20px;}
        .footer-socials{display:flex;gap:10px;margin-bottom:20px;}
        .footer-socials a{width:36px;height:36px;border:1px solid rgba(255,255,255,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.55);font-size:0.8rem;transition:background var(--trans),border-color var(--trans),color var(--trans);}
        .footer-socials a:hover{background:var(--red);border-color:var(--red);color:var(--white);}
        .footer-contact-item{display:flex;align-items:center;gap:10px;margin-bottom:8px;font-size:0.83rem;}
        .footer-contact-item i{color:var(--red-light);font-size:0.8rem;width:14px;}
        .footer-contact-item a{color:rgba(255,255,255,0.7);transition:color var(--trans);}
        .footer-contact-item a:hover{color:var(--white);}
        .footer-col h5{font-family:var(--font-display);font-size:1rem;font-weight:700;color:var(--white);margin-bottom:20px;padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);}
        .footer-links{list-style:none;}
        .footer-links li{margin-bottom:10px;}
        .footer-links a{font-size:0.83rem;color:rgba(255,255,255,0.6);display:flex;align-items:center;gap:6px;transition:color var(--trans),gap var(--trans);}
        .footer-links a::before{content:'→';font-size:0.7rem;color:var(--red-light);}
        .footer-links a:hover{color:var(--white);gap:10px;}
        .footer-map{border-radius:var(--radius);overflow:hidden;border:1px solid rgba(255,255,255,0.08);}
        .footer-bottom{padding:20px 0;display:flex;align-items:center;justify-content:space-between;font-size:0.78rem;color:rgba(255,255,255,0.35);}
        .footer-qr img{width:80px;border-radius:var(--radius);opacity:0.7;margin-top:12px;}

        @media(max-width:1100px){.footer-main{grid-template-columns:1fr 1fr;gap:36px;}}
        @media(max-width:900px){.content-grid{grid-template-columns:1fr;gap:36px;}.stats-grid{grid-template-columns:repeat(2,1fr);}.why-cards{grid-template-columns:1fr 1fr;}}
        @media(max-width:640px){.why-cards{grid-template-columns:1fr;}.footer-main{grid-template-columns:1fr;}.footer-bottom{flex-direction:column;gap:8px;text-align:center;}}
    </style>
</head>
<body>

<!-- NAV -->
<nav class="rl-nav">
    <a href="index.php" class="rl-brand">
        <img src="images/Redline LOGO.png" alt="Redline Logo">
        <div class="rl-brand-text">
            <p>Redline Training Center</p>
            <p>ISO Certified · Aramco & SABIC Registered</p>
        </div>
    </a>
    <ul class="rl-nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="About-Us.php">About Us</a></li>
        <li class="rl-dropdown" id="dd-courses">
            <button class="rl-dropdown-trigger" onclick="toggleDropdown('dd-courses')">Courses <i class="fa fa-chevron-down"></i></button>
            <div class="rl-dropdown-menu">
                <a href="FAC.php"><i class="fa fa-hard-hat"></i> Construction & Industrial Safety</a>
                <a href="FSER.php"><i class="fa fa-fire-extinguisher"></i> Specialized Safety Training</a>
                <a href="WSE.php"><i class="fa fa-leaf"></i> Environmental Safety</a>
                <a href="SIT.php"><i class="fa fa-utensils"></i> Food Safety Training</a>
            </div>
        </li>
        <li class="rl-dropdown" id="dd-services">
            <button class="rl-dropdown-trigger" onclick="toggleDropdown('dd-services')">Services <i class="fa fa-chevron-down"></i></button>
            <div class="rl-dropdown-menu">
                <a href="Corporate_Training.php"><i class="fa fa-building"></i> Corporate Training</a>
                <a href="On-Site_Training.php"><i class="fa fa-map-marker-alt"></i> On-Site Training</a>
                <a href="HSE_Consultancy.php"><i class="fa fa-shield-alt"></i> HSE Consultancy</a>
                <a href="Certification_Programs.php"><i class="fa fa-certificate"></i> Certification Programs</a>
            </div>
        </li>
        <li><a href="Redline_Manpower_Supply.php">Manpower</a></li>
        <li><a href="Bright_Medical_Company.php">Medicine Supply</a></li>
        <li><a href="Equipment_Rental.php">Equipment Rental</a></li>
    </ul>
    <div class="rl-nav-cta"><a href="contact_us.php">Contact Us</a></div>
    <button class="rl-hamburger" id="hamburger" onclick="toggleMobileNav()"><span></span><span></span><span></span></button>
</nav>
<div class="rl-mobile-nav" id="rl-mobile-nav">
    <a href="index.php">Home</a>
    <a href="About-Us.php">About Us</a>
    <div class="mobile-sub"><a href="FAC.php">Construction & Industrial</a><a href="FSER.php">Specialized Safety</a><a href="WSE.php">Environmental Safety</a><a href="SIT.php">Food Safety</a></div>
    <a href="Redline_Manpower_Supply.php">Manpower Supply</a>
    <a href="Equipment_Rental.php">Equipment Rental</a>
    <div class="rl-mobile-cta"><a href="contact_us.php">Contact Us</a></div>
</div>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container page-hero-inner">
        <div class="page-breadcrumb"><a href="index.php">Home</a><span>›</span><a href="#">Services</a><span>›</span>HSE Consultancy</div>
        <div class="hero-tag"><i class="fa fa-shield-alt"></i> Expert HSE Services</div>
        <h1>HSE <em>Consultancy</em></h1>
        <p>Expert Health, Safety, and Environmental solutions that protect your people, ensure regulatory compliance, and drive operational excellence across Saudi Arabia.</p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div>
                <div class="section-label">What We Offer</div>
                <h2 class="section-heading">Comprehensive <span>HSE Solutions</span></h2>
                <p class="intro-text">At Redline Training Center, our HSE consultancy services are designed to help businesses comply with safety regulations, reduce risks, and create safer work environments. Our experienced consultants work closely with your team to identify hazards, implement effective safety measures, and provide ongoing expert support.</p>

                <ul class="services-list">
                    <li>
                        <div class="svc-icon"><i class="fa fa-search"></i></div>
                        <div class="svc-text">
                            <h5>Risk Assessments & Audits</h5>
                            <p>Thorough evaluation of your workplace hazards and safety processes with actionable improvement reports.</p>
                        </div>
                    </li>
                    <li>
                        <div class="svc-icon"><i class="fa fa-check-circle"></i></div>
                        <div class="svc-text">
                            <h5>Saudi HSE Regulatory Compliance</h5>
                            <p>Expert guidance to ensure full compliance with all Kingdom of Saudi Arabia HSE regulations and standards.</p>
                        </div>
                    </li>
                    <li>
                        <div class="svc-icon"><i class="fa fa-clipboard-list"></i></div>
                        <div class="svc-text">
                            <h5>Custom Safety Programs</h5>
                            <p>Tailored safety management systems and programs designed specifically for your industry and operations.</p>
                        </div>
                    </li>
                    <li>
                        <div class="svc-icon"><i class="fa fa-file-alt"></i></div>
                        <div class="svc-text">
                            <h5>Incident Investigation & Reporting</h5>
                            <p>Professional root-cause analysis, incident documentation, and corrective action planning.</p>
                        </div>
                    </li>
                    <li>
                        <div class="svc-icon"><i class="fa fa-chalkboard-teacher"></i></div>
                        <div class="svc-text">
                            <h5>On-Site Training & Workshops</h5>
                            <p>Practical, hands-on safety training delivered directly at your facility by certified HSE professionals.</p>
                        </div>
                    </li>
                </ul>

                <a href="contact_us.php" class="btn-primary-rl">Request a Consultation <i class="fa fa-arrow-right"></i></a>
            </div>

            <div>
                <img src="images/Class room.jpg" alt="HSE Consultancy" class="content-img">
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<div class="stats-strip">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-block"><strong>+5</strong><span>Years of Consultancy</span></div>
            <div class="stat-block"><strong>100+</strong><span>Clients Served</span></div>
            <div class="stat-block"><strong>Zero</strong><span>Tolerance for Unsafe Practices</span></div>
            <div class="stat-block"><strong>ISO</strong><span>Certified Standards</span></div>
        </div>
    </div>
</div>

<!-- WHY CHOOSE -->
<section class="why-strip">
    <div class="container">
        <div class="section-label">The Difference</div>
        <h2 class="section-heading">Why Choose Our <span>Consultancy?</span></h2>
        <div class="why-cards">
            <div class="why-card">
                <div class="why-card-num">01</div>
                <h4>Certified Experts</h4>
                <p>Our consultants hold internationally recognized HSE certifications and have years of hands-on industry experience across Saudi Arabia.</p>
            </div>
            <div class="why-card">
                <div class="why-card-num">02</div>
                <h4>Industry-Specific</h4>
                <p>We understand the unique safety challenges of oil & gas, construction, manufacturing, and healthcare environments.</p>
            </div>
            <div class="why-card">
                <div class="why-card-num">03</div>
                <h4>Ongoing Support</h4>
                <p>We don't just deliver a report and leave — we provide continuous monitoring, follow-up, and support to ensure lasting safety improvements.</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-main">
            <div class="footer-brand">
                <img src="images/Redline LOGO.png" alt="Redline Logo">
                <h4>Redline Training Center</h4>
                <div class="tagline">Health · Safety · Excellence</div>
                <p>Saudi Arabia's trusted partner for HSE training, manpower solutions, and industrial services.</p>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="footer-contact-item"><i class="fa fa-envelope"></i><a href="mailto:admin@redlinetrainingksa.com">admin@redlinetrainingksa.com</a></div>
                <div class="footer-contact-item"><i class="fa fa-phone"></i><a href="tel:+9660138225410">(013) 822 5410</a></div>
            </div>
            <div class="footer-col">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About-Us.php">About Us</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="Redline_Manpower_Supply.php">Manpower Supply</a></li>
                    <li><a href="Equipment_Rental.php">Equipment Rental</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Courses</h5>
                <ul class="footer-links">
                    <li><a href="FAC.php">Construction & Industrial</a></li>
                    <li><a href="FSER.php">Specialized Safety</a></li>
                    <li><a href="WSE.php">Environmental Safety</a></li>
                    <li><a href="SIT.php">Food Safety Training</a></li>
                    <li><a href="HSE_Consultancy.php">HSE Consultancy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Find Us</h5>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.5073498939995!2d50.0603938!3d26.4251685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fd8cf6d42349%3A0x8b782acfaf6ea6d7!2sRedline%20Training%20Center!5e0!3m2!1sen!2ssa!4v1702561657226!5m2!1sen!2ssa" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="footer-qr"><img src="images/QR Code Redline Location.png" alt="QR Code"></div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; 2025 Redline Training Center. All Rights Reserved.</span>
            <span>ISO Certified · Aramco 10113986 · SABIC 11053231</span>
        </div>
    </div>
</footer>

<script>
function toggleDropdown(id){const dd=document.getElementById(id);const isOpen=dd.classList.contains('open');document.querySelectorAll('.rl-dropdown').forEach(el=>el.classList.remove('open'));if(!isOpen)dd.classList.add('open');}
document.addEventListener('click',e=>{if(!e.target.closest('.rl-dropdown'))document.querySelectorAll('.rl-dropdown').forEach(el=>el.classList.remove('open'));});
function toggleMobileNav(){document.getElementById('rl-mobile-nav').classList.toggle('open');document.getElementById('hamburger').classList.toggle('open');}
</script>
</body>
</html>