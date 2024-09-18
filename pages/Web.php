<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Services - WEB</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Web</h1>
               <p class="description">Un service Web, est un service réseau utilisé afin d'hébergé localement un ou plusieurs site web.
                    Ce service permet aux utilisateurs de se connecter à une page web depuis leur naviguateur. Nous utilisons ici Apache.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation d'Apache !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_web.png" alt="illustration d'un service DHCP">
     </section>
     <?php ?>
     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Installation du service/Configuration</h1>
               <p class="descOrg">Nous allons configurer apache et nodejs afin de pouvoir accéder à notre site web.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Mise à jour des paquets Debian</li>
                         <li>Installation du paquet Apache</li>
                         <li>Installation de NodeJS</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Configuration du site web</li>
                         <li>Configuration de nodejs</li>
                         <li>Configuration de pm2</li>
                         <li>Redémarrage des service</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du DHCP</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Mise à jour des paquets Debian</li>
               <li>Installation du paquet Apache</li>
               <li>Installation de NodeJS</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Mise à jour des paquets Debian
               </h2>
          </div>
          <p class="para">Dans un premier temps, il faut mettre à jour les paquets Debian sur le serveur</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">user@debian-srv:~#</p>
                         <p class="commande">apt update</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation du paquet Apache
               </h2>
          </div>
          <p class="para">Maintenant que les paquets sont à jour, nous installons apache à l'aide du paquet apache2</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt install apache2</p>
                    </div>
               </div>
          </div>
          

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation du paquet NodeJS
               </h2>
          </div>
          <p class="para">Afin de faire tourner notre application backend, nous installons NodeJS sur le serveur</p>
          <p class="para">Il faut, dans un premier temps, utiliser curl afin de définir la source d'installation de NodeJS</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt install curl</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">curl -fsSL https://deb.nodesource.com/setup_22.x -o nodesource_setup.sh</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">bash nodesource_setup.sh</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt install nodejs</p>
                    </div>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du service Web</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
                         <li>Configuration du site web</li>
                         <li>Configuration de nodejs</li>
                         <li>Configuration de pm2</li>
                         <li>Redémarrage des service</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du site web
               </h2>
          </div>
          <p class="para">Pour permettre aux utilisateurs de voir notre application web, nous installons localement le site pré-développé dans <span class="cmd-spec">/var/www/html</span></p>
          <p class="para">Nous installerons le frontend depuis le Github de l'un de nos membres à https://github.com/KelyanDev/build, avant de remplacer le dossier html créé lors de l'installation d'apache2</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">cd /var/www</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">rm -r html</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">git clone https://github.com/KelyanDev/build</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">mv -r build html</p>
                    </div>
               </div>
          </div>
          
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de nodejs
               </h2>
          </div>
          <p class="para">Maintenant que le site web est accessible, nous allons configurer NodeJS afin d'exécuter notre application backend</p>
          <p class="para">Nous installerons notre application backend dans <span class="cmd-spec">/var/www/backend</span>, puis nous installerons toutes les dépendences avec npm</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">git clone https://github.com/KelyanDev/ticketmanagement</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">mv ticketmanagement/backend backend</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www</p>
                         <p class="commande">cd backend</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www/backend</p>
                         <p class="commande">rm -rf node_modules packages-lock.json</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">npm install</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de pm2
               </h2>
          </div>
          <p class="para">pm2 est un gestionnaire de processus pour les applications NodeJS, et nous permettra de faire tourner notre application backend en fond. Nous allons donc l'installer et le configurer</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www/backend</p>
                         <p class="commande">npm install -g pm2</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www/backend</p>
                         <p class="commande">pm2 start npm --name "Backend" -- start</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Redémarrage des services
               </h2>
          </div>
          <p class="para">Maintenant que nos services ont été bien configurés, il suffit de les redémarrer</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www/backend</p>
                         <p class="commande">systemctl restart apache2</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:/var/www/backend</p>
                         <p class="commande">pm2 start Backend</p>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>