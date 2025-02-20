<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/styledashboard.css') }}">

</head>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .sidebar a,
    .sidebar li {
        list-style-type: none;
        text-decoration: none;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 2rem;
        margin-top: 2rem;
    }

    .cards a {
        color: #FFF3E4;
        text-decoration: none;
    }

    .cards-single {
        display: flex;
        justify-content: space-between;
        background: #6B4F4F;
        padding: 2rem;
        border-radius: 2px;
    }

    .cards-single div:last-child span {
        font-size: 3rem;
        color: #FFF3E4;
    }

    .cards-single div:first-child span {
        color: #D0B8A8;
    }

    body {
        background-color: #EED6C4;
    }
</style>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-accusoft"></span>Menu Admin</h2>
        </div>
        <div class="sidebar-menu">
            <a href="/admin/dashboard" class="active"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>

            <a href="/admin/view"><span class="las la-users"></span>
                <span>Data Admin</span></a>

            <!-- <a href="/admin/dineintrx/view"><span class="las la-shopping-cart"></span>
                <span>Data Transaksi</span></a> -->

            <a href="/admin/reservasion/view"><span class="las la-plus"></span>
                <span>Data Reservasi</span></a>

            <a href="/admin/produk/view"><span class="las la-hamburger"></span>
                <span>Data Produk</span></a>

            <a href="/admin/kategori/view" class=""><span class="las la-hamburger"></span>
                <span>Data Kategori</span></a>

            <a href="/admin/renungan/view" class=""><span class="las la-book"></span>
                <span>Renungan</span></a>

            <!-- <a href="/admin/seat/view"><span class="las la-chair"></span>
                <span>Data Seat</span></a>

            <a href="/admin/dineintrx/recap"><span class="las la-shopping-bag"></span>
                <span>Data Recap Transaction</span></a> -->

            <a href="/admin/logout"><span class="las la-sign-out-alt"></span>
                <span>Logout</span></a>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la bars"></span>
                </label>
                Dashboard
            </h2>
            <h1>PASTOR CAFFE</h1>
            <div class="user-wrapper">
                <img src="foto-3.jpg" width="40px" height="40px" alt="profile">
                <div class="profile-wrapper">
                    <h4>admin</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <a href="/admin/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Admin</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                </a>
                <!-- <a href="/admin/dineintrx/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Dine-in Transaction</span>
                        </div>
                        <div>
                            <span class="las la-shopping-cart"></span>
                        </div>
                    </div>
                </a> -->
                <a href="/admin/reservasion/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Reservation</span>
                        </div>
                        <div>
                            <span class="las la-plus"></span>
                        </div>
                    </div>
                </a>
                <a href="/admin/produk/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Product</span>
                        </div>
                        <div>
                            <span class="las la-hamburger"></span>
                        </div>
                    </div>
                </a>
                <a href="/admin/renungan/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Renungan</span>
                        </div>
                        <div>
                            <span class="las la-book"></span>
                        </div>
                    </div>
                </a>
                <!-- <a href="/admin/seat/view">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Seat</span>
                        </div>
                        <div>
                            <span class="las la-chair"></span>
                        </div>
                    </div>
                </a> -->
                <!-- <a href="/admin/dineintrx/recap">
                    <div class="cards-single">
                        <div>
                            <h1></h1>
                            <span>Recap</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                </a> -->
            </div>
        </main>

    </div>
</body>

</html>