<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIMSI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
      background: #f4f4f9;
    }

    /* Header */
    header {
      background: #2c3e50;
      color: white;
      padding: 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    header img {
      height: 60px;
    }

    h1 {
      margin: 0;
      font-size: 28px;
    }

    section {
      padding: 40px 20px;
    }

    /* Container Visi Misi */
    .visi-misi-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 20px;
    }

    /* Box */
    .box {
      flex: 1 1 300px;
      background: white;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: left;
      max-width: 500px;
    }

    .box h2 {
      text-align: center;
      margin-bottom: 15px;
      color: #2c3e50;
    }

    .box p, .box li {
      font-size: 16px;
      line-height: 1.6;
    }

    ul {
      padding-left: 20px;
    }

    /* Struktur Organisasi */
    .org-chart {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
      gap: 30px;
    }

    .org-level {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 15px;
      width: 150px;
      transition: 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      border-radius: 50%;
      height: 120px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .card h3 {
      font-size: 16px;
      margin: 5px 0 0;
      color: #2c3e50;
    }

    .card p {
      font-size: 14px;
      margin: 3px 0 0;
      color: #555;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Logo_IT_Del.png/800px-Logo_IT_Del.png" alt="Logo">
    <h1>HIMSI - Himpunan Mahasiswa Sistem Informasi</h1>
  </header>

  <!-- Visi & Misi dalam 2 box -->
  <section>
    <div class="visi-misi-container">
      <!-- Visi -->
      <div class="box">
        <h2>Visi</h2>
        <p>Menjadi organisasi mahasiswa yang unggul dalam inovasi, solidaritas, dan kontribusi nyata bagi kampus dan masyarakat.</p>
      </div>

      <!-- Misi -->
      <div class="box">
        <h2>Misi</h2>
        <ul>
          <li>Meningkatkan kualitas akademik dan non-akademik anggota HIMSI.</li>
          <li>Membangun solidaritas antar mahasiswa Sistem Informasi.</li>
          <li>Berkontribusi aktif dalam pengembangan kampus dan masyarakat.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Struktur Organisasi -->
  <section>
    <h2>Struktur Organisasi</h2>
    <div class="org-chart">
      <!-- Ketua -->
      <div class="org-level">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Ketua">
          <h3>Nama Ketua</h3>
          <p>Ketua</p>
        </div>
      </div>

      <!-- Wakil -->
      <div class="org-level">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Wakil Ketua">
          <h3>Nama Wakil</h3>
          <p>Wakil Ketua</p>
        </div>
      </div>

      <!-- Sekretaris & Bendahara -->
      <div class="org-level">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Sekretaris">
          <h3>Nama Sekretaris</h3>
          <p>Sekretaris</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Bendahara">
          <h3>Nama Bendahara</h3>
          <p>Bendahara</p>
        </div>
      </div>

      <!-- Divisi -->
      <div class="org-level">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Divisi Acara">
          <h3>Nama Anggota</h3>
          <p>Divisi Acara</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Divisi IT">
          <h3>Nama Anggota</h3>
          <p>Divisi IT</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Divisi Humas">
          <h3>Nama Anggota</h3>
          <p>Divisi Humas</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
