<div class='field'>
  Id: <?= $data->id ?>
</div>
<div class='field'>
  Name: <?= $data->name ?>
</div>
<div class='field'>
  Last Name: <?= $data->last_name ?>
</div>
<div class='field'>
  Age: <?= $data->age ?>
</div>
<div class='field'>
  Telephone: <?= $data->telephone ?>
</div>
<div class='field'>
  email: <?= $data->email ?>
</div>
<a href="/?page=edit&id=<?= $data->id?>">Edit</a>
<a href="/?page=delete&id=<?= $data->id?>">Delete</a>
