    <?php
    $naam = '';
    $email = '';
    $foutmelding = '';
    $ingeschreven = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $naam = trim($_POST['naam'] ?? '');
        $email = trim($_POST['email'] ?? '');

        if ($naam === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $foutmelding = 'Vul je naam en een geldig e-mailadres in.';
        } else {
            $ingeschreven = true;
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nieuwsbrief inschrijven | LevelUp Hardware</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="css/style-MSI.css">
        <link rel="stylesheet" href="css/nieuwsbrief.css">
    </head>
    <body>
        <?php require_once 'header.php'; ?>
        <main>
            <section class="nieuwsbrief-kaart">
                <?php if ($ingeschreven): ?>
                    <h2>Bedankt, <?= htmlspecialchars($naam, ENT_QUOTES, 'UTF-8') ?>!</h2>
                    <p class="nieuwsbrief-bericht">Je bent ingeschreven voor de nieuwsbrief.</p>
                    <a class="nieuwsbrief-terug" href="index.php">Terug naar de homepagina</a>
                <?php else: ?>
                    <h2>Nieuwsbrief</h2>
                    <p class="nieuwsbrief-bericht">Schrijf je in voor nieuws en aanbiedingen van LevelUp Hardware.</p>

                    <?php if ($foutmelding !== ''): ?>
                        <p class="nieuwsbrief-fout"><?= htmlspecialchars($foutmelding, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <form class="nieuwsbrief-inschrijfformulier" method="post">
                        <label for="naam">Je naam</label>
                        <input type="text" id="naam" name="naam" value="<?= htmlspecialchars($naam, ENT_QUOTES, 'UTF-8') ?>" placeholder="Vul je naam in" required>
                        <label for="email">Je e-mailadres</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" placeholder="naam@voorbeeld.nl" required>
                        <button type="submit">Inschrijven</button>
                    </form>
                    <a class="nieuwsbrief-terug" href="index.php">Terug naar de homepagina</a>
                <?php endif; ?>
            </section>
        </main>
        <script src="script.js"></script>
    </body>
    </html>