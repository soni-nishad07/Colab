<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoLab Space</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .home_header {
            position: relative;
            text-align: center;
            color: white;
        }
        .home_banner {
            background: url('image.png') no-repeat center center/cover;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
        .home_cta {
            background-color: #f4a261;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 5px;
        }
        .home_content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 50px;
            background: #2a2a2a;
            color: white;
        }
        .home_text {
            width: 50%;
        }
        .home_highlight {
            color: #f4a261;
            font-weight: bold;
        }
        .home_images {
            width: 45%;
            display: flex;
            gap: 10px;
        }
        .home_img_main {
            width: 70%;
            border-radius: 10px;
        }
        .home_img_side {
            width: 30%;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .home_content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .home_text, .home_images {
                width: 100%;
            }
            .home_images {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header class="home_header">
        <div class="home_banner">
            <h3 class="home_tagline">The Best Workspace in World</h3>
            <h1 class="home_title">Professional and Creative Workspace</h1>
            <button class="home_cta">Book a Tour</button>
        </div>
    </header>
    
    <section class="home_content">
        <div class="home_text">
            <h2>Elevate Your Work Experience with <span class="home_highlight">CoLab Space</span></h2>
            <p>Welcome to CoLab Space – where collaboration sparks innovation and productivity thrives! Step into a dynamic workspace designed to inspire, connect, and empower professionals like you. Whether you need a single desk, private cabin, or a custom workspace, we’ve got the perfect spot for your success!</p>
            <button class="home_cta">Book a Tour</button>
        </div>
        <div class="home_images">
            <img src="image1.jpg" alt="Laptop on desk" class="home_img_main">
            <img src="image2.jpg" alt="Bright coworking space" class="home_img_side">
        </div>
    </section>
</body>
</html>







<!-- ================================================================== -->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspaces</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .home_workspace {
            text-align: center;
            background: #1c2a3a;
            color: white;
            padding: 50px 20px;
        }
        .home_workspace h2 {
            color: #f4a261;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .home_workspace p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 16px;
        }
        .home_slider {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .home_slider img {
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
        }
        .home_info {
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 50, 0.9);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }
        .home_info h3 {
            margin: 0;
            font-size: 20px;
        }
        .home_info p {
            font-size: 14px;
        }
        .home_button {
            background: white;
            color: navy;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        .home_nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #f4a261;
            color: white;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .home_nav.left {
            left: 5%;
        }
        .home_nav.right {
            right: 5%;
        }
        @media (max-width: 768px) {
            .home_slider img {
                width: 90%;
            }
            .home_info {
                position: relative;
                right: 0;
                top: auto;
                transform: none;
                width: 90%;
                margin: 20px auto;
                text-align: center;
            }
            .home_nav {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <section class="home_workspace">
        <h2>Our Workspaces – Designed for Productivity & Flexibility</h2>
        <p>At CoLab Space, we provide flexible workspaces for freelancers, startups, and growing businesses—whether you need a dedicated desk, a private cabin, or a customized office floor, we've got you covered.</p>
        <div class="home_slider">
            <button class="home_nav left">←</button>
            <img src="image.png" alt="Workspace">
            <div class="home_info">
                <h3>🖥️ Single Desk</h3>
                <p>A dedicated desk in a shared workspace, perfect for freelancers and remote workers. Enjoy a professional environment with all essential amenities.</p>
                <button class="home_button">Contact Us</button>
            </div>
            <button class="home_nav right">→</button>
        </div>
    </section>
</body>
</html>














<!-- =============================================== -->
<!-- ===============  CSS for the slider =============== -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoLab Space</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #1a1c26;
    color: #fff;
}

/* Hero Section */
.home_hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    background: url('workspace-bg.jpg') no-repeat center center/cover;
    position: relative;
}

.home_hero-content {
    width: 50%;
    max-width: 600px;
    background: rgba(0, 0, 0, 0.6);
    padding: 20px;
    border-radius: 10px;
}

.home_hero h1 {
    font-size: 32px;
    font-weight: bold;
}

.home_hero p {
    font-size: 16px;
    margin: 10px 0;
}

/* Booking Form */
.home_booking-form {
    background: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    max-width: 400px;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
}

.home_booking-form h2 {
    font-size: 18px;
    font-weight: bold;
}

.home_booking-form .form-group {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.home_booking-form .form-group input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.home_booking-form textarea {
    height: 80px;
}

.home_booking-form button {
    width: 100%;
    padding: 10px;
    background-color: orange;
    border: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}

/* Testimonials Section */
.home_testimonial {
    text-align: center;
    padding: 50px 20px;
    background-color: #2b2e3d;
}

.home_testimonial h2 {
    color: orange;
    font-size: 18px;
    font-weight: bold;
}

.home_testimonial h3 {
    font-size: 24px;
    margin-bottom: 30px;
}

.testimonial-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.testimonial-card {
    background: white;
    color: black;
    padding: 20px;
    max-width: 400px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

.testimonial-card img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.testimonial-card p {
    font-size: 14px;
    margin-bottom: 10px;
}

.testimonial-card h4 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

.testimonial-card span {
    font-size: 12px;
    color: gray;
}

/* Responsive Design */
@media (max-width: 768px) {
    .home_hero {
        flex-direction: column;
        text-align: center;
    }
    
    .home_hero-content, .home_booking-form {
        width: 100%;
        max-width: none;
    }

    .testimonial-container {
        flex-direction: column;
        align-items: center;
    }
}

    </style>

</head>
<body>

    <!-- Hero Section -->
    <section class="home_hero">
        <div class="home_hero-content">
            <h1>Come & Find Your Favourite Place</h1>
            <p>Discover a workspace that fits your style and needs at <strong>CoLab Space</strong>. 
                Whether you prefer a quiet private office, a collaborative open desk, or fully customizable workspaces, we have the perfect spot for you.</p>
            <p>Work, connect, and grow in an environment designed for productivity and innovation.</p>
        </div>

        <div class="home_booking-form">
            <h2>BOOK YOUR TRIAL, IT'S FREE.</h2>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email Address">
                    <input type="tel" placeholder="Phone Number">
                </div>
                <textarea placeholder="Write here message"></textarea>
                <button type="submit">Book A Tour</button>
            </form>
        </div>
    </section>

 

</body>
</html>

















<!-- =============================================== -->
<!-- ===============  Footer  =============== -->
<!-- =============================================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CoLab Space</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #1a1c26;
    color: #fff;
}

/* Contact Section */
.home_contact {
    background-color: #2b2e3d;
    padding: 50px 20px;
}

.home_contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    max-width: 900px;
    margin: auto;
}

.home_contact-image img {
    width: 100%;
    max-width: 350px;
    border-radius: 10px;
}

.home_contact-form {
    background: none;
    padding: 20px;
    max-width: 400px;
}

.home_contact-form h2 {
    color: orange;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}

.home_contact-form h3 {
    font-size: 22px;
    margin-bottom: 20px;
}

.home_contact-form input,
.home_contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.home_contact-form textarea {
    height: 80px;
}

.home_contact-form button {
    width: 100%;
    padding: 10px;
    background-color: orange;
    border: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    color: white;
    border-radius: 5px;
}

/* Footer Section */
.home_footer {
    background: #202230;
    text-align: center;
    padding: 30px 20px;
}

.footer-container {
    max-width: 900px;
    margin: auto;
}

.footer-logo img {
    width: 150px;
    margin-bottom: 15px;
}

.footer-contact p {
    font-size: 14px;
    margin: 5px 0;
}

.footer-contact a {
    color: #ffb400;
    text-decoration: none;
    font-weight: bold;
}

.footer-contact a:hover {
    text-decoration: underline;
}

.footer-bottom {
    margin-top: 10px;
    font-size: 12px;
    color: #aaa;
}

/* Responsive Design */
@media (max-width: 768px) {
    .home_contact-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .home_contact-form {
        width: 100%;
        max-width: none;
    }

    .footer-contact p {
        font-size: 12px;
    }
}

    </style>

</head>

<body>



</body>
</html>
