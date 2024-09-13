<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile </title>
     <link rel="stylesheet" href="{{asset('profile.css')}}">
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
        <div class="profil">
            <div class="profile-header">
            <div class="profile-pic">
                <img src="img/images (4).jpeg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Riza Surya Pratama</h2>
                <p>rizasuryapratama13@gmail.com</p>
            </div>
        </div>
        <div class="profile-menu">
            <button id="savedBtn" class="active">Tersimpan</button>
            <a href="profil_resep.php"><button id="myRecipesBtn">Resep Saya</button></a>
        </div>
        <div class="profile-content">
            <div class="recipe-card">
                <img src="img/tqybctrgr3uftzcnv0qa.jpg" alt="Rawon Daging">
                <p>Rawon Daging</p>
            </div>
        </div>
        </div>
        
    </div>
</body>
</html>
