<header <?php echo $header == 1 ? 'id="tg-header" class="tg-header tg-haslayout"' : '' ?>>
    <?php include('account.php'); ?>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <strong class="tg-logo logo-33planet"><a href="/index.php?page=landing"><img src="images/teleport/teleport2.png" alt="image description"></a></strong>
                    <div class="tg-rightarea">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="current-menu-item"><a href="#">Home</a></li>
                                    <li><a href="aboutus.php">Search</a></li>
                                    <li><a href="/index.php?page=about-us">About</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/index.php?page=login">Register</a>
                                            </li>
                                            <li>
                                                <a href="/index.php?page=login">Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <a class="tg-btn tg-btnpostanewjob" href="/index.php?page=landing-alien">Become an Teleporter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
