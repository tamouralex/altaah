Sitepackage for the project "altaah1package"
==============================================================

Ein minimalistiches Package zu erstellen kleiner Webseiten insbesondere Onepager

1. Leere Installation von Typo3 mit Composer anlegen
2. Ordner local_packages im root anlegen
3. Composer.json der Installation das Repositorie hinzufügen
   {
	"name": "typo3/cms-base-distribution",
    "repositories": [
       {
          "type": "path",
          "url": "./local_packages/*"
       }
    ],	
	"description" : "TYPO3 CMS Base Distribution",
	"license": "GPL-2.0-or-later",
	---------
4. altaah1package in local_packages speichern (altaah-* ordner entsprechend umbenennen)
5. Auch backgroundimage4ce muss in den local_packages Ordner	
   https://gitlab.com/SBTheke-TYPO3/backgroundimage4ce/-/tree/master/
6. composer require b13/container   
7. composer require sbtheke/backgroundimage4ce @dev
8. composer require Altaah/altaah1package @dev  

   Am Ende noch mal ins Maintainance Modul und alles updaten 
