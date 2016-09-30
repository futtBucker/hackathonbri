<?php

include_once './WS.php';

$pengirim = '087839183232';
$penerima = '087839182323';
$pin = '253573';
$nominal = $_POST['grandtotal'];

$param = array('nohandphonePengirim' => $pengirim, 'nohandphonePenerima' => $penerima, 'pin' => $pin, 'nominal' => $nominal);

$ws = new WS();
$rsl = $ws->transferTBank($param);

$res = [];
foreach ($rsl as $key => $value) {
    $res[$key] = $value;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hasil Transfer</title>


        <!-- Bootstrap Core CSS -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!--<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>-->
        <script src="misc/jquery-3.1.1.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="misc/jquery.dataTables.min.css">
<!--        <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->
        <script src="misc/jquery.dataTables.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

        <!--<script type="text/javascript" src='http://cdn.datatables.net/plug-ins/1.10.12/api/sum().js'></script>-->
        <script type="text/javascript" src='misc/sum().js'></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>


    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include_once './navigation.php'; ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php 
                                if($res['ResponseCode'] == '00') {
                                    echo 'Transaksi Berhasil';
                                } else {
                                    echo 'Transaksi Gagal';
                                }
                            ?>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?php 
                        if($res['ResponseCode'] == '00') {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <a href="#" class="alert-link">Saldo anda saat ini : <?php echo $res['Saldo']; ?></a>
                    </div>
                    <?php 
                        } else { ?>
                    <div class="alert alert-warning" role="alert">
                        <a href="#" class="alert-link"><?php echo $res['ResponseDescription']; ?></a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <script type="text/javascript">
            $(document).ready(function() {
                
                jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
                    return this.flatten().reduce( function ( a, b ) {
                        if ( typeof a === 'string' ) {
                            a = a.replace(/[^\d.-]/g, '') * 1;
                        }
                        if ( typeof b === 'string' ) {
                            b = b.replace(/[^\d.-]/g, '') * 1;
                        }

                        return a + b;
                    }, 0 );
                } );                
                
                var table = $('#example').DataTable();
                var fieldSubTotal = $('#subtotal');
                var fieldGrandTotal = $('#grandtotal');
                var fieldDiscNom = $('#discnom');
                var fieldDiscPerc = $('#discpercent');
                
                sumSubTotal();

                $('#example tbody').on('click', 'tr', function() {
                    var data = table.row(this).data();
                    alert('You clicked on ' + data[0] + '\'s row');
                    data[0] = 'Loremipsum';

                });

                $('#addrow').on('submit', function() {
                    console.log('enter');
                    // var val = this.name.val();
                    // alert('whoa ' + val);

                    var kodeBarang = $('#kodeBarang').val();
                    var namaBarang = $('#namaBarang').val();
                    var Qty = $('#Qty').val();
                    var hargaSatuan = $('#hargaSatuan').val();
                    var Disc = $('#Disc').val();
                    var Pajak = $('#Pajak').val();

                    console.log(kodeBarang);

                    table.row.add([
                        kodeBarang,
                        namaBarang,
                        Qty,
                        hargaSatuan,
                        Disc,
                        Pajak,
                        '12300'
                    ]).draw(false);

                    $('#myModal').modal('toggle');
                    
                    sumSubTotal();
                    
                    return false;
                });
                
                $('#discpercent').on('keyup', function () {
                    var dscprc = fieldDiscPerc.val();
                    var subttl = fieldSubTotal.val();
                    var rsl = dscprc / 100 * subttl;
                    fieldDiscNom.val(rsl);
                    
                    fieldGrandTotal.val(subttl - rsl);
                    
                });
                
                function sumSubTotal() {
                    var total = table.column(6).data().sum();
                    fieldSubTotal.val(total);
                    console.log('total',total);
                }
                
                

                // $('#sbmt').click();

            });
        </script>

    </body>

</html>