<?php
/* Smarty version 3.1.30, created on 2020-10-28 10:02:25
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\composant\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9933a16a3fe2_47601925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddbbbbc1ae055281c3be03de423b037db55c2003' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\composant\\liste.html',
      1 => 1603875743,
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
function content_5f9933a16a3fe2_47601925 (Smarty_Internal_Template $_smarty_tpl) {
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
Composant/add" class="btn btn-primary mb-4">Ajouter un Composant</a></center>

                    <form class="form-inline mb-4" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/search" id="q">
                        <input class="pull-right form-control " style="background-color: white;" type="button" id="button-imprimer" value="Imprimer" />
                        <div class="ml-2"></div>
                        <input class="form-control" type="text" placeholder="Rechercher un composant" id="search" aria-label="Search" name="search">
                    </form>

                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des Composants</b>
                        </div>

                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Prix</th>
                                        <th class="text-center">Quantité</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Date Achat</th>
                                        <th class="text-center">Unité</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composants']->value, 'composant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['composant']->value) {
?>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['composant']->value->getNom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['composant']->value->getPrix();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['composant']->value->getQte();?>
</td>
                                        <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['composant']->value->getPrix())*intval($_smarty_tpl->tpl_vars['composant']->value->getQte());?>
 FCFA</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['composant']->value->getDateAchat();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['composant']->value->getUnite()->getNomComplet();?>
</td>
                                        <td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/edit/<?php echo $_smarty_tpl->tpl_vars['composant']->value->getId();?>
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
                        
                        <div class="d-block text-center card-footer">
                            <!-- Pagination -->
                            <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?>
                            <span class="badge badge-pill badge-primary mx-auto"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
                            <div class="d-flex justify-content-between my-4">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="btn btn-primary">&laquo; Precedent</a>
                                <?php }?> 
                                
                                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['nbPage']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Composant/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
public/js/stocks/composant/composant.js"><?php echo '</script'; ?>
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
