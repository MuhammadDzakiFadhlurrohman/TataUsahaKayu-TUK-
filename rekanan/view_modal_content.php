<?php
include "../config/connection.php";
// view_modal_content.php

if (isset($_GET['id'])) {
    $rekananID = $_GET['id'];

    // Lakukan query ke database untuk mendapatkan data berdasarkan $rekananID
    // Sesuaikan dengan struktur database Anda dan nama kolom
    $query = mysqli_query($connect, "SELECT * FROM rekanan WHERE No_Rekanan = '$rekananID'");
    $row = mysqli_fetch_assoc($query);

    // Menampilkan data dalam modal
    ?>
        <div class="modal-content">
    <div class="modal-header">
                <h5 class="modal-title">View Partner Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <div class="form-group row">
        <div class="col-md-4">Nama Kontraktor</div>
        <div class="col-md-1">:</div>
        <div class="col-md">
            <?php echo $row['Nama_Kontraktor']; ?>
        </div>
    </div>
    <div class="form-group row">
                    <div class="col-md-4">Jenis Badan Usaha</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Jenis_Badan_Usaha']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Direktur</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Nama_Direktur']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Alamat</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Alamat']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">NPWP</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NPWP']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Rekening</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NoRekening']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Pekerjaan</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md" >
                                    <?php echo $row['Jenis_Pekerjaan']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Petak</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NoPetak']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Jenis Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Jenis_Tanaman']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Nama Driver</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Nama_Driver']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. Alat Angkut</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NoAlat_Angkut']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Sortimen Kayu</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['Sortimen_Kayu']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. PBPH</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NoPBPH']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">No. SPK</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                    <?php echo $row['NoSPK']; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Tanggal SPK</div>
                                    <div class="col-md-1">:</div>
                                    <div class="col-md">
                                        Tanggal Berlaku
                                            <br><?php echo $row['Tanggal_Berlaku']; ?>
                                        <br>Tanggal Berakhir
                                            <br><?php echo $row['Tanggal_Berakhir']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
    <?php
} else {
    // Mengembalikan respons kosong jika tidak ada ID yang diberikan
    http_response_code(400);
}
?>
 