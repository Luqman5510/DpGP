<?php
include 'header.php';
?>
 <!-- Login Form Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-form">
                <h2 class="text-center mb-4">Login to Your Account</h2>
                <form action="#" method="post">
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                    <p class="text-center mt-3">Don't have an account? <a href="register.php" class="link">Register</a></p>
                </form>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>