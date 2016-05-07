<?php 
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

/*
 *  Lingaguem: Português-BR
 *  Por: www.craftalizar.com
 *  Tradutor: Douglas Teles
 *  Versão: 0.1.1
 *  Última revisão: 07/05/2016
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
	'admin_cp' => 'AdminCP', 
	'invalid_token' => 'Token inválido, tente novamente.',
	'invalid_action' => 'Ação inválida',
	'successfully_updated' => 'Atualizado com sucesso',
	'settings' => 'Configurações',
	'confirm_action' => 'Confirmar ação',
	'edit' => 'Editar',
	'actions' => 'Ações',
	'task_successful' => 'Tarefa executada com êxito',
	
	// Admin login
	're-authenticate' => 'Por favor, logue-se novamente',
	
	// Admin sidebar
	'index' => 'Visão Geral',
	'core' => 'Core',
	'custom_pages' => 'Páginas Personalizadas',
	'general' => 'Geral',
	'forums' => 'Fóruns',
	'users_and_groups' => 'Usuários e Grupos',
	'minecraft' => 'Minecraft',
	'style' => 'Estilo',
	'addons' => 'Addons',
	'update' => 'Atualização',
	'misc' => 'Misc',
	
	// Admin index page
	'statistics' => 'Estatísticas',
	'registrations_per_day' => 'Cadastros por dia (últimos 7 dias)',
	
	// Admin core page
	'general_settings' => 'Configurações Gerais',
	'modules' => 'Módulos',
	'module_not_exist' => 'Esse módulo não existe!',
	'module_enabled' => 'Módulo ativado.',
	'module_disabled' => 'Módulo desativado.',
	'site_name' => 'Nome do Site',
	'language' => 'Linguagem',
	'voice_server_not_writable' => 'core/voice_server.php não é gravável. Por favor, verifique as permissões do arquivo.',
	'email' => 'Email',
	'incoming_email' => 'Email para recebimentos',
	'outgoing_email' => 'Email para envios',
	'outgoing_email_help' => 'Somente requirido se a função PHP Mail estiver ativa.',
	'use_php_mail' => 'Usar função PHP mail()?',
	'use_php_mail_help' => 'Recomendado: ativado. Se o seu site não estiver enviando emails, desative isso e edite o core/email.php com suas configurações de email.',
	'use_gmail' => 'Utilizar Gmail para envios?',
	'use_gmail_help' => 'Somente requirido se a função PHP Mail estiver desativa. Se você optar por não usar o Gmail, SMTP será usado. De qualquer maneira você precisará editar o core/email.php.',
	'enable_mail_verification' => 'Ativar a verificação da conta de e-mail?',
	'enable_email_verification_help' => 'Ativando esse recurso, novos usuários precisarão verificar via e-mail para completarem seus cadastrados.',
	'pages' => 'Páginas',
	'enable_or_disable_pages' => 'Ative ou desativas suas páginas aqui.',
	'enable' => 'Ativar',
	'disable' => 'Desativar',
	'maintenance_mode' => 'Modo de manutenção para o fórum',
	'forum_in_maintenance' => 'O fórum está em modo de manutenção.',
	'unable_to_update_settings' => 'Não foi possível atualizar as configurações. Por favor, verifique se não possui campos em branco.',
	'editing_google_analytics_module' => 'Editando módulo Google Analytics',
	'tracking_code' => 'API Google Analytics',
	'tracking_code_help' => 'Insira o código de acompanhamento do Google Analytics aqui, incluindo as tags de script circundantes.',
	'google_analytics_help' => 'Veja <a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">este guia</a> para mais informações, siga os passos 1 ao 3.',
	'social_media_links' => 'Links Páginas Sociais',
	'youtube_url' => 'YouTube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_widget_id' => 'Twitter Widget ID',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'registration' => 'Cadastro',
	'registration_warning' => 'Desativando este módulo, também desativará novos cadastros em seu site.',
	'google_recaptcha' => 'Ativar Google reCAPTCHA',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_terms_and_conditions' => 'Termos e Condições de Cadastro',
	'voice_server_module' => 'Módulo de Servidores de Voz',
	'only_works_with_teamspeak' => 'Este módulo atualmente funciona com TeamSpeak e Discord',
	'discord_id' => 'ID do Servidor Discord',
	'voice_server_help' => 'Entre com os detalhes do usuário ServerQuery',
	'ip_without_port' => 'IP (não inclúa a porta)',
	'voice_server_port' => 'Porta (normalmente 10011)',
	'virtual_port' => 'Porta Virtual (normalmente 9987)',
	'permissions' => 'Permissões:',
	'view_applications' => 'Ver Aplicações?',
	'accept_reject_applications' => 'Aceitar/Regeitar aplicações?',
	'questions' => 'Perguntas:',
	'question' => 'Pergunta',
	'type' => 'Tipo',
	'options' => 'Opções',
	'options_help' => 'Cada opção em uma nova linha; podem ser deixados vazios (dropdowns apenas)',
	'no_questions' => 'Nenhum pergunta adicionada ainda.',
	'new_question' => 'Nova Pergunta',
	'editing_question' => 'Editando Pergunta',
	'delete_question' => 'Apagar Pergunta',
	'dropdown' => 'Dropdown',
	'text' => 'Texto',
	'textarea' => 'Área de Texto',
	'question_deleted' => 'Pergunta Apagada',
	'use_followers' => 'Usar seguidores?',
	'use_followers_help' => 'Se desativado, será utilizado o sistema de amigos.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Clique na página para editá-la.',
	'page' => 'Página:',
	'url' => 'URL:',
	'page_url' => 'URL da Página',
	'page_url_example' => '(Utilize "/", por exemplo /ajuda/)',
	'page_title' => 'Título da Página',
	'page_content' => 'Conteúdo da Página',
	'new_page' => 'Nova Página',
	'page_successfully_created' => 'Página criada com sucesso',
	'page_successfully_edited' => 'Página editada com sucesso',
	'unable_to_create_page' => 'Não foi possível criar a página.',
	'unable_to_edit_page' => 'Não foi possível editar a página.',
	'create_page_error' => 'Certifique-se de que você digitou uma URL contendo entre 1 e 20 caracteres, um título de página contendo entre 1 e 30 caracteres e conteúdo da página contendo entre 5 e 20480 caracteres.',
	'delete_page' => 'Excluír Página',
	'confirm_delete_page' => 'Você tem certeza de que deseja excluír essa página?',
	'page_deleted_successfully' => 'Página excluída com sucesso',
	'page_link_location' => 'O link da página será exibido em:',
	'page_link_navbar' => 'Barra de Navegação',
	'page_link_more' => '"Mais" dropdown',
	'page_link_footer' => 'Rodapé da página',
	'page_link_none' => 'Não adicionar link',
	
	// Admin forum page
	'labels' => 'Rótulos de tópico',
	'new_label' => 'Novo rótulo',
	'no_labels_defined' => 'Nenhum rótudo definido',
	'label_name' => 'Nome do Rótulo',
	'label_type' => 'Tipo do Rótulo',
	'label_forums' => 'Utilizar Rótulo nos Fóruns:',
	'label_creation_error' => 'Erro ao criar um rótulo. Por favor, certifique-se do que nome não é mais do que 32 caracteres e que você especificou um tipo.',
	'confirm_label_deletion' => 'Tem certeza que deseja excluir este rótulo?',
	'editing_label' => 'Edição de rótulo',
	'label_creation_success' => 'Rótulo criado com sucesso',
	'label_edit_success' => 'Rótudo editado com sucesso',
	'label_default' => 'Padrão',
	'label_primary' => 'Primário',
	'label_success' => 'Sucesso',
	'label_info' => 'Info',
	'label_warning' => 'Aviso',
	'label_danger' => 'Perigo',
	'new_forum' => 'Novo Fórum',
	'forum_layout' => 'Layout do Fórum',
	'table_view' => 'Formato padrão (semelhante à IPB, MyBB e etc)',
	'latest_discussions_view' => 'Ver os tópicos mais recentes (semelhante ao Discourse)',
	'create_forum' => 'Criar Fórum',
	'forum_name' => 'Nome do Fórum',
	'forum_description' => 'Descrição do Fórum',
	'delete_forum' => 'Excluír Fórum',
	'move_topics_and_posts_to' => 'Mover tópicos e postagens para',
	'delete_topics_and_posts' => 'Excluír tópicos e postagens',
	'parent_forum' => 'Fórum Vinculado',
	'has_no_parent' => 'Não possui vínculo',
	'forum_permissions' => 'Permissões do Fórum',
	'can_view_forum' => 'Podem ver o fórum:',
	'can_create_topic' => 'Podem criar o tópico:',
	'can_post_reply' => 'Podem postar resposta:',
	'display_threads_as_news' => 'Exibir tópicos como notícia na primeira página?',
	'input_forum_title' => 'Escreva o título do fórum.',
	'input_forum_description' => 'Escreva a descrição do fórum.',
	'forum_name_minimum' => 'O nome do fórum deve ser um mínimo de 2 caracteres.',
	'forum_description_minimum' => 'A descrição do fórum deve ser um mínimo de 2 caracteres.',
	'forum_name_maximum' => 'O nome do fórum deve ser um máximo de 150 caracteres.',
	'forum_description_maximum' => 'A descrição do fórum deve ser um máximo de 255 caracteres.',
	
	// Admin Users and Groups page
	'users' => 'Usuários',
	'new_user' => 'Novo Usuário',
	'created' => 'Criado',
	'user_deleted' => 'Usuário excluído',
	'validate_user' => 'Validar Usuário',
	'update_uuid' => 'Atualizar UUID',
	'unable_to_update_uuid' => 'Não foi possível atualizar o UUID.',
	'update_mc_name' => 'Atualizar Nome Minecraft',
	'reset_password' => 'Redefinir senha',
	'punish_user' => 'Punir Usuário',
	'delete_user' => 'Exluír Usuário',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'Endereço IP',
	'ip' => 'IP:',
	'other_actions' => 'Outras Ações:',
	'disable_avatar' => 'Desativar avatar',
	'confirm_user_deletion' => 'Você tem certeza de que deseja excluír o usuário {x}?', // Don't replace "{x}"
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_group' => 'Novo Grupo',
	'id' => 'ID',
	'name' => 'Nome',
	'create_group' => 'Criar Grupo',
	'group_name' => 'Nome do Grupo',
	'group_html' => 'HTML do Grupo',
	'group_html_lg' => 'Grupo com HTML grande',
	'donor_group_id' => 'ID do pacote de doador',
	'donor_group_id_help' => '<p>Esse é o ID do grupo de pacotes do Buycraft, MinecraftMarket ou MCStock.</p><p>Pode ser deixado em branco.</p>',
	'donor_group_instructions' => 	'<p>Os grupos de doadores precisem ser criados na ordem de <strong>valor mais baixo para o mais alto valor</strong>.</p>
									<p>Por exemplo, um pacote de R$10 será criado antes de um pacote de R$20.</p>',
	'delete_group' => 'Excluír Grupo',
	'confirm_group_deletion' => 'Você tem certeza de que deseja excluír o grupo {x}?', // Don't replace "{x}"
	'group_staff' => 'Esse grupo é um grupo da Staff?',
	'group_modcp' => 'Esse grupo pode acessar o ModCP?',
	'group_admincp' => 'Esse grupo pode acessar o AdminCP?',
	'group_name_required' => 'Você precisa informar um nome para o grupo.',
	'group_name_minimum' => 'The group name must be a minimum of 2 characters.',
	'group_name_maximum' => 'The group name must be a maximum of 20 characters.',
	'html_maximum' => 'The group HTML must be a maximum of 1024 characters.',
	'select_user_group' => 'The user must be in a group.',
	'uuid_max_32' => 'The UUID must be a maximum of 32 characters.',
	'cant_delete_root_user' => 'Can\'t delete the root user!',
	'cant_modify_root_user' => 'Can\'t modify the root user\'s group.',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Configurações Minecraft',
	'use_plugin' => 'Usar o plugin Nameless Minecraft?',
	'force_avatars' => 'Forçar uso de avatares Minecraft?',
	'uuid_linking' => 'Ativar vinculação UUID?',
	'use_plugin_help' => 'Usando o plugin você terá a sincronização com o ranking, cadastro in-game e envios de tickets.',
	'uuid_linking_help' => 'Se desativado, os usuários cadastrados não terão vinculo com suas UUIDs. É altamente recomendado que você deixe essa opção ativada.',
	'plugin_settings' => 'Configurações do Plugin',
	'confirm_api_regen' => 'Você tem certeza de que deseja gerar uma nova API key?',
	'servers' => 'Servidores',
	'new_server' => 'Novo Servidor',
	'confirm_server_deletion' => 'Você tem certeza de que deseja excluir esse servidor?',
	'main_server' => 'Servidor Principal',
	'main_server_help' => 'O servidor em que os jogadores se conectam. Normalmente esta será a instância Bungee.',
	'choose_a_main_server' => 'Selecione o servidor principal..',
	'external_query' => 'Usar uma query externa?',
	'external_query_help' => 'Usar uma API externa para consultar o servidor Minecraft? Somente utilize essa opção caso a principal não funcione corretamente. É extremamente recomendável manter esta opção desmarcada.',
	'editing_server' => 'Editar servidor {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'IP do servidor (com a porta) (numérico ou domínio)',
	'server_ip_with_port_help' => 'Este é o IP que será exibido para os usuários. Não vai ser consultado.',
	'server_ip_numeric' => 'IP do servidor (com a porta) (somente numérico)',
	'server_ip_numeric_help' => 'Este é o IP que será consultado, certifique-se de que é apenas numérico. Ele não será exibido para os usuários.',
	'show_on_play_page' => 'Exibir na página Play?',
	'pre_17' => 'Versão do Minecraft pré 1.7?',
	'server_name' => 'Nome do Servidor',
	'invalid_server_id' => 'ID do servidor inválido',
	'show_players' => 'Exibir a lista de jogadores na página Play?',
	'server_edited' => 'Servidor editado com sucesso',
	'server_created' => 'Servidor criado com sucesso',
	'query_errors' => 'Erros Query',
	'query_errors_info' => 'Os erros a seguir permitem que você identifique problemas com sua consulta ao servidor interno.',
	'no_query_errors' => 'Sem erros de consulta registrados',
	'date' => 'Data:',
	'port' => 'Porta:',
	'viewing_error' => 'Visualizando Erro',
	'confirm_error_deletion' => 'Você tem certeza que deseja excluir esse erro?',
	'display_server_status' => 'Exibir módulo de estatus do servidor?',
	'server_name_required' => 'Você precisa inserir um nome para o servidor.',
	'server_ip_required' => 'Você precisa inserir o IP do servidor.',
	'server_name_minimum' => 'O nome do servidor precisa ter no minimo 2 caracteres',
	'server_ip_minimum' => 'O IP do servidor precisa ter no minimo 2 caracteres',
	'server_name_maximum' => 'O nome do servidor precisa ter no maximo 20 caracteres',
	'server_ip_maximum' => 'O IP do servidor precisa ter no maximo 64 caracteres',
	'purge_errors' => 'Eliminar Erros',
	'confirm_purge_errors' => 'Você tem certeza de que deseja eliminar todos os erros de query?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Temas',
	'templates' => 'Templates',
	'installed_themes' => 'Temas instalados',
	'installed_templates' => 'Templates instalados',
	'installed_addons' => 'Addons instalados',
	'install_theme' => 'Instalar Tema',
	'install_template' => 'Instalar Template',
	'install_addon' => 'Instalar Addon',
	'install_a_theme' => 'Instalar um tema',
	'install_a_template' => 'Instalar um template',
	'install_an_addon' => 'Instalar um addon',
	'active' => 'Ativo',
	'activate' => 'Ativar',
	'deactivate' => 'Desativar',
	'theme_install_instructions' => 'Please upload themes to the <strong>styles/themes</strong> directory. Then, click the "scan" button below.',
	'template_install_instructions' => 'Please upload templates to the <strong>styles/templates</strong> directory. Then, click the "scan" button below.',
	'addon_install_instructions' => 'Please upload addons to the <strong>addons</strong> directory. Then, click the "scan" button below.',
	'addon_install_warning' => 'Addons are installed at your own risk. Please back up your files and the database before proceeding',
	'scan' => 'Scan',
	'theme_not_exist' => 'That theme doesn\'t exist!',
	'template_not_exist' => 'That template doesn\'t exist!',
	'addon_not_exist' => 'That addon doesn\'t exist!',
	'style_scan_complete' => 'Completed, any new styles have been installed.',
	'addon_scan_complete' => 'Completed, any new addons have been installed.',
	'theme_enabled' => 'Theme enabled.',
	'template_enabled' => 'Template enabled.',
	'addon_enabled' => 'Addon enabled.',
	'theme_deleted' => 'Theme deleted.',
	'template_deleted' => 'Template deleted.',
	'addon_disabled' => 'Addon disabled.',
	'inverse_navbar' => 'Inverse Navbar',
	'confirm_theme_deletion' => 'Are you sure you wish to delete the theme <strong>{x}</strong>?<br /><br />The theme will be deleted from your <strong>styles/themes</strong> directory.', // Don't replace {x}
	'confirm_template_deletion' => 'Are you sure you wish to delete the template <strong>{x}</strong>?<br /><br />The template will be deleted from your <strong>styles/templates</strong> directory.', // Don't replace {x}
	
	// Admin Misc page
	'other_settings' => 'Outras Configurações',
	'enable_error_reporting' => 'Ativar relatório de erros?',
	'error_reporting_description' => 'Isso só deve ser usado para fins de depuração, é altamente recomendável deixar esta opção desativada.',
	'display_page_load_time' => 'Exibir carregamento da página?',
	'page_load_time_description' => 'Com este recurso ativado será exibido um velocímetro no rodapé que irá exibir o tempo de carregamento da página.',
	'reset_website' => 'Redefinir Website',
	'reset_website_info' => 'Isto irá repor as definições do site. <strong>Addons serão desativados mas não removidos, e suas configurações não mudarão.</strong> Seus servidores de Minecraft definidos também permanecerão.',
	'confirm_reset_website' => 'Você tem certeza de que deseja redefinir as configurações do website?',
	
	// Admin Update page
	'installation_up_to_date' => 'Sua instalação está atualizada.',
	'update_check_error' => 'Não foi possível verificar se há atualizações. Por favor, tente novamente mais tarde.',
	'new_update_available' => 'Uma nova atualização está disponível.',
	'your_version' => 'Sua versão:',
	'new_version' => 'Nova versão:',
	'download' => 'Download',
	'update_warning' => 'Aviso: Certifique-se de que você tenha baixado o pacote e enviado os arquivos contidos em primeiro lugar!'
);

/*
 *  Navbar
 */
