<?php 
/** 
* 
* acp_board [Portuguese] 
* 
* @package language 
* @version $Id: board.php,v 1.0 2007/19/04 01:12:00 Portugal phpBB Hacks Exp $
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

// Board Settings 
$lang = array_merge($lang, array( 
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui você pode determinar as configuraes basicas de seu phpBB, e ainda outras configuraes gerais para o seu forum.',
	'CUSTOM_DATEFORMAT'				=> 'Pessoal',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da Data', 
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'O formato da data é o mesmo da função DATE no PHP.', 
	'DEFAULT_LANGUAGE'				=> 'Idioma Padrão', 
	'DEFAULT_STYLE'					=> 'Estilo Padrão', 
	'DISABLE_BOARD'					=> 'Desactiva o Fórum', 
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto tornará o Fórum inacessível aos utilizadores. Você também pode digitar uma mensagem curta (255 caracteres) para alertá-los.', 
	'OVERRIDE_STYLE'				=> 'Sobrepor estilo do utilizador', 
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Substitui o estilo do utilizador pelo padrão.', 
	'SITE_DESC'						=> 'Descricção do Site', 
	'SITE_NAME'						=> 'Nome do Site', 
	'SYSTEM_DST'					=> 'Activar Horrio de Verão',
	'SYSTEM_TIMEZONE'				=> 'Fuso Horário do Sistema', 
	'WARNINGS_EXPIRE'				=> 'Duração de Alerta', 
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'O número de dias que uma advertncia permanecerá no registo do utilizador.',
)); 

// Board Features 
$lang = array_merge($lang, array( 
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui você pode activar/desactivar diversos recursos do seu phpBB.',

	'ALLOW_ATTACHMENTS'			=> 'Activar Anexos',
	'ALLOW_BOOKMARKS'			=> 'Permitir histórico de tópicos', 
	'ALLOW_BIRTHDAYS'			=> 'Permitir aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permitir que os aniversários sejam exibidos no perfil.',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O utilizador poderá armazenar o seu histórico.',
	'ALLOW_BBCODE'				=> 'Permitir BBCode', 
	'ALLOW_FORUM_NOTIFY'		=> 'Permitir Vigilância do Fórum', 
	'ALLOW_NAME_CHANGE'			=> 'Permitir mudanças do Nome de utilizador', 
	'ALLOW_NO_CENSORS'			=> 'Permitir desactivação da Censura', 
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'O utilizador poderá desactivar a censura automática de palavras.', 
	'ALLOW_PM_ATTACHMENTS'		=> 'Permitir anexos em mensagens privadas', 
	'ALLOW_SIG'					=> 'Permitir Assinaturas', 
	'ALLOW_SIG_BBCODE'			=> 'Permitir BBCode na assinatura de utilizadores', 
	'ALLOW_SIG_FLASH'			=> 'Permitir o uso de FLASH BBCode na assinatura de utilizadores', 
	'ALLOW_SIG_IMG'				=> 'Permitir o uso de IMG BBCode na assinatura de utilizadores', 
	'ALLOW_SIG_LINKS'			=> 'Permitir o uso de links na assinatura de utilizadores',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se desactivando, a tag BBCode <code>[URL]</code> e as URLs mágicas serão Desactivadas.',
	'ALLOW_SIG_SMILIES'			=> 'Permitir o uso de emoção (icones de emoção) na assinatura de utilizadores', 
	'ALLOW_SMILIES'				=> 'Permitir emoção (Icones de Emoção)', 
	'ALLOW_TOPIC_NOTIFY'		=> 'Permitir Vigilância de Tópicos', 
	'BOARD_PM'					=> 'Mensagem Privada', 
	'BOARD_PM_EXPLAIN'			=> 'Activa ou não as Mensagens Privadas para todos os utilizadores.', 
)); 

// Avatar Settings 
$lang = array_merge($lang, array( 
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os Avatares são pequenas imagens que o utilizador pode associar a ele mesmo. Dependendo do estilo adotado, eles normalmente são mostrados acima do nome do utilizador na visualização do tópicos. Aqui você pode determinar como os utilizadores poderão definir seus avatares. Por Favor, note que para enviar avatares você precisa já ter criado o diretório abaixo e estar certo de que ele aceita permissão de escrita pelo servidor do fórum. O limite de tamanho da imagem de avatar é válido apenas para avatares enviados, não se aplicando a imagens utilizadas de outros websites.',

	'ALLOW_LOCAL'					=> 'Permitir Galeria de Avatares', 
	'ALLOW_REMOTE'					=> 'Activar Avatar Remoto',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Os avatares utilizados de outros websites.',
	'ALLOW_UPLOAD'					=> 'Activar o envio de Avatar',
	'AVATAR_GALLERY_PATH'			=> 'Pasta da Galeria de Avatares', 
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Pasta sob a pasta raiz do phpBB que conterá as galerias, tipo: images/avatars/gallery.',
	'AVATAR_STORAGE_PATH'			=> 'Pasta de armazenamento dos Avatares', 
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Pasta sob a pasta raiz do phpBB, e.g. images/avatars/upload.',
	'MAX_AVATAR_SIZE'				=> 'Dimensões Máximas do Avatar', 
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em pixels).',
	'MAX_FILESIZE'					=> 'Tamanho Máximo do Ficheiro Avatar', 
	'MAX_FILESIZE_EXPLAIN'			=> 'Para ficheiros de avatar enviados.',
	'MIN_AVATAR_SIZE'				=> 'Dimensões Mínimas do Avatar', 
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em pixels).',
)); 

// Message Settings 
$lang = array_merge($lang, array( 
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aqui você poderá configurar todas opções para Mensagens Particulares.',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode em mensagens privadas', 
	'ALLOW_FLASH_PM'			=> 'Permitir uso de FLASH BBCode', 
	'ALLOW_FLASH_PM_EXPLAIN'    => 'Note que para poder enviar flash nas MP, isto tem de estar activado, o que depende das suas premicção.',
	'ALLOW_FORWARD_PM'			=> 'Permitir encaminhamento mensagens privadas', 
	'ALLOW_IMG_PM'				=> 'Permitir uso de IMG BBCode', 
	'ALLOW_MASS_PM'				=> 'Permitir envio de mensagens privadas para múltiplos utilizadores e grupos', 
	'ALLOW_PRINT_PM'			=> 'Permitir visualizar impressão em mensagem privada', 
	'ALLOW_QUOTE_PM'			=> 'Permitir citar em mensagens privadas', 
	'ALLOW_SIG_PM'				=> 'Permitir assinaturas em mensagens privadas', 
	'ALLOW_SMILIES_PM'			=> 'Permitir emoção em mensagens privadas', 
	'BOXES_LIMIT'				=> 'Máximo de mensagens privadas por caixa', 
	'BOXES_LIMIT_EXPLAIN'		=> 'Utilizadores podem receber não mais que este total de mensagens em cada uma de suas caixas privadas(0 = mensagens ilimitadas).', 
	'BOXES_MAX'					=> 'Máximo de mensagens privadas por pasta', 
	'BOXES_MAX_EXPLAIN'			=> 'Por padrão os utilizadores podem criar este total de pastas pessoais para mensagens privadas.', 
	'ENABLE_PM_ICONS'			=> 'Activa o uso de ícones de tópico nas mensagens privadas', 
	'FULL_FOLDER_ACTION'		=> 'Ação padrão para pastas cheias', 
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ação a ser tomada se a pasta de um utilizador estiver cheia e se a ação configurada para a pasta do utilizador não for aplicável. Para a pasta "mensagens enviadas" a ação padrão é sempre excluir as mensagens antigas.', 
	'HOLD_NEW_MESSAGES'			=> 'Manuseio de novas mensagens', 
	'PM_EDIT_TIME'				=> 'Limite do tempo de edição', 
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limita o tempo para editar uma mensagem privada ainda não enviada (0 = infinito).', 
)); 

// Post Settings 
$lang = array_merge($lang, array( 
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aqui você pode configurar todas as opções de mensagens.',
	'ALLOW_POST_LINKS'					=> 'Permitir links nas Mensagens Privadas',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Se desactivado, a tag BBCode <code>[URL]</code> e as URLs mágicas serão desactivadas.',
	'ALLOW_POST_FLASH'                  => 'Permitir o uso de <code>[FLASH]</code> BBCode tag nos posts. ',
    'ALLOW_POST_FLASH_EXPLAIN'          => 'Desactivar <code>[FLASH]</code> BBCode tag nos posts. Sen�o os utilizadores podem usar <code>[FLASH]</code> BBCode tag.',

	'BUMP_INTERVAL'					=> 'Intervalo de Bump', 
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número de minutos, horas ou dias entre a última postagem em um tópico e replicação deste tópico.', 
	'CHAR_LIMIT'					=> 'Máximo de caracteres por postagem', 
	'CHAR_LIMIT_EXPLAIN'			=> '0 = caracteres ilimitados.', 
	'DISPLAY_LAST_EDITED'			=> 'Mostra a hora da última edição', 
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Selecione para mostrar informações da última actualização da mensagem.',
	'EDIT_TIME'						=> 'Tempo limite de edição', 
	'EDIT_TIME_EXPLAIN'				=> 'Limita o tempo disponível para se editar uma nova postagem (0 = infinito).', 
	'FLOOD_INTERVAL'				=> 'Intervalo de Flood', 
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que o utilizador deve esperar para uma nova postagem.', 
	'HOT_THRESHOLD'					=> 'Mensagens para se tornar um Tópico Popular (0 = desactiva tópicos populares).',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de mensagens que um tópico deve conter para ser considerado popular. Indique 0 para desactivar os tópicos populares.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções em votações/enquetes', 
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte nas mensagens', 
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '(0= tamanho ilimitado).', 
	'MAX_POST_IMG_HEIGHT'			=> 'Altura Máxima de imagem por mensagem', 
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura Máxima de ficheiros de imagem/flash nas mensagens (0 = tamanho ilimitado).', 
	'MAX_POST_IMG_WIDTH'			=> 'Largura Máxima de imagem por mensagem', 
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura Máxima de ficheiros de imagem/flash nas mensagens (0 = tamanho ilimitado).', 
	'MAX_POST_URLS'					=> 'Número Máximo de links por mensagem', 
	'MAX_POST_URLS_EXPLAIN'			=> '(0 = Links ilimitados.', 
	'POSTING'						=> 'Postando', 
	'POSTS_PER_PAGE'				=> 'Postagens por Página', 
	'QUOTE_DEPTH_LIMIT'				=> 'Máximo de citações aninhadas por mensagem', 
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '(0 = ilimitadas).', 
	'SMILIES_LIMIT'					=> 'Máximo de emoção por mensagem', 
	'SMILIES_LIMIT_EXPLAIN'			=> '(0 = ilimitadas).', 
	'TOPICS_PER_PAGE'				=> 'Tópicos por Página', 
)); 

// Signature Settings 
$lang = array_merge($lang, array( 
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as opções para Assinaturas dos utilizadores.',

	'MAX_SIG_FONT_SIZE'				=> 'Tamanho Máximo da fonte assinatura', 
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamanho Máximo da fonte permitido na assinatura dos utilizadores (0 = tamanho ilimitado).', 
	'MAX_SIG_IMG_HEIGHT'			=> 'Altura Máxima da imagem na assinatura', 
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura Máxima de um ficheiro de imagem/flash na assinatura dos utilizadores (0 = tamanho ilimitado).', 
	'MAX_SIG_IMG_WIDTH'				=> 'Largura Máxima de uma imagem na assinatura', 
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largura Máxima de um ficheiro de imagem/flash na assinatura do utilizador. (0 = tamanho ilimitado).', 
	'MAX_SIG_LENGTH'				=> 'Comprimento máximo da assinatura', 
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Número Máximo de caracteres na assinatura do utilizador.', 
	'MAX_SIG_SMILIES'				=> 'Número Máximo de emoção por assinatura', 
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Número Máximo de emoção permitido na assinatura do utilizador. (0 = tamanho ilimitado).', 
	'MAX_SIG_URLS'					=> 'Número Máximo de Links', 
	'MAX_SIG_URLS_EXPLAIN'			=> 'Máximo número de links numa assinatura. (0 = links ilimitados).', 
)); 

// Registration Settings 
$lang = array_merge($lang, array( 
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui você definirá as opções de registo e Perfil do utilizador.',

	'ACC_ACTIVATION'			=> 'Activação da Conta', 
	'ACC_ACTIVATION_EXPLAIN'	=> 'Determina se o utilizador terá acesso imediato ao fórum ou se será necessária uma confirmação. Você pode também desactivar novos registos.', 
	'ACC_ADMIN'					=> 'Admin', 
	'ACC_DISABLE'				=> 'Desactiva', 
	'ACC_NONE'					=> 'Nenhum', 
	'ACC_USER'					=> 'Utilizador', 
//	'ACC_USER_ADMIN'			=> 'User + Admin', 
	'ALLOW_EMAIL_REUSE'			=> 'Activar a reutilização de Email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Diferentes utilizadores poderão registra-se com o mesmo email.', 
	'COPPA'						=> 'Coppa (Children\'s Online Privacy Protection Act)', 
	'COPPA_FAX'					=> 'Número de Fax do COPPA', 
	'COPPA_MAIL'				=> 'Email do COPPA', 
	'COPPA_MAIL_EXPLAIN'		=> 'Este é o Email para onde os pais mandarão os formulários de registo da COPPA.',
	'ENABLE_COPPA'				=> 'Activar COPPA', 
	'ENABLE_COPPA_EXPLAIN'		=> 'Requer ao utilizador uma declaração de ter mais de 13 anos de idade em atenção ao COPPA.', 
	'MAX_CHARS'					=> 'Máximo', 
	'MIN_CHARS'					=> 'Mínimo', 
	'NO_AUTH_PLUGIN'			=> 'Nenhum módulo de segurança encontrada.',
	'PASSWORD_LENGTH'			=> 'Tamanho da Senha', 
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número Mínimo e Máximo de caracteres das senhas.', 
	'REG_LIMIT'					=> 'Tentactivas de registo', 
	'REG_LIMIT_EXPLAIN'			=> 'Número de tentativas que o utilizador pode fazer antes de ser bloqueado naquela secção.', 
	'USERNAME_ALPHA_ONLY'		=> 'Alfanumérico apenas', 
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumérico e Espaços', 
	'USERNAME_ASCII'			=> 'ASCII (Nenhum padrão de codificação unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualquer letra ou número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualquer letra, número, ou espaço',	
	'USERNAME_CHARS'			=> 'Limite de caracteres para o nome do utilizador', 
	'USERNAME_CHARS_ANY'		=> 'Qualquer caractere', 
	'USERNAME_CHARS_EXPLAIN'	=> 'Tipo restrito de caracteres aceitos no nome do utilizador; espaço, -, +, _, [ e ].',
	'USERNAME_LENGTH'			=> 'Tamanho do nome do utilizador', 
	'USERNAME_LENGTH_EXPLAIN'	=> 'Numero Mínimo e Máximo de caracteres nos nomes dos utilizadors.', 
)); 

// Visual Confirmation Settings 
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Aqui você define o uso de Confirmação Visual e o uso de CAPTCHA (Figuras com código alfanuméricos gerados aleatóriamente, usados para confirmar a interação humana em algum ato na internet).', 

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA ruído em primeiro plano',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilize GD para criar mais CAPCHA avançados.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use o ruído em primeiro plano para criar uma imagem GD CAPTCHA complexa.',
	'CAPTCHA_GD_X_GRID'						=> 'Eixo X de ruído de fundo do DD CAPTCHA',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma iamgem GD CAPTHAU mais complexa. 0 irá desactivar o ruído de fundo no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'Eixo Y de ruído de fundo do DD CAPTCHA',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma iamgem GD CAPTHAU mais complexa. 0 irá desactivar o ruído de fundo no eixo Y.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Sua alterações nas configurações da confirmação visual não foram salvas, Isto é apenas uma demonstração.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O captcha parecerá com este. Utilize o botão prever para actualizar. As imagens capchas são aleatórias a cada visualização.',			
	'VISUAL_CONFIRM_POST'					=> 'Activar confirmação visual para mensagens enviadas por visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Exige que qualquer utilizador indique o código aleatório da imagem, utilize isso para ajudar a evitar mensagens em massa.',
	'VISUAL_CONFIRM_REG'					=> 'Activar confirmação visual para novos registos',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Exige que todos os noevos utilizadores indiquem o codigo aleatório da imagem, utilize isso para ajudar a evitar cadastros em massa.',
));

// Cookie Settings 
$lang = array_merge($lang, array( 
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Esses detalhes definem os dados usados para enviar cookies para os navegadores. Na maioria dos casos os valores padrão (abaixo) para os cookies já são suficientes. Se você precisar mudá-los faça com cuidado, valores incorretos podem impedir o acesso de utilizadores.', 

	'COOKIE_DOMAIN'			=> 'Domínio do Cookie', 
	'COOKIE_NAME'			=> 'Nome do Cookie', 
	'COOKIE_PATH'			=> 'Caminho do Cookie', 
	'COOKIE_SECURE'			=> 'Cookie seguro', 
	'COOKIE_SECURE_EXPLAIN'	=> 'Se o seu servidor esta funcionando via SSL, mude para activado senão, deixe-o como Desactivado. Estando activado sem funcionar via SSL poderá resultar em erros no servidor durante os redirecionamentos.', 
	'ONLINE_LENGTH'				=> 'Tempo limite para visualização on-line', 
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tempo em minutos após o qual o utilizador inativo não aparecerá na lista de utilizadores on-line. Quanto menor, menos processamento se exige.', 
	'SESSION_LENGTH'			=> 'Tamanho da secção', 
	'SESSION_LENGTH_EXPLAIN'	=> 'A Secção se encerrará após esse tempo, em segundos.', 
)); 

// Load Settings 
$lang = array_merge($lang, array( 
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aqui você pode activar e desactivar certas funções do Fórum que podem reduzir o total de processamento pedido. Para a maioria dos servidores não é necessário desactivar nenhuma função. No entanto, em certos sistemas ou em ambientes de hospedagem compartilhada pode ser benéfico se desactivar alguns recursos que não sejam realmente necessário. Você pode também especificar limites para a carga do sistema e activar sessões, além das quais o Fórum sairá do ar.', 

	'CUSTOM_PROFILE_FIELDS'			=> 'Campos de Perfil Customisados', 
	'LIMIT_LOAD'					=> 'Limite de carga do sistema', 
	'LIMIT_LOAD_EXPLAIN'			=> 'Se, em um minuto, a carga do sistema exceder este valor o Fórum sairá do ar, o valor 1.0 equivale a ~100% de utilização de um processador. Isto funciona apenas em servidores UNIX e onde esta mensagem  acessvel. O valor escrito aqui ser resetado a 0 se no estiver activo o limite de carga no sistema.',
	'LIMIT_SESSIONS'				=> 'Limite de sessões', 
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o número de sessões, dentro de um mesmo minuto, exceder este valor o Fórum sairá do ar. (0 = sessões ilimitadas).', 
	'LOAD_CPF_MEMBERLIST'			=> 'Mostra os campos customisados de perfil na Lista dos Membros', 
	'LOAD_CPF_VIEWPROFILE'			=> 'Mostra os campos customisados de perfil no Perfil de utilizadores', 
	'LOAD_CPF_VIEWTOPIC'			=> 'Mostra os campos customisados de perfil na visualização dos tópicos', 
	'LOAD_USER_ACTIVITY'			=> 'Mostra a actividade dos utilizadores', 
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostra o fórum/tópico activo no perfil do utilizador e no painel de controle do utilizador. Recomenda-se desactivarr em Fóruns com mais de um milhão de postagens.',
	'RECOMPILE_STYLES'				=> 'Recompilar os componentes de estilo (Templates)',	
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Verificar por actualizações nos ficheiros de estilo no sistema de ficheiros e actualizar.',
	'YES_ANON_READ_MARKING'			=> 'Activa marcação de tópicos por convidados', 
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Armazena a marcação de lido/não-lido para convidados. Se desactivado, as mensagens serão sempre lidas por convidados.', 
	'YES_BIRTHDAYS'					=> 'Activa lista de aniversariantes', 
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se desactivar esta opção a lista de aniversariantes não será mostrada. Para que esta opção funcione a opção de activar Aniversários também precisa estar activada.',
	'YES_JUMPBOX'					=> 'Activa visualização de Jumpbox', 
	'YES_MODERATORS'				=> 'Activa visualização de Moderadores', 
	'YES_ONLINE'					=> 'Activa lista de utilizadores on-line', 
	'YES_ONLINE_EXPLAIN'			=> 'Mostra informação de utilizador on-line nas páginas de índice, fórum e tópicos.', 
	'YES_ONLINE_GUESTS'				=> 'Activa lista de convidados on-line na visualização de quem está on-line', 
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permitir visualização de informações de utilizadores convidados na visualização de quem está on-line.', 
	'YES_ONLINE_TRACK'				=> 'Activa visualização da imagem do utilizador on-line', 
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Mostra informação online para utilizadores em perfil e tópicos.',
	'YES_POST_MARKING'				=> 'Activa tópicos pontuados', 
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica se o utilizador tem postado num tópico.', 
	'YES_READ_MARKING'				=> 'Activa a marcação de tópicos no servidor', 
	'YES_READ_MARKING_EXPLAIN'		=> 'Armazena a marcação de lido/não-lido no banco-de-dados ao invés de salvá-lo em cookie.', 
)); 

// Auth settings 
$lang = array_merge($lang, array( 
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB suporta plug-ins ou módulos de autenticação. Eles permitem determinar como os utilizadores serão autenticados quando acessarem o Fórum. Por padrão, três plug-ins são disponibilizados; DB, LDAP e Apache. Nem todos os métodos necessitam de informação adicional, então apenas preencha os campos se forem relevantes para o método selecionado.', 

	'AUTH_METHOD'				=> 'Seleccione um método de autenticacção', 

	'APACHE_SETUP_BEFORE_USE'	=> 'Você tem que configurar a autenticação no apache antes de mudar para este método de autenticação. Certifique-se que o nome do utilizador que você usa para a autenticação apache seja a mesma que o seu nome de utilizador no phpBB. A autenticao Apache pode apenas ser utilizada com o mod_php (no com uma verso CGI) e o safe_mode desactivados.',

	'LDAP_DN'					=> 'LDAP base dn', 
	'LDAP_DN_EXPLAIN'			=> 'Este é o Nome Distinto (dn), determinando a informação do utilizador, ex o: o=My Company,c=US.',
	'LDAP_EMAIL'				=> 'Atributo do email LDAP', 
	'LDAP_EMAIL_EXPLAIN'		=> 'Atribue automaticamente ao nome de seu atributo de entrada de email do utilizador (se existir um) o email ao novo utilizador. Se deixar em branco, resulta num endereço de email vazio para os utilizadores que acessarem pela primeira vez ao forum.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'As ligações para o servidor LDAP falharam com nome de utilizador e senha indicados.',
	'LDAP_NO_EMAIL'				=> 'O Atributo de email especificado não existe.',
	'LDAP_NO_IDENTITY'			=> 'Não foi possível encontrar uma identificação de Acesso para %s.',
	'LDAP_PASSWORD'					=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixe este campo em branco para acesso anônimo. Caso contrario preenxa com a senha para o utilizador indicado. <strong>ATENÇÃO:</strong> Esta senha será armazenada em texto na base de dados podendo ser visualizada por qualquer um que tiver acesso a ele.', 
	'LDAP_PORT'						=> 'Porta LDAP do servidor',
	'LDAP_PORT_EXPLAIN'				=> 'Opcionalmente pode definir uma porta para o servidor LDAP que tem como padrão a porta 389.',
	'LDAP_SERVER'					=> 'Nome do servidor LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Endereço LDAP usado para o servidor. Em alternativa introduza um endereço do tipo ldap://hostname:port/',
	'LDAP_SERVER'				=> 'Nome do Servidor de LDAP', 
	'LDAP_SERVER_EXPLAIN'		=> 'Se usando LDAP este é o nome ou IP do servidor.', 
	'LDAP_UID'					=> 'LDAP uid', 
	'LDAP_UID_EXPLAIN'			=> 'Esta é a chave pela qual procurar para uma dada identificação de utilizador. Igual a: uid, sn, etc.', 
	'LDAP_USER'						=> 'Nome de utilizador LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Deixe em branco para acesso anônimo. Se preenxido o phpBB irá conectar ao servidor LDAP com o nome de utilizador informado.',
	'LDAP_USER_FILTER'				=> 'Filtro do utilizador LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcionalmente pode usar esta funcionalidade para entrar entradas mais rapidamente. Por exemplo <samp>objectClass=posixGroup</samp> que usa para os resultados globais <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
	
)); 

// Server Settings 
$lang = array_merge($lang, array( 
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aqui você define configuracções dependentes de servidores e domínios. Por Favor, esteja certo da precisão dos dados que você digitar, pois erros resultarão em emails contendo informações incorretas. Quando digitar o nome do domínio, lembre-se de incluir http:// ou outro termo de protocolo. Apenas altere o numero de porta do servidor se você souber que seu servidor usa um valor diferente, a porta 80 é usada na maioria dos casos.',

	'ENABLE_GZIP'				=> 'Activa Compressão GZip', 
	'ENABLE_GZIP_EXPLAIN'		=> 'O conteúdo gerado será comprimido para ser enviado ao navegador do utilizador se ele suportar isto. Isto poderá reduzir o tráfego de rede, mas aumentará o consumo de CPU do servidor e do computador do utilizador.',
	'FORCE_SERVER_VARS'			=> 'Force server url settings', 
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se marcado como Sim as configurações do servidor definidas aqui serão usadas no lugar dos valores determinados automaticamente.',
	'ICONS_PATH'				=> 'Pasta para armazenamento de Icones postados', 
	'ICONS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do phpBB, ex: images/icons.',
	'PATH_SETTINGS'				=> 'Configurações de Pastas', 
	'RANKS_PATH'				=> 'Pasta para armazenamento de Imagens de Rank', 
	'RANKS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do phpBB, ex: images/ranks.',
	'SCRIPT_PATH'				=> 'Diretório do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Diretório onde o phpBB está localizado com relação ao dominio, ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome do Domínio', 
	'SERVER_NAME_EXPLAIN'		=> 'O nome do domínio que executa este Fórum (por exemplo: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Porta do Servidor', 
	'SERVER_PORT_EXPLAIN'		=> 'A porta em que o seu servidor está sendo executado, usualmente 80, só mude na certeza de ser diferente.',
	'SERVER_PROTOCOL'			=> 'Protocolo do Servidor', 
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Será usado como o protocolo do servidor se essa configuração for forçada. Se vazio ou não forçado, o protocolo é determinado pela configuração de segurana do cookie (http:// ou https://).',
	'SERVER_URL_SETTINGS'		=> 'Configurações da URL do Servidor', 
	'SMILIES_PATH'				=> 'Pasta de Armazenamento de emoção', 
	'SMILIES_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do phpBB, ex: images/smilies.',
	'UPLOAD_ICONS_PATH'			=> 'Pasta de Armazenamento de icones de Grupos de Extensões', 
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do phpBB, ex: images/upload_icons.',
)); 

// Security Settings 
$lang = array_merge($lang, array( 
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aqui você configura as opções relacionadas a Sessões e Acesso.',

	'ALL'							=> 'Todos', 
	'ALLOW_AUTOLOGIN'				=> 'Permitir acesso automático', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os utilizadores podem acessar automaticamente quando visitam o Fórum.', 
	'AUTOLOGIN_LENGTH'				=> 'Persistent login key expiry days', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Número de dias após o que as chaves de acesso automáticos são removidas (0 = desactiva).', 
	'BROWSER_VALID'					=> 'Verifica o navegador', 
	'BROWSER_VALID_EXPLAIN'			=> 'Activa a validação do navegador em cada secção, aumentando a segurança.', 
	'CHECK_DNSBL'					=> 'Confere se o IP está na lista de DNS bloquados',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se activado os endereços de IP dos utilizadores serão verificados nos serviços DNSBL ao postarem ou criar novas contas de utilizador: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> e <a href="http://spamhaus.org">spamhaus.org</a>. Essa operação pode demorar um pouco, dependendo da configuração do servidor. Se essa operação ficar muito lenta ou acusar falsamente endereços de IP, é recomendado que a desactive.',
	'CLASS_B'						=> 'A.B', 
	'CLASS_C'						=> 'A.B.C', 
	'EMAIL_CHECK_MX'				=> 'Verificar se o Dominio é um registo MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se activado, o domínio do email quando informado nos registos ou alterações de perfil será verficado nos registos MX.',
	'FORCE_PASS_CHANGE'				=> 'Força a mudança de senha', 
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Solicita que o utilizador mude a sua senha após o numero de dias configurado (0 = desactiva).', 
	'FORM_TIME_MAX'                 => 'Tempo maximo para enviar forms',
    'FORM_TIME_MAX_EXPLAIN'         => 'O tempo maximo para enviar forms. Usar -1 para desactivar. Note that a form might become invalid if the session expires, regardless of this setting.',
	'FORM_SID_GUESTS'				=> '',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Se activado, the form token issued to guests will be session-exclusive. Isto pode causar problemas com alguns ISPs.',

	'FORWARDED_FOR_VALID'			=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessões somente continuarão se o cabeçalho <var>X_FORWARDED_FOR</var> enviado for igual ao enviado na última visita. Serão banidos os IPs que contiverem o mesmo cabeçalho <var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Verificação do IP da Secção', 
	'IP_VALID_EXPLAIN'				=> 'Determina quantos IPs de utilizadores sao usados para autentificar uma seccão. Todas comparam o endereço completo, A.B.C os primeiros x.x.x, A.B os primeiros x.x, Nenhum desactiva a verificao. Em endereos IPv6 A.B.C comparam os primeiros quatro blocos e A.B os primeiros 3 blocos.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Máximo número de tentactivas de acesso', 
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Após este número de acessos inválidos, o utilizador terá que confirmar seu acesso visualmente (Confirmação Visual).',
	'NO_IP_VALIDATION'				=> 'Nenhum', 
	'NO_REF_VALIDATION'             => 'Nenhum',
	'PASSWORD_TYPE'					=> 'Complexidade da Senha', 
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o quanto complexa a senha deve ser quando criada ou alterada.', 
	'PASS_TYPE_ALPHA'				=> 'Deve conter Letras e Numeros',
	'PASS_TYPE_ANY'					=> 'Não pedido', 
	'PASS_TYPE_CASE'				=> 'Deve conter maiúsculas e minúsculas', 
	'PASS_TYPE_SYMBOL'				=> 'Deve conter símbolos', 
	'REF_HOST'                      => 'Apenas hosts validos',
    'REF_PATH'                      => 'Also validate path',
    'REFERER_VALID'                 => 'Validar Referencia',
    'REFERER_VALID_EXPLAIN'         => 'Se activado, a referencia do POST vai verificar a path do forum. Isto pode causar problemas em foruns que usem muitos dominios ou logins externos.',
	'TPL_ALLOW_PHP'					=> 'Permitir php nos modelos (Templates)', 
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta opcção for activada, comandos PHP e INCLUDEPHP serão reconhecidos e inseridos nos templates.',
)); 

// Email Settings 
$lang = array_merge($lang, array( 
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta informação é usada quando o Fórum envia emails para seus utilizadores. Por Favor, certifique-se de que o email que você especificou é válido, qualquer mensagem incorreta ou não entregue será entregue neste endereço. Se o seu serviço de hospedagem não oferece um nativo serviço de email baseado no PHP, ento você pode então enviar mensagens diretamente usando SMTP. Isto exije o endereço de um servidor apropriado (pergunte ao seu servidor se necessário), não especifique qualquer nome antigo aqui! Se o servidor requer autenticação, digite os nomes e senhas necessários. Por Favor, note que é oferecida apenas uma autenticação básica. Implementações de autenticações diferentes não são permitidas atualmente.',

	'ADMIN_EMAIL'					=> 'Endereço de Email de Retorno', 
	'ADMIN_EMAIL_EXPLAIN'			=> 'Será utilizado como endereço de retorno em todas as mensagens. Este  o email padro do forum para contato e envio de emails pelo sistema phpBB.',
	'BOARD_EMAIL_FORM'				=> 'Envio de emails de utilizadores via Fórum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Permite o envio de emails de usurios pelo forum.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar os endereços de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta função mantém os endereços de email completamente ocultos.',
	'CONTACT_EMAIL'					=> 'Endereço de email de Contato',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este endereço será usado sempre que um ponto de contato específico é necessário, ex: spam, erro de saída, e etc. Isto ser sempre utilizado como endereco de envio e respostas nos emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nome da Função de email', 
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Função de email usada para enviar emails através do PHP.', 
	'EMAIL_PACKAGE_SIZE'			=> 'Tamanho do Pacote de email', 
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Número de emails enviados em um pacote.', 
	'EMAIL_SIG'						=> 'Assinatura de Email', 
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto será anexado a todos os emails que o fórum enviar.',
	'ENABLE_EMAIL'					=> 'Activa emails do Fórum', 
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se for desactivado emails não serão enviados pelo fórum.',
	'SMTP_AUTH_METHOD'				=> 'Método de Autenticação para o SMTP', 
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Apenas usado se um nome/senha é atribuído, pergunte a seu provedor se você não sabe que método usa.', 
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5', 
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5', 
	'SMTP_LOGIN'					=> 'LOGIN', 
	'SMTP_PASSWORD'					=> 'Senha do SMTP', 
	'SMTP_PASSWORD_EXPLAIN'			=> 'Apenas digite uma senha se seu servidor de SMTP requerer.', 
	'SMTP_PLAIN'					=> 'PLAIN', 
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP', 
	'SMTP_PORT'						=> 'Porta do Servidor de SMTP', 
	'SMTP_PORT_EXPLAIN'				=> 'Mude apenas se tiver a certeza de que seu servidor de SMTP está numa porta diferente.', 
	'SMTP_SERVER'					=> 'Endereço do Servidor de SMTP', 
	'SMTP_SETTINGS'					=> 'Configurações do SMTP', 
	'SMTP_USERNAME'					=> 'Nome de utilizador SMTP', 
	'SMTP_USERNAME_EXPLAIN'			=> 'Apenas digite um nome se seu servidor de SMTP requerer.', 
	'USE_SMTP'						=> 'Use um servidor de SMTP para enviar email', 
	'USE_SMTP_EXPLAIN'				=> 'Marque “Sim” se voc quer ou tem que enviar email através de um servidor SMPT ao invés de uma função de email local.',
)); 

// Jabber settings 
$lang = array_merge($lang, array( 
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aqui você pode activar e controlar o uso do Jabber para Mensagens Instantâneas e Notícias. Jabber é um protocolo código-aberto e por isso mesmo disponível a qualquer pessoa interessada. Alguns servidores de Jabber incluem gateways e transportes que permitem que você contacte utilizadores em outras redes. Nem todos os servidores oferecem todos os transportes, e mudanças nos protocolos podem evitar operações de transportes. Note que pode levar muitos segundos acté a actualização dos detalhes da conta de Jabber, ento não interrompa a execução dos procedimentos enquanto não estiver completo!',

	'ERR_JAB_PASSCHG'		=> 'Não foi possível mudar a senha.', 
	'ERR_JAB_PASSFAIL'		=> 'Actualizacção da senha falhou, %s.', 
	'ERR_JAB_REGISTER'		=> 'Um erro ocorreu quando tentou registar esta conta, %s.', 
	'ERR_JAB_USERNAME'		=> 'O nome de utilizador especificado já existe, por favor escolha outro.', 

	'JAB_CHANGED'				=> 'Conta de Jabber mudada com sucesso.', 
	'JAB_ENABLE'				=> 'Activa Jabber', 
	'JAB_ENABLE_EXPLAIN'		=> 'Activar o uso de Mensagens e Avisos Jabber.',
	'JAB_GTALK_NOTE'            => 'Por favor note que o Gtalk n�o funciona se <samp>dns_get_record</samp> function não for encontrada. A function não esta disponivel no PHP4, nem em sistemas Windows. Currentemente não funciona em sistemas BSD-based, incluindo o Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamanho do pacote de Jabber', 
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de mensagens enviadas em um pacote . Se for 0, a mensagem será enviada imediatamente e não será enfileirada para envio posterior.', 
	'JAB_PASSWORD'				=> 'Senha Jabber', 
	'JAB_PASS_CHANGED'			=> 'Senha Jabber mudada com suceso.', 
	'JAB_PORT'					=> 'Porta do Jabber', 
	'JAB_PORT_EXPLAIN'			=> 'Deixe em branco se souber que não é 5222.',
	'JAB_REGISTERED'			=> 'Nova conta registada com sucesso.', 
	'JAB_RESOURCE'				=> 'Recurso Jabber', 
	'JAB_RESOURCE_EXPLAIN'		=> 'Recurso localiza esta conexão particular. Igual a: board, home, etc.', 
	'JAB_SERVER'				=> 'Servidor Jabber', 
	'JAB_SERVER_EXPLAIN'		=> 'Veja em %sjabber.org%s para uma lista de servidores.',
	'JAB_SETTINGS_CHANGED'		=> 'Configuracções do Jabber alterados com sucesso.', 
	'JAB_USE_SSL'				=> 'Usar SSL para se ligar.',
    'JAB_USE_SSL_EXPLAIN'       => 'Se activado, uma ligação segura tentará ser estabilizada. A porta Jabber será alterada para 5223 se a porta 5222 tiver sido indicado.',
	'JAB_USERNAME'				=> 'Utilizador Jabber', 
	'JAB_USERNAME_EXPLAIN'		=> 'Se não estiver registado será criado se possível.', 
)); 

?>
