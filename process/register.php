<?php

include ('../connection.php');

$nama = mysqli_real_escape_string($connection,$_POST['nama']);
$no_kp= mysqli_real_escape_string($connection,$_POST['ic']);
$katalaluan = mysqli_real_escape_string($connection,$_POST['kata_laluan']);
$daerah = mysqli_real_escape_string($connection ,$_POST['daerah']);
$balai_bertugas = mysqli_real_escape_string($connection,$_POST['balai_bertugas']);

$katalaluan = md5($katalaluan);
$sql = "INSERT INTO login (nama, ic, kata_laluan, daerah, balai_bertugas) 
VALUES ($nama, $no_kp, $katalaluan, $daerah, $balai_bertugas)";

if (!mysqli_query($connection, $sql)) {
    die('Error: ' . mysqli_error($connection)); 
}else {?>
<div class="modal fade dialogbox" id="DialogIconedSuccess" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-success">
                <ion-icon name="checkmark-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body">
                Registration Success
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn" data-dismiss="modal">CLOSE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>