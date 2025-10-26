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
          <!-- Bootstrap Booking Form -->
            <div class="easytaxi-booking-form" data-aos="fade-up" data-aos-delay="500">
                <form id="easytaxi-booking-quote" class="styled" action="fare-quotes.php" method="POST">
                    <div class="row g-2 align-items-end" id="quoteRow">
                        <!-- Journey Type -->
                        <div class="col-md-2">
                            <select class="form-select journey-type" name="journey_type" id="journeyType">
                                <option value="oneway">One Way</option>
                                <option value="return">Return</option>
                                <option value="hourly">Hourly</option>
                            </select>
                        </div>

                        <!-- Pickup Location -->
                        <div class="col-md-2">
                            <input type="text" name="pickup" placeholder="Pickup location" class="form-control"
                                required />
                        </div>

                        <!-- Stop Location -->
                        <div class="col-md-2 stop-wrapper" id="stopWrapper" style="display: none;">
                            <input type="text" name="stop" placeholder="Stop (Optional)" class="form-control"
                                id="stopInput" />
                            <a class="add-multiple-stops" href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#stopsModal">
                                <i class="fas fa-plus-circle me-1"></i>Add stops
                            </a>
                        </div>

                        <!-- Destination -->
                        <div class="col-md-2">
                            <input type="text" name="destination" placeholder="Destination" class="form-control"
                                required />
                        </div>

                        <!-- Date/Time Fields -->
                        <div class="col-md-2">
                            <input type="text" name="date" placeholder="Date / ASAP" class="form-control"
                                id="dateInput" />
                        </div>

                        <!-- Return Date (Hidden by default) -->
                        <div class="col-md-2" id="returnDateWrapper" style="display: none;">
                            <input type="text" name="return_date" placeholder="Return date" class="form-control"
                                id="returnDateInput" />
                        </div>

                        <!-- Passengers -->
                        <div class="col-md-2" id="passengersWrapper">
                            <select name="passengers" class="form-select" id="passengersSelect">
                                <option value="1">1 Passenger</option>
                                <option value="2">2 Passengers</option>
                                <option value="3">3 Passengers</option>
                                <option value="4">4 Passengers</option>
                                <option value="5">5 Passengers</option>
                                <option value="6">6 Passengers</option>
                                <option value="7">7 Passengers</option>
                                <option value="8">8 Passengers</option>
                            </select>
                        </div>

                        <!-- Hourly Hours (Hidden by default) -->
                        <div class="col-md-2" id="hourlyWrapper" style="display: none;">
                            <select name="hourly_hours" class="form-select" id="hourlyHours">
                                <option value="1">1 Hour</option>
                                <option value="2">2 Hours</option>
                                <option value="3">3 Hours</option>
                                <option value="4">4 Hours</option>
                                <option value="5">5 Hours</option>
                                <option value="6">6 Hours</option>
                                <option value="7">7 Hours</option>
                                <option value="8">8 Hours</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-custom w-100">
                                Fare Quotes
                            </button>
                        </div>
                    </div>

                    <!-- <div class="complex-anchor mt-4 mb-3 text-center">
                        Complex journey? <a href="javascript:void(0)" class="fw-bold">Click here</a>
                    </div> -->
                </form>
            </div>
        </div>
    </section>

 <!-- Multiple stops Modal -->
    <div class="modal fade" id="stopsModal" tabindex="-1" aria-labelledby="stopsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title heading" id="stopsModalLabel">
                        <i class="fas fa-map-marker-alt me-2"></i>Multiple Stop Points
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="stopFields">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Stop #1</label>
                            <input type="text" class="form-control stop-input" placeholder="Enter location" />
                        </div>

                    </div>
                    <button type="button" class="btn btn-custom btn-sm" id="addAnotherStop">
                        <i class="fas fa-plus me-1"></i>Add Another Stop
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="clearStops">Clear All</button>
                    <button type="button" class="btn btn-custom" id="saveStops">Save stops</button>
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
                            <h5 class="fw-semibold mb-3 heading"><i class="fas fa-pound-sign me-2 text-primary"></i>Price Range</h5>
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
                            <h5 class="fw-semibold mb-3 heading"><i class="fas fa-star me-2 text-primary"></i>Minimum Rating</h5>
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
                        <button class="btn btn-custom w-100">
                            <i class="fas fa-times me-2"></i>Reset Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quotes List -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="quotes-header d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0 heading">3 Quotes Available</h4>
                    <div class="sort-dropdown-custom">
                        <select class="form-select dropdown-custom">
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
                                <button class="btn btn-custom w-100 mb-2">
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
                                <button class="btn btn-custom w-100 mb-2">
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
                                <button class="btn btn-custom w-100 mb-2">
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
                                <button class="btn btn-custom w-100 mb-2">
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
            const stopWrapper = document.getElementById('stopWrapper');
            const returnDateInput = document.getElementById('returnDateInput');
            const hourlyHours = document.getElementById('hourlyHours');
            const dateInput = document.getElementById('dateInput');
            const passengersSelect = document.getElementById('passengersSelect');

            // Journey Type Change Event
            // Journey Type Change Event - Updated for Bootstrap
            journeyType.addEventListener('change', function () {
                const type = this.value;

                // Hide all optional fields first
                document.getElementById('stopWrapper').style.display = 'none';
                document.getElementById('returnDateWrapper').style.display = 'none';
                document.getElementById('hourlyWrapper').style.display = 'none';
                document.getElementById('passengersWrapper').style.display = 'block';

                const dateInput = document.getElementById('dateInput');
                dateInput.placeholder = 'Date / ASAP';

                switch (type) {
                    case 'oneway':
                        document.getElementById('stopWrapper').style.display = 'block';
                        break;

                    case 'return':
                        document.getElementById('stopWrapper').style.display = 'block';
                        document.getElementById('returnDateWrapper').style.display = 'block';
                        dateInput.placeholder = 'Outbound date';
                        break;

                    case 'hourly':
                        document.getElementById('hourlyWrapper').style.display = 'block';
                        document.getElementById('passengersWrapper').style.display = 'none';
                        dateInput.placeholder = 'Start date/time';
                        break;
                }
            });

            journeyType.dispatchEvent(new Event('change'));

            // Multiple stops Functionality
            let stopCount = 1;
            const stopFields = document.getElementById('stopFields');
            const addAnotherStopBtn = document.getElementById('addAnotherStop');
            const clearStopsBtn = document.getElementById('clearStops');
            const saveStopsBtn = document.getElementById('saveStops');

            // Function to update Stop labels numbering
            function updateStopLabels() {
                const allStops = stopFields.querySelectorAll('.stop-input');
                allStops.forEach((input, index) => {
                    const label = input.closest('.mb-3').querySelector('.form-label');
                    label.textContent = `Stop #${index + 1}`;
                });
                stopCount = allStops.length;
            }

            // Add Another Stop
            if (addAnotherStopBtn) {
                addAnotherStopBtn.addEventListener('click', function () {
                    const currentStops = stopFields.querySelectorAll('.stop-input').length;
                    if (currentStops < 8) {
                        const newStopField = document.createElement('div');
                        newStopField.className = 'mb-3 d-flex align-items-center gap-2';
                        newStopField.innerHTML = `
          <div class="flex-grow-1">
            <label class="form-label fw-bold">Stop #${currentStops + 1}</label>
            <input type="text" class="form-control stop-input" placeholder="Enter location" />
          </div>
          <button type="button" class="btn btn-danger btn-sm remove-stop" title="Remove this stop">
            <i class="fas fa-times"></i>
          </button>
        `;
                        stopFields.appendChild(newStopField);

                        // Remove Field
                        newStopField.querySelector('.remove-stop').addEventListener('click', function () {
                            newStopField.remove();
                            updateStopLabels();
                        });
                        updateStopLabels();
                    } else {
                        alert('Maximum 8 stop points allowed');
                    }
                });
            }

            // Clear All stops
            if (clearStopsBtn) {
                clearStopsBtn.addEventListener('click', function () {
                    stopFields.innerHTML = `
        <div class="mb-3">
          <label class="form-label fw-bold">stop #1</label>
          <input type="text" class="form-control stop-input" placeholder="Enter location" />
        </div>`;
                    stopCount = 1;
                });
            }

            // Save stops
            if (saveStopsBtn) {
                saveStopsBtn.addEventListener('click', function () {
                    const stops = [];
                    document.querySelectorAll('.stop-input').forEach(input => {
                        if (input.value.trim()) {
                            stops.push(input.value.trim());
                        }
                    });

                    const stopInput = document.getElementById('stopInput');
                    if (stopInput && stops.length > 0) {
                        stopInput.value = stops.join('; ');
                    } else if (stopInput) {
                        stopInput.value = '';
                    }

                    const modal = bootstrap.Modal.getInstance(document.getElementById('stopsModal'));
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
            document.getElementById('easytaxi-booking-quote').addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(this);
                console.log('Form submitted:', Object.fromEntries(formData));
                window.location.href = 'fare-quotes.php?' + new URLSearchParams(formData).toString();
            });
        });
    </script>
