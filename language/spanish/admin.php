<?php
### =============================================================
### Mastop InfoDigital - Paixão por Internet
### =============================================================
### Arquivo de Tradução para Administração
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital © 2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: admin.php,v 1.2 2007/06/18 20:20:46 topet05 Exp $
### =============================================================
### Traducido por: Carlos Ponce de León 18/03/2007
### -------------------------------------------------------------
### carlos@centropyme.com
### =============================================================
//Modificaciones de la traducción, corrección de errores y adiciones para V 1.1 por debianus
// V 1.0
define("MPU_ADM_403", "No tiene autorización para ver esta página");
define("MPU_ADM_TITULO", "Administración - Mastop Publish");
define("MPU_ADM_HTMLTITULO", "Mastop Publish - Gestión de pág. HTML");
define("MPU_ADM_FILETITULO", "Mastop Publish - Gestión de ficheros");
define("MPU_ADM_PGTITULO", "Mastop Publish - Gestión de contenidos");
define("MPU_ADM_MEDIATITULO", "Mastop Publish - Gestión de medios");
define("MPU_ADM_SEARCH", "Buscar");
define("MPU_ADM_UPLOAD", "Cargar página HTML");
define("MPU_ADM_NOVO", "Añadir contenido");
define("MPU_ADM_EPAGE", "Modificar contenido");
define("MPU_ADM_NMEDIA", "Envíar medio");
define("MPU_ADM_EMEDIA", "Modificar medio");
define("MPU_ADM_DMEDIA", "Borrar medio");
define("MPU_ADM_NFILE", "Envíar fichero");
define("MPU_ADM_NPG", "Enviar fichero de contenido");
define("MPU_ADM_EPG", "Modificar fichero de contenido");
define("MPU_ADM_EFILE", "Modificar fichero");
define("MPU_ADM_NOVO_PAGINA", "Añadir página");
define("MPU_ADM_DELETATITULO", "Borrar página HTML");
define("MPU_ADM_INFO", "Información");
define("MPU_ADM_BY", "<b>Creado por:</b>");
define("MPU_ADM_DTCRIADO", "<b>Creado el:</b>");
define("MPU_ADM_DTATUALIZADO", "<b>Última actualización:</b>");
define("MPU_ADM_VIEWS", "<b>Visitas:</b>");
define("MPU_ADM_LIMPACONT", "Poner las visitas a cero");
define("MPU_ADM_EDITAR", "Modificar contenido");
define("MPU_ADM_GRUPOS", "Grupos");
define("MPU_ADM_MENUP", "Menú principal");
define("MPU_ADM_MPB_10_ID", "ID");
define("MPU_ADM_MPB_10_IDPAI", "Mostrar");
define("MPU_ADM_MPB_30_MENU", "Texto del menú");
define("MPU_ADM_MPB_30_TITULO", "Título");
define("MPU_ADM_MPB_35_CONTEUDO", "Contenido");
define("MPU_ADM_MPB_12_SEMLINK", "Sin enlace");
define("MPU_ADM_MPB_FROMFILE", "Crear basándose en el fichero");
define("MPU_ADM_MPB_FRAME", "IFrame");
define("MPU_ADM_MPB_FRAME_URL", "Iframe URL:");
define("MPU_ADM_MPB_30_ARQUIVO", "Fichero");
define("MPU_ADM_MPB_HTML", "Código HTML");
define("MPU_ADM_MPB_11_VISIVEL", "Visible");
define("MPU_ADM_FIL_10_ID", "ID");
define("MPU_ADM_FIL_30_NOME", "Nombre");
define("MPU_ADM_FIL_30_ARQUIVO", "Fichero");
define("MPU_ADM_FIL_10_TAMANHO", "Tamaño");
define("MPU_ADM_FIL_30_MIME", "Tipo");
define("MPU_ADM_FIL_22_DATA", "Enviado");
define("MPU_ADM_FIL_12_EXIBIR", "¿Mostrar la lista de enlaces del editor?");

define("MPU_ADM_CFI_10_ID", "ID");
define("MPU_ADM_CFI_30_NOME", "Nombre");
define("MPU_ADM_CFI_30_ARQUIVO", "Fichero");
define("MPU_ADM_CFI_10_TAMANHO", "Tamaño");
define("MPU_ADM_CFI_30_MIME", "Tipo");
define("MPU_ADM_CFI_22_DATA", "Enviado");
define("MPU_ADM_CFI_12_EXIBIR", "¿Mostrar lista de páginas?");

