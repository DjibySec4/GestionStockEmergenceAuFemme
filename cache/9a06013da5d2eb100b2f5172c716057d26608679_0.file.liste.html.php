<?php
/* Smarty version 3.1.30, created on 2020-10-23 17:44:40
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\travailleur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f92fa68c39c54_42516400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a06013da5d2eb100b2f5172c716057d26608679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\travailleur\\liste.html',
      1 => 1603444641,
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
function content_5f92fa68c39c54_42516400 (Smarty_Internal_Template $_smarty_tpl) {
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


            <div class="row">
                <div class="col-md-12">
                    <center><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/add" class="btn btn-primary mb-4">Ajouter un nouveau Travailleur</a></center>
                    <form class="form-inline ml-auto navbar-search mb-4 mr-5" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/search" id="q">
                        <input class="form-control col-lg-3 col-xs-1" type="text" placeholder="Rechercher un travailleur" id="search" aria-label="Search" name="search">
                    </form>
                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des Travailleurs</b>
                        </div>

                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">photo</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Prenom</th>
                                        <th class="text-center">Adresse</th>
                                        <th class="text-center">Date Naissance</th>
                                        <th class="text-center">Téléphone</th>
                                        <th class="text-center">sexe</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['travailleurs']->value, 'travailleur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['travailleur']->value) {
?>
                                    <tr>
                                        <td><img width="60px" height="60px" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/personnes/travailleurs/<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getPhoto();?>
" alt=""></td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getNom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getPrenom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getAdresse();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getDateNaissance();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getTelephone();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getPersonne()->getSexe();?>
</td>
                                        <td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/edit/<?php echo $_smarty_tpl->tpl_vars['travailleur']->value->getId();?>
">Editer</a></td>
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="d-block text-center card-footer">
                           <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?>
                           <span class="badge badge-pill badge-primary mx-auto"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
                           <div class="d-flex justify-content-between my-4">
                               <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="btn btn-primary">&laquo; Precedent</a>
                               <?php }?> 
                               
                               <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['nbPage']->value) {?>
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Travailleur/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="btn btn-primary ml-auto">Suivant &raquo;</a>
                               <?php }?>
                               </div>
                           <?php }?>
                            <strong><p class="text-muted">Emérgence aux femmes </p></strong>
                        </div>

                    </div>
                </div>
            </div>
           
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/personnes/travailleur/travailleur.js"><?php echo '</script'; ?>
>
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
