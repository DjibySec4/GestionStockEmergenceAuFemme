<?php
/* Smarty version 3.1.30, created on 2020-10-16 17:05:53
  from "C:\xampp\htdocs\PHP\SamaneMVC\Gestion_Stock_Eaf_Officiel\src\view\administration\roles\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f89b6d17cc572_86220815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a0d7a1a1b3a21b3abb0fb84bec6685d9a4e160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\Gestion_Stock_Eaf_Officiel\\src\\view\\administration\\roles\\liste.html',
      1 => 1592618690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5f89b6d17cc572_86220815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="card">
        <div class="card-header">Liste des roles</div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Identifiant du role</th>
                    <th>Libelle du role</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
