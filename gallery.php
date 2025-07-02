<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - Colab</title>
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




    <section class="service_hme_pg">
        <div class="overlay-sec">
        <div class="overlay">
            <h1>Gallery
                <!-- <br> <span>Every Need</span> -->
            </h1>
            <!-- <p>Discover the perfect workspace solution tailored to your business, whether you need a desk, a private cabin, or a fully customized office floor.</p> -->
            <!-- <a href="index#booktour">
                <button class="book-tour">Book a Tour</button>
            </a> -->
        </div>
        </div>
        <img src="images/service_img.jpeg" alt="Workspace" class="background-image">
        <!-- <div class="illustration">
            <img src="images/illustration.png" alt="Illustration">
        </div> -->
    </section>




    <section class="home_memory">
    <h2>Gallery</h2>
    <div class="memory-grid">
        <img src="images/gallery/home_memory.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory1.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory2.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory3.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory4.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory5.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory6.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory7.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory8.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory9.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory10.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory11.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory12.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory13.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory14.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory15.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory16.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory17.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory18.jpg" class="slide-left zoom-img">
        <img src="images/gallery/home_memory19.jpg" class="slide-right zoom-img">
        <img src="images/gallery/home_memory20.jpg" class="slide-left zoom-img">
        <!-- <img src="images/hme_work2.png" class="slide-right zoom-img">
        <img src="images/about_mission.png" class="slide-left zoom-img">
        <img src="images/hme_work.png" class="slide-right zoom-img"> -->
    </div>
</section>



<!-- Lightbox for Zoom Effect -->
<div class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content">
</div>


    <?php
    include('footer.php');
    ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
// Lightbox Functionality
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".zoom-img");
    const lightbox = document.querySelector(".lightbox");
    const lightboxContent = document.querySelector(".lightbox-content");
    const closeBtn = document.querySelector(".lightbox .close");

    images.forEach(img => {
        img.addEventListener("click", function () {
            lightbox.style.display = "flex";
            lightboxContent.src = img.src;
        });
    });

    closeBtn.addEventListener("click", function () {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", function (event) {
        if (event.target !== lightboxContent) {
            lightbox.style.display = "none";
        }
    });
});
</script>



</body>
</html>
