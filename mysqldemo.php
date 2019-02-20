<pre><?php

function display($row)
{
    print_r($row);
}


// Requete
$query = "SELECT nom FROM docteur";


echo "****    Mysqli    ****<br/>";

$link = mysqli_connect("db", "root", null, "backoffice");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: Mysqli connect" . PHP_EOL;

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        display($row);
    }
    mysqli_free_result($result);
}
else
{
    echo "No data" . PHP_EOL;
}
mysqli_close($link);



echo "****    PDO    ****<br/>";

try
{
    $bdd = new PDO('mysql:host=db;dbname=backoffice;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

echo "Success: PDO" . PHP_EOL;

if ($reponse = $bdd->query($query)) {
    while ($row = $reponse->fetch())
    {
        display($row);
    }

    $reponse->closeCursor();
}
else
{
    echo "No data" . PHP_EOL;
}
