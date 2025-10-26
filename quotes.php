<?php $title = ' | Get Quotes' ?>
<?php include ('include/head.php') ?>

<body>
    <!-- include header -->
    <?php include ('include/header.php') ?>

    <!-- Quotes Hero Section -->
    <section class="quotes-hero py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 data-aos="fade-down">Compare Taxi Quotes</h1>
                    <p class="lead" data-aos="fade-up">Get the best prices from multiple taxi companies</p>
                </div>
            </div>
             <!-- Booking Form -->
            <div class="tc-quote-box" data-aos="fade-up" data-aos-delay="500">
                <form id="taxicode-quote" class="styled" action="quotes.php" method="POST">
                    <div class="quote-row" id="quoteRow">
                        <!-- Journey Type -->
                        <select class="journey-type styled form-select" name="journey_type" id="journeyType">
                            <option value="oneway">One Way</option>
                            <option value="return">Return</option>
                            <option value="hourly">Hourly</option>
                        </select>

                        <!-- Pickup Location -->
                        <input type="text" name="pickup" placeholder="Pickup postcode or place" class="form-control" required />

                        <!-- Via Location (Initially hidden for oneway) -->
                        <div class="via-wrapper" id="viaWrapper" style="display: none;">
                            <input type="text" name="via" placeholder="Via (Optional)" class="form-control" id="viaInput" />
                            <a class="add-multiple-vias" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viaModal">
                                <i class="fas fa-plus-circle me-1"></i>Add multiple vias
                            </a>
                        </div>

                        <!-- Destination -->
                        <input type="text" name="destination" placeholder="Destination postcode or place" class="form-control" required />

                        <!-- Date/Time Fields -->
                        <div class="date-time-wrapper">
                            <input type="text" name="date" placeholder="Date / ASAP" class="form-control" id="dateInput" />
                            <input type="text" name="return_date" placeholder="Return" class="form-control" id="returnDateInput" style="display: none;" />
                        </div>

                        <!-- Passengers -->
                        <select name="passengers" class="styled form-select" id="passengersSelect">
                            <option value="1">1 Passenger</option>
                            <option value="2">2 Passengers</option>
                            <option value="3">3 Passengers</option>
                            <option value="4">4 Passengers</option>
                            <option value="5">5 Passengers</option>
                            <option value="6">6 Passengers</option>
                            <option value="7">7 Passengers</option>
                            <option value="8">8 Passengers</option>
                        </select>

                        <!-- Hourly Hours (Initially hidden) -->
                        <select name="hourly_hours" class="styled form-select" id="hourlyHours" style="display: none;">
                            <option value="1">1 Hour</option>
                            <option value="2">2 Hours</option>
                            <option value="3">3 Hours</option>
                            <option value="4">4 Hours</option>
                            <option value="5">5 Hours</option>
                            <option value="6">6 Hours</option>
                            <option value="7">7 Hours</option>
                            <option value="8">8 Hours</option>
                        </select>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">
                            Get Quotes
                        </button>
                    </div>
                    
                    <div class="complex-anchor mt-4 mb-3 text-center">
                        Complex journey? <a href="javascript:void(0)" class="fw-bold">Click here</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
<!-- Multiple Vias Modal -->
<div class="modal fade" id="viaModal" tabindex="-1" aria-labelledby="viaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viaModalLabel">
                    <i class="fas fa-map-marker-alt me-2"></i>Multiple Via Points
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="viaFields">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Via #1</label>
                        <input type="text" class="form-control via-input" placeholder="Enter location" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Via #2</label>
                        <input type="text" class="form-control via-input" placeholder="Enter location" />
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm" id="addAnotherVia">
                    <i class="fas fa-plus me-1"></i>Add Another Via
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="clearVias">Clear All</button>
                <button type="button" class="btn btn-primary" id="saveVias">Save Vias</button>
            </div>
        </div>
    </div>
