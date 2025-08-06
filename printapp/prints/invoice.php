<?php
$codigo = explode(",", $_GET["codigo"]);
$producto = explode(",", $_GET["producto"]);
$cantidad = explode(",", $_GET["cantidad"]);
$precio = explode(",", $_GET["precio"]);
$subtotal = explode(",", $_GET["subtotal"]);

$result = array();
foreach ($producto as $id => $key) {
  $result[$key] = array(
    'cod' => $codigo[$id],
    'prod' => $producto[$id],
    'cant' => $cantidad[$id],
    'prec' => $precio[$id],
    'subt' => $subtotal[$id],
  );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <title>Comprobante</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="invoice.css">


  <style>
    body {
      margin-top: 20px;
      color: #484b51;
    }

    .text-secondary-d1 {
      color: #728299 !important;
    }

    .page-header {
      margin: 0 0 1rem;
      padding-bottom: 1rem;
      padding-top: .5rem;
      border-bottom: 1px dotted #e2e2e2;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -ms-flex-align: center;
      align-items: center;
    }

    .page-title {
      padding: 0;
      margin: 0;
      font-size: 1.75rem;
      font-weight: 300;
    }

    .brc-default-l1 {
      border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
      margin-left: -.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
      margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
      margin-bottom: 1.5rem !important;
    }

    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
      color: #888a8d !important;
    }

    .text-success-m2 {
      color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
      font-weight: 600 !important;
    }

    .text-110 {
      font-size: 110% !important;
    }

    .text-blue {
      color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
      padding-bottom: .75rem !important;
    }

    .pt-25,
    .py-25 {
      padding-top: .75rem !important;
    }

    .bgc-default-tp1 {
      background-color: rgba(13, 75, 110, 0.92) !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
      background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
      -ms-flex-item-align: end;
      align-self: flex-end;
    }

    .btn-light {
      color: #757984;
      background-color: #f5f6f9;
      border-color: #dddfe4;
    }

    .w-2 {
      width: 1rem;
    }

    .text-120 {
      font-size: 120% !important;
    }

    .text-primary-m1 {
      color: #4087d4 !important;
    }

    .text-danger-m1 {
      color: #dd4949 !important;
    }

    .text-blue-m2 {
      color: #68a3d5 !important;
    }

    .text-150 {
      font-size: 150% !important;
    }

    .text-60 {
      font-size: 60% !important;
    }

    .text-grey-m1 {
      color: #7b7d81 !important;
    }

    .align-bottom {
      vertical-align: bottom !important;
    }
  </style>
  <!-- fuente -->
  <!-- https://bootdey.com/snippets/view/company-invoice#html -->
</head>

