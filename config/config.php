<?php
// 1. Sicurezza: Avvio della sessione
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Impostazioni del Sito (Costanti)
// Usare le costanti (define) è meglio delle variabili perché non possono essere cambiate per errore
define('SITE_NAME', 'SynapSim');
define('BASE_URL', ''); // Utile per i link assoluti

// 3. Configurazione Database (per quando lo attiverai)
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'synap');
define('DB_USER', 'root');
define('DB_PASS', '');

// 4. Inclusione automatica del Database (se il file esiste)
if (file_exists('DataBase/db.php')) {
    require_once 'DataBase/db.php';
}

// 5. Funzioni di utilità (Cybersecurity)
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
// Simulazione dati dal Database

?>