</div>

    <!-- Quotes Section -->
  

    <section class="quotes-section py-5">
    <div class="container">
        <div class="row">
            <!-- Filter Section -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="filter-card shadow-sm rounded-3">
                    <div class="filter-header bg-primary text-white p-3 rounded-top">
                        <h4 class="mb-0"><i class="fas fa-filter me-2"></i>Filter Results</h4>
                    </div>
                    <div class="filter-body p-3">
                        <!-- Vehicle Type Filter -->
                        <div class="filter-group mb-4">
                            <h5 class="fw-semibold mb-3"><i class="fas fa-car me-2 text-primary"></i>Vehicle Type</h5>
                            <div class="filter-options">
                                <div class="filter-option-card mb-2">
                                    <input class="form-check-input" type="checkbox" id="standard" checked>
                                    <label class="form-check-label w-100 p-2 rounded" for="standard">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-taxi me-3 text-primary"></i>
                                            <div>
                                                <div class="fw-medium">Standard Taxi</div>
                                                <small class="text-muted">Up to 4 passengers</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="filter-option-card mb-2">
                                    <input class="form-check-input" type="checkbox" id="executive">
                                    <label class="form-check-label w-100 p-2 rounded" for="executive">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-car me-3 text-primary"></i>
                                            <div>
                                                <div class="fw-medium">Executive</div>
                                                <small class="text-muted">Premium comfort</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="filter-option-card mb-2">
                                    <input class="form-check-input" type="checkbox" id="minibus">
                                    <label class="form-check-label w-100 p-2 rounded" for="minibus">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-shuttle-van me-3 text-primary"></i>
                                            <div>
                                                <div class="fw-medium">Minibus</div>
                                                <small class="text-muted">Groups up to 8</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Price Range Filter -->
                        <div class="filter-group mb-4">
                            <h5 class="fw-semibold mb-3"><i class="fas fa-pound-sign me-2 text-primary"></i>Price Range</h5>
                            <div class="price-range-container">
                                <input type="range" class="form-range" min="0" max="100" id="priceRange">
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="badge bg-light text-dark">£0</span>
                                    <span class="badge bg-light text-dark">£50</span>
                                    <span class="badge bg-light text-dark">£100+</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional Filters -->
                        <div class="filter-group">
                            <h5 class="fw-semibold mb-3"><i class="fas fa-star me-2 text-primary"></i>Minimum Rating</h5>
                            <div class="rating-filter">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="ratingFilter" id="ratingAny" checked>
                                    <label class="form-check-label" for="ratingAny">
                                        Any Rating
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="ratingFilter" id="rating4">
                                    <label class="form-check-label" for="rating4">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i> & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ratingFilter" id="rating3">
                                    <label class="form-check-label" for="rating3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i> & Above
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-footer p-3 border-top">
                        <button class="btn btn-outline-primary w-100">
                            <i class="fas fa-times me-2"></i>Reset Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quotes List -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="quotes-header d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0">3 Quotes Available</h4>
                    <div class="sort-dropdown">
                        <select class="form-select">
                            <option selected>Sort by: Recommended</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Rating: High to Low</option>
                        </select>
                    </div>
                </div>
                
                <div class="quotes-list">
                    <!-- Quote 1 -->
                    <div class="quote-card mb-4 shadow-sm rounded-3">
                        <div class="row g-0 h-100">
                            <div class="col-md-3 d-flex align-items-center justify-content-center p-3 bg-light rounded-start">
                                <div class="company-logo">
                                    <img src="assets/images/cars/cheapest-price.png" alt="City Taxis" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 p-4">
                                <div class="quote-details">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="mb-0">City Taxis</h5>
                                        <span class="badge bg-success">Best Value</span>
                                    </div>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-2">4.5/5 (128 reviews)</span>
                                    </div>
                                    <div class="vehicle-details">
                                        <div class="row">
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-car text-primary me-2"></i>
                                                <span>Standard Estate</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-users text-primary me-2"></i>
                                                <span>Up to 4 passengers</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-suitcase text-primary me-2"></i>
                                                <span>2 large bags</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-clock text-primary me-2"></i>
                                                <span>ETA: 15 min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-4 text-center border-start">
                                <div class="price mb-3">
                                    <h3 class="text-primary fw-bold">£45.00</h3>
                                    <small class="text-muted">Fixed Price • All inclusive</small>
                                </div>
                                <button class="btn btn-primary w-100 mb-2">
                                    <i class="fas fa-check me-2"></i>Book Now
                                </button>
                                <a href="#" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quote 2 -->
                    <div class="quote-card mb-4 shadow-sm rounded-3">
                        <div class="row g-0 h-100">
                            <div class="col-md-3 d-flex align-items-center justify-content-center p-3 bg-light rounded-start">
                                <div class="company-logo">
                                    <img src="assets/images/cars/executive.png" alt="Executive Cars" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 p-4">
                                <div class="quote-details">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="mb-0">Executive Cars</h5>
                                        <span class="badge bg-warning text-dark">Premium</span>
                                    </div>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ms-2">5.0/5 (64 reviews)</span>
                                    </div>
                                    <div class="vehicle-details">
                                        <div class="row">
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-car text-primary me-2"></i>
                                                <span>Executive Sedan</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-users text-primary me-2"></i>
                                                <span>Up to 3 passengers</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-suitcase text-primary me-2"></i>
                                                <span>3 large bags</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-clock text-primary me-2"></i>
                                                <span>ETA: 10 min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-4 text-center border-start">
                                <div class="price mb-3">
                                    <h3 class="text-primary fw-bold">£65.00</h3>
                                    <small class="text-muted">Fixed Price • All inclusive</small>
                                </div>
                                <button class="btn btn-primary w-100 mb-2">
                                    <i class="fas fa-check me-2"></i>Book Now
                                </button>
                                <a href="#" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quote 3 -->
                    <div class="quote-card mb-4 shadow-sm rounded-3">
                        <div class="row g-0 h-100">
                            <div class="col-md-3 d-flex align-items-center justify-content-center p-3 bg-light rounded-start">
                                <div class="company-logo">
                                    <img src="assets/images/cars/Luxury.png" alt="Airport Express" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 p-4">
                                <div class="quote-details">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="mb-0">Airport Express</h5>
                                        <span class="badge bg-info">Family</span>
                                    </div>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ms-2">4.0/5 (92 reviews)</span>
                                    </div>
                                    <div class="vehicle-details">
                                        <div class="row">
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-car text-primary me-2"></i>
                                                <span>People Carrier</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-users text-primary me-2"></i>
                                                <span>Up to 6 passengers</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-suitcase text-primary me-2"></i>
                                                <span>6 large bags</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-clock text-primary me-2"></i>
                                                <span>ETA: 20 min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-4 text-center border-start">
                                <div class="price mb-3">
                                    <h3 class="text-primary fw-bold">£55.00</h3>
                                    <small class="text-muted">Fixed Price • All inclusive</small>
                                </div>
                                <button class="btn btn-primary w-100 mb-2">
                                    <i class="fas fa-check me-2"></i>Book Now
                                </button>
                                <a href="#" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quote 4 -->
                    <div class="quote-card mb-4 shadow-sm rounded-3">
                        <div class="row g-0 h-100">
                            <div class="col-md-3 d-flex align-items-center justify-content-center p-3 bg-light rounded-start">
                                <div class="company-logo">
                                    <img src="assets/images/cars/most-reliable.png" alt="Airport Express" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 p-4">
                                <div class="quote-details">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="mb-0">Vip Chauffeurs London</h5>
                                        <span class="badge bg-info">Family</span>
                                    </div>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ms-2">4.0/5 (92 reviews)</span>
                                    </div>
                                    <div class="vehicle-details">
                                        <div class="row">
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-car text-primary me-2"></i>
                                                <span>People Carrier</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-users text-primary me-2"></i>
                                                <span>Up to 5 passengers</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-suitcase text-primary me-2"></i>
                                                <span>6 large bags</span>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-clock text-primary me-2"></i>
                                                <span>ETA: 20 min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-4 text-center border-start">
                                <div class="price mb-3">
                                    <h3 class="text-primary fw-bold">£235.00</h3>
                                    <small class="text-muted">Fixed Price • All inclusive</small>
                                </div>
                                <button class="btn btn-primary w-100 mb-2">
                                    <i class="fas fa-check me-2"></i>Book Now
                                </button>
                                <a href="#" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- include footer -->
    <?php include ('include/footer.php') ?>

