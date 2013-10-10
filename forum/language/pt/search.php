<?php
/**
*
* search [Portuguese]
*
* @package language
* @version $Id: search.php,v 1.22 2007/05/10 15:31:21 acydburn Exp $
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
'ALL_AVAILABLE' => 'Tudo disponíveis',
'ALL_RESULTS' => 'Todos os Resultados',

'DISPLAY_RESULTS' => 'Mostrar resultados ',

'FOUND_SEARCH_MATCH' => 'Foi encontrado %d vez ',
'FOUND_SEARCH_MATCHES' => 'Foi encontrado %d vezes',
'FOUND_MORE_SEARCH_MATCHES' => 'Foi encontrados mais de %d vezes',

'GLOBAL' => 'Anúncio Global',

'IGNORED_TERMS' => 'ignorado',
'IGNORED_TERMS_EXPLAIN' => 'As seguintes palavras foram ignoradas na procura: <b>%s</b>',

	'JUMP_TO_POST'			=> 'Pular para a mensagem',
	
	'LOGIN_EXPLAIN_EGOSEARCH'   => 'Este forum obriga a que esteja registado para visualizar os topicos.',


'NO_KEYWORDS' => 'Você tem que especificar pelo menos uma palavra para pesquisa. Cada palavra tem que conter no mínimo %d caracteres e não pode conter mais do que %d caracteres.',
'NO_RECENT_SEARCHES' => 'Sem procuras recentes',
'NO_SEARCH' => 'Desculpe, mas você não esta permitido para usar a pesquisa.',
'NO_SEARCH_RESULTS' => 'Nenhum resultado foi encontrado.',
'NO_SEARCH_TIME' => 'Desculpe, mas você não pode usar a pesquisa no momento. Por favor, tente novamente daqui a alguns minutos.',
'WORD_IN_NO_POST' => 'Nenhum post foi encontrado com esta palavra %s não e contido em nenhum post.',
'WORDS_IN_NO_POST' => 'Nenhum post foi encontrado com estas palavras %s não existe em nenhum post.',

'POST_CHARACTERS' => 'caracteres do post',

'RECENT_SEARCHES' => 'Pesquisas recentes',
'RESULT_DAYS' => 'Limitar resultados anteriores',
'RESULT_SORT' => 'Organizar resultador por',
'RETURN_FIRST' => 'Retornar os primeiros',
'RETURN_TO_SEARCH_ADV'	=> 'Retornar à pesquisa avançada',

'SEARCHED_FOR' => 'Termo usado na pesquisa',
'SEARCHED_TOPIC' => 'Pesquisar por tópicos',
'SEARCH_ALL_TERMS' => 'Procurar por todos os termos',
'SEARCH_ANY_TERMS' => 'Procurar por qualquer termo',
'SEARCH_AUTHOR' => 'Procurar por autor',
'SEARCH_AUTHOR_EXPLAIN' => 'Use * como coringa para resultados parciais',
'SEARCH_FIRST_POST' => 'Apenas o primeiro post dos tópico',
'SEARCH_FORUMS' => 'Pesquisar nos fóruns',
'SEARCH_FORUMS_EXPLAIN' => 'Selecione o fórun ou os fóruns em que deseja procurar. Para ser mais rapido na pesquisa selecione o fórum principal do sub-fórum e marque a opccao de pesquisar em sub-fórum.',
'SEARCH_IN_RESULTS' => 'Procurar nesses resultados',
'SEARCH_KEYWORDS_EXPLAIN' => 'Coloque <strong>+</strong> na frente das palavras que tem que ser encontradas e coloque <strong>-</strong> nas palavras que <strong>não</strong> tem que ser encontradas. Coloque uma lista de palavras separadas por <strong>|</strong>. Use * como coringa para resultados parciais.',
'SEARCH_MSG_ONLY' => 'Apenas mensagens de texto',
'SEARCH_OPTIONS' => 'Opcções de pesquisa',
'SEARCH_QUERY' => 'Procurar',
'SEARCH_SUBFORUMS' => 'Procurar nos Sub-fóruns',
'SEARCH_TITLE_MSG' => 'Procurar Títulos e texto dos topicos',
'SEARCH_TITLE_ONLY' => 'Procurar somente no títulos dos topicos',
'SEARCH_WITHIN' => 'Procurar com',
'SORT_ASCENDING' => 'Crescente',
'SORT_AUTHOR' => 'Autor',
'SORT_DESCENDING' => 'Decrescente',
'SORT_FORUM' => 'Fórum',
'SORT_POST_SUBJECT' => 'Assunto do Post',
'SORT_TIME' => 'Submetido em',

'TOO_FEW_AUTHOR_CHARS' => 'você deve indicar pelo menos %d caracteres do nome do autor.',
));

?>
