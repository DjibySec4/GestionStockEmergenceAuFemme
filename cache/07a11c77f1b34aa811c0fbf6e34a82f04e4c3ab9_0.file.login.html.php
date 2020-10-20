<?php
/* Smarty version 3.1.30, created on 2020-10-17 20:25:39
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8b3723c70928_67358983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a11c77f1b34aa811c0fbf6e34a82f04e4c3ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\login.html',
      1 => 1602958852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b3723c70928_67358983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/Logo_Arenebi_150.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/login/css/main.css">
    <!--===============================================================================================-->
    <?php echo '<script'; ?>
 language="JavaScript">
        function vide() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            if (email == '' || password == '') {
                alert('Veuillez remplir tous les champs SVP !');
                return false;
            } else {
                return true;
            }
            return false;
        }
    <?php echo '</script'; ?>
>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo/logo.png" style="margin-top: 20%;" alt="...">
                </div>

                <form id="form" class="login100-form validate-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/logon">
                    <span class="login100-form-title">
						Connexion
                    </span> 
                    <?php if (isset($_smarty_tpl->tpl_vars['login_error']->value)) {?>
                        <div style="color: #ac2925"><?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
</div>
                    <?php }?>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" id="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style="margin-bottom: 40%;" onclick="return vide();" name="login" value="Login">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt2" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Register/index">
                            S'inscrire
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
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
    <!--===============================================================================================-->
    <?php echo '<script'; ?>
 src="public/templates/login/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