$navbar_language = array(
	// Text only
	'home' => 'Home',
	'play' => 'Play',
	'forum' => 'Fórum',
	'more' => 'Mais',
	'staff_apps' => 'Recrutamentos',
	'view_messages' => 'Ver Mensagens',
	'view_alerts' => 'Ver Alertas',
	
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
	'create_an_account' => 'Criar uma Conta',
	'authme_password' => 'Senha AuthMe',
	'username' => 'Usuário',
	'minecraft_username' => 'Usuário Minecraft',
	'email' => 'Email',
	'email_address' => 'Endereço de email',
	'date_of_birth' => 'Data de Nascimento',
	'location' => 'Localização',
	'password' => 'Senha',
	'confirm_password' => 'Confirme a Senha',
	'i_agree' => 'Eu Aceito',
	'agree_t_and_c' => 'Clicando em <strong class="label label-primary">Cadastrar</strong>, você aceita nossos <a href="#" data-toggle="modal" data-target="#t_and_c_m">Termos e Condições</a>.',
	'register' => 'Cadastrar',
	'sign_in' => 'Entrar',
	'sign_out' => 'Sair',
	'terms_and_conditions' => 'Termos e Condições',
	'successful_signin' => 'Olá, bem-vindo!',
	'incorrect_details' => 'Informações incorretas',
	'remember_me' => 'Lembrar-me',
	'forgot_password' => 'Esqueci minha senha',
	'must_input_username' => 'Você precisa iformar um usuário.',
	'must_input_password' => 'Você precisa iformar uma senha.',
	'inactive_account' => 'Sua conta atualmente está inativa. Você solicitou um reset de senha?',
	'account_banned' => 'Sua conta está banida.',
	'successfully_logged_out' => 'Você se deslogou com sucesso. Até mais!',
	'signature' => 'Assinatura',
	'registration_check_email' => 'Please check your emails for a validation link. You won\'t be able to log in until this is clicked.',
	'unknown_login_error' => 'Sorry, there was an unknown error whilst logging you in. Please try again later.',
	'validation_complete' => 'Thanks for registering! You can now log in.',
	'validation_error' => 'Error processing your request. Please try clicking the link again.',
	'registration_error' => 'Please ensure you have filled out all fields, and that your username is between 3 and 20 characters long and your password is between 6 and 30 characters long.',
	'username_required' => 'Please enter a username.',
	'password_required' => 'Please enter a password.',
	'email_required' => 'Please enter an email address.',
	'mcname_required' => 'Please enter a Minecraft username.',
	'accept_terms' => 'You must accept the terms and conditions before registering.',
	'invalid_recaptcha' => 'Invalid reCAPTCHA response.',
	'username_minimum_3' => 'Your username must be a minimum of 3 characters long.',
	'username_maximum_20' => 'Your username must be a maximum of 20 characters long.',
	'mcname_minimum_3' => 'Your Minecraft username must be a minimum of 3 characters long.',
	'mcname_maximum_20' => 'Your Minecraft username must be a maximum of 20 characters long.',
	'password_minimum_6' => 'Your password must be at least 6 characters long.',
	'password_maximum_30' => 'Your password must be a maximum of 30 characters long.',
	'passwords_dont_match' => 'Your passwords do not match.',
	'username_mcname_email_exists' => 'Your username, Minecraft username or email address already exists. Have you already created an account?',
	'invalid_mcname' => 'Your Minecraft username is not a valid account',
	'mcname_lookup_error' => 'There was an error contacting Mojang\'s servers. Please try again later.',
	'signature_maximum_900' => 'Your signature must be a maximum of 900 characters.',
	'invalid_date_of_birth' => 'Invalid date of birth.',
	'location_required' => 'Please enter a location.',
	'location_minimum_2' => 'Your location must be a minimum of 2 characters.',
	'location_maximum_128' => 'Your location must be a maximum of 128 characters.',
	
	// UserCP
	'user_cp' => 'UserCP',
	'no_file_chosen' => 'Nenhum arquivo selecionado',
	'private_messages' => 'Mensagens Privadas',
	'profile_settings' => 'Configurações de Perfil',
	'your_profile' => 'Seu Perfil',
	'topics' => 'Tópicos',
	'posts' => 'Postagens',
	'reputation' => 'Reputação',
	'friends' => 'Amigos',
	'alerts' => 'Alertas',
	
	// Messaging
	'new_message' => 'Nova Mensagem',
	'no_messages' => 'Nenhum mensagem',
	'and_x_more' => 'e mais {x}', // Don't replace "{x}"
	'system' => 'Sistema',
	'message_title' => 'Título da Mensagem',
	'message' => 'Mensagem',
	'to' => 'Para:',
	'separate_users_with_comma' => 'Separe os usuários com a vírgula (",")',
	'viewing_message' => 'Visualizar Mensagem',
	'delete_message' => 'Excluir Mensagem',
	'confirm_message_deletion' => 'Você tem certeza de que deseja excluir essa mensagem?',
	
	// Profile settings
	'display_name' => 'Nome de exibição',
	'upload_an_avatar' => 'Enviar um avatar (somente .jpg, .png ou .gif):',
	'use_gravatar' => 'Usar Gravatar?',
	'change_password' => 'Alterar senha',
	'current_password' => 'Senha atual',
	'new_password' => 'Nova senha',
	'repeat_new_password' => 'Repita a nova senha',
	'password_changed_successfully' => 'Senha alterada com sucesso',
	'incorrect_password' => 'Sua senha atual está incorreta',
	'update_minecraft_name_help' => 'Isto irá atualizar o seu nome de usuário no site para o seu atual nome de usuário Minecraft. Você só pode executar esta ação uma vez a cada 30 dias.',
	'unable_to_update_mcname' => 'Não foi possível atualizar seu nome de usuário Minecraft',
	'display_age_on_profile' => 'Exibir idade no perfil?',
	
	// Alerts
	'viewing_unread_alerts' => 'Visualizando alertas não lidos. Alterar para <a href="/user/alerts/?view=read"><span class="label label-success">lido</span></a>.',
	'viewing_read_alerts' => 'Visualizando alertas lidos. Alterar para <a href="/user/alerts/"><span class="label label-warning">não lido</span></a>.',
	'no_unread_alerts' => 'Você não tem nenhum alerta para ler.',
	'no_alerts' => 'Nenhum alerta',
	'no_read_alerts' => 'Você não tem nenhum alerta lido.',
	'view' => 'Ver',
	'alert' => 'Alerta',
	'when' => 'Quando',
	'delete' => 'Excluír',
	'tag' => 'Tag do usuário',
	'tagged_in_post' => 'Você foi marcado em um post',
	'report' => 'Reportar',
	'deleted_alert' => 'Alerta excluído com sucesso',
	
	// Warnings
	'you_have_received_a_warning' => 'Você recebeu um novo alerta de {x} dia {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Acknowledge',
	
	// Forgot password
	'password_reset' => 'Password Reset',
	'email_body' => 'You are receiving this email because you requested a password reset. In order to reset your password, please use the following link:', // Body for the password reset email
	'email_body_2' => 'If you did not request the password reset, you can ignore this email.',
	'password_email_set' => 'Success. Please check your emails for further instructions.',
	'username_not_found' => 'Esse usuário não existe.',
	'change_password' => 'Alterar Senha',
	'your_password_has_been_changed' => 'Sua senha foi alterada.',
	
	// Profile page
	'profile' => 'Perfil',
	'player' => 'Jogador',
	'offline' => 'Offline',
	'online' => 'Online',
	'pf_registered' => 'Cadastrado:',
	'pf_posts' => 'Postagens:',
	'pf_reputation' => 'Reputação:',
	'user_hasnt_registered' => 'This user hasn\'t registered on our website yet',
	'user_no_friends' => 'Esse usuário não adicionou nenhum amigo',
	'send_message' => 'Enviar Mensagem',
	'remove_friend' => 'Remover Amigo',
	'add_friend' => 'Add Amigo',
	'last_online' => 'Última vez online:',
	'find_a_user' => 'Encontrar um usuário',
	'user_not_following' => 'Esse usuário não segue ninguém.',
	'user_no_followers' => 'Esse usuário não possui seguidores.',
	'following' => 'SEGUINDO',
	'followers' => 'SEGUIDORES',
	'display_location' => 'De {x}.', // Don't replace {x}, which will be the user's location
	'display_age_and_location' => '{x}, de {y}.', // Don't replace {x} which will be the user's age, and {y} which will be their location
	'write_on_user_profile' => 'Write something on {x}\'s profile...', // Don't replace {x}
	'write_on_own_profile' => 'Escreva alguma coisa no seu perfil...',
	'profile_posts' => 'Postagens no Perfil',
	'no_profile_posts' => 'Nenhuma postagem ainda.',
	'invalid_wall_post' => 'Invalid wall post. Please ensure your post is between 2 and 2048 characters.',
	'about' => 'Sobre',
	'reply' => 'Responder',
	'x_likes' => '{x} curtidas', // Don't replace {x}
	'likes' => 'Curtidas',
	'no_likes' => 'Nenhuma curtida.',
	'post_liked' => 'Postagens curtidas.',
	'post_unliked' => 'Postagens reprovadas.',
	'no_posts' => 'Nenhuma postagem.',
	'last_5_posts' => 'Últimas 5 Postagens',
	
	// Staff applications
	'staff_application' => 'Staff Application',
	'application_submitted' => 'Application submitted successfully.',
	'application_already_submitted' => 'You\'ve already submitted an application. Please wait until it is complete before submitting another.',
	'not_logged_in' => 'Please log in to view that page.',
	'application_accepted' => 'Your staff application has been accepted.',
	'application_rejected' => 'Your staff application has been rejected.'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => 'ModCP',
	'overview' => 'Visão Geral',
	'reports' => 'Relatórios',
	'punishments' => 'Punimentos',
	'staff_applications' => 'Staff Applications',
	
	// Punishments
	'ban' => 'Banir',
	'unban' => 'Desbanir',
	'warn' => 'Alertar',
	'search_for_a_user' => 'Procurar por usuário',
	'user' => 'Usuário:',
	'ip_lookup' => 'IP Lookup:',
	'registered' => 'Registrado',
	'reason' => 'Razão:',
	
	// Reports
	'report_closed' => 'Report closed.',
	'new_comment' => 'Novo comentário',
	'comments' => 'Comentários',
	'only_viewed_by_staff' => 'Apenas pode ser visto pela staff',
	'reported_by' => 'Reportado por',
	'close_issue' => 'Close issue',
	'report' => 'Report:',
	'view_reported_content' => 'Ver conteúdo reportado',
	'no_open_reports' => 'No open reports',
	'user_reported' => 'Usuário Reportado',
	'type' => 'Tipo',
	'updated_by' => 'Atualizado Por',
	'forum_post' => 'Forum Post',
	'user_profile' => 'Perfil de Usuário',
	'comment_added' => 'Comentário Add.',
	'new_report_submitted_alert' => 'New report submitted by {x} regarding user {y}', // Don't replace "{x}" or "{y}"
	
	// Staff applications
	'comment_error' => 'Please ensure your comment is between 2 and 2048 characters long.',
	'viewing_open_applications' => 'Viewing <span class="label label-info">open</span> applications. Change to <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_accepted_applications' => 'Viewing <span class="label label-success">accepted</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_declined_applications' => 'Viewing <span class="label label-danger">declined</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a>.',
	'time_applied' => 'Time Applied',
	'no_applications' => 'Nenhum pedido nesta categoria',
	'viewing_app_from' => 'Visualizando pedido de {x}', // Don't replace "{x}"
	'open' => 'Abrir',
	'accepted' => 'Aceito',
	'declined' => 'Rejeitado',
	'accept' => 'Aceitar',
	'decline' => 'Rejeitar',
	'new_app_submitted_alert' => 'Novo pedido enviado por {x}' // Don't replace "{x}"
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => 'Notícias',
	'social' => 'Social',
	
	// General terms
	'submit' => 'Enviar',
	'close' => 'Fechar',
	'cookie_message' => '<strong>Este site usa cookies para melhorar a sua experiência.</strong><p>Ao continuar a navegar e interagir com o site, você concorda com a sua utilização.</p>',
	'theme_not_exist' => 'O tema selecionado não existe.',
	'confirm' => 'Confirmar',
	'cancel' => 'Cancelar',
	'guest' => 'Visitante',
	'guests' => 'Visitantes',
	'back' => 'Voltar',
	'search' => 'Procurar',
	'help' => 'Ajuda',
	'success' => 'Sucesso',
	'error' => 'Error',
	'view' => 'Ver',
	'info' => 'Info',
	
	// Play page
	'connect_with' => 'Junte-se aos nossos jogadores: {x}', // Don't replace {x}
	'online' => 'Online',
	'offline' => 'Offline',
	'status' => 'Status:',
	'players_online' => 'Jogadores Online:',
	'queried_in' => 'Atualizado em:',
	'server_status' => 'Server Status',
	'no_players_online' => 'Não há jogadores online!',
	'x_players_online' => 'Há {x} jogadores online.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Página carregada em {x}s', // Don't replace {x}; 's' stands for 'seconds'
	'none' => 'Nenhum',
	'404' => 'Desculpe, nós não econtramos esssa página.'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => 'Forums',
	'discussion' => 'Tópicos',
	'stats' => 'Estatísticas',
	'last_reply' => 'Última Resposta',
	'ago' => 'atrás',
	'by' => 'por',
	'in' => 'em',
	'views' => 'visualizações',
	'posts' => 'postagens',
	'topics' => 'tópicos',
	'topic' => 'Tópico',
	'statistics' => 'Estatísticas',
	'overview' => 'Visão Geral',
	'latest_discussions' => 'Últimos Tópicos',
	'latest_posts' => 'Últimos Posts',
	'users_registered' => 'Usuários cadastrados:',
	'latest_member' => 'Último membro:',
	'forum' => 'Fórum',
	'last_post' => 'Última Postagem',
	'no_topics' => 'Não há tópicos aqui ainda',
	'new_topic' => 'Novo Tópico',
	'subforums' => 'Subfóruns:',
	
	// View topic view
	'home' => 'Home',
	'topic_locked' => 'Tópico Trancado',
	'new_reply' => 'Nova Resposta',
	'mod_actions' => 'Moderar Tópico',
	'lock_thread' => 'Trancar Tópico',
	'unlock_thread' => 'Destrancar Tópico',
	'merge_thread' => 'Mesclar Tópico',
	'delete_thread' => 'Deletar Tópico',
	'confirm_thread_deletion' => 'Você tem certeza de que deseja apagar este tópico?',
	'move_thread' => 'Mover Tópico',
	'sticky_thread' => 'Destacar Tópico',
	'report_post' => 'Reportar Postagem',
	'quote_post' => 'Citar Postagem',
	'delete_post' => 'Deletar Postagem',
	'edit_post' => 'Editar Postagem',
	'reputation' => 'reputação',
	'confirm_post_deletion' => 'Você tem certeza de que deseja apagar esta postagem?',
	'give_reputation' => 'Dar reputação',
	'remove_reputation' => 'Remover reputação',
	'post_reputation' => 'Reputação da Postagem',
	'no_reputation' => 'Não há reputação para esta postagem ainda',
	're' => 'RE:',
	
	// Create post view
	'create_post' => 'Criar postagem',
	'post_submitted' => 'Postagem enviada',
	'creating_post_in' => 'Criando postagem em: ',
	'topic_locked_permission_post' => 'Este tópico está trancado, no entanto suas permissões permitem que você poste nele',
	
	// Edit post view
	'editing_post' => 'Editando postagem',
	
	// Sticky threads
	'thread_is_' => 'Tópico é ',
	'now_sticky' => 'agora um tópico destacado',
	'no_longer_sticky' => 'não é mais um tópico destacado',
	
	// Create topic
	'topic_created' => 'Tópico criado.',
	'creating_topic_in_' => 'Criando tópico no fórum ',
	'thread_title' => 'Título do Tópico',
	'confirm_cancellation' => 'Você tem certeza?',
	'label' => 'Etiqueta',
	
	// Reports
	'report_submitted' => 'Reporte enviado.',
	'view_post_content' => 'Ver conteúdo do post',
	'report_reason' => 'Motivo do Reporte',
	
	// Move thread
	'move_to' => 'Mover para:',
	
	// Merge threads
	'merge_instructions' => 'O tópico que será mesclado <strong>precisa</strong> estar no mesmo fórum. Mova o tópico se necessário.',
	'merge_with' => 'Mesclar com:',
	
	// Other
	'forum_error' => 'Desculpe, nós não conseguimos encontrar este tópico ou post.',
	'are_you_logged_in' => 'Você está logado?',
	'online_users' => 'Usuários Online',
	'no_users_online' => 'Não há usuários on-line.',
	
	// Search
	'search_error' => 'Por favor, informe de 1 à 32 caracteres para pesquisar.'
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
	'greeting' => 'Olá',
	'message' => 'Obrigado por se cadastrar! Para continuar com seu cadastro, clique no link a seguir para validar seus dados:',
	'thanks' => 'Obrigado,'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => 's', // Shortened "seconds", eg "s"
	'less_than_a_minute' => 'a menos de um minuto atrás',
	'1_minute' => '1 minuto atrás',
	'_minutes' => '{x} minutos atrás',
	'about_1_hour' => 'cerca de 1 hora atrás',
	'_hours' => '{x} horas atrás',
	'1_day' => '1 dia atrás',
	'_days' => '{x} dias atrás',
	'about_1_month' => 'cerca de 1 mês atrás',
	'_months' => '{x} meses atrás',
	'about_1_year' => 'cerca de 1 ano atrás',
	'over_x_years' => 'mais de {x} anos atrás'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => 'Exibir registros _MENU_ por página ', // Don't replace "_MENU_"
	'nothing_found' => 'Nenhum resultado encontrado',
	'page_x_of_y' => 'Exibindo página _PAGE_ de _PAGES_', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'Nenhum registro disponível',
	'filtered' => '(filtrado de _MAX_ registros totais)' // Don't replace "_MAX_"
);
 
?>
