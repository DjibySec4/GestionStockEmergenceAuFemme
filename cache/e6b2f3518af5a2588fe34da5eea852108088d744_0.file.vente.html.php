<?php
/* Smarty version 3.1.30, created on 2020-10-29 18:43:32
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\produit\vente.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9aff444585d8_20657551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b2f3518af5a2588fe34da5eea852108088d744' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\produit\\vente.html',
      1 => 1603993407,
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
function content_5f9aff444585d8_20657551 (Smarty_Internal_Template $_smarty_tpl) {
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
Produit/searchProduitAVendre" id="q">
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
                                        <th class="text-center">Photo</th>
                                        <th class="text-center">Reference</th>
                                        <th class="text-center">Désignation</th>
                                        <th class="text-center">Quantité</th>
                                        <th class="text-center">Prix</th>
                                        <th class="text-center">Commander</th>
                                        <th class="text-center">Argent</th>
                                        <th class="text-center">Ajouter au Panier</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
                                    <tr>
                                        <td class="text-center"><img width="60px" height="60px" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/stocks/produits/<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPhoto();?>
" alt=""></td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getNom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getQte();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix();?>
</td>
                                        
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/ajouterAuPanier" method="POST">
                                            <input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
">
                                            <input type="hidden" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getNom();?>
">
                                            <input type="hidden" name="prix" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix();?>
">
                                            <td class="text-center"><input type="number" name="qte" min="1" max="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getQte();?>
" value="1"></td>
                                            <td class="text-center"><input type="number" name="argent" min="1" value="0"></td>
                                            <td class="text-center"><input height="30px" type="image" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/produits/panier.jpg" value="submit" ></td>
                                       </form>
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
