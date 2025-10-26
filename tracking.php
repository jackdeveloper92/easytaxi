<?php $title = ' | Track Booking' ?>
<?php include ('include/head.php') ?>

<body>
    <!-- include header -->
    <?php include ('include/header.php') ?>

    <!-- Tracking Hero Section -->
    <section class="tracking-hero py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 data-aos="fade-down">Track Your Booking</h1>
                    <p class="lead" data-aos="fade-up">Real-time tracking of your taxi booking</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section class="tracking-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="zoom-in">
                    <div class="tracking-card">
                        <div class="tracking-form mb-5">
                            <h4 class="mb-4">Enter Booking Details</h4>
                            <form id="tracking-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="bookingRef" class="form-label">Booking Reference</label>
                                        <input type="text" class="form-control" id="bookingRef" placeholder="e.g., ETX123456" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Your registered number" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Track Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Tracking Result -->
                        <div class="tracking-result" id="trackingResult" style="display: none;">
                            <div class="booking-status mb-4">
                                <h4>Booking Status: <span class="text-success" id="statusText">Confirmed</span></h4>
                                <p class="text-muted">Booking Reference: <strong id="refNumber">ETX123456</strong></p>
                            </div>

                            <div class="tracking-timeline mb-5">
                                <div class="timeline">
                                    <div class="timeline-item completed">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h6>Booking Confirmed</h6>
                                            <p class="text-muted">Today, 10:00 AM</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h6>Driver Assigned</h6>
                                            <p class="text-muted">Today, 10:15 AM</p>
                                            <p class="mb-0">Driver: John Smith</p>
                                            <p>Vehicle: Toyota Prius (AB12 CDE)</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item active">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h6>Driver En Route</h6>
                                            <p class="text-muted">Estimated arrival: 5 minutes</p>
                                            <div class="driver-info">
                                                <p><strong>Contact Driver:</strong> 07123 456789</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h6>Pickup Completed</h6>
                                            <p class="text-muted">--:--</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <h6>Journey Completed</h6>
                                            <p class="text-muted">--:--</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Map Section -->
                            <div class="tracking-map mb-4">
                                <h5 class="mb-3">Live Location</h5>
                                <div class="map-placeholder bg-light rounded p-5 text-center">
                                    <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                                    <p>Live tracking map would be displayed here</p>
                                    <p class="text-muted">Driver is 2.3 km away (approx. 5 mins)</p>
                                </div>
                            </div>

                            <!-- Booking Details -->
                            <div class="booking-details">
                                <h5 class="mb-3">Booking Details</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Pickup:</strong> 123 Main Street, London</p>
                                        <p><strong>Destination:</strong> Heathrow Airport Terminal 3</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Pickup Time:</strong> Today, 10:30 AM</p>
                                        <p><strong>Vehicle:</strong> Standard Taxi (Toyota Prius)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p><strong>Fare:</strong> £45.00 (Fixed Price)</p>
                                    </div>
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