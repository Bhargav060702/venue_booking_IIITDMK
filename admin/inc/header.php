<div class="whole"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-White px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <img src="images/logo.png" class="bh" alt="IIITDM Kurnool">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Venue Booking Portal</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Venue Rooms
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="rooms.php">CR1</a></li>
                            <li><a class="dropdown-item" href="#">CR2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Seminar Hall</a></li>
                            <li><a class="dropdown-item" href="#">Conference Room</a></li>
                            <li><a class="dropdown-item" href="#">Mechanical Laboratory</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="Contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="aboutus.php">About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link disabled me-2" href="#"  aria-disabled="true" diasbled>--</a>
                    </li>
                </ul>
                <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-dark shadow-none me-lg-3 me-3" type="submit"><i class="bi bi-search"></i></button>
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
                        Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registermodal">
                        Register
                </button>
                </div>

            </div>
        </div>

    </nav>
</div>
<!-- Login -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <form>
    <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-fill fs-2 me-2"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="mb-3">
        <input type="email" class="form-control shadow-none" placeholder="Email address">
    </div>
    <div class="mb-3">
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Password">
    </div>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark">LOGIN</button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password </a>
    </div>
    </div>
    </form>

    </div>
</div>
</div>
<!-- Register-->
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-fill-add fs-2 me-2"></i>User Registration</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Your ID must be your Roll Number
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <input type="text" class="form-control shadow-none" placeholder="Name">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <input type="email" class="form-control shadow-none" placeholder="Email address">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <input type="number" class="form-control shadow-none" placeholder="Phone number">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <input type="varchar" class="form-control shadow-none" placeholder="Roll number">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Password">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <input type="file" class="form-control shadow-none" placeholder="Picture">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">The above given details are true to the best of my knowledge</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark">REGISTER</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password </a>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>  