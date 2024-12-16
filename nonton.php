<?php
// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil nilai URL dari input
    $kode = $_POST['kode'];
    $url = "https://vidsrc.icu/embed/movie/" . $kode;

    // Validasi URL (opsional, untuk memastikan URL valid)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Redirect ke URL yang diinputkan
        header("Location: $url");
        exit;
    } else {
        echo "URL tidak valid.";
    }
}
?>