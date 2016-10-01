<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Invoice Auto Payment</title>
        
        <?php include_once './resource.php'; ?>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include_once './navigation.php'; ?>
            
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Invoice dengan Auto Payment</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="smbr">Sumber Data :</label>
                                            <select id="smbr" name="smbr" class="selectpicker" data-live-search="true">
                                                <option data-tokens="Requisition">Requisition</option>
                                                <option data-tokens="Purchase Order">Purchase Order </option>
                                                <option data-tokens="Penerimaan Barang">Penerimaan Barang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Kode :</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Kode Invoice :</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Invoice :</label>
                                                <input class="form-control ">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label for="vensel">Vendor :</label>
                                                    <select id="vensel" name="vensel" class="selectpicker" data-live-search="true">
                                                        <option data-tokens="PT Dunia Bersama">PT Dunia Bersama</option>
                                                        <option data-tokens="PT Atma Wijaya">PT Atma Wijaya </option>
                                                        <option data-tokens="PT Maju Mundur">PT Maju Mundur</option>
                                                    </select>
                                                </div>
                                            </div><br> <br><br>
                                    </div> <br> <br>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                    <label for="termin">Termin :</label>
                                                    <select id="termin" name="termin" class="selectpicker" data-live-search="true">
                                                        <option data-tokens="Tunai (COD)">Tunai (COD)</option>
                                                        <option data-tokens="n/10, 10">n/10, 10</option>
                                                        <option data-tokens="n/30, 20">n/30, 20</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-12">
                                        <h1></h1>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!--<div class="well">-->
                                                <!--<label>Kode Barang :</label>-->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">delete</button>
                                                <!--</div>-->  
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Tambah Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="addrow" action='' method='post'>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Kode Barang :</label>
                                                                    <input class="form-control" type='text' name='kodeBarang' id='kodeBarang'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Nama Barang :</label>
                                                                    <input class="form-control" type='text' name='namaBarang' id='namaBarang'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Qty :</label>
                                                                    <input class="form-control" type='text' name='Qty' id='Qty'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Harga Satuan :</label>
                                                                    <input class="form-control" type='text' name='hargaSatuan' id='hargaSatuan'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Disc % :</label>
                                                                    <input class="form-control" type='text' name='Disc' id='Disc'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Pajak :</label>
                                                                    <input class="form-control" type='text' name='Pajak' id='Pajak'>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button type="submit" class="btn btn-primary" name='sbmt' id='sbmt'>Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Disc %</th>
                                                    <th>Pajak</th>
                                                    <th>Jumlah Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Disc %</th>
                                                    <th>Pajak</th>
                                                    <th>Jumlah Total</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>TX20</td>
                                                    <td>Packet III </td>
                                                    <td>1</td>
                                                    <td>700000</td>
                                                    <td>25 %</td>
                                                    <td>10 %</td>
                                                    <td>694000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <form action="" method="post">
                                            <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-2">
                                                <label>Sub total :</label>
                                                <!--<input class="form-control" type='text' name='salary' id='salary'>-->
                                            </div>                                        
                                            <div class="col-sm-4">
                                                <!--<label>Total order:</label>-->
                                                <input class="form-control" type='text' name='subtotal' id='subtotal'>

                                            </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-2">
                                                    <label>Discount % :</label>
                                                    <input class="form-control" type='text' name='discpercent' id='discpercent'>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>..............................................................................</label>
                                                    <input class="form-control" type='text' name='discnom' id='discnom'> 
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-2">
                                                    <label>Total Bayar :</label>
                                                    <!--<input class="form-control" type='text' name='salary' id='salary'>-->
                                                </div>                                        
                                                <div class="col-sm-4">
                                                    <!--<label>Total order:</label>-->
                                                    <input class="form-control" type='text' name='grandtotal' id='grandtotal'>

                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="text-right">
                                                        <!--<label>Kode Barang :</label>-->
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-primary">Batal </button>
                                                    </div>  
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-12 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
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
                
                fieldGrandTotal.val(fieldSubTotal.val());

                $('#example tbody').on('click', 'tr', function() {
                    var data = table.row(this).data();
                    alert('You clicked on ' + data[0] + '\'s row');
//                    data[0] = 'Loremipsum';
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