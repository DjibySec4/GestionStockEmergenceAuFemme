<?php
/* Smarty version 3.1.30, created on 2020-10-28 10:36:55
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\partials\extract_index\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f993bb7236f78_65452510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac8eefde27411d2e75f628cb7e84d361bc8d6c7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\partials\\extract_index\\content.html',
      1 => 1603877814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f993bb7236f78_65452510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Activités</div>
                    <div class="widget-subheading">Total des activités</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?php echo $_smarty_tpl->tpl_vars['nbActivite']->value;?>
</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Produits</div>
                    <div class="widget-subheading">Total des produits</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?php echo $_smarty_tpl->tpl_vars['nbProduit']->value;?>
</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Travailleurs</div>
                    <div class="widget-subheading">Total des travailleurs</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?php echo $_smarty_tpl->tpl_vars['nbTravailleur']->value;?>
</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <center><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/add" class="btn btn-primary mb-4">Ajouter un Produit</a></center>
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
                            <th class="text-center">Photo</th>
                            <th class="text-center">Reference</th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Quantité</th>
                            <th class="text-center">Prix</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">En Promotion</th>
                            <th class="text-center">Date Dépot</th>
                            <th class="text-center">Date de Dérniere Modification</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
                        <tr>
                            <td><img width="60px" height="60px" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
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
                            <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['produit']->value->getPrix())*intval($_smarty_tpl->tpl_vars['produit']->value->getQte());?>
 FCFA</td>
                            <td class="text-center"> <?php if ($_smarty_tpl->tpl_vars['produit']->value->getEnPromotion() == 1) {?> <font color="green">Oui</font> <?php } else { ?> <font color="red">Non</font> <?php }?> </td>
                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getCreatedAt();?>
</td>
                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getUpdatedAt();?>
</td>
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

</div><?php }
}
