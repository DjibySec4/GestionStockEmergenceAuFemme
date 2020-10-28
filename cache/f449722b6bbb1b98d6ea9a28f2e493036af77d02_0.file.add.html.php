<?php
/* Smarty version 3.1.30, created on 2020-10-26 10:59:05
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\travailleur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f969de906dd94_09076456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f449722b6bbb1b98d6ea9a28f2e493036af77d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\travailleur\\add.html',
      1 => 1603706334,
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
function content_5f969de906dd94_09076456 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="bg-primary text-white" style="height:45px;"><h2>Ajout d'un Travailleur</h2></div>
                    <div class="card-body text-dark">
                        <div class="card text-center mb-4">
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/liste/1" class="btn btn-pribg-primary mt-4"><b><strong>Afficher la liste des travailleurs</strong></b></a></p>
                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/add" method="post" enctype="multipart/form-data" id="new" novalidate>
                            <?php if (isset($_smarty_tpl->tpl_vars['vide']->value) && $_smarty_tpl->tpl_vars['vide']->value == 1) {?>
                                <div class="alert alert-danger">Tous les champs sont requis</div>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['activite_ajouter']->value)) {?>
                                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['activite_ajouter']->value;?>
</div>
                            <?php }?>

                            <div class="infoPersonne" id="infoPersonne">
                                <div class="form-row">
                                    <!-- Nom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getNom();?>
" <?php }?>>
                                    </div>

                                    <!-- Prénom -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Prenom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getPrenom();?>
" <?php }?>>
                                    </div>

                                </div> 

                                <div class="form-row">
                                    <!-- Date Naissance -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Date De Naissance</label>
                                        <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
                                    </div>

                                    <!-- Adresse -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse" <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getAdresse();?>
" <?php }?> required>
                                    </div>
                                </div>

                                <!-- Activités -->
                                <div class="form-row">
                                    <div class="form-group col-lg-12 mx-auto" id="selectionnerUneActivite">
                                        <label class="control-label">Activités (maximum 1)</label>
                                        <select name="activite[]" id="idActivite" class="chosen_select form-control" multiple data-placeholder="Veuiller choisir les activités" required>
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
                                <!-- Ajouter une activité (Masqué / Afficher) -->
                                <div class="btn btn-primary" id="newActivite">Ajouter une nouvelle activité</div>
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
                                    <div class="btn btn-primary" id="addActiviteButton">Ajouter Activité</div>
                
                                </div>


                                <div class="form-row">
                                    <!-- Téléphone -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Téléphone</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" <?php if (isset($_smarty_tpl->tpl_vars['travailleur']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getTelephone();?>
" <?php }?>>
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
" <?php if ($_smarty_tpl->tpl_vars['nationalite']->value->getNom() == 'Sénégalais') {?> selected
                                                <?php }?>><?php echo $_smarty_tpl->tpl_vars['nationalite']->value->getNom();?>
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
                                        <input type="file" class="form-control" accept="image/png,image/jpeg,image/jpg" name="photo" id="photo">
                                    </div>

                                    <!-- Sexe -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Sexe</label>
                                        <select name="sexe" id="sexe" class="form-control custom-select" required>
                                            <option value="masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select>
                                    </div>
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
