<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>VirtuaNet - Generar Reporte</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Generar Reporte</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../Home/">Home</a></li>
								<li class="active">Generar Reporte</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				
				<div class="row" id="viewuser">
				<div class="col-lg-3">
						<fieldset class="form-group">
							<label class="form-label" for="fechainicio">Fecha Inicio:</label>
							<input type="date" class="form-control" name="fechainicio" id="fechainicio">
						</fieldset>
					</div>

					<div class="col-lg-3">
						<fieldset class="form-group">
							<label class="form-label" for="fechafin">Fecha Fin:</label>
							<input type="date" class="form-control" name="fechafin" id="fechafin">
						</fieldset>
					</div>

					<div class="col-lg-2">
						<fieldset class="form-group">
							<label class="form-label" for="btnfiltrar">&nbsp;</label>
							<button type="submit" class="btn btn-rounded btn-primary btn-block" id="btnfiltrar">Filtrar</button>
						</fieldset>
					</div>

					<div class="col-lg-2">
						<fieldset class="form-group">
							<label class="form-label" for="btntodo">&nbsp;</label>
							<button class="btn btn-rounded btn-primary btn-block" id="btntodo">Ver Todo</button>
						</fieldset>
					</div>
				</div>

				<div class="box-typical box-typical-padding" id="table">
					<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 5%;">Nro.Ticket</th>
								<th style="width: 15%;">Categoria</th>
								<th class="d-none d-sm-table-cell" style="width: 30%;">Titulo</th>
								<th class="d-none d-sm-table-cell" style="width: 5%;">Prioridad</th>
								<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creación</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Asignación</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Cierre</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;">Soporte</th>
								<th class="text-center" style="width: 5%;"></th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>

			</div>

		</div>
	</div>
	<!-- Contenido -->
	<?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="reporte.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>