<?php

/* __string_template__6e61e7c9fbadfcfeb8f688fdc6866e7ad5ceb1d40588248e31243c44cae73e1b */
class __TwigTemplate_9f0b2c3a228a433fd294f075f8c6c9d08143b61a2bc29d345693ee547acf751d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/danshop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/danshop/img/app_icon.png\" />

<title>Produits • DANSHOP</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'SN';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'fa31938bd597b80db779cfd7f056a058';
    var token_admin_orders = '683f23cd979e788edb481b069cfad2b6';
    var token_admin_customers = 'a23cd27037a212f40d06f1a2f477e3ed';
    var token_admin_customer_threads = '42bf9998aabc648026af8c841ef677bb';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '7110de9b7bf0d3202888822a1a253f4c';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/danshop/admin623addtdx/index.php/improve/modules/catalog/recommended?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/danshop/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/admin623addtdx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/admin623addtdx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/danshop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var appagebuilder_listshortcode_url = \"http:\\/\\/localhost\\/danshop\\/admin623addtdx\\/index.php?controller=AdminApPageBuilderShortcode&token=5efb5477b08e05ba3c1f9b6e854ef831&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/danshop\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/danshop\\/admin623addtdx\\/\";
var baseDir = \"\\/danshop\\/\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"franc CFA (BCEAO)\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var leofeature_module_dir = \"\\/danshop\\/modules\\/leofeature\\/\";
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/danshop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/modules/appagebuilder/views/js/admin/setting.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/admin623addtdx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/danshop/admin623addtdx/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/admin623addtdx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/danshop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/danshop\\/admin623addtdx\\/index.php?controller=AdminGamification&token=6365b43d91086c71c148a5ea19ddee9c\";
            var current_id_tab = 10;
        </script>

