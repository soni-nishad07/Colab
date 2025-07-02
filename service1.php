<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexible Workspaces</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.service_hme_pg {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background-color: #2e3545;
    padding: 20px;
}

.background-image {
    position: absolute;
    width: 80%;
    height: auto;
    border-radius: 20px;
    z-index: 1;
}

.overlay {
    position: absolute;
    z-index: 2;
    color: white;
    left: 10%;
    top: 30%;
    max-width: 50%;
}

.overlay h1 {
    font-size: 2.5rem;
    font-weight: bold;
}

.overlay span {
    color: #FFD700;
}

.overlay p {
    font-size: 1rem;
    margin: 10px 0;
}

.book-tour {
    background-color: #FFC107;
    color: black;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
}

.illustration {
    position: absolute;
    right: 5%;
    bottom: 10%;
    width: 120px;
    z-index: 2;
}

.illustration img {
    width: 100%;
}

@media (max-width: 768px) {
    .overlay {
        left: 5%;
        top: 20%;
        max-width: 80%;
    }
    .overlay h1 {
        font-size: 2rem;
    }
    .background-image {
        width: 95%;
    }
    .illustration {
        width: 80px;
    }
}

    </style>
</head>
<body>
    <section class="service_hme_pg">
        <div class="overlay">
            <h1>Flexible Workspaces for <br> <span>Every Need</span></h1>
            <p>Discover the perfect workspace solution tailored to your business, whether you need a desk, a private cabin, or a fully customized office floor.</p>
            <button class="book-tour">Book a Tour</button>
        </div>
        <img src="images/service_img.jpeg" alt="Workspace" class="background-image">
        <div class="illustration">
            <img src="images/illustration.png" alt="Illustration">
        </div>
    </section>
</body>
</html>












<!-- ============================================= -->
 <!-- =============== CSS CODE ====================== -->


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
    background-color: #2e3545;
    color: white;
    text-align: center;
}

.service_wrkspace {
    padding: 40px 20px;
}

.service_wrkspace h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #FF8C42;
}

.service_wrkspace span {
    color: #FFD700;
}

.service_wrkspace p {
    font-size: 1rem;
    max-width: 600px;
    margin: 0 auto 20px;
}

.slider-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    width: 90%;
    max-width: 800px;
    margin: auto;
}

.slider {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    overflow: hidden;
}

.workspace-image {
    width: 100%;
    border-radius: 15px;
}

.workspace-info {
    position: absolute;
    right: 10%;
    background: rgba(0, 0, 139, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
    max-width: 50%;
}

.workspace-info h3 {
    font-size: 1.5rem;
}

.contact-btn {
    background-color: white;
    color: black;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
}

button.prev, button.next {
    background-color: transparent;
    border: 2px solid #FF8C42;
    color: #FF8C42;
    padding: 10px;
    font-size: 1.2rem;
    border-radius: 50%;
    cursor: pointer;
    position: absolute;
}

button.prev {
    left: -30px;
}

button.next {
    right: -30px;
}

@media (max-width: 768px) {
    .workspace-info {
        max-width: 80%;
        right: 5%;
    }
    .workspace-info h3 {
        font-size: 1.2rem;
    }
    button.prev, button.next {
        font-size: 1rem;
        padding: 8px;
    }
}

    </style>
</head>
<body>
    <section class="service_wrkspace">
        <h2>Our Workspaces – Designed for <br> <span>Productivity & Flexibility</span></h2>
        <p>At CoLab Space, we provide flexible workspaces for freelancers, startups, and growing businesses—whether you need a dedicated desk, a private cabin, or a customized office floor, we've got you covered.</p>
        
        <div class="slider-container">
            <button class="prev">←</button>
            <div class="slider">
                <img src="image.png" alt="Workspace" class="workspace-image">
                <div class="workspace-info">
                    <h3>💻 Single Desk</h3>
                    <p>A dedicated desk in a shared workspace, perfect for freelancers and remote workers. Enjoy a professional environment with all essential amenities.</p>
                    <button class="contact-btn">Contact Us</button>
                </div>
            </div>
            <button class="next">→</button>
        </div>
    </section>
</body>
</html>






<!-- ============================================= -->
 <!-- ========================================= -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspace Form & Testimonials</title>
    <link rel="stylesheet" href="styles.css">

<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #2e3545;
    color: white;
    text-align: center;
}

.service_form_testimnial {
    padding: 40px 20px;
}

.form-section {
    position: relative;
    text-align: left;
}

.background-img {
    width: 100%;
    border-radius: 15px;
}

.form-container {
    position: absolute;
    top: 20%;
    right: 10%;
    background: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
    max-width: 40%;
}

.form-container h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #FF8C42;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    width: 100%;
}

.testimonials {
    margin-top: 50px;
}

.testimonial-cards {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}

.card {
    background: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
}

.card h5 {
    margin-top: 15px;
    font-size: 1.1rem;
}

.card span {
    font-size: 0.9rem;
    color: #555;
}

@media (max-width: 768px) {
    .form-container {
        max-width: 90%;
        right: 5%;
        top: 10%;
    }
    .testimonial-cards {
        flex-direction: column;
        align-items: center;
    }
}

</style>


</head>



<body>

<section class="service_form_testimnial">
        <div class="form-section">
            <img src="image.png" alt="Workspace" class="background-img">
            <div class="form-container">
                <h3>BOOK YOUR TRIAL, IT’S FREE.</h3>
                <form>
                    <div class="form-row">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="form-row">
                        <input type="email" placeholder="Email Address">
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <textarea placeholder="Write here message"></textarea>
                    <button type="submit">Book A Tour</button>
                </form>
            </div>
        </div>

        <div class="testimonials">
            <h4>OUR TESTIMONIALS</h4>
            <h2>Words From Customers</h2>
            <div class="testimonial-cards">
                <div class="card">
                    <p>The modern and inspiring design at CoLab Space fuels creativity. Every corner is thoughtfully designed, creating an atmosphere where ideas thrive effortlessly.</p>
                    <h5>ISHITA RAO</h5>
                    <span>UX Designer, PixelCrafters Studio</span>
                </div>
                <div class="card">
                    <p>As a freelance designer, working from home felt isolating. CoLab Space provides a productive and professional environment that keeps me focused and motivated.</p>
                    <h5>ROHAN BANSALE</h5>
                    <span>Freelance Developer, CodeSphere Labs</span>
                </div>
            </div>
        </div>
    </section>
</body>
</html>