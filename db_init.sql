CREATE DATABASE IF NOT EXISTS crud_db;
USE crud_db;

CREATE TABLE IF NOT EXISTS mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) NOT NULL,
  nama VARCHAR(100) NOT NULL,
  jurusan VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES
('2023001', 'Ahmad Fauzi', 'Teknik Informatika', 'ahmad@example.com'),
('2023002', 'Budi Santoso', 'Sistem Informasi', 'budi@example.com'),
('2023003', 'Cindy Wijaya', 'Ilmu Komputer', 'cindy@example.com');