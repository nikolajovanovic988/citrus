<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/Citrus-App/index.php">
        <img src="/Citrus-App/App/Citrus/Assets/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="logo">
        Citrus
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php if (isset($_SESSION['admin_id'])) { ?>
                    <a class="nav-link" href="App/Citrus/View/approve.php">Comments <span class="sr-only">(current)</span></a>
                <?php } ?>
            </li>
        </ul>
        <?php if (!isset($_SESSION['admin_id'])) { ?>
            <a class="nav navbar-nav navbar-right" href="App/Citrus/Authentication/login.php">Login</a>
        <?php } else { ?>
            <a class="nav navbar-nav navbar-right" href="App/Citrus/Authentication/logout.php">Logout</a>
        <?php }; ?>
    </div>
</nav>