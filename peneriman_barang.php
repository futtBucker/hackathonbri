<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Penerimaan Barang</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <script type="text/javascript" src='http://cdn.datatables.net/plug-ins/1.10.12/api/sum().js'></script>

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
                                                <label>Nomer Penerimaan:</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Terima:</label>
                                                <input class="form-control ">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Kode PO :</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect"> Vendor :</label>
                                                <input class="form-control">
                                            </div>
                                        </form>
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
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>TX20</td>
                                                    <td>Galaxy Note </td>
                                                    <td>1</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-sm-2"> <h3>Keterangan :</h3> </div>
                                            <div class="col-sm-4">
                                                <label>  </label>
                                                <textarea class="form-control" type='text' name='startdate' id='startdate'></textarea>
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
                                    </div><br>

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