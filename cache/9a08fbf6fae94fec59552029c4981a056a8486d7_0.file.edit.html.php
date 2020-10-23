<?php
/* Smarty version 3.1.30, created on 2020-10-23 18:31:02
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\travailleur\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f930546d18ea5_81693664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a08fbf6fae94fec59552029c4981a056a8486d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\travailleur\\edit.html',
      1 => 1603470634,
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
function content_5f930546d18ea5_81693664 (Smarty_Internal_Template $_smarty_tpl) {
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


            <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?>
            <div class="col-md-8 col-xs-8 offset-md-2 latest-post-area pb-120">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">Modification d'un Travailleur</div>
                    <div class="card-body text-dark">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/edit/<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getId();?>
" method="post" enctype="multipart/form-data" id="edit">
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (!isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?>
                                <div class="alert alert-danger">Ce Travailleur n'existe pas dans la base données</div>
                            <?php } else { ?>
                            <div class="infoPersonne" id="infoPersonne">
                                <div class="form-group">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/personnes/travailleurs/<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getPhoto();?>
" alt="Travailleur">
                                </div>
                                <div class="form-row">
                                     <!-- Nom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getNom();?>
">
                                        <input type="hidden" class="form-control" name="idPersonne" id="idPersonne" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getId();?>
" required>
                                    </div>

                                     <!-- Prénom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getPrenom();?>
">
                                    </div>
                                   
                                </div>

                                <div class="form-row">
                                    <!-- Date Naissance -->
                                    <div class="form-group col-md-7">
                                        <label class="control-label">Date De Naissance</label>
                                        <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getDateNaissance();?>
">
                                    </div>

                                    <!-- Adresse -->
                                    <div class="form-group col-md-5">
                                        <label class="control-label">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getAdresse();?>
" required>
                                    </div>
                                </div>

                                <!-- Activités -->
                                <div class="form-row">
                                    <div class="form-group col-lg-12 mx-auto">
                                        <label class="control-label">Activités (maximum 1)</label>
                                        <select name="activite[]" id="idActivite" class="chosen_select  form-control" multiple data-placeholder="Veuiller choisir les activités " required>
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
                                        <div class="activite-invalid invalid-feedback">Vous devez choisir deux activités
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-row">

                                     <!-- Téléphone -->
                                     <div class="form-group col-md-6">
                                        <label class="control-label">Téléphone</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getTelephone();?>
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
                                                    <?php echo $_smarty_tpl->tpl_vars['nationalite']->value->getNom();?>

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
                                            <option value="masculin" <?php if ($_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getSexe() == 'masculin') {?> selected <?php }?>>Masculin</option>
                                            <option value="feminin"  <?php if ($_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getSexe() == 'feminin') {?> selected <?php }?>>Feminin</option>
                                        </select>
                                    </div>
                                </div>
                                
                            <!-- Description -->
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textArea class="form-control" rows="4" name="descriptionTravailleur" id="descriptionTravailleur">
                                    <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getDescription();?>
 <?php }?>
                                </textArea>
                            </div>

                               <!-- dateAdhesion -->
                               <input type="hidden" name="dateAdhesion" id="dateAdhesion" class="form-control" value="<?php echo smarty_modifier_date_format(time(),'%d-%m-%Y %H:%M:%S');?>
" >

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
<div class="alert alert-danger">Ce travailleur n'est pas dans la base de données</div>
<?php }?>
<literal>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chosen.jquery.min.js" id="src"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/personnes/travailleur/travailleur_choosen.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/personnes/travailleur/travailleur.js" id="src"><?php echo '</script'; ?>
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
