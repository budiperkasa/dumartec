<?php 
/** 
* 
* install [Portuguese] 
*
* @package language
* @version $Id: groups.php,v 1.21 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**************************************************************************************************************
* Translation by: Asturmas - f.esteves@ptservidor.com  |  http://www.alojagratis.org & http://www.ptservidor.com
***************************************************************************************************************
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
	'ADMIN_CONFIG'				=> 'Configuração Administractiva', 
	'ADMIN_PASSWORD'			=> 'Senha do Administrador', 
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirme a senha do Administrador', 
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Insira uma senha que tenha entre 6 e 30 caracteres).',
	'ADMIN_TEST'				=> 'Verificar as configurações administractivas', 
	'ADMIN_USERNAME'			=> 'Nome de Utilizador do Administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Insira um nome de utilizador que tenha de 3 a 20 caracteres).',
	'APP_MAGICK'				=> 'Suporte Imagemagick [ Anexos ]', 
	'AUTHOR_NOTES'				=> 'Notas do Autor<br />» %s', 
	'AVAILABLE'					=> 'Disponível', 
	'AVAILABLE_CONVERTORS'		=> 'Conversores Disponíveis', 

	'BEGIN_CONVERT'					=> 'Iniciar Conversão', 
	'BLANK_PREFIX_FOUND'			=> 'Uma pesquina nas suas tabelas mostrou uma instalação válida sem utilização de um prefixo para as tabelas.', 
	'BOARD_NOT_INSTALLED'			=> 'Nenhuma instalação encontrada', 
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Para realizar a conversão você precisa ter uma instalação padrão do phpBB3. Por Favor, visite a pgina <a href="%s">Instalando pela primeira vez o phpBB3</a>.',

	'CATEGORY'					=> 'Categoria', 
	'CACHE_STORE'				=> 'Tipo de cache', 
	'CACHE_STORE_EXPLAIN'		=> 'O local físico onde os dados são guardados, ficheiro de sistema é preferível.', 
	'CAT_CONVERT'				=> 'Converter', 
	'CAT_INSTALL'				=> 'Instalar', 
	'CAT_OVERVIEW'				=> 'Visão Geral', 
	'CAT_UPDATE'				=> 'Actualizar',
	'CHANGE'					=> 'Alterar', 
	'CHECK_TABLE_PREFIX'		=> 'Por favor, verifique o prefixo das tabelas e tente novamente.', 
	'CLEAN_VERIFY'				=> 'Limpando e verificando a estrutura final',
	'CLEANING_USERNAMES'		=> 'Limpar utilizadores',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> é o nome de utilizador limpo para:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Nomes de utilizador colidindo foram encontrados no seu antigo painel. Para completar esta conversão, por favor, delete ou renomeie estes utilizadores para um utilizador único.',
	'COLLIDING_USER'			=> '» ID do utilizador: <strong>%d</strong> nome de utilizador: <strong>%s</strong> (%d mensagens)',
	'CONFIG_CONVERT'			=> 'Convertendo a configuração', 
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Não foi possível escrever o ficheiro de configuracção. Modos alternativos para a criação deste ficheiro são exibidos em baixo.',
	'CONFIG_FILE_WRITTEN'		=> 'O Ficheiro de configuração foi escrito, você pode prosseguir para o próximo passo da instalação.',
	'CONFIG_PHPBB_EMPTY'		=> 'A variável de configuração do phpBB3 para "$s" está vazia.', 
	'CONFIG_RETRY'				=> 'Tentar novamente', 
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmar email de Contacto',
	'CONTINUE_CONVERT'			=> 'Continuar a conversão', 
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentactiva de conversão prévia foi encontrada. Você deve escolher entre iniciar uma nova conversão ou continuar a interrompida.',
	'CONTINUE_LAST'				=> 'Continuar com as últimas declarações', 
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar com a conversão interrompida', 
	'CONVERT'					=> 'Converter', 
	'CONVERT_COMPLETE'			=> 'Conversão finalizada', 
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Você converteu o seu Fórum para o phpBB 3.0 com sucesso. Você pode já pode fazer login e <a href="../">acessar seu forum</a>. Relembrando que você pode pedir ajuda online através do <a href="http://www.phpbb.com/support/documentation/3.0/">Guía do utilizador</a>, no <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Suporte Oficial ao phpBB</a> e no <a href="http://www.pthacks.org">Suporte Portugues ao phpBB</a>.',
	'CONVERT_INTRO'				=> 'Bem-vindo ao Framework de Conversão Unificada phpBB', 
	'CONVERT_INTRO_BODY'		=> 'Daqui você é capaz de importar dados de outros sistemas de fóruns (instalados). A lista abaixo mostra todos os módulos de conversão disponíveis. Se não existe um conversor na lista para o codigo de fórum que você deseja converter, por favor, verifique em nosso website onde outros conversores podem estar disponíveis para download.',
	'CONVERT_NOT_EXIST'			=> 'O Conversor selecionado não existe',
    'CONVERT_OPTIONS'           => 'Opções',	
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão', 
	'CONVERT_SETTINGS_VERIFIED'	=> 'A informação que você disponibilizou foi verificada. Para inciar a conversão, clique no botão abaixo.',
	'CONV_ERR_FATAL'					=> 'Erro fatal na conversão',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O envio de anexos por FTP está activo no seu painel antigo. Desactive a opcção de envio por FTP, crie um diretório válido e envie todos os ficheiros de anexos para este novo diretório acessível. Após concluir esta operação, reinicie o conversor.', 
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não foram encontrads informação de configuração válidas para a conversão.', 
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível acessar as informações do fórum.', 
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não foi possível adquirir as categorias.', 
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível adquirir a configuração do fórum.', 
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não foi possível acessar/ler "%s".', 
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível adquirir as informações de autentificação dos grupos.', 
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Foi encontrada uma inconsistência na tabela de grupos em add_bots() - você precisa adicionar todos os grupos especiais manualmente.', 
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o bot na tabela de utilizadores.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o bot na tabela de bots.', 
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não foi possível inserir o utilizador na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de Erro', 
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_path\'] para usar %s.', 
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O local relativo aos ficheiros do fórum não foi informado.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_gallery_path\'] para usar %s.', 
	'CONV_ERROR_NO_GROUP'				=> 'Grupo "%1$s" não foi encontrado em %2$s.', 
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'ranks_path\'] para usar %s.', 
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'smilies_path\'] para usar %s.', 
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'upload_path\'] para usar %s.', 
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir ou actualizar as configurações de permissões.', 
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível Seleccionar as pastas de pm.', 
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo fórum substituindo uma categoria antiga.', 
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo fórum substituindo um fórum antigo.', 
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível adquirir as informações de autentificação dos utilizadores.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no Grupo "%1$s" definido em %2$s.', 
	'CONV_OPTIONS_BODY'                 => 'Esta pagina precisa do acesso ao codigo do forum. Introduza os dados da base de dados; o convertor não ira mexer no codigo actual. O acesso ao codigo deve ser desactivado para evistar erros.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens Guardadas', 

	'COULD_NOT_COPY'			=> 'Não foi possível copiar o ficheiro <strong>%1$s</strong> para <strong>%2$s</strong><br /><br />Verifique se o diretório destino existe e possui permissão de escrita no servidor.',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível encontrar o local para seu fórum anterior. Por favor, verifique as suas configurações e tente novamente.<br />» O local especificado foi %s',

	'DBMS'						=> 'Tipo da Base de Dados', 
	'DB_CONFIG'					=> 'Configuração da Base de Dados', 
	'DB_CONNECTION'				=> 'Conexão da Base de Dados', 
	'DB_ERR_INSERT'				=> 'Erro ao processar a query INSERT', 
	'DB_ERR_LAST'				=> 'Erro ao processar query_last', 
	'DB_ERR_QUERY_FIRST'		=> 'Erro ao executar query_first', 
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro ao executar query_first, %s ("%s")', 
	'DB_ERR_SELECT'				=> 'Erro ao executar a query SELECT', 
	'DB_HOST'					=> 'Nome do servidor da Base de Dados / DSN', 
	'DB_HOST_EXPLAIN'			=> 'DSN siginifica Data Source Name e é relevante apenas para instalacções ODBC.', 
	'DB_NAME'					=> 'Nome da Base de Dados', 
	'DB_PASSWORD'				=> 'Senha da Base de Dados', 
	'DB_PORT'					=> 'Porta do Servidor da Base de Dados', 
	'DB_PORT_EXPLAIN'			=> 'Deixe em branco ao menos que você saiba que o servidor utiliza outra porta que não seja a padrão.', 
	'DB_USERNAME'				=> 'Nome de utilizador da Base de Dados',
	'DB_TEST'					=> 'Testar Conexão', 
	'DEFAULT_LANG'				=> 'Idioma padrão do Fórum', 
	'DEFAULT_PREFIX_IS'			=> 'O Conversor não pode encontrar tabelas com o prefixo especificado. Por Favor, verifique se você escreveu as informações correctas do seu fórum. O Prefixo Padrão para a tabela %1$s é <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Não foi especificado um valor para a variável ficheiro_teste no conversor. Se você é utilizador deste conversor, e não deveria estar vendo este erro, por favor contacte o autor do conversor. Se você é o autor do conversor, você deve especificar o nome de um ficheiro que exista no fórum de destino para que seja possível a verificação de diretório.',
	'DIRECTORIES_AND_FILES'		=> 'Configuração de Ficheiro e Diretório', 
	'DISABLE_KEYS'				=> 'Desactivando chaves', 
	'DLL_FIREBIRD'				=> 'Firebird 1.5+', 
	'DLL_FTP'					=> 'Suporte Remoto à FTP [ Instalação ]', 
	'DLL_GD'					=> 'Suporte à GD graphics [ Confirmação Visual ]', 
	'DLL_MBSTRING'				=> 'Suporte a caracteres Multi-byte', 
	'DLL_MSSQL'					=> 'MSSQL Server 2000+', 
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC', 
	'DLL_MYSQL'					=> 'MySQL 3.23.x/4.x', 
	'DLL_MYSQLI'				=> 'MySQL 4.1.x/5.x with MySQLi Extension', 
	'DLL_ORACLE'				=> 'Oracle', 
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x', 
	'DLL_SQLITE'				=> 'SQLite', 
	'DLL_XML'					=> 'XML support [ Jabber ]', 
	'DLL_ZLIB'					=> 'Suporte à compressão zlib [ gz, .tar.gz, .zip ]', 
	'DL_CONFIG'					=> 'Download da configuração', 
	'DL_CONFIG_EXPLAIN'			=> 'Você deve descarregar o ficheiro config.php para o seu computador agora, e então enviá-lo para o FTP, substituindo qualquer ficheiro config.php existente no diretório raiz do seu phpBB 3.0. Lembre-se de enviar o ficheiro em formato ASCII (veja a documantação do seu software de FTP caso não saiba como fazer). Quando tiver enviado o ficheiro config.php, clique em "Pronto" para seguir para o próximo passo.', 
	'DL_DOWNLOAD'				=> 'Download', 
	'DONE'						=> 'Pronto', 

	'ENABLE_KEYS'				=> 'Reabilitando chaves. Isto pode demorar alguns minutos', 

	'FILES_OPTIONAL'			=> 'Ficheiros opcionais e diretórios', 
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - Este ficheiros, diretórios ou permissões não são necessários. A rotina de instalação tentará usar outras técnicas para ser completa caso eles nao existam ou não possam ser escritos. No entanto, a presença destes ficheiros, diretórios e permissões irá acelerar o processo de instalação.', 
	'FILES_REQUIRED'			=> 'Ficheiros e Diretórios', 
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Necessário</strong> - Para funcionar correctamente, o phpBB precisa ter acesso ou escrever determinados ficheiros ou diretórios. Se você ver "Não Encontrado", você precisará criar o diretório ou ficheiro relevante. Se você ver "Não Escrito", você precisará mudar as permissões no ficheiro ou diretório para permitir que o phpBB escreve nele.',
	'FILLING_TABLE'				=> 'Preenchendo tabela <b>%s</b>', 
	'FILLING_TABLES'			=> 'Preenchendo Tabelas', 
	'FINAL_STEP'				=> 'Etapa Final do Processo', 
	'FORUM_ADDRESS'				=> 'Endereço do Fórum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Este o endereço do seu fórum, por exemplo http://www.exemplo.com.com/phpBB3/.',
	'FORUM_PATH'				=> 'Pasta do Fórum',
	'FORUM_PATH_EXPLAIN'		=> 'Este é endereço para a <strong>Pasta de Instalação do seu phpBB</strong> no servidor do fórum.',
	'FOUND'						=> 'Encontrado', 
	'FTP_CONFIG'				=> 'A transferir a configuração por FTP', 
	'FTP_CONFIG_EXPLAIN'		=> 'O phpBB detectou a presença do módulo de FTP neste servidor. Você pode tentar enviar o config.php por este método se desejar. Você precisará de indicar os dados indicados abaixo, lembrando que o nome de utilizador e senha são referentes ao acesso ao seu FTP! (pergunte ao seu provedor de hospedagem por estas informações caso não tenha certeza sobre eles.)',
	'FTP_PATH'					=> 'Diretório no FTP', 
	'FTP_PATH_EXPLAIN'			=> 'Este é o diretório do diretório raiz para o diretório do phpBB3, ex: htdocs/phpBB3/.',
	'FTP_UPLOAD'				=> 'Enviar', 

	'GPL'						=> 'General Public License', 

	'INITIAL_CONFIG'			=> 'Configuração Básica', 
	'INITIAL_CONFIG_EXPLAIN'	=> 'Agora que a instalação determinou que seu servidor pode rodar o phpBB, você precisa dar algumas informações específicas. Caso você não saiba como ligar a sua base de dados, por favor, contacte seu serviço de hospedagem (em primeiro caso) ou utilize o fórum de suporte de <a href="http://www.alojagratis.org/forum">AlojaGratis.Org</a>. Quando colocar os dados, tenha certeza de que eles estão correctos antes de continuar.',
	'INSTALL_CONGRATS'			=> 'Parabéns !',
	'INSTALL_CONGRATS_EXPLAIN'	=> 'A instalação do phpBB3 foi concluída com sucesso. Clique no botão abaixo para ser levado ao Painel de Administração. Dê uma olhada nas opções disponíveis para que você gerencie seu fórum, e lembre-se que qualquer ajuda está disponível online pelo Guia de utilizador ou pelo fórum de suporte AlojaGratis.Org. Leia o %sREADME%s para maiores informações.',
	'INSTALL_INTRO'				=> 'Bem-vindo à instalação', 
	'INSTALL_INTRO_BODY'		=> 'Com esta opcção, você poderá instalar o phpBB no seu servidor.</p><p>Para proceder, você irá precisar das configurações da sua base de dados. Se você não sabe as suas configurações, por favor, contacte o seu servidor e obtenha-os. Você também necessitará de:</p>

	<ul>
		<li>Tipo da Base de Dados - a base de dados que você irá utilizar.</li>
		<li>Endereço ou DNS do seu servidor de Base de Dados - o endereço do servidor da base de dados.</li>
		<li>Porta do servidor de Base de Dados - a porta do servidor da base de dados (na maioria das vezes isso não é necessário).</li>
		<li>Nome da Base de Dados - o nome da base de dados no servidor.</li>
		<li>Nome do utilizador e Senha da Base de Dados - os dados de login para aceder a base de dados.</li>
	</ul>

	<p><strong>Nota:</strong> se a sua instalação utiliza SQLLite, você precisará de indicar o endereço completo dos ficheiros de base de dados no campo DNS e deixar em branco o nome de utilizador e senha. Por razões de segurança, você deve se certificar de que este ficheiro de base de dados não esteja em locais acessíveis pela web.</p>

	<p>Base de Dados suportados pelo phpBB3:</p>
	<ul>
		<li>MySQL 3.23 ou superior (Suporte a MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 ou superior (directo ou via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Apenas os base de dados suportados pelo seu servidor serão mostrados.',
	'INSTALL_INTRO_NEXT'		=> 'Para iniciar a instalação, aperte o botão abaixo.', 
	'INSTALL_LOGIN'				=> 'Login', 
	'INSTALL_NEXT'				=> 'Próximo passo', 
	'INSTALL_NEXT_FAIL'			=> 'Alguns teste falharam e você deve corrigir esses problemas antes de prosseguir para o próximo passo. Caso não faça isso, a instalação ficará incompleta.', 
	'INSTALL_NEXT_PASS'			=> 'Todos os teste básicos foram concluídos e você pode prosseguir para o próximo passo da instalação. Caso tenha modificado alguma permissão, módulo e etc, e deseja refazer os testes, você pode refazê-los agora.', 
	'INSTALL_PANEL'				=> 'Painel de Instalação', 
	'INSTALL_SEND_CONFIG'		=> 'Infelizmente não foi possível escrever as informações de confirguração no ficheiro config.php. Isto aconteceu ou porque o ficheiro não existe ou porque não pode ser escrito. Algumas opções para concluir a instalação estão listadas abaixo permitindo completar a instalção do config.php.',
	'INSTALL_START'				=> 'Começar a Instalação', 
	'INSTALL_TEST'				=> 'Testar Novamente', 
	'INST_ERR'					=> 'Erro na instalação', 
	'INST_ERR_DB_CONNECT'		=> 'Não foi possível conectar a base de dados, veja a mensagem de erro abaixo', 
	'INST_ERR_DB_FORUM_PATH'	=> 'O ficheiro da base de dados indicado está dentro da estrutura de diretórios do fórum. Você deveria pôr este ficheiro um local não acessível pela web.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nenhuma mensagem de erro foi dada.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A versão do Mysql instalado nesta máquina é incompativel com a “MySQL with MySQLi Extension” opcção selecionada. Tente com uma outra opcção “MySQL”.', 
	'INST_ERR_DB_NO_SQLITE'		=> 'A versão da extensão SQLite instalada é muito antiga, você precisa actualizá-la para uma superior a 2.8.2.', 
	'INST_ERR_DB_NO_ORACLE'		=> 'A versão do Oracle instalada nesta máquina exige que você sete a variável <var>NLS_CHARACTERSET</var> para o parâmetro <var>UTF8</var>. Você pode actualizar a sua instalação para uma posterior a 9.2+ ou alterar o seu parâmetro.', 
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A versão do Firebird instalada nesta máquina é mais antiga que a 2.0, actualize para uma versão recente.', 
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'A Base de dados Firebird seleccionada possui o tamanho de página menor que 8192, é necessário que ele seja maior que 8192.', 
	'INST_ERR_DB_NO_POSTGRES'	=> 'A Base de dados seleccionada não foi criado na codificação <var>UNICODE</var> ou <var>UTF8</var>. Tente instalar com uma base de dados com codificacção<var>UNICODE</var> ou <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'A Base de dados deve ser escrita',
	'INST_ERR_EMAIL_INVALID'	=> 'O endereço de email informado é inválido', 
	'INST_ERR_EMAIL_MISMATCH'	=> 'Os emails que você digitou não conferem.', 
	'INST_ERR_FATAL'			=> 'Erro fatal de instalação', 
	'INST_ERR_FATAL_DB'			=> 'Um erro fatal e irrecuperável na base de dados aconteceu. Isto pode ter acontecido pois o utilizador especificado no possui a permisso para CRIAR TABELAS ou INSERIR dados, etc. Maiores informações são dadas abaixo. Por favor, contacte o seu provedor de hospedagem ou o fórum <a href="http://www.alojagratis.org/forum">AlojaGratis.org</a> para maiores informações.',
	'INST_ERR_FTP_PATH'			=> 'Não foi possível mudar para o diretório especificado, por favor, verifique o caminho.', 
	'INST_ERR_FTP_LOGIN'		=> 'Não foi possível logar no servidor de FTP. Por favor, verifique o nome de utilizador e a senha.',
	'INST_ERR_MISSING_DATA'		=> 'Você precisa preencher todos os campos deste bloco.',
	'INST_ERR_NO_DB'			=> 'Não foi possível carregar o módulo PHP para o tipo de base de dados seleccionado', 
	'INST_ERR_PASSWORD_MISMATCH'	 => 'As senhas informadas não conferem.', 
	'INST_ERR_PASSWORD_TOO_LONG'	 => 'A senha digitada é muito grande. O tamanho máximo é de 30 caracteres.', 
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha digitada é muito pequena. O tamanho mínimo é de 6 caracteres.', 
	'INST_ERR_PREFIX'			=> 'Já existem tabelas com o prefixo especificado. Por favor, escolha outro prefixo.', 
	'INST_ERR_PREFIX_INVALID'	=> 'O prefixo informado é inválido para a sua base de dados. Tente outro, removendo caracteres como hífen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'O prefixo informado é muito comprido. O comprimento máximo é %d caracteres.', 
	'INST_ERR_USER_TOO_LONG'	=> 'O nome de utilizador informado é muito comprido. O comprimento máximo é 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'O nome de utilizador informado é muito curto. O comprimento mínimo é 3 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Chave primária inválida : %s', 
	
	'LONG_SCRIPT_EXECUTION'		=> 'Por favor espere um momento... Por favor não pare este script.',

	// mbstring 
	'MBSTRING_CHECK'						=> 'Extensão <samp>mbstring</samp>', 
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> é uma extensão do PHP que fornece funções string multibyte. Certas características mbstring são incompatíveis com o phpBB e devem ser desactivadas.', 
	'MBSTRING_FUNC_OVERLOAD'				=> 'Função overloading', 
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> deve estar setada para 0 ou 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificação de caracteres transparentes', 
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deve estar setada para 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversão de caracteres de entrada HTTP', 
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> deve estar setada para <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversão de caracteres de saída HTTP', 
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> deve estar setada para <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Por Favor, certifique-se de que esta pasta existe e pode ser escrita pelo servidor e tente novamente:<br />»<b>%s</b>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por Favor, certifique-se de que estas pastas existem e podem ser escritas pelo servidor e tente novamente:<br />»<b>%s</b>',

	'NAMING_CONFLICT'			=> 'Conflito de nomes: %s e %s são pseudônimos<br /><br />%s', 
	'NEXT_STEP'					=> 'Ir para o próximo passo', 
	'NOT_FOUND'					=> 'Não foi possível achar', 
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s ("%s")', 
	'NO_CONVERTORS'				=> 'Nenhum conversor está disponível para uso', 
	'NO_CONVERT_SPECIFIED'		=> 'Nenhum conversor especificado', 
	'NO_LOCATION'				=> 'Não foi possível determinar o local. Se o Imagemagick estiver instalado, você pode especificar o local mais tarde no seu painel de Administração.',
	'NO_TABLES_FOUND'			=> 'Nenhuma tabela encontrada.', 
	'OVERVIEW_BODY'					=> 'Bem-Vindo ao phpBB3!</p> O phpBB é o sistema open source de foruns mais utilizado no mundo.</p><p>Leia o nosso <a href="../docs/INSTALL.html">guia de instalação</a> para mais informações sobre a instalação do phpBB3</p><p>Este sistema de instalação irá guiá-lo pelo processo de instalação do phpBB, conversão de sistema diferente ou actualização para a última versão do phpBB. Para maiores informações sobre cada opcção, seleccione no menu acima.',
	'PCRE_UTF_SUPPORT'				=> 'Suporte a PCRE UTF-8', 
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'O phpBB <strong>não</strong> irá funcionar se a sua instalação do PHP não for compilada com suporte a UTF-8 na extensão PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Função do PHP getimagesize() está disponível',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Essencial</strong> - Para o funcionamento correcto do phpBB, é necessario que esta função seja disponível.',
	'PHP_OPTIONAL_MODULE'			=> 'Módulos Opcionais', 
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estes módulos ou aplicações são opcionais, não sendo necessários para a utilizacção do phpBB 3.0. Entretanto, se você os possuir, irá habilitar uma maior funcionalidade.', 
	'PHP_SUPPORTED_DB'				=> 'Bancos de Dados Suportados', 
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Necessário</strong> - Você deve possuir ao menos uma base de dados compatível com PHP. Caso nenhum tipo de base de dados seja exibido como disponível, contacte seu provedor de hospedagem ou reveja a documentação do PHP relevante para obter ajuda.', 
	'PHP_REGISTER_GLOBALS'			=> 'A configuração do PHP "register_globals" está desactivada', 
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB irá funcionar com esta configuração activada, mas se possível, recomendamos que a configuraçõa register_globals seja desactivada no PHP por motivos de segurança.', 
	'PHP_SAFE_MODE'					=> 'Modo Seguro', 
	'PHP_SETTINGS'					=> 'Versão do PHP e Configurações', 
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Necessário</strong> - Você deve possuír, no mínimo, a versão 4.3.3 do PHP para instalar o phpBB. Se "modo seguro" é exibido abaixo, sua a instalação do PHP está rodando nesse modo. Isto implicará em limitações para administração remota e características similares.', 
	'PHP_URL_FOPEN_SUPPORT'			=> 'Configuração do PHP <var>allow_url_fopen</var> está activada',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Esta configuração é opcional, entretanto algumas funções como avatar fora do site não irão funcionar. ',
	'PHP_VERSION_REQD'				=> 'Versão do PHP >= 4.3.3', 
	'POST_ID'						=> 'ID da mensagem', 
	'PREFIX_FOUND'					=> 'Um scan de suas tabelas encontrou uma instalação válida utilizando o prefixo <strong>%s</strong> para as tabelas.', 
	'PREPROCESS_STEP'				=> 'Executando as funções de pré-processamento', 
	'PRE_CONVERT_COMPLETE'			=> 'Todos os passos da pré-conversão foram completados com sucesso. Você pode agora iniciar o processo de conversão. Por Favor, note que você deve ajustar algumas coisas manualmente. Depois da converso, verifique as permisses atribuidas, reconstrua o ídice de sua Pesquisa se necessário e verifique se os ficheiros foram copiados correctamente, como por exemplo os avatares e smilies.',
	'PROCESS_LAST'					=> 'Processando as últimas instruções', 

	'REFRESH_PAGE'				=> 'Actualize a página para continuar a conversão', 
	'REFRESH_PAGE_EXPLAIN'		=> 'Se clicar em Sim, o conversor irá actualizar a página para continuar a conversão até o estágio final. Se esta é a sua primeira conversão com propósitos de teste e determinar erros, nós sugerimos que clique em Não.', 
	'REQUIREMENTS_TITLE'		=> 'Compatibilidade de Instalação', 
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de continuar com a instalação completa, o phpBB fará alguns testes com a configuração do servidor e com os ficheiros para garantir que você consiga instalar e utilizar o phpBB. Leia os resultados com atenção e não prossiga até que todos os testes requeridos sejam completados. Se desejar habilitar alguma função listada nos testes opcionais, tenha certeza que os testes opcionais foram completados.', 
	'RETRY_WRITE'				=> 'Tentar escrever a configuração novamente', 
	'RETRY_WRITE_EXPLAIN'		=> 'Se desejar, altere as permissoes do ficheiro config.php para permitir ao phpBB que escreva nele. Caso modifique as permissões, clique em Tentar Novamente. Lembre-se de voltar as permissões do config.php para o original após a instalação ser completa.', 

	'SCRIPT_PATH'				=> 'Pasta dos Ficheiros', 
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde os ficheiros do phpBB estão localizados no seu servidor, ex. /phpBB3.',
	'SELECT_LANG'				=> 'Seleccione a Linguagem', 
	'SERVER_CONFIG'				=> 'Configuração do Servidor', 
	'SEARCH_INDEX_UNCONVERTED'	=> 'Os Índices de pesquisa não foram convertidos',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Os Seus antigos índices de pesquisa não foram convertidos. As pesquisas ião dar erro. Para criar um novo índice de pesquisa, vá até o Painel de Administrador, seleccione Manutenção e escolha Índice de pesquisa no sub-menu.',	
	'SOFTWARE'					=> 'Software do Fórum', 
	'SPECIFY_OPTIONS'			=> 'Escolha as Opções de Conversão', 
	'STAGE_ADMINISTRATOR'		=> 'Detalhes do Administrador', 
	'STAGE_ADVANCED'			=> 'Configurações Avançadas', 
	'STAGE_ADVANCED_EXPLAIN'	=> 'As configurações nesta página são são necessárias caso você deseje algo diferente do padrão. Caso não tenha certeza, continue para a próxima página, você pode alterar essas configurações no Painel de Administração depois.', 
	'STAGE_CONFIG_FILE'			=> 'Ficheiro de Configuracção', 
	'STAGE_CREATE_TABLE'		=> 'Criação das Tabelas', 
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'As tabelas da base de dados utilizadas pelo phpBB 3.0 serão criadas e actualizada com as informações iniciais. Proceda para o próximo estágio para concluir a instalação do phpBB.', 
	'STAGE_DATABASE'			=> 'Configuração da Base de Dados', 
	'STAGE_FINAL'				=> 'Etapa Final', 
	'STAGE_INTRO'				=> 'Introdução', 
	'STAGE_IN_PROGRESS'			=> 'Conversão em andamento', 
	'STAGE_REQUIREMENTS'		=> 'Exigências', 
	'STAGE_SETTINGS'			=> 'Configurações', 
	'STARTING_CONVERT'			=> 'Iniciando o Processo do Conversão', 
	'STEP_PERCENT_COMPLETED'	=> 'Passo <b>%d</b> de <b>%d</b>: %d%% completado', 
	'SUB_INTRO'					=> 'Introdução', 
	'SUB_LICENSE'				=> 'Licensa', 
	'SUB_SUPPORT'				=> 'Suporte', 
	'SUCCESSFUL_CONNECT'		=> 'Ligacão Completa', 
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Para duvidas sobre esta tradução va a <a href=”http://www.alojagratis.org” targer=”_blank”>AlojaGratis</a>. Por favor, visite nosso <a href=”http://www.pthacks.org” target=”_blank”>fórum</a>, lá você encontrará vários tutoriais, artigos, vídeo-aulas bastante simplificadas para facilitar os seus primeiros passos com o phpBB. Para os utilizadores mais avançados também temos uma documentação de como colaborar com a criação de MODs e Templates. Visite o nosso fórum <a href=”http://www.pthacks.org” target=”_blank”>PTHacks.or</a><br /><br /><br /><br />Atenciosamente<br /><a href=”http://www.alojagratis.org” target=”_blank”>AlojaGratis.org</a>',
	'SYNC_FORUMS'				=> 'Sincronizar fóruns',
	'SYNC_POST_COUNT'           => 'Sincronizar contador de posts',
    'SYNC_POST_COUNT_ID'        => 'Sincronizar contador de posts para <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Sincronizar tópicos', 
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos a partir do topic_id $1%s ao $2%s.',

	'TABLES_MISSING'			=> 'Não foi possível encontrar estas tabelas<br />» <b>%s</b>.', 
	'TABLE_PREFIX'				=> 'Prefixo das tabelas na Base de Dados', 
	'TABLE_PREFIX_SAME'			=> 'O Prefixo das Tabelas precisa ser aquele usado pelo software que você está convertendo.<br />» O prefixo de tabela especificado foi %s',
	'TESTS_PASSED'				=> 'Testes concluídos com sucesso', 
	'TESTS_FAILED'				=> 'Teste não concluídos', 

	'UNABLE_WRITE_LOCK'			=> 'Não foi possível escrever o ficheiro de bloqueio', 
	'UNAVAILABLE'				=> 'Indisponível', 
	'UNWRITABLE'				=> 'Não gravavel',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando Informações de Tópicos enviados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Algum erro ocorreu enquanto as informações de tópicos eram geradas. Você pode tentar novamente esta etapa no Painel de Administração depois que a conversão estiver completa.', 
    'VERIFY_OPTIONS'            => 'Verificando opções da configuração',


	'VERSION'					=> 'Versão', 

	'WELCOME_INSTALL'			=> 'Bem-Vindo à Instalação do phpBB3', 

	'WRITABLE'					=> 'Gravavel',	 
)); 

// Updater 
$lang = array_merge($lang, array( 
	'ALL_FILES_UP_TO_DATE'		=> 'Todos os ficheiros foram actualizados com a mais recente versão do phpBB. Você já pode <a href="../ucp.php?mode=login">fazer login no seu painel</a> e verificar se está tudo a funcionar. Não se esqueça de apagar, re-nomear ou mover o diretório de instalação !', 
	'ARCHIVE_FILE'				=> 'Código fonte dentro do ficheiro', 

	'BACK'				=> 'Voltar', 
	'BINARY_FILE'		=> 'Ficheiro binário', 
	'BOT'				=> 'Spider/Robot',
	
    'CHANGE_CLEAN_NAMES'			=> 'O método utilizado para garantir que mais de um utilizador utilize o mesmo nome foi modificado. Foram encontrados alguns utilizadores que neste novo método terão o mesmo nome. Você terá que apagar ou renomear estes utilizadores, para se certificar que não existeram nomes duplicados antes de poder prosseguir.',
	'CHECK_FILES'					=> 'Conferir ficheiros', 
	'CHECK_FILES_AGAIN'				=> 'Conferir ficheiros novamente', 
	'CHECK_FILES_EXPLAIN'			=> 'Na próxima etapa todos os ficheiros serão verificados com os da actualizacção - essa operação pode demorar um tempo caso seja a primeira verificação.', 
	'CHECK_FILES_UP_TO_DATE'		=> 'De acordo com a sua Base de Dados a sua versão do phpBB está actualizada. Você pode proceder para a verificação do ficheiros para ter certeza de que todos os ficheiros estão realmente actualizados com a versão mais recente do phpBB.', 
	'CHECK_UPDATE_DATABASE'			=> 'Continuar com o processo de Actualização', 
	'COLLECTED_INFORMATION'			=> 'Informações coletadas sobre os ficheiros', 
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'A lista abaixo mostra os ficheiros que precisam ser actualizados. Leia as informações abaixo para ver o que você precisa fazer para executar uma ataulização sem problemas.', 
	'COLLECTING_FILE_DIFFS'         => 'A verificar os diferentes ficheiros',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Você já pode <a href="../ucp.php?mode=login">fazer login no seu painel</a> e verificar se está tudo a funcionar. Não se esqueça de apagar, re-nomear ou mover o diretório de instalação !', 
	'CONTINUE_UPDATE_NOW'			=> 'Continuar o processo de Actualização agora',
	'CURRENT_FILE'					=> 'Ficheiro original actual', 
	'CURRENT_VERSION'				=> 'Versão Actual', 

	'DATABASE_TYPE'						=> 'Típo da base de dados', 
	'DATABASE_UPDATE_INFO_OLD'			=> 'O ficheiro de actualizacção da base de dados no diretório de instalacção está desactualizado. Envie o ficheiro com a versão correcta do ficheiro.', 
	'DELETE_USER_REMOVE'				=> 'Apagar utilizador e posts',
	'DELETE_USER_RETAIN'				=> 'Apagar utilizador mas deixar os posts',
	'DESTINATION'						=> 'Ficheiro de destino', 
	'DIFF_INLINE'						=> 'Na linha', 
	'DIFF_RAW'							=> 'Diferenças unificadas puras', 
	'DIFF_SEP_EXPLAIN'					=> 'Fim de ficheiro actual / Começar Actualização de outro ficheiro', 
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a lado', 
	'DIFF_UNIFIED'						=> 'Diferenças unificadas', 
	'DO_NOT_UPDATE'						=> 'Não actualize este ficheiro', 
	'DONE'								=> 'Pronto', 
	'DOWNLOAD'							=> 'Descarregar', 
	'DOWNLOAD_AS'						=> 'Descarregar como', 
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descarregar os ficheiros modificados', 
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez baixados, você deve descompactar os ficheiros. Você achará os ficheiros modificados, os quais você precisa enviar para o diretório raiz do seu phpBB. Envie os ficheiros para os seus respectivos locais. Após enviar todos os ficheiros, confira eles novamente clicando no botão abaixo.', 

	'ERROR'		=> 'Erro', 
	'EDIT_USERNAME'	=> 'Editar utilizador',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O Ficheiro já foi actualizado',
	'FILE_DIFF_NOT_ALLOWED'			=> 'O Ficheiro não se encontra disponível para ser diferido', 
	'FILE_USED'						=> 'A Informação foi utilizada de',			// Single file 
	'FILES_CONFLICT'				=> 'Ficheiros em Conflito', 
	'FILES_CONFLICT_EXPLAIN'		=> 'Os ficheiros seguintes são alterados e não representam os seus respectivos ficheiros originais da Versão anterior. O phpBB determinou que estes ficheiros criassem conflitos se eles tentarem ser alterados. Por Favor, investigue os conflitos e tente resolvê-los manualmente ou continue a Actualização selecionando o método desejado. Se você resolver os conflitos manualmente, verifique os ficheiros novamente depois de modificados. Você pode também Seleccionar entre o método desejado para todos os ficheiros. O primeiro irá resultar em um ficheiro onde as linhas em conflito do seu ficheiro anterior serão perdidas, e o outro irá resultar na perda das modificações do novo ficheiro criado.', 
	'FILES_MODIFIED'				=> 'Ficheiros Modificados', 
	'FILES_MODIFIED_EXPLAIN'		=> 'Os ficheiros seguintes são alterados e não representam os seus respectivos ficheiros originais da Versão anterior. O ficheiro actualizado será um merge entre suas modificações e o seu novo ficheiro.', 
	'FILES_NEW'						=> 'Novos Ficheiros', 
	'FILES_NEW_EXPLAIN'				=> 'Os ficheiros seguintes actualmente não existem na sua instalação.', 
	'FILES_NEW_CONFLICT'			=> 'Novos Ficheiros em Conflito', 
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os ficheiros seguintes são novos na nova versão do phpBB, mas foi determinado que já exista um ficheiro com o mesmo nome e mesma posição. Este ficheiro será substituido pelo seu novo ficheiro.', 
	'FILES_NOT_MODIFIED'			=> 'Ficheiros Não-Modificados', 
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os ficheiros seguintes não são alterados e representam os seus respectivos ficheiros originais da versão a qual você deseja actualizar.', 
	'FILES_UP_TO_DATE'				=> 'Ficheiros já actualizados', 
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os Ficheiros seguintes já se encontram prontos e não precisam ser actualizados.', 
	'FTP_SETTINGS'					=> 'Configurações de FTP', 
	'FTP_UPDATE_METHOD'				=> 'Envio de FTP', 

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os ficheiros de Actualização encontrados são incompatíveis com a sua versão do phpBB instalada. A sua Versão do phpBB é %1$s e o ficheiro de Actualização é da Versão %2$s para %3$s.', 
	'INCOMPLETE_UPDATE_FILES'		=> 'Os ficheiros de Actualização estão incompletos', 
	'INLINE_UPDATE_SUCCESSFUL'		=> 'A base de dados foi actualizado com sucesso. Agora você precisa continuar com o processo de Actualização.',
	
	'KEEP_OLD_NAME'		=> 'Manter o nome de utilizador',

	'LATEST_VERSION'		=> 'Última Versão', 
	'LINE'					=> 'Linha', 
	'LINE_ADDED'			=> 'Adicionadas', 
	'LINE_MODIFIED'			=> 'Alteradas', 
	'LINE_REMOVED'			=> 'Apagadas', 
	'LINE_UNMODIFIED'		=> 'Não Alteradas', 
	'LOGIN_UPDATE_EXPLAIN'	=> 'Pronto para actualizar a sua Instalação, você precisa primeiramente de se ligar.', 

	'MAPPING_FILE_STRUCTURE'	=> 'Para facilitar a Actualização aqui, está o local do ficheiro que mapea a Instalação do seu phpBB.', 
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Fundir modificação',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Não alterar - utilizar novos ficheiros', 
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Não alterar - utilizar ficheiros instalados actualmente', 
	'MERGE_MOD_FILE_OPTION'		=> 'Merge differences e utilizar o código modificado o bloco de conflito', 
	'MERGE_NEW_FILE_OPTION'		=> 'Merge differences e utilizar o código do novo ficheiro com o bloco de conflito', 
	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes não foram selecionados correctamente', 
    'MERGING_FILES'             => 'Merging differences',
    'MERGING_FILES_EXPLAIN'     => 'Currently collecting final file changes.<br /><br />Por favor espere para o phpBB completar as mudanças nos ficheiros.',

	'NEW_FILE'						=> 'Novo Ficheiro Actualizado', 
	'NEW_USERNAME'					=> 'Novo Utilizador',
	'NO_AUTH_UPDATE'				=> 'Você não está autorizado a actualizar este painel', 
	'NO_ERRORS'						=> 'Sem Erros', 
	'NO_UPDATE_FILES'				=> 'Sem Actualização para os ficheiros seguintes', 
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Os ficheiros seguintes são novos ou modificados, mas o diretório em que eles normalmente se encontram não pôde ser encontrado na sua instalação. Se esta lista contém ficheiros para os diretórios como /language ou /styles que você tenha alterado, sua estrutura de diretório e a Actualização deverão ficar incompletos.', 
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nenhum diretório de Actualização válido foi encontrado, por favor, certifique-se de ter enviado correctamente os ficheiros.<br /><br />A sua Instalação <strong>não</strong> está pronta. As actualizações estão disponíveis para a sua Versão do phpBB %1$s, por favor visite <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> para descarregar o pacote correcto para actualizar da Versão %2$s para a Versão %3$s.', 
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A sua Versão está pronta. Não é necessário executar a ferramenta de actualização. Se você deseja ter a absoluta certeza, verifique se enviou correctamente os ficheiros de Actualização.', 
	'NO_UPDATE_INFO'				=> 'A Informação do Ficheiro de Actualizacção não pôde ser encontrada', 
	'NO_UPDATES_REQUIRED'			=> 'Sem Actualização necessárias', 
	'NO_VISIBLE_CHANGES'			=> 'Sem Alterações Visíveis', 
	'NOTICE'						=> 'Aviso', 
	'NUM_CONFLICTS'					=> 'Número de Conflitos', 
	'NUMBER_OF_FILES_COLLECTED'     => 'Currently having differences about %1$d from %2$d files collected.<br />Por favor espere para a file collection finalize.',

	'OLD_UPDATE_FILES'		=> 'Os ficheiros de Actualização não estão prontos. Os ficheiros de Actualização encontrados são do phpBB %1$s para o phpBB %2$s, mas a Última Versão do phpBB é a %3$s.', 

	'PACKAGE_UPDATES_TO'				=> 'O pacote actual irá ser actualizar para a versão',
	'PERFORM_DATABASE_UPDATE'			=> 'Executar Actualização da Base de Dados', 
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Abaixo você encontrará um link para o script de actualização da base de dados. Este script precisa ser executado separadamente porque a actualização da base de dados pode resultar em um comportamente inesperado se você estiver ligado. A actualização da base de dados pode demorar alguns minutos, então por favor não pare a execução da mesma. Depois de finalizada a actualização na base de dados, feche a janela e continue o processo de Actualização.', 
	'PREVIOUS_VERSION'					=> 'Versão Anterior', 
	'PROGRESS'							=> 'Progresso', 

	'RESULT'					=> 'Resultado', 
	'RUN_DATABASE_SCRIPT'		=> 'Actualizar Base de Dados', 

	'SELECT_DIFF_MODE'			=> 'Seleccionar Modo de Diferenciação', 
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccionar Formato do ficheiro para Download', 
	'SELECT_FTP_SETTINGS'		=> 'Seleccionar Configurações de FTP', 
	'SHOW_DIFF_CONFLICT'		=> 'Exibir Diferenças/Conflitos', 
	'SHOW_DIFF_FINAL'			=> 'Exibir Ficheiro Resultante', 
	'SHOW_DIFF_MODIFIED'		=> 'Exibir Diferenças Alteradas', 
	'SHOW_DIFF_NEW'				=> 'Exibir Conteúdo do Ficheiro', 
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Exibir Diferenças', 
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Exibir Diferenças', 
	'SOME_QUERIES_FAILED'		=> 'Alguns Erros foram encontrados. As afirmações e erros estão listados abaixo.',
	'SQL'						=> 'SQL', 
	'SQL_FAILURE_EXPLAIN'		=> 'Mas provavelmente não há nada com o que se preocupar, a Actualização irá continuar. Para solucionar este problema, você deve procurar ajuda em nosso Forum de Suporte. Veja o <a href="../docs/README.html">README</a> para detalhes em como obter ajuda.', 
	'STAGE_FILE_CHECK'			=> 'Verificar Ficheiros', 
	'STAGE_UPDATE_DB'			=> 'Actualizar Base de Dados', 
	'STAGE_UPDATE_FILES'		=> 'Actualizar Ficheiros', 
	'STAGE_VERSION_CHECK'		=> 'Verificação da Versão', 
	'STATUS_CONFLICT'			=> 'Ficheiro Modificado produzindo conflitos', 
	'STATUS_MODIFIED'			=> 'Ficheiro Modificado', 
	'STATUS_NEW'				=> 'Novo Ficheiro', 
	'STATUS_NEW_CONFLICT'		=> 'Novo Ficheiro em Conflito', 
	'STATUS_NOT_MODIFIED'		=> 'Ficheiro Não-Modificado', 
	'STATUS_UP_TO_DATE'			=> 'O Ficheiro já foi actualizado', 
	
	'TOGGLE_DISPLAY'            => 'Mostrar/Esconder a Lista de Ficheiros',

	'UPDATE_COMPLETED'				=> 'Actualização Completa', 
	'UPDATE_DATABASE'				=> 'Actualizar Base de Dados', 
	'UPDATE_DATABASE_EXPLAIN'		=> 'Na próxima etapa a Base de Dados será actualizada.', 
	'UPDATE_DATABASE_SCHEMA'		=> 'Actualizando o schema da Base de Dados', 
	'UPDATE_FILES'					=> 'Actualizar Ficheiros', 
	'UPDATE_FILES_NOTICE'			=> 'Por Favor, certifique-se de ter actualizado os ficheiros do seu fórum também, este ficheiro está apenas actualizando a sua Base de Dados.', 
	'UPDATE_INSTALLATION'			=> 'Actualizar Instalação do phpBB', 
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta opcção, é possível Actualização a instalação do seu phpBB para a última versão.<br />Durantes este processo, todos os seus ficheiros serão devidamente checados. Você pode rever todas as diferenças e ficheiros antes da Actualização.<br /><br />A própria Actualização do ficheiro pode ser realizada de duas maneiras.</p><h2>Actualização Manual</h2><p>Com esta actualização, você apenas baixa a sua seleção pessoal dos ficheiros modificados, e para ter certeza de que você não perderá as modificações do seu ficheiro, você deve finalizar. Depois de ter baixado este pacote, você deve manualmente enviar os ficheiros para os seus respectivos diretório e pastas. Em seguida, você pode fazer o estágio da verificação do ficheiro novamente para ver se você moveu correctamente os seus ficheiros.</p><h2>Actualização Automática com FTP</h2><p>Este método é similar ao primeiro, mas você não precisa descarregar os ficheiros modificados e enviá-los ao seu servidor. Isto será executado para você. Em ordem para utilizar este método, você precisa saber os detalhes do seu registo de FTP desde que você seja exigido para isso. Depois de finalizado, você será redirecionado para a verificação do ficheiro novamente para ter certeza de que tudo foi actualizado correctamente.<br /><br />', 
	'UPDATE_INSTRUCTIONS'			=> ' 

		<h1>Anúncio do Lançamento Oficial</h1> 

		<p>Por Favor, leia <a href="%1$s" title="%1$s">O Anúncio do Lançamento Oficial da Nova Versão</a> antes de continuar o processo de actualização, pois aqui poderá conter informacções importantes. E também estarão disponíveis os link para download do pacote, assim como do change log.</p> 

		<br /> 

		<h1>Como Actualizar a sua Instalação</h1> 

		<p>O Método recomendável para a Actualização da sua Instalacção apenas indica as seguintes etapas:</p> 

		<ul style="margin-left: 20px; font-size: 1.1em;"> 
			<li>Vá à <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">Página de Downloads do phpBB.Com</a> e descarregue o "Pacote de Actualização do phpBB" correcto.<br /><br /></li> 
			<li>Descompacte o Ficheiro.<br /><br /></li> 
			<li>Envie a Pasta de Instalação completamente descompactada para o seu Servidor (onde o seu ficheiro config.php se encontra).<br /><br /></li> 
		</ul> 

		<p>Depois de enviado, o seu Forum se encontrará Offline para utilizadores Normais conforme o diretório de instalação que você enviou agora.<br /><br />
		<strong><a href="%2$s" title="%2$s">Agora inicie o Processo de Instalação inserindo no seu navegador o endereço da pasta /install</a>.</strong><br /> 
		<br /> 
		Você será em seguida levado ao processo de actualização. Você será avisado quando a actualização estiver completa. 
		</p> 
	', 
	'UPDATE_INSTRUCTIONS_INCOMPLETE'   => '

       <h1>Update incompleto detectado</h1>

       <p>O phpBB detectou um update automatico incompleto. Por favor marque este campo para correr a ferramente de update automatico. Pode encontrar este endereço novamente, ou ir para o diretório da instalação.</p>
    ',
	'UPDATE_METHOD'					=> 'Método de Actualização', 
	'UPDATE_METHOD_EXPLAIN'			=> 'Você pode agora escolher o método de actualização desejado. Utilizando o Envio de FTP, aparecerá uma tela onde você deverá escrever os detalhes so seu registo do FTP. Com este método, os ficheiros serão automáticamente movidos para o novo local e backups dos ficheiros antigos serão criados by appending .bak ao nome do ficheiro. Se você escolher fazer o download dos ficheiros modificados, você poderá descompactá-los e enviá-los para os seus locais correctos manualmente depois.', 
	'UPDATE_REQUIRES_FILE'			=> 'O sistema de actualização necessita dos seguintes ficheiro: %s',
	'UPDATE_SUCCESS'				=> 'A Actualização foi executada com sucesso', 
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Todos os Ficheiros foram actualizados com sucesso. A próxima etapa envolve checar todos os ficheiros novamente para ter certeza de que os ficheiros foram actualizados correctamente.', 
	'UPDATE_VERSION_OPTIMIZE'		=> 'Actualizando Versão e Optimizando as Tabelas', 
	'UPDATING_DATA'					=> 'Actualizando Dados', 
	'UPDATING_TO_LATEST_STABLE'		=> 'Actualizando a Base de Dados para o Novo Sistema', 
	'UPDATED_VERSION'				=> 'Versão Actualizada', 
	'UPLOAD_METHOD'					=> 'Método do Envio', 

	'UPDATE_DB_SUCCESS'				=> 'A Actualização da Base de Dados foi executada com sucesso', 
	'USER_ACTIVE'					=> 'Utilizador activo',
	'USER_INACTIVE'					=> 'Utilizador inactivo',

	'VERSION_CHECK'				=> 'Verificação da Versão', 
	'VERSION_CHECK_EXPLAIN'		=> 'Verifique se a Versão do phpBB que está a ser executada está pronta.', 
	'VERSION_NOT_UP_TO_DATE'	=> 'A sua Versão do phpBB está pronta. Por Favor, continue o Processo de Actualização', 
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'A sua Versão do phpBB não está pronta.<br />Em baixo, você encontrará um link para o Anúncio Oficial da Última Versão assim como instruções de como realizar a actualização.', 
	'VERSION_UP_TO_DATE'		=> 'A sua Instalação está pronta, e actualizações não estão disponíveis para a sua Versão do phpBB. Você deve continuar de qualquer maneira para realizar uma Verificação de Validade do ficheiro.', 
	'VERSION_UP_TO_DATE_ACP'	=> 'A sua Instalação está pronta, e actualizações não estão disponíveis para a sua Versão do phpBB. Você não precisa actualizar a sua instalação.', 
	'VIEWING_FILE_CONTENTS'		=> 'Visualizando Conteúdo dos Ficheiros', 
	'VIEWING_FILE_DIFF'			=> 'Visualizando Diferenças dos Ficheiros', 

	'WRONG_INFO_FILE_FORMAT'	=> 'Informação Incorrecta do Formato do Ficheiro', 
)); 

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Atencionsamente, A Administração',
	'CONFIG_SITE_DESC'				=> 'Um Pequeno Texto para descrição do seu forum',
	'CONFIG_SITENAME'				=> 'oseudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Este é um exemplo de mensagem no seu novo forum phpBB3. Você pode apagar está mensagem, este tópico e este fórum quando quiser !<br /><br /> Caso tenha alguma dúvida, sugestão, comentário sobre a tradução ou quanto ao funcionamento do phpBB3, entre na comunidade <a href="http://www.alojagratis.org/forum/index.php">AlojaGratis.org</a>',

	'EXT_GROUP_ARCHIVES'			=> 'Ficheiros',
	'EXT_GROUP_DOCUMENTS'			=> 'Documentos',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Ficheiros Descarregaveis',
	'EXT_GROUP_FLASH_FILES'			=> 'Ficheiros Flash',
	'EXT_GROUP_IMAGES'				=> 'Imagens',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texto Puro',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Ficheiro do Quicktime',
	'EXT_GROUP_REAL_MEDIA'			=> 'Ficheiro do Real Player',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Ficheiro do Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'A Minha Primera Categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Este é um forum de teste.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forum de teste 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador do Site',
	'REPORT_WAREZ'                  => 'A mensagem denúnciada contém endereços ilegais ou de software piratiado.',
    'REPORT_SPAM'                   => 'A mensagem denúnciada tem apenas o propósito de anunciar um website ou um produto.',
    'REPORT_OFF_TOPIC'              => 'A mensagem denúnciada é desecessária, e não faz sentido.',
    'REPORT_OTHER'                  => 'A mensagem denúnciada não se encaixa em outra categoria, use o campo de descricção para especificar umaa.',

	'SMILIES_ARROW'					=> 'Seta',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Legal',
	'SMILIES_CRYING'				=> 'Chorando ou Muito Triste',
	'SMILIES_EMARRASSED'			=> 'Envergonhado',
	'SMILIES_EVIL'					=> 'Maligno ou Muito Mal',
	'SMILIES_EXCLAMATION'			=> 'Exclamação',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idéia',
	'SMILIES_LAUGHING'				=> 'Rindo',
	'SMILIES_MAD'					=> 'Furioso',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutro',
	'SMILIES_QUESTION'				=> 'Pergunta',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Olhos rolantes',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Chocado',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surpreso',
	'SMILIES_TWISTED_EVIL'			=> 'Muito Mal',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Muito Feliz',
	'SMILIES_WINK'					=> 'wink',

	'TOPICS_TOPIC_TITLE'			=> 'Bem vindo ao phpBB3',
));

?>
