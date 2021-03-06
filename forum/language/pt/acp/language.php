<?php 
/** 
* 
* acp_language [Portuguese] 
* 
* @package language 
* @version $Id: language.php,v 1.0 2007/19/04 01:12:00 phpBB Group Exp $
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
	'ACP_FILES'						=> 'Administração de Línguas', 
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aqui você pode Instalar/Desinstalar pacotes de línguas para o seu forum.', 

	'EMAIL_FILES'			=> 'Email Templates',

	'FILE_CONTENTS'				=> 'Ficheiros de Contentamento', 
	'FILE_FROM_STORAGE'			=> 'Ficheiro da Pasta de Armazenamento', 

	'HELP_FILES'				=> 'Ficheiros de Ajuda', 

	'INSTALLED_LANGUAGE_PACKS'	=> 'Línguas Instaladas', 
	'INVALID_LANGUAGE_PACK'		=> 'O Pacote seleccionado não é válido. Por Favor, verifique o pacote e o envie novamente se necessário.', 
	'INVALID_UPLOAD_METHOD'		=> 'O Método seleccionado para o envio não é válido. Por Favor, escolha um método diferente.', 

	'LANGUAGE_DETAILS_UPDATED'			=> 'A Configuração de Linguas foi atualizada com sucesso.', 
	'LANGUAGE_ENTRIES'					=> 'Language entries', 
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aqui você pode alterar pacotes de línguas existentes ou ainda não traduzidos.<br /><strong>Nota:</strong> Ao modificar um ficheiro de linguagem, as modificações serão stored com uma pasta separada para que você faça o download. Estas alterações não serão visíveis aos utilizadores até que você substitua os ficheiros existentes através de seu servidor (enviando os mesmos).',
	'LANGUAGE_FILES'					=> 'Ficheiros da Língua', 
	'LANGUAGE_KEY'						=> 'Chave de Linguagem', 
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'O Pacote de Línguas já se encontra instalado.', 
	'LANGUAGE_PACK_DELETED'				=> 'O Pacote de Línguas <strong>%s</strong> foi apagado com sucesso. Todos os utilizadores que utilizavam este idioma foram atualizados para a Língua Oficial do forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalhes do Pacote de Línguas', 
	'LANGUAGE_PACK_INSTALLED'			=> 'O Pacote de Línguas <strong>%s</strong> foi instalado com sucesso.', 
	'LANGUAGE_PACK_ISO'					=> 'ISO', 
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome do Local', 
	'LANGUAGE_PACK_NAME'				=> 'Nome', 
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O Pacote de Línguas seleccionado não existe.', 
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizado por (incluindo robots)', 
	'LANGUAGE_VARIABLE'					=> 'Language variable', 
	'LANG_AUTHOR'						=> 'Autor do Pacote de Línguas', 
	'LANG_ENGLISH_NAME'					=> 'Nome em Inglês', 
	'LANG_ISO_CODE'						=> 'Código ISO', 
	'LANG_LOCAL_NAME'					=> 'Nome do Local', 

	'MISSING_LANGUAGE_FILE'		=> 'Ficheiro de Linguagem ausente: <strong style="color:red">%s</strong>', 
	'MISSING_LANG_VARIABLES'	=> 'Variáveis de Linguagem ausentes', 
	'MODS_FILES'				=> 'Ficheiros de Linguagem de MODs', 

	'NO_FILE_SELECTED'				=> 'Não foi seleccionado o ficheiro de linguagem.', 
	'NO_LANG_ID'					=> 'Não foi seleccionado um Pacote de Línguas.', 
	'NO_REMOVE_DEFAULT_LANG'		=> 'Você não pode excluir o Pacote de Línguas Oficial<br />Se você deseja excluir este pacote, altere a Língua Oficial do forum.', 
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Sem Pacotes de Línguas desinstalados', 

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Excluir da Pasta de Armazenamento', 

	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccionar método para Download', 
	'SUBMIT_AND_DOWNLOAD'		=> 'Enviar e Descarregar Ficheiro', 
	'SUBMIT_AND_UPLOAD'			=> 'Enviar e fazer Upload do Ficheiro', 

	'THOSE_MISSING_LANG_FILES'			=> 'Os Ficheiros seguintes estão ausentes da pasta %s de línguas', 
	'THOSE_MISSING_LANG_VARIABLES'		=> 'As variáveis seguintes estão ausentes do <strong>%s</strong> pacote de línguas', 

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacote de Línguas Desinstalados', 

	'UNABLE_TO_WRITE_FILE'		=> 'O Ficheiro não pôde ser escrito para %s.', 
	'UPLOAD_COMPLETED'			=> 'O Envio foi realizado com sucesso.', 
	'UPLOAD_FAILED'				=> 'O Envio falhou por razões desconhecidas. Você deve substituir o ficheiro manualmente.', 
	'UPLOAD_METHOD'				=> 'Enviar Método', 
	'UPLOAD_SETTINGS'			=> 'Enviar Configurações', 

	'WRONG_LANGUAGE_FILE'		=> 'O Ficheiro seleccionado é inválido.', 
)); 

?>
