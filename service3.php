<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - Colab</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        
        .service-space
{
    background-color: #2d2f3b;
    padding: 50px 0;
}


.section-title {
    font-size: 2em;
    margin-bottom: 20px;
    color: #FF7849;
    padding: 30px 10px;
}
.service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
    gap: 20px;
}
.service-item {
    /* background: #3a3b47; */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);

    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}
.service-item:hover {
    transform: translateY(-5px);
}

.service-item h3 {
    /* color: #f4a261; */
    color: white;
    font-size: 1.2rem;
    margin-bottom: 10px;
}
 .service-item p {
    color:#ddd;
    font-size: 1em;
}
@media (max-width: 600px) {
    .service-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
    
    <?php
    include('link.php');
    ?>


</head>


<body>


       <?php
        include('nav.php');
       ?>




    <section class="service_hme_pg">
        <div class="overlay-sec">
        <div class="overlay">
            <h1>Flexible Workspaces for <br> <span>Every Need</span></h1>
            <p>Discover the perfect workspace solution tailored to your business, whether you need a desk, a private cabin, or a fully customized office floor.</p>
            <a href="index#booktour">
                <button class="book-tour">Book a Tour</button>
            </a>
        </div>
        </div>
        <img src="images/service_img.jpeg" alt="Workspace" class="background-image">
        <!-- <div class="illustration">
            <img src="images/illustration.png" alt="Illustration">
        </div> -->
    </section>




    <section class="service-space">
        <div class="container">
            <h2 class="section-title">Colab Space Services</h2>
            <div class="service-grid">
                <div class="service-item">
                    <h3>Personalized Workspace</h3>
                    <p>Enjoy a dedicated desk just for you, providing a focused and comfortable environment to get work done.</p>
                </div>
                <div class="service-item">
                    <h3>Privacy</h3>
                    <p>A quiet, private area to help you stay productive, free from distractions while still being part of a vibrant community.</p>
                </div>
                <div class="service-item">
                    <h3>Flexible Access</h3>
                    <p>24/7 access to your desk, allowing you to work at your own pace and schedule.</p>
                </div>
                <div class="service-item">
                    <h3>High-Speed Internet</h3>
                    <p>Reliable, fast internet connection to ensure smooth and efficient work, whether you're meeting deadlines or collaborating online.</p>
                </div>
                <div class="service-item">
                    <h3>Ergonomic Furniture</h3>
                    <p>Comfortable and ergonomic desk setup designed to support long hours of work, reducing strain and enhancing productivity.</p>
                </div>
                <div class="service-item">
                    <h3>Networking Opportunities</h3>
                    <p>Access to a diverse community of professionals for potential collaborations, learning, and growth.</p>
                </div>
                <div class="service-item">
                    <h3>Meeting Room Access</h3>
                    <p>Enjoy the ability to book meeting rooms when needed for client meetings or team discussions.</p>
                </div>
                <div class="service-item">
                    <h3>Shared Amenities</h3>
                    <p>Access to coffee, printing services, and common areas, making your workday more convenient and enjoyable.</p>
                </div>
            </div>
        </div>
    </section>


 
    <section class="home_workspace"  style="background-color: #2d2f3b;">
        <div class="service_heading">
        <h2>Our Workspaces – Designed for Productivity & Flexibility</h2>
        <p>At CoLab Space, we provide flexible workspaces for freelancers, startups, and growing businesses—whether you need a dedicated desk, a private cabin, or a customized office floor, we've got you covered.</p>
        </div>
    
        <div class="home_slider">
            <button class="home_nav left" onclick="prevSlide()">←</button>

            <div class="home_slide">
                <img src="images/hme_work.png" alt="Single Desk">
                <div class="home_info">
                    <h3>🖥️ Single Desk</h3>
                    <p>A dedicated desk in a shared workspace, perfect for freelancers and remote workers. Enjoy a professional environment with all essential amenities.</p>
                    <a href="contact.php">
                        <button class="home_button">Contact Us</button>
                    </a>
                </div>
            </div>

            <div class="home_slide">
                <img src="images/hme_work2.png" alt="Private Cabin">
                <div class="home_info">
                    <h3>📅 Meeting Room</h3>
                    <p>Fully equipped meeting rooms with modern AV facilities, ideal for client meetings, team discussions, and presentations. Available on an hourly or daily basis.</p>
                    <a href="contact.php">
                        <button class="home_button">Contact Us</button>
                    </a>
                </div>
            </div>

            <div class="home_slide">
                <img src="images/hme_work3.png" alt="Custom Office">
                <div class="home_info">
                    <h3>🏢 Cabin Space</h3>
                    <p>Private office cabins designed for small teams and individuals seeking a focused work environment. Fully furnished with high-speed internet and storage facilities.</p>
                    <a href="contact.php">
                        <button class="home_button">Contact Us</button>
                    </a>
                </div>
            </div>


            <div class="home_slide">
                <img src="images/hme_work4.png" alt="Custom Office">
                <div class="home_info">
                    <h3>🏗️ Customized Floor</h3>
                    <p>Need a fully customized workspace? Get an entire floor tailored to your team’s needs, with flexible layouts, branding options, and exclusive amenities.</p>
                    <a href="contact.php">
                        <button class="home_button">Contact Us</button>
                    </a>
                </div>
            </div>

            <button class="home_nav right" onclick="nextSlide()">→</button>
        </div>
    </section>




        <!-- Find come  Section -->
        <section class="home_hero">
        <div class="home_hero-overlay"></div>
        <div class="home_hero-content">
            <h1>Come & Find Your Favourite Place</h1>
            <p>Discover a workspace that fits your style and needs at <strong>CoLab Space</strong>.
                Whether you prefer a quiet private office, a collaborative open desk, or fully customizable workspaces, we have the perfect spot for you.</p>
            <p>Work, connect, and grow in an environment designed for productivity and innovation.</p>
        </div>

        <div class="home_booking-form">
            <h2>BOOK YOUR TRIAL, IT'S FREE.</h2>
            <form action="https://formsubmit.co/raghurajan@colabspace.in" method="POST">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            <textarea name="message" placeholder="Write your message here" required></textarea>
            
            <!-- Hidden fields for FormSubmit -->
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="table">

            <button type="submit">Book A Tour</button>
        </form>

        </div>
    </section>




        <!-- Testimonials Section -->
<section class="home_testimonial">
     <div class="container">
     <div class="testimonials">
            <!-- <h3>Words From Customers</h3> -->
           
            <div class="hme-test  text-center">
            <h2>OUR TESTIMONIALS</h2>
            <h3>Words From Customers</h3>
            </div>

            <div class="testimonial_cards">
                <div class="testimonial_card">
                <img src="images/avatar1.jpg" alt="Sheta Rao">
                    <p>The modern and inspiring design of CoLab Space fuels creativity. Every corner is thoughtfully designed, creating an atmosphere where ideas thrive effortlessly.</p>
                    <h4>ISHETA RAO</h4>
                    <span>UX Designer, PixelCrafters Studio</span>
                </div>
                <div class="testimonial_card">
                <img src="images/avatar2.jpg" alt="Rohan Bansal">
                    <p>As a freelance designer, working from home felt isolating. CoLab Space provides a productive and professional environment that keeps me focused and motivated.</p>
                    <h4>ROHAN BANSAL</h4>
                    <span>Freelance Developer, CodeSphere Labs</span>
                </div>

                <div class="testimonial_card">
                <img src="images/avatar3.jpg" alt="Neha Verma">
                    <p>CoLab Space has been a game-changer for our team! The 24/7 access and secure facilities perfectly support our flexible work hours, making collaboration seamless.</p>
                    <h4>Aarav Mehta</h4>
                    <span>Product Manager, TechVista Solutions</span>
                </div>

                <div class="testimonial_card">
                    <img src="images/avatar4.jpg" alt="Amit Sharma">
                    <p>The flexible membership plans, high-speed internet, and well-equipped meeting rooms make CoLab Space an ideal workspace for my small business.</p>
                    <h4>Vikram Khanna</h4>
                    <span>Startup Founder, InnoNext Technologies</span>
                </div>

            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
     </div>
    </section>




    <?php
    include('footer.php');
    ?>


<!-- <script>
        //-------------------HOME slider-------------

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
    </script>  -->




    
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll(".home_slide");
        let autoSlideInterval;

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

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Start auto-slide when the page loads
        document.addEventListener("DOMContentLoaded", () => {
            showSlide(currentIndex);
            startAutoSlide();
        });

        // Pause auto-slide when hovering over a slide
        slides.forEach(slide => {
            slide.addEventListener("mouseenter", stopAutoSlide);
            slide.addEventListener("mouseleave", startAutoSlide);
        });
    </script>

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
