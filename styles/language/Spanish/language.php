<?php 
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

/*
 *  Spanish (ES-es)
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
	'admin_cp' => 'AdminCP', 
	'invalid_token' => 'Token no válido, inténtelo de nuevo.',
	'invalid_action' => 'Acción no válida',
	'successfully_updated' => 'Actualizado correctamente',
	'settings' => 'Configuración',
	'confirm_action' => 'Confirme acción',
	'edit' => 'Editar',
	'actions' => 'Acciones',
	'task_successful' => 'Tarea ejecutada correctamante',
	
	// Admin login
	're-authenticate' => 'Por favor, identifícate',
	
	// Admin sidebar
	'index' => 'Información general',
	'core' => 'Principal',
	'custom_pages' => 'Páginas Personalizadas',
	'general' => 'General',
	'forums' => 'Foros',
	'users_and_groups' => 'Usuarios y Grupos',
	'minecraft' => 'Minecraft',
	'style' => 'Estilo',
	'addons' => 'Complementos',
	'update' => 'Actualizar',
	'misc' => 'Misceláneo',
	
	// Admin index page
	'statistics' => 'Estadísticas',
	'registrations_per_day' => 'Registros por día (últimos 7 días)',
	
	// Admin core page
	'general_settings' => 'Configuración General',
	'modules' => 'Módulos',
	'module_not_exist' => '¡El módulo no existe!',
	'module_enabled' => 'Módulo activado.',
	'module_disabled' => 'Módulo desactivado.',
	'site_name' => 'Nombre del sitio',
	'language' => 'Idioma',
	'voice_server_not_writable' => 'core/voice_server.php no es modificable. Verifique permisos de escritura',
	'email' => 'Correo',
	'incoming_email' => 'Dirección e-mail de entrada',
	'outgoing_email' => 'Dirección e-mail de salida',
	'outgoing_email_help' => 'Sólo necesario si la función de correo de PHP está activada',
	'use_php_mail' => '¿Usar la función mail() de PHP?',
	'use_php_mail_help' => 'Recomendado: activar. Si su sitio envia correos electrónicos, por favor, desactívelo y edite core/email.php con la configuración del corero.',
	'use_gmail' => '¿Usar Gmail para enviar correo?',
	'use_gmail_help' => 'Sólo disponible si la función de correo de PHP está desactivada. Si elije no usar Gmail, se usará el protocolo SMTP. De todas formas, edite la configuración en core/email.php.',
	'enable_mail_verification' => 'Habilitar verificación de cuenta vía e-mail?',
	'enable_email_verification_help' => 'Habilitando esto hara que los usuarios nuevos tengan que verificar su cuenta vía email para completar el registro.',
	'pages' => 'Páginas',
	'enable_or_disable_pages' => 'Páginas para Habilitar/Deshabilitar aquí.',
	'enable' => 'Habilitar',
	'disable' => 'Deshabilitar',
	'maintenance_mode' => 'Foro en modo mantención',
	'forum_in_maintenance' => 'Foro en mantención.',
	'unable_to_update_settings' => 'Unable to update settings. Please ensure no fields are left empty.',
	'editing_google_analytics_module' => 'Editing Google Analytics module',
	'tracking_code' => 'Tracking Code',
	'tracking_code_help' => 'Insert the tracking code for Google Analytics here, including the surrounding script tags.',
	'google_analytics_help' => 'See <a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">this guide</a> for more information, following steps 1 to 3.',
	'social_media_links' => 'Social Media Links',
	'youtube_url' => 'YouTube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_widget_id' => 'Twitter Widget ID',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'registration' => 'Registration',
	'registration_warning' => 'Having this module disabled will also disable new members registering on your site.',
	'google_recaptcha' => 'Enable Google reCAPTCHA',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_terms_and_conditions' => 'Registration Terms and Conditions',
	'voice_server_module' => 'Voice Server Module',
	'only_works_with_teamspeak' => 'This module currently only works with TeamSpeak and Discord',
	'discord_id' => 'Discord Server ID',
	'voice_server_help' => 'Please enter the details for the ServerQuery user',
	'ip_without_port' => 'IP (without port)',
	'voice_server_port' => 'Port (usually 10011)',
	'virtual_port' => 'Virtual Port (usually 9987)',
	'permissions' => 'Permissions:',
	'view_applications' => 'View Applications?',
	'accept_reject_applications' => 'Accept/Reject Applications?',
	'questions' => 'Questions:',
	'question' => 'Question',
	'type' => 'Type',
	'options' => 'Options',
	'options_help' => 'Each option on a new line; can be left empty (dropdowns only)',
	'no_questions' => 'No questions added yet.',
	'new_question' => 'New Question',
	'editing_question' => 'Editing Question',
	'delete_question' => 'Delete Question',
	'dropdown' => 'Dropdown',
	'text' => 'Text',
	'textarea' => 'Text Area',
	'question_deleted' => 'Question Deleted',
	'use_followers' => 'Use followers?',
	'use_followers_help' => 'If disabled, the friends system will be used.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Seleccione una página para editarla.',
	'page' => 'Página:',
	'url' => 'URL:',
	'page_url' => 'URL de la página',
	'page_url_example' => '(Precedido de "/", por ejemplo /help/)',
	'page_title' => 'Título de la página',
	'page_content' => 'Contenido de la página',
	'new_page' => 'Nueva página',
	'page_successfully_created' => 'Página creada correctamente',
	'page_successfully_edited' => 'Página editada correctamente',
	'unable_to_create_page' => 'No se ha podido crear la página.',
	'unable_to_edit_page' => 'No se ha podido editar la página.',
	'create_page_error' => 'Por favor, asegúrese que ha introducido una URL entre 1 y 20 caracteres, un título entre 1 y 30, y el contenido de la página tener entre 5 y 20480 caracteres.',
	'delete_page' => 'Borrar página',
	'confirm_delete_page' => '¿Seguro que quiere borrar la página?',
	'page_deleted_successfully' => 'Página borrada.',
	'page_link_location' => 'Mostar página en:',
	'page_link_navbar' => 'Barra de navegación',
	'page_link_more' => 'Barra de navegación con menú "Mas"',
	'page_link_footer' => 'Pie de página',
	'page_link_none' => 'No page link',
	
	// Admin forum page
	'labels' => 'Etiquetas de tema',
	'new_label' => 'Nueva etiqueta',
	'no_labels_defined' => 'No se han definido etiquetas',
	'label_name' => 'Nombre de etiqueta',
	'label_type' => 'Tipo de etiqueta',
	'label_forums' => 'Etiqueta de Foros',
	'label_creation_error' => 'Error al crear la etiqueta. Por favor, asegúrese que no tiene más de 32 caracteres y ha especificado el tipo.',
	'confirm_label_deletion' => '¿Seguro que quiere borrar esta etiqueta?',
	'editing_label' => 'Editar etiqueta',
	'label_creation_success' => 'Etiqueta creada correctamente',
	'label_edit_success' => 'Etiqueta editada correctamente',
	'label_default' => 'Predeterminado',
	'label_primary' => 'Primario',
	'label_success' => 'Correcto',
	'label_info' => 'Información',
	'label_warning' => 'Aviso',
	'label_danger' => 'Peligro',
	'new_forum' => 'Nuevo foro',
	'forum_layout' => 'Características del Foro',
	'table_view' => 'Vista de tabla',
	'latest_discussions_view' => 'Ver último mensaje',
	'create_forum' => 'Crear foro',
	'forum_name' => 'Nombre del foro',
	'forum_description' => 'Descripción del foro',
	'delete_forum' => 'Borrar foro',
	'move_topics_and_posts_to' => 'Move mensaje y respuestas a',
	'delete_topics_and_posts' => 'Borra mensaje y respuestas',
	'parent_forum' => 'Foro padre',
	'has_no_parent' => 'No tiene padre',
	'forum_permissions' => 'Permisos del foro',
	'can_view_forum' => 'Puede ver el foro:',
	'can_create_topic' => 'Crear mensajes en:',
	'can_post_reply' => 'Puede responder:',
	'display_threads_as_news' => '¿Mostrar hilos y noticias en la página principal?',
	'input_forum_title' => 'Input a forum title.',
	'input_forum_description' => 'Input a forum description.',
	'forum_name_minimum' => 'The forum name must be a minimum of 2 characters.',
	'forum_description_minimum' => 'The forum description must be a minimum of 2 characters.',
	'forum_name_maximum' => 'The forum name must be a maximum of 150 characters.',
	'forum_description_maximum' => 'The forum description must be a maximum of 255 characters.',
	
	// Admin Users and Groups page
	'users' => 'Usuarios',
	'new_user' => 'Nuevo usuario',
	'created' => 'Creado',
	'user_deleted' => 'Usuario borrado',
	'validate_user' => 'Validar usuario',
	'update_uuid' => 'Actualizar UUID',
	'unable_to_update_uuid' => 'No se puede actualizar UUID.',
	'update_mc_name' => 'Actualizar nombre de Minecraft',
	'reset_password' => 'Borrar Contraseña',
	'punish_user' => 'Castigar Usuario',
	'delete_user' => 'Borrar Usuario',
	'minecraft_uuid' => 'UUID de Minecraft',
	'ip_address' => 'Dirección IP',
	'ip' => 'IP:',
	'other_actions' => 'Otras acciones:',
	'disable_avatar' => 'Desactivar avatar',
	'confirm_user_deletion' => '¿Seguro que quiere borrar el usuario {x}?', // Don't replace "{x}"
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_group' => 'Nuevo Grupo',
	'id' => 'ID',
	'name' => 'Nombre',
	'create_group' => 'Crear Grupo',
	'group_name' => 'Nombre del grupo',
	'group_html' => 'HTML del Grupo',
	'group_html_lg' => 'HTML extendido del Grupo',
	'donor_group_id' => 'ID Paquete de compra',
	'donor_group_id_help' => '<p>Este es el ID del paquete en Buycraft, MinecraftMarket o MCStock.</p><p>Puede estar vacío.</p>',
	'donor_group_instructions' => 	'<p>Los grupos de paquetes deben ser creados en orden inverso, <strong>de menor valor a mayor valor</strong>.</p>
									<p>Por ejemplo. Un paquete de $10 debe ser creado antes que uno de $20.</p>',
	'delete_group' => 'Borrar grupo',
	'confirm_group_deletion' => 'Seguro que deseas borrar el grupo {x}?', // Don't replace "{x}"
	'group_staff' => '¿Es un grupo de administración?',
	'group_modcp' => '¿Puede el grupo ver el panel de moderación?',
	'group_admincp' => '¿Puede el grupo ver AdminCP?',
	'group_name_required' => 'You must insert a group name.',
	'group_name_minimum' => 'The group name must be a minimum of 2 characters.',
	'group_name_maximum' => 'The group name must be a maximum of 20 characters.',
	'html_maximum' => 'The group HTML must be a maximum of 1024 characters.',
	'select_user_group' => 'The user must be in a group.',
	'uuid_max_32' => 'The UUID must be a maximum of 32 characters.',
	'cant_delete_root_user' => 'Can\'t delete the root user!',
	'cant_modify_root_user' => 'Can\'t modify the root user\'s group.',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Configuración de Minecraft',
	'use_plugin' => '¿Usar el plugin Nameless de Minecraft?',
	'force_avatars' => '¿Forzar los avatares de Minecraft?',
	'uuid_linking' => '¿Activar enlaces al UUID?',
	'use_plugin_help' => 'utilizando el módulo permite sincronizar el nivel, registrarse en el juego y generar incidencias.',
	'uuid_linking_help' => 'Si se deshabilita la cuenta del usuario no se enlazará con en UUID. Es muy recomendable que esté activado.',
	'plugin_settings' => 'Configuración de Plugins',
	'confirm_api_regen' => '¿Quiere generar una nueva cadena para la API?',
	'servers' => 'Servidores',
	'new_server' => 'Nuevo Servidor',
	'confirm_server_deletion' => '¿Seguro que quiere eliminar este servidor?',
	'main_server' => 'Servidor Principal',
	'main_server_help' => 'El servidor al que se conectan los jugadores. Por lo general, se trata de la instancia BungeeCord.',
	'choose_a_main_server' => 'Elegir servidor principal.',
	'external_query' => '¿Usar consulta externa?',
	'external_query_help' => '¿Utilice una API externa para consultar el servidor de Minecraft? Sólo utilice esto si la consulta interna no funciona. Es muy recomendable que no esté activada.',
	'editing_server' => 'Editar servidor {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'Dirección IP (con puerto) (numérica o dominio)',
	'server_ip_with_port_help' => 'Esta es la IP que será mostrada a los usuarios. No se usará para consultas.',
	'server_ip_numeric' => 'IP del Servidor (con puerto) (usar IP numérica)',
	'server_ip_numeric_help' => 'Esta es la IP que será consultada, porfavor usa la IP numérica. No se mostrará a los usuarios.',
	'show_on_play_page' => '¿Mostar en la página de Juegos?',
	'pre_17' => 'Anterior a la versión 1.7 de Minecraft?',
	'server_name' => 'Nombre del servidor',
	'invalid_server_id' => 'ID del servidor errónea',
	'show_players' => '¿Mostrar la lista de jugadores en la página de Juegos?',
	'server_edited' => 'Servidor editado correctamente',
	'server_created' => 'Servidor creado correctamente',
	'query_errors' => 'Error de peticiones',
	'query_errors_info' => 'Los siguientes errores le ayudarán a diagnosticar problemas con su servidor.',
	'no_query_errors' => 'No hay registro de errores',
	'date' => 'Fecha:',
	'port' => 'Puerto:',
	'viewing_error' => 'Ver Error',
	'confirm_error_deletion' => '¿Seguro que quiere eliminar este error?',
	'display_server_status' => 'Mostrar modulo de estado del servidor?',
	'server_name_required' => 'You must insert a server name.',
	'server_ip_required' => 'You must insert the server\'s IP.',
	'server_name_minimum' => 'The server name must be a minimum of 2 characters.',
	'server_ip_minimum' => 'The server IP must be a minimum of 2 characters.',
	'server_name_maximum' => 'The server name must be a maximum of 20 characters.',
	'server_ip_maximum' => 'The server IP must be a maximum of 64 characters.',
	'purge_errors' => 'Purge Errors',
	'confirm_purge_errors' => 'Are you sure you want to purge all query errors?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Temas',
	'templates' => 'Plantillas',
	'installed_themes' => 'Temas instalados',
	'installed_templates' => 'Plantillas instaladas',
	'installed_addons' => 'Complementos instalados',
	'install_theme' => 'Instalar tema',
	'install_template' => 'Instalar plantilla',
	'install_addon' => 'Instalar complemento',
	'install_a_theme' => 'Instalar un tema',
	'install_a_template' => 'Instalar una plantilla',
	'install_an_addon' => 'Instalar un complemento',
	'active' => 'Activo',
	'activate' => 'Activar',
	'deactivate' => 'Desactivar',
	'theme_install_instructions' => 'Por favor, suba los temas en el directorio <strong>styles/themes</strong>. Luego presione el botón de "Buscar".',
	'template_install_instructions' => 'Por favor, suba las plantilas en el directorio <strong>styles/templates</strong>. Luego presione el botón de "Buscar".',
	'addon_install_instructions' => 'Por favor, suba los complementos en el directorio <strong>addons</strong>. Luego presione el botón de "Buscar".',
	'addon_install_warning' => 'Los complementos se instalaran por su cuenta y riesgo. Haga una copia de seguridad antes de proceder',
	'scan' => 'Buscar',
	'theme_not_exist' => '¡El tema no existe!',
	'template_not_exist' => '¡La plantalla no existe!',
	'addon_not_exist' => '¡El añadido no existe!',
	'style_scan_complete' => 'Finalizado. Los nuevos estilos se han instalado.',
	'addon_scan_complete' => 'Finalizado, todos los complementos se han instalado.',
	'theme_enabled' => 'Tema activado.',
	'template_enabled' => 'Plantilla activada.',
	'addon_enabled' => 'Complemento activado.',
	'theme_deleted' => 'Tema borrado.',
	'template_deleted' => 'Plantilla borrada.',
	'addon_disabled' => 'Complemento desactivado.',
	'inverse_navbar' => 'Barra de navegación inversa',
	'confirm_theme_deletion' => '¿Seguro que desea borrar el tema <strong>{x}</strong>?<br /><br />El tema se eliminará de su directorio <strong>styles/themes</strong>.', // Don't replace {x}
	'confirm_template_deletion' => '¿Seguro que desea borrar la plantilla <strong>{x}</strong>?<br /><br />La plantilla se eliminará de su directorio <strong>styles/templates</strong>.', // Don't replace {x}
	
	// Admin Misc page
	'other_settings' => 'Otra configuración',
	'enable_error_reporting' => '¿Activar reporte de errores?',
	'error_reporting_description' => 'Esto sólo debe ser usado para depuración, Es muy recomendable que esté desactivado.',
	'display_page_load_time' => '¿Mostar el tiempo de carga de la página?',
	'page_load_time_description' => 'Activándolo mostrará el medidor de velocidad a pié de página indicando el tiempo en cargar.',
	'reset_website' => 'Reiniciar sitio',
	'reset_website_info' => 'Se reiniciará su sitio Web y se eliminará su configuración. <strong>Los complementos serán desactivados pero no eliminados. Su configuración permanecerá sin cambios.</strong> Sus servidores de Minecraft se conservarán.',
	'confirm_reset_website' => '¿Seguro que quiere reiniciar la configuración del sitio web?',
	
	// Admin Update page
	'installation_up_to_date' => 'Your installation is up to date.',
	'update_check_error' => 'Unable to check for updates. Please try again later.',
	'new_update_available' => 'A new update is available.',
	'your_version' => 'Your version:',
	'new_version' => 'New version:',
	'download' => 'Download',
	'update_warning' => 'Warning: Ensure you have downloaded the package and uploaded the contained files first!'
);

/*
 *  Navbar
 */
