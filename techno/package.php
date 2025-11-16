<?php
// booking_design.php
// Single-file PHP — modal package detail menyerupai desain screenshot

$packages = [
  [
    "key" => "harmonie",
    "name" => "Harmonie Package",
    "price_range" => "Rp 12.000.000 – Rp 18.000.000",
    // use minimum numeric for calc (12_000_000)
    "price_min" => 12000000,
    "description" => "Paket dasar dengan konsep simple, rapi, dan seimbang — cocok untuk intimate wedding.",
    "highlights" => [
      "Ideal untuk intimate wedding",
      "Budget-friendly tanpa mengorbankan kualitas",
      "Koordinator profesional di hari H",
      "Dokumentasi foto berkualitas"
    ],
    "features" => [
      "Dekorasi pelaminan standar (soft elegant)",
      "Meja & kursi akad/pemberkatan",
      "4–6 standing flower / aisle point",
      "Welcome signage + meja tamu sederhana",
      "Dokumentasi foto 3 jam",
      "1 MC acara inti",
      "Wedding coordinator (2 crew)",
      "Konsultasi online + pilihan tema (3 opsi)"
    ],
    "popular" => false
  ],
  [
    "key" => "lumiere",
    "name" => "Lumière Package",
    "price_range" => "Rp 20.000.000 – Rp 30.000.000",
    "price_min" => 20000000,
    "description" => "Paket menengah dengan tampilan dekor yang lebih detail & ambience lighting estetik.",
    "highlights" => [
      "Dekor premium & ambience lighting",
      "Photo corner + mini backdrop",
      "Foto + video dokumentasi 6 jam",
      "Free moodboard desain"
    ],
    "features" => [
      "Dekorasi pelaminan medium (elegant + detail)",
      "Instalasi lighting ambience (fairy light / warm tone)",
      "Aisle dekor + flower vase minimalis",
      "Photo corner / mini backdrop tamu",
      "Foto + video dokumentasi 6 jam",
      "MC + Wedding Organizer (4 crew)",
      "Konsultasi langsung + free moodboard desain"
    ],
    "popular" => true
  ],
  [
    "key" => "majestic",
    "name" => "Majestic Package",
    "price_range" => "Rp 35.000.000 – Rp 55.000.000",
    "price_min" => 35000000,
    "description" => "Paket premium untuk wedding megah, cocok untuk ballroom dan venue besar.",
    "highlights" => [
      "Pelaminan premium custom",
      "Stage lighting & chandelier",
      "Dokumentasi full day + cinematic",
      "Free 3D visual konsep"
    ],
    "features" => [
      "Pelaminan premium (custom detail & tinggi)",
      "Stage lighting + chandelier / spotlight setup",
      "Full aisle floral + flower gate entrance",
      "Photo booth dekoratif + signage LED",
      "Dokumentasi full day + cinematic video + drone",
      "Wedding Organizer full team (6–8 crew)",
      "Free 3D visual konsep dekor sebelum eksekusi",
      "MUA retouch for bride (1x)"
    ],
    "popular" => false
  ],
  [
    "key" => "diamond",
    "name" => "Diamond Package",
    "price_range" => "Rp 60.000.000 – Rp 90.000.000",
    "price_min" => 60000000,
    "description" => "Paket luxury dengan dekorasi total, dokumentasi lengkap, dan layanan eksklusif.",
    "highlights" => [
      "Full premium decoration",
      "Full lighting show + mapping",
      "Dokumentasi tim lengkap",
      "WO VIP + event director"
    ],
    "features" => [
      "Full premium decoration (stage + aisle + ceiling + table styling)",
      "Instalasi crystal / mirror / luxury floral",
      "Full lighting show + LED / projection mapping",
      "Photo booth + lounge area tamu",
      "Dokumentasi full team (3 fotografer + 2 videografer + drone)",
      "WO VIP (10 crew + event director)",
      "Premium invitation (print + digital) 100 pax",
      "Souvenir curated set (optional)",
      "Food testing + full vendor handling"
    ],
    "popular" => false
  ],
  [
    "key" => "imperial",
    "name" => "Imperial Package",
    "price_range" => "Rp 100.000.000 – Rp 160.000.000+",
    "price_min" => 100000000,
    "description" => "Paket tertinggi — all-in, custom theme, dan layanan sekelas royal wedding.",
    "highlights" => [
      "Full venue luxury decoration",
      "Lighting choreography show",
      "Executive WO & event director",
      "Full 3D venue layout & konsep"
    ],
    "features" => [
      "Full venue luxury decoration (unlimited flowers, custom concept)",
      "Grand ceiling installation (crystal rain / floral chandelier / hanging light)",
      "Stage mapping + lighting choreography show",
      "Bridal & Groom MUA complete (trial + touch up + 2 look)",
      "Dokumentasi cinematic + drone + Same Day Edit video",
      "Executive WO (event director + stage manager + 12 crew)",
      "Free engagement setup / after party setup",
      "Exclusive VIP gift set (25–50 pcs)",
      "3x vendor meeting + full timeline management",
      "Full 3D venue layout & konsep presentation"
    ],
    "popular" => true
  ]
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Booking - Packages</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #111827;
      --muted: #6b7280;
      --blue-50: #eff6ff;
      --blue-200: #bfdbfe;
      --yellow-50: #fffbeb;
      --yellow-200: #fef3c7;
      --card-bg: #ffffff;
    }
    body { background: #f3f4f6; font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; color: #111827; }
    .container-main { max-width:1100px; margin:30px auto; }
    .package-card { border-radius: 12px; overflow: hidden; box-shadow: 0 6px 18px rgba(15,23,42,0.06); background: white; }
    .package-head { padding:28px 20px; text-align:center; position:relative; }
    .badge-popular { position:absolute; top:-12px; left:50%; transform:translateX(-50%); background:#111827; color:white; padding:6px 14px; border-radius:999px; font-size:12px; }
    .package-body { padding:18px; }
    .about-image img { width:50%; height:auto; display:block; margin: 0 auto 20px; border-radius:12px; }

    /* Modal styling to match screenshot */
    .modal-content { border-radius:12px; padding:18px; }
    .price-box { background: linear-gradient(180deg,#fafafa,#f3f4f6); border-radius:10px; padding:16px; }
    .highlight-box { background: var(--blue-50); border: 1px solid var(--blue-200); border-radius:10px; padding:12px; }
    .feature-item { display:flex; gap:12px; align-items:flex-start; }
    .feature-dot { width:28px; height:28px; background:#111827; color:white; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; }
    .yellow-box { background: var(--yellow-50); border: 1px solid var(--yellow-200); border-radius:10px; padding:12px; }
    .step-item { display:flex; gap:12px; align-items:flex-start; }
    .step-circle { width:28px; height:28px; background:#111827; color:white; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; }

    /* buttons */
    .btn-primary-dark { background:var(--primary); color:white; border:none; }
    .btn-primary-dark:hover { background:#0b1220; color:white; }

    @media (max-width:767px) {
      .modal-dialog { max-width: 95%; margin: 1rem; }
      .about-image img { width:70%; }
    }
  </style>
</head>
<body>
  <div class="container-main">
    <div class="text-center mb-4">
      <h2 class="mb-1">Pilih Paket</h2>
      <p class="text-muted">Klik Booking untuk melihat detail paket & ketentuan sebelum melanjutkan ke pembayaran</p>
    </div>

    <!-- about image (dikecilkan 50%) -->
    

    <div class="row gx-4 gy-4">
      <?php foreach($packages as $pkg): ?>
      <div class="col-md-6 col-lg-4">
        <div class="package-card">
          <div class="package-head">
            <?php if($pkg['popular']): ?>
              <div class="badge-popular">Paling Populer</div>
            <?php endif; ?>
            <h5 class="mb-1"><?= htmlspecialchars($pkg['name']) ?></h5>
            <p class="text-muted mb-0"><?= htmlspecialchars($pkg['price_range']) ?></p>
          </div>
          <div class="package-body">
            <p class="text-muted small mb-2"><?= htmlspecialchars($pkg['description']) ?></p>
            <ul class="small text-muted mb-3">
              <?php foreach(array_slice($pkg['features'],0,4) as $f): ?>
                <li><?= htmlspecialchars($f) ?></li>
              <?php endforeach; ?>
            </ul>
            <div class="d-grid">
              <button class="btn btn-outline-dark" onclick='openPackageModal(<?= json_encode($pkg, JSON_HEX_APOS|JSON_HEX_QUOT) ?>)'>Booking</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Modal (single modal dynamic) -->
  <div class="modal fade" id="packageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Success header -->
          <div class="text-center py-4 bg-success bg-opacity-10 rounded mb-3" id="modalSuccessHeader" style="display:none;">
            <div style="font-size:44px;color:#059669">✔</div>
            <h5 class="mt-2" id="modalSuccessText">Pesanan Berhasil Dibuat!</h5>
            <p class="text-muted small">Invoice telah dikirim ke email Anda.</p>
          </div>

          <!-- Main modal content -->
          <div id="modalMainContent">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <div>
                <h4 id="modalTitle">Package Name</h4>
                <p class="text-muted small mb-1" id="modalDesc">Short description</p>
              </div>
              <div class="text-end">
                <p class="text-muted small mb-1">Harga Paket</p>
                <h5 id="modalPrice">Rp 0</h5>
              </div>
            </div>

            <!-- Price overview -->
            <div class="price-box mb-4">
              <div class="row">
                <div class="col-md-6">
                  <p class="text-sm text-muted mb-1">Harga Paket (estimasi)</p>
                  <p class="mb-0" id="priceSubtotal">Rp 0</p>
                </div>
                <div class="col-md-6">
                  <p class="text-sm text-muted mb-1">Down Payment (30%)</p>
                  <p class="text-success fw-semibold mb-0" id="priceDP">Rp 0</p>
                </div>
              </div>
              <hr class="my-3" />
              <div class="d-flex justify-content-between small">
                <span class="text-muted">Subtotal</span>
                <span id="priceSub">Rp 0</span>
              </div>
              <div class="d-flex justify-content-between small">
                <span class="text-muted">PPN (11%)</span>
                <span id="priceTax">Rp 0</span>
              </div>
              <hr class="my-2" />
              <div class="d-flex justify-content-between fw-semibold">
                <span>Total Harga</span>
                <span id="priceTotal">Rp 0</span>
              </div>
            </div>

            <!-- Highlights -->
            <div class="mb-4">
              <div class="d-flex align-items-center gap-2 mb-3">
                <div style="width:22px;height:22px;background:#f1f5f9;border-radius:4px;display:flex;align-items:center;justify-content:center;color:#111827;font-weight:600;">★</div>
                <h6 class="mb-0">Keunggulan Paket</h6>
              </div>
              <div class="row g-3" id="highlightsGrid">
                <!-- filled by JS -->
              </div>
            </div>

            <!-- Features list -->
            <div class="mb-4">
              <h6>Yang Anda Dapatkan</h6>
              <div class="row g-2" id="featuresGrid">
                <!-- filled by JS -->
              </div>
            </div>

            <!-- Payment terms (yellow) -->
            <div class="yellow-box mb-4">
              <h6 class="mb-2">Ketentuan Pembayaran</h6>
              <ul class="small mb-0 text-muted">
                <li>Down Payment (DP) minimal <strong>30%</strong> dari total harga untuk konfirmasi booking</li>
                <li>DP harus dibayarkan maksimal <strong>3x24 jam</strong> setelah pemesanan</li>
                <li>Pelunasan dilakukan maksimal <strong>2 minggu sebelum hari H</strong></li>
                <li>Pembayaran dapat dilakukan via transfer bank, kartu kredit, atau e-wallet</li>
              </ul>
            </div>

            <!-- What's next -->
            <div class="bg-white border rounded p-3 mb-3">
              <h6 class="mb-3">Langkah Selanjutnya</h6>
              <div class="d-flex flex-column gap-3">
                <div class="step-item">
                  <div class="step-circle">1</div>
                  <div>
                    <div class="fw-semibold">Isi Data Diri & Detail Acara</div>
                    <div class="text-muted small">Lengkapi informasi untuk persiapan pernikahan Anda</div>
                  </div>
                </div>
                <div class="step-item">
                  <div class="step-circle">2</div>
                  <div>
                    <div class="fw-semibold">Pilih Metode Pembayaran</div>
                    <div class="text-muted small">Transfer bank, kartu kredit, atau e-wallet</div>
                  </div>
                </div>
                <div class="step-item">
                  <div class="step-circle">3</div>
                  <div>
                    <div class="fw-semibold">Dapatkan Invoice & Konfirmasi</div>
                    <div class="text-muted small">Invoice akan dikirim ke email Anda</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- action buttons -->
<div class="d-flex gap-3 pt-3 border-top">
    <button class="btn btn-outline-secondary flex-grow-1" data-bs-dismiss="modal">
        Lihat Paket Lain
    </button>

    <a href="payment.php" id="btnProceed"
       class="btn btn-primary-dark flex-grow-1 text-center">
        Lanjutkan ke Pembayaran →
    </a>
    
</div>


          </div> <!-- end modalMainContent -->
        </div> <!-- end modal-body -->
      </div> <!-- end modal-content -->
    </div> <!-- modal-dialog -->
  </div> <!-- modal -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const packages = <?= json_encode($packages, JSON_HEX_APOS|JSON_HEX_QUOT) ?>;
    let selected = null;

    function formatRp(n) {
      if (!n) return '0';
      return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function openPackageModal(pkg) {
      // pkg is passed as object (via JSON encode)
      selected = pkg;
      const modalEl = document.getElementById('packageModal');
      const modal = new bootstrap.Modal(modalEl);

      // title/desc/price
      document.getElementById('modalTitle').textContent = pkg.name;
      document.getElementById('modalDesc').textContent = pkg.description;
      document.getElementById('modalPrice').textContent = pkg.price_range;

      // compute values using price_min
      const subtotal = Number(pkg.price_min) || 0;
      const tax = Math.round(subtotal * 0.11);
      const total = subtotal + tax;
      const dp = Math.round(total * 0.30);

      document.getElementById('priceSubtotal').textContent = "Rp " + formatRp(subtotal);
      document.getElementById('priceTax').textContent = "Rp " + formatRp(tax);
      document.getElementById('priceTotal').textContent = "Rp " + formatRp(total);
      document.getElementById('priceSub').textContent = "Rp " + formatRp(subtotal);
      document.getElementById('priceDP').textContent = "Rp " + formatRp(dp);

      // highlights (2 columns)
      const highlightsGrid = document.getElementById('highlightsGrid');
      highlightsGrid.innerHTML = '';
      if (pkg.highlights && pkg.highlights.length) {
        pkg.highlights.forEach(h => {
          const col = document.createElement('div');
          col.className = 'col-md-6';
          col.innerHTML = `<div class="highlight-box d-flex gap-2 align-items-start"><div style="width:22px;height:22px;background:#111827;color:#fff;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:12px;">✓</div><div class="text-sm text-blue-900" style="color:#0f172a">${h}</div></div>`;
          highlightsGrid.appendChild(col);
        });
      }

      // features grid (2 columns)
      const featuresGrid = document.getElementById('featuresGrid');
      featuresGrid.innerHTML = '';
      if (pkg.features && pkg.features.length) {
        pkg.features.forEach((f, idx) => {
          const col = document.createElement('div');
          col.className = 'col-md-6';
          col.innerHTML = `<div class="feature-item"><div class="feature-dot">${idx+1}</div><div class="text-sm text-gray-700">${f}</div></div>`;
          featuresGrid.appendChild(col);
        });
      }

      // show modal
      modal.show();
    }
function openPackageModal(pkg) {
  selected = pkg;
  const modalEl = document.getElementById('packageModal');
  const modal = new bootstrap.Modal(modalEl);

  // title/desc/price
  document.getElementById('modalTitle').textContent = pkg.name;
  document.getElementById('modalDesc').textContent = pkg.description;
  document.getElementById('modalPrice').textContent = pkg.price_range;

  // price calculation
  const subtotal = Number(pkg.price_min) || 0;
  const tax = Math.round(subtotal * 0.11);
  const total = subtotal + tax;
  const dp = Math.round(total * 0.30);

  document.getElementById('priceSubtotal').textContent = "Rp " + formatRp(subtotal);
  document.getElementById('priceTax').textContent = "Rp " + formatRp(tax);
  document.getElementById('priceTotal').textContent = "Rp " + formatRp(total);
  document.getElementById('priceSub').textContent = "Rp " + formatRp(subtotal);
  document.getElementById('priceDP').textContent = "Rp " + formatRp(dp);

  // highlights
  const highlightsGrid = document.getElementById('highlightsGrid');
  highlightsGrid.innerHTML = '';
  if (pkg.highlights && pkg.highlights.length) {
    pkg.highlights.forEach(h => {
      const col = document.createElement('div');
      col.className = 'col-md-6';
      col.innerHTML = `
        <div class="highlight-box d-flex gap-2 align-items-start">
          <div style="width:22px;height:22px;background:#111827;color:#fff;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:12px;">✓</div>
          <div class="text-sm text-blue-900" style="color:#0f172a">${h}</div>
        </div>`;
      highlightsGrid.appendChild(col);
    });
  }

  // features
  const featuresGrid = document.getElementById('featuresGrid');
  featuresGrid.innerHTML = '';
  if (pkg.features && pkg.features.length) {
    pkg.features.forEach((f, idx) => {
      const col = document.createElement('div');
      col.className = 'col-md-6';
      col.innerHTML = `
        <div class="feature-item">
          <div class="feature-dot">${idx + 1}</div>
          <div class="text-sm text-gray-700">${f}</div>
        </div>`;
      featuresGrid.appendChild(col);
    });
  }

  // 🔥 SET HREF TOMBOL PEMBAYARAN
  document.getElementById("btnProceed").href =
    "payment.php?package=" + encodeURIComponent(pkg.name.toLowerCase());

  modal.show();
}

    
  </script>
</body>
</html>
