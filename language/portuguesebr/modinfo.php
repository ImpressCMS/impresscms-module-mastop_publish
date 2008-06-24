<?php
### =============================================================
### Mastop InfoDigital - Paix�o por Internet
### =============================================================
### Arquivo de Tradu��o para Informa��es do M�dulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital � 2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: modinfo.php,v 1.4 2007/06/18 20:20:38 topet05 Exp $
### =============================================================

//V1.0
define("MPU_MOD_NOME", "Mastop Publish");
define("MPU_MOD_DESC", "Crie p�ginas est�ticas para seu site!");
define("MPU_MOD_DIR", "mastop_publish");
define("MPU_MOD_TABELA1", "mpu_mpb_mpublish");
define("MPU_MOD_TABELA2", "mpu_fil_files");
define("MPU_MOD_TABELA3", "mpu_med_media");
define("MPU_MOD_TABELA4", "mpu_cfi_contentfiles");
define("MPU_MOD_TEMPLATE1", "mpu_index.tpl.html");
define("MPU_MOD_TEMPLATE1_DESC", "Layout da P�gina");
define("MPU_MOD_BLOCOS", "Blocos");


define("MPU_MOD_BLOCO1", "Menu");
define("MPU_MOD_BLOCO1_DESC", "Menu em CSS com Submenus");
define("MPU_MOD_BLOCO1_FILE", "mpu_menucss.bloco.php");
define("MPU_MOD_BLOCO1_SHOW", "mpu_menucss_exibe");
define("MPU_MOD_BLOCO1_EDIT", "mpu_menucss_edita");
define("MPU_MOD_BLOCO1_TEMPLATE", "mpu_menucss.block.tpl.html");

define("MPU_MOD_BLOCO2", "Navega��o");
define("MPU_MOD_BLOCO2_DESC", "Barra de Navega��o");
define("MPU_MOD_BLOCO2_FILE", "mpu_navigation.bloco.php");
define("MPU_MOD_BLOCO2_SHOW", "mpu_navigation_exibe");
define("MPU_MOD_BLOCO2_EDIT", "mpu_navigation_edita");

define("MPU_MOD_BLOCO3", "Veja Tamb�m");
define("MPU_MOD_BLOCO3_DESC", "Exibe as p�ginas que est�o dentro da mesma categoria que a p�gina atual");
define("MPU_MOD_BLOCO3_FILE", "mpu_related.bloco.php");
define("MPU_MOD_BLOCO3_SHOW", "mpu_related_exibe");
define("MPU_MOD_BLOCO3_EDIT", "mpu_related_edita");
define("MPU_MOD_BLOCO3_TEMPLATE", "mpu_related.block.tpl.html");


define("MPU_MOD_BLOCO4", "Menu em �rvore");
define("MPU_MOD_BLOCO4_DESC", "Menu em �rvore com Submenus");
define("MPU_MOD_BLOCO4_FILE", "mpu_menutree.bloco.php");
define("MPU_MOD_BLOCO4_SHOW", "mpu_menutree_exibe");
define("MPU_MOD_BLOCO4_EDIT", "mpu_menutree_edita");
define("MPU_MOD_BLOCO4_TEMPLATE", "mpu_menutree.block.tpl.html");


define("MPU_MOD_BLOCO5", "Menu Horizontal");
define("MPU_MOD_BLOCO5_DESC", "Menu Horizontal em CSS com Submenus");
define("MPU_MOD_BLOCO5_FILE", "mpu_menuhor.bloco.php");
define("MPU_MOD_BLOCO5_SHOW", "mpu_menuhor_exibe");
define("MPU_MOD_BLOCO5_EDIT", "mpu_menuhor_edita");
define("MPU_MOD_BLOCO5_TEMPLATE", "mpu_menuhor.block.tpl.html");

