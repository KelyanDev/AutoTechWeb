<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - MySQL</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">MySQL</h1>

               <p class="description">MySQL est un système de gestion de base de données relationnelles.</p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation de MySQL !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_sql.png" alt="illustation de MySQL">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>

               <p class="descOrg">Nous allons configurer un certain nombre d'éléments afin que le fonctionnement de MySQL soit assuré.</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation de MySQL et PhpMyAdmin</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Création de la base de données pour l'entreprise</li>
                         <li>Liaison site Web avec la base de données</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de MySQL</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation de MySQL et PhpMyAdmin</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    <li>Installation de MySQL et PhpMyAdmin</li>
               </h2>
          </div>

          <p class="para">Nous allons dans un premier temps installer MySQL ainsi que l'interface graphique PhpMyAdmin pour faciliter la gestion de notre base de données.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt install mariadb-server mariadb-client</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt install phpmyadmin apache2 php-zip php-gd php-json php-curl libapache2-mod-php</p>
                    </div>
               </div>
          </div>

          <div class="organisation">
               <ul class="org">
                    <li>Ensuite, une page s'ouvre automatiquement sur le terminal pour la configuration de phpmyadmin.</li>
                    <li>Tout d'abord, sélectionner apache2 pour choisir le serveur web auquel PhpMyAdmin utilisera pour être exécuté</li>
                    <li>On sélectionne <span class="cmd-spec">Oui</span> pour que la base de données initiale soit automatiquement configurée
                         par dbconfig-common</li>
                    <li>On saisit le mot de passe de connexion MySQL pour phpmyadmin</li>
                    <li>On saisit le mot de passe pour le compte root permettant de créer la base de données MySQL ainsi que les utilisateurs</li>
               </ul>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration de MySQL</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Création de la base de données pour l'entreprise</li>
               <li>Liaison site Web avec la base de données mySQL</li>
          </ul>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Création de la base de données pour l'entreprise
               </h2>
          </div>

          <p class="para">Pour créer notre base de données, nous avons deux choix : soit en ligne de commande, soit sur PhpMyAdmin. Voici les deux méthodes :</p>
          <p class="para">Avec MySQL en ligne de commande</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">mysql -u root -p</p>
                    </div>
               </div>
               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[None]></p>
                         <p class="commande">CREATE DATABASE autotech;</p>
                    </div>
               </div>
               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[None]></p>
                         <p class="commande">USE autotech;</p>
                    </div>
               </div>
               <p class="para">On va ensuite créer nos tables correspondant à notre site WEB ; la première se remplira automatiquement après avoir rempli un formulaire, tandis
                    que la deuxième sera créée manuellement.
               </p>
               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[autotech]></p>
                         <p class="commande">CREATE TABLE `rdv` (
                              `nom` varchar(60) NOT NULL,
                              `prenom` varchar(60) NOT NULL,
                              `date` date NOT NULL,
                              `description` varchar(200) NOT NULL,
                              `tel` int(100) NOT NULL,
                              `email` int(100) NOT NULL
                              ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                              COMMIT;</p>
                    </div>
               </div>
               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[autotech]></p>
                         <p class="commande">CREATE TABLE `voiture` (
                              `nom` varchar(100) NOT NULL,
                              `marque` varchar(60) NOT NULL,
                              `kilometrage` int(11) NOT NULL,
                              `prix` int(11) NOT NULL,
                              `img` varchar(200) NOT NULL
                              ) ENGINE=InnoDB DEFAULT CHARSET=utf8;</p>
                    </div>
               </div>
               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[autotech]></p>
                         <p class="commande">INSERT INTO `voiture`(`nom`, `marque`, `kilometrage`, `prix`, `img`) VALUES
                              ('Porsche version 5', 'Porsche', 1000, 456000, 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
                              ('Chevrolet Camaro', 'Chevrolet', 3000, 678000, 'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                              COMMIT;
                         </p>
                    </div>
               </div>
          </div>
          <p class="para">Pour écrire ces requêtes sur PhpMyAdmin, il faut :</p>
          <div class="organisation">
               <ul class="org">
                    <li>Dans l'onglet <span class="cmd-spec">Base de données</span>, on sélectionne la base de données autotech.</li>
                    <li>Ensuite, on clique sur l'onglet <span class="cmd-spec">SQL</span>, c'est ici qu'on pourra créer nos tables.</li>
                    <li>Dès que nos tables sont créés, on crée nos <span class="cmd-spec">INSERT</span> pour la table 'voiture'.</li>
               </ul>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Liaison site Web avec la base de données mySQL
               </h2>
          </div>
          <p class="para">Dans le fichier confirmation.php :</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">mysql[autotech]></p>
                         <p class="commande">try {<br>
                              $mySqlConnection = new PDO('mysql:host=localhost:8889; dbname=autotech; charset=utf8', 'root', 'root');<br>
                              } catch (Exception $e) {<br>
                              die('Erreur : ' . $e->getMessage());<br>
                              }<br>
                              <br>
                              $ajouterrdv = "INSERT INTO rdv (nom, prenom, date, description, tel, email) VALUES (:nom, :prenom, :date, :description, :tel, :email)";<br>
                              <br>
                              $request = $mySqlConnection->prepare($ajouterrdv);<br>
                         </p>
                    </div>
               </div>

     </section>
</body>

</html>