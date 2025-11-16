<?php
// invoice.php - single file multi-step invoice (Bootstrap 5) without composer

// Optional: server-side fallback if you want to open invoice directly with sample data
$samplePackage = [
    'name' => 'Luxury Wedding Package',
    'price' => '12.000.000'
];

// We won't force POST flow; JS handles steps client-side.
// But if you want server-rendered invoice (after submit) you could process here.

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Checkout - Invoice Multi-Step</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --primary:#111827; /* neutral dark for buttons like design */
      --muted:#6b7280;
      --card-bg:#f8fafc;
    }
    body { background: #f3f4f6; font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
    .stepper { display:flex; gap:1rem; align-items:center; justify-content:center; margin-bottom:1.5rem; }
    .step { display:flex; gap:.5rem; align-items:center; color:var(--muted); }
    .step .circle { width:36px; height:36px; border-radius:999px; display:inline-flex; align-items:center; justify-content:center; background:#e5e7eb; color:#374151; font-weight:600; }
    .step.active, .step.completed { color: #111827; }
    .step.active .circle { background:var(--primary); color:white; }
    .step.completed .circle { background:#10b981; color:white; }
    .connector { height:2px; width:80px; background:#e5e7eb; }
    .card-panel { max-width:900px; margin:30px auto; background:white; border-radius:12px; box-shadow: 0 6px 18px rgba(15,23,42,0.06); padding:24px; }
    .summary-box { background:var(--card-bg); border-radius:8px; padding:16px; }
    .muted { color:var(--muted); }
    .btn-primary-custom { background:var(--primary); border-color:var(--primary); }
    @media (max-width: 576px) {
      .connector { width:30px; }
    }
  </style>
</head>
<body>

<div class="container py-5">

  <div class="card-panel">

    <div class="text-center mb-3">
      <h4 class="mb-0">Pembayaran & Pemesanan</h4>
      <p class="muted small mb-0">Lengkapi data untuk melanjutkan pemesanan</p>
    </div>

    <!-- Stepper -->
    <div class="d-flex justify-content-center align-items-center mb-4">
      <div id="stepper" class="stepper">
        <div class="step active" data-step="1">
          <div class="circle">1</div>
          <div class="d-none d-sm-block"><small>Data Diri</small></div>
        </div>
        <div class="connector"></div>
        <div class="step" data-step="2">
          <div class="circle">2</div>
          <div class="d-none d-sm-block"><small>Detail Acara</small></div>
        </div>
        <div class="connector"></div>
        <div class="step" data-step="3">
          <div class="circle">3</div>
          <div class="d-none d-sm-block"><small>Pembayaran</small></div>
        </div>
      </div>
    </div>

    <form id="multiForm" novalidate>
      <input type="hidden" id="selectedPackageName" value="<?= htmlspecialchars($samplePackage['name']) ?>">
      <input type="hidden" id="selectedPackagePrice" value="<?= htmlspecialchars($samplePackage['price']) ?>">

      <!-- STEP 1 -->
      <div id="step-1" class="step-content">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Nama Lengkap *</label>
            <input id="fullName" class="form-control" required placeholder="John Doe">
            <div class="invalid-feedback">Nama lengkap wajib diisi</div>
          </div>
          <div class="col-md-6">
            <label class="form-label">No. Telepon *</label>
            <input id="phone" type="tel" class="form-control" required placeholder="08123456789">
            <div class="invalid-feedback">Nomor telepon wajib diisi</div>
          </div>

          <div class="col-12">
            <label class="form-label">Email *</label>
            <input id="email" type="email" class="form-control" required placeholder="email@contoh.com">
            <div class="invalid-feedback">Email tidak valid</div>
          </div>

          <div class="col-12">
            <label class="form-label">Alamat Lengkap *</label>
            <textarea id="address" class="form-control" rows="3" required placeholder="Jl. Contoh No. 1, Jakarta"></textarea>
            <div class="invalid-feedback">Alamat wajib diisi</div>
          </div>
        </div>
      </div>

      <!-- STEP 2 -->
      <div id="step-2" class="step-content" style="display:none;">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Tanggal Pernikahan *</label>
            <input id="weddingDate" type="date" class="form-control" required>
            <div class="invalid-feedback">Tanggal wajib diisi</div>
          </div>
          <div class="col-md-6">
            <label class="form-label">Estimasi Jumlah Tamu *</label>
            <input id="guestCount" type="number" min="1" class="form-control" required placeholder="200">
            <div class="invalid-feedback">Masukkan estimasi tamu</div>
          </div>

          <div class="col-12">
            <label class="form-label">Venue (opsional)</label>
            <input id="venue" class="form-control" placeholder="Nama gedung / venue">
          </div>

          <div class="col-12">
            <label class="form-label">Permintaan Khusus (opsional)</label>
            <textarea id="specialRequest" class="form-control" rows="3" placeholder="Tema, warna, preferensi makanan..."></textarea>
          </div>
        </div>
      </div>

      <!-- STEP 3 -->
      <div id="step-3" class="step-content" style="display:none;">
        <div class="row">
          <div class="col-lg-7">
            <div class="mb-3">
              <h6>Ringkasan Pesanan</h6>
              <div class="summary-box">
                <div class="d-flex justify-content-between">
                  <div class="muted">Paket</div>
                  <div id="summaryPackageName"><?= htmlspecialchars($samplePackage['name']) ?></div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="muted">Tanggal</div>
                  <div id="summaryDate">-</div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="muted">Jumlah Tamu</div>
                  <div id="summaryGuests">- orang</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div class="muted">Subtotal</div>
                  <div>Rp <span id="summarySubtotal"><?= htmlspecialchars($samplePackage['price']) ?></span></div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="muted">PPN (11%)</div>
                  <div>Rp <span id="summaryTax">-</span></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold">
                  <div>Total</div>
                  <div>Rp <span id="summaryTotal">-</span></div>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <h6>Metode Pembayaran</h6>
              <div class="list-group">
                <label class="list-group-item d-flex align-items-start">
                  <input type="radio" name="paymentMethod" value="bank_transfer" checked class="me-3 mt-1">
                  <div>
                    <div class="fw-semibold">Transfer Bank</div>
                    <div class="muted small">BCA / Mandiri / BNI</div>
                  </div>
                </label>
                <label class="list-group-item d-flex align-items-start">
                  <input type="radio" name="paymentMethod" value="credit_card" class="me-3 mt-1">
                  <div>
                    <div class="fw-semibold">Kartu Kredit/Debit</div>
                    <div class="muted small">Visa / Mastercard</div>
                  </div>
                </label>
                <label class="list-group-item d-flex align-items-start">
                  <input type="radio" name="paymentMethod" value="e_wallet" class="me-3 mt-1">
                  <div>
                    <div class="fw-semibold">E-Wallet</div>
                    <div class="muted small">GoPay / OVO / Dana</div>
                  </div>
                </label>
              </div>
            </div>

            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="agreeTerms" required>
              <label class="form-check-label muted" for="agreeTerms">
                Saya menyetujui syarat & ketentuan dan memahami DP bersifat non-refundable.
              </label>
              <div class="invalid-feedback">Anda harus menyetujui syarat & ketentuan</div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="p-3 border rounded">
              <h6 class="fw-semibold">Detail Pembayaran</h6>
              <p class="muted small mb-1">Subtotal</p>
              <p class="fs-5 mb-2">Rp <span id="sideSubtotal"><?= htmlspecialchars($samplePackage['price']) ?></span></p>

              <p class="muted small mb-1">PPN (11%)</p>
              <p class="mb-2">Rp <span id="sideTax">-</span></p>

              <hr>
              <p class="muted small mb-1">Total</p>
              <p class="fs-5 fw-bold">Rp <span id="sideTotal">-</span></p>

              <p class="muted small mt-3">Down Payment (30%)</p>
              <p class="fw-semibold">Rp <span id="sideDP">-</span></p>
            </div>
          </div>
        </div>
      </div>

      <!-- ACTIONS -->
      <div class="d-flex gap-3 pt-4 border-top mt-4">
        <button type="button" id="btnBack" class="btn btn-outline-secondary flex-grow-1" style="display:none;">Kembali</button>
        <button type="button" id="btnNext" class="btn btn-primary-custom flex-grow-1">Lanjutkan</button>
        <button type="button" id="btnConfirm" class="btn btn-primary-custom flex-grow-1" style="display:none;">Konfirmasi Pesanan</button>
      </div>
    </form>
  </div>
</div>

<!-- Invoice Preview Modal -->
<div class="modal fade" id="invoiceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center p-4 bg-success bg-opacity-10 rounded mb-3">
          <div style="font-size:48px;color:#059669">✔</div>
          <h4 class="mt-2">Pesanan Berhasil Dibuat!</h4>
          <p class="muted">Invoice telah dikirim ke email Anda.</p>
        </div>

        <div class="row">
          <div class="col-md-8">
            <h5>Invoice</h5>
            <p class="small muted">No: <span id="invNumber">-</span></p>
            <p class="small muted">Tanggal: <span id="invDate">-</span></p>

            <div class="mt-3">
              <h6>Informasi Pelanggan</h6>
              <p id="invName"></p>
              <p id="invPhone"></p>
              <p id="invEmail"></p>
              <p id="invAddress"></p>
            </div>

            <div class="mt-3">
              <h6>Detail Acara</h6>
              <p id="invWeddingDate"></p>
              <p id="invVenue"></p>
              <p id="invGuests"></p>
              <p id="invSpecialRequest"></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 border rounded">
              <h6 class="fw-semibold">Rincian</h6>
              <div class="d-flex justify-content-between">
                <div class="muted">Paket</div>
                <div id="invPackage">-</div>
              </div>
              <div class="d-flex justify-content-between">
                <div class="muted">Subtotal</div>
                <div id="invSubtotal">-</div>
              </div>
              <div class="d-flex justify-content-between">
                <div class="muted">PPN (11%)</div>
                <div id="invTax">-</div>
              </div>
              <hr>
              <div class="d-flex justify-content-between fw-bold">
                <div>Total</div>
                <div id="invTotal">-</div>
              </div>

              <div class="mt-3">
                <h6 class="muted small">Metode Pembayaran</h6>
                <div id="invPaymentMethod">-</div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button class="btn btn-dark" id="btnPrint">Print Invoice</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
(function(){
  // state
  let currentStep = 1;
  const totalSteps = 3;

  // DOM
  const steps = document.querySelectorAll('#stepper .step');
  const btnNext = document.getElementById('btnNext');
  const btnBack = document.getElementById('btnBack');
  const btnConfirm = document.getElementById('btnConfirm');

  function setActiveStep(n) {
    currentStep = n;
    // show/hide step contents
    for (let i=1;i<=totalSteps;i++){
      document.getElementById('step-'+i).style.display = (i===n)?'block':'none';
    }
    // update stepper classes
    steps.forEach(s=>{
      const st = parseInt(s.getAttribute('data-step'));
      s.classList.remove('active','completed');
      if (st < n) s.classList.add('completed');
      if (st === n) s.classList.add('active');
    });
    // buttons
    btnBack.style.display = (n===1)?'none':'inline-block';
    btnNext.style.display = (n===totalSteps)?'none':'inline-block';
    btnConfirm.style.display = (n===totalSteps)?'inline-block':'none';
    // scroll to top of card
    window.scrollTo({top: document.querySelector('.card-panel').offsetTop - 20, behavior:'smooth'});
    // update summary if on step 3
    if (n===3) updateSummary();
  }

  // basic validation for required fields in the visible step
  function validateCurrentStep(){
    const container = document.getElementById('step-'+currentStep);
    const requireds = container.querySelectorAll('[required]');
    let ok = true;
    requireds.forEach(inp=>{
      if(!inp.value || inp.value.trim() === ''){
        inp.classList.add('is-invalid');
        ok = false;
      } else {
        inp.classList.remove('is-invalid');
      }
    });
    // special checkbox on step 3
    if (currentStep === 3) {
      const agree = document.getElementById('agreeTerms');
      if (!agree.checked) {
        agree.classList.add('is-invalid');
        ok = false;
      } else {
        agree.classList.remove('is-invalid');
      }
    }
    return ok;
  }

  // Next button
  btnNext.addEventListener('click', function(){
    // validate current step
    if (!validateCurrentStep()) return;
    setActiveStep(Math.min(currentStep+1, totalSteps));
  });

  // Back button
  btnBack.addEventListener('click', function(){
    setActiveStep(Math.max(currentStep-1,1));
  });

  // Confirm / submit
  btnConfirm.addEventListener('click', function(){
    if (!validateCurrentStep()) return;
    // prepare invoice data
    const inv = generateInvoiceData();
    fillInvoiceModal(inv);
    // show modal
    const invModal = new bootstrap.Modal(document.getElementById('invoiceModal'));
    invModal.show();
    // optionally: reset form to step 1
    setActiveStep(1);
    document.getElementById('multiForm').reset();
    // update stepper UI reset
    steps.forEach(s=> s.classList.remove('completed'));
    steps[0].classList.add('active');
  });

  // print
  document.getElementById('btnPrint').addEventListener('click', function(){
    window.print();
  });

  // get numbers helper: convert '12.000.000' -> 12000000
  function parseRpString(str){
    if (!str) return 0;
    return parseInt(str.toString().replace(/\./g,'')) || 0;
  }

  function formatRp(num){
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); // simple thousand separator
  }

  function updateSummary(){
    const pkgName = document.getElementById('selectedPackageName').value;
    const pkgPrice = document.getElementById('selectedPackagePrice').value;
    const subtotalNum = parseRpString(pkgPrice);
    const tax = Math.round(subtotalNum * 0.11);
    const total = subtotalNum + tax;
    const dp = Math.round(total * 0.30);

    document.getElementById('summaryPackageName').textContent = pkgName;
    const weddingDate = document.getElementById('weddingDate').value;
    document.getElementById('summaryDate').textContent = weddingDate || '-';
    const guests = document.getElementById('guestCount').value || '-';
    document.getElementById('summaryGuests').textContent = guests + (guests !== '-' ? ' orang' : '');

    document.getElementById('summarySubtotal').textContent = formatRp(subtotalNum);
    document.getElementById('summaryTax').textContent = formatRp(tax);
    document.getElementById('summaryTotal').textContent = formatRp(total);

    // side
    document.getElementById('sideSubtotal').textContent = formatRp(subtotalNum);
    document.getElementById('sideTax').textContent = formatRp(tax);
    document.getElementById('sideTotal').textContent = formatRp(total);
    document.getElementById('sideDP').textContent = formatRp(dp);
  }

  // create invoice data (simple)
  function generateInvoiceData(){
    const random = Math.floor(Math.random()*10000).toString().padStart(4,'0');
    const now = new Date();
    const invNumber = `INV/${now.getFullYear()}/${String(now.getMonth()+1).padStart(2,'0')}/${random}`;
    const invDate = now.toLocaleDateString('id-ID', { day:'2-digit', month:'long', year:'numeric' });

    const invoice = {
      invoiceNumber: invNumber,
      date: invDate,
      customerInfo: {
        fullName: document.getElementById('fullName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        address: document.getElementById('address').value
      },
      weddingDetails: {
        weddingDate: document.getElementById('weddingDate').value,
        venue: document.getElementById('venue').value,
        guestCount: document.getElementById('guestCount').value,
        specialRequest: document.getElementById('specialRequest').value
      },
      packageInfo: {
        name: document.getElementById('selectedPackageName').value,
        price: document.getElementById('selectedPackagePrice').value
      },
      paymentMethod: document.querySelector('input[name="paymentMethod"]:checked').value
    };
    return invoice;
  }

  function fillInvoiceModal(inv){
    document.getElementById('invNumber').textContent = inv.invoiceNumber;
    document.getElementById('invDate').textContent = inv.date;
    document.getElementById('invName').textContent = inv.customerInfo.fullName;
    document.getElementById('invPhone').textContent = inv.customerInfo.phone;
    document.getElementById('invEmail').textContent = inv.customerInfo.email;
    document.getElementById('invAddress').textContent = inv.customerInfo.address;

    document.getElementById('invWeddingDate').textContent = 'Tanggal: ' + (inv.weddingDetails.weddingDate || '-');
    document.getElementById('invVenue').textContent = 'Venue: ' + (inv.weddingDetails.venue || '-');
    document.getElementById('invGuests').textContent = 'Estimasi tamu: ' + (inv.weddingDetails.guestCount || '-') + ' orang';
    document.getElementById('invSpecialRequest').textContent = 'Permintaan: ' + (inv.weddingDetails.specialRequest || '-');

    const subtotalNum = parseRpString(inv.packageInfo.price);
    const tax = Math.round(subtotalNum * 0.11);
    const total = subtotalNum + tax;

    document.getElementById('invPackage').textContent = inv.packageInfo.name;
    document.getElementById('invSubtotal').textContent = 'Rp ' + formatRp(subtotalNum);
    document.getElementById('invTax').textContent = 'Rp ' + formatRp(tax);
    document.getElementById('invTotal').textContent = 'Rp ' + formatRp(total);
    document.getElementById('invPaymentMethod').textContent = inv.paymentMethod.replace('_',' ');
  }

  // init
  setActiveStep(1);

})();
</script>

</body>
</html>
