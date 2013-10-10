<?php 
/** 
* 
* acp_ban [Portuguese] 
* 
* @package language 
* @version $Id: ban.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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

// Banning 
$lang = array_merge($lang, array( 
 	'1_HOUR'		=> '1 Hora', 
	'30_MINS'		=> '30 Minutos', 
	'6_HOURS'		=> '6 Horas', 

	'ACP_BAN_EXPLAIN'	=> 'Aqui você pode gerenciar a lista de bans dos utilizadores por nome, IP, ou e-mail. Estes métodos previnem um utilizador de conseguir acessar a qualquer parte do fórum. Você pode especificar uma pequena razão do ban (3000 caracteres) se assim desejar. Esta razão será mostrada no log de administrador. A duração do ban tambem pode ser especificada. Se você quiser que o ban termine numa data específica depois de outra especificação de tempo seleccione <u>Até</u> para a longevidade do ban e insira a data em ano-mês-dia.',

	'BAN_EXCLUDE'			=> 'Apagar Expulsão',
	'BAN_LENGTH'			=> 'Rarão da Expulsão',
	'BAN_REASON'			=> 'Razão da Expulsão',
	'BAN_GIVE_REASON'		=> 'A razão ou motivo escrito para a expulsão.',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A Lista de Expulsão foi actualizada com sucesso.',

	'EMAIL_BAN'					=> 'Expulse um ou mais emails',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Active isto para expulsar o email digitado de todos os bans correntes.',
	'EMAIL_BAN_EXPLAIN'			=> 'Para especificar mais que um e-mail digite um em cada linha. Pode usar asteriscos * para obter palavras por aproximação de endereços de e-mail, ex: *@hotmail.com, *@*.domain.tld, etc.', 
	'EMAIL_NO_BANNED'			=> 'Não há e-mails banidos', 
	'EMAIL_UNBAN'				=> 'Desbanir ou permitir e-mails', 
	'EMAIL_UNBAN_EXPLAIN'		=> 'Você pode desbanir multiplos e-mails de apenas uma vez usando a combinação apropriada do rato e teclado do seu computador e explorador. E-mails excluidos têm uma marcação no fundo.', 

	'IP_BAN'					=> 'Banir um ou mais ips',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Activar isto para apagar o IP digitado de todos os bans correntes.',
	'IP_BAN_EXPLAIN'			=> 'Para especificar diferentes IPs ou hostnames digite cada um numa nova linha. Para especificar uma range de endereços de IP separe o inicio e o fim com um hifen (-), para especificar uma wildcard use asterisco *.', 
	'IP_HOSTNAME'				=> 'Endereços IP ou hostnames ', 
	'IP_NO_BANNED'				=> 'Não existem IPs banidos', 
	'IP_UNBAN'					=> 'Desbloquear ou retirar a exclusão do IP', 
	'IP_UNBAN_EXPLAIN'			=> 'Você pode desbanir (ou retirar a exclusão) multiplos IPs apenas de uma só vez usando a combinação apropriada do rato e teclado do seu computador e explorador. IPs excluidos têm uma marcação no fundo.', 

	'LENGTH_BAN_INVALID'		=> 'O formato da data deve ser <kbd>DD-MM-YYYY</kbd>.',

	'PERMANENT'		=> 'Permanente', 
	 
	'UNTIL'						=> 'Até',
	'USER_BAN'					=> 'Expulsar um ou mais utilizadores',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Active para apagar os utilizadores introduzidos na lista de bans.',
	'USER_BAN_EXPLAIN'			=> 'Você pode banir multiplos utilizadores de uma só vez digitando cada nome numa nova linha. Use <u>Encontrar um utilizador</u> para procurar e adicionar ou um mais utilizadores automaticamente.',
	'USER_NO_BANNED'			=> 'Não há utilizadores banidos',
	'USER_UNBAN'				=> 'Desbanir ou retirar da exclusão utilizadores',
	'USER_UNBAN_EXPLAIN'		=> 'Você pode desbanir (ou retirar a exclusão) multiplos IPs apenas de uma só vez usando a combinação apropriada do rato e teclado do seu computador e explorador. IPs excluidos têm uma marcação no fundo.', 
)); 

?>
