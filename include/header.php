


<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <!-- <img src="assets/images/logo.png" alt="EasyTaxi" class="img-fluid"> -->
             <h2>LOGO HERE</h2>
        </a>
        <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracking.php">Track Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fare-quotes.php">Fare Quotes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label fw-semibold">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" placeholder="Enter password" required>
          </div>
          <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
      </div>
      <div class="modal-footer border-0 text-center">
        <small>Don’t have an account? 
          <a href="javascript:void(0)" class="text-primary fw-semibold" data-bs-target="#signupModal" data-bs-toggle="modal" data-bs-dismiss="modal">
            Sign up here
          </a>
        </small>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold">Create an Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="signupForm">
          <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Create a password" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Confirm Password</label>
            <input type="password" id="confirmPassword" class="form-control" placeholder="Re-enter your password" required>
            <small id="passwordError" class="text-danger mt-1 d-none">Passwords do not match</small>
          </div>

          <button type="submit" class="btn btn-custom w-100">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer border-0 text-center">
        <small>Already have an account?
          <a href="javascript:void(0)" class="text-primary fw-semibold" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">
            Log in here
          </a>
        </small>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toastr Configuration
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Common message function
    function showUnderDevelopmentMessage() {
        toastr.warning('This website is currently in its final stage of implementation. Development work is in progress. Thank you for your patience!');
    }

    // Login Form Submission
    document.querySelector('#loginModal form').addEventListener('submit', function(e) {
        e.preventDefault();
        showUnderDevelopmentMessage();
        
        // Close modal after 2 seconds
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            modal.hide();
            this.reset();
        }, 2000);
    });

    // Signup Form Submission
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();
        showUnderDevelopmentMessage();
        
        // Close modal after 2 seconds
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('signupModal'));
            modal.hide();
            this.reset();
            document.getElementById('passwordError').classList.add('d-none');
        }, 2000);
    });

    // Real-time password match validation for signup form
    document.getElementById('confirmPassword').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = this.value;
        const errorElement = document.getElementById('passwordError');
        
        if (confirmPassword && password !== confirmPassword) {
            errorElement.classList.remove('d-none');
        } else {
            errorElement.classList.add('d-none');
        }
    });

    // Real-time password validation
    document.getElementById('password').addEventListener('input', function() {
        const confirmPassword = document.getElementById('confirmPassword').value;
        const errorElement = document.getElementById('passwordError');
        
        if (confirmPassword && this.value !== confirmPassword) {
            errorElement.classList.remove('d-none');
        } else {
            errorElement.classList.add('d-none');
        }
    });
});
</script>

