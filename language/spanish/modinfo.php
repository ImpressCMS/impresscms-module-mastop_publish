<?php
### =============================================================
### Mastop InfoDigital - Paixão por Internet
### =============================================================
### Arquivo de Tradução para Informações do Módulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital © 2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: modinfo.php,v 1.2 2007/06/18 20:20:46 topet05 Exp $
### =============================================================
### Traducido por: Carlos Ponce de León 18/03/2007
### -------------------------------------------------------------
### carlos@centropyme.com
### =============================================================
//Modificaciones de la traducción, corrección de errores y adiciones para V 1.1 por debianus
//V1.0
define("MPU_MOD_NOME", "Mastop Publish");
define("MPU_MOD_DESC", "Cree páginas estáticas en su sitio");
define("MPU_MOD_DIR", "mastop_publish");
define("MPU_MOD_TABELA1", "mpu_mpb_mpublish");
define("MPU_MOD_TABELA2", "mpu_fil_files");
define("MPU_MOD_TABELA3", "mpu_med_media");
define("MPU_MOD_TABELA4", "mpu_cfi_contentfiles");
define("MPU_MOD_TEMPLATE1", "mpu_index.tpl.html");
define("MPU_MOD_TEMPLATE1_DESC", "Estructura de página");
define("MPU_MOD_BLOCOS", "Bloques");

define("MPU_MOD_BLOCO1", "Menú");
define("MPU_MOD_BLOCO1_DESC", "Menú Css con submenús");
define("MPU_MOD_BLOCO1_FILE", "mpu_menucss.bloco.php");
define("MPU_MOD_BLOCO1_SHOW", "mpu_menucss_exibe");
define("MPU_MOD_BLOCO1_EDIT", "mpu_menucss_edita");
define("MPU_MOD_BLOCO1_TEMPLATE", "mpu_menucss.block.tpl.html");

define("MPU_MOD_BLOCO2", "Navegación");
define("MPU_MOD_BLOCO2_DESC", "Menú de navegación");
define("MPU_MOD_BLOCO2_FILE", "mpu_navigation.bloco.php");
define("MPU_MOD_BLOCO2_SHOW", "mpu_navigation_exibe");
define("MPU_MOD_BLOCO2_EDIT", "mpu_navigation_edita");

define("MPU_MOD_BLOCO3", "Ver también");
define("MPU_MOD_BLOCO3_DESC", "Muestra las páginas de la misma categoría");
define("MPU_MOD_BLOCO3_FILE", "mpu_related.bloco.php");
define("MPU_MOD_BLOCO3_SHOW", "mpu_related_exibe");
define("MPU_MOD_BLOCO3_EDIT", "mpu_related_edita");
define("MPU_MOD_BLOCO3_TEMPLATE", "mpu_related.block.tpl.html");

define("MPU_MOD_BLOCO4", "Menu en árbol");
define("MPU_MOD_BLOCO4_DESC", "Menú en Arbol con submenús");
define("MPU_MOD_BLOCO4_FILE", "mpu_menutree.bloco.php");
define("MPU_MOD_BLOCO4_SHOW", "mpu_menutree_exibe");
define("MPU_MOD_BLOCO4_EDIT", "mpu_menutree_edita");
define("MPU_MOD_BLOCO4_TEMPLATE", "mpu_menutree.block.tpl.html");

define("MPU_MOD_BLOCO5", "Menú horizontal");
define("MPU_MOD_BLOCO5_DESC", "Menú Horizontal con Submenús");
define("MPU_MOD_BLOCO5_FILE", "mpu_menuhor.bloco.php");
define("MPU_MOD_BLOCO5_SHOW", "mpu_menuhor_exibe");
define("MPU_MOD_BLOCO5_EDIT", "mpu_menuhor_edita");
define("MPU_MOD_BLOCO5_TEMPLATE", "mpu_menuhor.block.tpl.html");