";
        // line 88
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminDashboard&amp;token=0e88e55139de4bd7e785f6b6022e8af5\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminOrders&amp;token=683f23cd979e788edb481b069cfad2b6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1c9426e0b98363f80063330973113c65\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php/improve/modules/manage?token=02a99190ed6d65643fa51e9cda440530\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=bc00955bb2d2f0f5bcbcb9b8b0f1e6cb\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php/sell/catalog/products/new?token=02a99190ed6d65643fa51e9cda440530\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCategories&amp;addcategory&amp;token=cf681c3fef76853d3e0ac9d0ab9e5ab9\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"180\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products\"
        data-post-link=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminQuickAccesses&token=a7ca07ca714b3adf1bf67bcd3c3b9550\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminQuickAccesses&token=a7ca07ca714b3adf1bf67bcd3c3b9550\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/danshop/admin623addtdx/index.php?controller=AdminSearch&amp;token=9a5608533a75f656b4d171cb9d150147\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/danshop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/gloryayivi%40gmail.com.jpg\" />
      <span>Glorie AYIVI</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=7110de9b7bf0d3202888822a1a253f4c\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLogin&amp;logout=1&amp;token=fd60c3a77aea91357d70c35138bf458a\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminDashboard&amp;token=0e88e55139de4bd7e785f6b6022e8af5\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminOrders&amp;token=683f23cd979e788edb481b069cfad2b6\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminOrders&amp;token=683f23cd979e788edb481b069cfad2b6\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/danshop/admin623addtdx/index.php/sell/orders/invoices/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminSlip&amp;token=d91eecfc0db2895345db4984ffd5f853\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/danshop/admin623addtdx/index.php/sell/orders/delivery-slips/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCarts&amp;token=94393adec7ac5ee6ed3044933da19db2\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/danshop/admin623addtdx/index.php/sell/catalog/products?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/danshop/admin623addtdx/index.php/sell/catalog/products?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCategories&amp;token=cf681c3fef76853d3e0ac9d0ab9e5ab9\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminTracking&amp;token=79eb33008742e948a41fdbf2c2c42ca6\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminAttributesGroups&amp;token=32c44dc24fdda677de7c2ceab1abf0de\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminManufacturers&amp;token=859aa43e1a3af9cb9d62edd67b4074fc\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminAttachments&amp;token=454c550f4283ee6620f742683072ee9a\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCartRules&amp;token=bc00955bb2d2f0f5bcbcb9b8b0f1e6cb\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/danshop/admin623addtdx/index.php/sell/stocks/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCustomers&amp;token=a23cd27037a212f40d06f1a2f477e3ed\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCustomers&amp;token=a23cd27037a212f40d06f1a2f477e3ed\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminAddresses&amp;token=14b7d501b323fb73629044ea80559c81\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCustomerThreads&amp;token=42bf9998aabc648026af8c841ef677bb\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCustomerThreads&amp;token=42bf9998aabc648026af8c841ef677bb\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminOrderMessage&amp;token=81f5aaf051fc83c6b628710df1cbe7c9\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminReturn&amp;token=cc2064223e50fa4ca28cb16a1e041ea9\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminStats&amp;token=1c9426e0b98363f80063330973113c65\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-AdminParentPaypalConfiguration\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPaypalConfiguration&amp;token=b5364f04a4b6e9252288a654d26970a2\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    PayPal et Braintree Officiel
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminPaypalConfiguration\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPaypalConfiguration&amp;token=b5364f04a4b6e9252288a654d26970a2\" class=\"link\"> Configuration
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminPaypalProcessLogger\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPaypalProcessLogger&amp;token=1b36b05eeda38b8548c754dcfa28bf98\" class=\"link\"> Logger
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPsMboModule&amp;token=680b168534014d3d3f9a0798ca7f702b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPsMboModule&amp;token=680b168534014d3d3f9a0798ca7f702b\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/modules/manage?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=443032f155d36211a92325fb3d5a46bf\" class=\"link\"> Leo Megamenu Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=01d439a9d7e476cbd67c16da3fc97e62\" class=\"link\"> Leo Slideshow Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminLeoProductSearchModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoProductSearchModule&amp;token=bcc98085cc9850d8e69f93e487596536\" class=\"link\"> Leo Product Search Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminThemes&amp;token=f9bfb4154a2f188c79bdbfaebfab35e4\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminThemes&amp;token=f9bfb4154a2f188c79bdbfaebfab35e4\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminPsMboTheme&amp;token=5be38e4d645acfda5d3899524f83b8e0\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCmsContent&amp;token=fcd6420c9b3b116338a7b673de5c99fb\" class=\"link\"> Pages de contenu (CMS)
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/design/modules/positions/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminImages&amp;token=760f3d1c4f17a5aff004a50757e03944\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/danshop/admin623addtdx/index.php/modules/link-widget/list?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCarriers&amp;token=f9c8f2de8d9ec216495ae3ada1fe6769\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminCarriers&amp;token=f9c8f2de8d9ec216495ae3ada1fe6769\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/shipping/preferences?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/danshop/admin623addtdx/index.php/improve/payment/payment_methods?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/payment/payment_methods?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/payment/preferences?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/danshop/admin623addtdx/index.php/improve/international/localization/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/international/localization/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminZones&amp;token=c85ad9addf909b73ae87f45a1740c5ba\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminTaxes&amp;token=e28cfe316905af50b9f892956f67e6b4\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/danshop/admin623addtdx/index.php/improve/international/translations/settings?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminApPageBuilder\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderProfiles&amp;token=6ebff7f0a9791761295e206a6e2d642e\" class=\"link\">
                    <i class=\"material-icons mi-tab\">tab</i>
                    <span>
                    Ap PageBuilder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminApPageBuilderProfiles\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderProfiles&amp;token=6ebff7f0a9791761295e206a6e2d642e\" class=\"link\"> Ap Profiles Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminApPageBuilderPositions\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderPositions&amp;token=42869318a4acf3eda0fe0d5b3b29c857\" class=\"link\"> Ap Positions Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminApPageBuilderShortcode\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderShortcode&amp;token=5efb5477b08e05ba3c1f9b6e854ef831\" class=\"link\"> Ap ShortCode Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminApPageBuilderProducts\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderProducts&amp;token=21b36f2e49e88fec3d8434d64bc73174\" class=\"link\"> Ap Products List Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminApPageBuilderDetails\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderDetails&amp;token=6f09290b4c8b436e40c0753b229afb83\" class=\"link\"> Ap Products Details Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=283f7beadf77e7c6e3d3861b03bc05a3\" class=\"link\"> Ap Live Theme Editor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminApPageBuilderModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderModule&amp;token=5a85eaf6a89dd785e7d19f3bb5ff2c57\" class=\"link\"> Ap Module Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=3b4e860dfdb62b1dd5ad5fba84c2acfb\" class=\"link\"> Ap Theme Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminApPageBuilderHook\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminApPageBuilderHook&amp;token=c2f932620c95a792a9b987e9601f30bf\" class=\"link\"> Ap Hook Control Panel
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-AdminLeoblogManagement\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogDashboard&amp;token=bd810a56712fb4e9c951f5abdcfd6e46\" class=\"link\">
                    <i class=\"material-icons mi-create\">create</i>
                    <span>
                    Leo Blog Gestion
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminLeoblogDashboard\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogDashboard&amp;token=bd810a56712fb4e9c951f5abdcfd6e46\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminLeoblogCategories\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogCategories&amp;token=07ad0784b7a695c5de4288a3502bf130\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminLeoblogBlogs\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogBlogs&amp;token=da996c5dfa07d9c75d9ffd28ceefc999\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminLeoblogComments\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogComments&amp;token=c2c9eb60629874ae3277d2646fab3544\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminLeoblogModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeoblogModule&amp;token=da549e172d366800fecfbfc0265960a0\" class=\"link\"> Leo Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"154\" id=\"subtab-AdminLeofeatureManagement\">
                  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeofeatureModule&amp;token=207167fc0188748d523a3982525ad20b\" class=\"link\">
                    <i class=\"material-icons mi-star\">star</i>
                    <span>
                    Leo Management Feature
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-154\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminLeofeatureModule\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeofeatureModule&amp;token=207167fc0188748d523a3982525ad20b\" class=\"link\"> Leo Feature Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminLeofeatureReviews\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminLeofeatureReviews&amp;token=6ef3a168cdddada7ba620767fba95c6e\" class=\"link\"> Product Review Management
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/danshop/admin623addtdx/index.php/configure/shop/preferences/preferences?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/shop/preferences/preferences?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/shop/order-preferences/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/shop/product-preferences/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/shop/customer-preferences/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminContacts&amp;token=b2e1f48f2212884af0b1aa8689d0a0ac\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/shop/seo-urls/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminSearchConf&amp;token=3d6eca83a745156e41c5be52cfdebb1e\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminGamification&amp;token=6365b43d91086c71c148a5ea19ddee9c\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/system-information/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/system-information/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/performance/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/administration/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/emails/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/import/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminEmployees&amp;token=7110de9b7bf0d3202888822a1a253f4c\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminRequestSql&amp;token=9475c4a3c33d5035998f31ec4da2708b\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/danshop/admin623addtdx/index.php/configure/advanced/logs/?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminWebservice&amp;token=8b8f50816cd377d57a33047931d65e4f\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/danshop/admin623addtdx/index.php/sell/catalog/products?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\" aria-current=\"page\">Produits</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produits          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/danshop/admin623addtdx/index.php?controller=AdminPsMboModule&token=680b168534014d3d3f9a0798ca7f702b';
    var controller = 'AdminProducts';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/danshop/admin623addtdx/index.php/sell/catalog/products/new?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\"                  title=\"Créer un nouveau produit : CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>
                  Nouveau produit
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/danshop/admin623addtdx/index.php/improve/modules/catalog?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\"                title=\"Modules recommandés\"
                              >
                Modules recommandés
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/danshop/admin623addtdx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D1.7.5.2%2526country%253Dfr/Aide?_token=J6Ap_NtFUgMPlSWzQ7l99r1MVubzLazexXHwtCOwOtk\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1363
        $this->displayBlock('content_header', $context, $blocks);
        // line 1364
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1365
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1366
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1367
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modules et services recommandés</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/danshop/admin623addtdx/index.php?controller=AdminDashboard&amp;token=0e88e55139de4bd7e785f6b6022e8af5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=gloryayivi%40gmail.com&amp;firstname=Glorie&amp;lastname=AYIVI&amp;website=http%3A%2F%2Flocalhost%2Fdanshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/danshop/admin623addtdx/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=gloryayivi%40gmail.com&amp;firstname=Glorie&amp;lastname=AYIVI&amp;website=http%3A%2F%2Flocalhost%2Fdanshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1490
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 88
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1363
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1364
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1365
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1366
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1490
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__6e61e7c9fbadfcfeb8f688fdc6866e7ad5ceb1d40588248e31243c44cae73e1b";
    }

    public function getDebugInfo()
    {
        return array (  1569 => 1490,  1564 => 1366,  1559 => 1365,  1554 => 1364,  1549 => 1363,  1540 => 88,  1532 => 1490,  1407 => 1367,  1404 => 1366,  1401 => 1365,  1398 => 1364,  1396 => 1363,  117 => 88,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__6e61e7c9fbadfcfeb8f688fdc6866e7ad5ceb1d40588248e31243c44cae73e1b", "");
    }
}
