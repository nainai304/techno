<?php
// invoice.php - Invoice dengan desain Eternelle Wedding

$samplePackage = [
    'name' => 'Luxury Wedding Package',
    'price' => '12.000.000'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Eternelle Wedding</title>
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
            min-height: 100vh;
        }

        /* Header dengan Logo */
        .header-section {
            background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 50%, #e8e8e8 100%);
            padding: 1.5rem 5%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 400;
            color: #333;
            font-style: italic;
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
            margin-top: 2px;
            font-family: 'Poppins', sans-serif;
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 3rem auto;
            padding: 0 5%;
        }

        /* Card Panel */
        .card-panel {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            margin-bottom: 2rem;
        }

        .page-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .page-title h4 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #888;
            font-weight: 400;
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .page-title p {
            color: #999;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
        }

        /* Stepper */
        .stepper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
            padding: 0 1rem;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #999;
            transition: all 0.3s ease;
        }

        .step .circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e5e7eb;
            color: #666;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .step-label {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .step.active {
            color: #333;
        }

        .step.active .circle {
            background: #c9b896;
            color: white;
        }

        .step.completed {
            color: #10b981;
        }

        .step.completed .circle {
            background: #10b981;
            color: white;
        }

        .connector {
            width: 60px;
            height: 2px;
            background: #e5e7eb;
            transition: all 0.3s ease;
        }

        .connector.completed {
            background: #10b981;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            color: #999;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
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

        .form-control:focus {
            border-bottom-color: #c9b896;
        }

        .form-control.is-invalid {
            border-bottom-color: #dc3545;
        }

        .invalid-feedback {
            display: none;
            color: #dc3545;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        .form-control.is-invalid ~ .invalid-feedback {
            display: block;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 1rem;
        }

        textarea.form-control:focus {
            border-color: #c9b896;
        }

        /* Grid Layout */
        .row {
            display: grid;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .row.cols-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        /* Summary Box */
        .summary-box {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }

        .summary-row.total {
            font-weight: 600;
            font-size: 1.1rem;
            padding-top: 0.75rem;
            border-top: 2px solid #ddd;
        }

        .summary-label {
            color: #888;
        }

        .summary-value {
            color: #333;
        }

        /* Payment Method */
        .payment-option {
            background: #f9f9f9;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .payment-option:hover {
            border-color: #c9b896;
            background: #fff;
        }

        .payment-option input[type="radio"] {
            margin-top: 0.25rem;
            cursor: pointer;
        }

        .payment-option.selected {
            border-color: #c9b896;
            background: #fff;
        }

        .payment-info h6 {
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #333;
        }

        .payment-info p {
            color: #888;
            font-size: 0.85rem;
            margin: 0;
        }

        /* Checkbox */
        .checkbox-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin: 1.5rem 0;
        }

        .checkbox-wrapper input[type="checkbox"] {
            margin-top: 0.25rem;
            cursor: pointer;
            width: 18px;
            height: 18px;
        }

        .checkbox-wrapper label {
            color: #666;
            font-size: 0.9rem;
            cursor: pointer;
        }

        /* Buttons */
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #f0f0f0;
        }

        .btn {
            flex: 1;
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            font-size: 0.85rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary {
            background: #c9b896;
            color: white;
        }

        .btn-primary:hover {
            background: #b8a67d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(201, 184, 150, 0.3);
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid #c9b896;
            color: #c9b896;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
        }

        /* Sidebar Panel */
        .sidebar-panel {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 1.5rem;
            border: 1px solid #e5e7eb;
        }

        .sidebar-panel h6 {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 400;
            font-style: italic;
            color: #888;
            margin-bottom: 1.5rem;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 900px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            padding: 2rem 2rem 1rem;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: #10b981;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2.5rem;
        }

        .modal-header h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #333;
            font-weight: 400;
            margin-bottom: 0.5rem;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-footer {
            padding: 1rem 2rem 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        /* Invoice Styles */
        .invoice-section {
            margin-bottom: 2rem;
        }

        .invoice-section h6 {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: #888;
            font-style: italic;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .invoice-info {
            color: #666;
            line-height: 1.8;
            font-size: 0.9rem;
        }

        .invoice-number {
            font-size: 0.85rem;
            color: #999;
            margin-bottom: 1rem;
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
        @media (max-width: 768px) {
            .row.cols-2 {
                grid-template-columns: 1fr;
            }

            .stepper {
                flex-wrap: wrap;
            }

            .connector {
                width: 30px;
            }

            .step-label {
                display: none;
            }

            .card-panel {
                padding: 1.5rem;
            }

            .form-actions {
                flex-direction: column;
            }
        }

        /* Hide elements */
        .step-content {
            display: none;
        }

        .step-content.active {
            display: block;
        }
    </style>
    <link rel="icon" href="foto/LOGO 2.jpg">
</head>
<body>
    <!-- Header -->
    <div class="header-section">
        <div class="logo">
            <span>E</span>ternelle
            <span class="logo-subtitle">WEDDING</span>
        </div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <div class="card-panel">
            <!-- Page Title -->
            <div class="page-title">
                <h4>Pembayaran & Pemesanan</h4>
                <p>Lengkapi data untuk melanjutkan pemesanan</p>
            </div>

            <!-- Stepper -->
            <div class="stepper">
                <div class="step active" data-step="1">
                    <div class="circle">1</div>
                    <div class="step-label">Data Diri</div>
                </div>
                <div class="connector"></div>
                <div class="step" data-step="2">
                    <div class="circle">2</div>
                    <div class="step-label">Detail Acara</div>
                </div>
                <div class="connector"></div>
                <div class="step" data-step="3">
                    <div class="circle">3</div>
                    <div class="step-label">Pembayaran</div>
                </div>
            </div>

            <!-- Form -->
            <form id="multiForm" novalidate>
                <input type="hidden" id="selectedPackageName" value="<?= htmlspecialchars($samplePackage['name']) ?>">
                <input type="hidden" id="selectedPackagePrice" value="<?= htmlspecialchars($samplePackage['price']) ?>">

                <!-- STEP 1: Data Diri -->
                <div id="step-1" class="step-content active">
                    <div class="row cols-2">
                        <div class="form-group">
                            <label class="form-label">Nama Lengkap *</label>
                            <input id="fullName" class="form-control" required placeholder="John Doe">
                            <div class="invalid-feedback">Nama lengkap wajib diisi</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">No. Telepon *</label>
                            <input id="phone" type="tel" class="form-control" required placeholder="08123456789">
                            <div class="invalid-feedback">Nomor telepon wajib diisi</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email *</label>
                        <input id="email" type="email" class="form-control" required placeholder="email@contoh.com">
                        <div class="invalid-feedback">Email tidak valid</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap *</label>
                        <textarea id="address" class="form-control" rows="3" required placeholder="Jl. Contoh No. 1, Jakarta"></textarea>
                        <div class="invalid-feedback">Alamat wajib diisi</div>
                    </div>
                </div>

                <!-- STEP 2: Detail Acara -->
                <div id="step-2" class="step-content">
                    <div class="row cols-2">
                        <div class="form-group">
                            <label class="form-label">Tanggal Pernikahan *</label>
                            <input id="weddingDate" type="date" class="form-control" required>
                            <div class="invalid-feedback">Tanggal wajib diisi</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Estimasi Jumlah Tamu *</label>
                            <input id="guestCount" type="number" min="1" class="form-control" required placeholder="200">
                            <div class="invalid-feedback">Masukkan estimasi tamu</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Venue (opsional)</label>
                        <input id="venue" class="form-control" placeholder="Nama gedung / venue">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Permintaan Khusus (opsional)</label>
                        <textarea id="specialRequest" class="form-control" rows="3" placeholder="Tema, warna, preferensi makanan..."></textarea>
                    </div>
                </div>

                <!-- STEP 3: Pembayaran -->
                <div id="step-3" class="step-content">
                    <div class="row">
                        <div>
                            <div class="summary-box">
                                <h6 style="font-family: 'Playfair Display', serif; font-style: italic; color: #888; margin-bottom: 1rem;">Ringkasan Pesanan</h6>
                                <div class="summary-row">
                                    <span class="summary-label">Paket</span>
                                    <span class="summary-value" id="summaryPackageName"><?= htmlspecialchars($samplePackage['name']) ?></span>
                                </div>
                                <div class="summary-row">
                                    <span class="summary-label">Tanggal</span>
                                    <span class="summary-value" id="summaryDate">-</span>
                                </div>
                                <div class="summary-row">
                                    <span class="summary-label">Jumlah Tamu</span>
                                    <span class="summary-value" id="summaryGuests">-</span>
                                </div>
                                <div class="summary-row" style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #ddd;">
                                    <span class="summary-label">Subtotal</span>
                                    <span class="summary-value">Rp <span id="summarySubtotal"><?= htmlspecialchars($samplePackage['price']) ?></span></span>
                                </div>
                                <div class="summary-row">
                                    <span class="summary-label">PPN (11%)</span>
                                    <span class="summary-value">Rp <span id="summaryTax">-</span></span>
                                </div>
                                <div class="summary-row total">
                                    <span class="summary-label">Total</span>
                                    <span class="summary-value">Rp <span id="summaryTotal">-</span></span>
                                </div>
                                <div class="summary-row" style="color: #c9b896; font-weight: 500;">
                                    <span>Down Payment (30%)</span>
                                    <span>Rp <span id="summaryDP">-</span></span>
                                </div>
                            </div>

                            <h6 style="font-family: 'Playfair Display', serif; font-style: italic; color: #888; margin-bottom: 1rem;">Metode Pembayaran</h6>
                            
                            <div class="payment-option" data-method="bank_transfer">
                                <input type="radio" name="paymentMethod" value="bank_transfer" checked>
                                <div class="payment-info">
                                    <h6>Transfer Bank</h6>
                                    <p>BCA / Mandiri / BNI</p>
                                </div>
                            </div>

                            <div class="payment-option" data-method="credit_card">
                                <input type="radio" name="paymentMethod" value="credit_card">
                                <div class="payment-info">
                                    <h6>Kartu Kredit/Debit</h6>
                                    <p>Visa / Mastercard</p>
                                </div>
                            </div>

                            <div class="payment-option" data-method="e_wallet">
                                <input type="radio" name="paymentMethod" value="e_wallet">
                                <div class="payment-info">
                                    <h6>E-Wallet</h6>
                                    <p>GoPay / OVO / Dana</p>
                                </div>
                            </div>

                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="agreeTerms" required>
                                <label for="agreeTerms">
                                    Saya menyetujui syarat & ketentuan dan memahami DP bersifat non-refundable.
                                </label>
                            </div>
                            <div class="invalid-feedback" style="display: none; margin-top: -1rem; margin-left: 2rem;" id="termsError">
                                Anda harus menyetujui syarat & ketentuan
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" id="btnBack" class="btn btn-secondary" style="display: none;">Kembali</button>
                    <button type="button" id="btnNext" class="btn btn-primary">Lanjutkan</button>
                    <button type="button" id="btnConfirm" class="btn btn-primary" style="display: none;">Konfirmasi Pesanan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Invoice Modal -->
    <div class="modal" id="invoiceModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="success-icon">✓</div>
                <h4>Pesanan Berhasil Dibuat!</h4>
                <p style="color: #888; font-size: 0.9rem;">Invoice telah dikirim ke email Anda.</p>
            </div>

            <div class="modal-body">
                <div class="invoice-number">
                    <strong>No. Invoice:</strong> <span id="invNumber">-</span><br>
                    <strong>Tanggal:</strong> <span id="invDate">-</span>
                </div>

                <div class="row cols-2">
                    <div>
                        <div class="invoice-section">
                            <h6>Informasi Pelanggan</h6>
                            <div class="invoice-info">
                                <div id="invName"></div>
                                <div id="invPhone"></div>
                                <div id="invEmail"></div>
                                <div id="invAddress"></div>
                            </div>
                        </div>

                        <div class="invoice-section">
                            <h6>Detail Acara</h6>
                            <div class="invoice-info">
                                <div id="invWeddingDate"></div>
                                <div id="invVenue"></div>
                                <div id="invGuests"></div>
                                <div id="invSpecialRequest"></div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="sidebar-panel">
                            <h6>Rincian Pembayaran</h6>
                            <div class="summary-row">
                                <span class="summary-label">Paket</span>
                                <span class="summary-value" id="invPackage">-</span>
                            </div>
                            <div class="summary-row">
                                <span class="summary-label">Subtotal</span>
                                <span class="summary-value" id="invSubtotal">-</span>
                            </div>
                            <div class="summary-row">
                                <span class="summary-label">PPN (11%)</span>
                                <span class="summary-value" id="invTax">-</span>
                            </div>
                            <div class="summary-row total">
                                <span class="summary-label">Total</span>
                                <span class="summary-value" id="invTotal">-</span>
                            </div>
                            <div class="summary-row" style="margin-top: 1rem; color: #c9b896; font-weight: 500;">
                                <span>Down Payment (30%)</span>
                                <span id="invDP">-</span>
                            </div>
                            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb;">
                                <div style="font-size: 0.85rem; color: #888; margin-bottom: 0.5rem;">Metode Pembayaran</div>
                                <div style="font-weight: 500;" id="invPaymentMethod">-</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="window.location.href='index.php'">Tutup</button>
                <button class="btn btn-primary" onclick="window.print()">Print Invoice</button>
            </div>
        </div>
    </div>

    <!-- Footer - Updated Style -->
    <footer>
      <div class="footer-content">
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
          © 2025 ETERNELLE WEDDING. All Rights Reserved
        </div>
      </div>
    </footer>

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

