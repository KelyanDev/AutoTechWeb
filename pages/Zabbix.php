<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Autotech - Infrastructure - Zabbix</title>
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <section class="section sec1">
          <div class="informations">
               <h1 class="title">Zabbix</h1>

               <p class="description">Zabbix est un outil de supervision permettant d'analyser l'état des machines et des services dans un réseau.</p>

               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation de Zabbix !
               </a>

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <img src="../assets/img/img_grafana.png" alt="illustation d'un [element]">

     </section>

     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Installation et configuration de Zabbix</h1>

               <p class="descOrg">Nous allons configurer Zabbix afin d'avoir la possibilité de surveiller les différentes machines (PC, équipements réseau)
                    ainsi que les services associés (DHCP).</p>

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation de Zabbix</h2>
                         <li>Installation de Zabbix sur Debian 11</li>
                         <li>Installation de l'agent Zabbix sur Windows Server et les clients Windows.</li>
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration de Zabbix</h2>
                         <li>Configuration mySQL</li>
                         <li>Configuration intiale sur l'interface web</li>
                         <li>Configuration des hôtes</li>
                         <li>Configuration des services</li>
                    </ul>
               </div>
          </div>
     </section>

     <section class="section sec3">
          <h1 class="titleSection">Installation de Zabbix</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <li>Installation de Zabbix sur Debian 11</li>
               <li>Installation de l'agent Zabbix sur Windows Server et les clients Windows.</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de Zabbix sur Debian 11
               </h2>
          </div>

          <p class="para">En premier lieu, il faut installer Zabbix sur Debian 11, ainsi que les paquets nécessaires
               pour le bon fonctionnement de cet outil.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt update && apt upgrade</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">wget https://repo.zabbix.com/zabbix/5.4/debian/pool/main/z/zabbix-release/zabbix-release_5.4-1+debian11_all.deb</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">dpkg -i zabbix-release_5.4-1+debian11_all.deb</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt update</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">apt install zabbix-server-mysql zabbix-frontend-php zabbix-apache-conf zabbix-sql-scripts zabbix-agent2 mariadb-server</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation de l'agent Zabbix sur Windows Server et les clients Windows.
               </h2>
          </div>

          <p class="para">Pour que l'outil Zabbix puisse analyser l'état des PCs Windows, il faut que ces derniers aient un agent Zabbix.
          </p>

     </section>

     <section class="section sec3">
          <h1 class="titleSection">Configuration de Zabbix</h1>

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <li>Configuration mySQL</li>
               <li>Configuration intiale sur l'interface web</li>
               <li>Configuration des hôtes</li>
               <li>Configuration des services</li>
          </ul>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration mySQL
               </h2>
          </div>

          <p class="para">Il faut configurer une base de données pour Zabbix afin que les données journalières, de configuration soient stockées dedans.</p>
          <div class="cli">
               <div class="headerCli">
                    <p class="titleCli">CLI du Shell</p>
               </div>

               <div class="bodyCli">
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">mysql -u root -p</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">mysql></p>
                         <p class="commande">create database zabbix character set utf8 collate utf8_bin;</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">mysql></p>
                         <p class="commande">create user zabbix@localhost identified by 'Azerty';</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">mysql></p>
                         <p class="commande">grant all privileges on zabbix.* to zabbix@localhost;</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">mysql></p>
                         <p class="commande">quit;</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">zcat /usr/share/doc/zabbix-sql-scripts/mysql/create.sql.gz | mysql -uzabbix -p zabbix</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">nano /etc/zabbix/zabbix_server.conf</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">1 |</p>
                         <p class="commande">DBPassword=Azerty</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">systemctl restart zabbix-server zabbix-agent2 apache2</p>
                    </div>
                    <div class="formatCommande">
                         <p class="invite">root#</p>
                         <p class="commande">systemctl enable zabbix-server zabbix-agent2 apache2</p>
                    </div>
               </div>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration intiale sur l'interface web
               </h2>
          </div>

          <p class="para">Après avoir fait la configuration de mySQL, nous allons procéder à la configuration initiale de Zabbix
               par l'adresse du serveur hébergeant cet outil.</p>
          <div class="organisation">
               <ul class="org">
                    <li>Il faut saisir 192.168.0.110/zabbix</li>
                    <li>Nous arrivons sur la page de bienvenue, sans oublier de sélectionner la bonne langue</li>
                    <li>Ensuite, y a une page affichant la vérification des pré-requis, puis cliquer sur <span class="cmd-spec">Suivant</span></li>
                    <li>Il faut ensuite configurer la connexion vers la base de données, comme le type de BD (mySQL), le nom d'hôte de la BD, le nom de la BD
                         ainsi que les identifiants 'zabbix' 'Azerty', puis cliquer sur <span class="cmd-spec">Suivant</span></li>
                    <li>Il faut ensuite renseigner le nom d'hôte (ou l'adresse IP de l'hôte), le numéro de port (10051) ainsi que le nom de l'installation (facultatif),
                         puis cliquer sur <span class="cmd-spec">Suivant</span>
                    </li>
                    <li>Sélectionner le bon fuseau horaire, puis cliquer sur <span class="cmd-spec">Suivant</span></li>
                    <li>Il y a ensuite une page de résumé de la configuration pour vérifier si les informations sont bonnes, puis cliquer sur <span class="cmd-spec">Suivant</span></li>
                    <li>Une dernière page s'affiche nous disant que la configuration est terminée, on clique sur <span class="cmd-spec">Suivant</span> et on est redirigé vers la page de connexion</li>
                    <li>Pour se connecter, on saisit les identifiants par défaut, ici le nom d'utilisateur est <span class="cmd-spec">Admin</span> et le mot de passe est <span class="cmd-spec">zabbix</span></li>
                    <li>Pour changer le mot de passe, on se rend dans <span class="cmd-spec">Administration</span>, <span class="cmd-spec">Utilisateurs</span> et on sélectionne <span class="cmd-spec">Admin</span>
                         pour changer le mot de passe.</li>
               </ul>
          </div>

          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des hôtes
               </h2>
          </div>

          <p class="para">Nous allons ensuite procéder à l'ajout des hôtes de notre infrastructure.</p>
          <div class="organisation">
               <ul class="org">
                    <li>Avant d'ajouter un hôte, on crée un groupe d'hôtes nommé <span class="cmd-spec">Autotech</span>.</li>
                    <li>Pour ajouter un hôte, on se rend dans <span class="cmd-spec">Configuration</span> > <span class="cmd-spec">Hôtes</span> et en haut à droite on clique sur <span class="cmd-spec">Créer un hôte</span>.</li>
                    <li>On saisit le nom de l'hôte, correspondant à celui configuré dans les PCs, le groupe d'hôte <span class="cmd-spec">Autotech</span> dans l'onglet <span class="cmd-spec">Modèles</span>, on choisit
                         <span class="cmd-spec">Templates/Operating systems</span> > <span class="cmd-spec">Windows by Zabbix agent</span>, <span class="cmd-spec">Sélectionner</span> puis <span class="cmd-spec">Ajouter</span>.
                    </li>
                    <li>
               </ul>
          </div>

          <p class="para">Nous allons ensuite procéder à l'ajout des services de notre infrastructure, sous forme de journaux, pour DNS avec Windows Server et DHCP avec le serveur Debian.</p>
          <div class="organisation>
               <ul class=" org">
               <li><b>Tout d'abord</b>, pour récupérer les journaux DNS, il faut d'abord activer les logs DNS depuis le gestionnaire DNS de Windows Server. Pour cela, il faut faire un clic droit sur le serveur DNS > Propriétés >
                    l'onglet <span class="cmd-spec">Enregistrement de débogage</span> et on coche <span class="cmd-spec">Enregistrer les paquets dans le journal pour le débogage</span>. Il faut ensuite saisir le chemin
                    et le nom du fichier, ici c'est <span class="cmd-spec">C:\Logs\dns.log</span>. On clique sur <span class="cmd-spec">OK</span>.
               </li>
               <li>Pour afficher les logs du DNS, il faut se rendre dans Configuration > Hôtes</li>
               <li>On clique sur le PC Windows Server qui occupe le serveur DNS</li>
               <li>Dans l'onglet Éléments, on clique en haut à droite sur <span class="cmd-spec">Créer un élément</span></li>
               <li>On saisit le nom de l'élément (Logs Windows Server DNS), le type : "agent Zabbix", la clé : "vfs.file.contents[C:\Logs\dns.log]", l'interface hôte : 192.168.0.100:10050,
                    le type d'information : Journal et on clique sur <span class="cmd-spec">Ajouter</span>.
               </li>
               <li><b>Pour les logs DHCP</b>, on refait la même procédure mais au lieu de cliquer le PC Windows Server, on choisit Zabbix server et on le nomme "Surveillance du fichier de journal DHCP".</li>
               <li>Ensuite dans la clé, on saisit "logrt[/var/log/dhcpd.log]" (pour cela il faut mettre le type "agent Zabbix (actif)) et non vfs.file.contents car le fichier est trop lourd,
                    et on clique sur <span class="cmd-spec">Ajouter</span>.
               </li>
               </ul>
          </div>
     </section>
</body>

</html>