define("MPU_MOD_BUSCA_FUNC", "mpu_mpublish_busca");
define("MPU_MOD_WYSIWYG", "Usar editor visual para criar p�ginas?");
define("MPU_MOD_WYSIWYG_DESC", "Com o editor visual (WYSIWYG) voc� pode criar p�ginas com todos os recursos em HTML de forma mais r�pida, sem precisar saber programar.");
define("MPU_MOD_WYSIWYG_PATH", "Caminho para o Editor");
define("MPU_MOD_WYSIWYG_BT1B", "Bot�es do Editor - In�cio Linha 1");
define("MPU_MOD_WYSIWYG_BT1B_DESC", "Bot�es que aparecer�o no in�cio da primeira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT1", "Bot�es do Editor - Fim Linha 1");
define("MPU_MOD_WYSIWYG_BT1_DESC", "Bot�es que aparecer�o no fim da primeira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT2B", "Bot�es do Editor - In�cio Linha 2");
define("MPU_MOD_WYSIWYG_BT2B_DESC", "Bot�es que aparecer�o no in�cio da segunda linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT2", "Bot�es do Editor - Fim Linha 2");
define("MPU_MOD_WYSIWYG_BT2_DESC", "Bot�es que aparecer�o no fim da segunda linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT3B", "Bot�es do Editor - In�cio Linha 3");
define("MPU_MOD_WYSIWYG_BT3B_DESC", "Bot�es que aparecer�o no in�cio da terceira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT3", "Bot�es do Editor - Fim Linha 3");
define("MPU_MOD_WYSIWYG_BT3_DESC", "Bot�es que aparecer�o no fim da terceira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT4", "Bot�es do Editor - Linha 4");
define("MPU_MOD_WYSIWYG_BT4_DESC", "Bot�es que aparecer�o na quarta linha do editor visual.");
define("MPU_MOD_WYSIWYG_PLUGINS", "Plugins do Editor");
define("MPU_MOD_WYSIWYG_PLUGINS_DESC", "Digite os plugins que ser�o usados no editor visual (separados por v�rgulas)");
define("MPU_MOD_WYSIWYG_PATH_DESC", "Digite o caminho (path) para o TinyMCE a partir do diret�rio raiz do seu site (SEM BARRA NO FINAL!).");
define("MPU_MOD_WYSIWYG_LANG", "Linguagem padr�o do Editor");
define("MPU_MOD_WYSIWYG_LANG_DESC", "Digite o nome do arquivo de linguagem para o editor visual (Ex.: en). Para baixar mais pacotes de linguagem, <a href='http://tinymce.moxiecode.com/language.php' target='_blank'>clique aqui</a>.");
define("MPU_MOD_NOMES_ID", "Usar Texto no lugar do ID na URL?");
define("MPU_MOD_NOMES_ID_DESC", "Selecionando 'Sim', ser� usado o Texto do Menu no lugar do ID do conte�do na URL. O sistema aceita ambos por padr�o para trazer uma p�gina. Esta configura��o s� afeta os links gerados pelo sistema.");
define("MPU_MOD_MMAXFILESIZE", "Tamanho m�ximo para envio de m�dias.");
define("MPU_MOD_MMAXFILESIZE_DESC", "Valores em Kbytes");
define("MPU_MOD_MAXFILESIZE", "Tamanho m�ximo para envio de arquivos.");
define("MPU_MOD_MAXFILESIZE_DESC", "Valores em Kbytes");
define("MPU_MOD_GZIP", "Usar compacta��o GZIP no Editor?");
define("MPU_MOD_GZIP_DESC", "Se seu servidor suportar GZIP, este recurso usa um arquivo javascript compactado que faz com que o editor carregue mais rapidamente.<br /><b>Aten��o:</b> Para que este recurso funcione corretamente, o diret�rio raiz do Editor Visual (definido acima, no par�metro de configura��o '".MPU_MOD_WYSIWYG_PATH."') deve ter permiss�es de escrita!");
define("MPU_MOD_CONTENTMIMES", "Extens�es permitidas no gerenciador de arquivos de conte�do.");
define("MPU_MOD_CONTENTMIMES_DESC", "Selecione as extens�es permitidas para envio no gerenciador de arquivos de conte�do. Mantenha a tecla <b>CTRL</b> pressionada para selecionar mais de uma op��o.");
define("MPU_MOD_MIMETYPES", "Extens�es permitidas no gerenciador de arquivos.");
define("MPU_MOD_MIMETYPES_DESC", "Selecione as extens�es permitidas para envio no gerenciador de arquivos. Mantenha a tecla <b>CTRL</b> pressionada para selecionar mais de uma op��o.");
define("MPU_MOD_WYSIWYG_FRMTDATA", "Formato da Data para o Editor");
define("MPU_MOD_WYSIWYG_FRMTDATA_DESC", "<b>%d</b> representa 'Dia', <b>%m</b> representa 'M�s' e <b>%Y</b> representa 'Ano'");
define("MPU_MOD_WYSIWYG_FRMTHORA", "Formato da Data para o Editor");
define("MPU_MOD_WYSIWYG_FRMTHORA_DESC", "<b>%H</b> representa 'Hora', <b>%M</b> representa 'Minuto' e <b>%S</b> representa 'Segundo'");
define("MPU_MOD_IFRAME_WIDTH", "Largura para IFrames");
define("MPU_MOD_IFRAME_WIDTH_DESC", "Defina a largura (em pixels) usada nas p�ginas com IFrame");
define("MPU_MOD_IFRAME_HEIGHT", "Altura para IFrames");
define("MPU_MOD_IFRAME_HEIGHT_DESC", "Defina a altura (em pixels) usada nas p�ginas com IFrame");
define("MPU_MOD_RELATED", "Exibir links para p�ginas relacionadas no final de cada p�gina?");
define("MPU_MOD_RELATED_DESC", "Esta op��o permite exibir links para p�ginas que est�o na mesma categoria que a p�gina atual. <br />Voc� pode desabilitar esta op��o caso esteja usando o bloco 'P�ginas Relacionadas'");
define("MPU_MOD_NAVIGATION", "Exibir barra de navega��o no topo das p�ginas?");
define("MPU_MOD_NAVIGATION_DESC", "Esta op��o possibilita a exibi��o da barra de navega��o no topo das p�ginas. <br />Voc� pode desabilitar esta op��o caso esteja usando o bloco 'Barra de Navega��o'");
define("MPU_MOD_CAPTCHA", "Utilizar CAPTCHA nos coment�rios?");
define("MPU_MOD_CAPTCHA_DESC", "<a href='http://pt.wikipedia.org/wiki/CAPTCHA' target='_blank'>CAPTCHA</a> � uma t�cnica que solicita que o usu�rio escreva uma s�rie de letras ou n�meros que aparecem num quadro antes de enviar o coment�rio, para evitar que o sistema seja usado por m�quinas que vasculham a internet (biblioteca GD � requerida).");
define("MPU_MOD_CAPTCHA_LABEL", "C�digo de Seguran�a");
define("MPU_MOD_CAPTCHA_ERROR", "C�digo de Seguran�a Inv�lido!<br /> Tente Novamente");
define("MPU_MOD_HIGHLIGHT_SEARCH", "<b style='color: red'>Os seguintes termos de pesquisa foram destacados:</b> ");

