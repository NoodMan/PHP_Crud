
        <?php
        $dbh = 'mysql:host=localhost;dbname=Coupe_du_monde';
        $user = 'dbuser';
        $pass = '';

        try {
            $pdo = new Pdo($dbh, $user, $pass);
        } catch (PDOException $e) {
            print "Error !: " . $e -> getMessage();
            die();
        }
        ?>