define("MPU_MOD_BUSCA_FUNC", "mpu_mpublish_busca");
define("MPU_MOD_WYSIWYG", "¿Utilizar el editor visual para crear páginas?");
define("MPU_MOD_WYSIWYG_DESC", "Con el editor visual (WYSIWYG) puede crear facilmente páginas con todos los recursos HTML, sin ningún conocimiento de programación.");
define("MPU_MOD_WYSIWYG_PATH", "Ruta del editor");
define("MPU_MOD_WYSIWYG_BT1B", "Botones del editor - Inicio Línea 1");
define("MPU_MOD_WYSIWYG_BT1B_DESC", "Botones que se muestran al principio de la primera línea del editor.");
define("MPU_MOD_WYSIWYG_BT1", "Botones de editor - Final Línea 1");
define("MPU_MOD_WYSIWYG_BT1_DESC", "Botones que se muestran al final de la primera línea del editor.");
define("MPU_MOD_WYSIWYG_BT2B", "Botones de editor - Inicio Línea 2");
define("MPU_MOD_WYSIWYG_BT2B_DESC", "Botones que se muestran al principio de la segunda línea del editor.");
define("MPU_MOD_WYSIWYG_BT2", "Botones de Editor - Final Línea 2");
define("MPU_MOD_WYSIWYG_BT2_DESC", "Botones que se muestran al final de la segunda línea del editor.");
define("MPU_MOD_WYSIWYG_BT3B", "Botones de Editor - Inicio Línea 3");
define("MPU_MOD_WYSIWYG_BT3B_DESC", "Botones que se muestran al principio de la tercera línea del editor.");
define("MPU_MOD_WYSIWYG_BT3", "Botones de Editor - Final Línea 3");
define("MPU_MOD_WYSIWYG_BT3_DESC", "Botones que se muestran al final de la tercera línea del editor.");
define("MPU_MOD_WYSIWYG_BT4", "Botones de Editor - Línea 4");
define("MPU_MOD_WYSIWYG_BT4_DESC", "Botones que se muestran en la cuarta línea del editor.");
define("MPU_MOD_WYSIWYG_PLUGINS", "Módulos del Editor");
define("MPU_MOD_WYSIWYG_PLUGINS_DESC", "Introduzca los módulos que se utilizarán en el editor (separados por comas ',')");
define("MPU_MOD_WYSIWYG_PATH_DESC", "Introduzca la ruta de TinyMCE empezando en el raiz del sitio (¡No popner la barra al final!).");
define("MPU_MOD_WYSIWYG_LANG", "Idioma por defecto del Editor");
define("MPU_MOD_WYSIWYG_LANG_DESC", "Introduzca el nombre del idioma del editor (Ej.: en). PAra descargar más idiomas, <a href='http://tinymce.moxiecode.com/language.php' target='_blank'>haga clic aqui</a>.");
define("MPU_MOD_NOMES_ID", "¿Usar texto en vez de la ID en la URL?");
define("MPU_MOD_NOMES_ID_DESC", "Si escoge 'Si' se utilizará el texto del menú en lugar del ID en la URL. El sistema acepta ambas opciones por defecto para cargar una página. Esta opción afecta únicamente a los enlaces generados por el sistema.");
define("MPU_MOD_MMAXFILESIZE", "Tamaño máximo de los medios a enviar.");
define("MPU_MOD_MMAXFILESIZE_DESC", "en Kbytes");
define("MPU_MOD_MAXFILESIZE", "Tamaño máximo de los ficheros a enviar.");
define("MPU_MOD_MAXFILESIZE_DESC", "en Kbytes");
define("MPU_MOD_GZIP", "¿Usar compresión GZIP en el Editor?");
define("MPU_MOD_GZIP_DESC", "Si su servidor soporta compresión GZIP, este recurso utiliza un script de java compactado que permite cargar más rápidamente el editor.<br /><b>¡ATENCION:</b> Para que funcione correctamente, el directorio raiz del editor (definido anteriormente en la opción de configuración '".MPU_MOD_WYSIWYG_PATH."') debe tener permisos de escritura!");
define("MPU_MOD_CONTENTMIMES", "Extensiones permitidas en el gestor de contenidos.");
define("MPU_MOD_CONTENTMIMES_DESC", "Seleccione las extensiones permitidas para subir archivos en el gestor de contenidos. Mantenga pulsada la tecla <b>CTRL</b> para selecionar más de una opción.");
define("MPU_MOD_MIMETYPES", "Extensiones permitidas en el gestor de archivos.");
define("MPU_MOD_MIMETYPES_DESC", "Seleccione las extensiones permitidas para subir archivos en el gestor de ficheros. Mantenga pulsada la tecla <b>CTRL</b> para selecionar más de una opción.");
define("MPU_MOD_WYSIWYG_FRMTDATA", "Formato de fechas");
define("MPU_MOD_WYSIWYG_FRMTDATA_DESC", "<b>%d</b> para 'Día', <b>%m</b> para 'Mes' y <b>%Y</b> para 'Año'");
define("MPU_MOD_WYSIWYG_FRMTHORA", "Formato de hora");
define("MPU_MOD_WYSIWYG_FRMTHORA_DESC", "<b>%H</b> para 'Hora', <b>%M</b> para 'Minutos' y <b>%S</b> para 'Segundos'");
define("MPU_MOD_IFRAME_WIDTH", "Ancho de IFrames");
define("MPU_MOD_IFRAME_WIDTH_DESC", "Define el ancho (en pixels) para tilizar con los marcos");
define("MPU_MOD_IFRAME_HEIGHT", "Alto de IFrames");
define("MPU_MOD_IFRAME_HEIGHT_DESC", "Define el alto (en pixels) para utilizar con los marcos");
define("MPU_MOD_RELATED", "¿Mostrar enlaces a páginas relacionadas al final de cada página?");
define("MPU_MOD_RELATED_DESC", "Esta opción permite mostrar los enlaces a laas páginas que pertenecen a la misma categoría que la actual. <br />Puede deshabilitar esta opción si utiliza el bloque 'Páginas relacionadas'");
define("MPU_MOD_NAVIGATION", "¿Mostrar la barra de navegación al principio de las páginas?");
define("MPU_MOD_NAVIGATION_DESC", "Esta opción muestra las opciones de navegación al inicio de cada página. <br />Puede deshabilitar esta opción si utiliza el bloque 'Barra de Navegation'");
define("MPU_MOD_CAPTCHA", "¿Utilizar CAPTCHA en los comentarios?");
define("MPU_MOD_CAPTCHA_DESC", "<a href='http://en.wikipedia.org/wiki/CAPTCHA' target='_blank'>CAPTCHA</a> es una técnica que solicita al usuario que escriba una secuencia de letras o números que se muestran en un recuadro antes de enviar un comentario para evitar que el sistema sea utilizado por robots (se necesita la ibrería GD).");
define("MPU_MOD_CAPTCHA_LABEL", "Código de Seguridad");
define("MPU_MOD_CAPTCHA_ERROR", "Código de seguridad no válido<br /> Pruebe otra vez");
define("MPU_MOD_HIGHLIGHT_SEARCH", "<b style='color: red'>Se han resaltado los siguientes términos de búsqueda:</b> ");

