<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/form.css">
</head>
<body>
<form method="POST" action="objmahasiswa.php">
<div class="container mt-5">
  <div class="center-frame">
    <div class="form-table-container">
      <h2 align="center">FORM UJIAN MAHASISWA</h2>
      <div class="profile-picture" align="center">
 
      </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM : </label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama :</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kuliah" class="col-4 col-form-label">Kuliah :</label> 
    <div class="col-8">
      <input id="kuliah" name="kuliah" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah :</label> 
    <div class="col-8">
      <select id="matakuliah" name="matakuliah" class="custom-select">
        <option value="rabbit">--- Pilih Mata Kuliah ---</option>
        <option value="php">PHP</option>
        <option value="uiux">UI UX</option>
        <option value="laravel">Laravel</option>
        <option value="css">CSS</option>
        <option value="html">HTML</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
</body>
</html>