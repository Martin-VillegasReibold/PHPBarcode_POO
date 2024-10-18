<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barcode Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="html2canvas.js"></script>
  <script src="js/buttons.js"></script>
</head>

<body class="alert-info text-dark">

<div class="container-fluid">
  <div class="col-md-12">
    <div class="row">
      <div class="card col-md-4 offset-md-4 mt-5">
        <div class="card-body text-center">
        <h4>Generación de Codigo de Barras</h4>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card col-md-6 mt-5 mr-5">
        <div class="card-body">
        <div class="form-group">
            <label for="" class="control-label">Etiqueta</label>
            <input type="text" id="label" class="form-control">
          </div>
          <div class="form-group">
            <label for="" class="control-label ">Codigo</label>
            <input type="text" id="code" class="form-control">
          </div>
          <div class="form-group">
            <label for="" class="control-label">Tipo</label>
            <select class="browser-default custom-select" id="type">
              <option value="C128">Code 128</option>
              <option value="C128A">Code 128 A</option>
              <option value="C128B">Code 128 B</option>
              <option value="C39">Code 39</option>
              <option value="C39E">Code 39 E</option>
              <option value="C93">Code 93</option>
              <option value="EAN8">EAN 8</option>
              <option value="EAN13">EAN 13</option>
            </select>
          </div>
          <button type="button" class="col-md-2 btn-block float-right btn btn-primary btn-sm" id="generate">Generar</button>
        </div>
      </div>
      <div class=" card col-md-5 ml-5 mt-5" id='bcode-card'>
            <div class="card-body">
              <div id="display">
                <center>Codigo</center>
              </div>
               
            </div>
            <div class="card-footer" style="display:none">
              <center>
              
              <button type="button" class=" btn-block btn btn-primary btn-sm" id="save">Bajar</button>  
              </center>
              
            </div>
      </div>

    </div>
  </div>
  
</div>

</body>
</html>

