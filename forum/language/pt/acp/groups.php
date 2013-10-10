<?php 
/** 
* 
* acp_groups [Portuguese] 
* 
* @package language 
* @version $Id: groups.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Aqui você pode administrar todos os seus Grupos de utilizadores, adicionando, editando e excluindo grupos existentes. Você deve selecionar lderes, especificar status do grupo para Aberto/Fechado e escrever o Nome e a Descrição do grupo.',
	'ADD_USERS'						=> 'Adicionar utilizadores',
	'ADD_USERS_EXPLAIN'				=> 'Aqui você pode adicionar novos utilizadores ao seu grupo. Você deve selecionar whether this group becomes the new default for the selected users. Você pode também selecionar eles como Líderes do Grupo. Por Favor, escreva cada utilizador em uma linha separada.',

	'COPY_PERMISSIONS'				=> 'Copiar permissões de', 
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Uma vez criadas, o grupo terá as mesmas permissões que que você selecionar aqui.', 
	'CREATE_GROUP'					=> 'Criar um Grupo', 

	'GROUPS_NO_MEMBERS'				=> 'O Grupo seleccionado não possui Membros', 
	'GROUPS_NO_MODS'				=> 'O Líder do Grupo não foi seleccionado', 
	'GROUP_APPROVE'					=> 'Aprovar Membros', 
	'GROUP_APPROVED'				=> 'Membros Aprovados', 
	'GROUP_AVATAR'					=> 'Avatar do Grupo', 
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imagem será exibida no Painel de Grupos.', 
	'GROUP_CLOSED'					=> 'Fechado', 
	'GROUP_COLOR'					=> 'Cor do Grupo', 
	'GROUP_COLOR_EXPLAIN'			=> 'Aqui você pode seleccionar a cor dos utilizadores do grupo. Deixe em branco se não desejar ativar esta opção.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Tem a certesa que quer adicionar o utilizador %1$s para este grupo?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Tem a certesa que quer adicionar os utilizadors %1$s para este grupo?',
	'GROUP_CREATED'					=> 'O Grupo seleccionado foi criado com sucesso.', 
	'GROUP_DEFAULT'					=> 'Maque este como grupo padrão para este utilizador.', 
	'GROUP_DEFS_UPDATED'			=> 'Grupo padrão para os utilizadores seleccionados.', 
	'GROUP_DELETE'					=> 'Apagar Membro do Grupo', 
	'GROUP_DELETED'					=> 'Grupo apagado e utilizadores mudados de grupo com sucesso.', 
	'GROUP_DEMOTE'					=> 'Demitir Líder do Grupo', 
	'GROUP_DESC'					=> 'Descrição do Grupo', 
	'GROUP_DETAILS'					=> 'Informação do Grupo', 
	'GROUP_EDIT_EXPLAIN'			=> 'Aqui você pode editar qualquer grupo existente. Você pode alterar o seu nome, descrição e estado (aberto, fechado, etc.). Você pode também especificar outras opções como a sua coloração, rank, etc. As alterações feitas aqui afetarão aos utilizadores pertencentes ao grupo. Por Favor, note que os membros do grupo podem alterar seus avatares a menos que você selecione as permissões de utilizadores apropriadas.',
	'GROUP_ERR_USERS_EXIST'			=> 'Os utilizadores seleccionados já são Membros deste Grupo.',
	'GROUP_FOUNDER_MANAGE'			=> 'Apenas Gerenciar Descobridor', 
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restringir gerenciamento de grupos para este grupo apenas por fundadores. Os Usurios que possuem as permisses de grupo apropriadas, tm permisso para visualizar este grupo bem como os seus membros.',
	'GROUP_HIDDEN'					=> 'Invisível', 
	'GROUP_LANG'					=> 'Língua do Grupo', 
	'GROUP_LEAD'					=> 'Líderes do Grupo', 
	'GROUP_LEADERS_ADDED'			=> 'Os novos Líderes foram adicionados com sucesso.', 
	'GROUP_LEGEND'					=> 'Exibir Grupo na Legenda', 
	'GROUP_LIST'					=> 'Membros com Direção Geral', 
	'GROUP_LIST_EXPLAIN'			=> 'Esta é uma lista completa de todos os atuais membros com direção geral neste grupo. Você pode apagar utilizadores (exceto em certos grupos especiais) ou adicionar novos como você pode ver.',
	'GROUP_MEMBERS'					=> 'Membros do Grupo', 
	'GROUP_MEMBERS_EXPLAIN'			=> 'Aqui está uma Lista Completa de todos os utilizadores pertencentes a este grupo. Isto inclue seções separadas para líderes, pendentes e membros existentes. Através deste painel você pode gerenciar todos os aspectos sobre quem possue direção geral neste grupo e o que eles realizam. Para apagar um Líder sem retirá-lo do grupo, use Demote rather como deletar. Similarmente, use Promover para tornar um membro existente um líder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de Mensagens Particulares do Grupo por Pasta', 
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Esta configuração substitui o limite da pasta de mensagem por utilizador. Um valor como 0 significa que o utilizador padrão será utilizado.',
	'GROUP_MODS_ADDED'				=> 'Os Moderadores do grupo foram adicionados com sucesso.', 
	'GROUP_MODS_DEMOTED'			=> 'Os Líderes seleccionados foram demitidos com sucesso.', 
	'GROUP_MODS_PROMOTED'			=> 'Os Membros seleccionados foram promovidos com sucesso.', 
	'GROUP_NAME'					=> 'Nome do Grupo', 
  	'GROUP_NAME_TAKEN'				=> 'O nome do grupo indicado já está em uso, indique um alternativo.',
	'GROUP_OPEN'					=> 'Aberto', 
	'GROUP_PENDING'					=> 'Membros Pendentes', 
	'GROUP_PROMOTE'					=> 'Promover para Líder do Grupo', 
	'GROUP_RANK'					=> 'Rank do Grupo', 
	'GROUP_RECEIVE_PM'				=> 'Grupo permitido para receber Mensagens Particulares', 
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Os grupos ocultos não podem receber mensagens, mesmo seleccionando esta opção.',	
	'GROUP_REQUEST'					=> 'Inscrição', 
	'GROUP_SETTINGS_SAVE'			=> 'Configurações de Groupwide', 
	'GROUP_TYPE'					=> 'Estado do Grupo', 
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determina quais utilizadores podem entrar ou ver este grupo.',
	'GROUP_UPDATED'					=> 'O Grupo foi actualizado com sucesso.', 
	'GROUP_USERS_ADDED'				=> 'Novos utilizadores adicionados ao grupo com sucesso.',
	'GROUP_USERS_EXIST'				=> 'Os utilizadores seleccionados já são Membros do Grupo.',
	'GROUP_USERS_REMOVE'			=> 'Os utilizadores seleccionados foram apagados com sucesso.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Make default group for every member', 
	'MEMBERS'				=> 'Membros', 

	'NO_GROUP'					=> 'O Grupo não foi especificado.', 
	'NO_GROUPS_CREATED'			=> 'Este Forum ainda não possui grupos.', 
	'NO_PERMISSIONS'			=> 'Não Copiar Permissões', 
	'NO_USERS'					=> 'Você não especificou nenhum utilizador.',
	'NO_USERS_ADDED'            => 'Não foram adicionados utilizadores a este grupo.',
	'NO_VALID_USERS'            => 'Você não entrou com nenhum utilizador com permissoes para usar esta opção.',

	'SPECIAL_GROUPS'			=> 'Grupos pre-definidos', 
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupos pre-definidos são grupos especiais, eles não podem ser apagados ou diretamente modificados. Porém, você ainda pode adicionar membros e alterar configurações básicas.',

	'TOTAL_MEMBERS'				=> 'Membros', 

	'USERS_APPROVED'				=> 'Os utilizadores seleccionados foram aprovados com sucesso.',
	'USER_DEFAULT'					=> 'Utilizador Padrão', 
	'USER_DEF_GROUPS'				=> 'Grupos definidos pelo utilizador', 
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estes são Grupo criados por você ou outro administrador deste forum. Você pode gerenciar as condições de membros muito bem como editando as propriedades do grupo ou mesmo excluindo o grupo.',
	'USER_GROUP_DEFAULT'			=> 'Especificar como Default Group', 
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Seleccionando SIM aqui você especificará este grupo como o grupo padro para os utilizadores adicionados.',
	'USER_GROUP_LEADER'				=> 'Especificar como Líder do Grupo', 
)); 

?>
