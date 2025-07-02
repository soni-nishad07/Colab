<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Colab</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    
    <?php
    include('link.php');
    ?>


</head>


<body style="background-color: #2d2f3b;">


       <?php
        include('nav.php');
       ?>



<section class="contact_hme_pg">
    <div class="header-banner">
            <div class="contact_overlay">
           <div class="cont_banner">
           <h1>Contact Us</h1>
           <p>Need the perfect workspace? CoLab Space offers dedicated desks, private offices, and custom workspaces tailored to your business needs!</p>
           </div>
        </div>
        </div>

        <div class="contact-container_pg">
            <div class="contact-form_pg">
                <h2>Get in <span>Touch</span></h2>
                <p>Have questions or need assistance in finding the perfect workspace? Our team is here to help!</p>
                <form action="https://formsubmit.co/raghurajan@colabspace.in" method="POST">
                <input type="text" name="name" placeholder="Name *" required>
                <input type="email" name="email" placeholder="Email *" required>
                <input type="tel" name="phone" placeholder="Phone Number *" required>
                
                <!-- Hidden fields for FormSubmit -->
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_template" value="table">
                
                <button type="submit">SEND</button>
            </form>

                <!-- <div class="contact-info_pg">
                    <p>
                        <i class="fa-solid fa-phone-volume"></i>
                        <strong>PHONE:</strong>
                        <a href="tel:+91 9663980936">+91 9663980936</a>
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <strong>EMAIL:</strong>
                        <a href="mailto:raghurajan@colabspace.in">raghurajan@colabspace.in</a>
                    </p>
                    <p>
                    <strong>Address:</strong>
                    Opp HSR club, near to babai tiffin Bangalore- 560102
                    </p>
                </div> -->

            </div>

            <div class="contact-ad_pg">
                <!-- <img src="images/coworking_ad.png" alt="Co-working space ad"> -->
                <p>
                        <i class="fa-solid fa-phone-volume"></i>
                        <strong>PHONE:</strong>
                        <a href="tel:+91 9663980936">+91 9663980936</a>
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <strong>EMAIL:</strong>
                        <a href="mailto:raghurajan@colabspace.in">raghurajan@colabspace.in</a>
                    </p>

                    <p>
                    <strong>Address:</strong>
                    Opp HSR club, near to babai tiffin Bangalore- 560102
                    </p>
            </div>

        </div>
    </section>



    <div class="container">
    <div class="map-container">
            <!-- <iframe 
                src="https://www.google.com/maps?q=Opp+HSR+Club,+near+Babai+Tiffins,+Bangalore-560102&output=embed" 
                allowfullscreen>
            </iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.836570563591!2d77.64047143488769!3d12.918223400000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15827747a4e9%3A0x60bfc4476e6de3ec!2sBabai%20Tiffins%2C%20HSR%20Layout!5e0!3m2!1sen!2sin!4v1742555152248!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <?php
    include('footer.php');
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
