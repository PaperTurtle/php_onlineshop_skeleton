<?php
session_start();
require_once 'templates/head.php';
require_once 'templates/connect.php';

/**
 * Aufgabe 1: Registrierungsformular
 * Erstelle ein Registrierungsformular mit den folgenden Feldern:
 *   - Benutzername
 *   - Vorname
 *   - Nachname
 *   - Email
 *   - Passwort
 */

/**
 * Aufgabe 2: Registrierung in die Datenbank einfügen
 *   - Überprüfe, ob das Formular abgesendet wurde [if ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST["register"])]
 *   - Benutzerdaten aus dem Formular lesen und in Variablen speichern
 *   - Überprüfe, ob der Benutzername bereits existiert
 *   - Überprüfe, ob die Email bereits existiert
 *   - Füge den Benutzer in die Datenbank ein
 */

$conn->close();
?>

<main>
    <section class="vh-80" style="background-color: #eee; border-radius: 0.5rem;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96" />
                                </svg>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" class="needs-validation g-3" novalidate>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="placeholder col-<?= rand(7, 9); ?> placeholder-lg"></span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><span class="placeholder placeholder-xs col-<?= rand(3, 5); ?>"></span></h5>
                                        <div class="form-outline input-group mb-4">
                                            <span class="placeholder col-12 placeholder-sm"></span>
                                        </div>
                                        <div class="form-outline mb-4 input-group">
                                            <span class="placeholder col-12 placeholder-sm"></span>
                                        </div>
                                        <div class="form-outline mb-4 input-group">
                                            <span class="placeholder col-12 placeholder-sm"></span>
                                        </div>
                                        <div class="form-outline mb-4 input-group">
                                            <span class="placeholder col-12 placeholder-sm"></span>
                                        </div>
                                        <div class="form-outline mb-4 input-group">
                                            <span class="placeholder col-12 placeholder-sm"></span>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <a href="#" tabindex="-1" class="btn btn-dark placeholder disabled col-4"></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'templates/footer.php'; ?>