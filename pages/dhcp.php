<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Services - DHCP</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">DHCP</h1>
               <p class="description">Un service DHCP, est un service réseau utilisé afin de permettre aux équipements réseaux d'avoir une configuration IP dynamique.
                    Ce service répond aux requêtes des équipements réseaux, et leur fournit une configuration IP complète afin que ces derniers aient accès à Internet.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du DHCP !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_dhcp.png" alt="illustration d'un service DHCP">
     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Installation du service/Configuration</h1>
               <p class="descOrg">Nous allons configurer différents subnets pour notre service DHCP.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Passage en super-utilisateur</li>
                         <li>Mise à jour des paquets Debian</li>
                         <li>Installation du paquet DHCP</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Configuration de l'adresse IP du serveur</li>
                         <li>Configuration de l'interface écouté</li>
                         <li>Configuration des subnets</li>
                         <li>Configuration du serveur de nom</li>
                         <li>Redémarrage du service </li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du DHCP</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
                <li>Passage en super-utilisateur</li>
                <li>Mise à jour des paquets Debian</li>
                <li>Installation du paquet DHCP</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Passage en super-utilisateur
               </h2>
          </div>
          <p class="para">Dans un premier temps, il faut passer en super-utilisateur sur le serveur Debian</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">user@debian-srv:~#</p>
                         <p class="commande">su</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Mis à jour des paquets Debian
               </h2>
          </div>
          <p class="para">Une fois en super-utilisateur, il faut mettre à jour les paquets Debian</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt update</p>
                    </div>
               </div>
          </div>
          

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation du paquet DHCP
               </h2>
          </div>
          <p class="para">Enfin, il faut installer le paquet DHCP sur le serveur</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur Debian</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv:~#</p>
                         <p class="commande">apt install isc-dhcp-server</p>
                    </div>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du service DHCP</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
                <li>Configuration de l'adresse IP du serveur</li>
                <li>Configuration de l'interface écouté</li>
                <li>Configuration des subnets</li>
                <li>Configuration du serveur de nom</li>
                <li>Redémarrage du service </li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de l'adresse IP du serveur
               </h2>
          </div>
          <p class="para">Pour permettre au serveur d'avoir une adresse IP, nous allons d'abord la lui configurer via le fichier<span class="cmd-spec">/etc/network/interfaces</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/network/interfaces</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">auto enp2s0</p>
                         <p class="commande">iface enp2s0 inet static</p>
                         <p class="commande"> <span class="tab"> ----- </span> address 192.168.0.110/24</p>
                         <p class="commande"> <span class="tab"> ----- </span> gateway 192.168.0.254</p>
                         <p class="commande"> <span class="tab"> ----- </span> dns-nameservers 192.168.0.100</p>
                         <p class="commande"> <span class="tab"> ----- </span> dns-search autotech.fr</p>
                    </div>
               </div>
          </div>
          
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de l'interface écoutée
               </h2>
          </div>
          <p class="para">Maintenant que le serveur a une adresse IP statique, il faut que le service DHCP connaisse le port qu'il doit écouter</p>
          <p class="para">Pour cela, il faut se rendre dans le fichier <span class="cmd-spec">/etc/default/isc-dhcp-server</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/default/isc-dhcp-server</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">INTERFACESv4="enp2s0"</p>
                         <p class="commande">INTERFACESv6=""</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des subnets
               </h2>
          </div>
          <p class="para">Dans le fichier <span class="cmd-spec">/etc/dhcp/dhcpd.conf</span>, on configure les différents réseaux qui seront définis dynamiquement</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/network/interfaces</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">subnet 192.168.0.0 netmask 255.255.255.0 {</p>
                         <p class="commande">}</p>
                         <p class="commande">subnet 172.25.0.0 netmask 255.255.0.0 {</p>
                         <p class="commande">}</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">subnet 192.168.1.0 netmask 255.255.255.0 {</p>
                         <p class="commande"> <span class="tab"> ----- </span> range 192.168.1.10 192.168.1.50</p>
                         <p class="commande"> <span class="tab"> ----- </span> option routers 192.168.1.254</p>
                         <p class="commande">}</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">subnet 192.168.2.0 netmask 255.255.255.0 {</p>
                         <p class="commande"> <span class="tab"> ----- </span> range 192.168.2.10 192.168.2.50</p>
                         <p class="commande"> <span class="tab"> ----- </span> option routers 192.168.2.254</p>
                         <p class="commande">}</p>
                         <p class="commande"> <span class="tab"> ----- </span></p>
                         <p class="commande">subnet 192.168.3.0 netmask 255.255.255.0 {</p>
                         <p class="commande"> <span class="tab"> ----- </span> range 192.168.3.10 192.168.3.50</p>
                         <p class="commande"> <span class="tab"> ----- </span> option routers 192.168.3.254</p>
                         <p class="commande">}</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du serveur de nom
               </h2>
          </div>
          <p class="para">Toujours dans le fichier <span class="cmd-spec">/etc/dhcp/dhcpd.conf</span>, on défini le serveur DNS des équipements réseaux (Voir service DNS pour plus d'informations)</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/network/interfaces</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">option domain-name-servers 192.168.0.100;</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Redémarrage du service
               </h2>
          </div>
          <p class="para">Maintenant que le service est bien configuré, il faut le redémarrer afin qu'il soit actif sur le réseau</p>
          <p class="para">On en profitera également pour redémarrer le service réseau afin que l'adresse IP du serveur soit bien prise en compte</p>
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
                         <p class="commande">systemctl restart networking</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande">systemctl restart isc-dhcp-server</p>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>