<?php

use App\Footerconact;
use App\Test;

require_once("vendor/autoload.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/view'); // repertoir contient tous les fichiers twig
$twig = new \Twig\Environment($loader, [
    'debug' => true, // vardump
    'cache' => false, //
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$addition = new Test;

$contct = new Footerconact;

$get_view = "";
if (isset($_GET["s"])){
    $get_view = $_GET["s"];
}

switch ($get_view) {

    case 'acc':
        $loadpage1 = "active";$loadpage2 = "";$loadpage3 = "";$loadpage4 = "";
        echo $twig->render("acceuil.twig",["loadpage1" => $loadpage1]);
        break;

        case 'adv':
            $loadpage1 = "";$loadpage2 = "active";$loadpage3 = "";$loadpage4 = "";
            echo $twig->render("adversaires.twig",["loadpage2" =>  $loadpage2]);
        break;

        case 'Her':
            $loadpage1 = "";$loadpage2 = "";$loadpage3 = "active";$loadpage4 = "";
            echo $twig->render("heros.twig", ["loadpage3" =>  $loadpage3]);
        break;
        
        case 'apro':
            $loadpage1 = "";$loadpage2 = "";$loadpage3 = "";$loadpage4 = "active";
            echo $twig->render("apropos.twig",["loadpage4" =>  $loadpage4]);
        break;

    default:
    echo $twig->render("acceuil.twig");
        break;
}


