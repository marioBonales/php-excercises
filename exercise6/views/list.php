<?php
foreach($data as $person):
?>
<div class='field'>
  id: <?= $person->id ?>
  name: <?= $person->name ?>
</div>
<?php
endforeach;
?>
