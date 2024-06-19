<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Services - Proxy</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Proxy</h1>
               <p class="description">Un service Proxy http, est un service réseau utilisé afin de servir de passerelle entre les utilisateurs et Internet.
                    Ce service permet de contrôler l'accès à Internet, en empêchant la consultation de certains sites malveillants / non adaptés.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du Proxy !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_proxy.png" alt="illustration d'un service DHCP">
     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Installation du service/Configuration</h1>
               <p class="descOrg">Nous allons configurer .</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Installation des paquets de Squid</li>
                         <li>Installation d'une blacklist depuis Internet</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Configuration du port du proxy</li>
                         <li>Configuration du fichier de logs</li>
                         <li>Configuration de l'accès au proxy</li>
                         <li>Configuration du cache</li>
                         <li>Configuration de la blacklist</li>
                         <li>Redémarrage du service </li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du Proxy (Squid)</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
                <li>Installation des paquets de Squid</li>
                <li>Installation d'une blacklist depuis Internet</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation des paquets de Squid
               </h2>
          </div>
          <p class="para">Dans un premier temps, il faut installer les paquets du service proxy. Ici, on utilisera Squid</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt install squid</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation d'une blacklist depuis Internet
               </h2>
          </div>
          <p class="para">Une fois le service Squid installé, on installe une blacklist depuis Internet, on prendra la blacklist suivante: <span class="cmd-spec">https://dsi.ut-capitole.fr/blacklists/index_en.php</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">cd /etc/squid</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">wget http://dsi.ut-capitole.fr/blacklists/download/blacklists.tar.gz</p>
                    </div>
               </div>
          </div>
          
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du service Proxy</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Configuration du port du proxy</li>
               <li>Configuration du fichier de logs</li>
               <li>Configuration de l'accès au proxy</li>
               <li>Configuration du cache</li>
               <li>Configuration de la blacklist</li>
               <li>Redémarrage du service </li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du port du proxy
               </h2>
          </div>
          <p class="para">Pour permettre aux utilisateurs de se connecter au proxy, il faut configurer son port d'écoute dans le fichier <span class="cmd-spec">/etc/squid/squid.conf</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/squid/squid.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">http_port 3168</p>
                    </div>
               </div>
          </div>
          
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du fichier de logs
               </h2>
          </div>
          <p class="para">Maintenant que le serveur écoute sur un port spécifique, nous allons configurer un système de logs afin de voir les logs</p>
          <p class="para">Les logs seront enregistrés dans le fichier <span class="cmd-spec">/var/log/squid/access.log</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/squid/squid.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">access_log daemon:/var/log/squid/access.log squid</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de l'accès au Proxy
               </h2>
          </div>
          <p class="para">Toujours dans le fichier <span class="cmd-spec">/etc/squid/squid.conf</span>, on configure les différents ports et acl pour permettre la connexion au proxy</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/squid/squid.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">acl localnet src 0.0.0.1-0.255.255.255</p>
                         <p class="commande">acl autotech src 192.168.0.0/16</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">acl SSL_ports port 443 <span class="tab"> ------------- </span> # https</p>
                         <p class="commande">acl Safe_ports port 80 <span class="tab"> -------------- </span> # http</p>
                         <p class="commande">acl Safe_ports port 21 <span class="tab"> -------------- </span> # ftp</p>
                         <p class="commande">acl Safe_ports port 873 <span class="tab"> ------------ </span> # rsync</p>
                         <p class="commande">acl Safe_ports port 443 <span class="tab"> ------------ </span> # https</p>
                         <p class="commande">acl Safe_ports port 70 <span class="tab"> ------------- </span> # gopher</p>
                         <p class="commande">acl Safe_ports port 210 <span class="tab"> ------------ </span> # wais</p>
                         <p class="commande">acl Safe_ports port 1025-65535 <span class="tab"> --- </span> # unregistered ports</p>
                         <p class="commande">acl Safe_ports port 280 <span class="tab"> ------------ </span> # http-mgmt</p>
                         <p class="commande">acl Safe_ports port 488 <span class="tab"> ------------ </span> # gss-http</p>
                         <p class="commande">acl Safe_ports port 591 <span class="tab"> ------------ </span> # filemaker</p>
                         <p class="commande">acl Safe_ports port 777 <span class="tab"> ----------- </span> # multiling http</p>
                         <p class="commande">acl CONNECT method CONNECT</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">http_access deny !Safe_ports</p>
                         <p class="commande">http_access allow localhost</p>
                         <p class="commande">http_access allow autotech</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">http_access deny all <span class="tab"> ----- </span> # Refuse l'accès au reste</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du cache
               </h2>
          </div>
          <p class="para">Ensuite, il faut configurer le cache pour le proxy, afin que celui ci puisse stocket temporairement les données et détails de connexion</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/squid/squid.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">cache_dir ufs /var/spool/squid 100 16 256</p>
                         <p class="commande">cache_replacement_policy lru</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de la blacklist
               </h2>
          </div>
          <p class="para">Maintenant que le service est bien configuré, il faut configurer un fichier de blacklist dans lequel les urls des sites bloqués seront enregistrés</p>
          <p class="para">Les URLs sont enregistrées localement dans <span class="cmd-spec">/etc/squid/blackweb.txt</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/squid/squid.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">acl blackweb dstdomain "/etc/squid/blackweb.txt"</p>
                         <p class="commande">http_access deny blackweb</p>
                    </div>
               </div>
          </div>

          
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Redémarrage du service
               </h2>
          </div>
          <p class="para">Maintenant que le service est bien configuré et la blacklist aussi, il faut le redémarrer afin qu'il soit actif sur le réseau</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande">systemctl restart squid</p>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>