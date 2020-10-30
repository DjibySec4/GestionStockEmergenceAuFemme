<?php
/* Smarty version 3.1.30, created on 2020-10-29 17:28:13
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\partials\extract_index\menuGauche.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9aed9d4f27f4_16430572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45695957b31b860233e9cbb087c75fc528621e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\partials\\extract_index\\menuGauche.html',
      1 => 1603988891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9aed9d4f27f4_16430572 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <!-- Connexion -->
                <li class="mt-4  mb-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
home" class="mm-active">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Accueil
                    </a>
                </li>

                <!-- Gestion des activités -->
                <li class="mb-4">
                    <a href="#" class="lienMenuGuauche">
                        <i class="metismenu-icon pe-7s-shopbag"></i>
                        Activités
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Activite/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Activités
                            </a>
                        </li>
                    </ul>
                </li>
               

                  <!-- Gestion des Personnes -->
                <li class="mb-4">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Personnels
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Travailleurs
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Gestionnaire/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Géstionnaires
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fournisseur/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Fournisseurs
                            </a>
                        </li>
                        </ul>
                </li>

                  <!-- Gestion des stocks -->
                <li class="mb-4">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-paint-bucket"></i>
                        Stock
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Produits
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/listeStock/1">
                                <i class="pe-7s-plugin mr-2"></i>
                                Stock Produits
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/listeHistoriqueStocks/1">
                                <i class="pe-7s-graph3 mr-2"></i>
                                Historique Stock
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/venteProduit/1">
                                <i class="pe-7s-cart mr-2"></i>
                                Vente de Produit
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/liste/1">
                                <i class="pe-7s-menu mr-2"></i>
                                Registre Composants
                            </a>
                        </li>
                        </ul>
                </li>

                 <!-- Gestion des paramettres -->
                <li class="mb-4">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Administration
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/liste/1">
                                <i class="pe-7s-add-user mr-2"></i>
                                Utilisateurs
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Roles/liste/1">
                                <i class="pe-7s-medal mr-2"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/liste/1">
                                <i class="pe-7s-pin mr-2"></i>
                                Afféctation de roles
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Autres -->
                <li class="mb-4">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-folder"></i>
                        Autres
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/listeHistoriqueTravailleurs/1">
                                <i class="pe-7s-graph3 mr-2"></i>
                                Historique Travailleur
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Unite/liste/1">
                                  <i class="pe-7s-plus mr-2"></i>
                                Ajout d'Unité
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Nationalite/liste/1">
                                  <i class="pe-7s-plus mr-2"></i>
                                Ajout de Nationnalité
                            </a>
                        </li>
                       
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>   <?php }
}
