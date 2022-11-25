<!--
<title>UPONTE TEST PORTALI</title>
<link href="main.87c0748b313a1dda75f5.css" rel="stylesheet">

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<link rel="stylesheet" href="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />

<link href="assets/dropzone/dropzone.min.css" rel="stylesheet" />
<script src="assets/dropzone/dropzone.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script type="text/javascript" src="assets/scripts/main.87c0748b313a1dda75f5.js"></script>

<script src="assets/scripts/chart.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css">

<script src="assets/scripts/main.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/b-1.6.3/b-html5-1.6.3/datatables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
-->

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
 
<div id="wrapper">


    <style>
    /* Style the tab */
    .table td {
        vertical-align: middle
    }

    .table td input {
        margin: 0px !important
    }

    .table td .form-group {
        margin: 0px !important
    }

    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    </style>

    <script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
    </script>



    <!-- Sidebar -->
    <?php //include("partials/sidebar.php"); ?>
    <!-- End of Sidebar -->
    <div class="app-main__outer">

        <div class="app-main__inner">
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php //include("partials/topmenu.php"); ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Paket Listesi</h1>
                        <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Paket Listesi11</h6>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <!--
                                    <div class="row">
                                        <div class="col-md-4 d-inline-block">
                                            <div class="form-group">
                                                <input class="form-control" id="disabledInput" type="text"
                                                    placeholder="Paket Adı">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-inline-block">
                                            <div class="form-group">
                                                <input class="form-control" id="disabledInput" type="text"
                                                    placeholder="Hizmet Adı">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-inline-block">
                                            <div class="form-group">
                                                <input class="form-control" id="disabledInput" type="text"
                                                    placeholder="Kontör Adedi">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-inline-block">
                                            <div class="form-group">
                                                <input class="form-control" id="disabledInput" type="text"
                                                    placeholder="Birim Fiyatı">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-inline-block">
                                            <div class="form-group">
                                                <input class="form-control" id="disabledInput" type="text"
                                                    placeholder="Toplam Fiyat">
                                            </div>
                                        </div>


                                        <div class="col-md-4 d-inline-block">
                                            <button type="button" class="btn btn-success"
                                                style="width: 100%;">Ara</button>
                                        </div>

                                    </div>
                                    -->

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Paket Adı</th>
                                                <th>Hizmet Adı</th>
                                                <th>Kontör Adedi</th>
                                                <th>Birim Fiyatı</th>
                                                <th>Toplam Fiyat</th>
                                                <th>Oluşturma Zamanı</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Paket Adı</th>
                                                <th>Hizmet Adı</th>
                                                <th>Kontör Adedi</th>
                                                <th>Birim Fiyatı</th>
                                                <th>Toplam Fiyat</th>
                                                <th>Oluşturma Zamanı</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
    </div>
</div>
<script>
$(document).ready(function() {



  prefixDatatable();
});
function prefixDatatable() {
        docList = $("#documentTypeList").val();
        $("#dataTable").DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            "searching": true,
            "ordering": true,
            "language": {
                "sDecimal": ",",
                "sEmptyTable": "Tabloda herhangi bir veri mevcut değil",
                "sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "sInfoEmpty": "Kayıt yok",
                "sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "Sayfada _MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sProcessing": "İşleniyor...",
                "sSearch": "Ara:",
                "sZeroRecords": "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                }
            },
            "ajax": {
                url: "exec/prefixList.php",
                data: {

                },
                method: "POST"
            }
        })
    }

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>