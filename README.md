Sitepackage for the project "altaah1package"
==============================================================

Ein minimalistiches Package zu erstellen kleiner Webseiten insbesondere Onepager

Installation
===================
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

	"description" : "TYPO3 CMS Base Distr...- 
	 
4. altaah1package in local_packages speichern (altaah-* ordner entsprechend umbenennen)
5. Auch backgroundimage4ce muss in den local_packages Ordner	
   https://gitlab.com/SBTheke-TYPO3/backgroundimage4ce/-/tree/master/
6. composer require b13/container   
7. composer require sbtheke/backgroundimage4ce @dev
8. composer require Altaah/altaah1package @dev 
9. root page mit template erstellen mit Modul Sites Site Configuration erstellen
10. Im Templatemodul dann nur das altaah1package einfügen
    Template-> info/modify-> edit the whole template record-> includes->Include static (from extensions

   Am Ende noch mal ins Maintainance Modul und alles updaten   

   Anwendung
   ============   
1. im constanteditor alle erforderlichen   einstellungen vornehmen category ALTAAH

2. wenn ihr nur einen onepager macht die inhaltselemente der seite werden falls man das im access tab einstellt in das menu übernommen

3. die footer seite muss auf der rootebene angelegt werden und als titel exact footer haben 
      vieleicht "Page enabled in menus" deactivieren
    
