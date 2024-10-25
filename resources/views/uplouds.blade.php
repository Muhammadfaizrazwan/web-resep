<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Resep</title>
    <link rel="stylesheet" href="{{asset('tambah_resep.css')}}">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="{{ route('uplouds.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep Makanan</title>
    <link rel="stylesheet" href="{{asset('tambah_resep.css')}}">
</head>
<body>
    <header class="header">
        <div class="navbar">
            <img src="gambar/OIG2.vgCnXDd64cfcMz.Zi.jpeg" alt="Logo" class="logo">
            <div class="search-container">
                <input type="text" id="search" placeholder="Search">
            </div>
            <div class="menu-icons">
                <a href="index"><img src="icon/ion--home.png" alt="Home" class="icon"></a>
                <a href="tambah_resep"><img src="icon/ph--plus-fill.png" alt="Add" class="icon"></a>
                <a href="profil"><img src="icon/bxs--user.png" alt="User" class="icon"></a>
            </div>
        </div>
    </header>
    <div class="container">
        <form class="form-container" action="proses_tambah"  method="POST" enctype="multipart/form-data">
            <div class="form-group upload-image">
                <label for="uploadImage">
                    <img src="gambar/cloud_upload_24dp_5F6368_FILL0_wght400_GRAD0_opsz24 (1).png" alt="Upload Image">
                    <span>Upload Gambar</span>
                </label>
                <input type="file" id="uploadImage" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <input type="text" id="judulResep" name="title" placeholder="Judul Resep Makanan" required>
            </div>
            <div class="form-group">
                <textarea id="deskripsi" name="description" rows="3" placeholder="Deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <textarea id="bahanBahan" name="ingredients" rows="5" placeholder="Bahan-Bahan" required></textarea>
            </div>
            <div class="form-group">
                <textarea id="caraMembuat" name="steps" rows="5" placeholder="Cara Membuat" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>
</body>
</html> -->
