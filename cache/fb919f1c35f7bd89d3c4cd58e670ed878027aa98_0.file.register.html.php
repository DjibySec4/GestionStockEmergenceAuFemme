<?php
/* Smarty version 3.1.30, created on 2020-10-26 11:06:24
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\pages\user\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f969fa063fae2_06406577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb919f1c35f7bd89d3c4cd58e670ed878027aa98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\pages\\user\\register.html',
      1 => 1603706782,
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
function content_5f969fa063fae2_06406577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    
    <!-- On affiche cette page k si un user est authentifié (user ou admin) -->

    <!-- <====== Contenu du head =====> -->
    <?php $_smarty_tpl->_subTemplateRender("file:../../partials/extract_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <body class="bg-gradient-info">
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



            <div class="container">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Créer un compte utilisateur </h1>
                                    </div>
                                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Register/registe">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="prenom" id="prenom" placeholder="Prenom">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nom" id="nom" placeholder="Nom">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block" name="valider" value="Register Account"/>
                                            <input type="reset" class="btn btn-danger btn-user btn-block" name="annuler" value="Annuler"/>
                                        </div>
                                    </form>

                                    <div class="text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/index">Déjà inscrit ? Login!</a><br/>
                                        <h6 class="nav-link" href="#">A noter que l'utilisateur créer à tous des droits par defaut veuillez le modifier ultérieurement si besoin</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-login100 col-lg">
                                <div class="login100-pic js-tilt" data-tilt>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo/logo.png" style="margin-top: 30%; margin-left: 90px; margin-bottom: 20%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
            <!--===============================================================================================-->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
            <!--===============================================================================================-->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
            <!--===============================================================================================-->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/tilt/tilt.jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                $('.js-tilt').tilt({
                    scale: 1.1
                })
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
