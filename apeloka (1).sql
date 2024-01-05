-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 09.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apeloka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `gaji` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `gambar`, `judul`, `perusahaan`, `lokasi`, `pendidikan`, `gaji`, `gender`, `pengalaman`, `deskripsi`, `id_kategori`) VALUES
(36, 'hpygng.jpg', 'Operator Mesin', 'HappyGang||WordsHub', 'Purbalingga, Jawa Tengah', 'SMA/SMK/Sederajat', 1800000, 'Laki-Laki', 'Tidak Ada Ketentuan', '-Mengoperasikan mesin press sablon kaos-Mampu menyelesaikan target harian-Mencegah kerusakan barang produksi-Mampu bekerja dibawah tekanan', 3),
(37, 'ahm.jpg', 'Marketing Manager', 'PT Asta Honda Motor(AHM)', 'Purwokerto, Jawa Tengah', 'S1/S2', 8000000, 'Laki/Perempuan', 'Minimal 3 Tahun', ' Lowongan Marketing Manager  PT Astra Honda Motor  Deskripsi Pekerjaan  Marketing Manager bertanggung jawab untuk mengembangkan dan mengimplementasikan strategi pemasaran untuk meningkatkan penjualan dan pangsa pasar sepeda motor Honda di Indonesia.', 6),
(38, 'fox_bunny.jpg', 'Data Scientist', 'Fox And Bunny', 'Purwokerto, Jawa Tengah', 'Minimal S1', 7000000, 'Perempuan', 'Minimal 1 Tahun', 'Menyusun dan melaksanakan rencana penelitian dan pengembangan untuk meningkatkan kualitas produk dan layanan Fox and Bunny. Mengumpulkan, membersihkan, dan menganalisis data dari berbagai sumber. Membangun model data dan algoritma untuk memprediksi tren dan perilaku konsumen. Mengkomunikasikan hasil penelitian dan analisis kepada tim manajemen dan pemangku kepentingan lainnya', 4),
(39, 'chisel.jpg', 'Teknisi', 'Chisel Computer', 'Purwokerto, Jawa Tengah', 'D3/S1', 3500000, 'Laki-Laki', 'Tidak Ada Ketentuan', 'Melakukan instalasi, konfigurasi, dan pemeliharaan perangkat keras komputer Melakukan troubleshooting dan perbaikan perangkat keras komputer Melakukan pengembangan dan uji coba perangkat keras komputer', 4),
(40, 'bimbel.jpg', 'Guru Bimbel', 'Bimbel Cerdas', 'Purwokerto, Jawa Tengah', 'SMA/SMK/MA', 1500000, 'Laki/Perempuan', 'Tidak Ada Ketentuan', 'Mengajar siswa/siswi dalam mengerjakan PR dan/atau Tugas Sekolah Mengajar siswa/siswi dalam mempersiapkan Test/Ujian/Ulangan Mengajar siswa/siswi untuk dapat berprestasi di sekolah', 2),
(41, 'gacoan.jpg', 'Pramusaji', 'Mie Gacoan', 'Purwokerto, Jawa Tengah', 'SMA/SMK/MA', 1800000, 'Perempuan', 'Tidak Ada Ketentuan', 'Dapat bekerja dengan sistem shift, memiliki kemampuan komunikasi yang baik, mampu bekerja dalam tim', 3),
(42, 'kai.jpg', 'Cleaning Service', 'Kereta Api Indonesia', 'Purwokerto, Jawa Tengah', 'SMA/SMK/MA', 2000000, 'Laki-Laki', 'Tidak Ada Ketentuan', 'Memiliki kemampuan komunikasi yang baik, Mampu bekerja dalam tim, Ulet dan jujur, Berpenampilan rapi', 3),
(43, 'osmo.jpg', 'Admin Digital Marketing International', 'Kids Education Toys', 'Purwokerto, Jawa Tengah', 'D3/S1', 2000000, 'Perempuan', 'Minimal 1 Tahun', 'Paham tentang produk anak atau mainan, bekerja dari rumah, menguasai MS.Excel & MS.Word', 3),
(44, 'sumber-bahagia.jpg', 'Desain Grafis', 'Sumber Bahagia', 'Purwokerto, Jawa Tengah', 'SMA/SMK/Sederajat', 3000000, 'Laki-Laki', 'Minimal 1 Tahun', 'Menguasai software design(CDR/PSD/AI), Menyukai bidang design dan printing', 3),
(45, 'aksa.jpg', 'Admin', 'Aksa Store', 'Banjarnegara, Jawa Tengah', 'SMA/SMK/Sederajat', 1350000, 'Laki/Perempuan', 'Tidak Ada Ketentuan', 'Mampu menjamin tingkat kepuasan pelanggan, mampu berkomunikasi dengan baik', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sales'),
(2, 'Pendidikan'),
(3, 'Staff'),
(4, 'It'),
(6, 'Marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenjang_pendidikan` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no_wa` int(13) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id`, `nama_lengkap`, `jenjang_pendidikan`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_wa`, `cv`) VALUES
(15, 'Abdoel Koesnandi', 'SMK', '2002-06-07', 'Laki-Laki', 'Karang Petir, Purbalingga, Jawa Tengah', 2147483647, 'Abdoel_CV.pdf'),
(16, 'Sidiq Sobari', 'S1', '2000-09-06', 'Laki-Laki', 'Padamara, Purbalingga, Jawa Tengah', 2147483647, 'Sidiq_CV.pdf'),
(17, 'Siti Maemoen', 'SMP', '2005-03-22', 'Perempuan', 'Grendeng, Purwokerto, Banyumas, Jawa Tengah', 2147483647, 'Siti_CV.pdf'),
(18, 'Gerry Ramadhani', 'S1', '2000-05-02', 'Perempuan', 'Mrebet, Purbalingga, Jawa Tengah', 2147483647, 'Gerry_CV.pdf'),
(19, 'Jessica Christy', 'SMA', '2002-02-05', 'Perempuan', 'Datar, Banyumas, Jawa Tengah', 2147483647, 'Jessica_CV.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Anggota', 'anggota@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
