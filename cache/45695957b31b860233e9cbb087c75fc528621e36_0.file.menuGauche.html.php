<?php
/* Smarty version 3.1.30, created on 2020-10-20 11:20:39
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\partials\extract_index\menuGauche.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8eabe7e17df7_54754019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45695957b31b860233e9cbb087c75fc528621e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\partials\\extract_index\\menuGauche.html',
      1 => 1603185537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8eabe7e17df7_54754019 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class="app-sidebar__heading"> Gestion Stock App</li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
home" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Accueil
                    </a>
                </li>

                <!-- Gestion des activités -->
                <li class="app-sidebar__heading">Activités</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Interfaces - Activité
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Activite/liste/1">
                                <i class="metismenu-icon"></i>
                                Activités
                            </a>
                        </li>
                    </ul>
                </li>
               

                  <!-- Gestion des Personnes -->
                <li class="app-sidebar__heading">Personnes</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Interfaces - Personnes
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/liste/1">
                                <i class="metismenu-icon"></i>
                                Travailleurs
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Gestionnaire/liste/1">
                                <i class="metismenu-icon"></i>
                                Géstionnaires
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fournisseur/liste/1">
                                <i class="metismenu-icon"></i>
                                Fournisseurs
                            </a>
                        </li>
                        </ul>
                </li>

                  <!-- Gestion des stocks -->
                <li class="app-sidebar__heading">Stock</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Interfaces - Stock
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste/1">
                                <i class="metismenu-icon"></i>
                                Produits
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Stock/liste/1">
                                <i class="metismenu-icon"></i>
                                Stock Produits
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/liste/1">
                                <i class="metismenu-icon"></i>
                                Composants
                            </a>
                        </li>
                        </ul>
                </li>

                 <!-- Gestion des paramettres -->
                <li class="app-sidebar__heading">Paramétrage</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Interfaces - Administration
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/liste/1">
                                <i class="metismenu-icon"></i>
                                Utilisateurs
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Roles/liste/1">
                                <i class="metismenu-icon"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/liste/1">
                                <i class="metismenu-icon"></i>
                                Afféctation de roles
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Autres -->
                <li class="app-sidebar__heading">Autres parametres</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Autres
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Historique/liste/1">
                                <i class="metismenu-icon"></i>
                                Historique Stock
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Unite/liste/1">
                                <i class="metismenu-icon"></i>
                                Unité
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Nationalite/liste/1">
                                <i class="metismenu-icon"></i>
                                Nationnalité
                            </a>
                        </li>
                       
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>   <?php }
}
