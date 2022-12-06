<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('user/components/header') ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=base_url();?>assets/admin/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view('user/components/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('user/components/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <form id="regForm" action="<?=base_url();?>Pesanan/pesan_tiket" method="post">

                <h1>Pesan Tiket:</h1>

                <!-- One "tab" for each step in the form: -->
                <div class="tab">Asal Tujuan dan Waktu:
                    <p>
                    <div class="form-group">
                        <select name="asal" class="form-control" id="exampleFormControlSelect1">
                            <option>Palembang</option>
                            <option>Indralaya</option>
                        </select>
                    </div>
                    </p>


                    Tujaun Keberangkatan:
                    <p>
                    <div class="form-group">
                        <select name="tujuan" class="form-control" id="exampleFormControlSelect1">
                            <option>Palembang</option>
                            <option>Indralaya</option>
                        </select>
                    </div>
                    </p>
                    Tanggal Keberangkatan:
                    <p><input name="tanggal_berangkat" type="date" placeholder="Tanggal..."
                            oninput="this.className = ''"></p>
                    Waktu Keberangkatan:
                    <p><input name="waktu_berangkat" type="time" placeholder="Tanggal..." oninput="this.className = ''">
                    </p>
                </div>

                <div class="tab">Pilih Bus Tersedia:


                    <p>


                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 1" type="radio" id="customRadioInlinei1" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei1">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 1
                                    <br>
                                    Jam Keberangkatan : 6.00 - 7.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 2" type="radio" id="customRadioInlinei2" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei2">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 2
                                    <br>
                                    Jam Keberangkatan : 7.00 - 8.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 3" type="radio" id="customRadioInlinei3" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei3">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 3
                                    <br>
                                    Jam Keberangkatan : 8.00 - 9.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 4" type="radio" id="customRadioInlinei4" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei4">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 4
                                    <br>
                                    Jam Keberangkatan : 9.00 - 10.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 5" type="radio" id="customRadioInlinei5" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei5">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 5
                                    <br>
                                    Jam Keberangkatan : 10.00 - 11.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value=" Damri Unsri 6" type="radio" id="customRadioInlinei6" name="nama_bus"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInlinei6">
                                    <img src="<?=base_url();?>assets/img/bus1.png" style="width:50%" alt="Kursi 01">
                                    <br>
                                    Damri Unsri 6
                                    <br>
                                    Jam Keberangkatan : 11.00 - 12.00
                                    <br>
                                    Waktu Perjalanan : 1 Jam
                                </label>
                            </div>
                        </div>
                    </div>
                    </p>


                </div>

                <div class="tab">Pilih Kursi Tersedia:



                    Kursi:
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <p>
                            <div class="custom-control custom-radio custom-control-inline">

                                <input value="Kursi 01" type="radio" id="customRadioInline1" name="nomor_kursi"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline1"> <img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 01"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 02" type="radio" id="customRadioInline2" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 02"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 03" type="radio" id="customRadioInline3" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 03"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 04" type="radio" id="customRadioInline4" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline4"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 04"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 05" type="radio" id="customRadioInline5" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline5"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 05"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 06" type="radio" id="customRadioInline6" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline6"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 06"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 07" type="radio" id="customRadioInline7" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline7"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 07"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 08" type="radio" id="customRadioInline8" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline8"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 08"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 09" type="radio" id="customRadioInline9" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline9"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 09"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 10" type="radio" id="customRadioInline10" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline10"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 10"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 11" type="radio" id="customRadioInline11" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline11"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 11"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 12" type="radio" id="customRadioInline12" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline12"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 12"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 13" type="radio" id="customRadioInline13" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline13"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 13"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 14" type="radio" id="customRadioInline14" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline14"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 14"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 15" type="radio" id="customRadioInline15" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline15"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 15"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 16" type="radio" id="customRadioInline16" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline16"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 16"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 17" type="radio" id="customRadioInline17" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline17"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 17"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 18" type="radio" id="customRadioInline18" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline18"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 18"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 19" type="radio" id="customRadioInline19" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline19"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 19"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 20" type="radio" id="customRadioInline20" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline20"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 20"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 21" type="radio" id="customRadioInline21" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline21"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 21"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 22" type="radio" id="customRadioInline22" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline22"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 22"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 23" type="radio" id="customRadioInline23" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline23"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 23"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 24" type="radio" id="customRadioInline24" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline24"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 24"></label>
                            </div>
                            </p>
                        </div>
                        <div class="col-5">
                            <p>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 25" type="radio" id="customRadioInline25" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline25"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 25"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 26" type="radio" id="customRadioInline26" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline26"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 26"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 27" type="radio" id="customRadioInline27" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline27"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 27"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 28" type="radio" id="customRadioInline28" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline28"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 28"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 29" type="radio" id="customRadioInline29" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline29"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 29"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 30" type="radio" id="customRadioInline30" name="nomor_kursi"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline30"> <img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 30"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 31" type="radio" id="customRadioInline31" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline31"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 31"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 32" type="radio" id="customRadioInline32" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline32"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 32"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 33" type="radio" id="customRadioInline33" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline33"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 33"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 34" type="radio" id="customRadioInline34" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline34"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 34"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 35" type="radio" id="customRadioInline35" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline35"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 35"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 36" type="radio" id="customRadioInline36" name="nomor_kursi"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline36"> <img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 36"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 37" type="radio" id="customRadioInline37" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline37"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 37"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 38" type="radio" id="customRadioInline38" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline38"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 38"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 39" type="radio" id="customRadioInline39" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline39"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 39"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 40" type="radio" id="customRadioInline40" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline40"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 40"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 41" type="radio" id="customRadioInline41" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline41"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 41"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 42" type="radio" id="customRadioInline42" name="nomor_kursi"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline42"> <img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 42"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 43" type="radio" id="customRadioInline43" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline43"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 43"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 44" type="radio" id="customRadioInline44" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline44"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 44"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 45" type="radio" id="customRadioInline45" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline45"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 45"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 46" type="radio" id="customRadioInline46" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline46"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 46"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 47" type="radio" id="customRadioInline47" name="nomor_kursi"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline47"><img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 47"></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="Kursi 48" type="radio" id="customRadioInline48" name="nomor_kursi"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline48"> <img
                                        src="<?=base_url();?>assets/img/bus.png" style="width:50%"
                                        alt="Kursi 48"></label>
                            </div>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="tab">Data Pemesan:
                    <p><input name="nama_lengkap" placeholder="Nama Lengkap" oninput="this.className = ''"></p>
                    <p><input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir"
                            oninput="this.className = ''"></p>
                    <p><input name="usia" placeholder="Usia" oninput="this.className = ''"></p>
                    <p><input name="email" placeholder="Email" oninput="this.className = ''"></p>
                    <p>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L">Laki - Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    </p>
                    <p><input name="nomor_telepon" placeholder="Nomor Telepon" oninput="this.className = ''"></p>
                </div>

                <div class="tab">Metode Pembayaran:
                    <p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInliness11" name="metode_pembayaran"
                            class="custom-control-input" value="Cash" checked>
                        <label class="custom-control-label" for="customRadioInliness11">Cash :
                            <br> Pembayaran Lansung di Outlet, Kode Pembayaran ada di Tiket !

                        </label>
                    </div>
                    </p>
                    <p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInliness12" name="metode_pembayaran"
                            class="custom-control-input" value="Transfer">
                        <label class="custom-control-label" for="customRadioInliness12">Transfer :
                            <br> Nomor Rekening
                            <br> Dibawah Sebesar Rp 10.000
                            <br> PT. Damri Unsri
                            <br> 675519284791</label>
                    </div>
                    </p>
                </div>
                <div class="tab">
                    <h3>Klik Submit Untuk Memesan !</h3>
                    <h3>Silakan konfirmasi pembayaran cash atau transfer kepada Admin sebelum 30 menit keberangkatan
                        Damri</h3>
                    <p><input type="text" value="done" hidden></p>

                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" class="btn btn-dark" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

            </form>
        </div>
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('user/components/js') ?>
</body>

</html>