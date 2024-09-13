<?php
include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile </title>
    <link rel="stylesheet" href="{{asset('profile_resep.css')}}">
</head>
<body>
<header class="header">
        <div class="navbar">
            <img src="img/OIG2.vgCnXDd64cfcMz.Zi.jpeg" alt="Logo" class="logo">
            <div class="search-container">
                <input type="text" id="search" placeholder="Search">
            </div>
            <div class="menu-icons">
                <a href="index"><img src="icon/ion--home.png" alt="Home" class="icon"></a>
                <a href="tambah_resep"><img src="icon/ph--plus-fill.png" alt="Add" class="icon"></a>
                <a href="profile"><img src="icon/bxs--user.png" alt="User" class="icon"></a>
            </div>
        </div>
    </header>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-pic">
                <img src="imf/images (4).jpeg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Riza Surya Pratama</h2>
                <p>rizasuryapratama13@gmail.com</p>
            </div>
        </div>

        <div class="profile-menu">
            <a href="profil.php"><button id="savedBtn">Tersimpan</button></a>
            <a href="profil_2.php"><button id="myRecipesBtn"class="active">Resep Saya</button></a>
        </div>

        <div class="recipe-table-container">
            <table class="recipe-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Ingredients</th>
                        <th>Steps</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    $host = 'localhost'; // Nama host, biasanya 'localhost'
                    $user = 'root';      // Username MySQL
                    $pass = '';          // Password MySQL
                    $dbname = 'db_resep_makanan'; // Nama database

                    $conn = new mysqli($host, $user, $pass, $dbname);

                    // Periksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Ambil data dari database
                    $sql = "SELECT * FROM resep_makanan";
                    $result = $conn->query($sql);

                    // Periksa jika ada data
                    if ($result->num_rows > 0) {
                        // Tampilkan data untuk setiap baris
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td><img src='uploads/" . $row['image'] . "' alt='Recipe Image' class='table-image'></td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['deskripsi'] . "</td>";
                            echo "<td>" . $row['ingredients'] . "</td>";
                            echo "<td>" . $row['steps'] . "</td>";
                            echo "<td>";
                            echo "<button class='edit-button'>EDIT</button>";
                            echo "<button class='delete-button'>HAPUS</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Belum ada resep yang ditambahkan.</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>
