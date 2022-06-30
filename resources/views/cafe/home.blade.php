<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- import css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Cafe+</title>
    <style>
        @media (max-width: 991px) {
            .navbar-scroll {
                background-color: #fff;
            }

            .navbar-scroll .navbar-brand,
            .navbar-scroll .nav-link,
            .navbar-scroll .fa-bars {
                color: #4f4f4f !important;
            }
        }

        .navbar-brand {
            letter-spacing: 3px;
            font-size: 2rem;
            font-weight: 500;
        }

        .navbar-scroll .navbar-brand,
        .navbar-scroll .nav-link,
        .navbar-scroll .fa-bars {
            color: #fff;
        }

        .navbar-scroll {
            box-shadow: none;
        }

        .navbar-scrolled {
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.05);
        }

        .navbar-scrolled .navbar-brand,
        .navbar-scrolled .nav-link,
        .navbar-scrolled .fa-bars {
            color: #4f4f4f;
        }

        .navbar-scrolled {
            background-color: #fff;
        }

        @media (max-width: 450px) {
            #intro {
                height: 950px !important;
            }
        }

        @media (min-width: 550px) and (max-width: 750px) {
            #intro {
                height: 1100px !important;
            }
        }

        @media (min-width: 800px) and (max-width: 990px) {
            #intro {
                height: 600px !important;
            }
        }

        .display-1 {
            font-weight: 500 !important;
            letter-spacing: 40px;
        }

        @media (min-width: 1600px) {
            .display-1 {
                font-size: 10rem;
            }
        }

        .icon-bgr {
            background-image: url('https://i.pinimg.com/474x/6c/24/db/6c24dbb19ec2c665d7ed97a8007554d8.jpg');
            background-size: cover;
            height: 4vh;
            width: 4vh;
            border-radius: 20px;
            margin-left: -5px;
        }

        .bgr-body {
            background-image: url('https://i.pinimg.com/originals/c8/21/e6/c821e6f6a409765d5b593ec84eb06cc8.jpg');
            height: 100vh;
            background-size: cover;
        }

        .img-cafe {
            background-size: cover;
            height: 15vh;
            width: 20vh;
        }
    </style>
</head>
<body class="bgr-body" style="overflow: hidden;"">
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll"
         style="background-color: rgba(0, 0, 0, 0.2); height: 10vh; z-index: 10000; position: sticky ">
        <div class="container-fluid mask">
            <a class="navbar-brand mr-1" href="#!">Cafe+</a> <span class="icon-bgr mr-1 mb-3">.</span>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Attractions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Opinions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<main>
    <div style="display: flex; justify-content: flex-end; margin-right: 2vh; padding: 3px;" class="mb-1 mt-1">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                onclick="showModel()">Add <i class="bi bi-bag-plus-fill"></i></button>
    </div>
    <div class="list-item mt-0" style="margin-top: 2vh; height: 79vh; position: relative; overflow: auto;">
        <table class="table table-striped table-borderless">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Cafex</th>
                <th scope="col">Describe</th>
                <th scope="col">Price</th>
                <th scope="col">View</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <form id="form-delete" action="{{ route('home.deleteCafe') }}" method="post" >
                @csrf
                @foreach ($listAllCafe as $cafe)
                    <tr>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEdit"
                                onclick="showModelEdit({{json_encode($cafe)}})"><i class="bi bi-save""></i></button>
                        </td>
                        <th scope="row">{{ $cafe['typeName']}}</th>
                        <td>{{ $cafe['describe']}}</td>
                        <td>{{ $cafe['price']}}$</td>
                        <td>
                            <div class="img-cafe" style="background-image: url('{{$user['image']}}')"></div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm ml-2" onclick="deleteCafe({{$cafe['id']}}, event)"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                <input type="hidden" id="idDelete" name="idDelete" value="">
            </form>
            </tbody>
        </table>
    </div>
    <!--modal add -->
    <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 20vh;">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h3 class="heading text-primary">Add cafe love</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <form action="{{ route('home.addCafe') }}" method="post">
                        @csrf
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Type Cafe</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="Marocchino..." value="" name="typeName"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Describe</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="Something..." value="" name="describe"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Price</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="price..." value="" name="price"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Url image</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="https://laravel.com/docs/9.x/blade#loops..." value="" name="image"></div>
                        </div>
                        <div class="row p-2" style="display: flex; justify-content: flex-end;">
                            <button class="btn btn-primary btn-sml mr-3">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal edit -->
    <div class="modal fade right" id="modalEdit" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 20vh;">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h3 class="heading text-primary">Edit cafe love</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <form action="{{ route('home.editCafe') }}" method="post">
                        @csrf
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Type Cafe</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="Marocchino..." value="" name="typeNameE"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Describe</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="Something..." value="" name="describeE"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Price</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="price..." value="" name="priceE"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3">
                                <label class="labels">Url image</label>
                            </div>
                            <div class="col-9"><input type="text" class="form-control" placeholder="https://laravel.com/docs/9.x/blade#loops..." value="" name="imageE"></div>
                        </div>
                        <input type="hidden" id="idEdit" name="idEdit" value="">
                        <div class="row p-2" style="display: flex; justify-content: flex-end;">
                            <button class="btn btn-primary btn-sml mr-3">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/.Content-->
    </div>
    </div>
</main>
<footer class="bg-light text-center text-white">
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<script>
    function showModel() {
        $('#modalRelatedContent').modal('show');
    }
    function showModelEdit(cafe) {
        $('#idEdit').val(cafe["id"]);
        $("input[name=imageE]").val(cafe['image']);
        $("input[name=priceE]").val(cafe['price']);
        $("input[name=describeE]").val(cafe['describe']);
        $("input[name=typeNameE]").val(cafe['typeName']);
        $('#modalEdit').modal('show');
    }
    function deleteCafe(id, event) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete record into the database?')) {
            $('#idDelete').val(id);
            $('#form-delete').submit();
        } else {
        }

    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
