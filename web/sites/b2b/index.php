<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title> b2b WT15</title>
</head>
<body>
<p>Test de la db :</p>
        <pre>
        <?php
            $query ='SELECT * FROM objets;';
            try
            {
                $db = new PDO('mysql:host=172.17.0.5;dbname=woody_toys', 'fpm', 'wtg15');
                $answer = $db->query($query);

                foreach($answer->fetchAll(PDO::FETCH_ASSOC) as $row) {
                print_r($row);
                }
                $db = null;
            }
            catch (PDOException $e)
            {
                die('Erreur');
            }

            echo '<hr><br><br>';
            echo '</pre>'; ?>
<h1>welcome to b2b</h1>
<?php echo phpinfo(); ?>
</body>
</html>