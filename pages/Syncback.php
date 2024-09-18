<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - [ELEMENT]</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Syncback</h1>

               <p class="description">Syncback est un logiciel permettant de sauvegarder et de synchroniser des fichiers dans un destination comme un disque interne ou externe,
                    un hôte distant.
               </p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation de Syncback !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_sauvegarde.png" alt="illustation du service Syncback">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Installation/Configuration de la sauvegarde</h1>

               <p class="descOrg">Nous allons configurer Syncback afin que les fichiers des utilisateurs soient stockés dans le serveur Linux.</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation de SyncbackPro sur Windows Server</li>
                         
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Création d'un profil de sauvegarde</li>
                         <li>Sauvegarde sécurisée sous Linux</li>
                         <li>Planification périodique de la sauvegarde</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de SyncbackPro</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation de SyncbackPro sur Windows Server</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de SyncbackPro sur Windows Server
               </h2>
          </div>

          <p class="para">Pour pouvoir utiliser Syncback sur Windows Server, il faut utiliser SyncbackPro car SyncbackFree n'est utilisable que
               sur les éditions "Clientes" de Windows.
          </p>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration de Syncback</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Création d'un profil de sauvegarde</li>
               <li>Sauvegarde sécurisée sous Linux</li>
               <li>Planification périodique de la sauvegarde</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Création d'un profil de sauvegarde
               </h2>
          </div>

          <p class="para">Pour créer un profil de sauvegarde :</p>
          <ul class="org">
               <li>Cliquer sur "Nouveau"</li>
               <li>On donne un nom au profil</li>
               <li>On choisit le type de source un dossier du serveur Windows</li>
               <li>On choisir le type de cible (SFTP, FTP, Rsync) qui nous permettra de transférer les fichiers vers le serveur Linux</li>
          </ul>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Sauvegarde sécurisée sous Linux
               </h2>
          </div>

          <p class="para">Pour permettre un transfert sécurisé, on utilise SFTP :</p>
          <ul class="org">
               <li>Choisir "SFTP" comme type de connexion</li>
               <li>On saisit l'adresse IP du serveur Linux (192.168.0.110)</li>
               <li>On sasit le port SFTP (port 22)</li>
               <li>On saisit les informations d'authentification (nom d'utilisateur, mot de passe).</li>
               <li>On renseigne le dossier source <span class="cmd-spec">C:\user</span> et le dossier cible <span class="cmd-spec">/home/debian-srv/</span></li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Planification périodique de la sauvegarde
               </h2>
          </div>

          <p class="para">Une fois le profil créé, il faut automatiser la sauvegarde :</p>
          <ul class="org">
               <li>Sélectionner le profil créé</li>
               <li>On clique sur <span class="cmd-spec">Planification de tâche</span></li>
               <li>On sélectionne la période, ici quotidienne à 20h00 et on clique sur <span class="cmd-spec">OK</span></li>
          </ul>


     </section>
</body>

</html>