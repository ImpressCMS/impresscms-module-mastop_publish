<?php
### =============================================================
### Mastop InfoDigital - Paix�o por Internet
### =============================================================
### Arquivo de Tradu��o para Administra��o
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital � 2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: admin.php,v 1.5 2007/06/18 20:20:38 topet05 Exp $
### =============================================================

// V1.0
define("MPU_ADM_403", "Voc� n�o tem permiss�o para acessar esta p�gina!");
define("MPU_ADM_TITULO", "Mastop Publish - Administra��o");
define("MPU_ADM_HTMLTITULO", "Mastop Publish - Administra��o de P�ginas HTML");
define("MPU_ADM_FILETITULO", "Mastop Publish - Administra��o de Arquivos");
define("MPU_ADM_PGTITULO", "Mastop Publish - Administra��o de Arquivos de Conte�do");
define("MPU_ADM_MEDIATITULO", "Mastop Publish - Administra��o de M�dias");
define("MPU_ADM_SEARCH", "Procurar");
define("MPU_ADM_UPLOAD", "Fazer upload de p�gina HTML");
define("MPU_ADM_NOVO", "Adicionar Conte�do");
define("MPU_ADM_EPAGE", "Editar Conte�do");
define("MPU_ADM_NMEDIA", "Enviar M�dia");
define("MPU_ADM_EMEDIA", "Editar M�dia");
define("MPU_ADM_DMEDIA", "Deletar M�dia");
define("MPU_ADM_NFILE", "Enviar Novo Arquivo");
define("MPU_ADM_NPG", "Enviar Novo Arquivo de Conte�do");
define("MPU_ADM_EPG", "Editar Arquivo de Conte�do");
define("MPU_ADM_EFILE", "Editar Arquivo");
define("MPU_ADM_NOVO_PAGINA", "Adicionar P�gina");
define("MPU_ADM_DELETATITULO", "Deletar P�gina HTML");
define("MPU_ADM_INFO", "Informa��es");
define("MPU_ADM_BY", "<b>Criado por:</b>");
define("MPU_ADM_DTCRIADO", "<b>Criado em:</b>");
define("MPU_ADM_DTATUALIZADO", "<b>�ltima Atualiza��o:</b>");
define("MPU_ADM_VIEWS", "<b>Visualiza��es:</b>");
define("MPU_ADM_LIMPACONT", "Zerar Visualiza��es");
define("MPU_ADM_EDITAR", "Editar Conte�do");
define("MPU_ADM_GRUPOS", "Grupos");
define("MPU_ADM_MENUP", "Menu Principal");
define("MPU_ADM_MPB_10_ID", "ID");
define("MPU_ADM_MPB_10_IDPAI", "Exibir em");
define("MPU_ADM_MPB_30_MENU", "Texto do Menu");
define("MPU_ADM_MPB_30_TITULO", "T�tulo");
define("MPU_ADM_MPB_35_CONTEUDO", "Conte�do");
define("MPU_ADM_MPB_12_SEMLINK", "Sem Link");
define("MPU_ADM_MPB_FROMFILE", "Criar � partir de arquivo");
define("MPU_ADM_MPB_FRAME", "IFrame");
define("MPU_ADM_MPB_FRAME_URL", "URL do IFrame:");
define("MPU_ADM_MPB_30_ARQUIVO", "Arquivo");
define("MPU_ADM_MPB_HTML", "C�digo HTML");
define("MPU_ADM_MPB_11_VISIVEL", "Visibilidade");
define("MPU_ADM_FIL_10_ID", "ID");
define("MPU_ADM_FIL_30_NOME", "Nome");
define("MPU_ADM_FIL_30_ARQUIVO", "Arquivo");
define("MPU_ADM_FIL_10_TAMANHO", "Tamanho");
define("MPU_ADM_FIL_30_MIME", "Tipo");
define("MPU_ADM_FIL_22_DATA", "Enviado em");
define("MPU_ADM_FIL_12_EXIBIR", "Exibir na lista de links do editor visual?");

define("MPU_ADM_CFI_10_ID", "ID");
define("MPU_ADM_CFI_30_NOME", "Nome");
define("MPU_ADM_CFI_30_ARQUIVO", "Arquivo");
define("MPU_ADM_CFI_10_TAMANHO", "Tamanho");
define("MPU_ADM_CFI_30_MIME", "Tipo");
define("MPU_ADM_CFI_22_DATA", "Enviado em");
define("MPU_ADM_CFI_12_EXIBIR", "Exibir na lista de p�ginas?");

