<?php
/** 
*
* acp_prune [Danish]
*
* @package language
* @version Id: prune.php 8479 2008-03-29 00:22:48Z naderman $
* @version $Id: prune.php,v 1.5 2008/11/23 15:52:21 jansk Exp $
* @source file is copyright (c) 2000, 2002, 2005, 2007 phpBB Group, 
* @modified and translated by Olympus DK Team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk
*
* This file is part of the Danish language package for phpBB 3.0.x.
* Copyright (c) 2006, 2007, 2008 Olympus DK Team
*
* The Danish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Danish language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>. 
*
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Her kan du slette (eller deaktivere) brugere på dit board. Dette kan gøres på en række forskellige måder; efter antal indlæg, sidste aktivitet, etc. Hvert af disse kriterier kan kombineres, f.eks. kan du beskære brugere der sidst var aktive før 2002-01-01 med mindre end 10 indlæg. Alternativt kan du indtaste en liste over brugere direkte i tekstboksen, ethvert kriterium indtastet vil så blive ignoreret. Vær varsom med denne funktion! Når først en bruger er beskåret er der ingen vej tilbage.',

	'DEACTIVATE_DELETE'			=> 'Deaktivér eller slet',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vælg mellem at deaktivere brugere eller slette dem helt, bemærk sletning kan ikke gøres om!',
	'DELETE_USERS'				=> 'Slet',
	'DELETE_USER_POSTS'			=> 'Slet beskårede brugeres indlæg',
	'DELETE_USER_POSTS_EXPLAIN' => 'Fjerner indlæg skrevet af beskårede brugere har ingen effekt hvis brugere er deaktiveret.',

	'JOINED_EXPLAIN'			=> 'Indtast en dato i <kbd>YYYY-MM-DD</kbd> format.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Indtast en dato i <kbd>YYYY-MM-DD</kbd> format.',
	
	'PRUNE_USERS_LIST'				=> 'Brugere der beskæres', 
	'PRUNE_USERS_LIST_DELETE'		=> 'Med det valgte kriterie for beskæring af brugere vil følgende brugerkonti blive slettet.', 
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Med det valgte kriterie for beskæring af brugere vil følgende brugerkonti blive deaktiveret.',

	'SELECT_USERS_EXPLAIN'		=> 'Indtast specifikke brugernavne hér, de vil blive brugt forud for kriteriet ovenfor.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De valgte brugere er blevet deaktiveret.',
	'USER_DELETE_SUCCESS'		=> 'De valgte brugere er blevet slettet.',
	'USER_PRUNE_FAILURE'		=> 'Ingen brugere matcher valgte kriterier.',
	
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Dato er angivet forkert, den skal angives i formatet <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Dette vil slette ethvert emne, der ikke er blevet skrevet i eller set inden for det antal dage, du vælger. Hvis du ikke indtaster et tal, så vil alle emner blive slettet. Som standard vil emner med åbne afstemninger, opslag og bekendtgørelser ikke blive slettet.',

	'FORUM_PRUNE'		=> 'Beskær forum',

	'NO_PRUNE'			=> 'Ingen fora beskåret.',

	'SELECTED_FORUM'	=> 'Valgt forum',
	'SELECTED_FORUMS'	=> 'Valgte fora',

	'POSTS_PRUNED'					=> 'Indlæg beskåret',
	'PRUNE_ANNOUNCEMENTS'			=> 'Beskær bekendtgørelser',
	'PRUNE_FINISHED_POLLS'			=> 'Beskær afsluttede afstemninger',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Fjerner emner med afsluttede afstemninger.',
	'PRUNE_FORUM_CONFIRM'			=> 'Er du sikker på at du vil beskære de valgte fora med de specificerede indstillinger? Når først emner og indlæg er slettet kan de ikke gendannes.',
	'PRUNE_NOT_POSTED'				=> 'Dage siden sidste indlæg',
	'PRUNE_NOT_VIEWED'				=> 'Dage siden sidst set',
	'PRUNE_OLD_POLLS'				=> 'Beskær gamle afstemninger',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Fjerner emner med afstemninger ikke stemt i for alderen af sidste indlæg.',
	'PRUNE_STICKY'					=> 'Beskær opslag',
	'PRUNE_SUCCESS'					=> 'Beskæring af fora blev gennemført.',

	'TOPICS_PRUNED'		=> 'emner beskåret',
));

?>