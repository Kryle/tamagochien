<?php
include_once("Chien.class.php");
include_once ("Nourriture.class.php");

echo "<link rel=stylesheet href = 'main.css'>
      <script type=\"text/javascript\" src='script.js'></script>";

$chien = new Chien("Medor", 100, 80, 90, 60);
$carotte = new Nourriture("Carotte",50, -20);
$kfc = new Nourriture("KFC", -100, 40);

echo "
        <h1>TAMAGOCHIEN</h1>
        <ul id='listeAction'>
            <il><button id='manger' onclick='showNourriture()'>Manger</button></il>
            <il><button id='promener' onclick='sePromener()'>Promener</button></il>
        </ul>
         <ul id='listeNourriture'>
            <il><button id='carotte' onclick='mangerCarotte'>Carotte</button></il>
            <il><button id='kfc' onclick='mangerKFC'>KFC</button></il>
        </ul>
";

echo $chien->statistique()."<br><br>";
echo $chien->aboyer()."<br><br>";
echo $chien->statistique()."<br><br>";
echo $chien->dormir()."<br><br>";
echo $chien->statistique()."<br><br>";
echo $chien->mordre()."<br><br>";
echo $chien->statistique()."<br><br>";
echo $chien->sePromener()."<br><br>";
echo $chien->statistique()."<br><br>";
echo $chien->manger($kfc)."<br><br>";

