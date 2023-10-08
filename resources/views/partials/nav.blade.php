<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <img class="px-8 w-25" src="img/logo.png" draggable="false">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ $title == 'Home' ? 'active' : '' }}">Home</a>
                <a href="/contact" class="nav-item nav-link {{ $title == 'Contact' ? 'active' : '' }}">Contact</a>
                <a href="/cad" class="nav-item nav-link {{ $title == 'CAD' ? 'active' : '' }}">CAD</a>
                <a href="/fabric" class="nav-item nav-link {{ $title == 'Fabric' ? 'active' : '' }}">Fabric</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title == 'Product Section' ? 'active' : '' }}" data-bs-toggle="dropdown">Product Section</a>
                    <div class="dropdown-menu m-0">
                        <a href="/pants" class="dropdown-item">Pants Section</a>
                        <a href="/tshirt" class="dropdown-item">T-Shirt Section</a>
                        <a href="/shirt" class="dropdown-item">Shirt Section</a>
                        <a href="/outer" class="dropdown-item">Outer Section</a>
                    </div>
                </div>
                <a href="/login" class="nav-item nav-link"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </nav>
</div>
