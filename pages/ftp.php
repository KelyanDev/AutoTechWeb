<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Serveur FTP</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">FTP</h1>
               <p class="description">Le service FTP (File Transfer Protocol) permet de partager des fichiers au sein d'un réseau IP.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du serveur FTP !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_switch.png" alt="illustation d'un switch">
     </section>
     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>
               <p class="descOrg">Nous allons configurer le service qui permettra le transfert de fichiers via le client FTP Filezilla.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation des daemons sur le serveur</li>
                         <li>Installation de Filezilla sur les PCs clients</li>

                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Activation des services</li>
                         <li>Créations des utilisateurs</li>
                         <li>Attribution des permissions des utilisateurs</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du service</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation des daemons</li>
               <li>Installation de Filezilla</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation des daemons
               </h2>
          </div>
          <p class="para">Afin que le serveur devienne un serveur FTP, il faut d'abord installer les daemons FTP et VSFTPD.</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">apt update</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">apt install ftp</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">apt install vsftpd</p>
                    </div>
               </div>

          </div>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de Filezilla sur les clients
               </h2>
          </div>
          <p class="para">
               On télécharge l'application sur chacun des ordinateurs qui serviront de client FTP via le site de Filezilla.
          </p>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du service</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Activation des services</li>
               <li>Créations des utilisateurs</li>
               <li>Attribution des permissions des utilisateurs</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Activation des services
               </h2>
          </div>
          <p class="para">On teste le fonctionnement des services avec <b>systemctl status vsftpd</b> et <b>ftp localhost</b>.</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Création des utilisateurs
               </h2>
          </div>

          <p class="para">On doit maintenant créer des utilisateurs FTP pour utiliser le service. On créera 3 comptes pour des employés et un compte "cisco" qui servira pour enregistrer des backups de configuration du routeur.</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Switch</p>
               </div>

               <div class="headerCli">
                    <p class="titleCli">CLI du serveur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">adduser cisco</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">adduser jean</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">adduser kelyan</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">adduser andy-mael</p>
                    </div>
               </div>
          </div>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Attribution des permissions aux utilisateurs
               </h2>
          </div>
          <p class="para">Une fois les utilisateurs créés, on doit leur attribuer des permissions sur leurs répertoires.</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chmod -R 755 /home/jean</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chmod -R 755 /home/andy-mael</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chmod -R 755 /home/kelyan</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chmod -R 755 /home/cisco</p>
                    </div>
               </div>
          </div>

          <p class="para">On modifie enfin le propriétaire de chacun des répertoire.</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chown jean -R /home/jean</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chown andy-mael -R /home/andy-mael</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chown kelyan -R /home/kelyan</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">debian-srv#</p>
                         <p class="commande">chown cisco -R /home/cisco</p>
                    </div>
               </div>
          </div>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Sauvegarde du fichier de configuration du routeur
               </h2>
          </div>


     </section>
</body>

</html>