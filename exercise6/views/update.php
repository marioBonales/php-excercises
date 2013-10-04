<!DOCTYPE html>
<head>
  <title>Exercise 6</title>
</head>
<body>
  <form action='/?page=update' method='post'>
    <input type="hidden" name="id" value="<?= $data? $data->id :'' ?>">
    <div class='field'>
      <label>
        Name:
      </label>
      <input name="name" value="<?= $data? $data->name :'' ?>">
    </div>
    <div class='field'>
      <label>
        Last Name:
      </label>
      <input name="last_name" value="<?= $data? $data->last_name :'' ?>">
    </div>
    <div class='field'>
      <label>
        Age:
      </label>
      <input name="age" value="<?= $data? $data->age :''?>">
    </div>
    <div class='field'>
      <label>
        Telephone:
      </label>
      <input name="telephone" value="<?= $data? $data->telephone :'' ?>">
    </div>
    <div class='field'>
      <label>
        Email:
      </label>
      <input name="email" value="<?= $data? $data->email :'' ?>">
    </div>
    <div class='field'>
      <input type='submit' value='Save Person'>
    </div>
  </form>
</body>
