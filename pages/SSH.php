<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - SSH</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">SSH</h1>

               <p class="description">SSH (Secure Shell) est un protocole permettant de se connecter de manière sécurisé vers une machine distante.</p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation de SSH !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_ssh.png" alt="illustation d'un ssh">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>

               <p class="descOrg">Nous allons configurer SSH afin d'accéder au serveur Linux ainsi qu'au switch et au routeur.</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation de PuTTY</li>
                         <li>Installation de SSH sur Linux</li>
                         <li>Installation de SSH sur Cisco IOS</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Configuration de SSH sous Cisco IOS</li>
                         <li>Connexion SSH par PuTTY</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de SSH</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation de PuTTY</li>
               <li>Installation de SSH sur Linux</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de PuTTY
               </h2>
          </div>

          <p class="para">Pour se connecter facilement avec SSH, on va installer le logiciel puTTY.</p>
          <div class="organisation">
               <ul class="org">
                    <li>Pour télécharger puTTY, on se rend sur putty.org</li>
                    <li>Une fois installé, on suit les instructions d'installation</li>
               </ul>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de SSH sur Linux
               </h2>
          </div>

          <p class="para">Pour qu'un PC client puisse accéder au serveur Linux par SSH, il faut installer le paquet du serveur SSH.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt install openssh-server</p>
                    </div>
               </div>
          </div>

     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration du SSH</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Configuration de SSH sous Cisco IOS</li>
               <li>Connexion SSH par PuTTY</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de SSH sous Cisco IOS
               </h2>
          </div>

          <p class="para">Pour qu'on puisse accéder au switch et au routeur, il faut que SSH soit activé et opérationnel sur le switch et le routeur.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI de Cisco IOS</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">Switch></p>
                         <p class="commande">enable</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Switch#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Switch(config)#</p>
                         <p class="commande">hostname switch-autotech</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config)#</p>
                         <p class="commande">ip domain-name autotech.fr</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config)#</p>
                         <p class="commande">crypto-key generate rsa</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config)#</p>
                         <p class="commande">ip ssh version 2</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config)#</p>
                         <p class="commande">line vty 0 4</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config-line)#</p>
                         <p class="commande">transport input ssh</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config-line)#</p>
                         <p class="commande">login local</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config-line)#</p>
                         <p class="commande">username rt password rt</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech(config-line)#</p>
                         <p class="commande">end</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">switch-autotech#</p>
                         <p class="commande">copy running-config startup config</p>
                    </div>
               </div>
          </div>
          <span class="cmd-spec">Idem pour le routeur !</span>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Connexion SSH par PuTTY
               </h2>
          </div>

          <p class="para">Pour que l'on puisse se connecter au switch, routeur et le serveur Linux, on passe par puTTY.</p>
          <div class="organisation">
               <ul class="org">
                    <li>On lance puTTY.</li>
                    <li>On coche "SSH"</li>
                    <li>On saisit l'adresse IP de la machine auquel on souhaite se connecter</li>
                    <li>On clique sur <span class="cmd-spec">Open</span>.</li>
                    <li>Lors de la première connexion, une fenêtre s'affiche nous indiquant si on accepte la connexion vers la machine distante.</li>
               </ul>
          </div>



     </section>
</body>

</html>