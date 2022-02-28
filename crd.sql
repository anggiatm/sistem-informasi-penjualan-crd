-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crd`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(255) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `produk`, `nama_barang`, `unit`, `harga`, `keterangan`) VALUES
('01-003', 'Fabrikasi', 'Etalase', 'Unit', 800000, ''),
('01-004', 'Fabrikasi', 'Pagar Besi', 'Unit', 40000, ''),
('01-005', 'Fabrikasi', 'Pintu', 'Unit', 1000000, ''),
('01-006', 'Fabrikasi', 'Tralis Besi', 'Unit', 250000, ''),
('01-007', 'Fabrikasi', 'Pagar Galvalum', 'Unit', 600000, ''),
('01-008', 'Fabrikasi', 'Pintu Sliding', 'Unit', 1000000, ''),
('01-009', 'Fabrikasi', 'Ranjang Satinless', 'Unit', 2000000, ''),
('01-010', 'Fabrikasi', 'Folding Gate Galvalum', 'Unit', 1000000, ''),
('01-011', 'Fabrikasi', 'Partisi Kusen Almunium', 'Unit', 5000000, ''),
('01-012', 'Fabrikasi', 'Kusen', 'Unit', 1000000, ''),
('01-013', 'Fabrikasi', 'Lang Rokok', 'Unit', 270000, ''),
('01-014', 'Fabrikasi', 'Partisi Kusen', 'Set', 1000000, ''),
('01-015', 'Fabrikasi', 'Jendela Alumunium', 'Unit', 1000000, ''),
('01-016', 'Fabrikasi', 'Pitntu + Kusen Almunium', 'Unit', 2000000, ''),
('01-017', 'Fabrikasi', 'Gerobak Motor', 'Unit', 1000000, ''),
('01-020', 'Fabrikasi', 'Partisi Alumunium', 'Unit', 2000000, ''),
('01-021', 'Fabrikasi', 'Rolling Door Galvalum', 'Unit', 1000000, ''),
('01-022', 'Fabrikasi', 'Rak Piring', 'Unit', 1500000, ''),
('01-023', 'Fabrikasi', 'Rak Piring Lain-Lain', 'Unit', 1000000, ''),
('01-024', 'Fabrikasi', 'Pintu Stainless', 'Unit', 1700000, ''),
('01-025', 'Fabrikasi', 'Tralis Stainless', 'Meter', 700000, ''),
('01-026', 'Fabrikasi', 'Canopy', 'Unit', 1800000, ''),
('01-027', 'Fabrikasi', 'Kitchen Set', 'Unit', 1000000, ''),
('01-028', 'Fabrikasi', 'Kitchen Set Lain-Lain', 'Unit', 1000000, ''),
('01-029', 'Fabrikasi', 'Lain - Lain (Custom)', 'Unit', 1000000, ''),
('01-030', 'Fabrikasi', 'Partisi Kaca', 'Unit', 1000000, ''),
('01-031', 'Fabrikasi', 'Partisi Isi Ulang', 'Unit', 2000000, ''),
('01-032', 'Fabrikasi', 'Jendela Casement', 'Unit', 500000, ''),
('01-033', 'Fabrikasi', 'Kusen kaca Mati', 'Unit', 1000000, ''),
('01-034', 'Fabrikasi', 'Gerobak', 'Unit', 1000000, ''),
('01-035', 'Fabrikasi', 'Lemari', 'Unit', 2000000, ''),
('01-036', 'Fabrikasi', 'Gerbang Besi', 'Unit', 2000000, ''),
('01-037', 'Fabrikasi', 'Gerbang Aluminium', 'Unit', 2500000, ''),
('02-007', 'Satuan', 'Holo 4x4', 'Unit', 140000, ''),
('02-008', 'Satuan', 'Sekrup 1cm', 'Pcs', 200, ''),
('02-009', 'Satuan', 'Jemuran Lipat', 'Unit', 800000, ''),
('02-010', 'Satuan', 'Karet 056', 'Roll', 45000, ''),
('02-011', 'Satuan', 'Slot 0.3 Galvalum', 'Pcs', 20000, ''),
('02-012', 'Satuan', 'Bottom Galvalum', 'Pcs', 20000, ''),
('02-013', 'Satuan', 'Guidrait Galvalum', 'Pcs', 20000, ''),
('02-014', 'Satuan', 'Per 30cm', 'Pcs', 20000, ''),
('02-015', 'Satuan', 'Pulley Rolling Door', 'Pcs', 30000, ''),
('02-016', 'Satuan', 'Paku Rivet', 'Pcs', 200, ''),
('02-017', 'Satuan', 'Kupingan Rolling Door', 'Pcs', 500, ''),
('02-018', 'Satuan', 'Kunci + Slot', 'Set', 30000, ''),
('02-019', 'Satuan', 'Handle', 'Pcs', 20000, ''),
('02-020', 'Satuan', 'Metal Bracket', 'Pcs', 30000, ''),
('02-021', 'Satuan', 'Baut Panjang', 'Pcs', 1000, ''),
('02-022', 'Satuan', 'Baut Pendek', 'Pcs', 500, ''),
('02-023', 'Satuan', 'Siku 5/8 CA', 'Batang', 20000, ''),
('02-024', 'Satuan', 'Per 25cm', 'Pcs', 45000, ''),
('02-025', 'Satuan', 'Tiang Rolling Door', 'Batang', 120000, ''),
('03-001', 'Service', 'Service Rak Piring', '', 30000, ''),
('03-002', 'Service', 'Ganti Engsel', 'Unit', 800000, ''),
('03-003', 'Service', 'Jasa Las', 'Unit', 200000, ''),
('03-004', 'Service', 'Service Rolling Door', 'Unit', 500000, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `no_order` varchar(255) NOT NULL,
  `nama_pesanan` varchar(255) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `total_barang` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `uang_muka` int(255) NOT NULL,
  `sisa` int(255) NOT NULL,
  `kontruksi` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`no_order`, `nama_pesanan`, `tgl_pesan`, `tgl_selesai`, `id_pelanggan`, `total_barang`, `total_harga`, `uang_muka`, `sisa`, `kontruksi`, `driver`, `status`, `note`) VALUES
('010720-01', 'Rolling Door', '2020-07-01', '2020-07-09', '00112', 1, 1700000, 0, 0, '', '', 'selesai-dikirim', ''),
('010720-02', 'Pintu Sliding', '2020-07-01', '2020-07-08', '00113', 1, 1400000, 0, 0, ' mora', '', 'selesai-dikirim', ''),
('030720-01', 'Balkon Stainlee Pipa ', '2020-07-03', '2020-07-14', '00111', 1, 5000000, 3000000, 0, '', '', 'selesai-dikirim', 'Model GSL 196'),
('030820-01', 'Rangka Rak Piring', '2020-08-03', '2020-08-10', '00087', 1, 1000000, 1000000, 0, '', '', 'selesai-dikirim', ''),
('031120-01', 'Kusen', '2020-11-03', '2020-11-09', '00036', 10, 2404000, 1000000, 0, ' iyang', ' acu', 'selesai-dikirim', 'pelunasan tranfer rek BCA a/n Anissa 74581875'),
('040820-01', 'F.G Galvalum', '2020-08-04', '2020-08-08', '00083', 1, 5300000, 2000000, 0, '', '', 'selesai-dikirim', ''),
('060720-01', 'Gerbang Minimalis', '2020-07-06', '2020-07-14', '00110', 2, 3500000, 1500000, 0, '', '', 'selesai-dikirim', ''),
('070720-01', 'Kitchen Set Bawah', '2020-07-07', '2020-07-13', '00105', 1, 850000, 0, 0, '', '', 'selesai-dikirim', ''),
('070720-02', 'Folding Gate', '2020-07-07', '2020-07-14', '00089', 3, 6500000, 1000000, 0, '', '', 'selesai-dikirim', ''),
('070720-03', 'Folding Gate', '2020-07-07', '2020-07-13', '00108', 1, 3500000, 0, 0, '', '', 'selesai-dikirim', ''),
('070720-04', 'Gerobak Almunium', '2020-07-07', '2020-07-13', '00109', 1, 3000000, 3000000, 0, '', '', 'selesai-dikirim', ''),
('070820-01', 'Etalase', '2020-08-07', '2020-08-13', '00063', 1, 800000, 0, 0, '', '', 'selesai-dikirim', 'tukar tambah etalase 2 unit'),
('080720-01', 'Balkon Relling Minimalis', '2020-07-08', '2020-07-14', '00088', 4, 1400000, 400000, 0, '', '', 'selesai-dikirim', ''),
('080720-02', 'Gerobak Motor', '2020-07-08', '2020-07-14', '00106', 1, 1200000, 200000, 0, '', '', 'selesai-dikirim', ''),
('080720-03', 'Lemari Baju', '2020-07-08', '2020-07-14', '00107', 2, 4000000, 2000000, 0, '', '', 'selesai-dikirim', ''),
('080820-01', 'Partisi Kusen Almunium', '2020-08-08', '2020-08-14', '00043', 1, 13000000, 6500000, 0, '', '', 'selesai-dikirim', ''),
('090720-01', 'Kaca Lampu Ottava', '2020-07-09', '2020-07-11', '00104', 1, 300000, 300000, 0, '', '', 'selesai-dikirim', ''),
('090920-02', 'Langroko', '2020-09-09', '2020-09-09', '00039', 1, 270000, 150000, 0, '', '', 'selesai-dikirim', ''),
('090920-03', 'Etalase Second', '2020-09-09', '2020-09-09', '00085', 1, 800000, 800000, 0, '', '', 'selesai-dikirim', ''),
('090920-04', 'Partisi Kusen', '2020-09-09', '2020-09-09', '00092', 0, 0, 0, 0, '', '', 'selesai-dikirim', ''),
('100720-01', 'Etalase', '2020-07-10', '2020-07-15', '00102', 1, 900000, 0, 0, '', '', 'selesai-dikirim', ''),
('100720-02', 'Etalase Counter', '2020-07-10', '2020-07-14', '00103', 1, 1100000, 500000, 0, '', '', 'selesai-dikirim', ''),
('120820-01', 'Tralis Besi Minimalis', '2020-08-12', '2020-08-18', '00034', 10, 6100000, 3000000, 0, '', '', 'selesai-dikirim', ''),
('120820-02', 'Etalase', '2020-08-12', '2020-08-18', '00042', 1, 700000, 0, 0, '', '', 'selesai-dikirim', ''),
('130820-01', 'Rak Kompor', '2020-08-13', '2020-08-19', '00099', 1, 900000, 400000, 0, '', '', 'selesai-dikirim', ''),
('140720-01', 'Aksesoris Rolling Door', '2020-07-14', '2020-07-17', '00039', 8, 555000, 300000, 0, '', '', 'selesai-dikirim', ''),
('150720-01', 'Gerobak Ciken', '2020-07-15', '2020-07-21', '00039', 1, 2700000, 200000, 0, '', '', 'selesai-dikirim', ''),
('160720-01', 'Aksesoris Rolling Door', '2020-07-16', '2020-07-18', '00101', 375, 1200000, 800000, 0, '', '', 'selesai-dikirim', ''),
('170720-01', 'Jendela', '2020-07-17', '2020-07-23', '00100', 3, 3200000, 2000000, 0, '', '', 'selesai-dikirim', ''),
('180720-01', 'Partisi Alumunium', '2020-07-18', '2020-07-24', '00086', 3, 5700000, 0, 0, '', '', 'selesai-dikirim', ''),
('180820-01', 'Geribak Sosis', '2020-08-18', '2020-08-25', '00098', 1, 1000000, 0, 0, '', '', 'selesai-dikirim', ''),
('181120-01', 'Kusen Haji Dedi', '2020-11-18', '2020-11-24', '00097', 4, 4300000, 2000000, 0, ' iyang', ' acu', 'selesai-dikirim', '- Tranfer BCA a/n anissa 0657442123'),
('191120-01', 'Pagar Besi', '2020-11-19', '2020-11-25', '00087', 3, 3400000, 2000000, 0, ' iyang', '', 'dalam-perakitan', ''),
('200720-01', 'Jendela Double', '2020-07-20', '2020-07-22', '00097', 1, 1500000, 1000000, 0, '', '', 'selesai-dikirim', ''),
('200820-01', 'Langroko', '2020-08-20', '2020-08-26', '00039', 1, 270000, 150000, 0, '', '', 'selesai-dikirim', ''),
('200820-02', 'Pintu + Kusen', '2020-08-20', '2020-08-26', '00061', 1, 2000000, 0, 0, '', '', 'selesai-dikirim', ''),
('200820-03', 'Kaca', '2020-08-20', '2020-08-20', '00062', 5, 200000, 0, 0, '', '', 'selesai-dikirim', ''),
('200820-04', 'Langroko', '2020-08-20', '2020-08-22', '00044', 1, 270000, 0, 0, '', '', 'selesai-dikirim', ''),
('200820-05', 'Service engsel', '2020-08-20', '2020-08-26', '00035', 2, 2300000, 2300000, 0, '', '', 'selesai-dikirim', ''),
('210720-01', 'Tralus Stainless', '2020-07-21', '2020-07-27', '00089', 9, 7000000, 200000, 0, '', '', 'selesai-dikirim', ''),
('210720-02', 'Pintu, Jendela, Kusen', '2020-07-21', '2020-07-27', '00095', 7, 8500000, 2000000, 0, '', '', 'selesai-dikirim', ''),
('210720-03', 'Frame Almunium', '2020-07-21', '2020-07-27', '00096', 1, 610000, 0, 0, '', '', 'selesai-dikirim', 'Rek BCA 7\n60501633 a/n Anissa'),
('210820-01', 'karet + capit udang', '2020-08-21', '2020-08-21', '00040', 13, 80000, 0, 0, '', '', 'selesai-dikirim', ''),
('211120-01', 'Aksesoris Rolling Door', '2020-11-21', '2020-11-27', '00036', 2, 4000000, 1000000, 0, ' iyang', ' acu', 'selesai-dikirim', ''),
('220820-01', 'Ranjang Stainless', '2020-08-22', '2020-08-28', '00037', 3, 3800000, 3000000, 0, '', '', 'selesai-dikirim', ''),
('230720-01', 'Kitchen Set', '2020-07-23', '2020-07-29', '00090', 1, 1600000, 0, 0, '', '', 'selesai-dikirim', ''),
('230720-02', 'Tutup Pintu Carbonet', '2020-07-23', '2020-07-29', '00039', 1, 600000, 600000, 0, '', '', 'selesai-dikirim', ''),
('230720-03', 'Tralis Besi Minimalis', '2020-07-23', '2020-07-30', '00090', 1, 1000000, 1000000, 0, '', '', 'selesai-dikirim', ''),
('230720-04', 'Rolling Door', '2020-07-23', '2020-07-30', '00094', 1, 3350000, 1500000, 0, '', '', 'selesai-dikirim', ''),
('231020-27', 'Jendela', '2020-10-23', '2020-10-24', '00044', 1, 1000000, 0, 0, 'selesai-dikirim', '', '', ''),
('231020-40', '', '2020-10-23', '2020-10-23', '00044', 0, 0, 0, 0, '', '', 'selesai-dikirim', ''),
('231020-41', '', '2020-10-23', '2020-10-23', '00044', 0, 0, 0, 0, '', '', 'selesai-dikirim', ''),
('231020-46', 'Aksesoris Rolling Door', '2020-10-23', '2020-10-23', '00044', 0, 0, 0, 0, '', '', 'selesai-dikirim', ''),
('231020-48', 'Pagar', '2020-10-23', '2020-10-23', '00044', 3, 4500000, 0, 0, '', '', 'selesai-dikirim', ''),
('231020-49', 'Kusen', '2020-10-23', '2020-10-23', '00044', 4, 5500000, 0, 0, '', '', 'selesai-dikirim', ''),
('231020-50', 'Kusen Pintu Aluminium', '2020-10-23', '2020-10-23', '00169', 1, 7500000, 5000000, 0, '', '', 'selesai-dikirim', 'Garansi door Closer + Engsel pintu\nRek BCA 1290718046 a/n Adi Rahmat Hidayat'),
('231020-51', 'Kusen Pintu Aluminium', '2020-10-23', '2020-10-23', '00169', 1, 7500000, 5000000, 0, '', '', 'selesai-dikirim', '- Garansi Door Closer + Engsel Pintu (3 bulan)\n\n- Rek BCA 1290718046 a/n Adi Rahmat Hidayat'),
('240720-01', 'Partisi Kusen', '2020-07-24', '2020-07-30', '00046', 2, 5000000, 500000, 0, '', '', 'selesai-dikirim', ''),
('240720-02', 'Canopy', '2020-07-24', '2020-08-01', '00046', 1, 14500000, 5000000, 0, '', '', 'selesai-dikirim', ''),
('240720-03', 'Partisi isi Ulang', '2020-07-24', '2020-07-30', '00093', 1, 2750000, 500000, 0, '', '', 'selesai-dikirim', ''),
('240920-01', 'Lemari Baju, Rak Piring', '2020-09-24', '2020-10-08', '00136', 2, 4400000, 2000000, 0, 'selesai-dikirim', '', '', ''),
('250720-01', 'Pintu Double + Jendela', '2020-07-25', '2020-08-01', '00043', 4, 9025000, 5025000, 0, '', '', 'selesai-dikirim', ''),
('260820-01', 'Pintu Kamar Mandi', '2020-08-26', '2020-09-01', '00036', 1, 1300000, 1300000, 0, '', '', 'selesai-dikirim', ''),
('260820-02', 'Folding Gate', '2020-08-26', '2020-09-02', '00038', 1, 3000000, 0, 0, '', '', 'selesai-dikirim', ''),
('281020-01', 'Partisi Kusen', '2020-10-28', '2020-11-04', '00173', 2, 3500000, 3000000, 0, ' iyang', ' acu', 'selesai-dikirim', ''),
('281020-02', 'Aksesoris Rolling Door', '2020-10-28', '2020-10-28', '00034', 1, 45000, 0, 45000, ' iyang', ' acu', 'dalam-pengiriman', ''),
('281020-03', 'Partisi Kusen', '2020-10-28', '2020-10-28', '00033', 1, 1000000, 0, 1000000, '', '', 'dalam-antrian', ''),
('290720-01', 'Partisi Kaca', '2020-07-29', '2020-08-06', '00091', 1, 1300000, 1300000, 0, '', '', 'selesai-dikirim', ''),
('290820-01', 'Service Rollingdoor', '2020-08-29', '2020-08-29', '00039', 1, 350000, 350000, 0, '', '', 'selesai-dikirim', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `orders_item` (
  `no_order` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`no_order`, `id_barang`, `qty`, `spesifikasi`, `unit`, `harga`, `jumlah`) VALUES
('090920-01', '', 1, '', 'Unit', 0, 0),
('040820-01', '', 1, 'F.G Galvalum\nP x T (285x228)\nSilangan ekstra super\nump super full\ncat putih', 'Unit', 5300000, 5300000),
('070820-01', '01-003', 1, 'p x l x t\n(170x100x40)\nroda siku 3in', 'Unit', 800000, 800000),
('260820-01', '01-005', 1, 'Pintu Kamar Mandi\nT x L (190x60)\nCA 3in', 'Unit', 1300000, 1300000),
('260820-02', '01-010', 1, 'Folding Gate 0.4 Galvalum\nT x L (240x280)', 'Unit', 3000000, 3000000),
('220820-01', '01-009', 1, 'P x L x T (200 160x30)\nbonus tempat pot 2 buah', 'Unit', 3800000, 3800000),
('220820-01', '02-009', 1, '', 'Unit', 0, 0),
('220820-01', '03-003', 1, '', 'Unit', 0, 0),
('220920-01', '01-005', 1, 'Pintu Minimalis Lisplang\nLxT (230x117)', 'Unit', 1200000, 1200000),
('220920-01', '02-01-002', 1, '120x90', 'Unit', 165000, 165000),
('090920-02', '01-013', 1, 'Langrokok + kunci\nTxLxP (45x25x50)', 'Unit', 270000, 270000),
('200820-01', '01-013', 1, 'Langroko + kunci \nTxLxP (45x25x50)', 'Unit', 270000, 270000),
('200820-02', '01-011', 1, 'T x L (190+15 x 80)\ncomposit + kaca riben', 'Unit', 2000000, 2000000),
('200820-03', '02-01-002', 2, '95x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 2, '15x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 1, '95x16', '', 100000, 100000),
('200820-03', '02-01-002', 2, '95x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 2, '15x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 1, '95x16', '', 100000, 100000),
('200820-03', '02-01-002', 2, '95x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 2, '15x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 1, '95x16', '', 100000, 100000),
('200820-03', '02-01-002', 2, '95x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 2, '15x42', 'Unit', 25000, 50000),
('200820-03', '02-01-002', 1, '95x16', '', 100000, 100000),
('200820-04', '01-013', 1, 'LangRokok + kunci', 'Unit', 270000, 270000),
('210820-01', '02-010', 1, '', 'Set', 44000, 44000),
('210820-01', '02-011', 12, '', 'Pcs', 3000, 36000),
('290820-01', '03-004', 1, 'AS 285 + Pulley RD', 'Unit', 350000, 350000),
('200820-05', '03-002', 1, 'Ganti Engsel\nglass to glass\n', 'Unit', 800000, 800000),
('200820-05', '01-008', 1, 'Kaca Mati + Pintu sliding\nkaca sudah ada', 'Unit', 1500000, 1500000),
('120820-01', '01-006', 9, 'Tralis Besi Minimalis', 'Unit', 250000, 2250000),
('120820-01', '01-007', 1, 'T x L (2x3.5 m)', 'Unit', 3850000, 3850000),
('120820-02', '01-003', 1, 'T x L x P (60 x 40/30 x120)', 'Unit', 700000, 700000),
('120820-02', '01-003', 1, 'T x L x P (60 x 40/30 x120)', 'Unit', 700000, 700000),
('080820-01', '01-011', 1, 'T x L (224x275)\nKaca Polos\nKuse 4in Hitam Doff', 'Unit', 13000000, 13000000),
('090920-03', '01-003', 1, 'Etalase second  \nT x L x P (100x45x150)\n+ kunci (sambungan kaca)\n+ roda siku', 'Unit', 800000, 800000),
('180720-01', '01-020', 1, '', 'Set', 3200000, 3200000),
('180720-01', '01-021', 1, 'P x T (190x240)', 'Unit', 1600000, 1600000),
('180720-01', '02-011', 1, 'kaca cermin + frame\nP x L (40x50)', 'Set', 900000, 900000),
('030820-01', '01-023', 1, 'Rangka Rak Piring\nT x L x P (150x45x90)', 'Unit', 1000000, 1000000),
('080720-01', '', 4, 'Balkon Relling Minimalis', 'Meter', 350000, 1400000),
('210720-01', '01-024', 1, '', 'Unit', 1400000, 1400000),
('210720-01', '01-025', 8, '', 'Meter', 700000, 5600000),
('240720-01', '01-014', 1, 'Partisi Kusen 3in Alexindo\nP x T (300x210)', 'Set', 5000000, 5000000),
('240720-01', '01-015', 1, 'L x T (100x70)', 'Unit', 0, 0),
('240720-02', '01-026', 1, 'Canopy + Atap Alderon', 'Unit', 14500000, 14500000),
('250720-01', '01-005', 1, 'Pintu Double + Variasi\nT x L (228x160)', 'Unit', 5000000, 5000000),
('250720-01', '01-015', 2, 'Jendela Casement\nT x L (143x60)', 'Unit', 1000000, 2000000),
('250720-01', '01-005', 1, 'Pintu Single + Variasi\nT x L (228x80)\n*kusen 4inch Hitam', 'Unit', 2025000, 2025000),
('230720-01', '01-028', 1, 'Kitchen Set Bawah\n*gambar terlampir', 'Unit', 1600000, 1600000),
('230720-02', '', 1, 'Tutup Pintu Carbonet\ntambahan kunci slot\n+ 7 buah bingkai', 'Unit', 600000, 600000),
('230720-03', '01-006', 1, 'Tralis Besi Minimalis\nT x L (55x65) cat putih', 'Unit', 1000000, 1000000),
('290720-01', '01-030', 1, 'Partisi Kaca +Baracket\n3 Hambal', 'Unit', 1300000, 1300000),
('090920-04', '', 1, '', 'Unit', 0, 0),
('240720-03', '01-031', 1, 'Partisi Isi Ulang\nT x L x P (200x45x120)', 'Unit', 2750000, 2750000),
('230720-04', '01-021', 1, 'Rolling Door Galvalum\nP x T (230=15 x200)', 'Unit', 3350000, 3350000),
('210720-02', '01-005', 1, 'Pintu Double + Door Closer', 'Unit', 1500000, 1500000),
('210720-02', '01-032', 4, 'Jendela Casement', 'Unit', 1000000, 4000000),
('210720-02', '01-033', 2, 'Kusen kaca Mati\n*kaca riben 5mm\n*4in hitam coating', 'Unit', 1500000, 3000000),
('210720-03', '01-029', 1, 'Frame Almunium \nP x L (100x60)  + kaca\nP x L (100x60)  2unit', 'Unit', 610000, 610000),
('200720-01', '01-015', 1, 'Jendela Alumunium\nP x T (88 x155)\nKaca Riben', 'Unit', 1500000, 1500000),
('180820-01', '01-034', 1, 'Gerobak Sosis\nT x L x P (180x60x150)\n*Ban motor + tutup', 'Unit', 1000000, 1000000),
('130820-01', '01-029', 1, 'Rak Kompor\nT x L x P (85x45x120)\n*Kramik coklat, kaca riben', 'Unit', 900000, 900000),
('170720-01', '01-029', 1, 'Lain - Lain (Custom)', 'Unit', 1200000, 1200000),
('170720-01', '01-015', 2, 'Jendela Alumunium Single\nT x L (154x69)\n* 3in coklat coating\n*riben', 'Unit', 1000000, 2000000),
('150720-01', '01-034', 1, 'Gerobak Chicken\nT x L x P (180x60x150)\n* Roda 3in + dudukan lampu', 'Unit', 2700000, 2700000),
('160720-01', '02-011', 20, 'Slot 0.3 Galvalum', 'Batang', 30000, 600000),
('160720-01', '02-012', 1, 'Bottom Galvalum', 'Batang', 30000, 30000),
('160720-01', '02-013', 2, 'Guidrait Galvalum', 'Batang', 20000, 40000),
('160720-01', '02-014', 2, 'Per 30cm', 'Pcs', 20000, 40000),
('160720-01', '02-015', 2, 'Pulley Rolling Door', 'Pcs', 35000, 70000),
('160720-01', '02-016', 300, 'Paku Rivet', 'Pcs', 500, 150000),
('160720-01', '02-017', 30, 'Kupingan Rolling Door', 'Pcs', 1000, 30000),
('160720-01', '02-018', 1, 'Kunci + Slot', 'Set', 50000, 50000),
('160720-01', '02-019', 2, 'Handle', 'Pcs', 20000, 40000),
('160720-01', '02-020', 2, 'Metal Bracket', 'Pcs', 30000, 60000),
('160720-01', '02-021', 4, 'Baut Panjang', 'Pcs', 3250, 13000),
('160720-01', '02-022', 8, 'Baut Pendek', 'Pcs', 1500, 12000),
('160720-01', '02-023', 1, 'Siku 5/8 CA', 'Batang', 65000, 65000),
('140720-01', '02-024', 5, 'Per 25cm', 'Pcs', 45000, 225000),
('140720-01', '02-012', 1, 'Bottom Galvalum (6m)', 'Pcs', 90000, 90000),
('140720-01', '02-025', 2, 'Tiang Rolling Door', 'Batang', 120000, 240000),
('100720-01', '01-003', 1, 'Etalase\nP x T x L (45x200x49)', 'Unit', 900000, 900000),
('100720-02', '01-003', 1, 'Etalase Counter\nT x L x P (85x50/45x150)', 'Unit', 1100000, 1100000),
('090720-01', '', 1, 'kaca lampu Ottava', 'Unit', 300000, 300000),
('070720-01', '01-028', 1, 'Kitchen Set Bawah\nT x P \n80,7x50,5\n80,7x80,7\n50,5x126,5\n*Coklat Kaca riben', 'Unit', 850000, 850000),
('080720-02', '01-017', 1, 'Gerobak Motor\nT x L x P (100x40x100)\n*Motor Scopy', 'Unit', 1200000, 1200000),
('080720-03', '01-035', 1, 'Lemari Baju\nT x L x P (200x60x240)', 'Unit', 2000000, 2000000),
('080720-03', '01-003', 1, 'Etalase\nT x L x P (100x40x150)', 'Unit', 2000000, 2000000),
('070720-02', '01-010', 1, 'Folding Gate Galvalum 0.8\nP x T (260x221)\n*Silangan Ekstra Super', 'Unit', 5000000, 5000000),
('070720-02', '01-006', 1, 'Tralis Besi Wajit\nP x L (238x185/183)', 'Unit', 1000000, 1000000),
('070720-02', '01-029', 1, 'Rangka Holo 10x5\nP x L (120x210)', 'Unit', 500000, 500000),
('070720-03', '01-010', 1, 'Folding Gate Galvalum\nT x L (246x340)', 'Unit', 3500000, 3500000),
('070720-04', '01-034', 1, 'Gerobak Almunium', 'Unit', 3000000, 3000000),
('060720-01', '01-036', 1, 'Gerbang Besi', 'Unit', 2500000, 2500000),
('060720-01', '01-034', 1, 'Gerobak Seken', 'Unit', 1000000, 1000000),
('030720-01', '01-029', 1, 'Balkon Stainless Pipa\nP x T\n175 x 90\n350\n187\nPintu 40', 'Unit', 5000000, 5000000),
('010720-01', '01-021', 1, 'Rolling Door Galvalum\nT x L (220x300)', 'Unit', 1700000, 1700000),
('010720-02', '01-008', 1, 'Pintu Sliding, Putih\nT x L (203x75)\n*Kaca Es, Handle Stainless\n*forta', 'Unit', 1400000, 1400000),
('100920-01', '', 1, 'gg\ngfdd\ng', 'Unit', 0, 0),
('140920-02', '', 1, '', 'Unit', 0, 0),
('140920-03', '', 1, '', 'Unit', 0, 0),
('', '01-020', 1, 'Partisi Alumunium', 'Unit', 2000000, 2000000),
('', '01-020', 1, 'Partisi Alumunium', 'Unit', 2000000, 2000000),
('', '01-020', 1, 'Partisi Alumunium', 'Unit', 2000000, 2000000),
('150920-17', '', 1, '', 'Unit', 0, 0),
('160920-06', '', 1, '', 'Unit', 0, 0),
('240920-01', '01-035', 1, 'Lemari Baju, Coklat,Roda Nkm\nT x L x P (200 x 60 x 120)\n* Kaca Riben, Sliding\n* Laci', 'Unit', 2200000, 2200000),
('240920-01', '01-022', 1, 'Rak Piring FullBox 4 Pintu (CA)\nT x L x P (170 x 45 x 150)\n* Roda 3inch Karet\n* Atas, Belakang, Bawah Spanrel\n* Riben, Handle Stenlis', 'Unit', 2200000, 2200000),
('231020-01', '01-010', 1, 'Folding Gate Galvalum', 'Unit', 1000000, 1000000),
('231020-02', '01-003', 1, 'Etalase', 'Unit', 800000, 800000),
('231020-03', '', 1, '', 'Unit', 0, 0),
('231020-04', '', 1, '', 'Unit', 0, 0),
('231020-05', '', 1, '', 'Unit', 0, 0),
('231020-06', '', 1, '', 'Unit', 0, 0),
('231020-07', '', 1, '', 'Unit', 0, 0),
('231020-08', '', 1, '', 'Unit', 0, 0),
('231020-09', '', 1, '', 'Unit', 0, 0),
('231020-09', '', 1, '', 'Unit', 0, 0),
('231020-10', '', 1, '', 'Unit', 0, 0),
('231020-10', '', 1, '', 'Unit', 0, 0),
('231020-11', '', 1, '', 'Unit', 0, 0),
('231020-11', '', 1, '', 'Unit', 0, 0),
('231020-12', '', 1, '', 'Unit', 0, 0),
('231020-13', '01-010', 1, 'Folding Gate Galvalum', 'Unit', 1000000, 1000000),
('231020-14', '01-003', 1, 'Etalase', 'Unit', 800000, 800000),
('231020-15', '', 1, '', 'Unit', 0, 0),
('231020-16', '', 1, '', 'Unit', 0, 0),
('231020-17', '', 1, '', 'Unit', 0, 0),
('231020-18', '', 1, '', 'Unit', 0, 0),
('231020-19', '', 1, '', 'Unit', 0, 0),
('231020-20', '', 1, '', 'Unit', 0, 0),
('231020-21', '', 1, '', 'Unit', 0, 0),
('231020-22', '', 1, '', 'Unit', 0, 0),
('231020-23', '', 1, '', 'Unit', 0, 0),
('231020-24', '', 1, '', 'Unit', 0, 0),
('231020-25', '', 1, '', 'Unit', 0, 0),
('231020-26', '', 1, '', 'Unit', 0, 0),
('231020-27', '01-015', 1, 'Jendela Alumunium\n140 x 60 cm\nKaca riben', 'Unit', 1000000, 1000000),
('231020-28', '', 1, '', 'Unit', 0, 0),
('231020-29', '', 1, '', 'Unit', 0, 0),
('231020-30', '', 1, '', 'Unit', 0, 0),
('231020-31', '', 1, '', 'Unit', 0, 0),
('231020-32', '', 1, '', 'Unit', 0, 0),
('231020-33', '01-010', 1, 'Folding Gate Galvalum', 'Unit', 1000000, 1000000),
('231020-33', '01-003', 1, 'Etalase', 'Unit', 800000, 800000),
('231020-33', '01-017', 1, 'Gerobak Motor', 'Unit', 1000000, 1000000),
('231020-34', '', 1, '', 'Unit', 0, 0),
('231020-35', '01-015', 1, 'Jendela Alumunium\n(T x L) 160x60cm\n*kaca riben', 'Unit', 1000000, 1000000),
('231020-35', '01-036', 1, 'Gerbang Besi\n(T x L) 160x200cm', 'Unit', 2000000, 2000000),
('231020-36', '', 1, '', 'Unit', 0, 0),
('231020-37', '', 1, '', 'Unit', 0, 0),
('231020-38', '', 1, '', 'Unit', 0, 0),
('231020-39', '', 1, '', 'Unit', 0, 0),
('231020-40', '', 1, '', 'Unit', 0, 0),
('231020-40', '', 1, '', 'Unit', 0, 0),
('231020-41', '', 1, '', 'Unit', 0, 0),
('231020-42', '', 1, '', 'Unit', 0, 0),
('231020-42', '', 1, '', 'Unit', 0, 0),
('231020-43', '', 1, '', 'Unit', 0, 0),
('231020-44', '', 1, '', 'Unit', 0, 0),
('231020-45', '', 1, '', 'Unit', 0, 0),
('231020-46', '', 1, '', 'Unit', 0, 0),
('231020-47', '', 1, '', 'Unit', 0, 0),
('231020-48', '01-004', 1, 'Pagar Besi\n(T x L) 60x200cm', 'Unit', 2500000, 2500000),
('231020-48', '01-015', 2, 'Jendela Alumunium\n(T x L) 140x60cm', 'Unit', 1000000, 2000000),
('231020-49', '01-037', 1, 'Gerbang Aluminium\n(T x L) 60x200cm', 'Unit', 2500000, 2500000),
('231020-49', '01-015', 3, 'Jendela Alumunium\n(T x L) 120x60cm', 'Unit', 1000000, 3000000),
('231020-50', '01-012', 1, 'Kusen Pintu Aluminium 3inch Forta', 'Set', 7500000, 7500000),
('231020-51', '01-012', 1, 'Kusen Pintu Aluminium 3inch Forta', 'Set', 7500000, 7500000),
('271020-01', '01-035', 1, 'Lemari', 'Unit', 2000000, 2000000),
('271020-02', '01-015', 1, 'Jendela Alumunium', 'Unit', 1000000, 1000000),
('271020-03', '01-010', 1, 'Folding Gate Galvalum', 'Unit', 1000000, 1000000),
('281020-01', '01-026', 1, 'Canopy\n(P x L x T) 200x200x100cm ', 'Unit', 3000000, 3000000),
('281020-01', '01-004', 1, 'Pagar Besi\n(P x T) 200x60cm', 'Unit', 500000, 500000),
('281020-02', '02-010', 1, 'Karet 056', '', 45000, 45000),
('281020-03', '01-033', 1, 'Kusen kaca Mati', 'Unit', 1000000, 1000000),
('031120-01', '01-012', 2, 'Kusen\n(PxL) 100x120cm', 'Unit', 1200000, 2400000),
('031120-01', '02-022', 8, 'Baut Pendek', 'Pcs', 500, 4000),
('181120-01', '01-012', 2, 'Kusen\n*(P x L) 130x60cm\n*Alexindo\n*Kaca Mati (Riben)\n', 'Unit', 1250000, 2500000),
('181120-01', '01-015', 2, 'Jendela Alumunium\n*(P x L) 120x60', 'Unit', 900000, 1800000),
('191120-01', '01-004', 2, 'Pagar Besi\nP x L (200x60cm)\nCat Hitam', 'Unit', 1300000, 2600000),
('191120-01', '01-036', 1, 'Gerbang Besi\nP x L (100x60cm)\nCat Hitam', 'Unit', 800000, 800000),
('211120-01', '01-037', 2, 'Gerbang Aluminium\n(P x L) 100x20cm', 'Unit', 2000000, 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
('00006', 'Asep Irama', '', '', NULL, NULL),
('00008', 'Deni', '-', 'Cimande', NULL, NULL),
('00009', 'saproni', '', '', NULL, NULL),
('00033', 'Irma', '', 'Teluk Pinang', NULL, NULL),
('00034', 'Ibu Haryati', '081285983543', '', NULL, NULL),
('00035', 'Babah', '', 'Eyang', NULL, NULL),
('00036', 'Bp. Jalal', '085777781447', 'Gg. Indohome, Bakso mas CT', NULL, NULL),
('00037', 'Ibu Fatimah', '', 'Bojong Nyocok', NULL, NULL),
('00038', 'Bp. Abi', '', '', NULL, NULL),
('00039', 'NN', '08657800857', '', NULL, NULL),
('00040', 'Teh Neni', '', '', NULL, NULL),
('00042', 'Bp. Aan', '', '', NULL, NULL),
('00043', 'Bp. Endro (Kinasih Resort)', '', 'Kinasih Resort', NULL, NULL),
('00044', 'Rina', '085863635633', 'Batu Kembar, Warung Bakso RT. 05/07 (Bawah)', NULL, NULL),
('00046', 'Ibu Neneng', '', 'Caringin', NULL, NULL),
('00061', 'Bp. H. Karna', '', 'Manggis ,Cicurug', NULL, NULL),
('00062', 'Pasar Cigombong', '', '', NULL, NULL),
('00063', 'Utai', '', 'Warung Nangka', NULL, NULL),
('00064', 'Roti bakar', '', '', NULL, NULL),
('00083', 'Bp. Sigit', '', 'Cisempur', NULL, NULL),
('00084', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00085', 'Hudri', '085716027996', 'Ciherang Aqua, Mesjid Trowongan Kawat', NULL, NULL),
('00086', 'Bp. Wiharja', '', 'Lengis - Samping Pencucian Mobil', NULL, NULL),
('00087', 'Bp. Mul', '', 'Kinasih Resort', NULL, NULL),
('00088', 'Kuya', '', '', NULL, NULL),
('00089', 'Ko Yopi', '', 'Caringin', NULL, NULL),
('00090', 'H. Hasanah', '', '', NULL, NULL),
('00091', 'H. Uci', '', 'Cikodok', NULL, NULL),
('00092', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00093', 'kang Deden', '', '', NULL, NULL),
('00094', 'Botak', '085863446899', 'Lengkong', NULL, NULL),
('00095', 'Kang Dani', '', '', NULL, NULL),
('00096', 'Ibu Eka', '', 'Al-Khafi', NULL, NULL),
('00097', 'Ibu Lutfian', '', 'Jogjogan Tangkil, (Panggilan (padi)', NULL, NULL),
('00098', 'Bp. Herly', '', '', NULL, NULL),
('00099', 'Teh Ipah', '08651976711', 'Cimande lembur Situ', NULL, NULL),
('00100', 'Teh Yani', '', '', NULL, NULL),
('00101', 'Irwan', '', '085931038384', NULL, NULL),
('00102', 'T. Jait', '', 'Baju Seragam Deplat', NULL, NULL),
('00103', 'Bi Yati', '085710232356', 'Caringin, Yastik', NULL, NULL),
('00104', 'Bp. Limi', '', 'mendaki Coffee', NULL, NULL),
('00105', 'Bp. Endin', '', 'Pasirmuncang', NULL, NULL),
('00106', 'Nena Muti', '', '085715314868', NULL, NULL),
('00107', 'Teh Melly', '', '', NULL, NULL),
('00108', 'Rosdi / Empur', '', 'Cisalopa D\'Top', NULL, NULL),
('00109', 'Mamah Selui', '', 'Benteng', NULL, NULL),
('00110', ' A Nana', '', 'Cimande', NULL, NULL),
('00111', 'H. Yayan', '', 'palakaden', NULL, NULL),
('00112', 'H. Didi', '', '', NULL, NULL),
('00113', 'Ibu Ari', '0811119768', 'Lido Fitness', NULL, NULL),
('00114', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00115', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00116', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00117', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00118', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00119', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00120', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00121', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00122', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00123', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00124', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00125', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00126', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00127', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00128', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00129', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00130', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00131', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00132', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00133', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00134', 'Anggiat Mora Simamora', 'asS', '', NULL, NULL),
('00135', 'Ridho', '081617340395', 'Cibalung Happyland Isi Ulang, Arah Cihideung Rt 01/02', NULL, NULL),
('00136', 'Kamal Beras', '087780585154', 'Caringin, Curug dengdeng', NULL, NULL),
('00137', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00138', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00139', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00140', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00141', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00142', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00143', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00144', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00145', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00146', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00147', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00148', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00149', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00150', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00151', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00152', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00153', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00154', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00155', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00156', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00157', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00158', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00159', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00160', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00161', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00162', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00163', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00164', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00165', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00166', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00167', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00168', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00169', 'Riki Reynaldi', '', 'Bogor, Jawabarat', NULL, NULL),
('00170', 'Anggiat Mora Simamora', '085931038384', '', NULL, NULL),
('00171', 'Anggiat Mora Simamora', '', '', NULL, NULL),
('00172', 'Debug 001', '', '', NULL, NULL),
('00173', 'Ibu Neneng', '085931038384', 'cimande', NULL, NULL),
('00174', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(255) NOT NULL,
  `produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk`) VALUES
('01', 'Fabrikasi'),
('02', 'Satuan'),
('03', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('admin', '$2y$10$3c9MPxJ1YXz/0wDVhLMpteA4YW6UO1nqY1hNlHvuSxrcIgnZuDuhW', 1),
('anissa', '$2y$10$rVfgw6yctSnO5Of2EdZMw.gRnrxFEf3xgi6W6Ajg/39pENKTk3Xrm', 1),
('iyang', '$2y$10$x4oUPpuDfXKS/qWTo1mwiuV1mcYFhoOKAi68Rvms6OWmX.34BxkAO', 2),
('acu', '$2y$10$YcrOeUPFQzaGfA9K4ZDloOa7YTFUBsWMqqnLH7aknsqbMGwCeKsiu', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
