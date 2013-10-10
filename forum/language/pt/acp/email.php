<?php 
/** 
* 
* acp_email [Portuguese] 
* 
* @package language 
* @version $Id: email.php,v 1.15 2007/05/12 12:32:28 davidmj Exp $
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

// Bot settings 
$lang = array_merge($lang, array( 
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aqui você pode enviar uma mensagem àtodos os seus utilizadores ou a todos os utilizadores de um grupo específico, caso tenha a opcão de receber emails em massa activada. Para isso, uma mensagem será enviado ao endereço de email do adminstrador a informar, com uma copia a todos membros. A configurao padrao apenas inclui 50 destinatarios por mensagens, sendo que para mais destinatarios mais emails serao enviados. Se você está a enviar mensagens a um grande grupo de utilizadores, por favor, seja paciente e não feche a página durante o envio. É normal que o envio em massa de mensagens leve um grande tempo, e você será avisado quando o processo for terminado.',
	'ALL_USERS'						=> 'Todos os utilizadores',

	'COMPOSE'				=> 'Compor', 

	'EMAIL_SEND_ERROR'		=> 'Ocorreu um ou mais erros enquanto enviava o email. Por Favor, confira %sLOG do Erro%s para uma mensagem de erro detalhada.',
	'EMAIL_SENT'			=> 'A sua mensagem foi enviada.', 
	'EMAIL_SENT_QUEUE'		=> 'A sua mensagem foi colocada na fila de envio.', 

	'LOG_SESSION'			=> 'Regista sessão de postagem para registo crítico', 

	'SEND_IMMEDIATELY'		=> 'Enviar imediatamente',
	'SEND_TO_GROUP'			=> 'Enviar para Grupo', 
	'SEND_TO_USERS'			=> 'Enviar para utilizadores',
	'SEND_TO_USERS_EXPLAIN'	=> 'Digitando nomes aqui, voce sobrescreve qualquer grupo selecionado acima. Digite cada nome de membro numa linha nova.',

	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do E-mail',
	'MASS_MESSAGE'			=> 'A sua Mensagem',
	'MASS_MESSAGE_EXPLAIN'	=> 'Somente insira na mensagem texto puro. Qualquer codigo será removido ao enviar.',	

	'NO_EMAIL_MESSAGE'		=> 'Você tem de introduzir uma mensagem.',
	'NO_EMAIL_SUBJECT'		=> 'Você tem de introduzir um assunto para a sua mensagem.',			
)); 

?>
