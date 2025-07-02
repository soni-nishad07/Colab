<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service">Service</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="gallery">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
     
      </ul>

      <!-- Floating Buttons for Enquiry, Call, WhatsApp -->
      <div class="nav-buttons_cont">
                    <a href="index#booktour" class="btn btn-outline-success">Book a Tour</a>
      </div>
    </div>
  </div>
</nav>

<!-- Floating WhatsApp & Call Buttons -->
<div class="floating-buttons">
  <a href="https://wa.me/919663980936" target="_blank" class="whatsapp-button">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
  <a href="tel:+919663980936 " class="call-button">
    <i class="fa fa-phone"></i>
  </a>
</div>

<!-- CSS for Buttons -->
<style>
  .nav-buttons {
    display: flex;
    gap: 10px;
  }

  .btn-whatsapp {
    background-color: #25D366;
    color: white;
  }

  .btn-whatsapp:hover {
    background-color: #1DA851;
  }

  /* Floating buttons (Bottom Right) */
  .floating-buttons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .floating-buttons a {
    width: 50px;
    height: 50px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 22px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
  }

  .floating-buttons a:hover {
    transform: scale(1.1);
  }

  .call-button {
    background-color: #28a745;
  }
</style>
