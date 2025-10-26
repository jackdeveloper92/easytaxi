<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Taxi Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #009FDB;
            --primary-dark: #0078A5;
            --secondary: #FF6B35;
            --dark: #0D1B2A;
            --light: #f8f9fa;
            --text-dark: #333;
            --text-light: #666;
            --white: #ffffff;
            --gradient: linear-gradient(135deg, #009FDB 0%, #0056b3 100%);
            --gradient-secondary: linear-gradient(135deg, #FF6B35 0%, #E94E1B 100%);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --border-radius: 16px;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Muli', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ====== BENEFITS SECTION ====== */
        .benefits-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            position: relative;
            overflow: hidden;
        }

        .benefits-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" opacity="0.03"><path fill="%23009FDB" d="M800,500c0,138.1-111.9,250-250,250S300,638.1,300,500S411.9,250,550,250S800,361.9,800,500z"/></svg>');
            background-size: 600px;
            z-index: 0;
        }

        .benefits-container {
            position: relative;
            z-index: 1;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-heading h2 {
            font-size: 3.5rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-heading h2::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            background: var(--gradient);
            border-radius: 5px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .benefit-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .benefit-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--gradient);
            transition: var(--transition);
            z-index: -1;
        }

        .benefit-card:hover::before {
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .benefit-card:hover .benefit-icon {
            background: var(--white);
            color: var(--primary);
            transform: scale(1.1);
        }

        .benefit-card:hover h4,
        .benefit-card:hover p {
            color: var(--white);
        }

        .benefit-icon {
            width: 90px;
            height: 90px;
            background: var(--gradient);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.2rem;
            transition: var(--transition);
        }

        .benefit-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
            transition: var(--transition);
        }

        .benefit-card p {
            color: var(--text-light);
            transition: var(--transition);
        }

        /* ====== TESTIMONIALS SECTION ====== */
        .testimonials-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #0D1B2A 0%, #1B263B 100%);
            position: relative;
            overflow: hidden;
        }

        .testimonials-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" opacity="0.03"><polygon fill="%23ffffff" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .testimonials-container {
            position: relative;
            z-index: 1;
        }

        .testimonials-heading {
            text-align: center;
            margin-bottom: 70px;
        }

        .testimonials-heading h2 {
            font-size: 3.5rem;
            color: var(--white);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .testimonials-heading h2::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            background: var(--secondary);
            border-radius: 5px;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            padding: 40px 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            position: relative;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .testimonial-content {
            margin-bottom: 25px;
            position: relative;
        }

        .testimonial-content::before {
            content: """;
            position: absolute;
            top: -20px;
            left: -10px;
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }

        .testimonial-content p {
            font-size: 1.1rem;
            color: var(--white);
            line-height: 1.7;
            font-style: italic;
            position: relative;
            z-index: 1;
        }

        .stars {
            color: #FFD700;
            font-size: 1.2rem;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .testimonial-footer {
            display: flex;
            align-items: center;
        }

        .client-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
            font-size: 1.5rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .client-info h4 {
            color: var(--white);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .client-info span {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* ====== RESPONSIVE DESIGN ====== */
        @media (max-width: 992px) {
            .section-heading h2,
            .testimonials-heading h2 {
                font-size: 2.8rem;
            }
            
            .benefit-card,
            .testimonial-card {
                padding: 30px 20px;
            }
        }

        @media (max-width: 768px) {
            .benefits-section,
            .testimonials-section {
                padding: 70px 0;
            }
            
            .section-heading h2,
            .testimonials-heading h2 {
                font-size: 2.3rem;
            }
            
            .benefits-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .benefit-icon {
                width: 80px;
                height: 80px;
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .section-heading h2,
            .testimonials-heading h2 {
                font-size: 2rem;
            }
            
            .benefit-card h4 {
                font-size: 1.3rem;
            }
            
            .testimonial-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container benefits-container">
            <div class="section-heading">
                <h2>EasyTaxi Benefits</h2>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-money-check-dollar"></i>
                    </div>
                    <h4>Fixed Price</h4>
                    <p>No surge pricing or hidden costs — the price you see is the price you pay.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h4>Business Accounts</h4>
                    <p>Dedicated account managers, telephone support, and 30-day payment terms.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Customer Satisfaction</h4>
                    <p>Our partners maintain a 96% customer satisfaction rating.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-brands fa-servicestack"></i>
                    </div>
                    <h4>Nationwide Services</h4>
                    <p>Thousands of minicab, minibus, executive, chauffeur & coach companies across the UK.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container testimonials-container">
            <div class="testimonials-heading">
                <h2>What Our Customers Say</h2>
            </div>
            
            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“The driver was on time, polite and the ride was smooth. Highly recommend EasyTexi!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="client-avatar">CL</div>
                        <div class="client-info">
                            <h4>Claudia Lahud</h4>
                            <span>Phoenix Ground Transport – London</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“Seamless experience from booking to drop-off. Great service!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="client-avatar">PW</div>
                        <div class="client-info">
                            <h4>Paul Wood</h4>
                            <span>Swyft Transit – Dewsbury</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">★★★★★</div>
                        <p>“Clean vehicle, courteous driver, and punctual service. Excellent experience!”</p>
                    </div>
                    <div class="testimonial-footer">
                        <div class="client-avatar">JL</div>
                        <div class="client-info">
                            <h4>Jon Lambert</h4>
                            <span>Gatwick Direct – Horley</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>