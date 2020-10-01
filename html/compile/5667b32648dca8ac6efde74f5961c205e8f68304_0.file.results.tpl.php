<?php
/* Smarty version 3.1.36, created on 2020-10-01 07:21:28
  from 'C:\wamp64\www\html_to_pdf\html\results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7583781ee019_01245957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5667b32648dca8ac6efde74f5961c205e8f68304' => 
    array (
      0 => 'C:\\wamp64\\www\\html_to_pdf\\html\\results.tpl',
      1 => 1601536536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:.header.tpl' => 1,
    'file:.footer.tpl' => 1,
  ),
),false)) {
function content_5f7583781ee019_01245957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-results">

	<div class="clearfix my-4">
		<div class="float-left font-weight-bold border-bottom">Notification No. AMR/ROU-TR20/COV19</div> 
		<div class="float-right font-weight-bold border-bottom">Dated: 01.20.2020</div>
	</div>


    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">FIRSTNAME</th>
                <th scope="col">LASTNAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">SCORE</th>
                <th scope="col">GROUP</th>
            </tr>
        </thead>
        <tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
				<tr>
					<th scope="row"><?php echo $_smarty_tpl->tpl_vars['row']->value['index'];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['lastname'];?>
</td> 
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td> 
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['score'];?>
</td> 
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['group'];?>
</td> 
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </tbody>
    </table>

	<p>
		<b>Note:</b>
		Its just generated random users and random scores. Means no reality. List created for make example result page. And also this list can convert to pdf
	</p>
	<p>
	Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quis odit atque doloremque voluptatem corrupti recusandae? Repellat cupiditate harum voluptatem ea dolorem aperiam. A minima sint expedita rerum veritatis eveniet!</p>


</div>


<?php $_smarty_tpl->_subTemplateRender("file:.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
