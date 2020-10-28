<?php
/* Smarty version 3.1.30, created on 2020-10-26 13:53:59
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\composant\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f96c6e79e3ec5_76878497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc550a794d928e1d713307521e5dbc40f8500784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\composant\\add.html',
      1 => 1603706834,
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
function content_5f96c6e79e3ec5_76878497 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\libs\\system\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!doctype html>
<html lang="en">
    
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
                    <div class="bg-primary text-white" style="height:45px;"> <h2>Ajout d'un Composant</h2></div>
                    <div class="card-body text-dark">
                        <div class="card text-center mb-4">
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/liste/1" class="btn mt-4"><b><strong>Afficher la liste des Composants</strong></b></a></p>
                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/add" method="post" enctype="multipart/form-data" id="new" novalidate>
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['unite_ajouter']->value)) {?>
                                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['unite_ajouter']->value;?>
</div>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['unite_existe']->value)) {?>
                                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['unite_existe']->value;?>
</div>
                            <?php }?>

                            <div class="infoPersonne" id="infoPersonne">
                                <div class="form-row">
                                    <!-- Nom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" <?php if (isset($_smarty_tpl->tpl_vars['composant']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['composant']->value->getNom();?>
" <?php }?>>
                                    </div>

                                     <!-- Date Achat -->
                                     <div class="form-group  col-md-6">
                                        <label class="control-label">Date Achat</label>
                                        <input type="date" class="form-control"  name="dateAchat" id="dateAchat" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
                                    </div>
                                </div> 

                                <div class="infoPersonne" id="infoPersonne">
                                    <div class="form-row">
                                        <!-- Quantité -->
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Quantité</label>
                                            <input type="number" class="form-control" name="qte" id="qte" <?php if (isset($_smarty_tpl->tpl_vars['composant']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['composant']->value->getQte();?>
" <?php }?>>
                                        </div>
    
                                        <!-- Prix -->
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Prix Unitaire</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="prix" id="prix" <?php if (isset($_smarty_tpl->tpl_vars['composant']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['composant']->value->getPrix();?>
" <?php }?>>
                                                <span class="input-group-text">FCFA</span>
                                            </div>
                                        </div>
                                    </div> 

                                    <!-- Unité -->
                                    <div class="form-row">
                                        <div class="form-group col-lg-12 mx-auto" id="selectionnerUneUnite">
                                            <label class="control-label">Unité (maximum 1)</label>
                                            <select name="unite[]" id="idUnite" class="chosen_select form-control" multiple data-placeholder="Veuiller choisir une unité" required>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['unites']->value, 'unite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unite']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['unite']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['unite']->value->getNomComplet();?>
 (<?php echo $_smarty_tpl->tpl_vars['unite']->value->getAbreviation();?>
)</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                            <div class="unite-invalid invalid-feedback">Vous devez choisir une seule unité</div>
                                        </div>
                                    </div>

                                    <!-- Ajouter une unité (Masqué / Afficher) -->
                                    <div class="btn btn-primary mb-4" id="newUnite">Ajouter une nouvelle unité</div>
                                    <div id="addUnite">
                                    <!-- Abréviation -->
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
                                        <!-- Button Ajout -->
                                        <div class="btn btn-primary mb-4" id="addUniteButton">Ajouter Unité</div>
                                    </div>
                                </div>

                                 <!-- Description -->
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textArea class="form-control" rows="4" name="description" id="description">
                                        <?php if (isset($_smarty_tpl->tpl_vars['composant']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['composant']->value->getDescription();?>
 <?php }?>
                                    </textArea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Ajouter" class="btn btn-primary" name="ajouter">
                                    <input type="submit" value="Annuler" class="btn btn-danger" name="annuler">
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <literal>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chosen.jquery.min.js" id="src"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/composant/composant_choosen.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/composant/composant.js" id="src"><?php echo '</script'; ?>
>
            </literal>


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
