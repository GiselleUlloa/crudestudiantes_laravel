<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://github.com/twbs/bootstrap/blob/main/.github/CONTRIBUTING.md#bug-reports">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/polyfills.umd.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-
Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
crossorigin="anonymous"></script>
   
    
  <link href="{{ public_path('CSS/app.css') }}" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Reporte de Estudiantes</h2>
   
   

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th>Usuario Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										
										<th>Email</th>
										<th>Genero</th>
										
							
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                        <td>{{ $estudiante->usuario_id }}</td>
											<td>{{ $estudiante->nombre }}</td>
											<td>{{ $estudiante->apellido }}</td>
											
											<td>{{ $estudiante->email }}</td>
											<td>{{ $estudiante->genero }}</td>
									
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </center>
</body>

</html>