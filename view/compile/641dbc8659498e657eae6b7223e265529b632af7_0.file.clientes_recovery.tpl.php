<?php
/* Smarty version 3.1.31, created on 2019-09-26 21:17:13
  from "C:\wamp64\www\loja\view\clientes_recovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5d8d5509551b83_02452234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641dbc8659498e657eae6b7223e265529b632af7' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\clientes_recovery.tpl',
      1 => 1504564399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8d5509551b83_02452234 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form><?php }
}
