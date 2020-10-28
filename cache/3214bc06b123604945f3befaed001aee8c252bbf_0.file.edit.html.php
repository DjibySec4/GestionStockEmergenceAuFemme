<?php
/* Smarty version 3.1.30, created on 2020-10-26 16:40:58
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\nationalite\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f96ee0a0e7862_71334756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3214bc06b123604945f3befaed001aee8c252bbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\nationalite\\edit.html',
      1 => 1603726852,
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
function content_5f96ee0a0e7862_71334756 (Smarty_Internal_Template $_smarty_tpl) {
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


            <?php if (isset($_smarty_tpl->tpl_vars['nationalite']->value)) {?>
            <div class="col-md-8 col-xs-8 offset-md-2 latest-post-area pb-120">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">Modification d'une Nationalité</div>
                    <div class="card-body text-dark">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Nationalite/edit/<?php echo $_smarty_tpl->tpl_vars['nationalite']->value->getId();?>
" method="post" enctype="multipart/form-data" id="edit">
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (!isset($_smarty_tpl->tpl_vars['nationalite']->value)) {?>
                                <div class="alert alert-danger">Cette nationalité n'est pas dans la base données</div>
                            <?php } else { ?>
                            
                              <!-- Nom -->
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" <?php if (isset($_smarty_tpl->tpl_vars['nationalite']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['nationalite']->value->getNom();?>
" <?php }?>>
                                </div>
                            </div> 

                            <div class="form-group">
                                <input type="submit" value="Modifier" class="btn btn-primary" name="modifier">
                                <input type="submit" value="Annuler" class="btn btn-danger" name="annuler">
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        <?php } else { ?>
        <div class="alert alert-danger">Cette nationalité n'est pas dans la base de données</div>
        <?php }?>

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
