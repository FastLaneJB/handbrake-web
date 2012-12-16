<?php /* Smarty version Smarty-3.1.12, created on 2012-12-16 19:49:45
         compiled from "smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179520482150cdfd2d059d85-01449541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b06d19c646272078c10cfc04a699bd60ab3df33' => 
    array (
      0 => 'smarty/templates/index.tpl',
      1 => 1355687364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179520482150cdfd2d059d85-01449541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cdfd2d229107_89741694',
  'variables' => 
  array (
    'progress_percentage' => 0,
    'handbrake_version' => 0,
    'video_name' => 0,
    'video_duration' => 0,
    'progress_avg_fps' => 0,
    'progress_eta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cdfd2d229107_89741694')) {function content_50cdfd2d229107_89741694($_smarty_tpl) {?><html>
  <head>
    <title>Handbrake <?php echo $_smarty_tpl->tpl_vars['progress_percentage']->value;?>
%</title>
    <meta http-equiv="refresh" content="15">
  </head>
  <body>
    <center><img src="images/handbrake-logo.png" /></center><br>
    <center><h1>HandBrake <?php echo $_smarty_tpl->tpl_vars['handbrake_version']->value;?>
 Encode</h1></center>
    <br><br>
    <table border="1">
      <tr>
        <td>Source Name</td>
        <td><?php echo $_smarty_tpl->tpl_vars['video_name']->value;?>
</td>
      </tr>
      <tr>
        <td>Video Duration</td>
        <td><?php echo $_smarty_tpl->tpl_vars['video_duration']->value;?>
</td>
      </tr>
      <tr>
        <td>Encode Progress</td>
        <td><img src="lib/progressbar.php?max=100&val=<?php echo $_smarty_tpl->tpl_vars['progress_percentage']->value;?>
" /> <?php echo $_smarty_tpl->tpl_vars['progress_percentage']->value;?>
%</td>
      </tr>
      <tr>
        <td>Encode Average FPS</td>
        <td><?php echo $_smarty_tpl->tpl_vars['progress_avg_fps']->value;?>
 fps</td>
      </tr>
      <tr>
        <td>Encode ETA</td>
        <td><?php echo $_smarty_tpl->tpl_vars['progress_eta']->value;?>
</td>
      </tr>
    </table>
    <br>
  </body>
</html>
<?php }} ?>