<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script src="assets/js/slick.min.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

<script>
   // Initialize AOS
   AOS.init({
      duration: 1000,
      once: true
   });


   // Tracking Form Handler
   document.getElementById('tracking-form')?.addEventListener('submit', function (e) {
      e.preventDefault();
      document.getElementById('trackingResult').style.display = 'block';
   });

   // Quotes Filter
   document.getElementById('priceRange')?.addEventListener('input', function () {
      // Filter logic here
      console.log('Price range changed:', this.value);
   });
</script>


<script>
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});
</script>




</html>