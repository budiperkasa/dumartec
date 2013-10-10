<?php
/**
*
* groups [Portuguese]
*
* @package language
* @version $Id: groups.php,v 1.21 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**************************************************************************************************************
* Translation by: Asturmas - f.esteves@ptservidor.com  |  http://www.alojagratis.org & http://www.ptservidor.com
**************************************************************************************************************
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
'ALREADY_DEFAULT_GROUP' => 'O Grupo seleccionado já é seu grupo padrão.',
'ALREADY_IN_GROUP' => 'Você já é utilizador do Grupo Seleccionado.',
'ALREADY_IN_GROUP_PENDING'	=> 'Você já solicitou uma entrada no grupo Seleccionado.',

'CANNOT_JOIN_GROUP'		=> 'Não se pode inscrever neste grupo. Apenas o pode fazer em grupos abertos.',
'CANNOT_RESIGN_GROUP'	=> 'Não se pode demitir deste grupo. Apenas o pode fazer em grupos abertos.',
'CHANGED_DEFAULT_GROUP' => 'Grupo Padrão foi mudado.',

'GROUP_AVATAR' => 'Avatar do Grupo',
'GROUP_CHANGE_DEFAULT' => 'Você tem certeza que deseja alterar o seu grupo padrão para o “%s”?',
'GROUP_CLOSED' => 'Fechado',
'GROUP_DESC' => 'Descrição do Grupo',
'GROUP_HIDDEN' => 'Escondido',
'GROUP_INFORMATION' => 'Informaçãoso do Grupo',
'GROUP_IS_CLOSED' => 'Este é um grupo fechado, novos Utilizadores não podem entrar automaticamente.',
'GROUP_IS_FREE' => 'Este é um grupo aberto, todos os Utilizadores são bem-vindos',
'GROUP_IS_HIDDEN' => 'Este é um grupo invis�vel, apenas Utilizadores do grupo podem ver seus Utilizadores.',
'GROUP_IS_OPEN' => 'Este é um aberto, Utilizadores podem entrar.',
'GROUP_IS_SPECIAL' => 'Este é um grupo especial, apenas o Administrador do Fórum pode adicionar Utilizadores.',
'GROUP_JOIN' => 'Entrar no Grupo',
'GROUP_JOIN_CONFIRM' => 'Tem certeza que deseja entrar no grupo seleccionado?',
'GROUP_JOIN_PENDING' => 'Pedir para entrar no grupo',
'GROUP_JOIN_PENDING_CONFIRM' => 'Tem certeza que deseja pedir para entrar no grupo ?',
'GROUP_JOINED' => 'Você entrou no grupo',
'GROUP_JOINED_PENDING' => 'Você pediu para entrar no grupo.Espere até que o Lider do grupo o aprove como utilizador.',
'GROUP_LIST' => 'Gerenciar Utilizadores',
'GROUP_MEMBERS' => 'Utilizadores do Grupo',
'GROUP_NAME' => 'Nome do Grupo',
'GROUP_OPEN' => 'Aberto',
'GROUP_RANK' => 'Rank do Grupo',
'GROUP_RESIGN_MEMBERSHIP' => 'Remover Utilizadores do grupo',
'GROUP_RESIGN_MEMBERSHIP_CONFIRM' => 'Você tem certeza que deseja remover o utilizador pendente do grupo seleccionado?',
'GROUP_RESIGN_PENDING' => 'Remover um utilizador pendente',
'GROUP_RESIGN_PENDING_CONFIRM' => 'Você tem certeza que deseja remover o utilizador pendente do grupo seleccionado?',
'GROUP_RESIGNED_MEMBERSHIP' => 'Você foi removido do grupo',
'GROUP_RESIGNED_PENDING' => 'Sua inscrição pendente para entrar no grupo foi excluida com sucesso.',
'GROUP_TYPE' => 'Tipo do Grupo',
'GROUP_UNDISCLOSED' => 'Grupo Invisivel',
	'FORUM_UNDISCLOSED'					=> 'Moderando fóruns oculto(s)',

'LOGIN_EXPLAIN_GROUP' => 'Você precisa entrar para ver detalhes deste grupo',

'NO_LEADERS' => 'Você não é l�der de nenhum grupo',
'NOT_LEADER_OF_GROUP' => 'A operação desejada não pode ser feita porque Você não é l�der do grupo seleccionado.',
'NOT_MEMBER_OF_GROUP' => 'A operação desejada não pode ser feita porque Você não é utilizador deste grupo.',
'NOT_RESIGN_FROM_DEFAULT_GROUP' => 'Você não est� permitido a sair do seu grupo.',

'PRIMARY_GROUP' => 'Grupo primário',

'REMOVE_SELECTED' => 'Remover Seleccionado',

'USER_GROUP_CHANGE' => 'Do grupo “%1$s” para “%2$s”',
'USER_GROUP_DEMOTE' => 'Lider do grupo',
'USER_GROUP_DEMOTE_CONFIRM' => 'Você tem certeza que deseja tornar-se líder do grupo Seleccionado?',
'USER_GROUP_DEMOTED' => 'Você se tornou líder do grupo com sucesso.',
));

?>
