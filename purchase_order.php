<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Purchase Order</title>
        <?php include_once './resource.php'; ?>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include_once './navigation.php'; ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase Order</h1>
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
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Kode PO :</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal PO :</label>
                                                <input class="form-control ">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label for="vensel">Vendor :</label>
                                                    <select id="vensel" name="vensel" class="selectpicker" data-live-search="true">
                                                        <option data-tokens="ketchup mustard">PT Dunia Bersama</option>
                                                        <option data-tokens="mustard">PT Atma Wijaya </option>
                                                        <option data-tokens="frosting">PT Maju Mundur</option>
                                                    </select>
                                                </div>
                                            </div><br> <br><br>
                                    </div> <br> <br>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <label for="disabledSelect">Tanggal Terima :</label>
                                                <input class="form-control">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-12">
                                        <h2>Alamat Pengiriman</h2>
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Jalan/Nomor :</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Kecamatan :</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Kabupaten</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Lorem ipsum</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Provinsi</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Lorem ipsum</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Pos :</label>
                                                <input class="form-control">
                                            </div>

                                        </form>
                                        <h1>Barang : </h1>

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
                                                    <td>Galaxy Note </td>
                                                    <td>1</td>
                                                    <td>7.000.000</td>
                                                    <td>25 %</td>
                                                    <td>10 %</td>
                                                    <td>6.940.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-sm-6"></div><div class="col-sm-2"> <h3>Sub Total :</h3> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Discount % :</label>
                                                <input class="form-control" type='text' name='startdate' id='startdate'>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>&nbsp;</label>
                                                <input class="form-control" type='text' name='salary' id='salary'> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-2">
                                                <label>Perkiraan biaya:</label>
                                                <!--<input class="form-control" type='text' name='salary' id='salary'>-->
                                            </div>                                        
                                            <div class="col-sm-4">
                                                <!--<label>Total order:</label>-->
                                                <input class="form-control" type='text' name='salary' id='salary'>

                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-2">
                                                <label>Total order:</label>
                                                <!--<input class="form-control" type='text' name='salary' id='salary'>-->
                                            </div>                                        
                                            <div class="col-sm-4">
                                                <!--<label>Total order:</label>-->
                                                <input class="form-control" type='text' name='salary' id='salary'>

                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-right">
                                                    <!--<label>Kode Barang :</label>-->
                                                    <button type="button" class="btn btn-primary"> Simpan & Baru</button>
                                                    <button type="button" class="btn btn-primary">Simpan & Tutup</button>
                                                    <button type="button" class="btn btn-primary">Batal </button>
                                                </div>  
                                            </div>
                                        </div>
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
                var table = $('#example').DataTable();

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
                        '123'
                    ]).draw(false);

                    $('#myModal').modal('toggle');
                    return false;
                });

                // $('#sbmt').click();

            });
        </script>

    </body>

</html>