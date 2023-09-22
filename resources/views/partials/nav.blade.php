<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <img class="px-8 w-25" src="img/logo.png" draggable="false">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php if($title == "HOME"){
                    echo"active";
                } ?>">Home</a>
                <a href="contact.php" class="nav-item nav-link <?php if($title == "CONTACT"){
                    echo"active";
                } ?>">Contact</a>
                <a href="cad.php" class="nav-item nav-link <?php if($title == "CAD"){
                    echo"active";
                } ?>">CAD</a>
                <a href="fabric.php" class="nav-item nav-link <?php if($title == "Fabric"){
                    echo"active";
                } ?>">Fabric</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php if($title == "PRODUCT SECTIONS"){
                    echo"active";
                } ?>" data-bs-toggle="dropdown">Product Section</a>
                    <div class="dropdown-menu m-0">
                        <a href="pants.php" class="dropdown-item">Pants Section</a>
                        <a href="tshirt.php" class="dropdown-item">T-Shirt Section</a>
                        <a href="shirt.php" class="dropdown-item">Shirt Section</a>
                        <a href="outer.php" class="dropdown-item">Outer Section</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>