<?php $title = ' | Home' ?>
<?php include ('include/head.php') ?>

<body>
    <!-- include header -->
    <?php include ('include/header.php') ?>


    <!-- Hero Section -->
    <!-- Pricing Hero Section -->
    <section class="pricing-hero py-5">
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 data-aos="fade-down">Compare Taxi Prices</h1>
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

    <!-- How It Works Modal -->
    <div class="modal fade" id="howModal" tabindex="-1" aria-labelledby="howModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="howModalLabel">
                        <i class="fas fa-cogs me-2"></i>How It Works
                    </h5>

                </div>
                <div class="modal-body p-4">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item border-0">
                            Tell us where you want to go from and to, on what date and at what time.
                        </li>
                        <li class="list-group-item border-0">
                            We will search our database for all the taxi, minibus and coach hire companies who can cover
                            your journey.
                        </li>
                        <li class="list-group-item border-0">
                            We will display all the quotes to you along with previous customer feedback.
                        </li>
                        <li class="list-group-item border-0">
                            You book the vehicle and transport company that best suits your needs.
                        </li>
                        <li class="list-group-item border-0">
                            From start to finish you can compare quotes and book in under 60 seconds.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Got it!</button>
                </div>
            </div>
        </div>
    </div>

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


    <!-- Choose Section -->
    <section class="choose-sec mt-5">
        <div class="container">
            <div class="row why-choose align-items-center">
                <div class="col-12 col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="chos-im" data-aos="fade-right" data-aos-duration="1500">
                        <img src="assets/images/chs.png" class="img-fluid" alt="Choose">
                    </div>
                </div>
                <div class="col-12 col-xxl-5 col-xl-5">
                    <div class="chos-cont" data-aos="fade-left" data-aos-duration="1500">
                        <h3 class="sec-hed text-white mb-3">why choose us</h3>
                        <p class="para text-white">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                            eiusmod tempor incididunt ut labores</p>
                        <p class="para text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="javascript:;" class="btn btn-custom">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works py-5 mb-5">
        <div class="container">
            <h1 class="text-center mb-5 heading" data-aos="fade-up">How It Works</h1>
            <div class="row">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card text-center">
                        <div class="step-icon">1</div>
                        <h4>Enter Journey Details</h4>
                        <p>Tell us where you want to go and when</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card text-center">
                        <div class="step-icon">2</div>
                        <h4>Compare Quotes</h4>
                        <p>We search all available taxi companies</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card text-center">
                        <div class="step-icon">3</div>
                        <h4>Choose Provider</h4>
                        <p>Select based on price and reviews</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card text-center">
                        <div class="step-icon">4</div>
                        <h4>Book & Travel</h4>
                        <p>Confirm booking and enjoy your ride</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container benefits-container">
            <h1 class="section-heading heading">EasyTaxi Benefits</h1>
            <div class="benefits-grid">
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                    <!-- <img src="assets/images/fixed-price.png" alt="Fixed Price" class="benefit-img"> -->
                    <i class="fa-solid fa-money-check-dollar fa-2xl mb-4" style="color: #FFD43B;"></i>
                    <h4>Fixed Price</h4>
                    <p>No surge pricing or hidden costs — the price you see is the price you pay.</p>
                </div>

                <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fa-solid fa-file-invoice-dollar fa-2xl mb-4" style="color: #FFD43B;"></i>
                    <h4>Business Accounts</h4>
                    <p>Dedicated account managers, telephone support, and 30-day payment terms.</p>
                </div>

                <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fa-solid fa-user fa-2xl mb-4" style="color: #FFD43B;"></i>
                    <h4>Customer Satisfaction</h4>
                    <p>Our partners maintain a 96% customer satisfaction rating.</p>
                </div>

                <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fa-brands fa-servicestack fa-2xl mb-4" style="color: #FFD43B;"></i>
                    <h4>Nationwide Services</h4>
                    <p>Thousands of minicab, minibus, executive, chauffeur & coach companies across the UK.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h1 class="section-heading heading">What Our Customers Say</h1>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“The driver was on time, polite and the ride was smooth. Highly recommend EasyTexi!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <h4 class="heading">Claudia Lahud</h4>
                        <span>Phoenix Ground Transport – London</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“Seamless experience from booking to drop-off. Great service!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <h4 class="heading">Paul Wood</h4>
                        <span>Swyft Transit – Dewsbury</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“Clean vehicle, courteous driver, and punctual service. Excellent experience!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <h4 class="heading">Jon Lambert</h4>
                        <span>Gatwick Direct – Horley</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-sec pd-t pd-b">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12">
                    <div class="contact-all" data-aos="fade-right" data-aos-duration="1500">
                        <h3 class="sec-hed m-0">Contact Us</h3>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut <br> labore et dolore magna aliqua. Ut enim ad</p>
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="form-control mb-3" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="form-control mb-3" placeholder="Your Email">
                                </div>
                                <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="form-control mb-3" placeholder="Phone Number">
                                </div>
                                <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="form-control mb-3" placeholder="Service Type">
                                </div>
                                <div class="col-12 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control mb-3" placeholder="Message"></textarea>
                                    <button class="btn btn-custom">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="contt-im" data-aos="fade-left" data-aos-duration="1500">
                        <img src="assets/images/cont.png" class="img-fluid" alt="Contact">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- include footer -->
    <?php include ('include/footer.php') ?>
    <!-- include footer End -->

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


</body>
<!-- include footer script  -->
<?php include ('include/footer-script.php') ?>