<?php
/* Smarty version 3.1.31, created on 2019-09-26 21:14:11
  from "C:\wamp64\www\loja\view\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '3.1.31',
    'unifunc' => 'content_5d8d54530ee033_04971109',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '9a78feb3ccf0e9fcfbbfb294e4b39b6e483c325a' =>
                array(
                    0 => 'C:\\wamp64\\www\\loja\\view\\login.tpl',
                    1 => 1504203934,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_5d8d54530ee033_04971109(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) { ?>


        <?php } else { ?>

            <section class="row" id="fazerlogin">

                <form name="cliente_login" method="post" action="">

                    <div class="col-md-4 text-center">


                    </div>

                    <!---  aqui estão os campos -->
                    <div class="col-md-4">


                        <div class="form-group">
                            <label></i> Email: </label>
                            <input type="email" class="form-control " name="txt_email" value=""
                                   placeholder="Digite seu email" required autocomplete="off">

                        </div>


                        <div class="form-group">
                            <label> Senha: </label>
                            <input type="password" class="form-control " name="txt_senha" value=""
                                   placeholder="Digite sua senha" required>

                        </div>


                        <div class="form-group">

                            <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i>
                                Entrar
                            </button>


                        </div>
                        <div class="form-group">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value; ?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>


                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value; ?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>


                        </div>


                    </div><!-- fim dos campos -->


                    <div class="col-md-4 text-center">


                    </div>

                </form>


            </section>

        <?php } ?>


    <?php }
}
