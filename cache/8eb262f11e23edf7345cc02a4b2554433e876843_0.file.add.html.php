<?php
/* Smarty version 3.1.30, created on 2020-10-26 11:10:07
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\unite\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f96a07fb02ef4_31510805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb262f11e23edf7345cc02a4b2554433e876843' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\unite\\add.html',
      1 => 1603707007,
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
function content_5f96a07fb02ef4_31510805 (Smarty_Internal_Template $_smarty_tpl) {
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

 
            <div class="col-md-8 col-xs-8 offset-md-2 latest-post-area pb-120">
                <div class="card text-center">
                    <div class="bg-primary text-white" style="height:45px;"><h2>Ajout d'une Unitée</h2></div>
                    <div class="card-body text-dark">
                        <div class="card text-center mb-4">
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Unite/liste/1" class="btn mt-4"><b><strong>Afficher la liste des Unités</strong></b></a></p>
                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Unite/add" method="post" enctype="multipart/form-data" id="new" novalidate>
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['unite_existe']->value)) {?>
                                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['unite_existe']->value;?>
</div>
                            <?php }?>

                            <!-- Abreviation -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Abreviation</label>
                                    <input type="text" class="form-control" name="abreviation" id="abreviation">
                                </div>
                            </div> 
                               
                            <!-- Nom complet -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nom Complet</label>
                                    <input type="text" class="form-control" name="nomComplet" id="nomComplet">
                                </div>
                            </div> 
                               
                            <div class="form-group">
                                <input type="submit" value="Ajouter" class="btn btn-primary" name="ajouter">
                                <input type="submit" value="Annuler" class="btn btn-danger" name="annuler">
                            </div>
                        </form>
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
