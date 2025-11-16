<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Majestic Package - Eternelle Wedding</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #fffdfd;
      color: #333;
      line-height: 1.6;
    }
    header { text-align: center; padding: 40px 20px; background: #f8f4f4; border-bottom: 2px solid #e8dede; }
    header h1 { font-size: 2rem; color: #8b6b61; margin-bottom: 10px; }
    header p { color: #777; }
    .container { max-width: 900px; margin: 40px auto; padding: 0 20px; }
    .gallery { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 30px; }
    .gallery img { width: 100%; height: 220px; object-fit: cover; border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); transition: transform 0.3s ease; }
    .gallery img:hover { transform: scale(1.05); }
    .package { background: #fff; border: 1px solid #eee; border-radius: 10px; padding: 30px; box-shadow: 0 3px 8px rgba(0,0,0,0.06); }
    .package h2 { color: #8b6b61; font-size: 1.8rem; margin-top: 0; }
    .desc { font-style: italic; color: #666; margin-bottom: 10px; }
    .price { font-weight: bold; color: #b17b67; margin: 15px 0; }
    ul { padding-left: 20px; }
    li { margin-bottom: 5px; }
    .note { background: #fdf6f5; border: 1px dashed #e0b6a5; padding: 20px; border-radius: 10px; margin-top: 25px; }
    .note h3 { color: #8b6b61; }
    footer { text-align: center; padding: 20px; background: #f8f4f4; color: #777; font-size: 0.9rem; margin-top: 40px; }
    .back-btn { display: inline-block; margin-top: 25px; padding: 10px 20px; background-color: #8b6b61; color: white; border-radius: 6px; text-decoration: none; transition: background 0.3s; }
    .back-btn:hover { background-color: #a87f74; }
  </style>
  <link rel="icon" href="foto/LOGO 2.jpg">
</head>
<body>
  <header>
    <h1>Eternelle Wedding</h1>
    <p>Detail Paket Pernikahan – Majestic Package</p>
  </header>

  <main class="container">
    <div class="gallery">
      <img src="majestic/1.jpg" alt="Pelaminan Majestic">
      <img src="majestic/2.jpg" alt="Dekorasi Ballroom Majestic">
      <img src="majestic/3.jpg" alt="Lighting Majestic">
    </div>

    <section class="package">
      <h2>👑 Majestic Package</h2>
      <p class="desc">Paket premium untuk wedding megah, cocok untuk ballroom dan venue besar.</p>
      <p class="price">💰 Range Harga: Rp 35.000.000 – Rp 55.000.000</p>

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
        <h3>🔖 Catatan</h3>
        <ul>
          <li>Harga dapat disesuaikan berdasarkan kota, vendor, venue, dan jumlah tamu.</li>
          <li>Paket bisa ditambah layanan tambahan seperti catering, live band, atau dekorasi tambahan.</li>
        </ul>
      </div>

      <a href="dashboard.php" class="back-btn">Kembali ke Galeri</a> <a href="package.php" class="back-btn"> Book Now </a>
    </section>
  </main>

  <footer>
    <p>© 2025 Eternelle Wedding | Crafted with Love 💐</p>
  </footer>
</body>
</html>
