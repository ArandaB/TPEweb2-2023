<?php
/* Smarty version 4.3.4, created on 2023-10-14 22:33:51
  from 'C:\xampp\htdocs\trabajotp1\templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652afb2f8920b4_61743645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae42dd15ad9d9d94eec22eba38f934b43e7ce1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1\\templates\\agregarCategoria.tpl',
      1 => 1697315120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652afb2f8920b4_61743645 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="agregarcategoria" enctype="multipart/form-data">               
    <label>titulo :</label><input type="text" name="categorianuevatitulo" required>
    <input type="submit">
</form><?php }
}
