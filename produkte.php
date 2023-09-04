<?php
session_start();
require_once 'templates/head.php';

/**
 * Erstellt eine Bootstrap-Karte für ein Produkt und gibt sie als HTML-Code zurück
 * 
 * @param array $row Ein Array mit den Produktdaten
 * @return string HTML-Code für eine Bootstrap-Karte
 */
function createProductCard(array $row): string
{
    global $kategorieFarben;
    $kategorie = $row["kategorie"];
    $badgeFarbe = $kategorieFarben[$kategorie];
    return '
        <div class="col-md-3 mb-4 card-fade" style="display: none;">
            <div class="card h-100">
                <img src="data:image/jpeg;base64,' . base64_encode($row['bild']) . '" class="card-img-top mx-auto" style="height: 200px; width: 200px;" alt="' . $row["name"] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $row["name"] . '</h5>
                    <a><span class="badge mb-2" style="background-color: ' . $badgeFarbe . ';">' . $row["kategorie"] . '</span></a>
                    <p class="card-text fst-italic">' . $row["beschreibung"] . '</p>
                    <p class="card-text font-monospace">' . $row["preis"] . ' € pro Packung</p>
                    <a href="produkt.php?id=' . $row["produkt_id"] . '" class="btn btn-success">Details <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    ';
}

$kategorieFarben = array(
    "Obst" => "#FF5733",
    "Gemüse" => "#4CAF50",
    "Proteine" => "#FFC300",
    "Milchprodukte" => "#FF6B8A",
    "Backwaren" => "#A569BD",
    "Frühstück" => "#48C9B0",
    "Grundnahrungsmittel" => "#FF5733",
    "Fisch" => "#3498DB",
    "Süßigkeiten" => "#E74C3C",
    "Getränke" => "#58D68D",
    "Brotaufstriche" => "#F7DC6F",
    "Soßen" => "#AF7AC5",
    "Öle" => "#45B39D",
    "Süßungsmittel" => "#F1948A",
    "Würzmittel" => "#D5DBDB"
);
?>

<main background-color="eee" class="min-vh-100">
    <div class="container-fluid p-3">
        <form action="" method="GET" class="search-form mt-4 mb-6">
            <div class="row justify-content-md-start">
                <div class="col-md-3 mb-3">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="text" name="search" id="search" class="form-control">
                            <label class="form-label" for="search">Suche nach Namen</label>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="input-group">
                        <select name="category" id="category" class="form-select">
                            <option value="">Alle Kategorien</option>
                            <option value="Obst">Obst</option>
                            <option value="Gemüse">Gemüse</option>
                            <option value="Proteine">Proteine</option>
                            <option value="Milchprodukte">Milchprodukte</option>
                            <option value="Backwaren">Backwaren</option>
                            <option value="Frühstück">Frühstück</option>
                            <option value="Grundnahrungsmittel">Grundnahrungsmittel</option>
                            <option value="Fisch">Fisch</option>
                            <option value="Süßigkeiten">Süßigkeiten</option>
                            <option value="Getränke">Getränke</option>
                            <option value="Brotaufstriche">Brotaufstriche</option>
                            <option value="Soßen">Soßen</option>
                            <option value="Öle">Öle</option>
                            <option value="Süßungsmittel">Süßungsmittel</option>
                            <option value="Würzmittel">Würzmittel</option>
                        </select>
                        <button type="submit" class="btn btn-success">Filtern <i class="fa-solid fa-arrow-down-short-wide"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <!-- ### PLACEHOLDER - KANN SPÄTER GELOSCHT WERDEN ### -->
            <?php
            for ($i = 0; $i <= 3; $i++) { ?>
                <div class="col-md-3 mb-4 card-fade" aria-hidden="true">
                    <div class="card h-100">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title"><span class="placeholder col-<?= rand(5, 8); ?>"></span></h5>
                            <span class="placeholder col-1"></span>
                            <p class="card-text fst-italic">
                                <span class="placeholder col-<?= rand(1, 8); ?>"></span>
                                <span class="placeholder col-<?= rand(1, 8); ?>"></span>
                            </p>
                            <p class="card-text font-monospace">
                                <span class="placeholder col-<?= rand(1, 8); ?>"></span>
                                <span class="placeholder col-<?= rand(1, 8); ?>"></span>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-secondary placeholder disabled col-4"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- ### HIER KOMMT EIGENTLICHER CODE -->
            <?php
            // Datenbankverbindung herstellen
            require_once 'templates/connect.php';

            /**
             * Aufgabe 1: SQL-Query vorbereiten
             * Erstelle eine SQL-Abfrage, die alle Produkte aus der Tabelle produkte auswählt.
             * Weise die SQL-Abfrage einer Variable zu. (z.B $sql)
             */

            /**
             * Aufgabe 2: Produktsuche hinzufügen
             * Überprüfe, ob die Variable `$_GET['search']` gesetzt ist.
             */

            /**
             * Aufgabe 3: Kategorieauswahl hinzufügen
             * Überprüfe ob die Variable `$_GET['category']` gesetzt ist und nicht leer ist.
             */

            /**
             * Aufgabe 4: Abfrage ausführen
             * Führe die SQL-Abfrage aus.
             * Speicher das Ergebnis in einer Ergebnisvariable (z.B $result).
             */

            /**
             * Aufgabe 5: Produkte darstellen
             * Überprüfe, ob Produkte im Ergebnis vorhanden sind. 
             * Wenn ja, verwende eine Schleife, um die Produkte als Bootstrap-Karten darzustellen 
             * (nutze dafür die createProductCard-Funktion die oben ist).
             */

            /**
             * Aufgabe 6: Fehlermeldung anzeigen
             * Wenn keine Produkte gefunden wurden, geben Sie eine Fehlermeldung aus.
             */

            // Verbindung beenden
            mysqli_close($conn);
            ?>
        </div>
    </div>
</main>

<?php require_once 'templates/footer.php'; ?>