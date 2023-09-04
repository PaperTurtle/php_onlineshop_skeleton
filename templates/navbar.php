<?php
require_once 'templates/connect.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav">
                <?php
                $navItems = [
                    ['text' => 'Startseite', 'link' => 'index.php', 'icon' => 'fa-house'],
                    ['text' => 'Produkte', 'link' => 'produkte.php', 'icon' => 'fa-apple-whole'],
                ];
                if (isset($_SESSION['username'])) {
                    // Benutzer ist eingeloggt
                    $navItems[] = ['text' => 'Warenkorb', 'link' => 'warenkorb.php', 'icon' => 'fa-cart-shopping'];
                } else {
                    // Benutzer ist nicht eingeloggt
                    $navItems[] = ['text' => 'Anmelden', 'link' => 'login.php', 'icon' => 'fa-right-to-bracket'];
                    $navItems[] = ['text' => 'Registrieren', 'link' => 'register.php', 'icon' => 'fa-marker'];
                }
                foreach ($navItems as $item) {
                    $activeClass = (basename($_SERVER['PHP_SELF']) == $item['link']) ? 'active fw-bold' : '';
                    echo '
                    <li class="nav-item">
                        <a class="nav-link ' . $activeClass . '" href="' . $item['link'] . '">' . $item['text'] . ' 
                            <i class="fa-solid ' . $item['icon'] . '"></i>' . ($item['text'] === 'Warenkorb' ? $badgeHTML : '') . '
                        </a>
                    </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>