<?php
/* Smarty version 3.1.30, created on 2020-10-22 15:10:11
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\userroles\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9184b3f00c20_46652652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa3c159b2d9b8dff08254064fc657167843a48f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\userroles\\liste.html',
      1 => 1603372201,
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
function content_5f9184b3f00c20_46652652 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des utilisateurs</b>
                        </div>
                        <!-- Utilisateur -->
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Identifiant</th>
                                        <th class="text-center">Prenom</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                    <tr
                                        <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['idUser']->value == $_smarty_tpl->tpl_vars['user']->value->getId()) {?>
                                                class="alert alert-primary"
                                            <?php }?>
                                        <?php }?>
                                    >
                                        <td class="text-center text-muted"><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affectation/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Affecter un role</a></td>
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

            <!-- Roles -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header"><b>Liste des roles disponibles</b></div>

                        <!-- Utilisateur -->
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Libelle du role</th>
                                        <th class="text-center">Affectation</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affecter">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
</td>
                                        <td class="text-center">
                                            <input type="hidden" name="idUser" <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
" <?php }?> />
                                            <input type="checkbox"
                                                <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['role']->value->chercherRole($_smarty_tpl->tpl_vars['usersroles']->value,$_smarty_tpl->tpl_vars['role']->value->getNom());?>

                                                <?php }?>
                                            name="roles[]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
"/>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <input class="btn btn-success" name="AttributionRole" type="submit" value="Attribuez lui ces roles"/>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-block text-center card-footer">
                            <strong><p class="text-muted">Emérgence aux femmes </p></strong>
                        </div>
                    </div>
                </div>
            </div>









            <!-- <div class="container">
                <div class="card">
                    <div class="card-header">Liste des utilisateurs</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-condensed">
                            <tr>
                                <th>Identifiant</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                <tr
                                        <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['idUser']->value == $_smarty_tpl->tpl_vars['user']->value->getId()) {?>
                                                class="alert alert-primary"
                                            <?php }?>
                                        <?php }?>
                                >
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affectation/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Affecter un role</a></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </table>


                        <div>Liste des roles disponible</div>
                        <table class="table">
                            <tr>
                                <th>Libelle du role</th>
                                <th>Affectation</th>
                            </tr>
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affecter">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>

                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
</td>
                                        <td>
                                            <input type="hidden" name="idUser" <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
" <?php }?> />
                                            <input type="checkbox"
                                                <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['role']->value->chercherRole($_smarty_tpl->tpl_vars['usersroles']->value,$_smarty_tpl->tpl_vars['role']->value->getNom());?>

                                                <?php }?>
                                            name="roles[]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
"/></td>
                                    </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                                <tr>
                                    <td colspan="2">
                                        <input class="btn btn-success" type="submit" value="Attribuer roles"/>
                                    </td>
                                </tr>
                                <?php }?>
                            </form>
                        </table>

                    </div>
                </div>
            </div> -->

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
