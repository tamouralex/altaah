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
	 
4. altaah1package in local_packages speichern (altaah-* ordner in altaah1package  umbenennen)
5. Auch backgroundimage4ce muss in den local_packages Ordner	
   https://gitlab.com/SBTheke-TYPO3/backgroundimage4ce/-/tree/master/
   (backgroundimage4ce-* ordner in backgroundimage4ce umbenennen)
6. composer require Altaah/altaah1package @dev 
7. Am Ende noch mal ins Maintainance Modul und alles updaten
8. root Seite mit Template anlegen
9. Im Templatemodul dann nur das altaah1package einfügen
   Template-> info/modify-> edit the whole template record-> includes->Include static (from extensions

      

   Anwendung
   ============   
1. Im Constanteditor alle erforderlichen Einstellungen vornehmen category ALTAAH

2. Wenn ihr nur einen Onepager macht die Inhaltselemente der Seite werden falls man das im  access tab einstellt in das menu übernommen fuktioniert allerdings nur auf der ersten Ebene wie gesagt ist dies ein Package in erster linie für Onepager.

3. Die footer Seite muss auf der rootebene angelegt werden und als Titel exact footer haben 
      vieleicht "Page enabled in menus" deactivieren
    