$navbar_language = array(
	'home' => 'Inicio',
	'play' => 'Jugar',
	'forum' => 'Foro',
	'more' => 'Más',
	'staff_apps' => 'Solicitud Staff',
	'view_messages' => 'Ver mensajes',
	'view_alerts' => 'Ver alertas',
	
	// Icons - will display before the text
	'home_icon' => '',
	'play_icon' => '',
	'forum_icon' => '',
	'staff_apps_icon' => ''
);

/*
 * User Related
 */
$user_language = array(
	// Registration
	'authme_password' => 'AuthMe contraseña',
	'create_an_account' => 'Crear una cuenta',
	'username' => 'Usuario',
	'minecraft_username' => 'Usuario de Minecraft',
	'email' => 'Correo',
	'email_address' => 'Dirección de correo',
	'date_of_birth' => 'Date of Birth',
	'location' => 'Location',
	'password' => 'Contraseña',
	'confirm_password' => 'Confirmar la contraseña',
	'i_agree' => 'Acepto',
	'agree_t_and_c' => 'Seleccionando el <strong class="label label-primary">Registro</strong>, acepta nuestros <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y condiciones</a>.',
	'register' => 'Registro',
	'sign_in' => 'Acceder',
	'sign_out' => 'Salir',
	'terms_and_conditions' => 'Términos y condiciones',
	'successful_signin' => 'Se ha registrado correctamente',
	'incorrect_details' => 'Detalles erróneos',
	'remember_me' => 'Recuérdame',
	'forgot_password' => 'Contraseña olvidada',
	'must_input_username' => 'Debe poner un usuario.',
	'must_input_password' => 'Debe poner una contraseña.',
	'inactive_account' => 'La cuenta está inactiva. ¿Ha pedido un reincio de contraseña?',
	'account_banned' => 'Su cuenta ha sido inhabilitada.',
	'successfully_logged_out' => 'Ha salido correctamente.',
	'signature' => 'Firma',
	'registration_check_email' => 'Por favor, verifique que ha recibido en el correo un enlace para poder validar su cuenta. No podrá acceder hasta que lo pulse.',
	'unknown_login_error' => 'Lo sentimos, ha sucedido un error inesperado al intentar acceder. Inténtelo más tarde.',
	'validation_complete' => '¡Gracias por registrarse! Ya puede acceder.',
	'validation_error' => 'No hemos podido procesar su petición. Por favor, pulse el enlace de nuevo.',
	'registration_error' => 'Por favor, asegúrese que ha rellenado todos los campos y el usuario tiene entre 3 y 20 caracteres y su contraseña tiene entre 3 y 30.',
	'username_required' => 'Por favor ingresa un nombre de usuario.',
	'password_required' => 'Por favor ingresa una contraseña.',
	'email_required' => 'Por favor ingresa un email.',
	'mcname_required' => 'Por favor ingresa un nombre de usuario de Minecraft.',
	'accept_terms' => 'Debes aceptar los Términos y condiciones para registrarte.',
	'invalid_recaptcha' => 'Respuesta reCAPTCHA inválida.',
	'username_minimum_3' => 'Tu usuario debe contener mínimo 3 carácteres.',
	'username_maximum_20' => 'Tu usuario debe contener máximo 20 carácteres.',
	'mcname_minimum_3' => 'Tu usuario de Minecraft debe contener mínimo 3 carácteres.',
	'mcname_maximum_20' => 'Tu usuario de Minecraft debe contener máximo 20 carácteres.',
	'password_minimum_6' => 'Tu contraseña debe ser de mínimo 6 carácteres.',
	'password_maximum_30' => 'Tu contraseña debe ser de máximo 30 carácteres.',
	'passwords_dont_match' => 'Tus contraseñas no coinciden.',
	'username_mcname_email_exists' => 'Tu usuario, usuario de minecraft o email ya existe. Ya te has creado una cuenta?',
	'invalid_mcname' => 'Tu usuario de Minecraft no es válido.',
	'mcname_lookup_error' => 'Hubo un error contactando a los servidores de Mojang. Por favor intenta más tarde.',
	'signature_maximum_900' => 'Your signature must be a maximum of 900 characters.',
	'invalid_date_of_birth' => 'Invalid date of birth.',
	'location_required' => 'Please enter a location.',
	'location_minimum_2' => 'Your location must be a minimum of 2 characters.',
	'location_maximum_128' => 'Your location must be a maximum of 128 characters.',
	
	// UserCP
	'user_cp' => 'Panel Usuario',
	'no_file_chosen' => 'No se ha selecionado archivo',
	'private_messages' => 'Mensaje privado',
	'profile_settings' => 'Configuración del perfil',
	'your_profile' => 'Mi perfil',
	'topics' => 'Temas',
	'posts' => 'Mensaje',
	'reputation' => 'Reputación',
	'friends' => 'Amigos',
	'alerts' => 'Alertas',
	
	// Messaging
	'new_message' => 'Nuevo mensaje',
	'no_messages' => 'Sin mensajes',
	'and_x_more' => 'y {x} mas', // Don't replace "{x}"
	'system' => 'Sistema',
	'message_title' => 'Título del mensaje',
	'message' => 'Mensaje',
	'to' => 'Para:',
	'separate_users_with_comma' => 'Separe los usuarios con una coma (",")',
	'viewing_message' => 'Ver mensaje',
	'delete_message' => 'Borrar mensaje',
	'confirm_message_deletion' => '¿Seguro que desea borrar este mensaje?',
	
	// Profile settings
	'display_name' => 'Mostrar nombre',
	'upload_an_avatar' => 'Subir avatar (solo .jpg, .png o .gif):',
	'use_gravatar' => 'Use Gravatar?',
	'change_password' => 'Change password',
	'current_password' => 'Current password',
	'new_password' => 'New password',
	'repeat_new_password' => 'Repeat new password',
	'password_changed_successfully' => 'Password changed successfully',
	'incorrect_password' => 'Your current password is incorrect',
	'update_minecraft_name_help' => 'This will update your website username to your current Minecraft username. You can only perform this action once every 30 days.',
	'unable_to_update_mcname' => 'Unable to update Minecraft username.',
	'display_age_on_profile' => 'Display age on profile?',
	'two_factor_authentication' => 'Two Factor Authentication',
	'enable_tfa' => 'Enable Two Factor Authentication',
	'tfa_type' => 'Two Factor Authentication type:',
	'authenticator_app' => 'Authentication App',
	'tfa_scan_code' => 'Please scan the following code within your authentication app:',
	'tfa_code' => 'If your device does not have a camera, or you are unable to scan the QR code, please input the following code:',
	'tfa_enter_code' => 'Please enter the code displaying within your authentication app:',
	'invalid_tfa' => 'Invalid code, please try again.',
	'tfa_successful' => 'Two factor authentication set up successfully. You will need to authenticate every time you log in from now on.',
	'confirm_tfa_disable' => 'Are you sure you wish to disable two factor authentication?',
	'tfa_disabled' => 'Two factor authentication disabled.',
	'tfa_enter_email_code' => 'We have sent you a code within an email for verification. Please enter the code now:',
	'tfa_email_contents' => 'A login attempt has been made to your account. If this was you, please input the following two factor authentication code when asked to do so. If this was not you, you can ignore this email, however a password reset is advised. The code is only valid for 10 minutes.',
	
	// Alerts
	'viewing_unread_alerts' => 'Viendo las alertas no leídas. Cambiar a <a href="/user/alerts/?view=read"><span class="label label-success">leidas</span></a>.',
	'viewing_read_alerts' => 'Viendo las alertas ya lídas. Cambiar a <a href="/user/alerts/"><span class="label label-warning">no leídas</span></a>.',
	'no_unread_alerts' => 'No tiene alertas sin leer.',
	'no_alerts' => 'No alerts',
	'no_read_alerts' => 'No tiene alertas leídas.',
	'view' => 'Ver',
	'alert' => 'Alerta',
	'when' => 'Cuando',
	'delete' => 'Borrar',
	'tag' => 'Marcar usuario',
	'tagged_in_post' => 'You have been tagged in a post',
	'report' => 'Informe',
	'deleted_alert' => 'Alerta borrada correctamente',
	
	// Warnings
	'you_have_received_a_warning' => 'Ha recibido una advertencia de {x} el {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Informado',
	
	// Forgot password
	'password_reset' => 'Reiniciar contraseña',
	'email_body' => 'Ha recibido este correo porque ha pedido un reinicio de contraseña. Para proceder con el reinicio de la contraseña seleccione el siguiente enlace:', // Body for the password reset email
	'email_body_2' => 'Si no ha pedido un reinicio de contraseña, puede ignorar este correo.',
	'password_email_set' => 'Correcto. Verifique su correo para mas indicaciones.',
	'username_not_found' => 'El usuario no existe.',
	'change_password' => 'Cambiar contraseña',
	'your_password_has_been_changed' => 'Su contraseña se ha cambiado.',
	
	// Profile page
	'profile' => 'Perfil',
	'player' => 'Jugador',
	'offline' => 'Desconectado',
	'online' => 'Conectado',
	'pf_registered' => 'Registrado:',
	'pf_posts' => 'Mensajes:',
	'pf_reputation' => 'Reputación:',
	'user_hasnt_registered' => 'Este usuario no se ha registrado en este sitio todavía',
	'user_no_friends' => 'El usuario no ha añadido amigos',
	'send_message' => 'Enviar mensaje',
	'remove_friend' => 'Eliminar amigo',
	'add_friend' => 'Añadir amigo',
	'last_online' => 'Last Online:',
	'find_a_user' => 'Find a user',
	'user_not_following' => 'This user does not follow anyone.',
	'user_no_followers' => 'This user has no followers.',
	'following' => 'FOLLOWING',
	'followers' => 'FOLLOWERS',
	'display_location' => 'From {x}.', // Don't replace {x}, which will be the user's location
	'display_age_and_location' => '{x}, from {y}.', // Don't replace {x} which will be the user's age, and {y} which will be their location
	'write_on_user_profile' => 'Write something on {x}\'s profile...', // Don't replace {x}
	'write_on_own_profile' => 'Write something on your profile...',
	'profile_posts' => 'Profile Posts',
	'no_profile_posts' => 'No profile posts yet.',
	'invalid_wall_post' => 'Invalid wall post. Please ensure your post is between 2 and 2048 characters.',
	'about' => 'About',
	'reply' => 'Reply',
	'x_likes' => '{x} likes', // Don't replace {x}
	'likes' => 'Likes',
	'no_likes' => 'No likes.',
	'post_liked' => 'Post liked.',
	'post_unliked' => 'Post unliked.',
	'no_posts' => 'No posts.',
	'last_5_posts' => 'Last 5 posts',
	
	// Staff applications
	'staff_application' => 'Solicitud de staff',
	'application_submitted' => 'Solicitud enviada correctamente.',
	'application_already_submitted' => 'Ya has enviado una solicitud. Espera a que finalice antes de enviar otra.',
	'not_logged_in' => 'Por favor inicia sesión para ver esta página.',
	'application_accepted' => 'Tu solicitud de Staff ha sido aceptada.',
	'application_rejected' => 'Tu solicitud de Staff ha sido rechazada.'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => 'Panel de Moderación',
	'overview' => 'Información general',
	'reports' => 'Informes',
	'punishments' => 'Castigos',
	'staff_applications' => 'Solicitud de staff',
	
	// Punishments
	'ban' => 'Ban',
	'unban' => 'Unban',
	'warn' => 'Avisar',
	'search_for_a_user' => 'Buscar usuario',
	'user' => 'Usuario:',
	'ip_lookup' => 'Dirección IP:',
	'registered' => 'Registrado',
	'reason' => 'Razón:',
	
	// Reports
	'report_closed' => 'Informe cerrado.',
	'new_comment' => 'Nuevo comentario',
	'comments' => 'Comentarios',
	'only_viewed_by_staff' => 'Sólo puede ser visto por los administradores',
	'reported_by' => 'Informado por',
	'close_issue' => 'Cerrar tema',
	'report' => 'Informe:',
	'view_reported_content' => 'Ver contenido del informe',
	'no_open_reports' => 'No hay informes abiertos',
	'user_reported' => 'usuarios notificados',
	'type' => 'Tipo',
	'updated_by' => 'Actualizado por',
	'forum_post' => 'Mensaje en el foro',
	'user_profile' => 'Perfil del usuario',
	'comment_added' => 'Comentario añadido.',
	'new_report_submitted_alert' => 'Nuevo informe presentado por {x} especto al usuario {y}', // Don't replace "{x}" or "{y}"
	
	// Staff applications
	'comment_error' => 'Tu comentario debe tener entre 2 y 2048 caracteres.',
	'viewing_open_applications' => 'Viendo solicitudes <span class="label label-info">abiertas</span>. Cambiar a <a href="/mod/applications/?view=accepted"><span class="label label-success">aceptadas</span></a> o <a href="/mod/applications/?view=declined"><span class="label label-danger">denegadas</span></a>.',
	'viewing_accepted_applications' => 'Viendo solicitudes <span class="label label-success">aceptadas</span>. Cambiar a <a href="/mod/applications/"><span class="label label-info">abiertas</span></a> o <a href="/mod/applications/?view=declined"><span class="label label-danger">denegadas</span></a>.',
	'viewing_declined_applications' => 'Viendo solicitudes <span class="label label-danger">denegadas</span>. Cambiar a <a href="/mod/applications/"><span class="label label-info">abiertas</span></a> o <a href="/mod/applications/?view=accepted"><span class="label label-success">aceptadas</span></a>.',
	'time_applied' => 'Time Applied',
	'no_applications' => 'No hay solicitudes en esta categoría.',
	'viewing_app_from' => 'Viendo solicitudes de {x}', // Don't replace "{x}"
	'open' => 'Abierta',
	'accepted' => 'Aceptada',
	'declined' => 'Denegada',
	'accept' => 'Aceptar',
	'decline' => 'Denegar',
	'new_app_submitted_alert' => 'Nueva solicitud enviada por {x}' // Don't replace "{x}"
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => 'Noticias',
	'social' => 'Social',
	
	// General terms
	'submit' => 'Enviar',
	'close' => 'Cerrar',
	'cookie_message' => '<strong>Este sitio utiliza <i>cookies</i> para una mejor experiencia.</strong><p>Si continua navengado por nuestro sitio está aceptado el uso de elllas.</p>',
	'theme_not_exist' => 'El tema seleccionado no existe.',
	'confirm' => 'Confirmar',
	'cancel' => 'Camcelar',
	'guest' => 'Invitado',
	'guests' => 'invitados',
	'back' => 'Volver',
	'search' => 'Buscar',
	'help' => 'Ayuda',
	'success' => 'Correcto',
	'error' => 'Error',
	'view' => 'Ver',
	'info' => 'Información',
	'next' => 'Next',
	
	// Play page
	'connect_with' => 'Conéctate al servidor desde la IP <b>{x}</b>', // Don't replace {x}
	'online' => 'Conectado',
	'offline' => 'Desconectado',
	'status' => 'Estado:',
	'players_online' => 'Jugadores conectados:',
	'queried_in' => 'Ping:',
	'server_status' => 'Estado del servidor',
	'no_players_online' => '¡No hay jugadores conectados!',
	'x_players_online' => 'Hay {x} jugadores conectados.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Página cargada en {x}s', // Don't replace {x}; 's' stands for 'seconds'
	'none' => 'Nada',
	'404' => 'Sorry, we couldn\'t find that page.'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => 'Foros',
	'discussion' => 'Conversación',
	'stats' => 'Estadísticas',
	'last_reply' => 'Última respuesta',
	'ago' => 'hace',
	'by' => 'por',
	'in' => 'en',
	'views' => 'visitas',
	'posts' => 'mensajes',
	'topics' => 'temas',
	'topic' => 'Tema',
	'statistics' => 'Estadísticas',
	'overview' => 'Información general',
	'latest_discussions' => 'Últimas conversaciones',
	'latest_posts' => 'Últimos temas',
	'users_registered' => 'Usuarios registrados:',
	'latest_member' => 'Último miembro:',
	'forum' => 'Foro',
	'last_post' => 'Última publicación',
	'no_topics' => 'No hay temas todavía',
	'new_topic' => 'Nuevo tema',
	'subforums' => 'Sub-foro:',
	
	// View topic view
	'home' => 'Inicio',
	'topic_locked' => 'Tema cerrado',
	'new_reply' => 'Nueva respuesta',
	'mod_actions' => 'Moderar',
	'lock_thread' => 'Cerrar tema',
	'unlock_thread' => 'Abrir tema',
	'merge_thread' => 'Combinar temas',
	'delete_thread' => 'Borrar tema',
	'confirm_thread_deletion' => '¿Seguro que deseas borrar este tema?',
	'move_thread' => 'Mover tema',
	'sticky_thread' => 'Fijar tema',
	'report_post' => 'Reportar mensaje',
	'quote_post' => 'Citar',
	'delete_post' => 'Borrar mensaje',
	'edit_post' => 'Editar mensaje',
	'reputation' => 'reputación',
	'confirm_post_deletion' => '¿Seguro que deseas borrar este mensaje?',
	'give_reputation' => 'Dar reputación',
	'remove_reputation' => 'Quitar reputación',
	'post_reputation' => 'Mostrar reputación',
	'no_reputation' => 'No hay reputación para este tema',
	're' => 'RE:',
	
	// Create post view
	'create_post' => 'Crear mensaje',
	'post_submitted' => 'Mensaje publicado',
	'creating_post_in' => 'Creando mensaje en: ',
	'topic_locked_permission_post' => 'Este tema está cerrado, sin embargo puede publicar',
	
	// Edit post view
	'editing_post' => 'Editando tema',
	
	// Sticky threads
	'thread_is_' => 'El hilo es ',
	'now_sticky' => 'el tema es fijo',
	'no_longer_sticky' => 'el tema no es fijo',
	
	// Create topic
	'topic_created' => 'Tema creado.',
	'creating_topic_in_' => 'Creando tema en el foro ',
	'thread_title' => 'Título del tema',
	'confirm_cancellation' => '¿seguro?',
	'label' => 'Etiqueta',
	
	// Reports
	'report_submitted' => 'Informe subido.',
	'view_post_content' => 'Ver contenido publicado',
	'report_reason' => 'Razón del informe',
	
	// Move thread
	'move_to' => 'Mover a:',
	
	// Merge threads
	'merge_instructions' => 'El tema a combinar <strong>debe</strong> estar en el mismo foro. Mueva el tema si es necesario.',
	'merge_with' => 'Combinar con:',
	
	// Other
	'forum_error' => 'Lo sentimos, pero no se encontró en los foros o los temas.',
	'are_you_logged_in' => '¿Se ha registrado?',
	'online_users' => 'Online Users',
	'no_users_online' => 'There are no users online.',
	
	// Search
	'search_error' => 'Por favor, introduce una búsqueda entre 1 y 32 caracteres.'
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
	'greeting' => 'Hola',
	'message' => '¡Gracias por registrarte! Para finalizar el registro es necesario que pulse sobre el siguiente enlace:',
	'thanks' => 'Gracias,'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => 's', // Shortened "seconds", eg "s"
	'less_than_a_minute' => 'hace menos de un minuto',
	'1_minute' => 'hace 1 minuto',
	'_minutes' => 'hace {x} minutos',
	'about_1_hour' => 'hace 1 hora',
	'_hours' => 'hace {x} horas',
	'1_day' => 'hace 1 día',
	'_days' => 'hace {x} días',
	'about_1_month' => 'hace 1 mes',
	'_months' => 'hace {x} meses',
	'about_1_year' => 'hace 1 año',
	'over_x_years' => 'hace más {x} años'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => 'Mostar entradas _MENU_ por página', // Don't replace "_MENU_"
	'nothing_found' => 'Sin resultados',
	'page_x_of_y' => 'Mostrando página _PAGE_ de _PAGES_', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'No hay entradas',
	'filtered' => '(entradas filtrado un total de _MAX_)' // Don't replace "_MAX_"
);

?>
