<?php
/* Smarty version 3.1.30, created on 2020-10-21 15:35:44
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\gestionnaire\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f903930e17dc8_48082387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b9f86ecbffc3050c2006baca6b20f1263e7c14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\gestionnaire\\edit.html',
      1 => 1603287279,
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
function content_5f903930e17dc8_48082387 (Smarty_Internal_Template $_smarty_tpl) {
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


            <?php if (isset($_smarty_tpl->tpl_vars['gestionnaire']->value)) {?>
            <div class="col-md-8 col-xs-8 offset-md-2 latest-post-area pb-120">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">Modification d'un Géstionnaire</div>
                    <div class="card-body text-dark">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Gestionnaire/edit/<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getId();?>
" method="post" enctype="multipart/form-data" id="edit">
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (!isset($_smarty_tpl->tpl_vars['gestionnaire']->value)) {?>
                                <div class="alert alert-danger">Ce géstionnaire n'existe pas dans la base données</div>
                            <?php } else { ?>
                            <div class="infoPersonne" id="infoPersonne">
                                <div class="form-group">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/personnes/gestionnaires/<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getPhoto();?>
" alt="Gestionnaire">
                                </div>
                                <div class="form-row">
                                     <!-- Nom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getNom();?>
">
                                        <input type="hidden" class="form-control" name="idPersonne" id="idPersonne" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getId();?>
" required>
                                    </div>

                                     <!-- Prénom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getPrenom();?>
">
                                    </div>
                                   
                                </div>

                                <div class="form-row">
                                    <!-- Date Naissance -->
                                    <div class="form-group col-md-7">
                                        <label class="control-label">Date De Naissance</label>
                                        <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getDateNaissance();?>
">
                                    </div>

                                    <!-- Adresse -->
                                    <div class="form-group col-md-5">
                                        <label class="control-label">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getAdresse();?>
" required>
                                    </div>
                                </div>

                                <!-- Activités -->
                                <div class="form-row">
                                    <div class="form-group col-lg-12 mx-auto">
                                        <label class="control-label">Activités (maximum 2)</label>
                                        <select name="activite[]" id="idActivite" class="chosen_select  form-control" multiple data-placeholder="Veuiller choisir les activités " required>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activites']->value, 'activite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activite']->value) {
?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeActivites']->value, 'mesActivite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mesActivite']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['activite']->value == $_smarty_tpl->tpl_vars['mesActivite']->value) {?>
                                                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['activite']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['mesActivite']->value->getNom();?>
</option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['activite']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['activite']->value->getNom();?>
</option>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select>
                                        <div class="activite-invalid invalid-feedback">Vous devez choisir deux activités
                                        </div>
                                    </div>
                                </div>

                                <!-- Fourniseurs -->
                                <div class="form-row">
                                    <div class="form-group col-lg-12 mx-auto">
                                        <label class="control-label">Fournisseurs (maximum 2)</label>
                                        <select name="fournisseur[]" id="idFournisseur" class="chosen_select  form-control" multiple data-placeholder="Veuiller choisir les activités " required>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fournisseurs']->value, 'fournisseur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fournisseur']->value) {
?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeFournisseurs']->value, 'mesFournisseur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mesFournisseur']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['fournisseur']->value == $_smarty_tpl->tpl_vars['mesFournisseur']->value) {?>
                                                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['fournisseur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['mesFournisseur']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['mesFournisseur']->value->getPersonne()->getNom();?>
</option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['fournisseur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['fournisseur']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['mesFournisseur']->value->getPersonne()->getNom();?>
</option>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select>
                                        <div class="fournisseur-invalid invalid-feedback">Vous devez choisir deux fournisseurs
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">

                                     <!-- Téléphone -->
                                     <div class="form-group col-md-6">
                                        <label class="control-label">Téléphone</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getTelephone();?>
">
                                    </div>
                                   
                                    <!-- Nationalité -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nationalite</label>
                                        <select name="nationalite" id="nationalite" class="form-control">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nationalites']->value, 'nationalite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nationalite']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['nationalite']->value->getId();?>
" selected>
                                                    <?php echo utf8_encode($_smarty_tpl->tpl_vars['nationalite']->value->getNom());?>

                                                </option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <!-- Photo -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Photo</label>
                                        <input type="file" class="form-control" name="photo" id="photo">
                                    </div>

                                    <!-- Sexe -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Sexe</label>
                                        <select name="sexe" id="sexe" class="form-control custom-select" required>
                                            <option value="masculin" <?php if ($_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getSexe() == 'masculin') {?> selected <?php }?>>Masculin</option>
                                            <option value="feminin"  <?php if ($_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getSexe() == 'feminin') {?> selected <?php }?>>Feminin</option>
                                        </select>
                                    </div>
                                </div>
                                
                            <!-- Description -->
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textArea class="form-control" rows="4" name="descriptionGestionnaire" id="descriptionGestionnaire">
                                     <?php if (isset($_smarty_tpl->tpl_vars['gestionnaire']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['gestionnaire']->value->getPersonne()->getDescription();?>
 <?php }?>
                                </textArea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Modifier" class="btn btn-primary" name="modifier">
                                <input type="submit" value="Annuler" class="btn btn-danger" name="annulerGestionnaire">
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
<?php } else { ?>
<div class="alert alert-danger">Ce gestionnaire n'a pas été trouvé dans la base de données</div>
<?php }?>
<literal>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chosen.jquery.min.js" id="src"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/personnes/gestionnaire/gestionnaire_choosen.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/personnes/gestionnaire/gestionnaire.js" id="src"><?php echo '</script'; ?>
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
