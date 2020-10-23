<?php
/* Smarty version 3.1.30, created on 2020-10-23 12:20:51
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\produit\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f92ae83c77333_63209210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a120c3df99658e2e685121da4e008fc81588fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\produit\\add.html',
      1 => 1603448427,
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
function content_5f92ae83c77333_63209210 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\libs\\system\\smarty\\libs\\plugins\\modifier.date_format.php';
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
                    <div class="card-header bg-primary text-white">Ajout d'un Produit</div>
                    <div class="card-body text-dark">
                        <div class="card text-center mb-4">
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste/1" class="btn btn-pribg-primary mt-4">Liste des Produits</a></p>
                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/add" method="post" enctype="multipart/form-data" id="new" novalidate>
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['reference_existe']->value)) {?>
                                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['reference_existe']->value;?>
</div>
                            <?php }?>

                            <div class="infoPersonne" id="infoPersonne">
                                <div class="form-row">
                                    <!-- Référence -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Référence</label>
                                        <input type="text" class="form-control" name="reference" id="reference" <?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" <?php }?>>
                                    </div>

                                    <!-- Nom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" <?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getNom();?>
" <?php }?>>
                                    </div>
                                </div> 

                                <div class="infoPersonne" id="infoPersonne">
                                    <div class="form-row">
                                        <!-- Quantité -->
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Quantité</label>
                                            <input type="number" class="form-control" name="qte" id="qte" <?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getQte();?>
" <?php }?>>
                                        </div>
    
                                        <!-- Prix -->
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Prix Unitaire</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="prix" id="prix" <?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix();?>
" <?php }?>>
                                                <span class="input-group-text">FCFA</span>
                                            </div>
                                        </div>

                                          <!-- En promotion -->
                                        <div class="form-group col-md-4">
                                            <label class="control-label">En Promotion ?</label>
                                            <select name="promotion" id="promotion" class="form-control custom-select" required>
                                                <option value="1">Oui</option>
                                                <option value="0">Non</option>
                                            </select>
                                        </div>
                                    </div> 

                                    <!-- Photo -->
                                    <div class="form-row"></div>
                                        <div class="form-group ">
                                            <label class="control-label">Photo</label>
                                            <input type="file" class="form-control col-lg-12" accept="image/png,image/jpeg,image/jpg" name="photo" id="photo">
                                        </div>
                                    </div>

                                    <!-- Activités -->
                                    <div class="form-row">
                                        <div class="form-group col-lg-12 mx-auto" id="selectionnerUneActivite">
                                            <label class="control-label">Activités (maximum 10)</label>
                                            <select name="activite[]" id="idActivite" class="chosen_select form-control" multiple data-placeholder="Veuiller choisir une activité" required>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activites']->value, 'activite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activite']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['activite']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['activite']->value->getNom();?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                            <div class="activite-invalid invalid-feedback">Vous devez choisir une seule activité
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ajouter une activité (Masqué / Afficher) -->
                                    <div class="btn btn-primary mb-4" id="newActivite">Ajouter une nouvelle activité</div>
                                    <div id="addActivite">
                                        <!-- Nom -->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Nom Activité</label>
                                                <input type="text" class="form-control" name="nomActivite" id="nom">
                                                <div class="invalid-feedback">
                                                    Le nom de l'activité est obligatoire
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <!-- Description -->
                                        <div class="form-group">
                                            <label class="control-label">Description Activité</label>
                                            <textArea class="form-control" rows="4" name="descriptionActivite" id="descriptionActivite">
                                            </textArea>
                                        </div>
                                        <!-- Button Ajout -->
                                        <div class="btn btn-primary mb-4" id="addActiviteButton">Ajouter Activité</div>
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

                                    <div class="form-row">
                                        <!-- CreatedAt -->
                                        <input type="hidden" class="form-control" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
" name="createdAt" id="createdAt">

                                        <!-- UpdatedAt -->
                                        <input type="hidden" class="form-control" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
" name="updatedAt" id="updatedAt">

                                         <!-- NomOpération -->
                                         <input type="hidden" class="form-control" value="depot" name="nomOperation" id="nomOperation">
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

            <literal>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chosen.jquery.min.js" id="src"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/produit/produit_choosen.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/produit/produit.js" id="src"><?php echo '</script'; ?>
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
