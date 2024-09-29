<?php
include 'header.php';
?>
<!-- Registration Form Section -->
    <section class="registration-section">
        <div class="container">
            <div class="registration-form">
                <h2 class="text-center mb-4">Create Your Account</h2>
                <form action="#" method="post">
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn-register">Register</button>
                    <p class="text-center mt-3">Already have an account? <a href="login.php" class="link">Login</a></p>
                </form>
            </div>
        </div>
    </section>
<?php
include 'footer.php';
?>