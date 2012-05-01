<?php
/**
 * Collapsed Topics Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage topcoll
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @comment    A big thank you to Luiggi Sansonetti (http://moodle.org/user/profile.php?id=1297063) for the translation.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// French Translation of Collapsed Topics Course Format
// Traduction française du Format du cours Collapsed Sujets

// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Utilisée par le noyau de Moodle pour une indication des format et l'affichage dans la liste des formats pour un cours de ses paramètres.
$string['nametopcoll']='Sections réduites';
$string['formattopcoll']='Sections réduites';

// Used in format.php
// Employée au format.php
$string['topcolltoggle']='Basculer';
$string['topcolltogglewidth']='width: 32px;';

// Toggle all - Moodle Tracker CONTRIB-3190
$string['topcollall']='toutes les sections.';
$string['topcollopened']='Ouvrir';
$string['topcollclosed']='Fermer';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
// Moodle 2.0 Amélioration - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
$string['sectionname'] = 'Section';
$string['pluginname'] = 'Sections réduites';
$string['section0name'] = 'Général';

// MDL-26105
$string['page-course-view-topcoll'] = 'Toutes les pages du cours principal au format sections réduites';
$string['page-course-view-topcoll-x'] = 'Toutes les pages du cours au format sections réduites';

// Layout enhancement - Moodle Tracker CONTRIB-3378
$string['formatsettings'] = 'Parametres du format de'; // CONTRIB-3529
$string['setlayout'] = 'Disposition';
$string['setlayout_default'] = 'Par défaut';
$string['setlayout_no_toggle_section_x'] = 'Pas de section x à basculer';
$string['setlayout_no_section_no'] = 'Pas de numéro de section';
$string['setlayout_no_toggle_section_x_section_no'] = 'Pas de section x à basculer ni de numéro de section';
$string['setlayout_no_toggle_word'] = 'Pas de mot à basculer';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'Pas de mot ni de section x à basculer';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'Pas de mot, pas de section x ni de numéro de section à basculer';
$string['setlayoutelements'] = 'Eléments';
$string['setlayoutstructure'] = 'Structure';
$string['setlayoutstructuretopic']='Section';
$string['setlayoutstructureweek']='Semaine';
$string['setlayoutstructurelatweekfirst']='Dernière semaine en premier';
$string['setlayoutstructurecurrenttopicfirst']='Section actuelle en premier';
$string['resetlayout'] = 'Réinitialiser de disposition'; //CONTRIB-3529

// Colour enhancement - Moodle Tracker CONTRIB-3529
$string['setcolour'] = 'Définir la couleur';
$string['colourrule'] = "Please enter a valid RGB colour, a '#' and then six hexadecimal digits.";
$string['settoggleforegroundcolour'] = 'Basculer premier plan';
$string['settogglebackgroundcolour'] = 'Basculer de fond';
$string['settogglebackgroundhovercolour'] = 'Basculer de fond le flotter';
$string['resetcolour'] = 'Réinitialiser la couleur';

// Cookie consent - Moodle Tracker CONTRIB-3624
$string['cookieconsentform'] = 'Cookie consent form' ;
$string['cookieconsent'] = "Cookie consent is required to allow any course that uses the 'Collapsed Topics' format as you can see below to remember the state of the toggles.  Once you have given that consent using the icon to the right, the toggles will remember what you set them to when you refresh the page and when you return if this has been setup by your administrator.<br /><br />The cookie 'mdl_cf_topcoll' only contains the site short name, course id and a series of encoded 1's and 0's representing open or closed respectively.<br /><br />Once chosen this will be remembered for all 'Collapsed Topics' based courses and you will not be asked again unless your administrator performs a reset.";
$string['setcookieconsent'] = 'Cookie consent';
$string['cookieconsentallowed'] ='Allowed';
$string['cookieconsentdenied'] ='Denied';

// Help
$string['setlayoutelements_help']='Combien d\'informations sur les éléments et les sections souhaitez-vous afficher ?';
$string['setlayoutstructure_help']="Structure et disposition de la page.  Vous pouvez choisir entre :

'Format thématique' - ce format est organisé en sections thématiques numérotées.

'Format hebdomadaire' - le cours est organisé par semaine avec des dates de début et de fin.

'Dernière semaine en premier' - basé sur le 'format hebdomadaire', la semaine en cours est affichée en haut et les semaines précédentes dans un ordre descendant, sauf en mode édition où la structure revient au format initial hebdomadaire.

'Section actuelle en premier' - basé sur le 'format thématique', la secion actuelle est affichée en haut si elle a été fixée.";
$string['setlayout_help'] = 'Contains the settings to do with the layout of the format within the course.';
$string['resetlayout_help'] = 'Resets the layout to the default values in "/course/format/topcoll/config.php" so it will be the same as a course the first time it is in the Collapsed Topics format';
// Moodle Tracker CONTRIB-3529
$string['setcolour_help'] = 'Contains the settings to do with the colour of the format within the course.';
$string['settoggleforegroundcolour_help'] = 'Sets the colour of the text on the toggle.';
$string['settogglebackgroundcolour_help'] = 'Sets the background of the toggle.';
$string['settogglebackgroundhovercolour_help'] = 'Sets the background of the toggle when the mouse moves over it.';
$string['resetcolour_help'] = 'Resets the colours to the default values in "/course/format/topcoll/config.php" so it will be the same as a course the first time it is in the Collapsed Topics format';
// Moodle Tracker CONTRIB-3624
$string['setcookieconsent_help'] = "If you choose 'Allowed' you agree that the next time you click on a toggle in any 'Collapsed Topics' based course then the 'mdl_cf_topcoll' cookie will be placed on your computer for the duration of the browser session or longer if you administrator has allowed - they can determine for how long.  It will remember the state of the toggles when you click on them.  If you choose 'Denied' the cookie will not be placed on your computer.  Once chosen this will be remembered for all 'Collapsed Topics' based courses and you will not be asked again unless your administrator performs a reset - please refer to 'Cookie Consent Information' in the 'Readme.txt' file of the format.";
?>