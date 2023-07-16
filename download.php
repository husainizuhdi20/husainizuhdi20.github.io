<?php
// Nama file PDF yang ingin didownload
$namaFile = 'cv husaini.pdf';

// Lokasi direktori file PDF
$lokasiFile = 'assets/pdf/' . $namaFile;

// Cek apakah file ada
if (file_exists($lokasiFile)) {
    // Header untuk memulai pengunduhan file
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $namaFile . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($lokasiFile));
    readfile($lokasiFile);
    exit;
} else {
    echo 'File tidak ditemukan.';
}
?>