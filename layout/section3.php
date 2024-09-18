<?php
//connexion à la bd
try {
     $mySqlConnection = new PDO('mysql:host=192.168.0.110; port=3306; dbname=autotech; charset=utf8', 'admin', 'Azerty123');
} catch (Exception $e) {
     die('Erreur : ' . $e->getMessage());
}

$voitureRequest = "SELECT * FROM `voiture`";

$request = $mySqlConnection->prepare($voitureRequest);
$request->execute();
$resultat = $request->fetchAll($mode = PDO::FETCH_CLASS);

$resultatDecode = json_decode(json_encode($resultat), true);


?>

<!-- <pre>
     <?php
     print_r($resultat);
     ?>
</pre> -->

<section class="section sec3" id="aVendre">
     <h1 class="titleSection">Véhicule à Vendre</h1>

     <div class="containerVoiture">
          <?php foreach ($resultatDecode as $voiture) : ?>
               <div class="voitures">
                    <img class="img" src="<?php echo $voiture["img"] ?>" alt="photo de voiture">
                    <p class="nom"><?php echo $voiture["nom"] ?></p>
                    <div class="info">
                         <p class="tag"><?php echo $voiture["marque"] ?></p>
                         <p class="tag"><?php echo $voiture["kilometrage"] ?></p>
                         <p class="tag"><?php echo $voiture["prix"] ?>€</p>
                    </div>
                    <button class="btn">Acheter</button>
               </div>
          <?php endforeach ?>
     </div>


</section>