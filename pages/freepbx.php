<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - FreePBX</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">FreePBX</h1>

               <p class="description">FreePBX est un logiciel open-source qui fournit une interface graphique utilisateur (GUI) pour la gestion d'un système téléphonique basé sur Asterisk.</p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation FreePBX !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_freePBX.png" alt="illustation de freePBX" style="width: 512px;">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>

               <p class="descOrg">Nous allons configurer un certain nombre d'éléments afin que le fonctionnement du réseau et la sécurité de celui-ci soient assurés.</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation du serveur freePBX</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Configuration du serveur</li>
                         <li>Configuration des utilisateurs</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de freePBX</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation du serveur freePBX</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation du serveur freePBX
               </h2>
          </div>

          <p class="para">Pour installer le serveur freePBX on fait : </p>
          <ul>
               <li>Sur VirtualBOX, on crée une nouvelle VM debian 11 sans image ISO.</li>
               <li>On va ensuite dans "Configuration" puis stockage et on sélectionne "Lecteur Optique" on indique dans ce champ l'image iso.</li>
               <li>Ensuite, on va dans système, on sélectionne "Optique" et on clique sur la fléche du haut pour qu'il boot en priorité sur l'optique.</li>
               <li>On lance la VM</li>
               <li>On configure un mot de passe pour le root et on laisse faire l'installation</li>
               <li>A la fin de celui-ci, quand il nous demande de redémmarrer, on ne redémarre pas mais on quitte la vm. On se rend dans "Configuration" puis "stockage" puis on clique droit sur le lecteur optique et on clique sur l'option "Supprimer le périphérique".</li>
          </ul>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration du freePBX</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Configuration du serveur</li>
               <li>Configuration des utilisateurs</li>
          </ul>

          <p class="para">On commence par changer la langue du serveur. Pour cela : </p>
          <ul>
               <li>On fait la commande : <span class="cmd-spec">system-config-keyboard</span></li>
               <li>Une interface s'ouvre, on choisi la langue du clavier puis on clique sur ok</li>
               <li>Ensuite, il faut configurer une adresse IP afin d'avoir accès à l'interface web. Pour cela on tape la commande : <span class="cmd-spec">nano /etc/sysconfig/network-scripts/ifcfg-eth0</span> . Dans ce fichier, on ajoute :
                    <ul>
                         <ol>IPADDR=192.168.0.105</ol>
                         <ol>GATEWAY=192.168.0.254</ol>
                         <ol>NETMASK=255.255.255.0</ol>
                    </ul>
               </li>
               <li>On enregistre le fichier (ctrl + x -> yes)</li>
               <li>Puis on redémarre le réseau : <span class="cmd-spec">service network restart</span></li>
          </ul>
          
          <p class="para">Maintenant, on accède à l'interface web en tapant sur le navigateur : <span class="cmd-spec">192.168.0.105</span></p>
          <p class="para">Arrivé sur l'interface on doit configuré l'utilisateur principal en indiquant : Username, Password</p>
          <p class="para">On valide la connexion à l'administration et on skip les différentes publicité.</p>
          <p class="para">On se rend dans l'onglet "Settings" puis "Asterisk SIP Settings"</p>
          <p class="para">On clique sur le bouton "Detect Network Settings" qui permet de détecter les paramètres réseau.</p>
          <p class="para">Une fois détecté, on clique sur le bouton "submit" puis "Apply config".</p>
          
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des utilisateurs
               </h2>
          </div>      
          
          <p class="para">Maintenant que la configuration réseaux est faites, on peut configurer les différents utilisateurs qui auront un téléphone.</p>
          <p class="para">Pour cela, on se rend dans l'onglet "Application" puis "Extension"</p>
          <p class="para">Sachant qu'on utilise le protocol SIP (Session Initiation Protocol), on va configurer des utilisateurs SIP on cliquant sur l'option : "Add new SIP"</p>
          <p class="para">Dans l'onglet général, on configure le "Display Name", "Outbound CID (numéro qui identifie l'utilisateur et qui va permettre d'appeller)", "Secret (mot de passe de l'utilisateur)".</p>
          <p class="para">Enfin, dans l'onglet voicemail, on active la messagerie.</p>
          <p class="para">On peut appliquer chaque utilisateurs aux différents téléphone. Voir la partie sur l'installation de la téléphonie.</p>
          
     </section>
</body>

</html>