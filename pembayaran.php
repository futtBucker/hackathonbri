<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pembayaran Tagihan</title>

        <?php include_once './resource.php'; ?>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include_once './navigation.php'; ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pembayaran Tagihan dengan BRI</h1>
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
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label for="smbr">Sumber Data :</label>
                                                        <select id="smbr" name="smbr" class="selectpicker" data-live-search="true">
                                                        <option data-tokens="Requisition">Requisition</option>
                                                        <option data-tokens="Purchase Order">Purchase Order </option>
                                                        <option data-tokens="Penerimaan Barang">Penerimaan Barang</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Kode :</label>
                                                        <input class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Penerima :</label>
                                                    <input class="form-control" type='text' name='startdate' id='startdate'>
                                                </div>
                                            </div>><br>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Memo :</label>
                                                    <input class="form-control">
                                                </div>
                                            </div>
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
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label for="nopem">No Pembayaran :</label>
                                                    <input id="nopem" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Tanggal Pembayaran :</label>
                                                    <input class="form-control">
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
                                        <br>
                                        <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No Faktur</th>
                                                    <th>Tanggal Jatuh Tempo</th>
                                                    <th>DP</th>
                                                    <th>Kekurangan yang Harus di Bayar</th>
                                                    <th>Disc. Pembayaran</th>
                                                    <th>Jml Pembayaran</th>
                                                    <th>Lunasi?</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No Faktur</th>
                                                    <th>Tanggal Jatuh Tempo</th>
                                                    <th>DP</th>
                                                    <th>Kekurangan yang Harus di Bayar</th>
                                                    <th>Disc %</th>
                                                    <th>Jml Pembayaran</th>
                                                    <th>Lunasi?</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>12345</td>
                                                    <td>30/10/2016</td>
                                                    <td>100000</td>
                                                    <td>50000</td>
                                                    <td>25</td>
                                                    <td></td>
                                                    <td><input class="form-control" type="checkbox"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br/><br/>
                                        <form action="transfer_result.php" method="post">
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
                                                        <button type="submit" class="btn btn-primary">Simpan dan Bayar</button>
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
                                                        <form id='addrow' action='' method='post'>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>No Faktur :</label>
                                                                    <input class="form-control" type='text' name='nofaktur' id='nofaktur'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Jatuh Tempo :</label>
                                                                    <input class="form-control" type='text' name='jthtempo' id='jthtempo'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>DP :</label>
                                                                    <input class="form-control" type='text' name='dp' id='dp'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Kekurangan :</label>
                                                                    <input class="form-control" type='text' name='kekurangan' id='kekurangan'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Disc % :</label>
                                                                    <input class="form-control" type='text' name='disc' id='disc'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Jml Pembayaran :</label>
                                                                    <input class="form-control" type='text' name='jmlpembayaran' id='jmlpembayaran'>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-center">
                                                                    <button type="button" class="btn btn-primary"  name='sbmt' id='sbmt'>Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
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

                $('#example tbody').on('click', 'tr', function() {
                    var data = table.row(this).data();
//                    alert('You clicked on ' + data[0] + '\'s row');
//                    data[0] = 'Loremipsum';

                    $('#nofaktur').val(data[0]);
                    $('#jthtempo').val(data[1]);
                    $('#dp').val(data[2]);
                    $('#kekurangan').val(data[3]);
                    $('#disc').val(data[4]);
                    $('#jmlpembayaran').val(data[5]);
                    
                    $('#myModal').modal().show();

                });

                $('#addrow').on('submit', function() {
                    // var val = this.name.val();
                    // alert('whoa ' + val);

                    var name = $('#name').val();
                    var position = $('#position').val();
                    var office = $('#office').val();
                    var age = $('#age').val();
                    var startdate = $('#startdate').val();
                    var salary = $('#salary').val();

                    table.row.add([
                        name,
                        position,
                        office,
                        age,
                        startdate,
                        salary
                    ]).draw(false);


                    return false;
                });

                // $('#sbmt').click();

            });
        </script>

    </body>

</html>