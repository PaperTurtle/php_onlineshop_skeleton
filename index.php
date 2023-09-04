<?php
session_start();
require_once 'templates/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Geschmacksgarten-Onlineshop</title>
	<link rel="icon" href="./img/lebensmittel.png" />

	<!-- Bootstrap CSS and JavaScript Dependencies -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
	<script src="https://kit.fontawesome.com/9997128989.js" crossorigin="anonymous" async defer></script>
	<script type="module" src="https://cdn.jsdelivr.net/npm/minidenticons@4.2.0/minidenticons.min.js" crossorigin="anonymous" defer></script>

	<!-- Font Awesome CSS and Custom Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="stylesheet" href="./css/button.css" />
	<link rel="stylesheet" href="./css/home.css" />
	<link rel="stylesheet" href="./css/flash.css">
	<link rel="stylesheet" href="./css/mdb.min.css" />
</head>

<body class="d-flex text-center text-dark bg-image">
	<div id="main-content" class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="mb-auto">
			<nav class="navbar navbar-expand-lg justify-content-center navbar-dark">
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
			</nav>
		</header>
		<main class="px-3">
			<h1 class="text-center text-light position-relative z-index-above display-3">
				<strong>{DEIN SHOPNAME}</strong>
			</h1>
			<p class="text-center text-light lead position-relative z-index-above fst-italic">
				{DEINE BESCHREIBUNG}
			</p>
			<button class="btn btn-lg btn-light" onclick="window.location.href='produkte.php'">
				{ZU PRODUKTEN}
			</button>
		</main>
		<button id="back-to-top-btn">
			<i class="fa-solid fa-angles-up"></i>
		</button>
		<footer class="mt-auto text-white-50">
			<p>&copy; Webseiten-Skeleton, Seweryn Czabanowski, Lily-Braun-Gymniasum</p>
		</footer>
	</div>
	<script type="text/javascript" src="./js/mdb.min.js"></script>
</body>

</html>