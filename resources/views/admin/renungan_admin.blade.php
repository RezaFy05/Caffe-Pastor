<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/styledashboard.css') }}">
    <title>Document</title>
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

        .product {
            margin: 10px;
            overflow-y: scroll;
            height: 400px;
            border: 2px solid #483434;
        }

        .product thead {
            background-color: #483434;
            color: #FFF3E4;
        }

        .product tbody {
            color: #483434;
        }

        body {
            background-color: #EED6C4;
        }

        .btn {
            background-color: #483434;
            color: white;
            border: 2px solid #483434;
            margin-left: 10px;
        }

        .btn:hover {
            background-color: white;
            border: 2px solid #483434;
            color: #483434;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-accusoft"></span>Menu Admin</h2>
        </div>
        <div class="sidebar-menu">

            <a href="/admin/dashboard"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>

            <a href="/admin/view"><span class="las la-users"></span>
                <span>Data Admin</span></a>

            <a href="/admin/reservasion/view"><span class="las la-plus"></span>
                <span>Data Reservasi</span></a>

            <a href="/admin/produk/view" class=""><span class="las la-hamburger"></span>
                <span>Data Produk</span></a>

            <a href="/admin/kategori/view" class=""><span class="las la-hamburger"></span>
                <span>Data Kategori</span></a>

            <a href="/admin/renungan/view" class="active"><span class="las la-book"></span>
                <span>Renungan</span></a>

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
                Renungan
            </h2>
            <h1>PASTOR CAFE</h1>
            <div class="user-wrapper">
                <img src="logo1.png" width="40px" height="40px" alt="profile">
                <div class="profile-wrapper">
                    <h4>admin</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div>
                <button class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Renungan
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <form action="/admin/renungan/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Renungan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <label for="staticEmail" class="col-sm-5 col-form-label">Judul</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" id="judul" name="judul">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="product-price" class="col-sm-5 col-form-label">Isi Renungan</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" id="isi_renungan" name="isi_renungan">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="staticEmail" class="col-sm-5 col-form-label">Gambar</label>
                                        <div class="col-sm-5">
                                            <input type="file" name="gambar" id="gambar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Renungan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="renungan">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tanggal </th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi Renungan</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($renungan as $renungan)    
                        <!-- trigger modal -->
                        <tr data-bs-toggle="modal">
                            <td>{{ $renungan->id }}</td>
                            <td><img src="{{ asset('/storage/images/' . $renungan->gambar) }}" class="img-thumbnail" style="width: 60px;" /></td>
                            <td>{{ $renungan->Tanggal }}</td>
                            <td>{{ $renungan->judul }}</td>
                            <td>{{ $renungan->isi_renungan }}</td>
                            <td>
                                <form action="/admin/renungan/delete/{{$renungan->id}}" method="post">
                                    @csrf
                                    <button type="sumbit" name="deleteRenungan" style="border: none; background-color: #EED6C4;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </form>

                            </td>
                            <!-- Button trigger modal -->
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$renungan->id}}">
                                    Update
                                </button>
                            </td>

                            <div class="modal fade" id="staticBackdrop-{{$renungan->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <form action="/admin/renungan/update/process/{{$renungan->id}}" method="post">
                                    @csrf
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Renungan {{ $renungan->judul }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal</label>
                                                    <div class="col-sm-5">
                                                        <input type="date" value="{{ $renungan->tanggal}}" name="tanggal" id="tanggal">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Judul</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" value="{{ $renungan->judul}}" name="judul" id="judul">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Isi Renungan</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" value="{{ $renungan->isi_renungan}}" name="isi_renungan" id="isi_renungan">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Gambar</label>
                                                    <div class="col-sm-5">
                                                        <input type="file" value="{{ $renungan->gambar}}" name="gambar" id="gambar">
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>