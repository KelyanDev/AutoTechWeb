<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Téléphone IP</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Téléphone IP</h1>
               <p class="description">Un téléphone IP, est un dispositif qui permet de communiquer avec la voix par internet en utilisant le protocol SIP.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation des Téléphones SIP !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_telIp.png" alt="illustation d'un telIP">
     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>
               <p class="descOrg">Nous allons configurer les téléphone IP afin d'avoir une communication par voix au sein de l'entreprise en interne mais aussi vers l'éxtérieur.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Branchement éléctriques</li>
                         <li>Connexion au réseau</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Reset</li>
                         <li>Ajout du proxy</li>
                         <li>Ajout de l'utilisateur</li>
                         <li>Configuration des softphone</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du téléphone IP</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Branchement éléctriques</li>
               <li>Connexion au réseau</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Branchement éléctrique
               </h2>
          </div>
          <p class="para">Les téléphone IP doivent-être alimentés via POE, nous branchons un injecteur POE entre notre switch et la baie de brassage afin qu'il soit alimenté (un câble d'alimentation est nécessaire et doit-être branché sur une prise éléctrique).</p>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Connexion au réseau
               </h2>
          </div>
          <p class="para">
               On branche un câble ethernet entre sur le téléphone sur le port LAN vers un port disponible dans la salle, celui-ci sera raccordé à un port du VLAN 1 du switch.
          </p>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du téléphone IP</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Reset</li>
               <li>Ajout du proxy</li>
               <li>Ajout de l'utilisateur</li>
               <li>Configuration des softphone</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Reset
               </h2>
          </div>
          <p class="para">Nous avons des téléphone <span class="cmd-spec">Cisco</span>.</p>
          <p class="para">Pour les reset, nous allons appuyer sur le bouton avec le <span class="cmd-spec">logo d'une feuille</span> puis on navigue pour trouver l'option <span class="cmd-spec">Factory Reset</span>. On suit les indications.</p>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Ajout du proxy
               </h2>
          </div>
          <p class="para">Une foix reset, le téléphone étant branché, il va récupérer une adresse IP au près du dhcp, on la récupére en allant dans <span class="cmd-spec">Network</span>.</p>
          <p class="para">Sur un PC, nous allons sur un navigateur et on tape l'adresse du téléphone IP, chez nous : <span class="cmd-spec">192.168.1.11</span>.</p>
          <p class="para">On arrive sur une interface, en haut à droite, on clique sur <span class="cmd-spec">Admin login</span>.</p>
          <p class="para">Ensuite on clique sur <span class="cmd-spec">Ext1</span> puis on va dans la section <span class="cmd-spec">proxy</span>.</p>
          <p class="para">On ajoute l'adresse IP du proxy (call server), chez nous : <span class="cmd-spec">192.168.0.105</span></p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Ajout de l'utilisateur
               </h2>
          </div>
          <p class="para">Ensuite, dans la section d'après, on indique les informations sur les utilisateurs qu'on a crée.</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des softphones
               </h2>
          </div>
          <p class="para">Étant limité en terme d'injecteur POE, nous avons mis en place 2 softphone en plus qui font office de téléphone IP avec le logiciel <span class="cmd-spec">x-lite</span>.</p>
          <p class="para">Une fois intallé, nous cliquons sur <span class="cmd-spec">fléche</span> puis sur <span class="cmd-spec">sip settings</span>.</p>
          <p class="para">On clique sur le bouton <span class="cmd-spec">add</span> puis on indique : </p>
          <ul>
               <li>Le nom affiché : <span class="cmd-spec">Kélyan</span> et <span class="cmd-spec">Jean</span></li>
               <li>L'id de l'utilisateur : <span class="cmd-spec">101</span> et <span class="cmd-spec">102</span></li>
               <li>Le mot de passe de l'utilisateur : <span class="cmd-spec">Azerty123</span></li>
               <li>Le proxy : <span class="cmd-spec">192.168.0.105</span></li>
          </ul>

     </section>
</body>

</html>