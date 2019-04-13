{{-- @php
    $contact['name'] = "Eduardo";
    $contact['lastName'] = "Vera";
    $contact['email'] = "eduard.vera.pineda@gmail.com";
    $contact['phone'] = "4423773581";
    $contact['message'] = "lorem";

@endphp --}}
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Maritelas | Mensaje de contacto</title>
  <style media="screen">
    th{
      color: #b2b1b1;
    }
    td{
      color: #818f95
    }
    h2{
      color: #e1438a
    }
    h3{
      color: #e1438a
    }
    hr.upshadow {
    	height: 10px;
    	border: 0;
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    	box-shadow: 0 -5px 10px -5px #8c8b8b inset;
      width: 70%;
    }
    hr.downshadow {
    	height: 10px;
    	border: 0;
      border-bottom-left-radius: 30px;
      border-bottom-right-radius: 30px;
    	box-shadow: 0 5px 10px -5px #8c8b8b inset;
      width: 70%;
    }
  </style>
</head>
<body style="background-color: white;">
  <div style="width:80%; margin:auto; max-width:400px">
    <div style="width: 100%; text-align:center">
      <img src="http://maritelascountry.com.mx/img/logo/logo.png" title="WTC-Logo" style="width:100%; text-align: center; max-width:300px" />
    </div>
    <hr style="width: 50%; margin-top: 4%">
    <div style="margin-top:4%">
      <h3 style="text-align: center;color: #008e3d">
        Mandaste los siguientes datos:
      </h3>
    </div>
    <hr class="upshadow">
    <div style="margin-top: 4%">
      <table width="80%" style="margin:auto">
        <tr>
          <td class="titulos">Nombre:</td>
          <td>{{ $contact['name'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Correo:</td>
          <td>{{ $contact['email'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Teléfono:</td>
          <td>{{ $contact['phone'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Mensaje:</td>
          <td>{{ $contact['message'] }}</td>
        </tr>
      </table>
    </div>
    <hr class="downshadow">
    <div style="margin-top:20px">
      <center>
        <h2 style=""> Maritelas se comunicará contigo a la brevedad.</h2>
        <h3><b>¡Gracias por ponerte en contacto!</b></h3>
      </center>
    </div>
  </div>
</body>
</html>