// Administra��o - Menu
define('MPU_MOD_MENU_ADD','Adicionar Conte�do');
define('MPU_MOD_MENU_LNK','Gerenciar Arquivos HTML');
define('MPU_MOD_MENU_LST','Gerenciar Conte�dos');
define('MPU_MOD_MENU_MED','M�dias');
define('MPU_MOD_MENU_GER','Gerenciar');
define('MPU_MOD_MENU_FIL','Arquivos');


//Module Paths
define('MPU_MEDIA_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/media");
define('MPU_MEDIA_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/media");
define('MPU_FILES_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/files");
define('MPU_FILES_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/files");
define('MPU_HTML_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/html");
define('MPU_HTML_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/html");

//V1.1
define("MPU_MOD_CANEDIT", "Os autores podem editar as pr�prias p�ginas?");
define("MPU_MOD_CANEDIT_DESC", "Selecione 'sim' para que os autores (mesmo n�o estando no grupo de administradores) possam editar as pr�prias p�ginas.");
define("MPU_MOD_CANCREATE", "Os autores podem criar subp�ginas?");
define("MPU_MOD_CANCREATE_DESC", "Selecione 'sim' para que os autores (mesmo n�o estando no grupo de administradores) possam criar subp�ginas dentro das pr�prias p�ginas.");
define("MPU_MOD_CANDELETE", "Os autores podem excluir as pr�prias p�ginas?");
define("MPU_MOD_CANDELETE_DESC", "Selecione 'sim' para que os autores (mesmo n�o estando no grupo de administradores) possam excluir suas p�ginas.");

define("MPU_MOD_BLOCO6", "Menu P�ginas Relacionadas");
define("MPU_MOD_BLOCO6_DESC", "Menu contendo p�ginas relacionadas � p�gina atual");
define("MPU_MOD_BLOCO6_FILE", "mpu_menurelated.bloco.php");
define("MPU_MOD_BLOCO6_SHOW", "mpu_menurelated_exibe");
define("MPU_MOD_BLOCO6_EDIT", "mpu_menurelated_edita");
define("MPU_MOD_BLOCO6_TEMPLATE", "mpu_menurelated.block.tpl.html");


define("MPU_MOD_WYSIWYG_BKG", "Usar fundo branco no editor?");
define("MPU_MOD_WYSIWYG_BKG_DESC", "Ativando esta op��o, o fundo do editor visual ser� sempre branco e n�o herdar� as configura��es do seu tema atual.");

define("MPU_MOD_HOME_ID", "ID da P�gina Principal");
define("MPU_MOD_HOME_ID_DESC", "Digite o ID da p�gina que abrir� por padr�o ao acessar o m�dulo. Deixe em branco para que a p�gina principal seja sempre a �ltima p�gina adicionada.");