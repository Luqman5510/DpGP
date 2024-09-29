
<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">    

   <style>
   /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Header Section */
.header-section {
    background-color: #F2184F;
    color: white;
    padding: 20px 0;
}

.header-section h1 {
    margin: 0;
    font-size: 2.5rem;
}

/* Personal Information Section */
.personal-info {
    background-color: #fff;
    padding: 40px 0;
}

.personal-info .profile-pic {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.personal-info h2 {
    margin-top: 20px;
    font-size: 2rem;
}

.personal-info p {
    font-size: 1.2rem;
}

/* Contact Information Section */
.contact-info {
    background-color: #F9F9F9;
    padding: 40px 0;
}

.contact-info h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    font-size: 1.2rem;
    margin: 10px 0;
}

.contact-info .social-icons a {
    font-size: 1.5rem;
    color: #F2184F;
    margin: 0 10px;
}

/* Contact Me Section */
.contact-me {
    background-color: #fff;
    padding: 40px 0;
}

.contact-me h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.contact-me form .form-control {
    margin-bottom: 20px;
}

/* Narrative Information Section */
.narrative-info {
    background-color: #F9F9F9;
    padding: 40px 0;
}

.narrative-info h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.narrative-info p {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto;
}

/* Skills Section */
.skills {
    background-color: #fff;
    padding: 40px 0;
}

.skills h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.skill {
    font-size: 1.2rem;
}

.skill i {
    font-size: 2rem;
    color: #F2184F;
}

/* Tools Section */
.tools {
    background-color: #F9F9F9;
    padding: 40px 0;
}

.tools h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.tool {
    font-size: 1.2rem;
}

.tool i {
    font-size: 2rem;
    color: #F2184F;
}

/* Education Section */
.education {
    background-color: #fff;
    padding: 40px 0;
}

.education h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.education p {
    font-size: 1.2rem;
}

/* Experience Section */
.experience {
    background-color: #F9F9F9;
    padding: 40px 0;
}

.experience h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.experience p {
    font-size: 1.2rem;
}

/* Case Studies Section */
.case-studies {
    background-color: #fff;
    padding: 40px 0;
}

.case-studies h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.case-study {
    font-size: 1.2rem;
}

/* Services Section */
.services {
    background-color: #F9F9F9;
    padding: 40px 0;
}

.services h3 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.service {
    font-size: 1.2rem;
}

.service i {
    font-size: 2rem;
    color: #F2184F;
}

/* Footer Section */
.footer {
    background-color: #F2184F;
    color: white;
    padding: 20px 0;
}

.footer p {
    margin: 0;
}

   
   </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>My Portfolio</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Personal Information Section -->
    <!-- <section class="personal-info text-center">
        <div class="container">
        <img src="image/p3.png" class="rounded-circle mb-3" alt="Your Name" width="150">
            <h2>John Doe</h2>
            <p>Web Developer | Designer | Problem Solver</p>
        </div>
    </section> -->
    <section id="personal-info" class="text-center py-5">
        <div class="container">
            <img src="image/user.png" class="rounded-circle mb-3" alt="Your Name" width="150">
            <h1 class="mb-2">Your Name</h1>
            <p class="lead">Web Developer | Designer | Freelancer</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info text-center">
        <div class="container">
            <h3>Contact Information</h3>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-phone"></i> +123 456 7890</li>
                <li class="list-inline-item"><i class="fa fa-envelope"></i> email@example.com</li>
                <li class="list-inline-item"><i class="fa fa-map-marker"></i> 123 Street, City, Country</li>
            </ul>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </section>

    <!-- Contact Me Section -->
    <section class="contact-me text-center">
        <div class="container">
            <h3>Contact Me</h3>
            <form action="#" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Narrative Information Section -->
    <section class="narrative-info text-center">
        <div class="container">
            <h3>About Me</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu. Donec non mi quis odio luctus cursus.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills text-center">
        <div class="container">
            <h3>Skills</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="skill">
                        <i class="fa fa-html5"></i>
                        <h4>HTML</h4>
                        <p>Expert</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill">
                        <i class="fa fa-css3"></i>
                        <h4>CSS</h4>
                        <p>Expert</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill">
                        <i class="fa fa-js"></i>
                        <h4>JavaScript</h4>
                        <p>Intermediate</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill">
                        <i class="fa fa-react"></i>
                        <h4>React</h4>
                        <p>Intermediate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools Section -->
    <section class="tools text-center">
        <div class="container">
            <h3>Tools</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="tool">
                        <i class="fa fa-git"></i>
                        <h4>Git</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool">
                        <i class="fa fa-sass"></i>
                        <h4>Sass</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool">
                        <i class="fa fa-node"></i>
                        <h4>Node.js</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education text-center">
        <div class="container">
            <h3>Education</h3>
            <p>Bachelor's Degree in Computer Science - XYZ University</p>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience text-center">
        <div class="container">
            <h3>Experience</h3>
            <p>5 years of experience in web development, including various projects and roles.</p>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="case-studies text-center">
        <div class="container">
            <h3>Case Studies</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="case-study">
                        <h4>Project One</h4>
                        <p>Description of project one.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study">
                        <h4>Project Two</h4>
                        <p>Description of project two.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study">
                        <h4>Project Three</h4>
                        <p>Description of project three.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services text-center">
        <div class="container">
            <h3>Services</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-code"></i>
                        <h4>Web Development</h4>
                        <p>Building responsive and dynamic websites.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-paint-brush"></i>
                        <h4>Design</h4>
                        <p>Creating engaging and user-friendly designs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-search"></i>
                        <h4>SEO</h4>
                        <p>Optimizing websites for search engines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Your Name. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

