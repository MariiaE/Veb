<?php
    session_start();
        function pdo(): PDO
        {
            static $pdo;
        
            if (!$pdo) {
                $config = parse_ini_file("../password.ini");
                // Подключение к БД
                $log = "pgsql:host=" .  $config['host'];
                $lag = "dbname=" . $config['dbname'];
                $lug = $config['username'];
                $leg = $config['password'];
                 $pdo= new PDO("$log; $lag","$lug","$leg");

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        
            return $pdo;
        }

        function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}
function check_auth(): bool
{
    return !!($_SESSION['id_user'] ?? false);
}
        ?>