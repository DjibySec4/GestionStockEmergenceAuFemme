<?php
/* Smarty version 3.1.30, created on 2020-10-15 18:31:16
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\welcome\connexion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8879540f2d29_00010875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8581145cd3cb7e9f6346ab445a3ec9358ca757c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\welcome\\connexion.html',
      1 => 1602779450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/extract_index/head.html' => 1,
    'file:../partials/extract_index/content.html' => 1,
  ),
),false)) {
function content_5f8879540f2d29_00010875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    
    <!-- On affiche cette page k si un user est authentifié (user ou admin) -->
    <?php if (isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_session'])) {?>

    <!-- <====== Contenu du head =====> -->
    <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
            <!-- Le contenu de index (De la page d'accueil) -->
            <?php $_smarty_tpl->_subTemplateRender("file:../partials/extract_index/content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
            
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/templateGestionStockEaf/assets/scripts/main.js"><?php echo '</script'; ?>
>
    </body>    
    <?php }?>
</html>
<?php }
}
