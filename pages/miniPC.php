<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Mini PC</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Mini PC</h1>
               <p class="description">Un Mini PC, est un dispositif qui permet de faire plusieurs fonction comme traiter du texte, coder, naviguer sur internet.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation des Mini PC !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_miniPc.png" alt="illustation d'un telIP">
     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>
               <p class="descOrg">Nous allons configurer les mini-PC afin que chaque client est son propre PC, mais aussi permettre d'avoir des machine pour hébergé nos services.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Branchements électriques</li>
                         <li>Branchements périphériques</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Organisation</li>
                         <li>Installation des OS</li>
                         <li>Configuration statique</li>
                         <li>Configuration dynamique</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation des mini-PC</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Branchements électriques</li>
               <li>Branchements périphériques</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Branchements électriques
               </h2>
          </div>
          <p class="para">Les mini-PC doivent-être alimentés via une prise électrique afin qu'ils fonctionnent.</p>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Branchements périphériques
               </h2>
          </div>
          <p class="para">
               Pour la navigation et l'accès à internet, nous branchons : <span class="cmd-spec">un clavier, une souris, un écran et un câble ethernet</span>.
          </p>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration des mini-PC</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Organisation</li>
               <li>Installation des OS</li>
               <li>Configuration statique</li>
               <li>Configuration dynamique</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Organisation
               </h2>
          </div>
          <p class="para">Par soucis de matériel, nous organisons nos 4 mini-PC de cette sorte : <span class="cmd-spec">2 serveurs (windows serveur, debian)</span> et <span class="cmd-spec">2 clients (windows 10)</span>.</p>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation des OS
               </h2>
          </div>
          <p class="para"><span class="cmd-spec">Pour les PC clients (Windows 10) : </span></p>
          <p class="para">On branche une clé qui va nous permettre de booter sur l'installeur windows sur les mini-PC.</p>
          <p class="para">On démarre la machine, et on appuie plusieurs fois sur la touche <span class="cmd-spec">F2</span>, jusqu'à arriver sur le BIOS des mini-PC.</p>
          <p class="para">Dans le menu, on se rend sur <span class="cmd-spec">boot sequence</span>. On indique qu'il doit démarrer en priorité sur la clé USB.</p>
          <p class="para">On applique les changements et on quitte. Il redémarre sur la clé USB, on arrive sur la procédure d'installation de windows 10.</p>
          <p class="para">On suit les étapes de la procédure de windows. A la fin on retire la clé et on redémarre les mini-PC.</p>


          <p class="para"><span class="cmd-spec">Pour le PC Windows Serveur : </span></p>
          <p class="para">On suit la procédure d'installation de windows 10 expliquer plus haut. Prendre la clé Windows Serveur.</p>


          <p class="para"><span class="cmd-spec">Pour le PC serveur Debian : </span></p>
          <p class="para">On suit la procédure d'installation de windows 10 pour le boot, expliquer plus haut, puis la procédure d'installation de debian. Prendre la clé Linux Debian.</p>
          <p class="para">A la différence, on ne veux pas d'interface graphique pour gagner en Mémoire, pour cela on décochera l'environnement gnome et l'interface graphique à la fin de l'installation.</p>
          <p class="para">Juste après il nous demanderas si on souhaite installer gnome pour le démarrage, on coche "oui" sinon le serveur ne pourrat jamais démarrer.</p>
          <p class="para">A la fin d'installation on enlève la clé et on redémarre.</p>


          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration statique
               </h2>
          </div>

          <p class="para">Pour la configuration IP des PCs, nous avons d'abord fait une configuration statique afin de voir si notre infrastructure fonctionner correctement.</p>

          <p class="para"><span class="cmd-spec">Pour windows : </span></p>
          <p class="para">Pour faire la configuration IP : </p>
          <ul>
               <li>On se rend dans le panneau de configuration.</li>
               <li>On va dans "Réseau et Internet".</li>
               <li>On se rend sur "Centre Réseau et partage"?</li>
               <li>On se rend sur "Connexion Réseau".</li>
               <li>On clique droit sur l'interface internet, propriété.</li>
               <li>On va dans IPv4, on configure une adresse IP statique avec un maque, une passerelle et des DNS pour chaque PC windows :
                    <ol>
                         <li>
                              IP : 192.168.0.100/24, PASS : 192.168.0.254, DNS : 192.168.117.181, 192.168.117.182 => Serveur Windows
                         </li>
                         <li>
                              IP : 192.168.1.10/24, PASS : 192.168.1.254, DNS : 192.168.117.181, 192.168.117.182 => Client 1 (vlan 1)
                         </li>
                         <li>
                              IP : 192.168.2.10/24, PASS : 192.168.2.254, DNS : 192.168.117.181, 192.168.117.182 => Client 2 (vlan 2)
                         </li>
                    </ol>
               </li>
          </ul>

          <p class="para"><span class="cmd-spec">Pour Linux : </span></p>
          <p class="para">Pour faire la configuration IP : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Serveur Linux</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande">su</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande">password: *********</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">nano /etc/network/interfaces</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">ouverture/écriture du fichier...</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">systemctl restart networking</p>
                    </div>
               </div>
          </div>
          <p class="para">A la fin du fichier <span class="cmd-spec">/etc/network/interfaces</span>on indique ceci : </p>
          <p class="para">auto ens18<br>iface ens18 inet static<br>address 192.168.0.110/24<br>gateway 192.168.0.254</p>
          <p class="para">Pour enregister la configuration : ctrl+x puis o puis entrer.</p>

          <p class="para"><span class="cmd-spec">Test</span></p>
          <p class="para">Après des test de ping avec ip puis avec des FQDN on peut confirmer le fonctionnement de notre infrastructure IP</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration dynamique
               </h2>
          </div>

          <p class="para">Maintenant les PC client seront en dynamique tandis que les serveurs resterons en statique. Nous utiliserons DHCP pour la configuration qui sera effectué par le serveur linux.</p>
          <p class="para">On passe les client windows en mode DHCP, en suivant la même procédure que précédemment avec le panneau de configuration mais en cochant à la fin "DHCP"</p>
          <p>Sur linux, nous allons utilisé le service <span class="cmd-spec">isc-dhcp-server</span>.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Serveur Linux</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande">su</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux$</p>
                         <p class="commande">password: *********</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">apt updates</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">updates des paquets...</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">apt install isc-dhcp-server</p>
                         <p class="comment">% Renvoie une erreur car il faudra lui précisé sur quel port écouté.</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">nano /etc/default/isc-dhcp-server</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">ouverture du fichier...</p>
                         <p class="comment">% On indique dans "ipV4" le port qui recevra les requêtes DHCP, chez nous "ens18".</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">nano /etc/dhcp/dhcpd.conf</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">ouverture du fichier...</p>
                         <p class="comment">% on configure les plages d'adresses, les passerelles, les dns qui seront donnés pour chaque vlans.</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">srv-linux~$</p>
                         <p class="commande">systemctl restart isc-dhcp-server</p>
                    </div>
               </div>
          </div>

          <p class="para">Une fois configuré, il est capable d'écouter et d'envoyer des packs de configuration.</p>
          <p class="para">Sur le pc windows, on se rend sur le powershell et on indique : <span class="cmd-spec">ipconfig /renew</span></p>
     </section>
</body>

</html>