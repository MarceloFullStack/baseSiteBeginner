<?php include __DIR__.'/../templates/BASE/head.php'?>


    <div id="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a href="" class="navbar-brand">Marcelo Admin</a>

            <span class="navbar-text">
                Site Dinamico, Meu Proprio CMS
            </span>
        </nav>
    </div>

    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">

                        <span href="" class="nav-link text-white-50"> <small>MENU</small> </span></li>

                    <li class="nav-item">

                        <a href="" class="nav-link active"> Paginas </a></li>

                    <li class="nav-item">

                        <a href="" class="nav-link"> Usuarios </a></li>

                </ul>
            </div>
            <div id="content" class="col-10"><?php include $content ?></div>
        </div>


    </div>
<?php include __DIR__.'/../templates/BASE/footer.php'?>