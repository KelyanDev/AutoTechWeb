<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Point d'accès WiFi</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">PA WiFi</h1>
               <p class="description">Le point d'accès permet d'obtenir une connexion à internet depuis un appareil mobile (téléphone, tablette, PC portable).
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du PA !
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
               <p class="descOrg">Nous allons configurer le point d'accès pour se connecter à internet</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Branchement du PA</li>
                         
                         
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Paramétrage de base</li>
                         <li>Mise en place des sécurités</li>
                         <li>Paramétrage du DHCP</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Branchement du PA</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Branchement du PA
               </h2>
          </div>
          <p class="para">Tout d'abord, on branche le PA sur secteur et on le réinitialise. On le connecte ensuite à un PC du réseau 192.168.0.0/24.</p>
     
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Paramétrage de base</li>
               <li>Mise en place des sécurités</li>
               <li>Paramétrage du DHCP</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Paramétrage de base
               </h2>
          </div>
          <p class="para">Pour accéder à l'interface de configuration, on tape son adresse par défaut dans un navigateur. Cette dernière est 192.168.0.50.</p>
          <p class="para">On a créé un VLAN dédié pour le réseau du PA dont l'adresse est 192.168.4.0 ; la gateway est 192.168.4.254 et l'interface du switch est 192.168.4.1.</p>
          <p class="para">On a donc attribué une nouvelle adresse statique au PA : 192.168.4.2 </p>
          <p class="para">On doit maintenant se reconnecter à l'AP avec sa nouvelle adresse.</p>
          <p class="para">On peut terminer de lui attribuer sa configuration : gateway, serveur DNS. </p>
         
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Mise en place des sécurités
               </h2>
          </div>
          <p class="para">On attribue un mot de passe à l'interface de configuration depuis la section d'administration du PA.</p>
          <p class="para">On peut aussi attribuer un mot de passe pour se connecter en wifi, mais on souhaite un wifi public.</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Paramétrage du DHCP
               </h2>
          </div>
          <p class="para">Pour terminer la configuration et faire en sorte que le PA soit fonctionnel, on doit activer un service DHCP intégré au PA qui donnera aux équipements les informations de connexion de manière automatique.</p>
          <p class="para">On donne une place de 192.168.4.10 à 192.168.4.50 pour les machines, la gateway et le DNS identiques à ceux du PA.</p>
          <p class="para">L'interface du PA nous permet de suivre les clients DHCP, leurs informations, suivre et paramétrer la durée des baux DHCP, de restreindre certains appareils par leur adresse MAC.</p>
     </section>
</body>

</html>