define("MPU_ADM_SELECIONE", "Selecione");
define("MPU_ADM_MPB_11_VISIVEL_1", "Apenas no Menu");
define("MPU_ADM_MPB_11_VISIVEL_2", "Menu e P�ginas Relacionadas");
define("MPU_ADM_MPB_11_VISIVEL_3", "Apenas P�ginas Relacionadas");
define("MPU_ADM_MPB_11_VISIVEL_4", "Invis�vel");
define("MPU_ADM_MPB_11_ABRIR", "Abrir link em");
define("MPU_ADM_MPB_11_ABRIR_0", "Mesma P�gina");
define("MPU_ADM_MPB_11_ABRIR_1", "Nova P�gina");
define("MPU_ADM_MPB_12_COMENTARIOS", "Permitir Coment�rios?");
define("MPU_ADM_MPB_12_COMENTARIOS2", "Coment�rios");
define("MPU_ADM_MPB_12_EXIBESUB", "Exibir submenus?");
define("MPU_ADM_MPB_12_RECOMENDAR", "Exibir Link 'Recomendar'?");
define("MPU_ADM_MPB_12_IMPRIMIR", "Exibir Link 'Imprimir'?");
define("MPU_ADM_MPB_22_CRIADO", "Criado em");
define("MPU_ADM_MPB_22_ATUALIZADO", "�ltima Atualiza��o");
define("MPU_ADM_MPB_10_ORDEM", "Ordem");
define("MPU_ADM_MPB_10_CONTADOR", "Visualiza��es");
define("MPU_ADM_ERRO1", "Erro ao gravar o conte�do na base de dados!");
define("MPU_ADM_ERRO2", "Erro! P�gina n�o Encontrada!");
define("MPU_ADM_ERRO_MED404", "Erro! M�dia n�o Encontrada!");
define("MPU_ADM_ERRO_FIL404", "Erro! Arquivo n�o Encontrado!");
define("MPU_ADM_WYSIWYG_PATHERROR", "Erro! Para usar a compacta��o GZIP no editor, a pasta %s deve ter permiss�es de escrita! (CHMOD 777)");
define("MPU_ADM_FILEERROR", "Erro! Pasta 'files' deve ter permiss�o para escrita! (CHMOD 777)");
define("MPU_ADM_HTMLERROR", "Erro! Pasta 'html' deve ter permiss�o para escrita! (CHMOD 777)");
define("MPU_ADM_MEDIAERROR", "Erro! Pasta 'media' deve ter permiss�o para escrita! (CHMOD 777)");
define("MPU_ADM_PAGEERRORDB", "Erro ao salvar o arquivo no banco de dados!");
define("MPU_ADM_SENDERROR", "Erro ao enviar arquivo!");
define("MPU_ADM_ERR_SELECT_MEDIA", "Erro! Selecione uma M�dia!");
define("MPU_ADM_ERR_SELECT_FILE", "Erro! Selecione um Arquivo!");
define("MPU_ADM_EXIBIR", "Exibir ");
define("MPU_ADM_EXIBINDO", "Exibindo do %u� ao %u� de <b>%u</b> p�ginas.");
define("MPU_ADM_EXIBINDO_MEDIA", "Exibindo do %u� ao %u� de <b>%u</b> m�dias.");
define("MPU_ADM_EXIBINDO_FILES", "Exibindo do %u� ao %u� de <b>%u</b> arquivos.");
define("MPU_ADM_PORPAGINA", "registros por p�gina");
define("MPU_ADM_FILTROS", "Filtros");
define("MPU_ADM_ACAO", "A��o");
define("MPU_ADM_SEMRESULT", "Nenhum Registro Encontrado!");
define("MPU_ADM_GRP_ERR_SEL", "Selecione um registro!");
define("MPU_ADM_GRP_ACTION", "A��es em Grupo: ");
define("MPU_ADM_GRP_DEL", "Apagar Selecionados");
define("MPU_ADM_GRP_DEL_SURE", "Deseja Apagar os Registros Selecionados?");
define("MPU_ADM_SUCESS1", "Informa��es enviadas com sucesso!");
define("MPU_ADM_SUCESS2", "Informa��es Atualizadas!");
define("MPU_ADM_DEL_SUCESS", "%u p�gina(s) foram deletadas com sucesso!");
define("MPU_ADM_DELFIL_SUCESS", "Arquivo deletado com sucesso!");
define("MPU_ADM_DELMED_SUCESS", "M�dia deletada com sucesso!");
define("MPU_ADM_SENMED_SUCESS", "M�dia enviada com sucesso!");
define("MPU_ADM_SENFIL_SUCESS", "Arquivo enviado com sucesso!");
define("MPU_ADM_CONFIRMA_DEL", "Tem certeza que deseja Apagar a P�gina <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DELFIL", "Tem certeza que deseja Apagar o Arquivo <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DELPG", "Tem certeza que deseja Apagar o Arquivo <b># %u</b> - %s e TODAS as p�ginas ligadas a ele?");
define("MPU_ADM_CONFIRMA_DELMED", "Tem certeza que deseja Apagar a M�dia <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DEL_CATIMG", "Tem certeza que deseja apagar esta categoria e todas as imagens contidas nela?");
define("MPU_ADM_CONFIRMA_LIMPACONT", "Tem certeza que deseja apagar as visualiza��es da p�gina <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DEL_SUB", "Tem certeza que deseja Apagar a P�gina <b># %u</b> - %s?<br><b>ATEN��O!</b> Nesta p�gina cont�m %u sub-p�gina(s) que tamb�m ser�o deletadas!");
define("MPU_ADM_BROWSER_TITULO", "Localizar");
define("MPU_ADM_BROWSER_MED_TITULO", "Pesquisar M�dias");
define("MPU_ADM_BROWSER_FIL_TITULO", "Pesquisar Arquivos");
define("MPU_ADM_BROWSER_GER_IMG", "Categorias");
define("MPU_ADM_BROWSER_GER_MED", "M�dias");
define("MPU_ADM_BROWSER_GER_FIL", "Arquivos");
define("MPU_ADM_BROWSER_NIMG", "Enviar Imagem");
define("MPU_ADM_BROWSER_NCAT", "Criar Categoria");
define("MPU_ADM_BROWSER_IMGERRO_NOCAT", "Erro: Nenhuma categoria encontrada. Adicione uma categoria.");
define("MPU_ADM_MED_10_ID", "ID");
define("MPU_ADM_MED_30_NOME", "Nome da M�dia");
define("MPU_ADM_MED_30_ARQUIVO", "Arquivo");
define("MPU_ADM_MED_10_ALTURA", "Altura");
define("MPU_ADM_MED_10_LARGURA", "Largura");
define("MPU_ADM_MED_10_TAMANHO", "Tamanho");
define("MPU_ADM_MED_12_EXIBIR", "Exibir na Lista do Editor Visual?");
define("MPU_ADM_MED_22_DATA", "Enviado em");
define("MPU_ADM_MED_10_TIPO", "Tipo");
define("MPU_ADM_MED_10_TIPO_1", "Flash (.swf)");
define("MPU_ADM_MED_10_TIPO_2", "QuickTime (.mov)");
define("MPU_ADM_MED_10_TIPO_3", "Shockwave (.dcr)");
define("MPU_ADM_MED_10_TIPO_4", "Windows Media (.wmv)");
define("MPU_ADM_MED_10_TIPO_5", "Real Media (.rm)");
define("MPU_ADM_CONTENTS", "Conte�dos");
define("MPU_ADM_BLOCKS", "Blocos");
define("MPU_ADM_BANNER", "Banner");
define("MPU_ADM_SITENAME", "Nome do Site");
define("MPU_ADM_SLOGAN", "Slogan");
define("MPU_ADM_ADMINMAIL", "E-mail do Administrador");
define("MPU_ADM_SITEURL", "URL do Site");
define("MPU_ADM_UID", "ID do Usu�rio");
define("MPU_ADM_USERNAME", "Nome do Usu�rio");
define("MPU_ADM_USERLOGIN", "Login do Usu�rio");
define("MPU_ADM_UEMAIL", "E-mail do Usu�rio");
define("MPU_ADM_USERURL", "URL do Usu�rio");
define("MPU_ADM_USERPOSTS", "Postagens do Usu�rio");

