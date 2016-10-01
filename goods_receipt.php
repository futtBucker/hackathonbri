<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <?php include_once './resource.php'; ?>
        
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include_once './navigation.php'; ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Penerimaan Barang</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                General Data
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label>Sumber Data :</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label> &nbsp </label>
                                                    <select id="vensel" name="vensel" class="selectpicker" data-live-search="true">
                                                        <option data-tokens="Requisition">Requisition</option>
                                                        <option data-tokens="Purchase Order">Purchase Order </option>
                                                        <option data-tokens="Penerimaan Barang">Penerimaan Barang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Penerima :</label>
                                                    <input class="form-control" type='text' name='startdate' id='startdate'>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Form No :</label>
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <label>Tanggal Terima :</label>
                                                    <input class="form-control">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-lg-6">

                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-12">
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
                                                        <form id='addrow' action='' method='post'>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Kode Barang :</label>
                                                                    <input class="form-control" type='text' name='name' id='name'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Nama Barang :</label>
                                                                    <input class="form-control" type='text' name='position' id='position'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Qty :</label>
                                                                    <input class="form-control" type='text' name='office' id='office'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Harga Satuan :</label>
                                                                    <input class="form-control" type='text' name='age' id='age'>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Disc % :</label>
                                                                    <input class="form-control" type='text' name='startdate' id='startdate'>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Pajak :</label>
                                                                    <input class="form-control" type='text' name='salary' id='salary'>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button type="button" class="btn btn-primary"  name='sbmt' id='sbmt'>Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No Pemesanan</th>
                                                    <th>Tanggal</th>
                                                    <th>Tanggal Jatuh Tempo</th>
                                                    <th>Jumlah</th>
                                                    <th>Kurang</th>
                                                    <th>Jumlah yang Harus di Bayar</th>
                                                    <th>Disc. Pembayaran</th>
                                                    <th>Bayar</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No Pemesanan</th>
                                                    <th>Tanggal</th>
                                                    <th>Tanggal Jatuh Tempo</th>
                                                    <th>Jumlah</th>
                                                    <th>Kurang</th>
                                                    <th>Jumlah yang Harus di Bayar</th>
                                                    <th>Disc. Pembayaran</th>
                                                    <th>Bayar</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>TX20</td>
                                                    <td>Galaxy Note </td>
                                                    <td>1</td>
                                                    <td>7.000.000</td>
                                                    <td>7.000.000</td>
                                                    <td>25 %</td>
                                                    <td>10 %</td>
                                                    <td> <input class="form-control" type="checkbox"></td>
                                                </tr>
                                            </tbody>
                                        </table><br>
                                        
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