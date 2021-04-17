<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APM - Masyarakat</title>
    <!-- CSS / SCSS -->
    <link rel="stylesheet" href="cssSCSS/style.css" type="text/css" />
</head>
<body>
    <div class="container">
        <!-- Aside -->
        <aside>
            <div class="akun">
                <img src="img/icons-coding.png" alt="Coding Icons" />

                <h3 class="nama">Azhar Mamonto</h3>
                <p class="status">Student in <em>SMKN 2 Kotamobagu</em></p>
            </div>
            <ul>
                <li>Dashboard</li>
                <li>Laporan</li>
                <li>Detail Laporan</li>
                <li>Logout</li>
            </ul>
        </aside>
        <!-- Main -->
        <main>
            <div class="dashboard">
                <article>
                    <h1>Dashboard</h1>
                    <h3>Aplikasi Pengaduan Masyarakat</h3>
                    <p>Aplikasi Pengaduan Masyarakat adalah sistem aplikasi yang difasilitasi Pemerintah bagi Masyarakat yang ingin menamapikan adua mengenai penyalagunaan wewenang, pengabaian kewajiban, dan/atau pelanggaran yang dilakukan oleh masyarakat, pegawai di lingkungan pemerintahan. Pengaduan yang berindikasi pelanggaran akan ditindak lanjuti jika memenuhi kriteria sebagai berikut ;</p>
                    <dl>
                        <dt>What</dt>
                        <dd>Perbuatan berindikasi pelanggaran yang diakui.</dd>
                        <dt>Where</dt>
                        <dd>Dimana perbuatan tersebut dilakukan.</dd>
                        <dt>When</dt>
                        <dd>Kapan perbuatan tersebut dilakukan.</dd>
                        <dt>Who</dt>
                        <dd>Siapa saja yang terlibat dalam perbuatan itu.</dd>
                        <dt>How</dt>
                        <dd>Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb).</dd>
                    </dl>
                    <a href="https://dumas.kominfo.go.id/">Sumber</a>
                </article>
                <h3>Alur Penggaduan</h3>
                <img src="#" alt="Alur Pengaduan Masyarakat" />    
            </div>
            <div class="laporan">
                <h1>Laporkan</h1>
                <form action="">
                    <label for="jdl">Judul Laporan</label>
                    <input type="text" name="jdl" id="jdl" maxlenght="10" required />

                    <label for="tempat">Tempat</label>
                    <input type="text" name="tempat" id="tempat" required />

                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" required/>

                    <label for="isi-laporan">Isi Laporan</label>
                    <textarea name="isi-laporan" id="isi-laporan" cols="30" rows="10" required></textarea>

                    <label for="bukti">Bukti</label>
                    <input type="file" name="bukti" id="bukti"  required />

                    <button type="submit">Kirim</button>
                </form>
            </div>
            <div class="detail-laporan">
            <h1>Detail Laporan</h1>
                <table border="1">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Judul Laporan</th>
                            <th>Tempat</th>
                            <th>Isi Laporan</th>
                            <th>Status Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kerusakan Jalan</td>
                            <td>Jln Desa</td>
                            <td>Jalan rusak di sepanjang jalan Desa Fulan</td>
                            <td>Menunggu Konfirmasi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main> 
    </div> 
    
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>