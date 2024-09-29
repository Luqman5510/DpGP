<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
	body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f8f9fa;
}

/* Section Headings */
h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #F2184F;
}

/* Personal Information */
#personal-info {
    background-color: #F2184F;
    color: white;
    padding: 60px 0;
}

#personal-info img {
    border: 4px solid white;
}

/* Contact Information */
#contact-info .social-icons a {
    color: #F2184F;
    font-size: 1.5rem;
    margin: 0 10px;
}

#contact-info .social-icons a:hover {
    color: #333;
}

/* Skills & Tools */
#skills i, #tools i {
    color: #F2184F;
}

#skills h4, #tools h4 {
    margin-top: 10px;
}

/* Project Cards */
.card {
    border: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

/* Contact Me */
#contact-me input, #contact-me textarea {
    border-radius: 0;
    border-color: #F2184F;
}

#contact-me .btn-primary {
    background-color: #F2184F;
    border-color: #F2184F;
}

#contact-me .btn-primary:hover {
    background-color: #333;
    border-color: #333;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
}

footer a {
    color: #F2184F;
    text-decoration: none;
}

footer a:hover {
    color: white;
}

	</style>
</head>
<body>

    <!-- Personal Information Section -->
    <section id="personal-info" class="text-center py-5">
        <div class="container">
            <img src="image/user.png" class="rounded-circle mb-3" alt="Your Name" width="150">
            <h1 class="mb-2">Your Name</h1>
            <p class="lead">Web Developer | Designer | Freelancer</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section id="contact-info" class="text-center py-4 bg-light">
        <div class="container">
            <h2>Contact Information</h2>
            <p>Email: your.email@example.com | Phone: +123 456 7890</p>
            <div class="social-icons">
                <a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about-me" class="py-5">
        <div class="container">
            <h2 class="text-center">About Me</h2>
            <p class="text-center">I am a passionate web developer with experience in creating dynamic and responsive websites. I enjoy solving complex problems and turning ideas into reality.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Skills</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-code fa-2x mb-3"></i>
                    <h4>Web Development</h4>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-paint-brush fa-2x mb-3"></i>
                    <h4>UI/UX Design</h4>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-database fa-2x mb-3"></i>
                    <h4>Database Management</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools Section -->
    <section id="tools" class="py-5">
        <div class="container">
            <h2 class="text-center">Tools</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <i class="fab fa-html5 fa-2x mb-3"></i>
                    <h4>HTML5</h4>
                </div>
                <div class="col-md-3">
                    <i class="fab fa-css3-alt fa-2x mb-3"></i>
                    <h4>CSS3</h4>
                </div>
                <div class="col-md-3">
                    <i class="fab fa-js fa-2x mb-3"></i>
                    <h4>JavaScript</h4>
                </div>
                <div class="col-md-3">
                    <i class="fab fa-bootstrap fa-2x mb-3"></i>
                    <h4>Bootstrap</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Education</h2>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">Bachelor of Science in Computer Science - XYZ University</li>
                <li class="list-group-item">Certified Web Developer - ABC Institute</li>
            </ul>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-5">
        <div class="container">
            <h2 class="text-center">Experience</h2>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">Front-End Developer at DEF Company</li>
                <li class="list-group-item">Freelance Web Designer</li>
            </ul>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Case Studies / Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="project1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project Title 1</h5>
                            <p class="card-text">Brief description of the project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="project2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project Title 2</h5>
                            <p class="card-text">Brief description of the project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="project3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project Title 3</h5>
                            <p class="card-text">Brief description of the project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center">Services</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-laptop-code fa-2x mb-3"></i>
                    <h4>Web Development</h4>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-paint-brush fa-2x mb-3"></i>
                    <h4>Graphic Design</h4>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-search fa-2x mb-3"></i>
                    <h4>SEO Optimization</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Me Section -->
    <section id="contact-me" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <form action="#" method="post" class="text-center">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center py-4">
        <div class="container">
            <p>&copy; 2024 Your Name. All Rights Reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
