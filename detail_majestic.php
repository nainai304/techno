<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Majestic Package - Eternelle Wedding</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" href="foto/LOGO 2.jpg">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body { 
      font-family: 'Poppins', sans-serif; 
      background: linear-gradient(to bottom, #f8f8f8, #ffffff);
      color: #333; 
      line-height: 1.6; 
    }

    /* Beautiful Header */
    header {
      position: relative;
      background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 50%, #e8e8e8 100%);
      padding: 2rem 5%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }

    /* Decorative elements in header */
    header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, transparent, #FFD700, transparent);
    }

    .header-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 2rem;
    }

    .logo-section {
      flex: 1;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      font-weight: 400;
      color: #333;
      font-style: italic;
      margin-bottom: 0.5rem;
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
      font-family: 'Poppins', sans-serif;
    }

    .header-nav {
      flex: 2;
      display: flex;
      justify-content: flex-end;
      gap: 2.5rem;
      list-style: none;
    }

    .header-nav a {
      text-decoration: none;
      color: #666;
      font-weight: 400;
      font-size: 0.85rem;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      position: relative;
      padding: 0.5rem 0;
    }

    .header-nav a::after {
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

    .header-nav a:hover::after,
    .header-nav a.active::after {
      width: 100%;
    }

    .header-nav a:hover {
      color: #333;
    }

    /* Page Title Section */
    .page-title-section {
      text-align: center;
      padding: 3rem 5%;
      background: white;
      border-bottom: 1px solid #f0f0f0;
    }

    .breadcrumb {
      font-size: 0.75rem;
      letter-spacing: 0.2em;
      color: #999;
      text-transform: uppercase;
      margin-bottom: 1rem;
    }

    .breadcrumb a {
      color: #c9b896;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .breadcrumb a:hover {
      color: #b8a67d;
    }

    .page-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 400;
      color: #888;
      font-style: italic;
      margin-bottom: 0.5rem;
    }

    .page-subtitle {
      color: #999;
      font-size: 0.9rem;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Container */
    .container { 
      max-width: 1200px; 
      margin: 40px auto; 
      padding: 0 5%; 
    }

    /* Gallery */
    .gallery { 
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
      gap: 20px; 
      margin-bottom: 40px; 
    }

    .gallery img { 
      width: 100%; 
      height: 300px; 
      object-fit: cover; 
      border-radius: 8px; 
      box-shadow: 0 5px 20px rgba(0,0,0,0.1); 
      transition: all 0.4s ease; 
    }

    .gallery img:hover { 
      transform: translateY(-10px); 
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    /* Package Card */
    .package { 
      background: #fff; 
      border-radius: 12px; 
      padding: 3rem; 
      box-shadow: 0 10px 40px rgba(0,0,0,0.08); 
    }

    .package h2 { 
      font-family: 'Playfair Display', serif;
      color: #c9b896; 
      font-size: 2rem; 
      margin-top: 0;
      margin-bottom: 1rem;
      font-style: italic;
    }

    .desc { 
      font-style: italic; 
      color: #888; 
      margin-bottom: 1.5rem;
      font-size: 1rem;
    }

    .price { 
      font-weight: 600; 
      color: #c9b896; 
      margin: 20px 0;
      font-size: 1.2rem;
      padding: 1rem;
      background: #f9f9f9;
      border-radius: 8px;
      border-left: 4px solid #c9b896;
    }

    h3 {
      font-family: 'Playfair Display', serif;
      color: #888;
      font-size: 1.3rem;
      margin: 1.5rem 0 1rem;
      font-style: italic;
    }

    ul { 
      padding-left: 20px; 
      margin-bottom: 1.5rem;
    }

    li { 
      margin-bottom: 0.75rem;
      color: #666;
      line-height: 1.8;
    }

    /* Note Box */
    .note { 
      background: #f9f9f9; 
      border: 1px solid #e5e7eb; 
      padding: 2rem; 
      border-radius: 8px; 
      margin-top: 2rem;
      border-left: 4px solid #c9b896;
    }

    .note h3 { 
      color: #c9b896;
      margin-top: 0;
    }

    .note ul {
      margin-bottom: 0;
    }

    /* Buttons */
    .button-group {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
      flex-wrap: wrap;
    }

    .back-btn { 
      display: inline-block; 
      padding: 1rem 2.5rem; 
      background-color: #c9b896; 
      color: white; 
      border-radius: 4px; 
      text-decoration: none; 
      transition: all 0.3s ease;
      font-size: 0.85rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 500;
    }

    .back-btn:hover { 
      background-color: #b8a67d; 
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(201, 184, 150, 0.3);
    }

    .back-btn.secondary {
      background-color: transparent;
      border: 1px solid #c9b896;
      color: #c9b896;
    }

    .back-btn.secondary:hover {
      background-color: #f5f5f5;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(201, 184, 150, 0.2);
    }

    /* Footer */
    footer {
      background: #fff;
      padding: 4rem 5% 2rem;
      border-top: 1px solid #f0f0f0;
      margin-top: 4rem;
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      text-align: center;
    }

    .footer-logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 400;
      color: #333;
      font-style: italic;
      margin-bottom: 0.5rem;
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

    /* Responsive */
    @media (max-width: 968px) {
      .header-content {
        flex-direction: column;
        text-align: center;
      }

      .header-nav {
        justify-content: center;
        flex-wrap: wrap;
        gap: 1.5rem;
      }

      .page-title {
        font-size: 2rem;
      }

      .gallery {
        grid-template-columns: 1fr;
      }

      .package {
        padding: 2rem;
      }

      .button-group {
        flex-direction: column;
      }

      .back-btn {
        text-align: center;
      }
    }

    @media (max-width: 640px) {
      .logo {
        font-size: 1.8rem;
      }

      .logo span {
        font-size: 2.2rem;
      }

      .header-nav a {
        font-size: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Beautiful Header -->
  <header>
    <div class="header-content">
      <div class="logo-section">
        <div class="logo">
          <span>E</span>ternelle
          <span class="logo-subtitle">WEDDING</span>
        </div>
      </div>
      <nav>
        <ul class="header-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php#about">ABOUT</a></li>
          <li><a href="index.php#services" class="active">SERVICES</a></li>
          <li><a href="index.php#portfolio">PORTFOLIO</a></li>
          <li><a href="index.php#contact">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Page Title Section -->
  <section class="page-title-section">
    <h1 class="page-title">👑 Majestic Package</h1>
    <p class="page-subtitle">Paket premium untuk wedding megah, cocok untuk ballroom dan venue besar.</p>
  </section>

  <!-- Main Content -->
  <main class="container">
    <div class="gallery">
      <img src="imperial/1.jpg" alt="Dekorasi Imperial">
      <img src="imperial/2.jpg" alt="Ceiling Imperial">
      <img src="imperial/3.jpg" alt="Stage Imperial">
    </div>

    <section class="package">
      <h2>👑 Majestic Package</h2>
      <p class="desc">Paket premium untuk wedding megah, cocok untuk ballroom dan venue besar.</p>
      <div class="price">💰 Range Harga: Rp 35.000.000 – Rp 55.000.000+</div>

      <h3>Termasuk:</h3>
      <ul>
        <li>Pelaminan premium (custom detail & tinggi)</li>
        <li>Stage lighting + chandelier / spotlight setup</li>
        <li>Full aisle floral + flower gate entrance</li>
        <li>Photo booth dekoratif + signage LED</li>
        <li>Dokumentasi full day + cinematic video + drone</li>
        <li>Wedding Organizer full team (6–8 crew)</li>
        <li>Free 3D visual konsep dekor sebelum eksekusi</li>
        <li>MUA retouch for bride (1x)</li>
      </ul>

      <div class="note">
        <h3>📖 Catatan Penting</h3>
        <ul>
          <li>Harga dapat disesuaikan berdasarkan kota, vendor, venue, dan jumlah tamu.</li>
          <li>Paket bisa ditambah layanan tambahan seperti catering, live band, atau dekorasi tambahan.</li>
        </ul>
      </div>

      <div class="button-group">
        <a href="index.php" class="back-btn secondary">Kembali ke Beranda</a>
        <a href="package.php" class="back-btn">Book Now</a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-logo-text">
        <span>E</span>ternelle
        <span class="footer-logo-subtitle">WEDDING</span>
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
        <a href="#" class="social-icon" title="Instagram">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="#f9f9f9"/>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="#f9f9f9" stroke-width="2"/>
          </svg>
        </a>
      </div>

      <div class="footer-copyright">
        © 2025 ETERNELLE WEDDING. All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>

  