<?php
foreach($data as $person):
?>
<div class='field'>
  id: <a href="/?page=show&id=<?= $person->id ?>"><?= $person->id ?></a>
  name: <?= $person->name ?>
</div>
<?php
endforeach;
?>
