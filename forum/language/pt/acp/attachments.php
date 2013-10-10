<?php
/**
*
* acp_attachments [Portuguese]
*
* @package language
* @version $Id: attachments.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as Opcções Principais para Anexos e as Categorias Especiais associadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aqui você pode adiccionar, excluir, modificar e desactivar seusosar suas Extensões, por favor consulte o painel gerenciador de grupos de extensão. Recomenda-se a não permitir extensões de scripts (tipo: php, php3, php4, phtml, pl, cgi, py, rb, asp, aspx, entre outros…).',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aqui você pode controlar as suas Extensões permitidas. Para activar as suas Extensões, consulte por favor ao painel de adminstração dos grupos das Extensões. Nos recomendamos fortemente não reservar scripting Extensões(such as <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, and so forth…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aqui você poderá ver Ficheiros órfãos. Isto acontece normalmente se um utilizador anexar um Ficheiro e não enviar a sua mensagem. Você pode excluir os Ficheiros ou anexá-los em outras mensagens existentes. Anexar em mensagens exige um ID de mensagem válido, você deve determinar este ID você mesmo. Isto irá adicionar o anexo à mensagem informada.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Here you are able to see orphaned files. This happens mostly if users are attaching files but not submitting the post. You are able to delete the files or attach them to existing posts. Attaching to posts requires a valid post ID, you have to determine this ID by yourself. This will assign the already uploaded attachment to the post you entered.',
	'ADD_EXTENSION'						=> 'Adiccionar extensão',
	'ADD_EXTENSION_GROUP'				=> 'Adiccionar Grupo de Extensões',
	'ADMIN_UPLOAD_ERROR'				=> 'Erros enquanto tentava anexar o Ficheiro: "%s".',
	'ALLOWED_FORUMS'					=> 'Fóruns autorizados',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Apto a postar as extensões atribuídas aos fóruns selecionados (ou a todos se selecionado).',
	'ALLOWED_IN_PM_POST'				=> 'Autorizado',
	'ALLOW_ATTACHMENTS'					=> 'Permitir Anexos',
	'ALLOW_ALL_FORUMS'					=> 'Permitir Todos os Fóruns',
	'ALLOW_IN_PM'						=> 'Permitir em Mensagens Privadas',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir Anexos em Mensagens Privadas',
	'ALLOW_SELECTED_FORUMS'				=> 'Apenas os Fóruns selecionados abaixo',
	'ASSIGNED_EXTENSIONS'				=> 'Extensões Activadas',
	'ASSIGNED_GROUP'					=> 'Grupo Atribuído',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensões',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupos de Extensões',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamanho Máximo de Ficheiros',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Tamanho máximo de cada Ficheiro, 0 = sem limite.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Tamanho máximo de Mensagens',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Espaço em disco máximo disponível, por utilizador, para anexos em mensagens privadas, 0 = sem limite.',
	'ATTACH_ORPHAN_URL'					=> 'Anexos Órfãos',
	'ATTACH_POST_ID'					=> 'ID da Postagem',
	'ATTACH_QUOTA'						=> 'Cota total de anexos',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espaço em disco máximo disponível para acúmulo de anexos, 0 = sem limite.',
	'ATTACH_TO_POST'					=> 'Anexar ficheiro à postagem',

	'CAT_FLASH_FILES'			=> 'Ficheiros Flash',
	'CAT_IMAGES'				=> 'Imagens',
	'CAT_QUICKTIME_FILES'		=> 'Ficheiro de midia Quicktime',
	'CAT_RM_FILES'				=> 'Real Media Streams',
	'CAT_WM_FILES'				=> 'Win Media Streams',
	'CHECK_CONTENT'             => 'Verificar ficheiros anexados',
    'CHECK_CONTENT_EXPLAIN'     => 'Alguns browsers podem assumir incorrectamente o mimetype para o envio de ficheiros. Esta opção garante que os ficheiros que podem causar isto ser�o rejeitados.',
	'CREATE_GROUP'				=> 'Criar um novo grupo',
	'CREATE_THUMBNAIL'			=> 'Criar uma imagem reduzida',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Criar uma imagem reduzida em todas as situções possíveis.',

	'DEFINE_ALLOWED_IPS'			=> 'Definir IPs/Servidores autorizados',
	'DEFINE_DISALLOWED_IPS'			=> 'Definir IPs/Servidores proibidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Para definir vários IPs ou Servidores diferentes, introduza cada um numa nova linha. Para definir uma faixa de endereços de IP separe o início e o fim com um ífem (-), para definir um coringa use “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Você pode remover (ou não-excluir) múltiplos endereços de IP de uma única vez usando a combinação apropriada de mouse e teclado para seu computador e navegador. IPs apagados têm um fundo em azul.',
	'DISPLAY_INLINED'				=> 'Mostrar imagens',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Se escolher NÃO, imagens anexadas serão mostradas como link.',
	'DISPLAY_ORDER'					=> 'Ordem de Visualização dos Anexos',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Mostra anexos ordenados pela hora.',

	'EDIT_EXTENSION_GROUP'			=> 'Editar Grupo de Extensão',
	'EXCLUDE_ENTERED_IP'			=> 'Habilite para excluir o IP/Servidor digitado.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Excluir IP dos IPs/Servidores autorizados',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP dos IPs/Servidores proibídos',
	'EXTENSIONS_UPDATED'			=> 'Extensões actualizadas com sucesso.',
	'EXTENSION_EXIST'				=> 'A Extensão %s já existe.',
	'EXTENSION_GROUP'				=> 'Grupo de Extensão',
	'EXTENSION_GROUPS'				=> 'Grupos de Extensões',
	'EXTENSION_GROUP_DELETED'		=> 'Grupo de Extensões apagado com sucesso.',
	'EXTENSION_GROUP_EXIST'			=> 'O Grupo de Extensão %s já existe.',

	'GO_TO_EXTENSIONS'		=> 'Vá para a Tela de Gerência de Extensões',
	'GROUP_NAME'			=> 'Nome do Grupo',

	'IMAGE_LINK_SIZE'			=> 'Dimensões p/ Link de Imagem',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Mostra anexo de imagem como link se a imagem for maior que o informado, introduza 0px por 0px para desabilitar.',
	'IMAGICK_PATH'				=> 'Local do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Caminho completo para o programa Imagemagick, p.exemplo: /usr/bin/.',

	'MAX_ATTACHMENTS'				=> 'Máximo de anexos por postagem',
	'MAX_ATTACHMENTS_PM'			=> 'Máximo de anexos por mensagem',
	'MAX_EXTGROUP_FILESIZE'			=> 'Tamanho Máximo de Ficheiros',
	'MAX_IMAGE_SIZE'				=> 'Dimensão Máxima de Imagens',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Tamanho Máximo de imagem anexada, 0px por 0px impede anexo de imagens.',
	'MAX_THUMB_WIDTH'				=> 'Largura máxima das imagens em miniaturas em pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A largura das miniatura das imagens geradas não ultrapassara a informada aqui.',
	'MIN_THUMB_FILESIZE'			=> 'Tamanho Mínimo de imagem reduzida',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Não criar imagem reduzida para imagens menores que o informado.',
	'MODE_INLINE'					=> 'Na linha',
	'MODE_PHYSICAL'					=> 'Físico',

	'NOT_ALLOWED_IN_PM'			=> 'Apenas autorizado nas mensagens',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Negado',
	'NOT_ASSIGNED'				=> 'Não atribuido',
	'NO_EXT_GROUP'				=> 'Nenhum',
	'NO_EXT_GROUP_NAME'			=> 'Nome do Grupo não informado',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Grupo de Extensão não especificado.',
	'NO_FILE_CAT'				=> 'Nenhum',
	'NO_IMAGE'					=> 'Sem imagem',
	'NO_THUMBNAIL_SUPPORT'		=> 'O suporte ao Thumbnail (imagem reduzida) foi desabilitado. Para abilitar esta funcionalidade é nexessario a extensão GD ou imagemagick instalado. Nenhum dos dois foi encontrado.',
	'NO_UPLOAD_DIR'				=> 'O diretório de envio (upload) que você indicou não existe.',
	'NO_WRITE_UPLOAD'			=> 'O diretório que você indicou não permite gravação. Por favor, altere as permissões para permitir a escrita nele.',

	'ONLY_ALLOWED_IN_PM'	=> 'Apenas autorizar nas Mensagens Privadas',
	'ORDER_ALLOW_DENY'		=> 'Permitir',
	'ORDER_DENY_ALLOW'		=> 'Negar',

	'REMOVE_ALLOWED_IPS'		=> 'Remover ou Não-exclui IPs/Servidores autorizados',
	'REMOVE_DISALLOWED_IPS'		=> 'Remover ou Não-exclui IPs/Servidores proibidos',

	'SEARCH_IMAGICK'				=> 'Localizar Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Permitir/Negar',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Permite ou Nega a lista de endereços, essa configuração aplica-se apenas aos Ficheiros para download.',
	'SECURE_DOWNLOADS'				=> 'Activar Downloads Seguros',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Com esta opção activada, os downloads são autorizados apenas para os IPs/Servidores que você definiu.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Downloads Seguros está desactivados. As opções abaixo só serão aplicadas depois de habilitá-lo.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'A lista de IPs foi actualizada com sucesso.',
	'SECURE_EMPTY_REFERRER'			=> 'Permitir origem em branco',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Downloads Seguros são baseados na origem. Você quer permitir downloads para aqueles que omitirem a origem?',
	'SETTINGS_CAT_IMAGES'			=> 'Configuração de Categorias de Imagens',
	'SPECIAL_CATEGORY'				=> 'Categoria Especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Categorias Especiais se diferenciam na forma como são apresentadas dentro da postagem.',
	'SUCCESSFULLY_UPLOADED'			=> 'Enviado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'O Grupo de Extensão foi adicionado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'O Grupo de Extensão foi actualizado com sucesso.',

	'UPLOADING_FILES'				=> 'A Enviar Ficheiros',
	'UPLOADING_FILE_TO'				=> 'A Enviar Ficheiro "%1$s" à Postagem Nº %2$d...',
	'UPLOAD_DENIED_FORUM'			=> 'Você não tem permissão para enviar Ficheiros para o fórum "%s".',
	'UPLOAD_DIR'					=> 'Diretório de Envios (Uploads)',
	'UPLOAD_DIR_EXPLAIN'			=> 'Pasta de armazenamento de anexos. Por Favor, note que se voc?lterar o diret?? enquanto envia um Ficheiro, voc?er?e copiar manualmente os Ficheiros para o novo local.',
	'UPLOAD_ICON'					=> 'Ícone de Envio',
	'UPLOAD_NOT_DIR'				=> 'O local para envio de Ficheiros que você indicou não parece ser um diretório.',
));

?>
