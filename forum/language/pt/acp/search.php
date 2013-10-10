<?php 
/** 
* 
* acp_search [Portuguese] 
* 
* @package language 
* @version $Id: search.php,v 1.0 2007/19/04 01:12:00 phpBB Group Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui você pode gerenciar os índices de pesquisa. Desde que você normalmente utilize apenas um backend você deve apagar todos os indexes que você não utiliza of. Depois de alterar algumas das configurações da pesquisa (e.g. o número minimum/maximum chars) é preciso recriar o índice para então, tais configurações sejam refletidas.', 
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui você pode definir que search backend será utilizado para mensagens indexing e execução das pesquisas. Você pode selecionar várias opções que podem influir em quantos processos estas ações são solicitadas. Algumas destas configurações são as mesmas para todas as search engine backends.', 

	'COMMON_WORD_THRESHOLD'					=> 'Palavra Comum threshold', 
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que estão contidas em uma grande porcentagem de todas as mensagens serão consideradas como comuns. Palavras comuns serão ignoradas em dúvidas de pesquisas. Escreva zero para desactivar. Apenas terá efeito se possuir mais de 100 mensagens.', 
	'CONFIRM_SEARCH_BACKEND'				=> 'Você está certo de que deseja mudar para um diferente search backend? Depois de modificar o search backend você terá de criar um índice para as novas search backend. Se você donâ€™t plan on switching back to the old search backend you can also delete the old backendâ€™s index para um sistema de recursos livres.', 
	'CONTINUE_DELETING_INDEX'				=> 'Continuar Previso do Processo de Excluso Indiciada',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de exclusão de índice foi iniciado. Em ordem, para acessar a página de índice da pesquisa novamente você deve completar o processo ou cancel-lo.',
	'CONTINUE_INDEXING'						=> 'Continue previous indexing process', 
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de criação de índice foi iniciado. Em ordem, para acessar a página de índice da pesquisa novamente você deve completar o processo ou cancel-lo.',
	'CREATE_INDEX'							=> 'Criar Índice', 

	'DELETE_INDEX'							=> 'Apagar Índice', 
	'DELETING_INDEX_IN_PROGRESS'			=> 'Excluindo o índice em progresso', 
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A pesquisa está a apagar os indices. Isto pode levar poucos minutos.', 

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O MySQL fulltext backend pode apenas ser utilizado com o MySQL4 ou acima/abaixo.', 
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext indexes pode apenas ser utilizado com tabelas do MyISAM.', 
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número Total de Mensagens indiciadas', 
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suporte para non-latin UTF-8 caracteres utilizando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suporte para non-latin UTF-8 caracteres utilizando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE não tiver propriedades de caractere unicode, o sistema de pesquisa tentará utilizar o sistema de expressões regulares mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Esta pesquisa exige propriedades de caractere PCRE, que somente estão presentes nas versões superiores a PHP 4.4, 5.1, se você quer procurar non-latin caráter.',
				
	'GENERAL_SEARCH_SETTINGS'				=> 'Configuracções Gerais da Pesquisa', 
	'GO_TO_SEARCH_INDEX'					=> 'Ir à Página Inicial da Pesquisa', 

	'INDEX_STATS'							=> 'Índice de Estatísticas', 
	'INDEXING_IN_PROGRESS'					=> 'Indexação em processo', 
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A pesquisa está actualmente indiciando todas as mensagens no forum. Isto pode levar de poucos minutos a poucas horas dependendo do tamanho de seu forum.', 

	'LIMIT_SEARCH_LOAD'						=> 'Limite de carga do sistema da Página de Pesquisa', 
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto exceder este valor, a página de pesquisa irá ficar offline, 1.0 igual ~100% utilização de um processador. Isto apenas funciona em Servidores baseados em UNIX.', 

	'MAX_SEARCH_CHARS'						=> 'Núm. Máx. de Caracteres indiciados por pesquisa', 
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com não mais que estes pequenos caracteres serão indiciadas para pesquisa.', 
	'MIN_SEARCH_CHARS'						=> 'Núm. Mín. de Caracteres indiciados por pesquisa', 
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com menos que estes pequenos caracteres serão indiciados para pesquisa.', 
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Núm. Mín. de Caracteres do Nome do Autor', 
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os utilizadores terão de escrever mais que estes caracteres do Nome enquanto executando uma pesquisa por autor. Se o Nome do Autor for menos que este número você ainda pode pesquisar pelas mensagens do autor, escrevendo o nome de utilizador completo.',

	'PROGRESS_BAR'							=> 'Barra de Progresso', 

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de Pesquisas para Visitantes', 
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número em segundos que um Visitante deverá esperar entre uma pesquisa e outra. Se um visitante realizar pesquisas todos os outros devem esperar até que o intervalo de tempo passe.', 
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Todas as mensagens com o id superior a %1$d serão indexadas agora, do qual %2$d mensagens serão nesta etapa.<br />A taxa atual de indexação é de aproximadamente %3$.1f mensagens por segundo.<br />Indexação em progresso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensagens com o id superior a %1$d serão apagadas da indexação da pesquisa.<br />Remoção em progresso…',	
	'SEARCH_INDEX_CREATED'					=> 'Todas as Mensagens foram indiciadas na Base de Dados com sucesso.', 
	'SEARCH_INDEX_REMOVED'					=> 'O Índice de Pesquisa foi apagado com sucesso.', 
	'SEARCH_INTERVAL'						=> 'Intervalo de Pesquisas para utilizadores',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número em segundos que os utilizadores devem esperar entre uma pesquisa e outra. Este intervalo é controlado independentemente para cada utilizador.',
	'SEARCH_STORE_RESULTS'					=> 'Search result cache length', 
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Os resultados da pesquisa Cached irão expirar depois deste tempo, em segundos. Escreva 0 se você deseja desactivar esta opção.', 
	'SEARCH_TYPE'							=> 'Search backend', 
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB lhe permite selecionar o backend que será utilizado para pesquisa de textos nos conteúdos da mensagem. Por padrão, a pesquisa irá utilizar o próprio fulltext search para o phpBB.', 
	'SWITCHED_SEARCH_BACKEND'				=> 'Você seleccionou a pesquisa backend. Em ordem, para utilizar o novo search backend você deve estar certo de que existe um índice para o backend que você escolheu.', 

	'TOTAL_WORDS'							=> 'Número Total de Palavras Indiciadas', 
	'TOTAL_MATCHES'							=> 'Número Total de Palavras Indiciadas para relações de mensagens', 

	'YES_SEARCH'							=> 'Activar Facilidades para Pesquisa', 
	'YES_SEARCH_EXPLAIN'					=> 'Activar funcionalidades de pesquisa especiais incluindo a pesquisa de Membros.', 
	'YES_SEARCH_UPDATE'						=> 'Activar Actualização fulltext', 
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Actualização dos índices fulltext quando postando, overridden se a pesquisa estiver desactivada.', 
)); 

?>
