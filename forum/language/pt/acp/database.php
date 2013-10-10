<?php 
/** 
* 
* acp_database [Portuguese] 
* 
* @package language 
* @version $Id: database.php,v 1.0 2007/19/04 01:12:00 davidmj Exp $
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

// Database Backup/Restore 
$lang = array_merge($lang, array( 
	'ACP_BACKUP_EXPLAIN'	=> 'Aqui pode fazer backup de todas as informações relativas ao seu fórum phpBB. Você pode guardar os resultados num ficheiro na sua pasta <samp>/store</samp> ou descarrega-lo diretamente. Dependendo das configuracções do seu servidor, você poderá comprimir o ficheiro em diversos formatos.',
	'ACP_RESTORE_EXPLAIN'	=> 'Esta operação irá restaurar todas as tabelas do phpBB contidas no ficheiro. Se seu servidor suportar compressão de ficheiros de texto gzip ou bzpi2 ela será automaticamente descompremida. <strong>ATENÇÃO</strong> Todas as informações existentes serão substituidas. A restauração pode demorar, aguarde o processo ser concluído.', 

	'BACKUP_DELETE'		=> 'O ficheiro de backup foi apagado com sucesso.', 
	'BACKUP_INVALID'	=> 'O ficheiro seleccionado para backup é inválido.', 
	'BACKUP_OPTIONS'	=> 'Opcções de Backup', 
	'BACKUP_SUCCESS'	=> 'O ficheiro de backup foi criado com sucesso.', 
	'BACKUP_TYPE'		=> 'Típo de Backup', 

	'DATABASE'			=> 'Ferramentas da Base de Dados', 
	'DATA_ONLY'			=> 'Apenas dados', 
	'DELETE_BACKUP'		=> 'Apagar backup', 
	'DELETE_SELECTED_BACKUP'	=> 'Você tem certeza que deseja apagar o backup do banco de dados seleccionado?',
	'DESELECT_ALL'		=> 'Desmarcar todos', 
	'DOWNLOAD_BACKUP'	=> 'Descarregar backup', 

	'FILE_TYPE'			=> 'Típo de ficheiro', 
	'FULL_BACKUP'		=> 'Completo', 

	'RESTORE_FAILURE'		=> 'O ficheiro de backup deve estar corrompido.',
	'RESTORE_OPTIONS'		=> 'Opcções de restauracção', 
	'RESTORE_SUCCESS'		=> 'A base de dados foi restaurada com sucesso.<br /><br />O Seu fórum deve estar como era quando o backup foi feito.', 

	'SELECT_ALL'			=> 'Marcar todas', 
	'SELECT_FILE'			=> 'Seleccionar o ficheiro', 
	'START_BACKUP'			=> 'Iniciar backup', 
	'START_RESTORE'			=> 'Iniciar restauração', 
	'STORE_AND_DOWNLOAD'	=> 'Armazenar e descarregar', 
	'STORE_LOCAL'			=> 'Armazenar o ficheiro localmente', 
	'STRUCTURE_ONLY'		=> 'Apenas estrutura', 

	'TABLE_SELECT'		=> 'Selecção de tabelas',
	'TABLE_SELECT_ERROR'=> 'Você deve seleccionar pelo menos uma tabela.',	
)); 

?>
