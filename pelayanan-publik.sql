-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2021 pada 17.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan-publik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `sub_judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `penulis`, `sub_judul`, `tanggal`, `isi`, `foto`) VALUES
(1, 'Pelantikan Jabatan Pimpinan Tinggi Pratama, Administrator, dan Fungsional Oleh Sekretaris Utama BNN ', 'Oleh Humas BNN', '', '2021-08-20', '– Jakarta, Sekretaris Utama BNN RI, Drs. I Wayan Sukawinaya. M.Si memimpin secara langsung Upacara Pengambilan Sumpah dan Pelantikan Jabatan Pimpinan Tinggi Pratama, Administrator, dan Fungsional di lingkungan BNN yang bertempat di Ruang Muhammad Hatta, Cawang, Jakarta Timur pada Kamis (19/8).\r\n\r\nAdapun sebelas daftar pejabat yang dilantik hari ini, sebagai berikut :\r\n\r\n1. dr. Bina Ampera Bukit, M.kes sebagai Direktur Penguatan Lembaga Rehabilitasi Instansi Pemerintah Deputi Bidang Rehabilitasi BNN.\r\n\r\n2. Dra. Ni Wayan Sri Yudayatni Wirawati, S.I.K sebagai Kasubdit Lingkungan Kerja dan Masyarakat Direktorat Peran Serta Masyarakat Deputi Bidang Dayamas BNN.\r\n\r\n3. Drs. Sutarso, S.H.,M.Sc. sebagai Kepala Balai Rehabilitasi Tanah Merah.\r\n\r\n4. drg. Mario Leonid Supusepa sebagai Kabag Umum Balai Besar Rehabilitasi BNN.\r\n\r\n5. Maria Cristiana, AMK sebagai Perawat Penyelia Seksi Pelayanan Rehabilitasi Medis Bidang Rehabilitasi Medis Balai Besar Rehabilitasi BNN.\r\n\r\n6. NS. Fitriyah, S.Kep sebagai Perawat Ahli Muda Seksi Pelayanan Rehabilitasi Medis Bidang Rehabilitasi Medis Balai Besar Rehabilitasi BNN.\r\n\r\n7. Lince Siahaan, S.Kep. Ners sebagai Perawat Ahli Muda Seksi Pelayanan Rehabilitasi Medis Bidang Rehabilitasi Medis Balai Besar Rehabilitasi BNN.\r\n\r\n8. Desty Ekawati Setyaningrum, AMK sebagai Perawat Penyelia Seksi Pelayanan Rehabilitasi Medis Bidang Rehabilitasi Medis Balai Besar Rehabilitasi BNN.\r\n\r\n9. Atika Dwi Aryani, SKM sebagai Perawat Penyelia Seksi Pelayanan Rehabilitasi Medis Bidang Rehabilitasi Medis Balai Besar Rehabilitasi BNN.\r\n\r\n10. Iing Haerudin, S.Pd. sebagai Auditor Muda Inspektorat I (Satu) Ittama BNN.\r\n\r\n11. Widya Senjawati, A.Md. sebagai Arsiparis Mahir Biro Umum Settama BNN.\r\n\r\nDalam sambutannya Sekretaris Utama BNN RI, Drs. I Wayan Sukawinaya. M.Si menyampaikan bahwa pelantikan dan pengucapan sumpah jabatan kali ini dimaksudkan untuk pengembangan dan peningkatan kapasitas pembawaan, profesionalisme, dan kinerja pegawai serta dalam rangka memenuhi kebutuhan organisasi juga penyegaran bagi pegawai di lingkungan BNN.\r\n\r\n“saya mengucapkan selamat kepada para pejabat yang baru saja dilantik, jadikan jabatan ini sebagaimana dilaksanakan dengan penuh tanggung jawab, dan sebagaimana sumpah yang telah diucapkan”, Ujar Sekretaris Utama BNN.\r\n\r\nSekretaris Utama BNN RI, juga menambahkan kebijakan hukum dalam mengurangi peredaran Supply Reduction harus sesuai dengan kebijakan untuk mengurangi permintaan atau Demand Reduction, maka kebijakan BNN pada aspek permintaan berfokus pada pencegahan penyalahgunaan narkotika dan pelayanan rehabilitasi.\r\n\r\nSelain itu, Sekretaris Utama BNN RI, juga menyampaikan sebagai salah satu jalan yang ingin dicapai dalam menuju indonesia bersinar, BNN menjadikan kelurahan dan desa sebagai garda terdepan dalam rangka mewujudkan desa yang bersih dari narkoba dan bersinergi dengan pemerintah setempat dalam mewujudkan indonesia bersinar (Bersih Narkoba).\r\n\r\nStrategi dalam upaya pencegahan dan pemberantasan, penyalahgunaan dan peredaran gelap narkotika (P4GN) yang digelorakan oleh Kepala Badan Narkotika Nasional RI, Dr. Petrus Reinhard Golose disampaikan juga oleh Sekretaris Utama BNN RI, Drs. I Wayan Sukawinaya. M.Si bahwa BNN Memiliki tiga strategi dalam upaya pencegahan dan pemberantasan, penyalahgunaan dan peredaran gelap narkotika (P4GN), yakni Soft Power_Approach, Hard Power Approach, dan Smart Power Approach.\r\n\r\nKegiatan yang menggunakan Soft Power Approach adalah Pencegahan, Pembedayaan Masyarakat, Rehabilitasi dan Pasca Rehabilitasi. Kegiatan yang menggunakan Hard Power Approach yakni kegiatan Pemberantasan dan Smart Power Approach digunakan dengan memanfaatkan Teknologi Informasi dalam proses P4GN. Sehingga diperlukan juga peralatan yang mumpuni dan modern di BNN untuk menjadikan BNN sebagai instansi yang berprestasi dan dekat dengan masyarakat sehingga mampu menggerakkan masyarakat untuk Berani Tolak, Berani Rehab, Berani Lapor.\r\n\r\n“Kepada pejabat yang baru dilantik dan diambil sumpahnya pada hari ini saya ucapkan selamat bekerja saya berharap bahwa saudara mampu membuktikan kemampuan saudara dengan menunjukkan prestasi kerja yang baik dimasa yang mendatang, dan semoga saudara dapat beradaptasi dengan tugas dan jabatan di lingkungan kerja yang baru serta menjadikan pengalaman yang lalu sebagai sarana introspeksi dan evaluasi dimasa yang akan datang”, tutup Sekretaris Utama BNN RI. (NP)', 'https://bnn.go.id/konten/unggahan/2021/08/whatsapp-image-2021-08-20-at-8.52.01-am-2.jpeg'),
(2, 'Tingkatkan Nilai IKPA BNN Melalui Optimalisasi Kualitas Kinerja Pelaksanaan Anggaran', 'Oleh Humas BNN', '', '2021-08-20', '– Bekasi, Sekretaris Utama Badan Narkotika Nasional (BNN), Drs. I Wayan Sukawinaya, M.Si., secara daring melalui sambungan konferensi video membuka kegiatan Monitoring Penilaian Kinerja Pelaksanaan Anggaran T.A. 2021 yang diselenggarakan oleh Biro Keuangan Settama BNN, di Avenzel Hotel and Convention Cibubur, Bekasi, Jawa Barat, pada Kamis (19/8).\r\n\r\nDalam sambutannya, Sekretaris Utama BNN berharap kegiatan ini dapat meningkatkan kualitas kinerja pelaksanaan anggaran BNN sehingga mampu mendukung pencapaian tujuan dan sasaran pembangunan.\r\n\r\n“Tujuan pelaksanaan monitoring penilaian kinerja pelaksanaan anggaran adalah meningkatkan kualitas kinerja pelaksanaan anggaran BNN dengan mewujudkan pelaksanaan anggaran yang efektif, efisien, sesuai rencana serta taat pada ketentuan yang berlaku serta menjamin pencapaian output pelaksanaan anggaran BNN yang optimal, sehingga mampu mendukung pencapaian tujuan dan sasaran pembangunan”, ujar Sekretaris Utama BNN.\r\n\r\nPelaksanaan Monitoring pelaksanaan anggaran belanja merupakan kewajiban kementerian/lembaga dalam melaksanakan pengelolaan anggaran sesuai dengan Peraturan Menteri Keuangan Nomor 195/PMK.05/2018 tentang Monitoring dan Evaluasi Pelaksanaan Anggaran Belanja.\r\n\r\nMonitoring dilaksanakan untuk memantau data pelaksanaan anggaran belanja dan mengidentifikasi permasalahan yang timbul serta memperbaiki tata kelola anggaran.\r\n\r\nHasil monitoring pelaksanaan anggaran belanja dapat dimanfaatkan untuk banyak hal, salah satunya adalah untuk menilai kinerja pelaksanaan anggaran melalui perbandingan nilai kualitas kinerja antar unit organisasi dengan menggunakan indikator-indikator kinerja pelaksanaan anggaran.\r\n\r\nIndikator kinerja pelaksanaan anggaran (IKPA) adalah indikator yang ditetapkan Kementerian Keuangan selaku Bendahara Umum Negara, sebagai alat ukur untuk menentukan kualitas tingkat kinerja dari sisi kesesuaian perencanaan, efektivitas pelaksanaan anggaran, efisiensi pelaksanaan anggaran, dan kepatuhan terhadap regulasi.\r\n\r\nIKPA menjadi ukuran evaluasi kinerja pelaksanaan anggaran yang memuat 13 indikator dan mencerminkan aspek kesesuaian perencanaan dan pelaksanaan anggaran, kepatuhan terhadap regulasi, serta efektivitas dan efisiensi pelaksanaan kegiatan.\r\n\r\nOleh karena itu, pada kegiatan yang berlangsung hingga dua hari kedepan ini, satuan kerja di lingkungan BNN Pusat diharapkan mampu mewujudkan kualitas kinerja pelaksanaan anggaran yang optimal sehingga nilai IKPA satuan kerja maupun BNN secara keseluruhan dapat meningkat. (DND)', 'https://bnn.go.id/konten/unggahan/2021/08/whatsapp-image-2021-08-20-at-11.13.20-am.jpeg'),
(3, 'BNN Ikuti Rapat Paripurna DPR RI Ke-2 Secara Virtual', 'Oleh Humas BNN', '', '2021-08-19', '– Jakarta, Sekretaris Utama BNN RI, Drs. I Wayan Sukawinaya, M.Si mengikuti Rapat Paripurna DPR RI Ke-2 Masa Persidangan I Tahun 2021-2022 secara daring dari ruang kerjanya, Kamis (19/8). Dalam kesempatan ini, Sekretaris Utama BNN RI didampingi Kepala Biro Keuangan Dra. Tatiek Sufahriani, M.Si dan Kepala Biro Perencanaan, Mardiharto Tjokrowasito, S.H.,LL.M.\r\n\r\nAgenda Rapat Paripurna pada hari ini yaitu : pertama, Penyampaian Pandangan Fraksi-fraksi atas RUU tentang Pertanggungjawaban atas Pelaksanaan Pemandangan Umum Fraksi-Fraksi atas RUU APBN TA 2020. Kedua, Penyampaian Pemandangan Umum Fraksi-fraksi atas RUU APBN TA 2022 beserta Nota Keuangan. Namun sebelum kedua agenda tersebut dibahas, terlebih dahulu dilaksanakan Pelantikan Antarwaktu Anggota DPR dan MPR RI Sisa Jabatan Tahun 2019-2024, terhadap Ibnu Mahmud, Fraksi PAN Dapil DIY menggantikan Hanafi Rais.\r\n\r\nTerkait RUU tentang Pertanggungjawaban atas Pelaksanaan Pemandangan Umum Fraksi-Fraksi atas RUU APBN TA 2020, sejumlah fraksi menyoroti berbagai isu ekonomi yang masih perlu ditangani lebih maksimal. Meski demikian, seluruh fraksi memberikan apresiasi kepada pemerintah melalui Laporan Keuangan Pemerintah Pusat (LKPP) tahun 2020 yang kembali memperoleh opini Wajar Tanpa Pengecualian (WTP) dari Badan Pemeriksa Keuangan (BPK).\r\n\r\nOpini WTP atas LKPP menjadi bukti bahwa keuangan negara telah dikelola secara profesional, transparan dan akuntabel meski negeri ini masih menghadapi pandemi Covid-19 yang penuh tantangan.\r\n\r\nBerbagai fraksi juga menuntut pemerintah agar mempertajam efektivitas manfaat APBN dalam meningkatkan derajat dan kemakmuran bagi seluruh rakyat Indonesia, menekan angka pengangguran, memperkuat perlindungan sosial bagi masyarakat lapisan bawah, dan sejumlah rekomendasi lainnya demi kebaikan bersama.\r\n\r\nRapat paripurna ini dipimpin oleh Wakil Ketua DPR, Rachmat Gobel. Jumlah anggota DPR yang hadir secara fisik sebanyak 38 orang dan 275 lainnya mengikuti secara virtual. (BK)', 'https://bnn.go.id/konten/unggahan/2019/03/bg-sekretariat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `tanggal`, `level`, `nama`) VALUES
(1, 'admin@gmail.com', 'admin321', '2021-08-18', 1, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
