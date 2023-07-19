<?php $lenght = $_GET['lenght'] ?? '';
$password = generatePassword ($lenght);
function generatePassword (lenght){
  $password = random_bytes(length);
  var_dump[$password];
  return
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Strong password generator</title>
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">scegli il numero di caratteri</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="lenght">
  </div>
  <button type="submit" class="btn btn-primary">Crea</button>
</form>
</body>
</html>