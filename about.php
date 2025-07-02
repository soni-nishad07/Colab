<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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



    <section class="about_section">
        <div class="about_content">
            <div class="about_text">
                <span>About Us</span>
                <h2>Empowering Work.<br> Inspiring Collaboration.</h2>
                <p>Welcome to CoLab Space, where innovation meets flexibility! We provide dynamic and fully equipped workspaces tailored for freelancers, startups, and businesses of all sizes. Whether you need a dedicated desk, a private cabin, or a fully customized office floor, CoLab Space offers the perfect environment to collaborate, grow, and succeed.</p>
            </div>
            <div class="about_images">
                <img src="images/about_img.png" alt="Team Collaboration">
            </div>
        </div>
    </section>




    <section class="about_section">
        <div class="about_content">

            <div class="about_images">
                <img src="images/about_mission.png" alt="Modern Workspace">
            </div>

            <div class="about_text">
                <h2>Our Mission</h2>
                <!-- <p>At CoLab Space, our mission is to create dynamic and flexible workspaces that empower professionals, entrepreneurs, and businesses to thrive. We are committed to fostering an inspiring, collaborative, and productive environment where innovation flourishes. Through modern amenities, seamless connectivity, and a vibrant community, we strive to redefine the way people work by offering spaces that adapt to their needs and fuel their success.</p> -->
                <p>At Colab Space, our mission is to provide a vibrant, flexible, and collaborative environment where individuals and businesses can grow, connect, and thrive. We are dedicated to offering innovative workspaces that empower creativity, foster productivity, and encourage meaningful collaborations. Our goal is to build a supportive community that nurtures entrepreneurs, freelancers, and teams, helping them achieve their fullest potential.</p>
            </div>

        </div>
    </section>




    <section class="about_section">
        <div class="about_content">
            <div class="about_text">
                <h2>Our Vission</h2>
                <!-- <p>Our vision is to be a premier coworking destination, recognized for its community-driven approach, state-of-the-art workspaces, and commitment to professional growth. We aspire to build a network of creative and ambitious individuals, where ideas turn into opportunities and businesses scale to new heights. By continuously evolving and embracing innovation, we aim to shape the future of work and create a hub of limitless possibilities.</p> -->
                 <p>Our vision is to become the leading co-working space that inspires and enables the next generation of innovators, entrepreneurs, and professionals. We aim to create a global network of collaborative spaces that promote creativity, inclusivity, and sustainability. By continuously evolving and adapting to the changing needs of the modern workforce, we envision a future where Colab Space is a catalyst for success, growth, and positive change for all our members.</p>
            </div>

            <div class="about_images">
                <img src="images/about_vission.png" alt="Modern Workspace">
            </div>
        </div>
    </section>


    <section class="about_choose">

        <h2>Why Choose Us</h2>
        <div class="features">
            <div class="feature">
                <img src="images/icon1.png" alt="24/7 Access">
                <h3>24/7 Access</h3>
                <p>Work on your schedule, anytime, anywhere.</p>
            </div>
            <div class="feature">
                <img src="images/icon2.png" alt="High-Speed WiFi">
                <h3>High-Speed WiFi</h3>
                <p>Seamless connectivity for uninterrupted productivity.</p>
            </div>
            <div class="feature">
                <img src="images/icon3.png" alt="Prime Locations">
                <h3>Prime Locations</h3>
                <p>Strategically situated in business hubs for easy access.</p>
            </div>
        </div>
    </section>




    <!-- <div class="about_conct">
    <div class="contact-container">
    <img src="images/contact-image.jpg" alt="Office Image">
    <form action="https://formsubmit.co/raghurajan@colabspace.in" method="POST">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="table">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

    </div> -->


    

    <?php
    include('footer.php');
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
 document.addEventListener("DOMContentLoaded", function () {
    const testimonials = document.querySelectorAll(".testimonial_card");
    const dots = document.querySelectorAll(".dot");
    let currentIndex = 0;
    let testimonialsToShow = window.innerWidth > 768 ? 2 : 1;
    
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            if (i >= index && i < index + testimonialsToShow) {
                testimonial.style.display = "block";
            } else {
                testimonial.style.display = "none";
            }
        });
        dots.forEach((dot, i) => {
            dot.style.background = i === index ? "#e76f51" : "#f4a261";
        });
    }
    
    function nextTestimonial() {
        currentIndex = (currentIndex + testimonialsToShow) % testimonials.length;
        showTestimonial(currentIndex);
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentIndex = index;
            showTestimonial(currentIndex);
        });
    });
    
    function adjustTestimonialsToShow() {
        testimonialsToShow = window.innerWidth > 768 ? 2 : 1;
        showTestimonial(currentIndex);
    }
    
    window.addEventListener("resize", adjustTestimonialsToShow);
    
    showTestimonial(currentIndex);
    setInterval(nextTestimonial, 5000); // Auto-slide every 5 seconds
});

    </script>


</body>
</html>



