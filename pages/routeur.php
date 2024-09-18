<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - routeur</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Routeur</h1>
               <p class="description">Un routeur, est un dispositif réseau
                    utilisé pour permettre d'aller sur internet. Il agit comme un pont entre le résau local (LAN) et le réseau extérieur.
               </p>
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation du routeur !
               </a>
               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_routeur.png" alt="illustation d'un switch">
     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>
               <p class="descOrg">Nous allons configurer un certain nombre d'éléments afin que le routage soient assurés.</p>
               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <li>Branchement éléctriques</li>
                         <li>Connexion du LAN</li>
                         <li>Connexion vers l'IUT</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <li>Changement de noms</li>
                         <li>Configuration des sous-interfaces</li>
                         <li>Configuration de l'interface internet</li>
                         <li>Configuration du nat</li>
                         <li>Configuration de l'accès à distance</li>
                         <li>Enregistrement</li>
                    </ul>
               </div>
          </div>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Installation du routeur</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Branchement éléctriques</li>
               <li>Connexion du LAN</li>
               <li>Connexion vers l'IUT</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Branchement éléctrique
               </h2>
          </div>
          <p class="para">Afin que le Routeur fonctionne, nous le branchons électriquement sur une multiprise dans la baie afin qu'on puisse y accéder.</p>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Connexion du LAN
               </h2>
          </div>
          <p class="para">
               On branche un câble ethernet entre le switch (port 24 => trunk) vers le routeur sur le premier port.
          </p>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Connexion vers l'IUT
               </h2>
          </div>
          <p class="para">
               On branche un câble ethernet sur le deuxième port du routeur sur le switch de l'IUT.
          </p>
     </section>
     <section class="section sec3">
          <h1 class="titleSection">Configuration du switch</h1>
          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Changement de noms</li>
               <li>Configuration des sous-interfaces</li>
               <li>Configuration de l'interface internet</li>
               <li>Configuration du routage</li>
               <li>Configuration de l'accès à distance</li>
               <li>Enregistrement</li>
          </ul>
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Changement de noms
               </h2>
          </div>
          <p class="para">Pour identifié le Routeur, nous allons d'abord lui changer son nom avec la commande <span class="cmd-spec">hostname</span> qui s'exécute sur le mode de configuration global.</p>

          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">Routeur></p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Routeur></p>
                         <p class="commande">enable</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Routeur#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Routeur#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Routeur(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">Routeur(conf)#</p>
                         <p class="commande">hostname routeurAutotech</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">end</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des sous-interfaces
               </h2>
          </div>
          <p class="para">Sachant que nous avons branché sur le port Gig0/0/0 un trunk faisant le lien de 5 vlan, nous allons lui configurer 5 sous-interfaces sur l'interface Gig0/0/0.</p>
          <p class="para">On commence par la rendre actif.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande">no shut</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>
          <p class="para">On configure chaque sous-interface en lui appliquant un VLAN avec l'encapsulation <span class="cmd-spec">dot1q</span> et une adresse correspondant aux vlans choisis.</p>
          <p class="para">Sous-interface 1 (vlan 1) : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0.1</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">encapsulation dot1q 100</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">ip address 192.168.1.254 255.255.255.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>
          <p class="para">Sous-interface 2 (vlan 2) : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0.2</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">encapsulation dot1q 200</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">ip address 192.168.2.254 255.255.255.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>
          <p class="para">Sous-interface 3 (vlan 3) : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0.3</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">encapsulation dot1q 300</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">ip address 192.168.3.254 255.255.255.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>
          <p class="para">Sous-interface 4 (vlan 4) : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0.4</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">encapsulation dot1q 400</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">ip address 192.168.4.254 255.255.255.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>
          <p class="para">Sous-interface 5 (vlan 5) : </p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/0.5</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">encapsulation dot1q 500</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">ip address 192.168.0.254 255.255.255.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-subif)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de l'interface internet
               </h2>
          </div>
          <p class="para">On configure le port Gig0/0/1 avec l'adresse IP publique <span class="cmd-spec">172.25.0.100/16</span> qui sera celui branché au réseau de l'IUT.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">conf t</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">int Gig0/0/1</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande">no shut</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande">ip address 172.25.0.100 255.255.0.0</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf-if)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande"></p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du routage
               </h2>
          </div>
          <p class="para">Afin que les paquets puissent communiquer avec leur destination, il est important de mettre en place le NAT qui permet de faire la translation d'adresse entre les sous-interfaces et l'adresse publique.</p>
          <p class="para">Sous-chaque sous-interface (or celle vers l'iut) on fait la commande : <span class="cmd-spec">ip nat inside</span> qui permet de spécifier que ces adresse seront celle translaté.</p>
          <p class="para">Sous l'interface vers l'iut on fait la commande : <span class="cmd-spec">ip nat outside source list 1 interface Gigabit0/0 overload</span> qui permet de spécifier que ça sera cet adresse qui fera la nouvelle.</p>
          <p class="para">On configure une access-list pour autoriser les source à entré dans le réseau dans le mode de configuration global : <span class="cmd-spec">access-list 1 permet 192.168.0.0 0.0.0.255 </span> qui permet de spécifier que ça sera cet adresse qui fera la nouvelle.</p>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration de l'accès à distance
               </h2>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Enregistrement
               </h2>
          </div>
          <p class="para">Afin de ne pas perdre la configuration au redémarrage, on sauvegarde nos modification dans la <span class="cmd-spec">startup-config</span></p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Routeur</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech(conf)#</p>
                         <p class="commande">exit</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande"></p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">copy running-config startup-config</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">routeurAutotech#</p>
                         <p class="commande">y</p>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>