</body>
<?php include ('include/footer-script.php') ?>
   
<script>
document.addEventListener('DOMContentLoaded', function () {
  const journeyType = document.getElementById('journeyType');
  const quoteRow = document.getElementById('quoteRow');
  const viaWrapper = document.getElementById('viaWrapper');
  const returnDateInput = document.getElementById('returnDateInput');
  const hourlyHours = document.getElementById('hourlyHours');
  const dateInput = document.getElementById('dateInput');
  const passengersSelect = document.getElementById('passengersSelect');

  // Journey Type Change Event
  journeyType.addEventListener('change', function () {
    const type = this.value;

    viaWrapper.style.display = 'none';
    returnDateInput.style.display = 'none';
    hourlyHours.style.display = 'none';
    passengersSelect.style.display = 'block';
    dateInput.placeholder = 'Date / ASAP';

    switch (type) {
      case 'oneway':
        quoteRow.className = 'quote-row oneway';
        viaWrapper.style.display = 'block';
        break;

      case 'return':
        quoteRow.className = 'quote-row return';
        viaWrapper.style.display = 'block';
        returnDateInput.style.display = 'block';
        dateInput.placeholder = 'Outbound';
        break;

      case 'hourly':
        quoteRow.className = 'quote-row hourly';
        hourlyHours.style.display = 'block';
        passengersSelect.style.display = 'none';
        dateInput.placeholder = 'Start Date/Time';
        break;
    }
  });

  journeyType.dispatchEvent(new Event('change'));

  // Multiple Vias Functionality
  let viaCount = 1;
  const viaFields = document.getElementById('viaFields');
  const addAnotherViaBtn = document.getElementById('addAnotherVia');
  const clearViasBtn = document.getElementById('clearVias');
  const saveViasBtn = document.getElementById('saveVias');

  // Function to update via labels numbering
  function updateViaLabels() {
    const allVias = viaFields.querySelectorAll('.via-input');
    allVias.forEach((input, index) => {
      const label = input.closest('.mb-3').querySelector('.form-label');
      label.textContent = `Via #${index + 1}`;
    });
    viaCount = allVias.length;
  }

  // Add Another Via
  if (addAnotherViaBtn) {
    addAnotherViaBtn.addEventListener('click', function () {
      const currentVias = viaFields.querySelectorAll('.via-input').length;
      if (currentVias < 8) {
        const newViaField = document.createElement('div');
        newViaField.className = 'mb-3 d-flex align-items-center gap-2';
        newViaField.innerHTML = `
          <div class="flex-grow-1">
            <label class="form-label fw-bold">Via #${currentVias + 1}</label>
            <input type="text" class="form-control via-input" placeholder="Enter location" />
          </div>
          <button type="button" class="btn btn-danger btn-sm remove-via" title="Remove this via">
            <i class="fas fa-times"></i>
          </button>
        `;
        viaFields.appendChild(newViaField);

        // Remove Field
        newViaField.querySelector('.remove-via').addEventListener('click', function () {
          newViaField.remove();
          updateViaLabels();
        });
        updateViaLabels();
      } else {
        alert('Maximum 8 via points allowed');
      }
    });
  }

  // Clear All Vias
  if (clearViasBtn) {
    clearViasBtn.addEventListener('click', function () {
      viaFields.innerHTML = `
        <div class="mb-3">
          <label class="form-label fw-bold">Via #1</label>
          <input type="text" class="form-control via-input" placeholder="Enter location" />
        </div>`;
      viaCount = 1;
    });
  }

  // Save Vias
  if (saveViasBtn) {
    saveViasBtn.addEventListener('click', function () {
      const vias = [];
      document.querySelectorAll('.via-input').forEach(input => {
        if (input.value.trim()) {
          vias.push(input.value.trim());
        }
      });

      const viaInput = document.getElementById('viaInput');
      if (viaInput && vias.length > 0) {
        viaInput.value = vias.join('; ');
      } else if (viaInput) {
        viaInput.value = '';
      }

      const modal = bootstrap.Modal.getInstance(document.getElementById('viaModal'));
      modal.hide();
    });
  }

  // Date Input Type Toggle
  const dateInputs = document.querySelectorAll('input[type="text"][name="date"], input[type="text"][name="return_date"]');
  dateInputs.forEach(input => {
    input.addEventListener('focus', function () {
      this.type = 'datetime-local';
    });

    input.addEventListener('blur', function () {
      if (!this.value) {
        this.type = 'text';
      }
    });
  });

  // Form Submission
  document.getElementById('taxicode-quote').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    console.log('Form submitted:', Object.fromEntries(formData));
    window.location.href = 'quotes.php?' + new URLSearchParams(formData).toString();
  });
});
</script>
