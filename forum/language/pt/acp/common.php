<?php 
/** 
* 
* acp common [Portuguese] 
* 
* @package language 
* @version $Id: common.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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

// Common 
$lang = array_merge($lang, array( 
	'ACP_ADMINISTRATORS'		=> 'Administradores', 
	'ACP_ADMIN_LOGS'			=> 'Log do Administrador', 
	'ACP_ADMIN_ROLES'			=> 'Tarefas do Administrador', 
	'ACP_ATTACHMENTS'			=> 'Anexos', 
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configurações de Anexos', 
	'ACP_AUTH_SETTINGS'			=> 'Autentificação', 
	'ACP_AUTOMATION'			=> 'Automação', 
	'ACP_AVATAR_SETTINGS'		=> 'Configurações do Avatar',
	 
	'ACP_BACKUP'				=> 'Backup', 
	'ACP_BAN'					=> 'Expluções', 
	'ACP_BAN_EMAILS'			=> 'Expulsar Emails', 
	'ACP_BAN_IPS'				=> 'Expulsar IPs', 
	'ACP_BAN_USERNAMES'			=> 'Expulsar Nomes de Utilizadores', 
	'ACP_BBCODES'				=> 'BBCodes', 
	'ACP_BOARD_CONFIGURATION'	=> 'Configuração do Forum', 
	'ACP_BOARD_FEATURES'		=> 'Características do Forum', 
	'ACP_BOARD_MANAGEMENT'		=> 'Adminstração do Forum', 
	'ACP_BOARD_SETTINGS'		=> 'Configurações do Forum', 
	'ACP_BOTS'					=> 'Aranhas/Robôs', 

	'ACP_CAPTCHA'				=> 'CAPTCHA', 

	'ACP_CAT_DATABASE'			=> 'Base de Dados', 
	'ACP_CAT_DOT_MODS'			=> 'MODs',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'Geral', 
	'ACP_CAT_MAINTENANCE'		=> 'Manutenção', 
	'ACP_CAT_PERMISSIONS'		=> 'Permissões', 
	'ACP_CAT_POSTING'			=> 'Mensagem', 
	'ACP_CAT_STYLES'			=> 'Templates', 
	'ACP_CAT_SYSTEM'			=> 'Sistema', 
	'ACP_CAT_USERGROUP'			=> 'Utilizadores e Grupos', 
	'ACP_CAT_USERS'				=> 'Utilizadores', 
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicação do Cliente', 
	'ACP_COOKIE_SETTINGS'		=> 'Configurações de Cookie', 
	'ACP_CRITICAL_LOGS'			=> 'Log do Erro', 
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Personalizar o Perfil',

	'ACP_DATABASE'				=> 'Adminstração da Base de Dados', 
	'ACP_DISALLOW'				=> 'Desactivar', 
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes Desactivados', 

	'ACP_EMAIL_SETTINGS'		=> 'Configurações de email', 
	'ACP_EXTENSION_GROUPS'		=> 'Administrar Grupos de Extensões', 

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissões Básicas do Forum', 
	'ACP_FORUM_LOGS'				=> 'Logs do Forum', 
	'ACP_FORUM_MANAGEMENT'			=> 'Adminstração do Forum', 
	'ACP_FORUM_MODERATORS'			=> 'Moderadores', 
	'ACP_FORUM_PERMISSIONS'			=> 'Permissões', 
	'ACP_FORUM_ROLES'				=> 'Tarefas do Forum', 

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuração Geral', 
	'ACP_GENERAL_TASKS'				=> 'Tarefas Gerais', 
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores Globais', 
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissões Globais', 
	'ACP_GROUPS'					=> 'Grupos', 
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissões de Secções e Grupos', 
	'ACP_GROUPS_MANAGE'				=> 'Administrar Grupos', 
	'ACP_GROUPS_MANAGEMENT'			=> 'Adminstração de Grupos', 
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissões do Grupo', 

	'ACP_ICONS'						=> 'Ícones', 
	'ACP_ICONS_SMILIES'				=> 'Ícones/Smiles', 
	'ACP_IMAGESETS'					=> 'Conjunto de Imagens', 
	'ACP_INACTIVE_USERS'			=> 'Utilizadores Inactivos', 
	'ACP_INDEX'						=> 'Índice da Administração', 

	'ACP_JABBER_SETTINGS'			=> 'Configurações de Jabber', 

	'ACP_LANGUAGE'					=> 'Adminstração de Línguas', 
	'ACP_LANGUAGE_PACKS'			=> 'Pacotes de Línguas', 
	'ACP_LOAD_SETTINGS'				=> 'Configurações de Carga', 
	'ACP_LOGGING'					=> 'Ligando', 

	'ACP_MAIN'						=> 'Índice da Administração', 
	'ACP_MANAGE_EXTENSIONS'			=> 'Administrar Extensões',
	'ACP_MANAGE_FORUMS'				=> 'Administrar Secções',
	'ACP_MANAGE_RANKS'				=> 'Administrar Ranks',
	'ACP_MANAGE_REASONS'			=> 'Administrar Razões de Denúncias/Negações',
	'ACP_MANAGE_USERS'				=> 'Administrar Utilizadores',
	'ACP_MASS_EMAIL'				=> 'Email em Massa', 
	'ACP_MESSAGES'					=> 'Mensagens', 
	'ACP_MESSAGE_SETTINGS'			=> 'Configurações de Mensagens Particulares', 
	'ACP_MODULE_MANAGEMENT'			=> 'Adminstração de Módulos', 
	'ACP_MOD_LOGS'					=> 'Log do Moderador', 
	'ACP_MOD_ROLES'					=> 'Tarefas do Moderador', 
	
	'ACP_NO_ITEMS'				=> 'Não existem items ainda.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Anexos Órfãos', 

	'ACP_PERMISSIONS'			=> 'Permissões', 
	'ACP_PERMISSION_MASKS'		=> 'Permission masks', 
	'ACP_PERMISSION_ROLES'		=> 'Permission roles', 
	'ACP_PERMISSION_TRACE'		=> 'Cópia de Configuração', 
	'ACP_PHP_INFO'				=> 'Informação PHP', 
	'ACP_POST_SETTINGS'			=> 'Configuração das Mensagens', 
	'ACP_PRUNE_FORUMS'			=> 'Limpeza de Forums',
	'ACP_PRUNE_USERS'			=> 'Limpeza de Utilizadores', 
	'ACP_PRUNING'				=> 'A Limpar', 

	'ACP_QUICK_ACCESS'			=> 'Acesso Rápido', 

	'ACP_RANKS'					=> 'Ranks', 
	'ACP_REASONS'				=> 'Razões de Denúncia/Negação', 
	'ACP_REGISTER_SETTINGS'		=> 'Configuração do Registo', 

	'ACP_RESTORE'				=> 'Restaurar', 

	'ACP_SEARCH'				=> 'Configuração da Pesquisa', 
	'ACP_SEARCH_INDEX'			=> 'Índice da Pesquisa', 
	'ACP_SEARCH_SETTINGS'		=> 'Configurações de Pesquisa', 

	'ACP_SECURITY_SETTINGS'		=> 'Configurações de Segurança', 
	'ACP_SERVER_CONFIGURATION'	=> 'Configurações do Servidor', 
	'ACP_SERVER_SETTINGS'		=> 'Configurações do Servidor', 
	'ACP_SIGNATURE_SETTINGS'	=> 'Configurações da Assinatura', 
	'ACP_SMILIES'				=> 'Smiles', 
	'ACP_STYLE_COMPONENTS'		=> 'Componentes do Estilo', 
	'ACP_STYLE_MANAGEMENT'		=> 'Adminstração de Templates', 
	'ACP_STYLES'				=> 'Templates', 

	'ACP_TEMPLATES'				=> 'Templates', 
	'ACP_THEMES'				=> 'Temas', 

	'ACP_UPDATE'					=> 'A Actualizar', 
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissões de Secções e Utilizadores', 
	'ACP_USERS_LOGS'				=> 'Log do utilizador', 
	'ACP_USERS_PERMISSIONS'			=> 'Permissões do Utilizador', 
	'ACP_USER_ATTACH'				=> 'Anexos', 
	'ACP_USER_AVATAR'				=> 'Avatar', 
	'ACP_USER_FEEDBACK'				=> 'Feedback', 
	'ACP_USER_GROUPS'				=> 'Grupos', 
	'ACP_USER_MANAGEMENT'			=> 'Administração de utilizadores', 
	'ACP_USER_OVERVIEW'				=> 'Revisão', 
	'ACP_USER_PERM'					=> 'Permissões', 
	'ACP_USER_PREFS'				=> 'Preferências', 
	'ACP_USER_PROFILE'				=> 'Perfil', 
	'ACP_USER_RANK'					=> 'Rank', 
	'ACP_USER_ROLES'				=> 'Tarefas do Utilizador', 
	'ACP_USER_SECURITY'				=> 'Segurança do Utilizador', 
	'ACP_USER_SIG'					=> 'Assinatura', 

	'ACP_VC_SETTINGS'					=> 'Configurações da Confirmação Visual', 
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previsão da Imagem CAPTCHA', 
	'ACP_VERSION_CHECK'					=> 'Verificar Actualizações', 
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Ver Permissões Administrativas', 
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Ver Permissões de Moderação', 
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Ver Permissões Básicas', 
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Ver Permissões Globais', 
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Ver Permissões do Utilizador', 

	'ACP_WORDS'					=> 'Censura de Palavras', 

	'ACTION'				=> 'Acção', 
	'ACTIONS'				=> 'Acções', 
	'ACTIVATE'				=> 'Activo', 
	'ADD'					=> 'Adicionar', 
	'ADMIN'					=> 'Administração', 
	'ADMIN_INDEX'			=> 'Índice da Administração', 
	'ADMIN_PANEL'			=> 'Painel de Administração', 
	'ADM_LOGOUT'            => 'Sair do ACP',
    'ADM_LOGGED_OUT'        => 'Saiu com Sucesso do Painel de Administração',


	'BACK'					=> 'Voltar', 

	'COLOUR_SWATCH'			=> 'Web-safe colour swatch', 
	'CONFIG_UPDATED'		=> 'Configuração actualizada com sucesso.', 

	'DEACTIVATE'				=> 'Desactivar', 
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A Pasta seleccionada não existe.', 
	'DIRECTORY_NOT_DIR'			=> 'A Pasta seleccionada não é um diretório.', 
	'DIRECTORY_NOT_WRITABLE'	=> 'A Pasta seleccionada não pode ser escrita.', 
	'DISABLE'					=> 'Desactivar', 
	'DOWNLOAD'					=> 'Descarregar', 
	'DOWNLOAD_AS'				=> 'Descarregar como', 
	'DOWNLOAD_STORE'			=> 'Descarregar ou Guardar o Ficheiro', 
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Você deve descarregar directamente o Ficheiro ou guarda-lo no seu diretório.', 

	'EDIT'					=> 'Editar', 
	'ENABLE'				=> 'Activar', 
	'EXPORT_DOWNLOAD'		=> 'Descarregar',
	'EXPORT_STORE'			=> 'Guardar', 

	'GENERAL_OPTIONS'		=> 'Opcções Gerais', 
	'GENERAL_SETTINGS'		=> 'Configurações Gerais', 
	'GLOBAL_MASK'			=> 'Global permission mask', 

	'INSTALL'				=> 'Instalar', 
	'IP'					=> 'IP do utilizador', 
	'IP_HOSTNAME'			=> 'Endereço de IP ou hostnames', 

	'LOGGED_IN_AS'			=> 'Você está ligado como:', 
	'LOGIN_ADMIN'			=> 'Para administrar o forum, precisa de ser um utilizador verificado.', 
	'LOGIN_ADMIN_CONFIRM'	=> 'Para administrar o forum, precisa de confirmar o seu login.', 
	'LOGIN_ADMIN_SUCCESS'	=> 'O seu registo foi verificado com sucesso e agora será redirecionado ao Painel de Administração.',
	'LOOK_UP_FORUM'			=> 'Seleccione uma Secção', 
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Você pode seleccionar mais de um forum.',

	'MANAGE'				=> 'Administrar',
	'MENU_TOGGLE'			=> 'Ocultar ou mostrar o menu lateral',	
	'MOVE_DOWN'				=> 'Mover - Baixo', 
	'MOVE_UP'				=> 'Mover - Cima', 

	'NOTIFY'				=> 'Aviso', 
	'NO_ADMIN'				=> 'Você não está autorizado a administrar este painel.', 
	'NO_EMAILS_DEFINED'		=> 'Sem endereços de email válidos encontrados.',
	'NO_PASSWORD_SUPPLIED'	=> 'Tem de indicar a sua senha para aceder o Painel de Administração.',	

	'OFF'					=> 'Desactivado',
	'ON'					=> 'Activado',

	'PARSE_BBCODE'						=> 'Parse BBCode', 
	'PARSE_SMILIES'						=> 'Parse smilies', 
	'PARSE_URLS'						=> 'Parse links', 
	'PERMISSIONS_TRANSFERRED'			=> 'Permissões Transferidas', 
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Você está actualmente com as permissões de %1$s. Você pode navegar pelo forum com as permissões de utilizador, mas não aceder o painel de administração desde que possua as devidas permissões. Você pode <a href="%2$s"><strong>reverter suas permissões</strong></a> a qualquer momento.', 
	'PIXEL'							=> 'px', 
	'PROCEED_TO_ACP'					=> '%sIr ao Painel de Administração%s', 

	'REMIND'							=> 'Lembrar', 
	'RESYNC'							=> 'Re-Sincronizar', 
	'RETURN_TO'							=> 'Voltar a', 

	'SELECT_ANONYMOUS'		=> 'Seleccionar utilizador Anônimo', 
	'SELECT_OPTION'			=> 'Seleccionar Opção', 
	
	'SETTING_TOO_LOW'      => 'Introduziu o seguinte valor para este campo �%s� é muito curto. O maximo autorizado é de %d.',
    'SETTING_TOO_BIG'      => 'Introduziu o seguinte valor para este campo �%s� é muito grande. O maximo autorizado é de  %d.',   
    'SETTING_TOO_LONG'      => 'Introduziu o seguinte valor para este campo �%s� é muito longo. O maximo autorizado é de  %d.',
    'SETTING_TOO_SHORT'      => 'Introduziu o seguinte valor para este campo �%s� é muito pequeno. O minimo autorizado é de  %d.',

	'UCP'					=> 'Painel de Utilizadores', 
	'USERNAMES_EXPLAIN'		=> 'Insira cada utilizador em uma linha separada.', 
	'USER_CONTROL_PANEL'	=> 'Painel de Utilizadores', 

	'WARNING'				=> 'Advertência', 
)); 

// PHP info 
$lang = array_merge($lang, array( 
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta página lista as informações da Versão do PHP instalado neste servidor. Isto inclui detalhes de módulos carregados, variáveis disponíveis configurações padrão. Esta informação pode ser necessária quando erros forem detectados. Por Favor, fique atento que alguns servidores irão limitar quais informações serão exibidas aqui por medidas de segurança. Você está alertado a não entregar qualquer detalhes nesta página exceto quando perguntado por <a href="http://www.phpbb.com/about/">Equipa Oficial de Membros</a> no forum de suporte.', 

	'NO_PHPINFO_AVAILABLE'	=> 'As informações PHP não podem ser determinadas. O Phpinfo() foi desactivado por medidas de segurança.', 
)); 

// Logs 
$lang = array_merge($lang, array( 
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Isto é uma lista de todas as ações realizadas pelos administradores. Você pode classificar por utilizador, data, IP ou ação. Se você tiver as permissões necessárias, você pode limpar operações individuais ou o log como um todo.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Isto é uma lista de todas as ações realizadas pelo forum em si. Estes LOGs provem com informações de que você pode solucionar problemas específicos, por exemplo a falha no envio de emails. Você pode classificar por utilizador, data, IP ou ação. Se você tiver as permissões necessárias, você pode limpar operações individuais ou o log como um todo.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Isto é uma lista de todas as ações realizadas pelos moderadores do forum, então seleccione uma secção da lista. Você pode classificar por utilizador, data, IP ou ação. Se você tiver as permissões necessárias, você pode limpar operações individuais ou o log como um todo.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Isto é uma lista de todas as ações realizadas pelos utilizadores do forum.',
	'ALL_ENTRIES'				=> 'Todas as Entradas',

	'DISPLAY_LOG'	=> 'Exibir entradas anteriores', 

	'NO_ENTRIES'	=> 'Sem LOGs para este Período.',

	'SORT_IP'		=> 'Endereço de IP', 
	'SORT_DATE'		=> 'Data', 
	'SORT_ACTION'	=> 'Ação do Log', 
)); 

// Index page 
$lang = array_merge($lang, array( 
	'ADMIN_INTRO'				=> 'Obrigado por escolher o phpBB como o seu forum. Aqui você pode visualizar as estatísticas gerais do seu forum. Os Links no painel esquerdo dão-lhe acesso a diversas ferramentas de administração para o seu phpBB, sendo que cada uma possui as instruções de como utilizá-lo.', 
	'ADMIN_LOG'					=> 'Log das Ações dos Administradores', 
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aqui você terá uma revisão das cinco últimas ações realizadas pelos administradores. Uma cópia completa do log pode ser visualizada através do item apropriado no Menu ou seguindo o link acima/abaixo.', 
	'AVATAR_DIR_SIZE'			=> 'Tamanho do Diretório do Avatar', 

	'BOARD_STARTED'		=> 'Início do Forum', 
	'BOARD_VERSION'		=> 'Versão do Forum',

	'DATABASE_SERVER_INFO'	=> 'Servidor da Base de Dados', 
	'DATABASE_SIZE'			=> 'Tamanho da Base de Dados', 

	'FILES_PER_DAY'		=> 'Anexos / Dia', 
	'FORUM_STATS'		=> 'Estatísticas do Forum', 

	'GZIP_COMPRESSION'	=> 'Compressão Gzip', 

	'NOT_AVAILABLE'		=> 'Não Disponível', 
	'NUMBER_FILES'		=> 'Número de Anexos', 
	'NUMBER_POSTS'		=> 'Número de Mensagens', 
	'NUMBER_TOPICS'		=> 'Número de Tópicos', 
	'NUMBER_USERS'		=> 'Número de Utilizadores', 
	'NUMBER_ORPHAN'		=> 'Anexos Órfãos', 

	'POSTS_PER_DAY'		=> 'Mensagens / Dia', 

	'PURGE_CACHE'			=> 'Apagar o cache',
	'PURGE_CACHE_CONFIRM'	=> 'Você tem certeza que deseja apagar o cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Apagar todos os itens relacionados ao cache, isto inclui qualquer Ficheiro de cache de templates ou de solicitações a base de dados.',

	'RESET_DATE'					=> 'Reiniciar Data',
	'RESET_DATE_CONFIRM'			=> 'Você tem certeza que deseja reiniciar a data de inicio do painel?',
	'RESET_ONLINE'					=> 'Reiniciar Online',
	'RESET_ONLINE_CONFIRM'			=> 'Você tem certeza que deseja reiniciar o contador de recorde de utilizadores online?',	
	'RESYNC_POSTCOUNTS'				=> 'Re-Sincronizar Contagem de Mensagens', 
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Somente mensagens que existem serão consideradas. Mensagens apagadas não serão contadas.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Você tem certeza que deseja re-sincronizar o contador de mensagens?',			
	'RESYNC_POST_MARKING'			=> 'Re-Sincronizar Tópicos Recentes', 
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Você tem certeza que deseja re-sincronizar os tópicos recentes?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro, desmarca todos os tópicos e depois marca correctamente todos os tópicos que tiveram alguma actividade nos últimos seis meses.',	
	'RESYNC_STATS'					=> 'Re-Sincronizar Estatísticas', 
	'RESYNC_STATS_CONFIRM'			=> 'Você tem certeza que deseja re-sincronizar as estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcular os totais de números de mensagens, tópicos, utilizadores e Ficheiros.',
	'RUN'							=> 'Correr agora',

	'STATISTIC'					=> 'Estatísticas', 
	'STATISTIC_RESYNC_OPTIONS'	=> 'Re-Sincronizar ou reiniciar as estatísticas',

	'TOPICS_PER_DAY'	=> 'Tópicos / Dia', 

	'UPLOAD_DIR_SIZE'	=> 'Tamanho dos Anexos Enviados', 
	'USERS_PER_DAY'		=> 'utilizadores / Dia', 

	'VALUE'					=> 'Valor', 
	'VIEW_ADMIN_LOG'		=> 'Ver Log do Administrador', 
	'VIEW_INACTIVE_USERS'	=> 'Ver utilizadores Inactivos', 

	'WELCOME_PHPBB'			=> 'Bem-Vindo ao phpBB', 
)); 

// Inactive Users 
$lang = array_merge($lang, array( 
	'INACTIVE_DATE'					=> 'Data Inactiva', 
	'INACTIVE_REASON'				=> 'Razão', 
	'INACTIVE_REASON_MANUAL'		=> 'Registo Desactivado pelo Administrador', 
	'INACTIVE_REASON_PROFILE'		=> 'Detalhes do Perfil Alterados', 
	'INACTIVE_REASON_REGISTER'		=> 'Registos Recentes', 
	'INACTIVE_REASON_REMIND'		=> 'Forçar Reactivação de Registo do utilizador', 
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconhecido', 
	'INACTIVE_USERS'				=> 'Utilizadores Inactivos', 
	'INACTIVE_USERS_EXPLAIN'		=> 'Isto é uma lista de utilizadores que se registaram, mas seus registos estão inactivos. Você pode activar, excluir ou alertando (enviando um email) estes utilizadores se você desejar.', 
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Isto é uma lista dos 10 utilizadores recentemente registados que possuem os seus registos inactivos. Uma lista completa está disponível pelo item apropriado do Menu ou clicando no link abaixo/acima através de onde você pode activar, excluir ou alertar (enviando um email) estes utilizadores se você desejar.', 

	'NO_INACTIVE_USERS'	=> 'Sem utilizadores Inactivos', 

	'SORT_INACTIVE'		=> 'Data Inactiva', 
	'SORT_LAST_VISIT'	=> 'Última Visita', 
	'SORT_REASON'		=> 'Razão', 
	'SORT_REG_DATE'		=> 'Data de Registo', 

	'USER_IS_INACTIVE'		=> 'Utilizador está Inactivo', 
)); 

// Log Entries 
$lang = array_merge($lang, array( 
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Permissões de utilizadores a utilizadores Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Permissões de utilizadores a Grupos Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Permissões Globais a utilizadores Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Permissões Globais a Grupos Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Permissões Administrativas a utilizadores Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Permissões Administrativas a Grupos Adicionados ou Editados</strong><br />» %s', 

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Administradores Adicionados ou Editados</strong><br />» %s', 
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Moderadores Globais Adicionados ou Editados</strong><br />» %s', 

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Acessos do Forum a utilizadores Adicionados ou Editados</strong> from %1$s<br />» %2$s', 
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Acessos de Moderadores a utilizadores Adicionados ou Editados</strong> from %1$s<br />» %2$s', 
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Acessos do Forum a Grupos Adicionados ou Editados</strong> from %1$s<br />» %2$s', 
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Acessos de Moderadores a Grupos Adicionados ou Editados</strong> from %1$s<br />» %2$s', 

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderadores Adicionados ou Editados</strong> from %1$s<br />» %2$s', 
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Permissões de Secções Adicionadas ou Editadas</strong> from %1$s<br />» %2$s', 

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores Apagados</strong><br />» %s', 
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores Globais Apagados</strong><br />» %s', 
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores Apagados</strong> from %1$s<br />» %2$s', 
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Permissões de Secções a utilizadores/Grupos Apagados</strong> from %1$s<br />» %2$s', 

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissões Transferidas de</strong><br />» %s', 
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Próprias Permissões restauradas depois de utilizar as permissões de</strong><br />» %s', 

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentativas de Login Falhas</strong>', 
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Tentaticas de Login bem-sucedidas</strong>', 
	
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Remover anexos do Utilizador</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Extensão de Anexos Adicionada ou Editada</strong><br />» %s', 
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensão de Anexos Apagada</strong><br />» %s', 
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Extensão de Anexos Actualizadas</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Grupo de Extensões Adicionado</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Grupo de Extensões Editado</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Grupo de Extensões Apagado</strong><br />» %s', 
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Ficheiro Órfão anexo a Mensagem</strong><br />» ID %1$d - %2$s', 
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ficheiro Órfão Apagado</strong><br />» %s', 

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Utilizador Apagado por Banimento</strong> for reason "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Endereço de IP Apagado por Banimento</strong> for reason "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Endereço de Email Apagado por Banimento</strong> for reason "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_USER'			=> '<strong>Utilizador Expluso</strong> por "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_IP'			=> '<strong>Endereço de IP Banido</strong> por "<em>%1$s</em>"<br />» %2$s', 
	'LOG_BAN_EMAIL'			=> '<strong>Endereço de email Banido</strong> por "<em>%1$s</em>"<br />» %2$s', 
	'LOG_UNBAN_USER'		=> '<strong>utilizador Desbanido</strong><br />» %s', 
	'LOG_UNBAN_IP'			=> '<strong>Endereço de IP Desbanido</strong><br />» %s', 
	'LOG_UNBAN_EMAIL'		=> '<strong>Endereço de email Desbanido</strong><br />» %s', 

	'LOG_BBCODE_ADD'		=> '<strong>BBCode Adicionado</strong><br />» %s', 
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode Editado</strong><br />» %s', 
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode Apagado</strong><br />» %s', 

	'LOG_BOT_ADDED'		=> '<strong>BOT Adicionado</strong><br />» %s', 
	'LOG_BOT_DELETE'	=> '<strong>BOT Apagado</strong><br />» %s', 
	'LOG_BOT_UPDATED'	=> '<strong>BOT Actualizado</strong><br />» %s', 

	'LOG_CLEAR_ADMIN'		=> '<strong>Log Administrativo Limpo</strong>', 
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log de Erro Limpo</strong>', 
	'LOG_CLEAR_MOD'			=> '<strong>Log Moderação Limpo</strong>', 
	'LOG_CLEAR_USER'		=> '<strong>Log de Utilizador Limpo</strong><br />» %s', 
	'LOG_CLEAR_USERS'		=> '<strong>Log de Utilizadores Limpos</strong>', 

	'LOG_CONFIG_ATTACH'			=> '<strong>Configurações de Anexos Alteradas</strong>', 
	'LOG_CONFIG_AUTH'			=> '<strong>Configurações de Autentificação Alteradas</strong>', 
	'LOG_CONFIG_AVATAR'			=> '<strong>Configurações de Avatar Alteradas</strong>', 
	'LOG_CONFIG_COOKIE'			=> '<strong>Configurações de Cookie Alteradas</strong>', 
	'LOG_CONFIG_EMAIL'			=> '<strong>Configurações de emails Alteradas</strong>', 
	'LOG_CONFIG_FEATURES'		=> '<strong>Características do Forum Alteradas</strong>', 
	'LOG_CONFIG_LOAD'			=> '<strong>Configurações de Carga Alteradas</strong>', 
	'LOG_CONFIG_MESSAGE'		=> '<strong>Configurações de Mensagem Particular Alteradas</strong>', 
	'LOG_CONFIG_POST'			=> '<strong>Configurações de Mensagem Alteradas</strong>', 
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Configurações de Registo Alteradas</strong>', 
	'LOG_CONFIG_SEARCH'			=> '<strong>Configurações de Pesquisa Alteradas</strong>', 
	'LOG_CONFIG_SECURITY'		=> '<strong>Configurações de Segurança Alteradas</strong>', 
	'LOG_CONFIG_SERVER'			=> '<strong>Configurações do Servidor Alteradas</strong>', 
	'LOG_CONFIG_SETTINGS'		=> '<strong>Configurações do Forum Alteradas</strong>', 
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Configurações de Assinatura Alteradas</strong>', 
	'LOG_CONFIG_VISUAL'			=> '<strong>Configurações de Confirmação Visual Alteradas</strong>', 

	'LOG_APPROVE_TOPIC'			=> '<strong>Tópico Aprovado</strong><br />» %s', 
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s', 
	'LOG_DELETE_POST'			=> '<strong>Mensagem Apagada</strong><br />» %s', 
	'LOG_DELETE_TOPIC'			=> '<strong>Tópico Apagado</strong><br />» %s', 
	'LOG_FORK'					=> '<strong>Tópico Copiado</strong><br />» from %s', 
	'LOG_LOCK'					=> '<strong>Tópico Bloqueado</strong><br />» %s', 
	'LOG_LOCK_POST'				=> '<strong>Mensagem Bloqueada</strong><br />» %s', 
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s', 
	'LOG_MOVE'					=> '<strong>Tópico Movido</strong><br />» from %s', 
	'LOG_POST_APPROVED'			=> '<strong>Mensagem Aprovada</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensagem Desaprovada “%1$s” pelo seguinte motivo</strong><br />%2$s',
	'LOG_POST_EDITED'			=> '<strong>Mensagem Editada “%1$s” por “%3$s”</strong><br />» Link para a mensagem: %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Denúncia Bloqueada</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Denúncia Apagada</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Tópico Subdividido</strong><br />» to %s', 
	'LOG_SPLIT_SOURCE'			=> '<strong>Mensagens Subdivididas</strong><br />» from %s', 

	'LOG_TOPIC_DELETED'			=> '<strong>Tópico Apagado</strong><br />» %s', 
	'LOG_TOPIC_APPROVED'		=> '<strong>Tópido Aprovado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tópico Desaprovado “%1$s” pelo seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Contadores de Tópico Re-Sincronizado</strong><br />» %s', 
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tipo de Tópico Alterado</strong><br />» %s', 
	'LOG_UNLOCK'				=> '<strong>Tópico Desbloqueado</strong><br />» %s', 
	'LOG_UNLOCK_POST'			=> '<strong>Mensagem Desbloqueada</strong><br />» %s', 

	'LOG_DISALLOW_ADD'		=> '<strong>Nome Proibido Adicionado</strong><br />» %s', 
	'LOG_DISALLOW_DELETE'	=> '<strong>Nome Proibido Apagado</strong>', 

	'LOG_DB_BACKUP'			=> '<strong>Copiar Base de Dados</strong>', 
	'LOG_DB_DELETE'			=> '<strong>Backup da Base de Dados Apagado</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restaurar Base de Dados</strong>', 

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Endereço de IP/hostname apagado da Lista de Download</strong><br />» %s', 
	'LOG_DOWNLOAD_IP'			=> '<strong>Endereço de IP/hostname adicionado à Lista de Download</strong><br />» %s', 
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Endereço de IP/hostname apagado da Lista de Download</strong><br />» %s', 

	'LOG_ERROR_JABBER'		=> '<strong>Erro de Jabber</strong><br />» %s', 
	'LOG_ERROR_EMAIL'		=> '<strong>Erro no email</strong><br />» %s', 

	'LOG_FORUM_ADD'							=> '<strong>Criar uma nova Secção</strong><br />» %s', 
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Secção Apagada</strong><br />» %s', 
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Secção e SubSecções Apagadas</strong><br />» %s', 
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Secção Apagada e SubSecções Movidas</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Secção Apagada e Mensagens Movidas</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Secção e SubSecções Apagadas, Mensagens Movidas</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Secção Apagada, Mensagens Movidas</strong> para %1$s <strong>e subforuns</strong> para %2$s<br />» %3$s', 
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Secção e Mensagens Apagadas</strong><br />» %s', 
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Secção, SubSecções e Mensagens Apagadas</strong><br />» %s', 
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Secções e Mensagens Apagadas, SubSecções Movidas</strong> to %1$s<br />» %2$s', 
	'LOG_FORUM_EDIT'						=> '<strong>Detalhes da Secção Editadas</strong><br />» %s', 
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Secção Movida</strong> %1$s <strong>abaixo/acima</strong> %2$s', 
	'LOG_FORUM_MOVE_UP'						=> '<strong>Secção Movida</strong> %1$s <strong>acima/abaixo</strong> %2$s', 
	'LOG_FORUM_SYNC'						=> '<strong>Secção Re-Sincronizada</strong><br />» %s', 

	'LOG_GROUP_CREATED'		=> '<strong>Novo Grupo Criado</strong><br />» %s', 
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo Padrão para Membros</strong><br />» %s', 
	'LOG_GROUP_DELETE'		=> '<strong>Grupo Apagado</strong><br />» %s', 
	'LOG_GROUP_DEMOTED'		=> '<strong>Líderes Demitidos do Grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros Promovidos a Líderes do Grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_REMOVE'		=> '<strong>Membros Apagados do Grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_UPDATED'		=> '<strong>Detalhes do Grupo Actualizados</strong><br />» %s', 
	'LOG_MODS_ADDED'		=> '<strong>Novos Líderes Adicionados ao Grupo</strong> %1$s<br />» %2$s', 
	'LOG_USERS_APPROVED'	=> '<strong>Membros Aprovados ao Grupo</strong> %1$s<br />» %2$s', 
	'LOG_USERS_ADDED'		=> '<strong>Novos Membros Adicionados ao Grupo</strong> %1$s<br />» %2$s', 

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Novas Imagens Adicionadas a Base de Dados</strong><br />» %s', 
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Adicionar novas Imagens no Sistema</strong><br />» %s', 
	'LOG_IMAGESET_DELETE'			=> '<strong>Imagens Apagadas</strong><br />» %s', 
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Detalhes da Imagem Editados</strong><br />» %s', 
	'LOG_IMAGESET_EDIT'				=> '<strong>Imagem Editada</strong><br />» %s', 
	'LOG_IMAGESET_EXPORT'			=> '<strong>Imagem Exportada</strong><br />» %s', 
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Erro na localizaçãdo do Pacote de Imagens</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Actualizado a localização do set de imagens “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Imagem Actualizada</strong><br />» %s', 

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Utilizadores Inactivos Activados</strong><br />» %s', 
	'LOG_INACTIVE_DELETE'	=> '<strong>Utilizadores Inactivos Apagados</strong><br />» %s', 
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviar emails de alerta a utilizadores Inactivos</strong><br />» %s', 
	'LOG_INSTALL_CONVERTED'	=> '<strong>Actualizado de %1$s para o phpBB %2$s</strong>', 
	'LOG_INSTALL_INSTALLED'	=> '<strong>Versão do phpBB instalada %s</strong>', 

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Secção de IP/navegador/X_FORWARDED_FOR check failed</strong><br />»User IP "<em>%1$s</em>" checked against session IP "<em>%2$s</em>", user browser string "<em>%3$s</em>" checked against session browser string "<em>%4$s</em>" and user X_FORWARDED_FOR string "<em>%5$s</em>" checked against session X_FORWARDED_FOR string "<em>%6$s</em>".', 

	'LOG_JAB_CHANGED'			=> '<strong>Registo de Jabber Alterado</strong>', 
	'LOG_JAB_PASSCHG'			=> '<strong>Senha de Jabber Alterada</strong>', 
	'LOG_JAB_REGISTER'			=> '<strong>Jabber Registado</strong>', 
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Configurações de Jabber alteradas</strong>', 

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Pacotes de Línguas Apagados</strong><br />» %s', 
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Pacotes de Línguas Instalados</strong><br />» %s', 
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Detalhes do Pacote de Línguas Actualizados</strong><br />» %s', 
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Ficheiros de Linguagem substituidos</strong><br />» %s', 
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Ficheiro de Linguagem enviado e armazenado na pasta store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Enviar Email em Massa</strong><br />» %s', 

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Autor alterado no Tópico "%1$s"</strong><br />» from %2$s to %3$s', 

	'LOG_MODULE_DISABLE'	=> '<strong>Módulo Desactivado</strong>', 
	'LOG_MODULE_ENABLE'		=> '<strong>Módulo Activado</strong>', 
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Módulo Movido - Baixo</strong><br />» %s', 
	'LOG_MODULE_MOVE_UP'	=> '<strong>Módulo Movido - Cima</strong><br />» %s', 
	'LOG_MODULE_REMOVED'	=> '<strong>Módulo Apagado</strong><br />» %s', 
	'LOG_MODULE_ADD'		=> '<strong>Módulo Adicionado</strong><br />» %s', 
	'LOG_MODULE_EDIT'		=> '<strong>Módulo Editado</strong><br />» %s', 

	'LOG_A_ROLE_ADD'		=> '<strong>Tarefa Administrativa Adicionada</strong><br />» %s', 
	'LOG_A_ROLE_EDIT'		=> '<strong>Tarefa Administrativa Editada</strong><br />» %s', 
	'LOG_A_ROLE_REMOVED'	=> '<strong>Tarefa Administrativa Apagada</strong><br />» %s', 
	'LOG_F_ROLE_ADD'		=> '<strong>Tarefa do Forum Adicionada</strong><br />» %s', 
	'LOG_F_ROLE_EDIT'		=> '<strong>Tarefa do Forum Editada</strong><br />» %s', 
	'LOG_F_ROLE_REMOVED'	=> '<strong>Tarefa do Forum Apagada</strong><br />» %s', 
	'LOG_M_ROLE_ADD'		=> '<strong>Tarefa Moderativa Adicionada</strong><br />» %s', 
	'LOG_M_ROLE_EDIT'		=> '<strong>Tarefa Moderativa Editada</strong><br />» %s', 
	'LOG_M_ROLE_REMOVED'	=> '<strong>Tarefa Moderativa Apagada</strong><br />» %s', 
	'LOG_U_ROLE_ADD'		=> '<strong>Tarefa do utilizador Adicionada</strong><br />» %s', 
	'LOG_U_ROLE_EDIT'		=> '<strong>Tarefa do utilizador Editada</strong><br />» %s', 
	'LOG_U_ROLE_REMOVED'	=> '<strong>Tarefa do utilizador Apagada</strong><br />» %s', 

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Campo do Perfil Activado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Campo do Perfil Adicionado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Campo do Perfil Desactivado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Campo do Perfil Editado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Campo do Perfil Apagado</strong><br />» %s', 

	'LOG_PRUNE'					=> '<strong>Secções Limpas</strong><br />» %s', 
	'LOG_AUTO_PRUNE'			=> '<strong>Secções Automaticamente Limpas</strong><br />» %s', 
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Utilizadores Desactivados</strong><br />» %s', 
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Utilizadores Limpos e Mensagens Apagadas</strong><br />» %s', 
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Utilizadores Limpos e Mensagens Guardadas</strong><br />» %s', 

	'LOG_PURGE_CACHE'			=> '<strong>Cache Depurado</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Rank Adicionado</strong><br />» %s', 
	'LOG_RANK_REMOVED'		=> '<strong>Rank Apagado</strong><br />» %s', 
	'LOG_RANK_UPDATED'		=> '<strong>Rank Actualizado</strong><br />» %s', 

	'LOG_REASON_ADDED'		=> '<strong>Razão de Denúncia/Negação Adicionada</strong><br />» %s', 
	'LOG_REASON_REMOVED'	=> '<strong>Razão de Denúncia/Negação Apagada</strong><br />» %s', 
	'LOG_REASON_UPDATED'	=> '<strong>Razão de Denúncia/Negação Actualizada</strong><br />» %s', 

    'LOG_REFERER_INVALID'       => '<strong>Validacao da Referencia Invalida</strong><br />�Referencia e �<em>%1$s</em>�. O pedido foi recusado e a secção terminada.',
	'LOG_RESET_DATE'			=> '<strong>Reiniciar Início do Forum</strong>', 
	'LOG_RESET_ONLINE'			=> '<strong>Reiniciar Utilizadores Mais Activos</strong>', 
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contagem de Mensagens Re-Sincronizadas</strong>', 
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Tópicos Pontilhados Re-Sincronizados</strong>', 
	'LOG_RESYNC_STATS'			=> '<strong>Estatísticas de Utilizadores, Tópicos e Mensagens Re-Sincronizadas</strong>', 

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Índice de busca criado por</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Índice de busca excluido por</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Template Adicionada</strong><br />» %s', 
	'LOG_STYLE_DELETE'			=> '<strong>Template Apagada</strong><br />» %s', 
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Template Editada</strong><br />» %s', 
	'LOG_STYLE_EXPORT'			=> '<strong>Template Exportada</strong><br />» %s', 

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Nova Template Adicionada na Base de Dados</strong><br />» %s', 
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Adiccionar nova Template no Sistema</strong><br />» %s', 
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Versões do cache dos ficheiros da template Apagados <em>%1$s</em></strong><br />» %2$s', 
	'LOG_TEMPLATE_DELETE'			=> '<strong>Template Apagada</strong><br />» %s', 
	'LOG_TEMPLATE_EDIT'				=> '<strong>Template Editada <em>%1$s</em></strong><br />» %2$s', 
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Detalhes da Template Editados</strong><br />» %s', 
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Template Exportada</strong><br />» %s', 
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Template Actualizada</strong><br />» %s', 

	'LOG_THEME_ADD_DB'			=> '<strong>Novo Tema adicionado a Base de Dados</strong><br />» %s', 
	'LOG_THEME_ADD_FS'			=> '<strong>Novo Tema adicionado no Sistema</strong><br />» %s', 
	'LOG_THEME_DELETE'			=> '<strong>Tema Apagado</strong><br />» %s', 
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detalhes do Tema Editados</strong><br />» %s', 
	'LOG_THEME_EDIT'			=> '<strong>Tema Editado <em>%1$s</em></strong><br />» Categoria Editada <em>%2$s</em>', 
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema Editado <em>%1$s</em></strong><br />» Ficheiro Modificado <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema Exportado</strong><br />» %s', 
	'LOG_THEME_REFRESHED'		=> '<strong>Tema Actualizado</strong><br />» %s', 

	'LOG_UPDATE_DATABASE'	=> '<strong>A Base de Dados foi actualizada da Versão %1$s para a Versão %2$s</strong>', 
	'LOG_UPDATE_PHPBB'		=> '<strong>O phpBB foi actualizado da Versão %1$s para a Versão %2$s</strong>', 

	'LOG_USER_ACTIVE'		=> '<strong>Utilizador Activado</strong><br />» %s', 
	'LOG_USER_BAN_USER'		=> '<strong>Utilizador Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_BAN_IP'		=> '<strong>Endereço de IP Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_BAN_EMAIL'	=> '<strong>Endereço de email Banido pela Adminstração de Utilizadores</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_DELETED'		=> '<strong>Utilizador Apagado</strong><br />» %s', 
	'LOG_USER_DEL_ATTACH'	=> '<strong>Todos os Anexos do Utilizador Apagados</strong><br />» %s', 
	'LOG_USER_DEL_AVATAR'	=> '<strong>Avatar do Utilizador Apagado</strong><br />» %s', 
	'LOG_USER_DEL_POSTS'	=> '<strong>Todas as Mensagens do Utilizador Apagadas</strong><br />» %s', 
	'LOG_USER_DEL_SIG'		=> '<strong>Assinatura do Utilizador Apagada</strong><br />» %s', 
	'LOG_USER_INACTIVE'		=> '<strong>Utilizador Desactivado</strong><br />» %s', 
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mensagens do Utilizador Movidas</strong><br />» posts by "%1$s" to forum "%2$s"', 
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Senha do Utilizador Alterada</strong><br />» %s', 
	'LOG_USER_REACTIVATE'	=> '<strong>Reactivação de Registo do Utilizador Forçada</strong><br />» %s', 
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Endereço de email do Utilizador "%1$s" alterado</strong><br />» from "%2$s" to "%3$s"', 
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de Utilizador Alterado</strong><br />» from "%1$s" to "%2$s"', 
	'LOG_USER_USER_UPDATE'	=> '<strong>Detalhes do Utilizador Actualizados</strong><br />» %s', 

	'LOG_USER_ACTIVE_USER'		=> '<strong>Registo de Utilizador Activado</strong>', 
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar do Utilizador Apagado</strong>', 
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Assinatura do Utilizador Apagada</strong>', 
	'LOG_USER_FEEDBACK'			=> '<strong>utilizador adicionado ao Feedback</strong><br />» %s', 
	'LOG_USER_GENERAL'			=> '%s', 
	'LOG_USER_INACTIVE_USER'	=> '<strong>Registo do Utilizador Reactivado</strong>', 
	'LOG_USER_LOCK'				=> '<strong>Tópicos Bloqueados pelo próprio utilizador</strong><br />» %s', 
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Todas as Mensagens Movidas à Secção "%s"</strong>', 
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Reactivação de Registo Forçada</strong>', 
	'LOG_USER_UNLOCK'			=> '<strong>Tópicos Desbloqueados pelo próprio utilizador</strong><br />» %s', 
	'LOG_USER_WARNING'			=> '<strong>Advertência Adicionada</strong><br />» %s', 
	'LOG_USER_WARNING_BODY'		=> '<strong>A Advertência seguinte foi dada a este utilizador</strong><br />» %s', 

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Grupo Padrão Editado</strong><br />» %s', 
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Utilizadores Demitidos como Líderes no Grupo</strong><br />» %s', 
	'LOG_USER_GROUP_JOIN'			=> '<strong>Inscrição do utilizador no Grupo</strong><br />» %s', 
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>O utilizador se Inscreveu no Grupo e precisa ser Aprovado</strong><br />» %s', 
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Utilizador resignado do Grupo</strong><br />» %s', 

	'LOG_WORD_ADD'			=> '<strong>Palavra Censurada Adicionada</strong><br />» %s', 
	'LOG_WORD_DELETE'		=> '<strong>Palavra Censurada Apagada</strong><br />» %s', 
	'LOG_WORD_EDIT'			=> '<strong>Palavra Censurada Editada</strong><br />» %s', 
)); 

?>