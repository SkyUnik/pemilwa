<?php
if ($this->session->userdata('voter_id') != "") {
    redirect('vote/voting', 'refresh');
}
?>
<div class="container">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-6">
        <div class="page-header">
            <h1>Pemilihan.
                <?php echo $this->session->userdata('voter_id') ?>
            </h1>
        </div>
        <?php
        if ($error or $error_validation) {
            echo "<div class='alert alert-danger'>
        <strong>Gagal! </strong>",
                $error, $error_validation, "</div>";
        }
        ?>
        <p class="lead">Silakan masukkan username dan password.</p>

        <?php
        echo form_open('vote/login'); ?>
        <?php echo form_input($nis); ?>
        <br>
        <?php echo form_input($password); ?>
        <br>
        <?php echo form_submit($submit); ?>
        <?php echo form_close(); ?>
        <br>
        <hr>
        <p class="col-xs-12"><code>Perhatian!</code> Pastikan tidak memberikan password kepada siapapun.</p>

    </div>
    <div class="col-sm-3">
    </div>

</div>