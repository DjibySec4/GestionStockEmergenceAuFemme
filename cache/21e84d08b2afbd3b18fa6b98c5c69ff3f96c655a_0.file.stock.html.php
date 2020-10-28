<?php
/* Smarty version 3.1.30, created on 2020-10-28 09:51:59
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\produit\stock.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f99312f5e0209_84172419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21e84d08b2afbd3b18fa6b98c5c69ff3f96c655a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\produit\\stock.html',
      1 => 1603875114,
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
function content_5f99312f5e0209_84172419 (Smarty_Internal_Template $_smarty_tpl) {
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
 FCFA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-inline" >
                        <p class="text-muted" style="margin-left:auto; margin-right: auto;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/add" class="btn btn-primary">Ajouter un Produit</a>
                            <a href="" id="vendreUnProduit" class="btn btn-primary">Gerer Stock</a>
                        </p>
                    </div>

                    <form class="form-inline mb-4" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/search" id="q">
                        <input class="pull-right form-control " style="background-color: white;" type="button" id="button-imprimer" value="Imprimer" />
                        <div class="ml-2"></div>
                        <input class="form-control" type="text" placeholder="Rechercher un produit" id="search" aria-label="Search" name="search">
                    </form>

                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des Produits</b>
                        </div>

                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Date Fabrication</th> 
                                        <th class="text-center">Date de Péremsion</th>
                                        <th class="text-center">Etat (Périmé ou pas ?)</th>
                                        <th class="text-center">Stock</th>
                                        <th class="text-center ">Historique</th>
                                        <th class="text-center selectionnerProduit">Selection</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
                                        <?php $_smarty_tpl->_assignInScope('jourCreation', date('d',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateFabtication())));
?>
                                        <?php $_smarty_tpl->_assignInScope('moisCreation', date('m',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateFabtication())));
?>
                                        <?php $_smarty_tpl->_assignInScope('anneeCreation', date('Y',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateFabtication())));
?>

                                        <?php $_smarty_tpl->_assignInScope('jourPeremsion', date('d',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateDePeremsion())));
?>
                                        <?php $_smarty_tpl->_assignInScope('moisPeremsion', date('m',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateDePeremsion())));
?>
                                        <?php $_smarty_tpl->_assignInScope('anneePeremsion', date('Y',strtotime($_smarty_tpl->tpl_vars['produit']->value->getDateDePeremsion())));
?>
                                        <tr>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getNom();?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['jourCreation']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['moisCreation']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anneeCreation']->value;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['jourPeremsion']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['moisPeremsion']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anneePeremsion']->value;?>
</td>
                                            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['dateActuelle']->value >= $_smarty_tpl->tpl_vars['produit']->value->getDateDePeremsion()) {?> <font color="red">Pénrimé</font> <?php } else { ?> Bon état <?php }?></td>
                                            <td class="text-center"><span class="badge badge-success"><h6><b><?php echo $_smarty_tpl->tpl_vars['produit']->value->getQte();?>
</b></h6></span></td>
                                            <td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/histoProduit/<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
"><span class="badge badge-danger btn-lg"><b><font size="2px">Afficher Historique</font></b></span></a></td>
                                            <td class="text-center selectionnerProduit"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/updateStock/<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
">Séléctionner</a></td>
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
Produit/listeStock/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="btn btn-primary">&laquo; Precedent</a>
                                <?php }?> 
                                
                                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['nbPage']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/listeStock/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="btn btn-primary ml-auto">Suivant &raquo;</a>
                                <?php }?>
                                </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/produit/stock.js" id="src"><?php echo '</script'; ?>
>
            <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/stocks/produit/produit.js" id="src"><?php echo '</script'; ?>
> -->
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
