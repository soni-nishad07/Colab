<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colab</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <?php
    include('link.php');
    ?>


</head>


<body>


    <?php
    include('nav.php');
    ?>




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
            <img src="images/home1.png" alt="Laptop on desk" class="home_img_main">
            <!-- <img src="images/Div.png" alt="Bright coworking space" class="home_img_side"> -->
        </div>
    </section>




    <section class="home_content1">
    <div class="home_images1">
        <img src="images/VALORIZA.png" alt="Workspace Image" class="home_img_main1">
    </div>

    <div class="home_text1">
        <span>Work Seamlessly</span>
        <h2><span class="home_highlight1">Everything You Need for a Productive Workday</span></h2>
        <p>At CoLab Space, we provide modern workspaces designed for comfort, creativity, and collaboration. With high-speed internet, ergonomic seating, and a vibrant community, you’ll have everything you need to focus and thrive.</p>

        <ul>
            <li>Flexible Workspaces</li>
            <li>Seamless Connectivity</li>
            <li>Inspiring Environment</li>
            <li>24/7 Access</li>
            <li>Premium Amenities</li>
            <li>Scalable Solutions</li>
        </ul>
    </div>
</section>





    <section class="home_workspace">
        <h2>Our Workspaces – Designed for Productivity & Flexibility</h2>
        <p>At CoLab Space, we provide flexible workspaces for freelancers, startups, and growing businesses—whether you need a dedicated desk, a private cabin, or a customized office floor, we've got you covered.</p>
        <div class="home_slider">
            <button class="home_nav left">←</button>
            <img src="images/hme_work.png" alt="Workspace">
            <div class="home_info">
                <h3>🖥️ Single Desk</h3>
                <p>A dedicated desk in a shared workspace, perfect for freelancers and remote workers. Enjoy a professional environment with all essential amenities.</p>
                <button class="home_button">Contact Us</button>
            </div>
            <button class="home_nav right">→</button>
        </div>
    </section>



    <section class="home_workspace">
    <h2>Our Workspaces – Designed for Productivity & Flexibility</h2>
    <p>At CoLab Space, we provide flexible workspaces for freelancers, startups, and growing businesses—whether you need a dedicated desk, a private cabin, or a customized office floor, we've got you covered.</p>

    <div class="home_slider">
        <button class="home_nav left" onclick="prevSlide()">←</button>

        <div class="home_slide">
            <img src="images/hme_work.png" alt="Single Desk">
            <div class="home_info">
                <h3>🖥️ Single Desk</h3>
                <p>A dedicated desk in a shared workspace, perfect for freelancers and remote workers. Enjoy a professional environment with all essential amenities.</p>
                <button class="home_button">Contact Us</button>
            </div>
        </div>

        <div class="home_slide">
            <img src="images/hme_work2.png" alt="Private Cabin">
            <div class="home_info">
                <h3>🏢 Private Cabin</h3>
                <p>An exclusive space for focused work and privacy. Ideal for small teams or individuals looking for a quiet work environment.</p>
                <button class="home_button">Contact Us</button>
            </div>
        </div>

        <div class="home_slide">
            <img src="images/hme_work3.png" alt="Custom Office">
            <div class="home_info">
                <h3>🏠 Custom Office</h3>
                <p>Fully tailored office floors to match your business needs. Scale your workspace as your team grows.</p>
                <button class="home_button">Contact Us</button>
            </div>
        </div>

        <button class="home_nav right" onclick="nextSlide()">→</button>
    </div>
</section>







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






    <!-- Testimonials Section -->
    <section class="home_testimonial">
        <h2>OUR TESTIMONIALS</h2>
        <h3>Words From Customers</h3>

        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="avatar1.jpg" alt="Sheta Rao">
                <p>The modern and inspiring design of CoLab Space fuels creativity. Every corner is thoughtfully designed, creating an atmosphere where ideas thrive effortlessly.</p>
                <h4>SHETA RAO</h4>
                <span>UX Designer, PixelCrafters Studio</span>
            </div>

            <div class="testimonial-card">
                <img src="avatar2.jpg" alt="Rohan Bansal">
                <p>As a freelance designer, working from home felt isolating. CoLab Space provides a productive and professional environment that keeps me focused and motivated.</p>
                <h4>ROHAN BANSAL</h4>
                <span>Freelance Developer, CodeSphere Labs</span>
            </div>
        </div>
    </section>






    <!-- Contact Section -->
    <section class="home_contact">
        <div class="home_contact-container">
            <div class="home_contact-image">
                <img src="workspace.jpg" alt="Co-Working Space">
            </div>

            <div class="home_contact-form">
                <h2>CONTACT US</h2>
                <h3>Get in Touch</h3>
                <form>
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="Email Address" required>
                    <input type="tel" placeholder="Phone Number" required>
                    <textarea placeholder="Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>




    <?php
    include('footer.php');
    ?>



    <script>
        let currentIndex = 0;
const slides = document.querySelectorAll(".home_slide");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? "block" : "none";
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
}

// Show first slide on load
showSlide(currentIndex);

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>