<?php
/**
*
* search_synonyms [French]
*
* @package language
* @version $Id: search_synonyms.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

//
// TRANSLATION DETAILS
//
// Author: Xaphos (Maël Soucaze)
// Website: http://www.phpbb.fr/
//
// TRANSLATION LICENSE
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, version 2 of the License.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see http://opensource.org/licenses/gpl-license.php.
//

$synonyms = array(
	'abbréviation'			=> 'abréviation',
	'abcisse'		=> 'abscisse',
	'abondament'		=> 'abondamment',
	'abrévation'	=> 'abréviation',
	'absisse'			=> 'abscisse',
	'acalmie'			=> 'accalmie',
	'acceuil'				=> 'accueil',
	'accomodation'			=> 'accommodation',
	'accompte'			=> 'acompte',
	'acenseur'		=> 'ascenseur',
	'acenseur'		=> 'ascenseur',
	'afaires'			=> 'affaires',
	'afiliation'		=> 'affiliation',
	'afirmer'		=> 'affirmer',
	'aggio'				=> 'agio',
	'aigüe'				=> 'aiguë',
	'alocation'		=> 'allocation',
	'ambigüe'		=> 'ambiguë',
	'ambigüité'	=> 'ambiguïté',
	'amorticement'	=> 'amortissement',
	'animeaux'	=> 'animaux',
	'annuller'		=> 'annuler',
	'anonces'	=> 'annonces',
	'anotation'	=> 'annotation',
	'Antartique'	=> 'Antarctique',
	'antologie'		=> 'anthologie',
	'apareil'	=> 'appareil',
	'apel'	=> 'appel',
	'apellé'		=> 'appelé',
	'apellée'	=> 'appelée',
	'apellées'	=> 'appelées',
	'apellés'	=> 'appelés',
	'apparamment'	=> 'apparemment',
	'apparement'	=> 'apparemment',
	'appellant'	=> 'appelant',
	'appellante'		=> 'appelante',
	'appellantes'		=> 'appelantes',
	'appellants'	=> 'appelants',
	'appeller'		=> 'appeler',
	'aprendre'		=> 'apprendre',
	'aproche'	=> 'approche',
	'aquérir'		=> 'acquérir',
	'aquisition'		=> 'acquisition',
	'ardement'		=> 'ardemment',
	'armoirie'		=> 'armoiries',
	'atribuer'	=> 'attribuer',
	'audios'		=> 'audio',
	'autours'		=> 'autour',
	'avion'		=> 'aéroplane',

	'ballade'			=> 'balade',		// “Ballade” exist, but that does not mean a walk
	'basalmique'			=> 'balsamique',
	'Bénélux'	=> 'Benelux',
	'bisextile'		=> 'bissextile',
	'bloquage'	=> 'blocage',
	'boite'		=> 'boîte',
	'boitier'		=> 'boîtier',
	'boudhisme'			=> 'bouddhisme',
	'boudhiste'		=> 'bouddhiste',
	'boudhistes'		=> 'bouddhistes',
	'brillament'			=> 'brillamment',
	'britanique'		=> 'britannique',
	'britaniques'	=> 'britanniques',
	'bruyament'		=> 'bruyamment',

	'cable'		=> 'câble',
	'cantonnais'	=> 'cantonais',
	'caroussel'		=> 'carrousel',
	'Carpathes'		=> 'Carpates',
	'carroussel'	=> 'carrousel',
	'cauchemard'			=> 'cauchemar',
	'celà'	=> 'cela',
	'chapître'	=> 'chapitre',
	'chateau'	=> 'château',
	'Clémenceau'	=> 'Clemenceau',
	'coallition'	=> 'coalition',
	'complaisament'	=> 'complaisamment',
	'comunication'	=> 'communication',
	'comunications'		=> 'communications',
	'conaisance'	=> 'connaissance',
	'conaissance'	=> 'connaissance',
	'connaisance'	=> 'connaissance',
	'connection'	=> 'connexion',
	'connections'	=> 'connexions',
	'consciement'	=> 'consciemment',
	'consequent'	=> 'conséquent',
	'consonnance'	=> 'consonance',
	'constament'		=> 'constamment',
	'contreverse'			=> 'controverse',
	'contreversé'		=> 'controversé',
	'contreversée'		=> 'controversée',
	'contreversées'	=> 'controversées',
	'contreverses'		=> 'controverses',
	'contreversés'	=> 'controversés',
	'corolaire'	=> 'corollaire',
	'corolaires'	=> 'corollaires',
	'corrolaire'	=> 'corollaire',
	'corrolaires'	=> 'corollaires',
	'corrollaire'	=> 'corollaire',
	'corrollaires'	=> 'corollaires',
	'côteau'			=> 'coteau',
	'courament'		=> 'couramment',
	'courrir'		=> 'courir',

	'descrition'	=> 'description',
	'dévellopé'	=> 'développé',
	'dévellopée'		=> 'développée',
	'dévellopées'			=> 'développées',
	'dévellopement'			=> 'développement',
	'dévelloper'		=> 'développer',
	'dévelloper'		=> 'développer',
	'dévellopés'			=> 'développés',
	'dévelloppé'			=> 'développé',
	'dévelloppée'				=> 'développée',
	'dévelloppées'			=> 'développées',
	'dévelloppement'			=> 'développement',
	'dévellopper'		=> 'développer',
	'dévelloppés'				=> 'développés',
	'dévelopé'			=> 'développé',
	'dévelopement'		=> 'développement',
	'dévelopeur'				=> 'développeur',
	'dilemne'	=> 'dilemme',
	'dilemnes'		=> 'dilemmes',
	'diligement'		=> 'diligemment',
	'dioxyne'		=> 'dioxine',
	'discourt'	=> 'discours',
	'disfonctionnement'	=> 'dysfonctionnement',

	'élégament'			=> 'élégamment',
	'emoticône'			=> 'émoticône',
	'émoticone'			=> 'émoticône',
	'emoticone'			=> 'émoticône',
	'emoticônes'			=> 'émoticônes',
	'émoticones'			=> 'émoticônes',
	'emoticones'			=> 'émoticônes',
	'ennivré'				=> 'enivré',
	'éthymologie'				=> 'étymologie',
	'ethymologies'				=> 'étymologies',
	'eux-même'			=> 'eux-mêmes',
	'événement'			=> 'évènement',
	'example'	=> 'exemple',
	'examples'			=> 'exemples',
	'éxécuté'			=> 'exécuté',
	'éxécuter'			=> 'exécuter',
	'exhorbitant'		=> 'exorbitant',
	'existance'		=> 'existence',
	'existances'		=> 'existences',

	'fabriquant'	=> 'fabricant',
	'faignant'	=> 'fainéant',		// According to “fait” (verbal form to “faire”) and “néant”, cf. the French Academy
	'feignant'		=> 'fainéant',		// According to “fait” (verbal form to “faire”) and “néant”, cf. the French Academy
	'filliale'	=> 'filiale',
	'fréquement'		=> 'fréquemment',

	'galament'		=> 'galamment',
	'généralment'	=> 'généralement',
	'Génèse'	=> 'Genèse',
	'gratte-ciels'		=> 'gratte-ciel',
	'grattes-ciel'	=> 'gratte-ciel',
	'grattes-ciels'	=> 'gratte-ciel',
	'gravage'	=> 'gravure',
	'gravitationel'	=> 'gravitationnel',
	'gravitationelle'			=> 'gravitationnelle',
	'gravitationellement'		=> 'gravitationnellement',
	'Groënland'		=> 'Groenland',		// Except old French before first half of the XIXe century
	'Guyanne'	=> 'Guyane',

	'hauts-parleurs'				=> 'haut-parleurs',
	'Hawai'			=> 'Hawaii',		// The “Hawaii” form is the English official writing
	'Hawaii'			=> 'Hawaï',		// Some dictionaries preach this form which explicitly prohibits any French digraph between the “a” and “i” character
	'hormi'			=> 'hormis',
	'hugenot'			=> 'huguenot',
	'hydrolique'		=> 'hydraulique',

	'içi'		=> 'ici',
	'imbécilité'			=> 'imbécillité',
	'impatiement'		=> 'impatiemment',
	'impertinement'		=> 'impertinemment',
	'impossiblité'				=> 'impossibilité',
	'impressionisme'				=> 'impressionnisme',
	'impressioniste'		=> 'impressionniste',
	'impressionistes'		=> 'impressionnistes',
	'inconsciement'	=> 'inconsciemment',
	'innéquation'	=> 'inéquation',
	'instalation'	=> 'installation',
	'intelligement'		=> 'intelligemment',
	'intentionelement'	=> 'intentionnellement',
	'intentionellement'	=> 'intentionnellement',
	'intentionnelement'	=> 'intentionnellement',
	'interval'		=> 'intervalle',		// Warning: “interval” is correct in English

	'journeaux'	=> 'journaux',

	'km2'	=> 'km²',

	'laisser-passer'		=> 'laissez-passer',		// The verb “laissez” is a granted verb
	'language'		=> 'langage',
	'license'	=> 'licence',
	'litérature'	=> 'littérature',
	'litoral'	=> 'littoral',
	'lorque'	=> 'lorsque',
	'Lybie'	=> 'Libye',

	'méchament'	=> 'méchamment',
	'merçi'		=> 'merci',
	'mirroir'	=> 'miroir',
	'missionaire'		=> 'missionnaire',
	'missionaires'	=> 'missionaires',
	'monolyte'		=> 'monolithe',
	'monolytes'	=> 'monolithes',
	'monolythe'		=> 'monolithe',
	'monolythes'		=> 'monolithes',
	'mourrir'		=> 'mourir',

	'napoléonnien'		=> 'napoléonien',
	'néammoins'		=> 'néanmoins',
	'nécesaire'			=> 'nécessaire',
	'nécéssaire'	=> 'nécessaire',
	'nécéssitant'		=> 'nécessitant',
	'nécéssite'		=> 'nécessite',
	'nécéssité'	=> 'nécessité',
	'notament'		=> 'notamment',
	'notemment'			=> 'notamment',
	'nourir'		=> 'nourrir',
	'nuitament'		=> 'nuitamment',

	'obligeament'			=> 'obligeamment',
	'occulaire'		=> 'oculaire',
	'occurance'	=> 'occurrence',
	'occurence'	=> 'occurrence',
	'ocurance'		=> 'occurrence',
	'ocurence'		=> 'occurrence',
	'ocurrance'		=> 'occurrence',
	'ocurrence'		=> 'occurrence',
	'omnibulé'	=> 'obnubilé',

	'parmis'			=> 'parmi',
	'particuliarité'	=> 'particularité',
	'particuliarités'	=> 'particularités',
	'patiement'	=> 'patiemment',
	'pécunier'	=> 'pécuniaire',
	'pécuniers'	=> 'pécuniaires',
	'permanance'	=> 'permanence',
	'personelle'	=> 'personnelle',
	'pertinement'		=> 'pertinemment',
	'philarmonique'	=> 'philharmonique',
	'pillier'	=> 'pilier',
	'pirrogue'	=> 'pirogue',
	'plaisament'	=> 'plaisamment',
	'plateforme'	=> 'plate-forme',
	'plateformes'	=> 'plates-formes',
	'poid'	=> 'poids',
	'portuguais'	=> 'portugais',
	'portuguaise'	=> 'portugaise',
	'possiblité'		=> 'possibilité',
	'possiblités'			=> 'possibilités',
	'precedement'		=> 'précédemment',
	'précedement'		=> 'précédemment',
	'precédement'	=> 'précédemment',
	'précédement'	=> 'précédemment',
	'précipitament'	=> 'précipitamment',
	'prémice'		=> 'prémisse',
	'professionel'	=> 'professionnel',
	'professionelle'	=> 'professionnelle',
	'professionelles'	=> 'professionnelles',
	'professionels'	=> 'professionnels',
	'puissament'	=> 'puissamment',
	'puit'	=> 'puits',

	'quatres'	=> 'quatre',
	'Quebecquois'			=> 'Québécois',

	'raisonnance'		=> 'résonance',
	'rappeller'	=> 'rappeler',
	'récement'	=> 'récemment',
	'recommendation'		=> 'recommandation',		// Warning: “recommendation” is correct in English
	'recommender'			=> 'recommander',
	'rédition'			=> 'reddition',
	'réelement'			=> 'réellement',
	'renomé'				=> 'renommé',
	'renomée'				=> 'renommée',
	'réouvrir'			=> 'rouvrir',
	'résonnance'		=> 'résonance',
	'résoud'		=> 'résout',
	'résouds'		=> 'résous',
	'réthorique'		=> 'rhétorique',
	'rhedodendron'		=> 'rhododendron',
	'rhytme'			=> 'rythme',

	'sciement'			=> 'sciemment',
	'siécle'			=> 'siècle',
	'smiley'			=> 'émoticône',
	'smileys'			=> 'émoticônes',
	'smilies'			=> 'émoticônes',
	'sous-terrain'				=> 'souterrain',
	'succédanné'	=> 'succédané',
	'succédée'		=> 'succédé',
	'succédées'			=> 'succédé',
	'succédés'		=> 'succédé',
	'succint'			=> 'succinct',
	'suffisament'			=> 'suffisamment',
	'suffisemment'				=> 'suffisamment',
	'suplémentaire'			=> 'supplémentaire',
	'syndrôme'			=> 'syndrome',
	'syphillis'		=> 'syphilis',
	'syphon'		=> 'siphon',

	'téchnique'			=> 'technique',
	'télécomunication'		=> 'télécommunication',
	'télécomunications'		=> 'télécommunications',
	'timbres-postes'		=> 'timbres-poste',		// There are only one post office but several stamps
	'tonnal'				=> 'tonal',
	'tonnale'		=> 'tonale',
	'traditionelle'		=> 'traditionnelle',
	'traffic'	=> 'trafic',
	'traffics'	=> 'trafics',
	'trés'	=> 'très',
	'tuyeau'		=> 'tuyau',

	'valeure'	=> 'valeur',
	'Vénézuela'	=> 'Venezuela',
	'voiture'	=> 'automobile',
	'voluptes'	=> 'volutes',		// Of smoke

	'waggon'		=> 'wagon',
	'Web'		=> 'Internet',		// Advised by the French Academy
	'www'		=> 'Internet',
);
?>
