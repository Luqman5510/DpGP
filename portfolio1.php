<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Design 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
	/* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    color: #333;
    line-height: 1.6;
}


h2 {
    color: #F2184F;
    font-weight: 600;
    margin-bottom: 30px;
}

/* Header */
header {
    background-color: #F2184F;
    color: #fff;
    padding: 100px 0;
}

/* About Me Section */
#about-me img {
    max-width: 200px;
    border: 5px solid #F2184F;
    margin-bottom: 20px;
}

/* Skills Section */
.skill h5 {
    font-weight: 
}
/* Contact Information Section */
#contact-info {
    padding: 60px 0;
}

#contact-info p {
    margin: 0;
}

#contact-info .fa-2x {
    color: #F2184F;
}

.social-icon {
    display: inline-block;
    margin: 0 10px;
    color: #F2184F;
    font-size: 24px;
    text-decoration: none;
}

.social-icon:hover {
    color: #333;
}

</style>
</head>
<body>

<!-- Header Section -->
<header class="bg-dark text-white text-center py-5">
    <h1>Your Name</h1>
    <p class="lead">Web Developer | Designer | Programmer</p>
</header>

<!-- About Me Section -->
<section id="about-me" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="image/user.png" class="img-fluid rounded-circle" alt="Your Image">
            </div>
            <div class="col-md-8">
                <h2>About Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Fusce a quam.</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Information Section -->
<section id="contact-info" class="">
    <div class="container">
        <h2 class="text-center">Contact Information</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <p><i class="fas fa-map-marker-alt fa-2x"></i></p>
                <p>1234 Street Name, City, Country</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fas fa-phone fa-2x"></i></p>
                <p>(+123) 456-7890</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fas fa-envelope fa-2x"></i></p>
                <p>email@example.com</p>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col">
                <a href="https://facebook.com" class="social-icon" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" class="social-icon" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://linkedin.com" class="social-icon" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://instagram.com" class="social-icon" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">My Skills</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="skill">
                    <h5>HTML/CSS</h5>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="skill">
                    <h5>JavaScript</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 80%;">80%</div>
                    </div>
                </div>
                <div class="skill">
                    <h5>Bootstrap</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 85%;">85%</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill">
                    <h5>React.js</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 75%;">75%</div>
                    </div>
                </div>
                <div class="skill">
                    <h5>Node.js</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width: 70%;">70%</div>
                    </div>
                </div>
                <div class="skill">
                    <h5>Python</h5>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" style="width: 80%;">80%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section id="tools" class="py-5">
    <div class="container">
        <h2 class="text-center">Tools I Use</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <i class="fab fa-git fa-3x"></i>
                <p>Git</p>
            </div>
            <div class="col-md-3">
                <i class="fab fa-docker fa-3x"></i>
                <p>Docker</p>
            </div>
            <div class="col-md-3">
                <i class="fab fa-aws fa-3x"></i>
                <p>AWS</p>
            </div>
            <div class="col-md-3">
                <i class="fab fa-linux fa-3x"></i>
                <p>Linux</p>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Education</h2>
        <ul class="timeline">
            <li>
                <h5>BS in Computer Science</h5>
                <p>University Name | 2015 - 2019</p>
            </li>
            <li>
                <h5>High School Diploma</h5>
                <p>School Name | 2013 - 2015</p>
            </li>
        </ul>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-5">
    <div class="container">
        <h2 class="text-center">Experience</h2>
        <ul class="timeline">
            <li>
                <h5>Front-End Developer</h5>
                <p>Company Name | 2019 - Present</p>
            </li>
            <li>
                <h5>Internship</h5>
                <p>Company Name | Summer 2018</p>
            </li>
        </ul>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="project-card">
                    <img src="project1.jpg" alt="Project 1" class="img-fluid">
                    <h5>Project 1</h5>
                    <p>Short description of the project.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="project2.jpg" alt="Project 2" class="img-fluid">
                    <h5>Project 2</h5>
                    <p>Short description of the project.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="project3.jpg" alt="Project 3" class="img-fluid">
                    <h5>Project 3</h5>
                    <p>Short description of the project.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
    <a href="path/to/your/file.pdf" class="btn btn-download" download style="background-color: #28a745; color: white; border-radius: 5px; padding: 10px 20px;">
        Download Now
    </a>
</div>
</section>

<!-- Contact Me Section -->
<section id="contact-me" class="py-5">
    <div class="container">
        <h2 class="text-center">Contact Me</h2>
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
    
</section>

<!-- Footer Section -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Your Name. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'footer.php';
?>