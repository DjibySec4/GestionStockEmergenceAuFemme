<?php
/* Smarty version 3.1.30, created on 2020-10-16 17:05:53
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f89b6d1858f90_20478231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2ec97ef5837f7d70dc431cc9eef7988a0dd411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\header.html',
      1 => 1602755136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/extract_index/head.html' => 1,
    'file:../partials/extract_index/menuHaut.html' => 1,
    'file:../partials/extract_index/menuGauche.html' => 1,
    'file:../partials/extract_index/topBar.html' => 1,
  ),
),false)) {
function content_5f89b6d1858f90_20478231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <!-- <====== Contenu du head =====> -->
    <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
    <!-- <====== Menu Haut =====> -->
    <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/menuHaut.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="app-main">
    <!-- Menu Gauche (Dashbord) -->
    <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/menuGauche.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- La top Bar(Barre apres menu) -->
    <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/topBar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
