<?php
/* Smarty version 3.1.30, created on 2020-10-29 18:49:13
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\produit\panier.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9b0099f32157_56747478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787da840fe3b432864bf41f9e8b5d2b0584907ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\produit\\panier.html',
      1 => 1603993752,
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
function content_5f9b0099f32157_56747478 (Smarty_Internal_Template $_smarty_tpl) {
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

                    <div class="row">

                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Stock Actuel</div>
                                            <div class="widget-subheading">Nombre de produit en stock </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-success"><?php echo $_smarty_tpl->tpl_vars['stockActuel']->value;?>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Produits périmés</div>
                                            <div class="widget-subheading">Nombre de produit périmé</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><?php echo $_smarty_tpl->tpl_vars['nbProduitsPerime']->value;?>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Revenu</div>
                                            <div class="widget-subheading">Le revenu total en FCFA</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger"><?php echo $_smarty_tpl->tpl_vars['revenus']->value;?>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="form-inline mb-4" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/search" id="q">
                        <input class="pull-right form-control " style="background-color: white;" type="button" id="button-imprimer" value="Imprimer" />
                        <div class="ml-2"></div>
                        <input class="form-control" type="text" placeholder="Rechercher un produit" id="search" aria-label="Search" name="search">
                    </form>

                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Vente de produit</b>
                        </div>

                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Reference</th>
                                        <th class="text-center">Désignation</th>
                                        <th class="text-center">Prix</th>
                                        <th class="text-center">Quantité</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['designation']->value;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['prix']->value;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
</td>
                                    </tr>

                                    <tr>
                                        <td colspan="1"></td>
                                        <td class="text-center"> Total : <span class="badge badge-success btn-lg"><font size="3px"><b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 FCFA</b></font></span> </td>
                                        <td class="text-center"> Argent : <span class="badge badge-warning btn-lg"><font size="3px" color="white"><b><?php echo $_smarty_tpl->tpl_vars['argent']->value;?>
 FCFA</b></font></span> </td>
                                        <td class="text-center"> Money : <span class="badge badge-danger btn-lg"><font size="3px"><b><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
 FCFA</b></font></span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <form action="" class="mx-auto">
                            <input type="text" class="btn btn-primary mt-4 mb-4" value="Valider la commande">
                        </form>
                        <div class="d-block text-center card-footer">
                            <!-- Pagination -->
                            <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?>
                            <span class="badge badge-pill badge-primary mx-auto"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
                            <div class="d-flex justify-content-between my-4">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="btn btn-primary">&laquo; Precedent</a>
                                <?php }?> 
                                
                                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['nbPage']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
public/js/stocks/produit/produit.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                  // Bouton d'impression
                var bouton = document.getElementById('button-imprimer');
                bouton.onclick = function(e) {
                  e.preventDefault();
                  print();
                }
            <?php echo '</script'; ?>
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
