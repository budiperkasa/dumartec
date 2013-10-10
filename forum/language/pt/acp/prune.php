<?php 
/** 
* 
* acp_prune [Portuguese] 
* 
* @package language 
* @version $Id: prune.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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

// User pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Aqui você pode apagar (ou desactivar) utilizadores do seu forum. Isto pode ser feito de diversas maneiras: pelo seu contador de mensagens, última atividade, etc. Cada um desses critérios podem ser combinados, i.e. você pode Limpar as últimas atividades dos utilizadores antes de 2002-01-01 com menos de 10 mensagens. Alternativamente, você pode escrever uma Lista de utilizadores diretamente dentro da caixa de texto, qualquer critério escrito será ignorado. Cuidado com esta funcionalidade! Se o utilizador foi apagado, não poderá ser recuperado.',

	'DEACTIVATE_DELETE'			=> 'Desactivar ou Apagar', 
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolha desactivar para desactivar utilizadores ou apague-os!', 
	'DELETE_USERS'				=> 'Apagar', 
	'DELETE_USER_POSTS'			=> 'Apagar Mensagens Limpas', 
	'DELETE_USER_POSTS_EXPLAIN' => 'Apagar mensagens de utilizadores deletados, não tem efeito se os utilizadores estiverem desactivados.',

	'JOINED_EXPLAIN'			=> 'Escrever uma Data em formato <kbd>YYYY-MM-DD</kbd>.', 

	'LAST_ACTIVE_EXPLAIN'		=> 'Escrever uma Data em formato <kbd>YYYY-MM-DD</kbd>.', 

	'PRUNE_USERS_LIST'				=> 'Limpeza automatica dee utilizadores',
	'PRUNE_USERS_LIST_DELETE'		=> 'Se selecionar este critério, os utilizadores terão as suas contas removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Se selecionar este critério, os utilizadores terão as suas contas desactivadas.',

	'SELECT_USERS_EXPLAIN'		=> 'Escrever utilizadores específicos aqui, eles serão utilizados em Preferência para os critérios acima.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Os utilizadores seleccionados foram desactivados com sucesso.',
	'USER_DELETE_SUCCESS'		=> 'Os utilizadores seleccionados foram apagados com sucesso.',
	'USER_PRUNE_FAILURE'		=> 'Nenhum utilizador se ajustou a estes critérios.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'A data indicada está incorreta, o formato esperado é <kbd>YYYY-MM-DD</kbd>.',	
)); 

// Forum Pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Aqui você pode apagar qualquer tópico que não tenha sido respondido ou visualizado dentro do número de dias selecionado. Se você não escrever um número, então todos os tópicos serão deletados. Note que esta operação não excluirá tópicos com Votações em Curso ou Tópicos Fixos e Anúncios.', 

	'FORUM_PRUNE'		=> 'Limpeza', 

	'NO_PRUNE'			=> 'Sem Secções Limpas.',

	'SELECTED_FORUM'	=> 'Secção Seleccionada', 
	'SELECTED_FORUMS'	=> 'Secções Seleccionadas', 

	'POSTS_PRUNED'					=> 'Mensagens Limpas', 
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar Anúncios', 
	'PRUNE_FINISHED_POLLS'			=> 'Limpar Votações Encerradas', 
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Apagar Tópicos em que votações tenham iniciado.', 
	'PRUNE_FORUM_CONFIRM'			=> 'Você tem certeza quee deseja activar a limpeza automatica nos foruns seleccionados com as configurações especificadas? Se removidos, os tópicos e mensagens não poderão ser mais recuperados.',
	'PRUNE_NOT_POSTED'				=> 'Dias desde o último enviado', 
	'PRUNE_NOT_VIEWED'				=> 'Dias desde o último visualizado', 
	'PRUNE_OLD_POLLS'				=> 'Limpar votações Antigas', 
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Apagar tópicos em que votações não tenha sido votadas dentro dos dias seleccionados.', 
	'PRUNE_STICKY'					=> 'Limpar Tópicos Fixos', 
	'PRUNE_SUCCESS'					=> 'A Limpeza foi executada com sucesso.', 

	'TOPICS_PRUNED'		=> 'Tópicos Limpos', 
)); 

?>
