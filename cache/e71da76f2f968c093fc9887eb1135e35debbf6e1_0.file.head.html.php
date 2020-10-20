<?php
/* Smarty version 3.1.30, created on 2020-10-18 16:17:17
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\partials\extract_index\head.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8c4e6d9ed227_34153617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71da76f2f968c093fc9887eb1135e35debbf6e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\partials\\extract_index\\head.html',
      1 => 1603030636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8c4e6d9ed227_34153617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="djibysec4@gmail.com">

    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo/logo.png"/>

    <title>
        <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php } else { ?>
            Géstion des activités
        <?php }?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/templates/templateGestionStockEaf/main.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/slide.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/chosen.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>


</head><?php }
}
