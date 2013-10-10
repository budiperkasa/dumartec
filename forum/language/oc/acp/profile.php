<?php
/**
*
* acp_profile [Occitan]
*
* @package language
* @version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
   $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
   'ADDED_PROFILE_FIELD'   	=> 'Lo champ personalizat a été ajouté.',
   'ALPHA_ONLY'   			=> 'Alphanumérique uniquement',
   'ALPHA_SPACERS'   		=> 'Alphanumérique e espaces',
   'ALWAYS_TODAY'   		=> 'Toujours la date actuelle',
   
   'BOOL_ENTRIES_EXPLAIN'   => 'Saisissez vos opcions',
   'BOOL_TYPE_EXPLAIN'   	=> 'Détermine lo type, cases à cocher o boutons radio. Les cases à cocher seront affichées uniquement si cela est coché per un utilizaire balhat. Dans aqueste cas, la <strong>seconde</strong> option de langue serà utilisée. Les boutons radios seront affichés indépendamment de leur valeur.',
	
   'CHANGED_PROFILE_FIELD' 			=> 'Lo champ del perfil a été modifié.',
   'CHARS_ANY'   					=> 'Tout caractère',
   'CHECKBOX'   					=> 'Case à cocher',
   'COLUMNS'   						=> 'Colonnes',
   'CP_LANG_DEFAULT_VALUE'  		=> 'Valeur per défaut',
   'CP_LANG_EXPLAIN'   				=> 'Descripcion del champ',
   'CP_LANG_EXPLAIN_EXPLAIN'   		=> 'L\'explication del champ présenté à l\'utilizaire.',
   'CP_LANG_NAME'   				=> 'Nom del champ/titre présenté à l\'utilizaire',
   'CP_LANG_OPTIONS'   				=> 'Options',
   'CREATE_NEW_FIELD'   			=> 'Créer un nouveau champ',
   'CUSTOM_FIELDS_NOT_TRANSLATED'   => 'Au mens un champ personalizat del perfil n\'a pas encore été traduit. Saisissez l\'information nécessaire en cliquant sul lien "Traduire".',
   
   'DEFAULT_ISO_LANGUAGE'   			=> 'Langue per défaut [%s]',
   'DEFAULT_LANGUAGE_NOT_FILLED'   		=> 'Les clés de langue de la langue per défaut ne sont pas remplies per aqueste champ del perfil',
   'DEFAULT_VALUE'   					=> 'Valeur per défaut',
   'DELETE_PROFILE_FIELD'   			=> 'Supprimer un champ del perfil',
   'DELETE_PROFILE_FIELD_CONFIRM'   	=> 'Voulez-vous réellement suprimir aqueste champ del perfil ?',
   'DISPLAY_AT_PROFILE'   				=> 'Afficher dins les réglages del perfil de l\'utilizaire',
   'DISPLAY_AT_PROFILE_EXPLAIN'   		=> 'L\'utilizaire peut modificar aqueste champ dins les réglages de son perfil.',
   'DISPLAY_AT_REGISTER'   				=> 'Afficher à l\'inscription',
   'DISPLAY_AT_REGISTER_EXPLAIN'   		=> 'Si cette option est activée, lo champ serà affiché lors de l\'inscription e pourra èsser modifié lors de la modificacion del perfil.',
   'DISPLAY_PROFILE_FIELD'   			=> 'Afficher lo champ dins lo perfil',
   'DISPLAY_PROFILE_FIELD_EXPLAIN'   	=> 'Lo champ de perfil serà visible dins tous les endroits autorizats. Si aqueste réglage est sur "Non", cela masquera lo champ dels pages de sujets, dels profils e de la liste dels membres.',
   'DROPDOWN_ENTRIES_EXPLAIN'   		=> 'Indicatz vos opcions, una seule per linha.',
   
   'EDIT_DROPDOWN_LANG_EXPLAIN'   	=> 'Notez que vous pouvez modificar lo tèxt de vos opcions e apondre de nouvelles opcions en fin de liste. Il est déconseillé d\'insérer de nouvelles opcions entre celles existantes - cela pourrait entraîner l\'attribution de mauvaises opcions à vos utilizaires. Ceci peut se produire également si vous supprimez dels opcions parmi d\'autres. La suppression dels opcions depuis la fin de la liste a per conséquence, per les utilizaires les ayant appliquées, lo retour à la valeur per défaut.',
   'EMPTY_FIELD_IDENT'   			=> 'L\'identification de champ est void',
   'EMPTY_USER_FIELD_NAME'   		=> 'Saisissez un nom/titre per lo champ',
   'ENTRIES'   						=> 'Entrées',
   'EVERYTHING_OK'   				=> 'Tout est correct',
   
   'FIELD_BOOL'   				=> 'Booléen (Oui/Non)',
   'FIELD_DATE'   				=> 'Date',
   'FIELD_DESCRIPTION'   		=> 'Descripcion del champ',
   'FIELD_DESCRIPTION_EXPLAIN'  => 'L\'explication del champ présenté à l\'utilizaire.',
   'FIELD_DROPDOWN'   			=> 'Liste déroulante',
   'FIELD_IDENT'   				=> 'Identification del champ',
   'FIELD_IDENT_ALREADY_EXIST'  => 'L\'identification de champ choisie existe déjà. Entrez un autre nom.',
   'FIELD_IDENT_EXPLAIN'   		=> 'L\'identification de champ est un nom qui vous permet d\'identifier lo champ del perfil dins la base de données e les thèmes.',
   'FIELD_INT'   				=> 'Nombres',
   'FIELD_LENGTH'   			=> 'Longueur de la boîte dels entrées',
   'FIELD_NOT_FOUND'   			=> 'Lo champ del perfil est introuvable.',
   'FIELD_STRING'   			=> 'Camp de tèxt simple',
   'FIELD_TEXT'   				=> 'Zone de tèxt',
   'FIELD_TYPE'   				=> 'Type de champ',
   'FIELD_TYPE_EXPLAIN'   		=> 'Vous ne pourrez pas modificar lo type de champ plus tard.',
   'FIELD_VALIDATION'   		=> 'Validation del champ',
   'FIRST_OPTION'   			=> 'Primièra option',
   
   'HIDE_PROFILE_FIELD'   			=> 'Masquer lo champ',
   'HIDE_PROFILE_FIELD_EXPLAIN'   	=> 'Seuls les administrateurs e les moderaires peuvent veire/remplir aqueste champ. Si l\'option est activée, aqueste champ ne serà affiché que dins lo perfil dels utilizaires.',
   
   'INVALID_CHARS_FIELD_IDENT'   	=> 'L\'identification de champ ne peut contenir que dels minuscules a-z e _',
   'INVALID_FIELD_IDENT_LEN'   		=> 'La longueur de l\'identification de champ ne peut dépasser 17 caractères',
   'ISO_LANGUAGE'   				=> 'Langue [%s]',
   
   'LANG_SPECIFIC_OPTIONS'   => 'Options spécifiques de langue [<strong>%s</strong>]',
   
   'MAX_FIELD_CHARS'   	=> 'Nombre maximum de caractères',
   'MAX_FIELD_NUMBER' 	=> 'Nombre maximal autorisé',
   'MIN_FIELD_CHARS'   	=> 'Nombre minimum de caractères',
   'MIN_FIELD_NUMBER'   => 'Nombre minimal autorisé',
   
   'NO_FIELD_ENTRIES'   		=> 'Aucune entrée définie',
   'NO_FIELD_ID'   				=> 'Aucun ID de champ spécifié.',
   'NO_FIELD_TYPE'   			=> 'Aucun type de champ spécifié.',
   'NO_VALUE_OPTION'   			=> 'Valeur équivalente à una non-saisie',
   'NO_VALUE_OPTION_EXPLAIN'   	=> 'Valeur de non-saisie. Si lo champ est obligatoire, una erreur est affichée lorsque cette valeur est saisie per l\'utilizaire.',
   'NUMBERS_ONLY'   			=> 'Uniquement dels chiffres (0-9)',
   
   'PROFILE_BASIC_OPTIONS'   		=> 'Options de base',
   'PROFILE_FIELD_ACTIVATED'   		=> 'Lo champ del perfil a été activé.',
   'PROFILE_FIELD_DEACTIVATED'   	=> 'Lo champ del perfil a été désactivé.',
   'PROFILE_LANG_OPTIONS'   		=> 'Options spécifiques de langue',
   'PROFILE_TYPE_OPTIONS'   		=> 'Options spécifiques del type de perfil',
   
   'RADIO_BUTTONS'   			=> 'Boutons radio',
   'REMOVED_PROFILE_FIELD'   	=> 'Camp del perfil supprimé.',
   'REQUIRED_FIELD'   			=> 'Camp obligatoire',
   'REQUIRED_FIELD_EXPLAIN'   	=> 'Oblige l\'utilizaire à remplir o à préciser lo champ. Ce champ serà affiché à l\'inscription e à la modificacion del perfil.',
   'ROWS'   					=> 'Lignes',
   
   'SAVE'   						=> 'Sauvegarder',
   'SECOND_OPTION'   				=> 'Deuxième option',
   'STEP_1_EXPLAIN_CREATE'   		=> 'Ici vous pouvez saisir les premiers paramètres de base del nouveau champ del perfil. Aquestes informations sont requises per la seconde étape ont vous pourrez régler les opcions restantes e améliorer davantage vòstre champ de perfil.',
   'STEP_1_EXPLAIN_EDIT'   			=> 'Ici vous pouvez modificar les paramètres de base de vòstre champ de perfil. Les opcions appropriées sont recalculées dins la seconde étape.',
   'STEP_1_TITLE_CREATE'			=> 'Apondre un champ de perfil',
   'STEP_1_TITLE_EDIT'   			=> 'Editer un champ de perfil',
   'STEP_2_EXPLAIN_CREATE'   		=> 'Ici vous pouvez définir quelques opcions courantes que vous pouvez vouloir ajuster.',
   'STEP_2_EXPLAIN_EDIT'   			=> 'Ici vous pouvez modificar quelques opcions courantes.<br /><strong>Notez que les modifications faites als champs de perfil n\'affecteront pas les valors déjà saisies per les utilizaires.</strong>',
   'STEP_2_TITLE_CREATE'   			=> 'Options spécifiques del type de perfil',
   'STEP_2_TITLE_EDIT'   			=> 'Options spécifiques del type de perfil',
   'STEP_3_EXPLAIN_CREATE'   		=> 'Comme vous avez plus d\'una langue installée, vous devez aussi remplir les éléments de langue restants. Lo champ de perfil fonctionnera amb la langue activée per défaut, vous pourrez également remplir aquestes éléments restants plus tard.',
   'STEP_3_EXPLAIN_EDIT'   			=> 'Comme vous avez plus d\'una langue installée, vous pouvez également modificar o apondre les éléments de langue restants. Lo champ de perfil fonctionnera amb la langue activée per défaut.',
   'STEP_3_TITLE_CREATE'   			=> 'Définitions de langue restantes',
   'STEP_3_TITLE_EDIT'   			=> 'Définitions de langue',
   'STRING_DEFAULT_VALUE_EXPLAIN'   => 'Saisissez una phrase, una valeur per défaut à Suprimir. Laissez void si vous préférez ne rien Suprimir en premier.',
   
   'TEXT_DEFAULT_VALUE_EXPLAIN'   	=> 'Saisissez un tèxt, una valeur per défaut à Suprimir. Laissez void si vous préférez ne rien Suprimir en premier.',
   'TRANSLATE'   					=> 'Traduire',
   
   'USER_FIELD_NAME'   	=> 'Nom/titre del champ affiché à l\'utilizaire',
   
   'VISIBILITY_OPTION'   => 'Option de visibilité',
));

 ?>
