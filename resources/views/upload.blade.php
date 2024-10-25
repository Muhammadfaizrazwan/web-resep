<?php
// Database configuration (gantilah dengan informasi database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tampilkan semua berita
function tampilkanBerita() {
    global $conn;
    $sql = "SELECT * FROM berita";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Tambah berita
function tambahBerita( $judul, $cerita_pendek, $isi, $hari, $foto) {
    global $conn;
    $sql = "INSERT INTO berita (judul, cerita_pendek, isi, hari, foto) VALUES ('$judul', '$cerita_pendek', '$isi', '$hari', '$foto')";
    $conn->query($sql);
}

// Update berita
function updateBerita( $judul, $cerita_pendek, $isi, $hari, $foto) {
    global $conn;
    $sql = "UPDATE berita SET  cerita_pendek='$cerita_pendek',isi='$isi', hari='$hari', foto='$foto' WHERE judul='$judul' ";
    $conn->query($sql);
}

// Hapus berita
function hapusBerita($judul) {
    global $conn;
    
    $sql = "DELETE FROM berita WHERE judul='$judul'";
    if ($conn->query($sql) === TRUE) {
        echo "Berita dengan judul $judul berhasil dihapus.";
    } else {
        echo "Gagal menghapus berita: " . $conn->error;
    }
}

// Ambil data dari formulir
if (isset($_POST['submit'])) {
    $judul = isset($_POST['judul']) ? $_POST['judul'] : "";
    $cerita_pendek = isset($_POST['cerita_pendek']) ? $_POST['cerita_pendek'] : "";
    $isi = isset($_POST['isi']) ? $_POST['isi'] : "";
    $hari = isset($_POST['hari']) ? $_POST['hari'] : "";
    $foto = isset($_POST['foto']) ? $_POST['foto'] : "";

    tambahBerita($judul, $cerita_pendek, $isi, $hari, $foto);
}


// Ambil data dari formulir untuk update
if (isset($_POST['update'])) {
    $judul = isset($_POST['judul']) ? $_POST['judul'] : "";
    $cerita_pendek = isset($_POST['cerita_pendek']) ? $_POST['cerita_pendek'] : "";
    $isi = isset($_POST['isi']) ? $_POST['isi'] : "";
    $hari = isset($_POST['hari']) ? $_POST['hari'] : "";
    $foto = isset($_POST['foto']) ? $_POST['foto'] : "";

    updateBerita($judul, $cerita_pendek, $isi, $hari, $foto);
}


// Hapus berita jika ID dihapus dikirimkan melalui URL
// Hapus berita jika judul dikirimkan melalui URL
if (isset($_GET['hapus'])) {
    $judul = $_GET['hapus'];
    hapusBerita($judul);
}


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Portal Berita</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
        margin: 0;
        padding: 0;
    }

    header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}

header h1 {
    font-size: 2rem;
}
    nav {
        display: flex;
        justify-content: center;
        margin-top: 1em;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav li {
        margin: 0 1em;
    }

    nav a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    main {
        padding: 2em;
    }

    h2 {
        color:#333;
    }

    form {
        margin-bottom: 2em;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 0.5em;
        margin: 0.5em 0;
        box-sizing: border-box;
    }

    button {
        background-color: #333;
        color: #fff;
        padding: 0.5em 1em;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1em;
    }

    th, td {
        border: 1px solid #dee2e6;
        padding: 0.75em;
        text-align: left;
    }

    th {
        background-color:#333;
        color: #fff;
    }

    footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em;
    bottom: 0;
    width: 100%;
}

</style>

</head>
<body>
    <header>
        <h1>BERITA.ONE</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="terkini.php">Berita Terkini</a></li>
                <!-- <li><a href="tambah.php">Tambah Berita</a></li> -->
                <li><a href="about.php">Tentang Saya</a></li>
                <li><a href="../index.html">Logout</a></li>  
                <li><a href="profile.php">Profile</a></li>             
            </ul>
        </nav>
    </header>


    <main>
        <!-- Tampilkan form tambah berita -->
        <h2>Tambah Berita</h2>
        <form method="post">
            <input type="text" name="judul" placeholder="judul" required><br>
            <textarea name="cerita_pendek" placeholder="cerita_pendek" rows="4" required></textarea><br>
            <textarea name="isi" placeholder="isi" rows="4" required></textarea><br>
            <input type="file" name="foto" placeholder="foto" required><br>
            <input type="date" name="hari" placeholder="hari" required><br>
            <button type="submit" name="submit">Tambah</button>
        </form>

        <!-- Tampilkan berita yang sudah ada -->

    <footer>
        <p>&copy; 2023 Website Berita</p>
    </footer>
</body>
</html>