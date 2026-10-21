<?php
/** @var \Atusan\Controller\Module $module */

$menuTop = $module->findComponentById('menuTop');
 ?>
<nav><?php $menuTop->write() ?></nav>
<content id="frame">
  <?php $module->write() ?>
</content>
<footer></footer>
<script>
menuTop.onMenuItemClick = function (item) {
  if (item.id == "mi_close") {
    if (confirm('¿Cerrar?')) Atusan.send('/close', { done: rs => Atusan.openModule('/login') });
  } else {
    Atusan.openModule(item.route);
  }
};
</script>