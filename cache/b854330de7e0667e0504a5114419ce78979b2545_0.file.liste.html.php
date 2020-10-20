<?php
/* Smarty version 3.1.30, created on 2020-10-19 22:17:21
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\user\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8df451a3c8e7_37904731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b854330de7e0667e0504a5114419ce78979b2545' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\user\\liste.html',
      1 => 1603138292,
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
function content_5f8df451a3c8e7_37904731 (Smarty_Internal_Template $_smarty_tpl) {
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
Register/index" class="btn btn-primary mb-4">Ajouter un nouveau Utilisateur</a></center>
                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des Utilisateurs</b>
                        </div>

                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Identifiant</th>
                                        <th class="text-center">Prénom</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Email</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                    <tr>
                                        <td class="text-center text-muted"><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
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
                            <strong><p class="text-muted">Emérgence aux femmes </p></strong>
                        </div>
                    </div>
                </div>
            </div>
            
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