// Administração - Menu
define('MPU_MOD_MENU_ADD','Añadir Contenido');
define('MPU_MOD_MENU_LNK','Gestionar ficheros HTML');
define('MPU_MOD_MENU_LST','Gestionar contenidos');
define('MPU_MOD_MENU_MED','Medios');
define('MPU_MOD_MENU_GER','Gestionar');
define('MPU_MOD_MENU_FIL','Ficheros');

//Module Paths
define('MPU_MEDIA_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/media");
define('MPU_MEDIA_PATH',XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/media");
define('MPU_FILES_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/files");
define('MPU_FILES_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/files");
define('MPU_HTML_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/html");
define('MPU_HTML_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/html");

//V1.1
define("MPU_MOD_CANEDIT", "¿Pueden los autores modificar sus propias páginas?");
define("MPU_MOD_CANEDIT_DESC", "Seleccione 'Si' para que el autor tenga permisos para modificar sus propias páginas aunque el mismo no pertenezca al grupo 'Administradores'.");
define("MPU_MOD_CANCREATE", "¿Pueden los autores crear subpáginas?");
define("MPU_MOD_CANCREATE_DESC", "Seleccione 'Si' para que el autor tenga permisos para crear subpáginas aunque el mismo no pertenezca al grupo 'Administradores'.");
define("MPU_MOD_CANDELETE", "¿Pueden los autores eliminar sus propias páginas?");
define("MPU_MOD_CANDELETE_DESC", "Seleccione 'Si' para que el autor tenga permisos para eliminar sus propias páginas aunque el mismo no pertenezca al grupo 'Administradores'.");

define("MPU_MOD_BLOCO6", "Menú de páginas relacionadas");
define("MPU_MOD_BLOCO6_DESC", "Menú que contiene las páginas relacionadas por su contenido con la actual.");
define("MPU_MOD_BLOCO6_FILE", "mpu_menurelated.bloco.php");
define("MPU_MOD_BLOCO6_SHOW", "mpu_menurelated_exibe");
define("MPU_MOD_BLOCO6_EDIT", "mpu_menurelated_edita");
define("MPU_MOD_BLOCO6_TEMPLATE", "mpu_menurelated.block.tpl.html");


define("MPU_MOD_WYSIWYG_BKG", "¿Usar fondo blanco en el editor?");
define("MPU_MOD_WYSIWYG_BKG_DESC", "Activando esta opción el fondo del editor siempre se mostrará con color blanco y no interferirá en las configuraciones del tema que use.");

define("MPU_MOD_HOME_ID", "ID de la página principal");
define("MPU_MOD_HOME_ID_DESC", "Introduzca la ID de la página que se abrirá de forma predeterminada cuando se acceda al módulo. Deje esto en blanco para que la última página que se cree sea la principal.");