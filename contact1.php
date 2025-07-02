<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CoLab Space</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
        }
        .contact_hme_pg {
            text-align: center;
        }
        .header-banner {
            background: url('banner.jpg') no-repeat center center/cover;
            color: white;
            padding: 60px 20px;
        }
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background: #2d2f3b;
            padding: 40px;
            border-radius: 10px;
            max-width: 1000px;
            margin: 20px auto;
        }
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            flex: 1;
            min-width: 300px;
            margin-right: 20px;
        }
        .contact-form h2 span {
            color: #ff9800;
        }
        .contact-form input, .contact-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            background: #ff9800;
            color: white;
            border: none;
            cursor: pointer;
        }
        .contact-info {
            margin-top: 15px;
        }
        .contact-ad img {
            max-width: 100%;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }
            .contact-form {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="contact_hme_pg">
        <div class="header-banner">
            <h1>Contact Us</h1>
            <p>Need the perfect workspace? CoLab Space offers dedicated desks, private offices, and custom workspaces tailored to your business needs!</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-form">
                <h2>Get in <span>Touch</span></h2>
                <p>Have questions or need assistance in finding the perfect workspace? Our team is here to help!</p>
                <form>
                    <input type="text" name="name" placeholder="Name *" required>
                    <input type="email" name="email" placeholder="Email *" required>
                    <input type="tel" name="phone" placeholder="Phone number *" required>
                    <button type="submit">SEND</button>
                </form>
                <div class="contact-info">
                    <p><strong>PHONE:</strong> 9663980936</p>
                    <p><strong>EMAIL:</strong> raghurajan@colabspace.in</p>
                </div>
            </div>
            <div class="contact-ad">
                <img src="coworking_ad.png" alt="Co-working space ad">
            </div>
        </div>
    </section>
</body>
</html>
 

