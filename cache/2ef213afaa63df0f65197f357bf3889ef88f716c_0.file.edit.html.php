<?php
/* Smarty version 3.1.30, created on 2020-10-20 12:47:33
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\unite\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8ec04551e187_07120885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef213afaa63df0f65197f357bf3889ef88f716c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\unite\\edit.html',
      1 => 1603190851,
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
function content_5f8ec04551e187_07120885 (Smarty_Internal_Template $_smarty_tpl) {
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


            <?php if (isset($_smarty_tpl->tpl_vars['unite']->value)) {?>
            <div class="col-md-8 col-xs-8 offset-md-2 latest-post-area pb-120">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">Modification d'un Travailleur</div>
                    <div class="card-body text-dark">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Unite/edit/<?php echo $_smarty_tpl->tpl_vars['unite']->value->getId();?>
" method="post" enctype="multipart/form-data" id="edit">
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (!isset($_smarty_tpl->tpl_vars['unite']->value)) {?>
                                <div class="alert alert-danger">Cette unité n'est pas dans la base données</div>
                            <?php } else { ?>
                            
                            <!-- Abreviation -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Abreviation</label>
                                    <input type="text" class="form-control" name="abreviation" id="abreviation" <?php if (isset($_smarty_tpl->tpl_vars['unite']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['unite']->value->getAbreviation();?>
" <?php }?>>
                                </div>
                            </div> 
                               
                            <!-- Nom complet -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nom Complet</label>
                                    <input type="text" class="form-control" name="nomComplet" id="nomComplet" <?php if (isset($_smarty_tpl->tpl_vars['unite']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['unite']->value->getNomComplet();?>
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
        <div class="alert alert-danger">Cette unité n'est pas dans la base de données</div>
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
