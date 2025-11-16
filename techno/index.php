<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternelle Wedding - Wedding Organizer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 50%, #e8e8e8 100%);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.8rem 3%;
            max-width: 100%;
            margin: 0 auto;
            gap: 4rem;
            position: relative;
        }

        .nav-left {
            display: flex;
            list-style: none;
            gap: 2.8rem;
            margin: 0;
        }

        .nav-right {
            display: flex;
            list-style: none;
            gap: 2.8rem;
            margin: 0;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 400;
            color: #333;
            font-style: italic;
            position: relative;
            text-align: center;
            line-height: 1;
            padding: 0 2rem;
        }

        .logo-main {
            display: block;
            position: relative;
        }

        .logo span {
            color: #FFD700;
            font-size: 2.8rem;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .logo-subtitle {
            display: block;
            font-size: 0.45rem;
            letter-spacing: 0.35em;
            font-style: normal;
            font-weight: 500;
            color: #666;
            text-align: center;
            margin-top: 2px;
            font-family: 'Poppins', sans-serif;
        }

        nav ul li a {
            text-decoration: none;
            color: #666;
            font-weight: 400;
            font-size: 0.85rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
            text-transform: uppercase;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #FFD700;
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 100%;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: #333;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 70px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("foto/acc.jpg");

        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
            padding: 2rem;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
            text-transform: uppercase;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        /* Decorative elements */
        .hero-decoration {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 5;
            pointer-events: none;
        }

        .arch-left {
            left: 18%;
        }

        .arch-right {
            right: 18%;
        }

        .light-beam {
            position: absolute;
            width: 2px;
            height: 40%;
            background: linear-gradient(to bottom, 
                rgba(0, 255, 255, 0.6), 
                transparent);
            filter: blur(2px);
            animation: lightBeam 3s ease-in-out infinite;
        }

        .light-beam:nth-child(1) { left: 20%; top: 20%; animation-delay: 0s; }
        .light-beam:nth-child(2) { right: 20%; top: 20%; animation-delay: 1s; }
        .light-beam:nth-child(3) { left: 35%; top: 15%; animation-delay: 2s; }
        .light-beam:nth-child(4) { right: 35%; top: 15%; animation-delay: 1.5s; }

        .bokeh {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.8), transparent);
            animation: float 6s ease-in-out infinite;
        }

        .bokeh:nth-child(1) { width: 60px; height: 60px; top: 20%; left: 15%; animation-delay: 0s; }
        .bokeh:nth-child(2) { width: 40px; height: 40px; top: 40%; right: 20%; animation-delay: 2s; }
        .bokeh:nth-child(3) { width: 50px; height: 50px; top: 60%; left: 25%; animation-delay: 4s; }
        .bokeh:nth-child(4) { width: 45px; height: 45px; top: 30%; right: 30%; animation-delay: 1s; }
        .bokeh:nth-child(5) { width: 55px; height: 55px; top: 70%; right: 15%; animation-delay: 3s; }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* About Section */
        .about-section {
            padding: 6rem 5%;
            background: linear-gradient(to bottom, #f8f8f8, #ffffff);
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .about-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1.5rem;
            opacity: 0.3;
        }

        .about-icon svg {
            width: 100%;
            height: 100%;
            fill: #c9b896;
        }

        .about-subtitle {
            font-size: 0.75rem;
            letter-spacing: 0.3em;
            color: #c9b896;
            font-weight: 400;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .about-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #6b7c93;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
            font-style: italic;
        }

        .about-content {
            display: flex;
            gap: 4rem;
            align-items: center;
            margin-top: 3rem;
        }

        .about-image {
            flex: 1;
            max-width: 30%;
            height: auto;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            flex: 1;
            max-width: 55%;
            padding-left: 2rem;
        }

        .about-text-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .quote-icon {
            font-size: 4rem;
            color: #d4d4d4;
            font-family: Georgia, serif;
            line-height: 1;
            font-weight: 300;
        }

        .about-text-title {
            font-size: 1.3rem;
            font-weight: 400;
            color: #6b7c93;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
        }

        .about-description {
            color: #7a7a7a;
            font-size: 0.9rem;
            line-height: 1.9;
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        .about-description:first-of-type {
            font-style: italic;
            color: #888;
        }

        .about-description:nth-of-type(2) {
            font-style: italic;
            margin-bottom: 2rem;
        }

        .about-description:last-of-type {
            font-weight: 500;
        }

        /* Services Section */
        .services-section {
            padding: 6rem 5%;
            background: #ffffff;
            max-width: 1400px;
            margin: 0 auto;
        }

        .services-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .services-label {
            font-size: 0.7rem;
            letter-spacing: 0.25em;
            color: #999;
            font-weight: 400;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .services-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #888;
            font-style: italic;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .service-card {
            background: #f9f9f9;
            padding: 3rem 2rem;
            text-align: center;
            border-radius: 8px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 2rem;
            opacity: 0.15;
        }

        .service-icon svg {
            width: 100%;
            height: 100%;
            fill: #c9b896;
        }

        .service-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 400;
            color: #c9b896;
            margin-bottom: 1rem;
            font-style: italic;
        }

        .service-price {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .service-button {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.7rem 2rem;
            background: transparent;
            border: 1px solid #c9b896;
            color: #c9b896;
            text-decoration: none;
            font-size: 0.8rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .service-button:hover {
            background: #c9b896;
            color: #fff;
        }

        /* About/Prewedding Section */
        .prewedding-section {
            padding: 6rem 5%;
            background: #2c3e50;
            display: flex;
            align-items: center;
            gap: 4rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .prewedding-image {
            flex: 1;
            max-width: 45%;
        }

        .prewedding-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }

        .prewedding-content {
            flex: 1;
            max-width: 55%;
            color: #fff;
        }

        .prewedding-subtitle {
            font-size: 0.7rem;
            letter-spacing: 0.3em;
            color: #c9b896;
            font-weight: 400;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .prewedding-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #fff;
            margin-bottom: 2rem;
            font-style: italic;
            line-height: 1.5;
        }

        .prewedding-text {
            color: #bbb;
            font-size: 0.9rem;
            line-height: 1.9;
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 6rem 5%;
            background: #f5f5f5;
            max-width: 1400px;
            margin: 0 auto;
        }

        .portfolio-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .portfolio-label {
            font-size: 0.7rem;
            letter-spacing: 0.25em;
            color: #999;
            font-weight: 400;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .portfolio-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #888;
            font-style: italic;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .portfolio-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 6rem 5%;
            background: #fff;
            max-width: 1400px;
            margin: 0 auto;
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .testimonials-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #888;
            font-style: italic;
        }

        .testimonial-content {
            display: flex;
            align-items: center;
            gap: 4rem;
            margin-top: 3rem;
        }

        .testimonial-text {
            flex: 1;
            max-width: 50%;
        }

        .testimonial-quote-icon {
            font-size: 5rem;
            color: #e5e5e5;
            font-family: Georgia, serif;
            line-height: 1;
            margin-bottom: 1rem;
        }

        .testimonial-message {
            font-size: 1rem;
            color: #888;
            line-height: 1.9;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .testimonial-author {
            font-size: 0.85rem;
            color: #999;
            font-weight: 500;
            letter-spacing: 0.05em;
        }

        .testimonial-image {
            flex: 1;
            max-width: 50%;
        }

        .testimonial-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Updates */
        @media (max-width: 968px) {
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .prewedding-section {
                flex-direction: column;
            }

            .prewedding-image,
            .prewedding-content {
                max-width: 100%;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-content {
                flex-direction: column;
            }

            .testimonial-text,
            .testimonial-image {
                max-width: 100%;
            }
        }

        /* Contact Section */
        .contact-section {
            padding: 6rem 5%;
            background: #f9f9f9;
            max-width: 1400px;
            margin: 0 auto;
        }

        .contact-container {
            display: flex;
            gap: 4rem;
            align-items: center;
        }

        .contact-form-wrapper {
            flex: 1;
            max-width: 45%;
        }

        .contact-label {
            font-size: 0.7rem;
            letter-spacing: 0.25em;
            color: #c9b896;
            font-weight: 400;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .contact-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 400;
            color: #888;
            margin-bottom: 3rem;
            font-style: italic;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            color: #999;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
        }

        .form-group input,
        .form-group textarea {
            padding: 1rem;
            border: none;
            border-bottom: 1px solid #ddd;
            background: transparent;
            font-size: 0.95rem;
            color: #666;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-bottom-color: #c9b896;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-button {
            align-self: flex-start;
            padding: 1rem 3rem;
            background: #c9b896;
            border: none;
            color: #fff;
            font-size: 0.85rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .submit-button:hover {
            background: #b8a67d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(201, 184, 150, 0.3);
        }

        .contact-image {
            flex: 1;
            max-width: 55%;
        }

        .contact-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background: #fff;
            padding: 4rem 5% 2rem;
            border-top: 1px solid #f0f0f0;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-nav {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .footer-nav a {
            text-decoration: none;
            color: #666;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .footer-nav a:hover {
            color: #c9b896;
        }

        .footer-logo {
            margin: 2rem 0;
        }

        .footer-logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 400;
            color: #333;
            font-style: italic;
        }

        .footer-logo-text span {
            color: #FFD700;
            font-size: 2.5rem;
        }

        .footer-logo-subtitle {
            display: block;
            font-size: 0.5rem;
            letter-spacing: 0.3em;
            font-style: normal;
            font-weight: 500;
            color: #666;
            margin-top: 5px;
            font-family: 'Poppins', sans-serif;
        }

        .footer-description {
            max-width: 600px;
            margin: 2rem auto;
            color: #888;
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .social-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c9b896;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .social-icon:hover {
            background: #c9b896;
            color: #fff;
            transform: translateY(-3px);
        }

        .footer-copyright {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #f0f0f0;
            color: #999;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
        }

        /* Tambahkan di bagian CSS contact section */
        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 8px;
        }

        .submit-button,
        .btn-whatsapp {
            cursor: pointer;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.2s;
            flex: 1;
        }

        .submit-button {
            background: #0ea5a4;
            color: white;
        }

        .submit-button:hover {
            background: #089e9d;
            transform: translateY(-2px);
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-whatsapp:hover {
            background: #20BA5A;
            transform: translateY(-2px);
        }

        /* Responsive untuk mobile */
        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
            }
        }

        /* Responsive Contact & Footer */
        @media (max-width: 968px) {
            .contact-container {
                flex-direction: column;
            }

            .contact-form-wrapper,
            .contact-image {
                max-width: 100%;
            }

            .footer-nav {
                gap: 1.5rem;
            }
        }

        @keyframes lightBeam {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.8; }
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0) scale(1); 
                opacity: 0.6; 
            }
            50% { 
                transform: translateY(-20px) scale(1.1); 
                opacity: 1; 
            }
        }

        /* Responsive */
        @media (max-width: 968px) {
            nav {
                flex-direction: column;
                gap: 0.8rem;
                padding: 1rem 3%;
            }

            .nav-left, .nav-right {
                gap: 1.5rem;
            }

            .logo {
                order: -1;
                padding: 0.5rem 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero {
                margin-top: 150px;
            }

            .about-content {
                flex-direction: column;
            }

            .about-image {
                max-width: 100%;
            }

            .about-text {
                max-width: 100%;
            }
        }

        @media (max-width: 640px) {
            .nav-left, .nav-right {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }

            nav ul li a {
                font-size: 0.75rem;
            }

            .logo {
                font-size: 1.8rem;
            }

            .logo span {
                font-size: 2.2rem;
            }
        }
    </style>
    <link rel="icon" href="foto/LOGO 2.jpg">
</head>
<script>
    function submitContact(e) {
        e.preventDefault();
        const name = document.getElementById('cName').value.trim();
        const email = document.getElementById('cEmail').value.trim();
        const message = document.getElementById('cMessage').value.trim();

        if (!name || !email || !message) {
            alert('Mohon lengkapi semua kolom wajib.');
            return;
        }

        alert('Terima kasih, ' + name + '! Pesan Anda telah dikirim. Kami akan menghubungi Anda dalam 1-2 hari kerja.');
        e.target.reset();
    }

    function startChat() {
        const phone = '6285841666943'; // nomor WA Eternelle Wedding
        const text = encodeURIComponent('Halo Eternelle Wedding, saya ingin konsultasi pernikahan.');
        const link = 'whatsapp://send?phone=' + phone + '&text=' + text;

        // Jika di HP, buka aplikasi WhatsApp langsung
        if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            window.location.href = link;
        } else {
            // Jika di desktop, buka WhatsApp Web
            window.open('https://wa.me/' + phone + '?text=' + text, '_blank');
        }
    }
</script>
<body>
    <!-- Header -->
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="#home" class="active">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
            </ul>
            
            <div class="logo">
                <span class="logo-main"><span>E</span>ternelle</span>
                <span class="logo-subtitle">WEDDING</span>
            </div>
            
            <ul class="nav-right">
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="#footer">FOOTER</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        
        <!-- Decorative Stage Setup -->
        <div class="hero-decoration">
            <!-- Chandelier -->
            <div class="chandelier"></div>
            
            <!-- Light Beams -->
            <div class="light-beam"></div>
            <div class="light-beam"></div>
            <div class="light-beam"></div>
            <div class="light-beam"></div>
            
            <!-- Arch Columns -->
            <div class="arch-left"></div>
            <div class="arch-right"></div>
            
            <!-- Arch Structure -->
            <div class="arch-structure"></div>
            
            <!-- Foliage -->
            <div class="foliage"></div>
            
            <!-- Stage Platform -->
            <div class="stage-setup"></div>
            
            <!-- Bokeh Effects -->
            <div class="bokeh"></div>
            <div class="bokeh"></div>
            <div class="bokeh"></div>
            <div class="bokeh"></div>
            <div class="bokeh"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="hero-content">
            <h1>WEDDING ORGANIZER</h1>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-header">
            <div class="about-icon">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 10 L55 35 L80 35 L60 50 L68 75 L50 60 L32 75 L40 50 L20 35 L45 35 Z"/>
                </svg>
            </div>
            <p class="about-subtitle">AWARD WINNING PHOTOGRAPHY</p>
            <h2 class="about-title">Showcasing your big day in a memorable and unforgettable way.</h2>
        </div>

        <div class="about-content">
            <div class="about-image">
                <img src="foto/fitting baju.jpg" alt="Wedding Organizer">
            </div>

            <div class="about-text">
                <div class="about-text-header">
                    <span class="quote-icon">"</span>
                    <h3 class="about-text-title">WEDDING ORGANIZER</h3>
                </div>

                <p class="about-description">
                    Susah booking venue, dan para vendor? Kini saatnya limpahkan seluas pertapian secaramu kepada isu Organizer. Sayang banget Khan masiran siylah wanner hidup like ga dinamkoin! Tenang ada, ada kami yang memudahkan semua persiapan berjalan sesnaí rencana.
                </p>

                <p class="about-description">
                    You've booked all suppliers, vendors already? Now it's time to focus on your personal preparation. You need a professional team to manage all technical details.
                </p>

                <p class="about-description">
                    This basic service is mandatory to make sure everything's on track on your wedding day.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="services-header">
            <p class="services-label">SERVICES</p>
            <h2 class="services-title">What I Offer</h2>
        </div>

        <div class="services-grid">
            <!-- Wedding Service -->
            <div class="service-card">
                <img src="foto/ADAT JAWA.webp" alt="Wedding Organizer">
                <h3 class="service-name">Harmonie Package</h3>
                <p class="service-price">Rp 12 JT</p>
                <a href="detail_harmonie.php" class="service-button">Show Details</a>
            </div>

            <!-- Prewedd Service -->
            <div class="service-card">
                <img src="foto/dekor 7.jpg" width=268px height="180px"alt="Wedding Organizer">
                <h3 class="service-name">Lumiere Package</h3>
                <p class="service-price">Rp 20 JT</p>
                <a href="detail_lumiere.php" class="service-button">Show Details</a>
            </div>

            <!-- Engagement Service -->
            <div class="service-card">
                <img src="foto/dekor 3.webp" width=286px height="180px"alt="Wedding Organizer">
                <h3 class="service-name">Majestic Package</h3>
                <p class="service-price">Rp 35 JT</p>
                <a href="detail_majestic.php" class="service-button">Show Details</a>
            </div>

            <!-- Wedding Service -->
            <div class="service-card">
                <img src="foto/dekor 4.webp" width=286px height="180px"alt="Wedding Organizer">
                <h3 class="service-name">Diamond Package</h3>
                <p class="service-price">Rp 60 JT</p>
                <a href="detail_diamond.php" class="service-button">Show Details</a>
            </div>

            <!-- Wedding Service -->
            <div class="service-card">
                <img src="foto/dekor 5.webp" width=286px height="180px"alt="Wedding Organizer">
                <h3 class="service-name">Imperial Package</h3>
                <p class="service-price">Rp 100 JT</p>
                <a href="detail_imperial.php" class="service-button">Show Details</a>
            </div>
        </div>
    </section>

    <!-- Prewedding Info Section -->
    <section class="prewedding-section" id="about">
        <div class="prewedding-image">
            <img src="foto/prewed 6.jpg" alt="Prewedding">
        </div>

        <div class="prewedding-content">
            <p class="prewedding-subtitle">ABOUT</p>
            <h2 class="prewedding-title">Eternelle Wedding</h2>
            <p class="prewedding-text">
                Eternelle Wedding is here as a trusted partner for every couple who dreams of a wedding filled with elegance, personalization, and warmth. We believe that a wedding is not just an event, but the beginning of an eternal love journey — a celebration of forever.
                With experience in designing concepts ranging from intimate weddings to grand celebrations, we combine creativity, meticulous attention to detail, and professional service to create moments that are not only beautiful to witness, but also meaningful to remember.
            </p>
            <p class="prewedding-text">
                Dengan berbagai pilihan lokasi, konsep, dan gaya, prewedding memberikan kesempatan untuk mengekspresikan kepribadian dan cerita unik dari setiap pasangan. Tim profesional kami siap membantu mewujudkan visi Anda dengan hasil yang memukau dan penuh emosi.
            </p>
            <p class="prewedding-text">
                Kami percaya bahwa setiap pasangan memiliki cerita yang layak untuk diceritakan dengan cara yang istimewa dan tak terlupakan.
            </p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section" id="portfolio">
        <div class="portfolio-header">
            <p class="portfolio-label">PORTFOLIO</p>
            <h2 class="portfolio-title">Featured Story</h2>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="foto/prewed 7.jpg" alt="Portfolio 1">
            </div>

            <div class="portfolio-item">
                <img src="foto/PREWED 2.jpg" alt="Portfolio 2">
            </div>

            <div class="portfolio-item">
                <img src="foto/prewed.jpg" alt="Portfolio 3">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="testimonials-header">
            <h2 class="testimonials-title">Client Testimonials</h2>
        </div>

        <div class="testimonial-content">
            <div class="testimonial-text">
                <div class="testimonial-quote-icon">"</div>
                <p class="testimonial-message">
                    Pelayanan yang luar biasa! Tim Eternelle Wedding sangat profesional dan membantu kami mewujudkan pernikahan impian. Setiap detail diperhatikan dengan sempurna. Highly recommended!
                </p>
                <p class="testimonial-author">- Sarah & John</p>
            </div>

            <div class="testimonial-image">
                <img src="foto/prewed 3.jpg" alt="Testimonial">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-form-wrapper">
                <p class="contact-label">CONTACT</p>
                <h2 class="contact-title">Get in Touch</h2>

                <form class="contact-form" onsubmit="submitContact(event)">
                    <div class="form-group">
                        <label for="cName">NAME</label>
                        <input type="text" id="cName" name="name" placeholder="Nama lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="cEmail">EMAIL</label>
                        <input type="email" id="cEmail" name="email" placeholder="Email" required>
                    </div>

                    <!-- Field WhatsApp baru -->
                    <div class="form-group">
                        <label for="cPhone">WHATSAPP (Optional)</label>
                        <input type="text" id="cPhone" name="phone" placeholder="No. WhatsApp (opsional)">
                    </div>

                    <div class="form-group">
                        <label for="cMessage">MESSAGE</label>
                        <textarea id="cMessage" name="message" placeholder="Ceritakan rencana singkat Anda..." required></textarea>
                    </div>

                    <!-- Tambahkan wrapper untuk 2 tombol -->
                    <div class="form-actions">
                        <button type="submit" class="submit-button">Send</button>
                        <button type="button" class="btn-whatsapp" onclick="startChat()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Chat WA
                        </button>
                    </div>
                </form>
            </div>

            <div class="contact-image">
                <img src="foto/prewed 4.jpg" alt="Contact">
            </div>
        </div>
    </section>

    <!-- JavaScript untuk Contact Form -->
    <script>
        function submitContact(e) {
            e.preventDefault();
            const name = document.getElementById('cName').value.trim();
            const email = document.getElementById('cEmail').value.trim();
            const phone = document.getElementById('cPhone').value.trim();
            const message = document.getElementById('cMessage').value.trim();

            if (!name || !email || !message) {
                alert('Mohon lengkapi semua kolom wajib.');
                return;
            }

            // Email tujuan Eternelle Wedding
            const emailTujuan = 'lunarie211@gmail.com'; 
            
            // Subject email
            const subject = encodeURIComponent('Pesan dari ' + name + ' - Website Eternelle Wedding');
            
            // Body email
            let body = 'Nama: ' + name + '%0D%0A';
            body += 'Email: ' + email + '%0D%0A';
            if (phone) {
                body += 'WhatsApp: ' + phone + '%0D%0A';
            }
            body += '%0D%0A';
            body += 'Pesan:%0D%0A' + encodeURIComponent(message);
            
            // Buka email client
            window.location.href = 'mailto:' + emailTujuan + '?subject=' + subject + '&body=' + body;
            
            // Reset form setelah 500ms
            setTimeout(function() {
                e.target.reset();
            }, 500);
        }

        function startChat() {
            const phone = '6285841666943'; // nomor WA Eternelle Wedding
            const text = encodeURIComponent('Halo Eternelle Wedding, saya ingin konsultasi pernikahan.');
            const link = 'whatsapp://send?phone=' + phone + '&text=' + text;

            // Jika di HP, buka aplikasi WhatsApp langsung
            if (/Android|iPhone|iPad|iPo/i.test(navigator.userAgent)) {
                window.location.href = link;
            } else {
                // Jika di desktop, buka WhatsApp Web
                window.open('https://wa.me/' + phone + '?text=' + text, '_blank');
            }
        }
    </script>

    <!-- Footer -->
    <footer>
        <div class="footer-content" id="footer">
            <div class="footer-logo">
                <div class="footer-logo-text">
                    <span>E</span>ternelle
                    <span class="footer-logo-subtitle">WEDDING</span>
                </div>
            </div>

            <p class="footer-description">
                Make your dream wedding come true with us. From concept to your special day, every detail is crafted with love and elegance.
            </p>

            <div class="footer-social">
                <a href="#" class="social-icon" title="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>
                <a href="#" class="social-icon" title="Twitter">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                    </svg>
                </a>
                <a href="#" class="social-icon" title="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/>
                    </svg>
                </a>
                <a href="#" class="social-icon" title="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="#f9f9f9"/>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="#f9f9f9" stroke-width="2"/>
                    </svg>
                </a>
            </div>

            <div class="footer-copyright">
                © 2025 ETERNELLE WEDDING 2025. All Rights Reserved
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active nav on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const scrollY = window.pageYOffset;

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = current.offsetTop - 100;
                const sectionId = current.getAttribute('id');
                
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector('nav ul li a[href*=' + sectionId + ']')?.classList.add('active');
                } else {
                    document.querySelector('nav ul li a[href*=' + sectionId + ']')?.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>