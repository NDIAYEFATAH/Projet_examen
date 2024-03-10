<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"/>
<!-- Custom styles for this template -->
<link href="../assets/css/style.css" rel="stylesheet"/>
<!-- responsive style -->
<link href="../assets/css/responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
            <span>
              T-BANK
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Wallet</span> <img src="images/wallet.png" alt="" />
                            </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#modalForm"> Transfert </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->prenom }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('logout_admin') }}" class="nav-link">
                                        Logout
                                    </a>
                                </li>

                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif

                    </ul>
                    <div class="user_option">
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transfert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">N° Compte de l'emetteur</label>
                            <input type="text" class="form-control" id="username" name="rib" placeholder="N° Compte" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">N° Compte du beneficiaire</label>
                            <input type="text" class="form-control" id="password" name="rib" placeholder="N° Compte du beneficiaire" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Montant</label>
                            <input type="number" class="form-control" id="password" name="montant" placeholder="Montant" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motif du transfert</label>
                            <input type="text" class="form-control" id="password" name="motif" placeholder="Motif" />
                        </div>
                        <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-warning float-end">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



