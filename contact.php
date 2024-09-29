<?php
include 'header.php';
?>
<!-- Banner Section -->
    <section class="other-banner-section">
        <div class="container text-center">
            <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol> -->
            </nav>
            <h1 class="banner-title">Contact Us</h1>
        </div>
    </section>

<!-- Contact Us Section -->
    <section class="contact-us-section py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <h2 class="section-heading">Contact Us</h2>
                    <form action="#" method="post" class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <!-- Contact Information -->
                <div class="col-md-6">
                    <h2 class="section-heading">Get In Touch</h2>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> 1234 Street Name, City, Lahore, Pakistan</li>
                        <li><i class="fas fa-phone-alt"></i> 03074065110</li>
                        <li><i class="fas fa-envelope"></i> email@example.com</li>
                        <li><i class="fas fa-globe"></i> www.example.com</li>
                    </ul>
                    <!-- Map Embed -->
                    <div class="map-container mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.036982516142!2d-122.41941818468158!3d37.77492927975927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858185bb4b92b7%3A0x3a34297b9b4c8719!2sSan%20Francisco%2C%20CA%2094120!5e0!3m2!1sen!2sus!4v1636005933134!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>