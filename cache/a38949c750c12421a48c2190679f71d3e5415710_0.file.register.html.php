<?php
/* Smarty version 3.1.30, created on 2020-10-15 15:06:37
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\administration\user\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f88495d74c100_18108623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38949c750c12421a48c2190679f71d3e5415710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\administration\\user\\register.html',
      1 => 1602767197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88495d74c100_18108623 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center"> 
                            <h1 class="h4 text-gray-900 mb-4"><b>Créer un compte</b></h1>
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
/Login/index"><b>Déjà inscrit ? Login!</b></a><br/>
                            <h5 class="text-muted mt-4" >A noter que vous avez un profil utilisateur par defaut !</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo/logo.png" style="margin-top: 40%; margin-left: 18%;" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Animation sur le logo -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>

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
<!-- End Animation sur le logo -->


<!-- Bootstrap core JavaScript-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Core plugin JavaScript-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

<!-- Custom scripts for all pages-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/register/js/sb-admin-2.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
