<?php 
/** 
* 
* help_faq [Portuguese] 
* 
* @package language 
* @version $Id: help_faq.php,v 1.0 2007/19/04 01:12:00 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**************************************************************************************************************
* Translation by: Asturmas - f.esteves@ptservidor.com  |  http://www.alojagratis.org & http://www.ptservidor.com
**************************************************************************************************************
*/

if (!defined('IN_PHPBB'))
{
   exit;
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

$help = array( 
   array( 
      0 => '--', 
      1 => 'Sobre o <i>Login</i> e o <i>Registo</i>' 
   ), 
   array( 
      0 => 'Porque é que não consigo Entrar no Forum?', 
      1 => 'Ainda não se Registou? Você deve se <u>Registar</u> de forma a poder <u>Entrar</u> no forum. Você foi banido do forum? Surgirá uma mensagem se tal aconteceu. Caso haja um banimento, você deve contactar o Administrador do Forum e perguntar o porquê caso não saiba a razão. Caso esteja registado e não se encontre banido e mesmo assim não consiga entrar, verifique novamente se o seu <u>Nome de Utilizador</u> e <u>Senha</u> estão corretos. Normalmente é esse o problema. Caso não saiba mesmo o que possa ser, e não seja nenhuma das razões anteriormente descritas, contacte o Administrador do Forum pois pode haver alguma configuração errada no Sistema.' 
   ), 
   array( 
      0 => 'O Registo é Obrigatório para utilizar este forum?', 
      1 => 'Poderá não ser necessário. Está inteiramente ao critério do Administrador do forum se é necessário o registo, para que seja possível aos utilizadores o envio de suas mensagens. Contudo, o registo lhe dá acesso a funções adicionais e possivelmente a seções que não estão disponíveis a visitantes. Alguns exemplos são o Uso e Definição de <u>Avatares</u>, Uso de <u>Mensagens Particulares</u>, Enviar e receber <u>emails</u> entre utilizadores, inscrição em Grupos de utilizadores, etc. São necessários apenas alguns segundos para se fazer o registo, então é recomendável que o faça.'
   ), 
   array( 
      0 => 'Por que entro automaticamente no forum?', 
      1 => 'Se não assinalar <u>Lembrar as minhas Informações</u>, não entrará automaticamente da próxima vez que visitar o forum. Isto evita o uso abusivo da sua conta por outra pessoa. Para se manter Online e não necessitar escrever o seu Nome de Utilizador e Senha, assinale esta caixa quando entrar. Isto não é recomendável caso acesse o forum através de um computador compartilhado por outros utilizadores, ou seja, Bibliotecas, Cefé Internet ou Cyber Café, Universidades, etc.'
   ), 
   array( 
      0 => 'Como posso Ocultar o meu Nome de Utilizador da Lista de utilizadores Online?',
      1 => 'Em seu <u>Perfil</u> há uma opcção chamada <u>Utilizador Invisível</u>. Se seleccionar <u>Sim</u>, apenas Você e o Administrador poderão ver que está Online. Passará a ser considerado pelo Sistema do phpBB3 como um <u>Utilizador Invisível</u>.'
   ), 
   array( 
      0 => 'Esqueci-me da minha Senha!', 
      1 => 'Não entre em Pânico! Você deve solicitar uma nova senha. Apesar da sua senha não poder ser recuperada pela administração do forum, pode no entanto ser feito como que se nunca a tivesse registado, ou seja, como que se estivesse entrando pela primeira vez. Para fazer isto, clique em <u>Entrar</u> e em seguida em <u>Esqueci a Senha</u>, e seguindo as instruções, voltará a entrar no forum em questão de minutos.' 
   ), 
   array( 
      0 => 'Registei-me mas não consigo entrar!', 
      1 => 'Primeiro, verifique se está escrevendo o Nome de Utilizador e Senha corretamente. Caso estejam corretos, então uma entre duas coisas podem estar acontecendo - Se a função <u>COPPA</u> estiver ativa no forum e você clicou em <u>Aceito estes termos e tenho menos de 13 anos de idade</u> em seu registo, você terá que seguir as instruções que recebeu. Se este não é o seu caso, será que o seu registo está activado? Alguns administradores preferem que o registo de novos utilizadores seja activado através de um email, para que possa definitivamente acessar o forum. Caso isso aconteça, quando você se registou, deve ter sido informado se a ativação seria ou não necessária. Se recebeu o email, então siga as suas instruções. Se não recebeu o email, será que o endereço de email escrito é válido? Uma das razões para a ativação ser feita é para reduzir o número de abusos do sistema por utilizadores disfarçados ou passando pelo anonimato. Se você tem certeza que o endereço de email que forneceu é válido e correto, então tente contactar o administrador do forum.'
   ), 
   array( 
      0 => 'Registei-me anteriormente mas não consigo agora entrar?!', 
      1 => 'As razões mais prováveis são: Você escreveu um Nome de Utilizador ou Senha incorretos (visualize o email enviado quando se registou inicialmente), ou o Administrador poderá ter excluído o seu registo por algum motivo. É comum administradores excluírem registos de utilizadores que nunca enviaram mensagens, para reduzir o Tamanho da Base de Dados Tente registar-se novamente e participar das discussões do forum.'
   ), 
   array( 
      0 => 'O que é COPPA?', 
      1 => 'A COPPA (Child Online Privacy and Protection Act) é uma Lei de 1998 nos Estados Unidos que exije que os Websites apenas possam guardar informações de menores com meenos de 13 anos de Idade, com a devida autorização dos pais ou responsáveis, ou sob qualquer outro método legalmente aceito em que possa ser autorizada a guarda de informações desses menores. Se você está inseguro quanto a aplicação da seguinte lei, contacte um Conselho Judicial para maiores informações. Por Favor, note que o phpBB Team não pode ser responsável ou contactado para possíveis problemas legais e/ou judiciais de qualquer natureza, exceto sobre as linhas descritas por este sistema.', 
   ), 
   array( 
      0 => 'Por que não consigo me Registar?', 
      1 => 'É possível que o Administrador tenha banido o seu <u>Endereço de IP</u> ou adicionado como <u>Nome Proibido</u> o que você deseja registar. O registo também pode ter sido desactivado, por razões particulares. Para mais informações, contacte o administrador do forum.', 
   ), 
   array( 
      0 => 'O que a opcção de apagar Todos os Cookies faz?', 
      1 => 'Simplesmente exclui todos os cookies criados pelo phpBB3, os quais lhe mantém ligado e autenticado dentro do forum, e também permite o funcionamento de determinadas opções ativadas pelo administrador.', 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as <i>Preferências</i> e <i>Configuração de utilizadores</i>'
   ), 
   array( 
      0 => 'Como altero a minha configuração?', 
      1 => 'Toda a sua configuração (após o registo) é guardada na base de dados. Para alterá-la, clique em <u>Perfil</u> (normalmente no topo da página, dependendo da template em uso). A partir daí, você pode alterar a sua configuração.' 
   ), 
   array( 
      0 => 'A Data e Hora estão erradas!', 
      1 => 'As Datas provavelmente estão corretas, porém pode acontecer que você visualize as Horas de um Fuso Horário diferente de onde você normalmente se encontra ou inicialmente programou. Se esse é o seu caso, você deve alterar no seu Perfil a opcção para o <u>Fuso Horário</u> do seu local, ou seja, Brasil, Londres, Paris, Nova Iorque, Sidney, ou onde você estiver. Note que a mudança do fuso horário bem como a maior parte das opções de perfil, só é permitida a utilizadores registados. Se você ainda não se registou, é hora para que se registe no forum!'
   ), 
   array( 
      0 => 'Alterei o Fuso Horário, mas a Data e Hora continuam erradas!', 
      1 => 'Se você tem a certeza que o fuso horário que escolheu é o correto mas a hora não é a real, é possível que seja devido a mudança horária para ajustamento de hora diurna e noturna (ou horário de verão/inverno). O phpBB não se encontra desenhado para efetuar essas alterações automaticamente, como tal devem ser alteradas manualmente pelos utilizadores.'
   ), 
   array( 
      0 => 'A Língua de minha nacionalidade não está na lista!', 
      1 => 'A razão mais provável é o administrador não ter instalado esse idioma ou o phpBB ainda não ter sido Traduzido para a mesma. Peça ao Administrador que instale esse <u>Pacote de Línguas</u> e, caso não exista, você poderá criar uma Nova Tradução. Mais Informações, consulte a Página Oficial do <b>Grupo phpBB</b> (clicar no link ao fundo desta página).' 
   ), 
   array( 
      0 => 'Como posso exibir uma Imagem abaixo do meu Nome de Utilizador?', 
      1 => 'Deve haver duas imagens na parte inferior de cada nome de utilizador quando se vêem as mensagens - a primeira representa o Rank do Utilizador, normalmente em forma de blocos ou estrelas indicando a quantidade de mensagens que o Utilizador possua e seu respectivo Rank, ou o estatuto do mesmo. Abaixo dessas, poderá existir uma imagem maior conhecida como <u>Avatar</u>, que é normalmente única ou pertencente a cada utilizador. Está em decisão do Administrador permitir ou não o uso de avatares, e como os utilizadores podem enviar estas imagens. Se você não consegue enviar o seu, então possivelmente é decisão do administrador, tendo configurado o sistema para não o permitir. Pergunte-lhe a razão (temos certeza que existe uma boa resposta!).'
   ), 
   array( 
      0 => 'Como posso alterar o meu Rank?', 
      1 => 'De uma forma geral, o Utilizador Normal não pode alterar diretamente o seu Rank (os Ranks aparecem por debaixo do Nome de Utilizador em Tópicos e no \'Perfil\', dependendo da template em uso). A maior parte dos Ranks existentes, indicam o Número de mensagens enviadas ou indicam certo tipo de utilizadores, ou seja, Moderadores e Administradores poderão ter um Rank Especial. Por Favor, não abuse do forum enviando mensagens desnecessárias apenas para aumentar o seu Nível de Rank, pois os Administradores ou Moderadores poderão tomar alguma atitude contra você, caso verifiquem que esteja abusando.'
   ), 
   array( 
      0 => 'Quando clico no email de um Utilizador, uma Página aparece solicitando que eu faça o login?!', 
      1 => 'Desculpe, mas apenas utilizadores Registados poderão enviar <u>email</u> a pessoas através do formulário exclusivo do forum (caso o administrador tenha activado esta função). Isso é para evitar o uso malicioso do Sistema de email por utilizadores Anônimos.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as <i>Mensagens</i>' 
   ), 
   array( 
      0 => 'Como post um tópico no forum?', 
      1 => 'Isso é fácil, clique no botão respectivo tanto na secção como no tópico onde se encontre (dependendo da template em uso, mas normalmente os botões têm a designação de <i>Nova Mensagem</i>, <i>Novo Tópico</i> ou <i>Responder</i>). Talvez seja necessário o seu registo no forum para poder enviar mensagens. Existe uma lista de ações que lhe são permitidas, haja registo ou não, na parte inferior do lado direito da página de cada secção (Enviar Mensagens, Votar em Enquetes, etc.).' 
   ), 
   array( 
      0 => 'Como posso Editar ou apagar uma Mensagem?', 
      1 => 'A menos que seja um Administrador, ou Moderador, você apenas pode <u>Editar</u> ou <u>Apagar</u> as suas próprias mensagens. Pode editar uma mensagem (por vezes apenas por um período limitado após ser enviada) clicando no botão <u>editar</u> na parte superior da mensagem (dependendo da template em uso). Caso alguém já tenha respondido a essa mensagem, você encontrará um pequeno texto ao fundo, mencionando que foi editada e eventualmente quantas vezes. Isto não aparece apenas caso essa mensagem ainda não tenha respostas. Também não aparecerá caso a alteração seja efetuada por algum Administrador ou Moderador (possivelmente eles deixarão uma mensagem dizendo o que foi alterado e o motivo). Note que utilizadores Normais não podem apagar uma mensagem após alguém já ter enviado uma resposta.'
   ), 
   array( 
      0 => 'Como posso Adicionar Assinatura a uma Mensagem?', 
      1 => 'Para adicionar uma assinatura a uma mensagem, você deverá primeiro criar uma no seu Perfil no respectivo local. Uma vez criada, você poderá configurar o forum, também em Perfil, para <i>Sempre Anexar Minha Assinatura</i> às mensagens ou enviá-la apenas quando quiser, selecionando <u>Adicionar Assinatura</u> na lista de opções, por baixo da caixa de mensagem.' 
   ), 
   array( 
      0 => 'Como posso Adicionar uma Enquete?', 
      1 => 'Criar uma Enquete é fácil. Quando você envia um Tópico Novo (ou Edita a primeira mensagem de um tópico, caso tenha permissão para tal), encontra na parte inferior à caixa principal da mensagem, um painel com o Título <i>Adicionar Enquete</i> (se você não vê isto, é porque provavelmente não possui permissão para criar enquetes ou o tópico não é de sua autoria). Você deve escrever um Título para a Enquete e em seguida, escrever pelo menos Duas <u>Opções de Voto</u> (para adicionar uma opcção de votação, escreva o que pretende, e clique no botão <i>Adicionar opcção de Voto</i>). Você deverá também estipular um tempo limite para a enquete, sendo 0 ilimitado. Poderá acontecer de existir um limite no Número de Opções de Voto, estando esse limite ao critério e configuração do Administrador.' 
   ), 
   array( 
      0 => 'Como posso Editar ou apagar uma Enquete?', 
      1 => 'Da mesma forma que as mensagens, as enquetes apenas poderão ser editadas pelo seu Autor, Moderadores ou Administradores do forum. Para editar uma enquete, clique na primeira mensagem do tópico (esta mensagem é a que tem a enquete associada ao tópico). Caso ninguém tenha submetido Voto, os seus Autores podem apagar a enquete ou editar as suas opções de voto. Contudo, se os utilizadores já submeteram votos, apenas Moderadores e Administradores podem editar ou apagar essa enquete. Isso é para evitar com que sejam alteradas as opções de voto em enquetes em curso.'
   ), 
   array( 
      0 => 'Por que não consigo entrar em uma secção?', 
      1 => 'O acesso a algumas seções poderá estar limitado apenas a determinados utilizadores ou Grupos. Para ver, ler, enviar mensagens, etc., você precisa de uma autorização especial. Apenas o Moderador dessa secção e um Administrador podem permitir esse acesso. Entre em contato, caso ache necessário.'
   ), 
   array( 
      0 => 'Por que não posso Votar?', 
      1 => 'Apenas utilizadores Registados podem submeter os seus Votos (para impedir duplicação nos resultados). Caso você esteja registado, mas mesmo assim não consiga votar, então possivelmente não lhe foi atribuida permissão para tal.'
   ), 
   array( 
      0 => 'Porque eu não consigo anexar ficheiros?', 
      1 => 'Em algumas seções, anexar ficheiros pode estar restrito a alguns utilizadores ou Grupos. Para anexar um arquivo, você precisa de uma autorização especial. Apenas o Moderador do forum e os Administradores podem lhe dar esse acesso. Por Favor, contacte-os.'
   ), 
   array( 
      0 => 'Por que eu recebi uma Advertência?', 
      1 => 'Cada administrador possui suas próprias <u>Regras</u> para o seu Website. Se ele perceber que elas estão sendo ignoradas, você receberá uma advertência. Por Favor, note que esta é a decisão do administrador do forum, e o phpBB Group não possui autoridade nenhuma sobre a advertência enviada em seu website.' 
   ), 
   array( 
      0 => 'Como eu posso Denunciar Mensagens?', 
      1 => 'Se o administrador tiver activado esta opcção, vá até a mensagem que você deseja denunciar e verá um botão que serve para denunciar mensagens. Clicando ali, você será encaminhado às etapas necessárias para denunciar a mensagem.' 
   ), 
   array( 
      0 => 'O que é o botão Guardar no Painel de Mensagens?', 
      1 => 'Esta opcção lhe permite guardar o rascunho de uma determinada mensagem que você deseje enviar em um outro momento. Para recarregá-la, vá ao Painel de utilizadores e siga as devidas opções.'
   ), 
   array( 
      0 => 'O que a minha Mensagem necessita para ser aprovada?', 
      1 => 'O administrador pode decidir se na secção em que você está postando, as mensagens precisem ser revisadas ou não. E também é possível que o administrador tenha adicionado você a um Grupo de utilizadores que precise ter suas mensagens aprovadas antes de enviá-las ao forum. Por Favor, contacte o administrador para maiores informações.'
   ), 
   array( 
      0 => 'Como eu posso Levantar os meus Tópicos?', 
      1 => 'Clicando em â€œLevantar Tópicoâ€, quando você estiver visualizando o mesmo, você pode â€œlevantarâ€ o tópico para o topo da secção na primeira página. Porém, se você não ver a opcção, então esta ferramenta encontra-se desativada. E também é possível efetuar isto simplesmente respondendo ao tópico desejado. Entretanto, fique atento para as Regras do Website em que você está acessando.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os <i>Formatos</i> e <i>Tipos de Tópicos</i>' 
   ), 
   array( 
      0 => 'O que é BBCode?', 
      1 => 'O <u>BBCode</u> é uma implementação especial do HTML. A possibilidade de se usar BBCode nas suas mensagens é determinada pelo Administrador do forum. Adicionalmente, você pode poderá desactivar o BBCode em cada mensagem, seleccionando <b>Desactivar BBCode nesta Mensagem</b> abaixo da caixa principal de cada mensagem. BBCode por si mesmo é similar em estilo ao HTML, as Etiquetas (TAGs) são incluidas em Colchetes, como por <b>[exemplo]</b>, ao invés de &lt;exemplo&gt; proporcionando uma maior facilidade na formatação de seus textos e mensagens dentro do forum. Para Mais Informações, consulte o <i>Guia de BBCode</i>, acessível no Painel de Mensagens.' 
   ), 
   array( 
      0 => 'Posso usar HTML?', 
      1 => 'Não. Não é possível enviar mensagens em HTML neste forum. A maioria dos formatos utilizados no HTML podem ser reproduzidos na utilização das TAGs do BBCode.' 
   ), 
   array( 
      0 => 'O que são Smileys?', 
      1 => 'Os <u>Smileys</u>, ou Emoctions, são pequenas representações gráficas que podem ser usadas para expressar algum sentimento utilizando poucos caracteres, ou seja, :) quer dizer Feliz, :( quer dizer Triste. Uma lista completa de <u>Smileys</u> pode ser vista no formulário junto à caixa de cada mensagem. Tente evitar o uso excessivo dos Smileys, já que podem tornar uma mensagem ilegível, podendo o Administrador ou um Moderador excluí-los ou deletar a mensagem inteira.' 
   ), 
   array( 
      0 => 'Posso exibir Imagens?', 
      1 => 'As Imagens em geral, podem ser exibidas nas suas mensagens. Porém, não existe atualmente qualquer forma de armazenar imagens localmente com o phpBB, e então, você não pode exibir imagens guardadas no seu próprio PC (a menos que possua um servidor publicamente acessível), nem imagens armazenadas sob mecanismos que requeiram autenticação, como por exemplo Caixas de Correio Eletrónico de Hotmail ou Yahoo!, páginas protegidas por senha, etc. Para exibir uma Imagem na sua mensagem, você pode utilizar as TAGs BBcode <i>[img]http://endereço.da.imagem.com[/img]</i>. Para Mais Informações, consulte o <i>Guia de BBCode</i>, acessível no Painel de Mensagens.' 
   ), 
   array( 
      0 => 'O que são Anúncios Globais?', 
      1 => 'Os <u>Anúncios Globais</u> contém normalmente Informações Importantes e devem ser lidos logo que forem enviados. Eles irão aparecer no topo de todas as seções e também com o seu Painel de utilizadores. Se você pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo administrador.'
   ), 
   array( 
      0 => 'O que são Anúncios?', 
      1 => 'Os <u>Anúncios</u> contém normalmente Informações Importantes e devem ser lidos logo que forem enviados. Os Anúncios são automaticamente colocados no topo de cada página de cada secção onde são postados. Se você pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo administrador.' 
   ), 
   array( 
      0 => 'O que são Tópicos Fixos?', 
      1 => 'Os <u>Tópicos Fixos</u> aparecem abaixo dos Anúncios, e apenas na primeira página de cada secção. São Tópicos com conteúdo importante e devem ser lidos logo que enviados. Da mesma forma que os Anúncios, está ao critério do Administrador determinar as permissões necessárias para enviar Tópicos Fixos em cada secção.' 
   ), 
   array( 
      0 => 'O que são Tópicos Trancados?', 
      1 => 'Os <u>Tópicos Trancados</u> são assim colocados por um Administrador, ou Moderador de cada secção. Quando um tópico se encontra trancado, os utilizadores do forum não podem mais respondê-lo, e qualquer enquete em curso, logo será finalizada. Apenas Administradores e Moderadores podem responder nestes tópicos. Algum determinado Tópico pode ser Trancado por vários motivos.'
   ), 
   array( 
      0 => 'O que são Ícones de Tópicos?', 
      1 => 'Os <u>Ícones de Tópicos</u> são imagens que podem ser associadas com as mensagens para indicar o seu conteúdo. Se você pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo administrador.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os <i>Níveis de utilizadores</i> e <i>Grupos</i>'
   ), 
   array( 
      0 => 'O que são Administradores?', 
      1 => '<u>Administradores</u> são os utilizadores com o Nível Máximo de controle sobre todos os aspectos do forum. Podem controlar toda a operação das seções, incluindo criar, editar ou apagar secções, determinar permissões, banir utilizadores, criar Grupos de utilizadores ou Moderadores, etc. E ainda possuem todos os poderes de Moderador em todas as seções existentes.'
   ), 
   array( 
      0 => 'O que são Moderadores?', 
      1 => '<u>Moderadores</u> são os utilizadores (ou Grupos de utilizadores) em que seu trabalho é supervisionar diariamente o andamento das seções que lhes estejam designadas. Eles possuem o poder de editar ou apagar mensagens, trancar, destrancar, mover e subdividir tópicos nas seções onde são Moderadores. Geralmente os Moderadores fiscalizam mensagens que possam ir <i>Além do Assunto em Discussão</i> ou o uso de material abusivo ou ofensivo.'
   ), 
   array( 
      0 => 'O que são Grupos de utilizadores?',
      1 => '<u>Grupos de utilizadores</u> são uma forma dos Administradores agrupar utilizadores. Cada Utilizador pode pertencer a Vários Grupos (isto difere da maioria dos outros tipos de Quadros de Mensagens) e a cada Grupo podem ser dados direitos de acesso individuais. Isto torna mais fácil aos Administradores destinar vários utilizadores como Moderadores de uma determinada secção ou dar-lhes acesso a uma secção privada, etc.'
   ), 
   array( 
      0 => 'Como me inscrevo em um Grupo de utilizadores?',
      1 => 'Para se inscrever em um Grupo de utilizadores, clique no link de <i>Grupos</i> no topo da página (dependendo da template em uso), podendo então ver todos os Grupos. Nem todos os Grupos possuem um <i>acesso aberto</i>, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o Grupo se encontrar aberto, você poderá solicitar sua inscrição clicando no botão apropriado. O Líder do Grupo de utilizadores precisará aprovar a sua inscrição, podendo perguntar-lhe o motivo do mesmo. Por Favor, não insista a um Líder de Grupo caso a sua inscrição seja recusada. Ele deverá informá-lo a respeito de qualquer decisão.'
   ), 
   array( 
      0 => 'Como posso ser Líder de um Grupo?', 
      1 => 'Os Grupos de utilizadores são inicialmente criados pelo Administrador do forum o qual encarrega alguém de ser responsável pelo mesmo, no caso, o Líder do Grupo. Se está interessado em Criar um Grupo de utilizadores, você deverá primeiramente contactar o Administrador, ao qual deverá contactar com uma <u>Mensagem Particular</u> circunstanciada.'
   ), 
   array( 
      0 => 'Por que alguns Grupos aparecem em diferentes cores?', 
      1 => 'O administrador do forum pode atribuir Cores aos utilizadores de um determinado grupo, para identificá-los diante de outros utilizadores e grupos.'
   ), 
   array( 
      0 => 'O que é um Grupo Padrão?', 
      1 => 'Se você é utilizador de mais de um Grupo de utilizadores, será determinado qual Cor e Rank lhe serão atribuidos por padrão. O Administrador poderá lhe conceder a opcção de escolha do seu Grupo Padrão pelo Painel de utilizadores.'
   ), 
   array( 
      0 => 'O que é O Staff?', 
      1 => '<u>O Staff</u> é uma página que exibirá a Lista de Todos os utilizadores da Equipe do Forum, incluindo os Administradores e Moderadores com todos os seus respectivos detalhes.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as <i>Mensagens Particulares</i>' 
   ), 
   array( 
      0 => 'Não consigo Enviar Mensagens Particulares!', 
      1 => 'Existem três razões para que tal possa acontecer: Você não está Registado no Forum e/ou não se encontra Online, o Administrador terá desactivado a opcção de Mensagens Particulares em todo o forum ou o impede por algum motivo de enviar mensagens. Se este último é o seu caso, então você deverá perguntar ao Administrador qual o motivo, caso realmente não saiba.' 
   ), 
   array( 
      0 => 'Recebo Mensagens Particulares indesejáveis!', 
      1 => 'Você pode bloquear as mensagens particulares enviadas por um Utilizador em específico utilizando o seu Painel de utilizadores. Se estiver recebendo mensagens indesejáveis por parte de algum Utilizador, contacte o administrador do forum para que possa proibir o determinado utilizador de enviar este tipo de mensagens.'
   ), 
   array( 
      0 => 'Recebi de alguém neste forum Mensagens de email com Assuntos Irrelevantes ou Abusivos!', 
      1 => 'Embora o Sistema de emails deste forum possuir funções de segurança que tentem detectar utilizadores que enviem este tipo de mensagens, lamentamos que tal tenha acontecido. Você deve informar o acontecido ao administrador do forum com uma Cópia Completa do email recebido, sendo muito importante que inclua os cabeçalhos (nestes encontram-se os detalhes do utilizador que enviou o email). O Administrador poderá então agir em conformidade.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os <i>Amigos</i> e <i>Inimigos</i>' 
   ), 
   array( 
      0 => 'O que é a Lista de Amigos e Inimigos?', 
      1 => 'Você pode utilizar esta lista para organizar os outros utilizadores do forum. Os utilizadores adicionados na sua Lista de Amigos serão listados com o seu Painel de utilizadores com acesso rápido para ver seus Status Online e para enviá-los Mensagens Particulares. Se você solicitar ao Suporte de Templates, as Mensagens enviadas por estes utilizadores poderão aparecer em destaque. Se você adicionar um Utilizador na sua Lista de Inimigos, então qualquer mensagem enviada por ele, será ocultada de forma padrão.'
   ), 
   array( 
      0 => 'Como eu posso Adicionar/apagar de minha Lista de Amigos e Inimigos?', 
      1 => 'Você pode adicionar utilizadores na sua lista de duas formas. Através do Perfil de cada Utilizador, existe um link para adicioná-los à sua lista. De maneira alternativa, você pode adicionar utilizadores diretamente escrevendo os seus Nomes de utilizadores. Você pode também apagar utilizadores de sua lista utilizando a mesma página.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre a <i>Pesquisa</i>' 
   ), 
   array( 
      0 => 'Como eu posso Pesquisar?', 
      1 => 'Escrevendo um Termo de Pesquisa na respectiva página localizada no Índice do Forum, Visualizando Tópicos ou Seções. A Pesquisa Avançada pode ser acessada clicando no link â€œPesquisarâ€ que encontra-se disponível em todas as páginas do forum.' 
   ), 
   array( 
      0 => 'Por que a minha Pesquisa resultou em nenhuma ocorrência?', 
      1 => 'A Sua Pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB3. Seja mais específico e utilize as opções disponíveis com a Pesquisa Avançada.' 
   ), 
   array( 
      0 => 'Por que a minha Pesquisa resultou em uma página em branco!?', 
      1 => 'A sua Pesquisa resultou em inúmeras ocorrências. Use a Pesquisa Avançada e seja mais específico nos termos escritos e selecione seções onde possam ser pesquisados.' 
   ), 
   array( 
      0 => 'Como eu posso Pesquisar por utilizadores?',
      1 => 'Vá até a Página â€œutilizadoresâ€ e clique no link â€œPesquisar um Utilizadorâ€. Ao seleccionar, siga restritamente às opções descritas na página.'
   ), 
   array( 
      0 => 'Como eu posso Pesquisar minhas Próprias Mensagens e Tópicos?', 
      1 => 'As suas próprias mensagens podem ser exibidas clicando em â€œMensagens do Utilizadorâ€ através do Painel de utilizadores ou apenas pelo seu próprio Perfil. Para encontrar os seus Tópicos, utilize a Pesquisa Avançada e preencha as opções apropriadamentes.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre a <i>Subscrição de Tópicos</i> e <i>Marcadores</i>' 
   ), 
   array( 
      0 => 'Qual é a diferença existente entre os Marcadores e a Subscrição?', 
      1 => 'Os Marcadores no phpBB3 são muito parecidos com os marcadores de seu navegador. Você não será necessariamente alertado quando houver alguma atualização, mas você pode depois voltar ao tópico. Mas ao contrário disso, a Subscrição irá lhe avisar quando houver qualquer atualização ao tópico ou secção no forum pelo seu método ou métodos selecionados.' 
   ), 
   array( 
      0 => 'Como eu posso subscrever um Tópico ou secção específica?', 
      1 => 'Para subscrever uma secção específica, você deve perceber que ao entrar no forum, você visualizará um link nomeado â€œSubscrever a secçãoâ€. Isto irá lhe subscrever a secção da mesma forma que você gostaria para um tópico. Para subscrever um tópico, você pode tanto responder ao tópico e marcar a subscrição do mesmo, quanto clicar no link nomeado <u>Subscrever o Tópico</u> através do tópico em questão.' 
   ), 
   array( 
      0 => 'Como eu posso apagar minhas Subscrições?', 
      1 => 'Para apagar as suas subscrições, você simplesmente deverá ir ao Painel de utilizadores (UCP), e seguir as devidas opções de subscrição.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os <i>Anexos</i>' 
   ), 
   array( 
      0 => 'Quais os Anexos que são permitidos no forum?', 
      1 => 'Cada administrador pode activar ou desactivar os tipo de anexos que desejar. Se você não tem certeza sobre o que pode ser enviado, contacte o administrador para maiores informações.' 
   ), 
   array( 
      0 => 'Como eu posso encontrar Todos os meus Anexos?', 
      1 => 'Para encontrar a Lista de Anexos que você enviou, vá ao Painel de utilizadores (UCP), e siga os links para a secção de anexos.'
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre o <i>Sistema phpBB3</i>' 
   ), 
   array( 
      0 => 'Quem Escreveu o phpBB?', 
      1 => 'Este Software é produzido, publicado e com direitos reservados por <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. Está disponível sob a licensa <b>GNU</b> <i>General Public Licence</i> e pode ser distribuido gratuitamente. Verifique o link para Mais Informações.' 
   ), 
   array( 
      0 => 'Quem Traduziu o phpBB?', 
      1 => 'O phpBB foi Traduzido por <a href="http://www.alojagratis.org/" target="_blank">AlojaGratis</a>, sendo esta tradução gratuita e disponível no site Oficial no phpBB.Com. A Tradução do AlojaGratis é a Oficial da Lingua Portuguesa (Portugal). Para Mais Informações, visite o <a href="http://www.alojagratis.org/" target="_blank">AlojaGratis</a>!'
   ), 
   array( 
      0 => 'Porque não há a Função X?', 
      1 => 'Este Software foi escrito e licenciado pelo phpBB Group. Se pensa que alguma função pode ser adicionada, visite a nossa Página Oficial no phpBB.Com e veja o que o Grupo phpBB pode dizer sobre o assunto. Por Favor, não envie mensagens com Pedidos de Funções no Forum em phpBB.Com, o Grupo utiliza a sourceforge para resolver situações relacionadas com Funções Novas. Por Favor, leia cuidadosamente esse sistema para ver se alguma posição já foi tomada por nós, para a função em questão, seguindo então o procedimento lá mencionado.' 
   ), 
   array( 
      0 => 'Contatos sobre Questões abusivas e/ou ilegais relacionadas a este forum', 
      1 => 'Você deve contactar o Administrador do forum. Se você não souber quem seja, contacte um dos Moderadores perguntando a quem deve expor o assunto. No caso de mesmo assim não obter nenhuma resposta, você deve contactar o Dono do Domínio ou, caso o Forum esteja alojado num Servidor Grátis (como por exemplo, CJB.NET, Free Forums, Yahoo!, etc.), a Gerência desse mesmo serviço. Por Favor, note que phpBB Group não possui absolutamente nenhum controlo e não pode ser responsável sobre Quando, Onde e Por Quem este forum é utilizado. Não existe motivo em contactar o phpBB Group em relação a qualquer questão legal (interrupção e desistência, de responsabilidade, comentário difamatório, etc.) não diretamente relacionado com O Site phpBB.Com ou o Software discreto do phpBB por si próprio. Caso envie algum email ao phpBB Group acerca do uso de terceiros deste Software, poderá receber uma resposta concisa ou não receber resposta.' 
   ) 
); 

?>