define("MPU_ADM_FEEDBACK", "Feedback");
define("MPU_ADM_FEEDBACKN", "Enviar Feedback");
define("MPU_ADM_CHKVERSION", "Checar Nova Vers�o");

define("MPU_ADM_YNAME", "Seu Nome");
define("MPU_ADM_YEMAIL", "Seu E-mail");
define("MPU_ADM_YSITE", "Site");
define("MPU_ADM_FEEDTYPE", "Tipo de Feedback<br /><span style='font-size:10px; font-weight:normal'>* Depoimentos enviados ser�o publicados na p�gina do Mastop Publish</span>");
define("MPU_ADM_TBUGS", "Bug");
define("MPU_ADM_TESTIMONIAL", "Depoimento");
define("MPU_ADM_TSUGGESTION", "Sugest�o");
define("MPU_ADM_TFEATURES", "Recursos");
define("MPU_ADM_TOTHERS", "Outros");
define("MPU_ADM_DESC", "Descri��o");
define("MPU_ADM_FEEDSUCCESS", "Feedback enviado com sucesso!");


// V1.1
define("MPU_ADM_USR_10_UID", "Autor");
define("MPU_ADM_MPB_EXTERNAL", "Link Externo");
define("MPU_ADM_MPB_EXTERNAL_URL", "URL do Link");

define("MPU_ADM_SHOWHIDEMENU", "Exibir / Ocultar Menu");
define("MPU_ADM_SHOW_INLINE_MODE", "Desagrupar P�ginas");
define("MPU_ADM_SHOW_NESTED_MODE", "Agrupar P�ginas");
define("MPU_ADM_SHOWSUBS", "Exibir Sub-P�ginas");
define("MPU_ADM_SUBS", "Sub-P�ginas");
define("MPU_ADM_CLONE", "-- Clone --");
define("MPU_ADM_CONFIRMA_CLONE", "Tem certeza que deseja Clonar a P�gina <b># %u</b> - %s?");
define("MPU_ADM_TOGGLE_EDITOR", "�rea de Texto / Editor Visual");