define("MPU_ADM_SELECIONE", "Seleccione");
define("MPU_ADM_MPB_11_VISIVEL_1", "Sólo menú");
define("MPU_ADM_MPB_11_VISIVEL_2", "Menú y páginas relacionadas");
define("MPU_ADM_MPB_11_VISIVEL_3", "sólo páginas relacionadas");
define("MPU_ADM_MPB_11_VISIVEL_4", "Invisible");
define("MPU_ADM_MPB_11_ABRIR", "Abrir enlace en");
define("MPU_ADM_MPB_11_ABRIR_0", "Misma página");
define("MPU_ADM_MPB_11_ABRIR_1", "Página nueva");
define("MPU_ADM_MPB_12_COMENTARIOS", "¿Permitir comentarios?");
define("MPU_ADM_MPB_12_COMENTARIOS2", "Comentarios");
define("MPU_ADM_MPB_12_EXIBESUB", "¿Mostrar submenús?");
define("MPU_ADM_MPB_12_RECOMENDAR", "¿Mostrar enlace 'Recomendado'?");
define("MPU_ADM_MPB_12_IMPRIMIR", "¿Mostrar enlace 'Imprimir'?");
define("MPU_ADM_MPB_22_CRIADO", "Creado el");
define("MPU_ADM_MPB_22_ATUALIZADO", "Última actualización");
define("MPU_ADM_MPB_10_ORDEM", "Orden");
define("MPU_ADM_MPB_10_CONTADOR", "Visitas");
define("MPU_ADM_ERRO1", "Error al guardar el contenido en la base de datos");
define("MPU_ADM_ERRO2", "Error: página no encontrada");
define("MPU_ADM_ERRO_MED404", "Error: medio no encontrado");
define("MPU_ADM_ERRO_FIL404", "Error: fichero no encontrado");
define("MPU_ADM_WYSIWYG_PATHERROR", "Error: para usar el compresión GZIP con el editor, la carpeta %s debe tener permisos de escritura (CHMOD 777)");
define("MPU_ADM_FILEERROR", "Error: 'files' debe tener permisos de escritura (CHMOD 777)");
define("MPU_ADM_HTMLERROR", "Error: 'html' debe tener permisos de escritura (CHMOD 777)");
define("MPU_ADM_MEDIAERROR", "Error: 'media' debe tener permisos de escritura (CHMOD 777)");
define("MPU_ADM_PAGEERRORDB", "Error al guardar el fichero en la base de datos");
define("MPU_ADM_SENDERROR", "Error al enviar el fichero");
define("MPU_ADM_ERR_SELECT_MEDIA", "Error: debe seleccionar un medio");
define("MPU_ADM_ERR_SELECT_FILE", "Error: debe seleccionar un fichero");
define("MPU_ADM_EXIBIR", "Mostrar ");
define("MPU_ADM_EXIBINDO", "Mostrando páginas desde %u° hasta %u° de <b>%u</b>.");
define("MPU_ADM_EXIBINDO_MEDIA", "Mostrando medios desde %u° hasta %u° de <b>%u</b>.");
define("MPU_ADM_EXIBINDO_FILES", "Mostrando ficheros desde %u° hasta %u° de <b>%u</b>.");
define("MPU_ADM_PORPAGINA", "registros por página");
define("MPU_ADM_FILTROS", "Filtros");
define("MPU_ADM_ACAO", "Acción");
define("MPU_ADM_SEMRESULT", "No hay registros");
define("MPU_ADM_GRP_ERR_SEL", "Seleccione un registro");
define("MPU_ADM_GRP_ACTION", "Acciones de grupo: ");
define("MPU_ADM_GRP_DEL", "Borrar seleccionado");
define("MPU_ADM_GRP_DEL_SURE", "¿Desea borrar los registros seleccionados?");
define("MPU_ADM_SUCESS1", "Información enviada correctamente");
define("MPU_ADM_SUCESS2", "Información actualizada");
define("MPU_ADM_DEL_SUCESS", "Se borró(borraron) %u páginas(s)");
define("MPU_ADM_DELFIL_SUCESS", "Fichero borrado");
define("MPU_ADM_DELMED_SUCESS", "Medio borrado");
define("MPU_ADM_SENMED_SUCESS", "Medio enviado correctamente");
define("MPU_ADM_SENFIL_SUCESS", "Fichero enviado correctamente");
define("MPU_ADM_CONFIRMA_DEL", "¿Desea realmente borrar la página <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DELFIL", "¿Desea realmente borrar el fichero <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DELPG", "¿Desea realmente borrar el fichero <b># %u</b> - %s y TODAS las páginas relacionadas?");
define("MPU_ADM_CONFIRMA_DELMED", "¿Desea realmente borrar el medio <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DEL_CATIMG", "¿Desea realmente borrar esta categoría y todas sus imágenes?");
define("MPU_ADM_CONFIRMA_LIMPACONT", "¿Desea realmente borrar las visitas por página <b># %u</b> - %s?");
define("MPU_ADM_CONFIRMA_DEL_SUB", "¿Desea realmente borrar la página <b># %u</b> - %s?<br><b>ATENCION</b> Esta página contiene %u sub-página(s) que también sera borrada(s)");
define("MPU_ADM_BROWSER_TITULO", "Buscar");
define("MPU_ADM_BROWSER_MED_TITULO", "Buscar medios");
define("MPU_ADM_BROWSER_FIL_TITULO", "Buscar ficheros");
define("MPU_ADM_BROWSER_GER_IMG", "Categorías");
define("MPU_ADM_BROWSER_GER_MED", "Medios");
define("MPU_ADM_BROWSER_GER_FIL", "Fichero");
define("MPU_ADM_BROWSER_NIMG", "Enviar Imagen");
define("MPU_ADM_BROWSER_NCAT", "Crear Categoría");
define("MPU_ADM_BROWSER_IMGERRO_NOCAT", "Error: No hay categorías. Añada una categoría.");
define("MPU_ADM_MED_10_ID", "ID");
define("MPU_ADM_MED_30_NOME", "Nombre del Medio");
define("MPU_ADM_MED_30_ARQUIVO", "Fichero");
define("MPU_ADM_MED_10_ALTURA", "Alto");
define("MPU_ADM_MED_10_LARGURA", "Ancho");
define("MPU_ADM_MED_10_TAMANHO", "Tamaño");
define("MPU_ADM_MED_12_EXIBIR", "¿Mostrar en la lista del editor?");
define("MPU_ADM_MED_22_DATA", "Enviado el");
define("MPU_ADM_MED_10_TIPO", "Tipo");
define("MPU_ADM_MED_10_TIPO_1", "Flash (.swf)");
define("MPU_ADM_MED_10_TIPO_2", "QuickTime (.mov)");
define("MPU_ADM_MED_10_TIPO_3", "Shockwave (.dcr)");
define("MPU_ADM_MED_10_TIPO_4", "Windows Media (.wmv)");
define("MPU_ADM_MED_10_TIPO_5", "Real Media (.rm)");
define("MPU_ADM_CONTENTS", "Contenidos");
define("MPU_ADM_BLOCKS", "Bloques");
define("MPU_ADM_BANNER", "Banner");
define("MPU_ADM_SITENAME", "Nombre del sitio");
define("MPU_ADM_SLOGAN", "Eslogan");
define("MPU_ADM_ADMINMAIL", "Correo electrónico del administrador");
define("MPU_ADM_SITEURL", "URL del sitio");
define("MPU_ADM_UID", "ID Usuario");
define("MPU_ADM_USERNAME", "Nombre Usuario");
define("MPU_ADM_USERLOGIN", "Login");
define("MPU_ADM_UEMAIL", "Email");
define("MPU_ADM_USERURL", "URL");
define("MPU_ADM_USERPOSTS", "Mensaje del usuario");//User Posting

