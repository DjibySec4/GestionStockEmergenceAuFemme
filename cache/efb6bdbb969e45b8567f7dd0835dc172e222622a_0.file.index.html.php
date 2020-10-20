<?php
/* Smarty version 3.1.30, created on 2020-10-16 19:26:17
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\nationalite\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f89d7b9dd4be3_79116370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb6bdbb969e45b8567f7dd0835dc172e222622a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\nationalite\\index.html',
      1 => 1602869177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../partials/extract_index/head.html' => 1,
    'file:../../partials/extract_index/menuHaut.html' => 1,
    'file:../../partials/extract_index/menuGauche.html' => 1,
    'file:../../partials/extract_index/topBar.html' => 1,
    'file:../../partials/extract_index/footer.html' => 1,
  ),
),false)) {
function content_5f89d7b9dd4be3_79116370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    
    <!-- On affiche cette page k si un user est authentifié (user ou admin) -->

    <!-- <====== Contenu du head =====> -->
    <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <body>
        <!-- <====== Menu Haut =====> -->
        <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/menuHaut.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="app-main">
            <!-- Menu Gauche (Dashbord) -->
            <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/menuGauche.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- La top Bar(Barre apres menu) -->
            <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/topBar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <div class="container">          
                  <div class="form-inline">
                   <div class="card border-secondary col-lg-5  ml-4 mt-2 mx-auto" >
                        <div class="card-header"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><img class="img-circle centrer_image"  src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" alt=""></a></div>
                        <div class="card-body text-secondary">
                            <h3 class="card-title"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><b>Géstion des nationalités</b></a></h3>
                            <p class="card-text">Cliquez sur la photo ou sur ce lien ci-dessus pour acceder à la page de gestion.</p>
                        </div>
                    </div>
          
          
                    <div class="card border-secondary  col-lg-5  ml-4 mt-2 mx-auto" >
                      <div class="card-header"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><img class="img-circle centrer_image"  src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" alt=""></a></div>
                        <div class="card-body text-secondary">
                            <h3 class="card-title"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><b>Consultez les nationalités</b></a></h3>
                            <p class="card-text">Cliquez sur la photo ou sur ce lien ci-dessus pour acceder à toutes les nationalité.</p>
                        </div>
                    </div>
            </div>
            
            <!-- Le footer -->
            <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/templateGestionStockEaf/assets/scripts/main.js"><?php echo '</script'; ?>
>
    </body>    
</html>
<?php }
}
