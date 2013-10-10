<?php 
/** 
* 
* acp_forums [Portuguese] 
* 
* @package language 
* @version $Id: forums.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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

// Forum Admin 
$lang = array_merge($lang, array( 
	'AUTO_PRUNE_DAYS'			=> 'Dias para a Limpeza', 
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de dias desde a última mensagem depois que o tópico é apagado.', 
	'AUTO_PRUNE_FREQ'			=> 'Frequência da Auto-Limpeza', 
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo em dias entre a execução de uma limpeza e outra.', 
	'AUTO_PRUNE_VIEWED'			=> 'Auto-prune post viewed age', 
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de dias desde a última visualização depois que o tópico é apagado.', 

	'COPY_PERMISSIONS'				=> 'Copiar Permissões de', 
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Quando criada, a secção terá as mesmas permissões como a que você seleccionar aqui. Se nenhuma secção for seleccionada, a secção recentemente criada não será visível até que as suas permissões sejam escritas.', 
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se você seleccionar para copiar permissões, a secção terá as mesmas permissões como a que você seleccionar aqui. Isto irá substituir quaisquer permissões que você tenha previamente atribuido a esta secção com as permissões da secção que você seleccionar aqui. Se nenhuma secção for seleccionada, as permissões atuais serão salvas.', 
	'CREATE_FORUM'					=> 'Criar nova Secção', 

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Apagar Mensagens ou Mover para Secção', 
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Apagar SubSecções ou Mover para Secção', 
	'DEFAULT_STYLE'						=> 'Estilo Padrão', 
	'DELETE_ALL_POSTS'					=> 'Apagar Mensagens', 
	'DELETE_SUBFORUMS'					=> 'Apagar SubSecções e Mensagens', 
	'DISPLAY_ACTIVE_TOPICS'				=> 'Activar a Activação de Tópicos', 
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se você seleccionar (SIM), a activação de tópicos nas subsecções seleccionadas será exibida abaixo desta categoria.', 

	'EDIT_FORUM'					=> 'Editar Secção', 
	'ENABLE_INDEXING'				=> 'Activar atributos da Pesquisa', 
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se seleccionar (SIM), as mensagens escritas à esta Secção serão indexadas para pesquisas.', 
	'ENABLE_POST_REVIEW'			=> 'Activar Revisão da Mensagem', 
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se seleccionar (SIM), os utilizadores poderão fazer uma revisão em suas mensagens se novas mensagens forem escritas ao tópico enquanto utilizadores escreveram as deles. Isto deverá ser desativado para seções de chat geral.',
	'ENABLE_RECENT'					=> 'Exibir Tópicos Activos', 
	'ENABLE_RECENT_EXPLAIN'			=> 'Se seleccionar (SIM), os tópicos escritos à esta Secção serão exibidos na lista de tópicos activos.', 
	'ENABLE_TOPIC_ICONS'			=> 'Activar Ícones de Tópicos', 

	'FORUM_ADMIN'						=> 'Administração de Secções', 
	'FORUM_ADMIN_EXPLAIN'				=> 'No phpBB3 não existem Categorias, tudo é baseado em Seções. Cada Secção pode obter ilimitados números de subsecções e você pode determinar o que poderá ser enviado à cada uma ou não. Aqui você pode adicionar, editar, apagar, trancar, destrancar seções individuais assim como incluir controles adicionais. Se as suas mensagens e tópicos estavam fora de sincronização, você pode re-Sincronizar uma Secção.', 
	'FORUM_AUTO_PRUNE'					=> 'Activar Auto-limpeza', 
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Limpa os tópicos da Secção, determinando os parâmetros de frequência/tempo abaixo.', 
	'FORUM_CREATED'						=> 'A Secção foi criada com sucesso.', 
	'FORUM_DATA_NEGATIVE'				=> 'Os Parâmetros da Limpeza não podem ser negativos.', 
	'FORUM_DESC_TOO_LONG'				=> 'A sua Descrição é muito grande, ela precisa ser menor do que 4000 caracteres.', 
	'FORUM_DELETE'						=> 'Apagar Secção', 
	'FORUM_DELETE_EXPLAIN'				=> 'Esta ferramenta lhe permite apagar a determinada Secção. Se esta, for uma Secção de grande número de mensagens, você pode decidir para onde deseja mover todas as suas mensagens (ou seções) incluidas.', 
	'FORUM_DELETED'						=> 'A Secção seleccionada foi apagada com sucesso.', 
	'FORUM_DESC'						=> 'Descricção', 
	'FORUM_DESC_EXPLAIN'				=> 'Qualquer texto descrito aqui será exibido junto a esta Secção. Cdigos HTML so aceitos.',
	'FORUM_EDIT_EXPLAIN'				=> 'Esta ferramenta lhe permitirá customizar a sua Secção. Por Favor, note que Moderação e o Controle do Contador de Mensagens são determinados pelas Permissões de Secções para cada utilizador ou grupo.',
	'FORUM_IMAGE'						=> 'Imagem da Secção', 
	'FORUM_IMAGE_EXPLAIN'				=> 'Local da Imagem (relativo à pasta raíz do phpBB).', 
	'FORUM_LINK_EXPLAIN'				=> 'URL Completa (incluindo o protocolo, ex. <samp>http://</samp>) para o local em que o utilizador será redirecionado ao clicar, ex: http://www.phpbb.com/.',
	'FORUM_LINK_TRACK'					=> 'Salvar Redirecionamento de Links', 
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Recorda o número de vezes em que um link de uma Secção foi clicado.', 
	'FORUM_NAME'						=> 'Nome da Secção', 
	'FORUM_NAME_EMPTY'					=> 'O Nome deve ser escrito.', 
	'FORUM_PARENT'						=> 'Secção Pai', 
	'FORUM_PASSWORD'					=> 'Senha da secção', 
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar Senha da secção', 
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Apenas precisa ser inserida se uma senha for atribuida à secção.', 
	'FORUM_PASSWORD_EXPLAIN'			=> 'Defina uma Senha para esta secção. Utilize o sistema de permissões de preferência.', 
	'FORUM_PASSWORD_UNSET'              => 'Remover password do Forum',
    'FORUM_PASSWORD_UNSET_EXPLAIN'      => 'Verifique aqui para remover a password do forum.',
    'FORUM_PASSWORD_OLD'                => 'A password usada tem uma encriptação antiga, altere-a.',
	'FORUM_PASSWORD_MISMATCH'			=> 'As Senhas escritas não coincidem.', 
	'FORUM_PRUNE_SETTINGS'				=> 'Configuração da Limpeza de Secções', 
	'FORUM_RESYNCED'					=> 'O forum "%s" foi Re-Sincronizado com sucesso', 
	'FORUM_RULES_EXPLAIN'				=> 'As Regras da secção são exibidas em qualquer página com a secção seleccionada.', 
	'FORUM_RULES_LINK'					=> 'Link para as Regras da secção', 
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Você pode escrever a URL da página/mensagem as regras de sua secção aqui. Esta configuração irá substituir o texto de regras da secção que você escreveu.', 
	'FORUM_RULES_PREVIEW'				=> 'Prever Regras da secção', 
	'FORUM_RULES_TOO_LONG'				=> 'As Regras da secção são muito grandes, elas precisam ser menores que 4000 caracteres.', 
	'FORUM_SETTINGS'					=> 'Configurações da secção', 
	'FORUM_STATUS'						=> 'Estado da secção', 
	'FORUM_STYLE'						=> 'Estilo da secção', 
	'FORUM_TOPICS_PAGE'					=> 'Núm. Máx. de Tópicos por Página', 
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se não zero, este valor irá substituir a configuração padrão de tópicos por página.', 
	'FORUM_TYPE'						=> 'Tipo da secção', 
	'FORUM_UPDATED'						=> 'A Configuração da secção foi actualizada com sucesso.', 
	
    'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Você está a tentar modificar um fórum com subfóruns para um link. Por favor, mova todos os subfóruns deste fórum antes de prosseguir, caso não mova os subfóruns e faça a modificação para link todos os subfóruns ficarão indisponíveis.',
	'GENERAL_FORUM_SETTINGS'	=> 'Configuracção Geral de Secções', 

	'LINK'					 => 'Link', 
	'LIST_INDEX'			 => 'Lista de Secções na Listagem de SubSecções', 
	'LIST_INDEX_EXPLAIN'	 => 'Exibe um link para esta secção abaixo de suas subsecções se pelo menos uma existir.', 
    'LIST_SUBFORUMS'		 => 'Exibe os subforuns na legenda',
	'LIST_SUBFORUMS_EXPLAIN' => 'Exibe um link para esta secção abaixo de suas subsecções se activado.',

	'LOCKED'				 => 'Bloqueado', 

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'A secção escolhida para mover as mensagens não pode receber mensagens. Seleccione uma secção que possa receber mensagens.',
	'MOVE_POSTS_TO'					=> 'Mover Mensagens para', 
	'MOVE_SUBFORUMS_TO'				=> 'Mover SubSecções para', 

	'NO_DESTINATION_FORUM'			=> 'Você não especificou uma Secção para Mover o conteúdo.', 
	'NO_FORUM_ACTION'				=> 'Sem ações definidas para o conteúdo da Secção.', 
	'NO_PARENT'						=> 'Sem Pais', 
	'NO_PERMISSIONS'				=> 'Não Copiar Permissões', 
	'NO_PERMISSION_FORUM_ADD'		=> 'Você não está autorizado a adicionar secções.', 
	'NO_PERMISSION_FORUM_DELETE'	=> 'Você não está autorizado a apagar secções.', 

	'PARENT_IS_LINK_FORUM'		=> 'A secção pai especificadoa é um secção link. Secções link não podem ter sub-seções.',
	'PARENT_NOT_EXIST'			=> 'A secção pai selecionado não existe.', 
	'PRUNE_ANNOUNCEMENTS'		=> 'Limpar Anúncios', 
	'PRUNE_STICKY'				=> 'Limpar Tópicos Fixos', 
	'PRUNE_OLD_POLLS'			=> 'Limpar Votações Antigas', 
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Apaga tópicos com votações que não recebem votos em um determinado período.', 
	 
	'REDIRECT_ACL'	=> 'Agora, você pode %sdar Permissões%s para esta secção.', 

	'SYNC_IN_PROGRESS'			=> 'Sincronizando Secção', 
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Actualmente re-sincronizando a ordem dos tópicos %1$d/%2$d.', 

	'TYPE_CAT'			=> 'Categoria', 
	'TYPE_FORUM'		=> 'Secção', 
	'TYPE_LINK'			=> 'Link', 

	'UNLOCKED'			=> 'Desbloqueado', 
)); 

?>
