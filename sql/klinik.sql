CREATE DATABASE IF NOT EXISTS klinik;

USE klinik;

-- 1. Tabel Pasien
CREATE TABLE IF NOT EXISTS pasien (
    id_pasien INT PRIMARY KEY AUTO_INCREMENT,
    nama_pasien VARCHAR(100),
    tanggal_lahir DATE,
    jenis_kelamin ENUM('L', 'P')
);

-- 2. Tabel Dokter
CREATE TABLE IF NOT EXISTS dokter (
    id_dokter INT PRIMARY KEY AUTO_INCREMENT,
    nama_dokter VARCHAR(100),
    spesialisasi VARCHAR(50)
);

-- 3. Tabel Jenis Tes
CREATE TABLE IF NOT EXISTS jenis_tes (
    id_tes INT PRIMARY KEY AUTO_INCREMENT,
    nama_tes VARCHAR(50),
    biaya DECIMAL(10, 2),
    kategori VARCHAR(50)
);

-- 4. Tabel Hasil Lab
CREATE TABLE IF NOT EXISTS hasil_lab (
    id_hasil INT PRIMARY KEY AUTO_INCREMENT,
    id_pasien INT,
    id_dokter INT,
    id_tes INT,
    tanggal_periksa DATE,
    hasil_nilai FLOAT,
    satuan VARCHAR(20),
    status_normal ENUM('Normal', 'Abnormal'),
    FOREIGN KEY (id_pasien) REFERENCES pasien(id_pasien),
    FOREIGN KEY (id_dokter) REFERENCES dokter(id_dokter),
    FOREIGN KEY (id_tes) REFERENCES jenis_tes(id_tes)
);

INSERT INTO pasien (nama_pasien, tanggal_lahir, jenis_kelamin) VALUES 
('Andi Prasetyo', '1990-05-12', 'L'),
('Siti Aminah', '1985-08-22', 'P'),
('Budi Santoso', '1995-12-01', 'L'),
('Rina Wijaya', '2000-02-15', 'P');

INSERT INTO dokter (nama_dokter, spesialisasi) VALUES 
('dr. Herman', 'Patologi Klinik'),
('dr. Sarah', 'Umum');

INSERT INTO jenis_tes (nama_tes, biaya, kategori) VALUES 
('Gula Darah Puasa', 50000, 'Diabetes'),
('Kolesterol Total', 75000, 'Lemak'),
('Hemoglobin', 45000, 'Darah Rutin'),
('Asam Urat', 60000, 'Sendi');

INSERT INTO hasil_lab (id_pasien, id_dokter, id_tes, tanggal_periksa, hasil_nilai, satuan, status_normal) VALUES 
(1, 1, 1, '2023-10-01', 110, 'mg/dL', 'Normal'),
(1, 1, 2, '2023-10-01', 210, 'mg/dL', 'Abnormal'),
(2, 2, 3, '2023-10-02', 12.5, 'g/dL', 'Normal'),
(3, 1, 1, '2023-10-05', 150, 'mg/dL', 'Abnormal'),
(4, 2, 4, '2023-10-07', 8.2, 'mg/dL', 'Abnormal'),
(2, 1, 1, '2023-10-10', 95, 'mg/dL', 'Normal');