define("MPU_ADM_FEEDBACK", "Opiniones");
define("MPU_ADM_FEEDBACKN", "Enviar opiniones");
define("MPU_ADM_CHKVERSION", "Buscar actualizaciones");

define("MPU_ADM_YNAME", "Su nombre");
define("MPU_ADM_YEMAIL", "Su correo electrónico");
define("MPU_ADM_YSITE", "Sitio");
define("MPU_ADM_FEEDTYPE", "Tipos de opinión<br /><span style='font-size:10px; font-weight:normal'>* Las opiniones serán publicadas en la página principal de Mastop Publish</span>");
define("MPU_ADM_TBUGS", "Error");
define("MPU_ADM_TESTIMONIAL", "Testimono");
define("MPU_ADM_TSUGGESTION", "Sugerencia");
define("MPU_ADM_TFEATURES", "Recursos");
define("MPU_ADM_TOTHERS", "Otros");
define("MPU_ADM_DESC", "Descripción");
define("MPU_ADM_FEEDSUCCESS", "Opinión enviada");

// V1.1
define("MPU_ADM_USR_10_UID", "Autor");
define("MPU_ADM_MPB_EXTERNAL", "Enlace externo");
define("MPU_ADM_MPB_EXTERNAL_URL", "URL que será enlazada");

define("MPU_ADM_SHOWHIDEMENU", "Mostrar/Ocultar el menú");
define("MPU_ADM_SHOW_INLINE_MODE", "Desagrupar páginas");
define("MPU_ADM_SHOW_NESTED_MODE", "Agrupar páginas");
define("MPU_ADM_SHOWSUBS", "Mostrar subpáginas");
define("MPU_ADM_SUBS", "Subpáginas");
define("MPU_ADM_CLONE", "-- Duplicar --");
define("MPU_ADM_CONFIRMA_CLONE", "¿Está seguro de que desea duplicar la página <b># %u</b> - %s?");
define("MPU_ADM_TOGGLE_EDITOR", "Editor Text area / Editor visual");