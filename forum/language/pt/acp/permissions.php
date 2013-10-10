<?php 
/** 
* 
* acp_permissions [Portuguese] 
* 
* @package language 
* @version $Id: permissions.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> ' 
		<p>As Permissões do phpBB3 são bastante abrangentes e agrupadas em quatro grandes grupos, que são:</p> 

		<h2>Permissões Globais</h2> 
		<p>Aqui você pode controlar o acesso em um nível global e aplicar ao forum inteiro. Elas são ainda divididas em Permissões de Utilizadores, Permissões de Grupos, Administradores e Moderadores Globais.</p>

		<h2>Permissões Básicas do Forum</h2> 
		<p>Aqui você pode controlar o acesso por bases do forum. Elas ainda so dividias em Permissões de Seções, Moderadores de Seções, Permissões de Utilizadores em Seções e Permissões de Grupos em Seções.</p>

		<h2>Tarefas de Permissão</h2>
		<p>Aqui você pode criar diferentes termos de permissão para os diversos tipos de permissões existentes. As configurações padrão devem ser a administração do quadro de noticias largo e pequeno, entretanto com uma das quatro divisões, você pode adicionar/editar/eliminar configurações como você as vê aptas.</p>

		<h2>Mascara de Permissão</h2>
		<p>Aqui você pode visualizar as permissões efetivas atribuidas a Utilizadores, Moderadores (Locais e Globais), Administradores ou Seções.</p>
	 
		<br /> 

		<p>Para maiores informações sobre as suas configurações e o gerenciamento de permissões no phpBB3, por favor, veja o <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capítulo 1.5 do Guia de Inicialização Rápida</a>.</p> 
	', 

	'ACL_NEVER'				=> 'Nunca', 
	'ACL_SET'				=> 'Permissões Configuradas', 
	'ACL_SET_EXPLAIN'		=> 'Permissões são baseadas em um simples sistema de <samp>SIM</samp>/<samp>NÃO</samp>. Configurando qualquer opção em <samp>Nunca</samp> para um Utilizador ou Grupo irá substituir qualquer valor atribuido aos mesmos. Se você não deseja atribuir um valor de qualquer opção para este Utilizador ou Grupo, selecione <samp>NÃO</samp>. Se valores são atribuidos para esta opção elsewhere they will be used in preference, else <samp>Nunca</samp> é assumido. Todos os objetos marcados (com a caixa de confirmação em frente a eles) irão copiar as permissões que você definiu.',
	'ACL_SETTING'			=> 'Configuração', 

	'ACL_TYPE_A_'			=> 'Permissões Administrativas', 
	'ACL_TYPE_F_'			=> 'Permissões de Secções', 
	'ACL_TYPE_M_'			=> 'Permissões Moderativas', 
	'ACL_TYPE_U_'			=> 'Permissões de Utilizador',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissões Administrativas', 
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissões de Utilizador',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissões de Moderadores Globais', 
	'ACL_TYPE_LOCAL_M_'		=> 'Permissões de Moderadores de Secções', 
	'ACL_TYPE_LOCAL_F_'		=> 'Permissões de Secções', 
	 
	'ACL_NO'				=> 'Não', 
	'ACL_VIEW'				=> 'Vendo as Permissões', 
	'ACL_VIEW_EXPLAIN'		=> 'Aqui você pode ver as permissões efetivas que os Utilizadores/Grupos estão possuindo. Um quadrado vermelho indica que o Utilizador/Grupo não possui a permissão, um quadrado verde indica que o Utilizador/Grupo possui a permissão.',
	'ACL_YES'				=> 'Sim', 

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqui pode determinar permissões administrativas para Utilizadores e Grupos. Todos os Utilizadores com permissões administrativas podem entrar no Painel de Administração.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqui pode determinar Utilizadores e Grupos como Moderadores do Forum. Para determinar permissões de Utilizador, para definir permissões de moderadores globais ou administradores, por favor, use a página apropriada.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqui pode alterar que Utilizadores e Grupos poderão aceder a cada Secção. Para determinar Moderadores ou Administradores, por favor, use a página apropriada.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqui pode determinar permissões de moderadores globais para Utilizadores e Grupos. Estes Moderadores são como moderadores usuais, exceto se eles tiverem acesso a todas as seções do forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui pode determinar permissões de Seções para Grupos.', 
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqui pode determinar permissões globais para Grupos - permissões de Utilizadores, permissões globais e permissões administrativas. As Permissões de Utilizadores incluem capacidades de uso de avatares, envio de mensagens particulares e etc; Permissões Globais como a aprovação de mensagens, gerenciamento de tópicos, gerenciamento de explusões etc; Por último, as Permissões Administrativas como a alteração de permissões, definição de BBCodes, gerenciamento de seções e etc. Permissões de Utilizadores individuais devem apenas ser alteradas em ocasiões raras, e o método mais apropriado é adicionando Utilizadores em grupos alterando as permissões destes grupos.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqui pode adminstrar as tarefas para permissões administrativas. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuidos a mesma terão suas permissões alteradas também.', 
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqui pode adminstrar as tarefas para permissões das seções. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuidos a mesma terão suas permissões alteradas também.', 
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqui pode adminstrar as tarefas para permissões moderativas. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuidos a mesma terão suas permissões alteradas também.', 
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqui pode adminstrar as tarefas para permissões de Utilizadores. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuidos a mesma terão suas permissões alteradas também.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui pode determinar permissões de Seções para Utilizadores.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqui pode determinar permissões globais para Utilizadores - As Permissões de Utilizadores incluem capacidades de uso de avatares, envio de mensagens particulares e etc; Permissões Globais como a aprovação de mensagens, gerenciamento de tópicos, gerenciamento de Explusões etc; Por último, as Permissões Administrativas como a alteração de permissões, definição de BBCodes, gerenciamento de seções e etc. Para alterar estas configurações para um grande número de Utilizadores, o sistema de permissões de grupos é o método mais aconselhável. Permissões de Utilizadores individuais devem apenas ser alteradas em ocasiões raras, e o método mais apropriado é adicionando Utilizadores em grupos alterando as permissões destes grupos.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aqui pode ver as permissões administrativas efetivas determinadas aos Utilizadores/Grupos selecionados.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui pode ver as permissões globais determinadas aos Utilizadores/Grupos selecionados.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui pode ver as permissões de seções determinadas aos Utilizadores/Grupos e Seções selecionadas.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui pode ver as permissões de moderador de seções determinadas aos Utilizadores/Grupos e Seções selecionadas.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aqui pode ver as permissões de Utilizadores efetivas determinadas aos Utilizadores/Grupos selecionados.',

	'ADD_GROUPS'				=> 'Adiccionar Grupos', 
	'ADD_PERMISSIONS'			=> 'Adiccionar Permissões', 
	'ADD_USERS'					=> 'Adiccionar Utilizadores',
	'ADVANCED_PERMISSIONS'		=> 'Permissões Avançadas', 
	'ALL_GROUPS'				=> 'Seleccionar Todos os Grupos', 
	'ALL_NEVER'					=> 'Tudo <samp>Nunca</samp>', 
	'ALL_NO'					=> 'Tudo <samp>Não</samp>', 
	'ALL_USERS'					=> 'Selecionar Todos os Utilizadores',
	'ALL_YES'					=> 'Tudo <samp>Sim</samp>', 
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar Todas as Permissões', 
	'APPLY_PERMISSIONS'			=> 'Aplicar Permissões', 
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'As permissões e tarefas definidas para este item serão apenas aplicadas a este item e todos os itens marcados.', 
	'AUTH_UPDATED'				=> 'As Permissões foram actualizadas com sucesso.', 

	'CREATE_ROLE'				=> 'Criar Tarefa', 
	'CREATE_ROLE_FROM'			=> 'Usar Configurações de', 
	'CUSTOM'					=> 'Customâ€¦', 

	'DEFAULT'					=> 'Padrão', 
	'DELETE_ROLE'				=> 'Eliminar Tarefa', 
	'DELETE_ROLE_CONFIRM'		=> 'Você deseja realmente Eliminar esta tarefa? Itens atribuidos a esta tarefa <strong>não</strong> perderão a sua configuração de permissões.', 
	'DISPLAY_ROLE_ITEMS'		=> 'Ver Itens utilizando este Tarefa', 

	'EDIT_PERMISSIONS'			=> 'Editar Permissões', 
	'EDIT_ROLE'					=> 'Editar Tarefa', 

	'GROUPS_NOT_ASSIGNED'		=> 'Nenhum Grupo atribuido a esta tarefa', 

	'LOOK_UP_GROUP'				=> 'Encontrar um Grupo', 
	'LOOK_UP_USER'				=> 'Encontrar um Utilizador',

	'MANAGE_GROUPS'		=> 'Adminstrar Grupos', 
	'MANAGE_USERS'		=> 'Adminstrar Utilizadores',

	'NO_AUTH_SETTING_FOUND'		=> 'A Configuração de Permissões não foi definida.', 
	'NO_ROLE_ASSIGNED'			=> 'Sem Tarefas atribuidas', 
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'A Configuração para esta tarefa não alterou as permissões na direita. Se você deseja unset/eliminar todas as permissões você deve utilizar o link â€œTodos <samp>NÃO</samp>.', 
	'NO_ROLE_AVAILABLE'			=> 'Sem Tarefas Disponíveis', 
	'NO_ROLE_NAME_SPECIFIED'	=> 'O Nome da Tarefa deve ser escrito.', 
	'NO_ROLE_SELECTED'			=> 'A Tarefa não p�de ser encontrada.', 
	'NO_USER_GROUP_SELECTED'	=> 'Você não selecionou nenhum Utilizador ou Grupo.',

	'ONLY_FORUM_DEFINED'	=> 'Você apenas definiu seções em sua seleção. Por Favor, também selecione pelo menos um Utilizador ou um Grupo.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'As Tarefas e Permissões também serão aplicadas a todos os objetos selecionados', 
	'PLUS_SUBFORUMS'				=> '+ SubSeções', 

	'REMOVE_PERMISSIONS'			=> 'Eliminar Permissões', 
	'REMOVE_ROLE'					=> 'Eliminar Tarefa', 
	'ROLE'							=> 'Tarefa',
	'RESULTING_PERMISSION'			=> 'Resultando das permiss�es', 
	'ROLE_ADD_SUCCESS'				=> 'A Tarefa foi adicionada com sucesso.', 
	'ROLE_ASSIGNED_TO'				=> 'Os Utilizadores/Grupos foram atribuidos a %s',
	'ROLE_DELETED'					=> 'A Tarefa foi excluída com sucesso.', 
	'ROLE_DESCRIPTION'				=> 'Descrição da Tarefa', 

	'ROLE_ADMIN_FORUM'			=> 'Administração de Seções', 
	'ROLE_ADMIN_FULL'			=> 'Administração Completa', 
	'ROLE_ADMIN_STANDARD'		=> 'Administração Padrão', 
	'ROLE_ADMIN_USERGROUP'		=> 'Administração de Utilizadores e Grupos',
	'ROLE_FORUM_BOT'			=> 'Acesso de BOT', 
	'ROLE_FORUM_FULL'			=> 'Acesso Completo', 
	'ROLE_FORUM_LIMITED'		=> 'Acesso Limitado', 
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acesso Limitado + Enquetes', 
	'ROLE_FORUM_NOACCESS'		=> 'Sem Acesso', 
	'ROLE_FORUM_ONQUEUE'		=> 'Na Fila de Moderação', 
	'ROLE_FORUM_POLLS'			=> 'Acesso + Enquetes Padrão', 
	'ROLE_FORUM_READONLY'		=> 'Acesso de Leitura Apenas', 
	'ROLE_FORUM_STANDARD'		=> 'Acesso Padrão', 
	'ROLE_MOD_FULL'				=> 'Moderador Completo', 
	'ROLE_MOD_QUEUE'			=> 'Moderador da Fila', 
	'ROLE_MOD_SIMPLE'			=> 'Moderador Simples', 
	'ROLE_MOD_STANDARD'			=> 'Moderador Padrão', 
	'ROLE_USER_FULL'			=> 'Todas as Permissões', 
	'ROLE_USER_LIMITED'			=> 'Permissões Limitadas', 
	'ROLE_USER_NOAVATAR'		=> 'Sem Avatar', 
	'ROLE_USER_NOPM'			=> 'Sem Mensagens Particulares', 
	'ROLE_USER_STANDARD'		=> 'Permissões Padrão', 

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pode acessar as Configurações de Gerenciamento e Permissões de Seções.', 
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ter acesso a Todas as Funções Administrativas neste Forum.<br />Não recomendado.', 
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ter acesso de maior parte das Funções Administrativas, mas não está autorizado a utilizar ferramentas relacionadas ao Servidor ou ao Sistema.', 
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Pode Adminstrar Grupos e Utilizadores: Pode alterar permissões, configurações, Adminstrar Explusões e ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Esta Tarefa é recomendada para BOTs e Aranhas de Pesquisa.', 
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode utilizar todas as Funções da Secção, incluindo o envio de Anúncios e Tópicos Fixos. Pode também ignorar o limite de flood.<br />Não recomendado para Utilizadores Normais.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode utilizar algumas Funções da Secção, mas não Anexar Arquivos ou utilizar Ícones de Mensagens.', 
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Como o Acesso Limitado, mas pode também Criar Enquetes.', 
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Não Pode Ver e nem Acessar o Forum.', 
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode utilizar a maior parte das Funções da Secção, incluindo os Anexos, mas tópicos e mensagens precisam ser aprovadas por um Moderador.', 
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Como o Acesso Padrão, mas pode Criar Enquetes.', 
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode Ler o Forum, mas não pode Criar Novos Tópicos ou Responder Mensagens.', 
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode utilizar a maior parte das Funções da Secção, incluindo os Anexos, mas não pode Trancar ou Eliminar os próprios tópicos, e não pode Criar Enquetes.', 
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode utilizar todas as Funções Moderativas, incluindo as explusões.', 
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode utilizar a Fila de Moderação para validar e Editar Mensagens, mas nada mais.', 
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode utilizar apenas opções básicas de tópicos. Não pode Enviar Advertências ou utilizar a Fila de Moderação.', 
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode utilizar a maior parte das Ferramentas Moderativas, mas não pode Banir Utilizadores ou alterar o Autor da Mensagem.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode utilizar todas as Funções do Forum disponíveis para Utilizadores, incluindo a alteração do Nome de Utilizador ou ignorando o Limite de Flood.<br />Não recomendado.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode acessar algumas da Funções dos Utilizadores. Anexos, emails, ou Mensagens Urgentes não são permitidas.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ter Funções Limitadas e não está permitido a utilizar Avatares.', 
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ter Funções Limitadas e não está permitido a utilizar Mensagens Particulares.', 
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode acessar a maior parte das Funções, mas não todas as Ferramentas de Utilizador. Não pode alterar o Nome de Utilizador ou ignorar o limite de flood, por exemplo.',
	 
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Você pode escrever uma pequena explicação sobre o quê a tarefa está realizando ou sobre qual o objetivo da mesma. O Texto escrito aqui será exibido com as telas de permissão também.', 
	'ROLE_DESCRIPTION_LONG'			=> 'A Descricção da Tarefa é muito grande. Por Favor, limite seu texto a 4000 caracteres.', 
	'ROLE_DETAILS'					=> 'Detalhes da Tarefa', 
	'ROLE_EDIT_SUCCESS'				=> 'A Tarefa foi editada com sucesso.', 
	'ROLE_NAME'						=> 'Nome da Tarefa', 
	'ROLE_NAME_ALREADY_EXIST'		=> 'Uma tarefa nomeada <strong>%s</strong> já existe para o Tipo de Permissão especificado.', 
	'ROLE_NOT_ASSIGNED'				=> 'A Tarefa ainda não foi atribuida.', 

	'SELECTED_FORUM_NOT_EXIST'		=> 'As Seções selecionadas não existem.', 
	'SELECTED_GROUP_NOT_EXIST'		=> 'Os Grupos selecionados não existem.', 
	'SELECTED_USER_NOT_EXIST'		=> 'Os Utilizadores selecionados não existem.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'A Secção selecionada aqui irá incluir todas as suas subSeções nesta seleção.', 
	'SELECT_ROLE'					=> 'Selecionar Tarefa', 
	'SELECT_TYPE'					=> 'Selecionar Tipo', 
	'SET_PERMISSIONS'				=> 'Dar Permissões', 
	'SET_ROLE_PERMISSIONS'			=> 'Dar Permissões da Tarefa', 
	'SET_USERS_PERMISSIONS'			=> 'Dar Permissões dos Utilizadores',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Dar Permissões das Seções', 

	'TRACE_DEFAULT'					=> 'Por Padrão, todas as opções estão assinaladas como <samp>NÃO</samp> (unset). Então, a permissão pode ser substituida por outras configurações.', 
	'TRACE_FOR'						=> 'Copiar para', 
	'TRACE_GLOBAL_SETTING'			=> '%s (global)', 
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'A Permissão do Grupo está assinalada como <samp>NUNCA</samp> como o resultado total, então o resultado antigo foi salvo.', 
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'As permiss�es dos grupos para este f�rum esta assinalada como <samp>NUNCA</samp> como o resultado total para que o resultado antigo seja mantido.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'As permiss�es dos grupos está assinalada como  <samp>NUNCA</samp> tornar-se o novo valor total porque ainda não estava definido (assinale <samp>NÃO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'A Permissão do Grupo está assinalada como <samp>NUNCA</samp> que torna-se o novo valor total porque ainda não estava assinalado (assinale <samp>NÃO</samp>).', 
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'A Permissão do Grupo está assinalada como <samp>NUNCA</samp> que substitui o total <samp>SIM</samp> para um <samp>NUNCA</samp> para este utilizador.',
	'TRACE_GROUP_NO'				=> 'A Permissão está assinalada como <samp>NÃO</samp> para este Grupo, o antigo valor total foi salvo.', 
	'TRACE_GROUP_NO_LOCAL'			=> 'A Permissão está assinalada como <samp>NÃO</samp> para o grupo deste f�rum, com isto o velho permanece.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> mas o total <samp>NUNCA</samp> não pode ser substituido.', 
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> mas o total <samp>NUNCA</samp> não pode ser substituido.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> que torna-se o novo valor total porque ainda não estava assinalado (assinale <samp>NÃO</samp>).', 
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> que se torna um novo valor total pois ainda não estava definito (assinale <samp>NÃO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> e a permissão total já está assinalada como <samp>SIM</samp>, então o resultado total foi salvo.', 
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'A Permissão do Grupo está assinalada como <samp>SIM</samp> e a permiss�o total já está definida como <samp>SIM</samp>, logo o resultado total � mantido.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'As permiss�es dos grupos está assinalada como <samp>NUNCA</samp> substituir o total <samp>SIM</samp> de <samp>NUNCA</samp> para este utilizador.',
	'TRACE_PERMISSION'				=> 'Permissão de Cópia - %s',
	'TRACE_RESULT'					=> 'Indicar resultado', 
	'TRACE_SETTING'					=> 'Configuração de Cópia', 

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A Permissão de Utilizador independente da Secção está avaliada como <samp>SIM</samp> mas a permissão total já está assinalada como <samp>SIM</samp>, então o resultado total é salvo. %sCópia da Permissão Global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A Permissão de Utilizador independente da Secção está avaliada como <samp>SIM</samp> que substitui o resultado local atual <samp>NUNCA</samp>. %sCópia da Permissão Global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A Permissão de Utilizador independente da Secção está avaliada como <samp>NUNCA</samp> que não influencia na permissão local. %sCópia da Permissão Global%s',
	'TRACE_USER_FOUNDER'					=> 'O Utilizador possui as Permissões founder assinaladas, por isso as Permissões Administrativas estão assinaladas como <samp>SIM</samp> por padrão.',
	'TRACE_USER_KEPT'						=> 'A Permissão do Utilizador é <samp>NÃO</samp>, então o antigo valor total foi salvo.',
	'TRACE_USER_KEPT_LOCAL'					=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> e o valor total está assinalado como <samp>NUNCA</samp>, ent�o nada � alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> e o valor total está assinalado como <samp>NUNCA</samp>, então nada é alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> e o valor total está assinalado como <samp>NUNCA</samp> e substitui o sim previo.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> que torna-se o valor total porque estava assinalado como <samp>NÃO</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> mas o total <samp>NUNCA</samp> não pode ser substituido.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> e substitui o <samp>SIM</samp> prévio.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <samp>NUNCA</samp> e substitui o <samp>SIM</samp> prévio',
	'TRACE_USER_NO_TOTAL_NO'				=> 'A Permissão do Utilizador é <samp>NÃO</samp> e o valor total estava assinalado como <samp>NÃO</samp>, então é padronizado para <samp>NUNCA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A Permissão do Utilizador é <samp>NÃO</samp> e o valor total estava definido como NA�O ent�o � pr�-definido para <samp>NUNCA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> mas o total <samp>NUNCA</samp> não pode ser substituido.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> mas o total <samp>NUNCA</samp> não pode ser substituido.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> que torna-se o valor total porque estava assinalado como <samp>NÃO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> que torna-se o valor total porque estava assinalado como <samp>NÃO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> and o valor total é assinalado como <samp>SIM</samp>, então nada é alterado.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <samp>SIM</samp> and o valor total é assinalado como <samp>SIM</samp>, então nada é alterado.',
	'TRACE_WHO'								=> 'Quem', 
	'TRACE_TOTAL'							=> 'Total', 

	'USERS_NOT_ASSIGNED'			=> 'Nenhum Utilizador atribuido a esta tarefa',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'é um Membro dos Grupos Pre-Definidos seguintes', 
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'é um Membro dos Grupos Personalizados pelo Utilizador seguintes', 

	'VIEW_ASSIGNED_ITEMS'	=> 'Ver Itens Atribuidos', 
	'VIEW_LOCAL_PERMS'		=> 'Permissões Locais', 
	'VIEW_GLOBAL_PERMS'		=> 'Permissões Globais', 
	'VIEW_PERMISSIONS'		=> 'Ver Permissões', 

	'WRONG_PERMISSION_TYPE'	=> 'O Tipo de Permissão foi seleccionado erradamente, o phpBB NÃO o consegue processar correctamente.', 
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'O Tipo de Permissão foi seleccionado erradamente, o phpBB NÃO o consegue processar correctamente.',
)); 

?>