<body>

  <div class="container px-0">
    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="row">
          <div class="col-12">
            <div class="text-center text-150">
              <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> -->
              <span class="text-default-d3">Farmacia El Shaddai</span>
            </div>
            <div class="col-12">
              <div class="text-center text-150">
                <span class="text-default-d3">Lote 5 Manz. A Sector 1-C Ciudad Quetzal</span>
              </div>
              <div class="col-12">
                <div class="text-center text-150">
                  <span class="text-default">Tel: 3967-0058</span>
                </div>
              </div>
            </div>
            <!-- .row -->

            <hr class="row brc-default" />

            <div class="row">
              <div class="col-sm-6">
                <div>
                  <span class="text-sm text-110 text-600  align-middle">Nit Cliente:</span>
                  <span class="text-110 align-middle"><?php echo $_GET["nit"]; ?></span>
                </div>
                <div>
                  <span class="text-sm text-110 text-600  align-middle">Cliente:</span>
                  <span class="text-110 align-middle"><?php echo $_GET["cliente"]; ?></span>
                </div>
                <div>
                  <span class="text-sm text-110 text-600  align-middle">Direccion:</span>
                  <span class="text-110 align-middle"><?php echo $_GET["direccion"]; ?></span>
                </div>
                <div>
                  <span class="text-sm text-110 text-600  align-middle">Telefono:</span>
                  <span class="text-110 align-middle"><?php echo $_GET["telefono"]; ?></span>
                </div>
                <div class="text-grey-m2">
                  <!-- <div class="my-1">
                    <p>Ciudad Quetzal</p>
                  </div>
                  <div class="my-1">
                    <p>San Juan Sacatepequez, Guatemala</p>
                  </div> -->

                </div>
              </div>
              <!-- /.col -->

              <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                <hr class="d-sm-none" />
                <div class="text-grey-m2">
                  <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                    Nota de venta
                  </div>

                  <div class="my-2"> <span class="text-600 text-90">No:</span> <?php echo $_GET["transaccion"]; ?></div>

                  <div class="my-2"> <span class="text-600 text-90">Fecha: </span> <?php echo $_GET["fecha"]; ?></div>

                  <div class="my-2"> <span class="text-600 text-90">Condicion:</span> <span class="badge badge-warning badge-pill px-25"><?php echo $_GET["condicion"]; ?></span></div>
                </div>
              </div>
              <!-- /.col -->
            </div>

            <!-- <div class="mt-4">
              <div class="row text-600 text-white bgc-default-tp1 py-25">
                <div class="d-none d-sm-block col-1">#</div>
                <div class="col-9 col-sm-5">Description</div>
                <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
                <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                <div class="col-2">Amount</div>
              </div>

              <div class="text-95 text-secondary-d3">
                <div class="row mb-2 mb-sm-0 py-25">
                  <div class="d-none d-sm-block col-1">1</div>
                  <div class="col-9 col-sm-5">Domain registration</div>
                  <div class="d-none d-sm-block col-2">2</div>
                  <div class="d-none d-sm-block col-2 text-95">$10.00</div>
                  <div class="col-2 text-secondary-d2 ">$20.00</div>
                </div>

                <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                  <div class="d-none d-sm-block col-1">2</div>
                  <div class="col-9 col-sm-5">Web hosting</div>
                  <div class="d-none d-sm-block col-2">1</div>
                  <div class="d-none d-sm-block col-2 text-95">$15.00</div>
                  <div class="col-2 text-secondary-d2 text-end">$15.00</div>
                </div>

                <div class="row mb-2 mb-sm-0 py-25">
                  <div class="d-none d-sm-block col-1">3</div>
                  <div class="col-9 col-sm-5">Software development</div>
                  <div class="d-none d-sm-block col-2">--</div>
                  <div class="d-none d-sm-block col-2 text-95">$1,000</div>
                  <div class="col-2 text-secondary-d2">$1,000</div>
                </div>

                <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                  <div class="d-none d-sm-block col-1">4</div>
                  <div class="col-9 col-sm-5">Consulting</div>
                  <div class="d-none d-sm-block col-2">1 Year</div>
                  <div class="d-none d-sm-block col-2 text-95">$500.00</div>
                  <div class="col-2 text-secondary-d2">$500</div>
                </div>
              </div>
 -->
            <hr class="row brc-default-l1 mx-n1 mb-3" />

            <!-- <div class="row border-b-2 brc-default-l2"></div> -->

            <!-- or use a table instead -->

            <div class="table-responsive">
              <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                <thead class="bgc-default-tp1">
                  <tr class="text-white">
                    <!-- <th class=" opacity-2">Codigo</th> -->
                    <th>Description</th>
                    <th>Qty</th>
                    <th class="text-center">P. Unit</th>
                    <th width="140" class="text-right">SubTotal</th>
                  </tr>
                </thead>

                <tbody class="text-30 text-secondary">
                  <tr>

                  </tr>
                  <?php
                  foreach ($result as $row) {
                    echo '<tr class="listItem">
                  <td class="item">' . $row['cod'] . " " . $row['prod'] . '</td>
                  <td class="cant">' . $row['cant'] . '</td>
                  <td class="precio text-95 text-center">' . number_format((float)$row['prec'], 2, '.', '') . '</td>
                  <td class="total text-secondary-d2 text-right">' . number_format((float)$row['subt'], 2, '.', '') . '</td>
                  </tr>';
                  }

                  ?>


                  <!-- <tr class="listItem">
                    <td class="">1</td>
                    <td>Domain registration</td>
                    <td>2</td>
                    <td class="text-95 text-center">$10</td>
                    <td class="text-secondary-d2 text-right">$20</td>
                  </tr> -->
                </tbody>
              </table>
            </div>

            <div class="row mt-3">
              <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-1 mt-lg-0">
                <!-- Quieres saber mas sobre nosotros!. Visitanos nuestras redes sociales. -->
              </div>

              <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                <div class="row my-2">
                  <div class="col-8 text-right">
                    SubTotal:
                  </div>
                  <div class="col-4 text-right">
                    <?php
                    $subtotal = $_GET["subtotalticket"];
                    // $redSubtotal = round($subtotal);
                    $redSubtotal = number_format((float)$subtotal, 2, '.', '');
                    ?>
                    <span class="text-110 text-secondary-d2"><?php echo $redSubtotal; ?></span>
                  </div>
                </div>

                <div class="row my-2">
                  <div class="col-8 text-right">
                    <!-- Tax (10%) -->
                    Descuento
                  </div>
                  <div class="col-4 text-right">
                    <span class="text-110 text-secondary-d1"><?php echo number_format((float)$_GET["descuento"], 2, '.', ''); ?></span>
                  </div>
                </div>

                <div class="row my-2 align-items-center bgc-primary-l3 ">
                  <div class="col-8 text-right">
                    Monto Total:
                  </div>
                  <div class="col-4 text-right">
                    <span class="text-120 text-success-d3 opacity-2"><?php echo number_format((float)$_GET["total"], 2, '.', ''); ?></span>
                  </div>
                </div>
              </div>
            </div>

            <hr />

            <div class="text-center mb-4">
              <span class="text-secondary-d1 text-105 ">Gracias por su compra!</span>
            </div>
            <div class="d-print-none mt-4 text-center">
              <div class="float-end">
                <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i> Imprimir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>