<div class="service_aspect_container">
    <div class="container">

        <!-- Section: Day Co-working -->
        <section class="service_section">
            <div class="service_text">
                <h3>Day Co-working</h3>
                <p>"Day co-working" allows flexible use of a coworking space for a single day with easy access to all amenities.</p>
            </div>
            <div class="service_image">
                <img src="images/hme_work3.png" alt="Coworking Space">
            </div>
        </section>

        <!-- Section: Key Aspects of Day Co-working -->
        <section class="service_section reverse">
            <div class="service_text">
                <h3>Key Aspects of Day Co-working</h3>
                <ul>
                    <li><strong>Flexibility:</strong> Access workspace only when needed.</li>
                    <li><strong>Accessibility:</strong> Convenient location and amenities.</li>
                    <li><strong>Cost-Effectiveness:</strong> Budget-friendly and flexible.</li>
                    <li><strong>Networking:</strong> Meet professionals from various industries.</li>
                </ul>
            </div>
            <div class="service_image">
                <img src="images/key_aspects.jpg" alt="Key Aspects">
            </div>
        </section>

        <!-- Section: Meeting Room -->
        <section class="service_section">
            <div class="service_text">
                <h3>📅 Meeting Room</h3>
                <p>Fully equipped meeting rooms with modern AV facilities, ideal for client meetings, team discussions, and presentations. Available on an hourly or daily basis.</p>
                <a href="index#booktour">
                    <button class="home_button">Enquiry Form</button>
                </a>
            </div>
            <div class="service_image">
                <img src="images/meeting_room.jpg" alt="Meeting Room">
            </div>
        </section>

        <!-- Section: Meeting Room Features -->
        <section class="service_section reverse">
            <div class="service_text">
                <h3>Key Features and Benefits of Meeting Rooms</h3>
                <ul>
                    <li><strong>Professional Environment:</strong> Ideal for client meetings.</li>
                    <li><strong>Privacy:</strong> Ensures confidential discussions.</li>
                    <li><strong>Collaboration Tools:</strong> Whiteboards, projectors, teleconferencing.</li>
                    <li><strong>Booking System:</strong> Easy online scheduling.</li>
                </ul>
            </div>
            <div class="service_image">
                <img src="images/features.jpg" alt="Meeting Room Features">
            </div>
        </section>

    </div>
</div>

<style>
/* General Styles */
.service_aspect_container {
    background-color: #2d2f3b;
    padding: 40px 0;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

/* Section Styling */
.service_section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 50px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-in-out;
}

.service_section.show {
    opacity: 1;
    transform: translateY(0);
}

/* Reverse Layout */
.service_section.reverse {
    flex-direction: row-reverse;
}

/* Text Styling */
.service_text {
    flex: 1;
    color: white;
}

.service_text h3 {
    font-size: 1.8rem;
    color: #FFD700;
    font-weight: 600;
    margin-bottom: 10px;
}

.service_text p,
.service_text ul {
    font-size: 1.1rem;
    color: #ddd;
}

.service_text ul {
    list-style: none;
    padding-left: 0;
}

.service_text li {
    margin: 10px 0;
    border-left: 5px solid #007BFF;
    padding: 10px;
    background: rgba(255, 255, 255, 0.1);
}

/* Image Styling */
.service_image {
    flex: 1;
    max-width: 500px;
}

.service_image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

/* Enquiry Button */
.home_button {
    background: #007BFF;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
    font-size: 1rem;
}

.home_button:hover {
    background: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .service_section {
        flex-direction: column;
        text-align: center;
    }

    .service_section.reverse {
        flex-direction: column;
    }

    .service_image {
        max-width: 100%;
    }
}

/* Animation on Scroll */
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".service_section");

    function revealSections() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if (sectionTop < window.innerHeight - 100) {
                section.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", revealSections);
    revealSections();
});
</script>
