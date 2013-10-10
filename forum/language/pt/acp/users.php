<?php 
/** 
* 
* acp_users [Portuguese] 
* 
* @package language 
* @version $Id: users.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

$lang = array_merge($lang, array( 
	'ADMIN_SIG_PREVIEW'		=> 'Pré-visualização da Assinatura', 
	'AT_LEAST_ONE_FOUNDER'	=> 'Você não pode mudar este fundador para um utilizador normal. É necessário ter no mínimo um fundador para este Fórum. Se você quer mudar a situação deste fundador, promova outro utilizador para a condição de fundador primeiro.',

	'BAN_ALREADY_ENTERED'	=> 'O banimento já havia sido previamente informado. A lista de banisdos não foi actualizada.',
	'BAN_SUCCESSFUL'		=> 'Banido com sucesso!.', 
	
	'CANNOT_BAN_FOUNDER'			=> 'Você não pode banir contas de fundador.',
	'CANNOT_BAN_YOURSELF'			=> 'Você não pode banir a si próprio.', 
	'CANNOT_DEACTIVATE_BOT'			=> 'Você não pode desactivar contas de bots. Desative o bot ao invés disso.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Você não pode desativer contas de fundador.',	
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Você não pode desactivar sua própria conta.', 
	'CANNOT_FORCE_REACT_BOT'		=> 'Você não pode forçar a re-ativação de contas de bots. Desative o bot ao invés disso.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Você não pode forçar a re-ativação de uma conta de fundador.',		
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Você não pode forçar a Reactivação da sua própria conta.', 
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Você não pode remover a conta do utilizador convidado.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Você não pode remover sua própria conta.', 
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Você não pode promover os utilizadores ignorados para serem os fundadores.',
	'CANNOT_SET_FOUNDER_BOT'		=> 'Você não pode promover os utilizadores ignorados para serem os fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Você precisa activar os utilizadores antes de você os promover a fundadores, apenas utilizadores ativos podem ser promovido.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Você apenas deve indicar isto se você quiser mudar o endereço de email dos utilizadores.',
	 
	'DELETE_POSTS'			=> 'Apagar Postagem', 
	'DELETE_USER'			=> 'Apagar utilizador',
	'DELETE_USER_EXPLAIN'	=> 'Atenção: a exclusão de um utilizador é definitiva! Não há como recuperá-lo posteriormente.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'A Reactivacção foi forçada com sucesso.',
	'FOUNDER'						=> 'Fundador', 
	'FOUNDER_EXPLAIN'				=> 'Fundadores jamais poderão ser banidos, excludos ou alterados por membros não-fundadores.',

	'GROUP_APPROVE'					=> 'Aprovar Membro',
	'GROUP_DEFAULT'					=> 'Padrão', 
	'GROUP_DELETE'					=> 'Apagar', 
	'GROUP_DEMOTE'					=> 'Demitir', 
	'GROUP_PROMOTE'					=> 'Promover', 

	'IP_WHOIS_FOR'			=> 'Quem é o IP para %s', 

	'LAST_ACTIVE'			=> 'Último ativos', 

	'MOVE_POSTS_EXPLAIN'	=> 'Seleccione o fórum para o qual você deseja mover todas as postagens que este utilizador fez.',

	'NO_SPECIAL_RANK'		=> 'Sem atribuição de colocação (rank) especial', 
	'NOT_MANAGE_FOUNDER'	=> 'Você tentou gerenciar um utilizador Fundador do Fórum. Apenas Fundadores podem gerenciar outros Fundadores.',

	'QUICK_TOOLS'			=> 'Ferramentas Rápidas', 

	'REGISTERED'			=> 'Registado', 
	'REGISTERED_IP'			=> 'Registo do IP', 
	'RETAIN_POSTS'			=> 'Mantém postagens', 

	'SELECT_FORM'			=> 'Selecciona formulário', 
	'SELECT_USER'			=> 'Selecciona utilizador',

	'USER_ADMIN'					=> 'Administração de utilizador',
	'USER_ADMIN_ACTIVATE'			=> 'Activar conta', 
	'USER_ADMIN_ACTIVATED'			=> 'Utilizador activado com sucesso.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'O avatar foi removido com sucesso da conta do utilizador.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Banido pelo email', 
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Endereço de email banido via adminstrador do utilizador.',
	'USER_ADMIN_BAN_IP'				=> 'Banido pelo IP', 
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP banido via adminstrador do utilizador',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nome de utilizador banido via adminstrador do utilizador',
	'USER_ADMIN_BAN_USER'			=> 'Banido pelo nome de utilizador',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactivar conta', 
	'USER_ADMIN_DEACTIVED'			=> 'utilizador desactivado com sucesso.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Apagar todos os anexos', 
	'USER_ADMIN_DEL_AVATAR'			=> 'Apagar avatar', 
	'USER_ADMIN_DEL_POSTS'			=> 'Apagar todas as postagens', 
	'USER_ADMIN_DEL_SIG'			=> 'Apagar assinatura', 
	'USER_ADMIN_EXPLAIN'			=> 'Aqui você pode alterar as informações dos seus utilizadores. Pra modificar as permissões dos utilizadores por favor use o sistema de permissões de utilizadores e grupos.',
	'USER_ADMIN_FORCE'				=> 'Forçar a Reactivação',
	'USER_ADMIN_MOVE_POSTS'			=> 'Move todas as postagens', 
	'USER_ADMIN_SIG_REMOVED'		=> 'Assinatura removida com sucesso da conta do utilizador.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Todos os Anexos feitos por este utilizador foram apagados com sucesso.',
	'USER_AVATAR_UPDATED'			=> 'Detalhes dos avatares do utilizador foram actualizados com sucesso.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de Perfil Customisados', 
	'USER_DELETED'					=> 'Utilizador apagado com sucesso.',
	'USER_GROUP_ADD'				=> 'Adiciona utilizador ao grupo',
	'USER_GROUP_NORMAL'				=> 'Grupos de utilizadores Normal é um membro de',
	'USER_GROUP_PENDING'			=> 'Grupos de utilizadores está no modo pendente',
	'USER_GROUP_SPECIAL'			=> 'Grupos de utilizadores Especial é um membro de',
	'USER_NO_ATTACHMENTS'           => 'Não existem ficheiros a exibir.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalhes do utilizador actualizados.',
	'USER_POSTS_DELETED'			=> 'Todas as postagens feitas por este utilizador fora removidas com sucesso.',
	'USER_POSTS_MOVED'				=> 'As postagens dos utilizadores para o fórum alvo foram feitas com sucesso.',
	'USER_PREFS_UPDATED'			=> 'As preferências do utilizador foram actualizadas.',
	'USER_PROFILE'					=> 'Perfil do utilizador',
	'USER_PROFILE_UPDATED'			=> 'O perfil do utilizador foi actualizado com sucesso.',
	'USER_RANK'						=> 'Colocação do utilizador (rank)',
	'USER_RANK_UPDATED'				=> 'Colocação do utilizador actualizada.',
	'USER_SIG_UPDATED'				=> 'A assinatura do utilizador foi actualizada com sucesso.',
	'USER_TOOLS'					=> 'Ferramentas Básicas', 
)); 

?>
