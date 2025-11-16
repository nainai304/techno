<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hubungi Kami - Eternelle Wedding</title>
  <style>
    :root {
      --accent: #0ea5a4;
      --muted: #6b7280;
      --card: #ffffff;
      --shadow: 0 8px 20px rgba(15, 23, 42, 0.08);
      --radius: 12px;
      --bg: #f9fafb;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: #0f172a;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
    }

    .contact-section {
      width: 100%;
      max-width: 600px;
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 32px;
    }

    .contact-section h2 {
      margin-top: 0;
      font-size: 26px;
      text-align: center;
    }

    .contact-section p {
      color: var(--muted);
      text-align: center;
      margin-bottom: 24px;
    }

    form.contact-form {
      display: grid;
      gap: 12px;
    }

    input, textarea {
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid #e5e7eb;
      font-size: 15px;
      width: 100%;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .actions {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-top: 10px;
    }

    button {
      cursor: pointer;
      border: none;
      padding: 10px 16px;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.2s;
    }

    .btn-primary {
      background: var(--accent);
      color: white;
    }

    .btn-primary:hover {
      background: #089e9d;
    }

    .btn-ghost {
      background: transparent;
      border: 1px solid #d1d5db;
    }

    .btn-ghost:hover {
      background: #f3f4f6;
    }
  </style>
  <link rel="icon" href="foto/LOGO 2.jpg">
</head>
<body>
  <section class="contact-section" id="kontak">
    <h2>Hubungi Kami</h2>
    <p>Tinggalkan pesan, dan tim Eternelle akan menghubungi Anda untuk konsultasi gratis.</p>
    <form class="contact-form" onsubmit="submitContact(event)">
      <input type="text" id="cName" placeholder="Nama lengkap" required />
      <input type="email" id="cEmail" placeholder="Email" required />
      <input type="text" id="cPhone" placeholder="No. WhatsApp (opsional)" />
      <textarea id="cMessage" placeholder="Ceritakan rencana singkat Anda..." required></textarea>
      <div class="actions">
        <button class="btn-primary" type="submit">Kirim Pesan</button>
        <button class="btn-ghost" type="button" onclick="startChat()">Chat WA</button>
      </div>
    </form>
  </section>

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
</body>
</html>
