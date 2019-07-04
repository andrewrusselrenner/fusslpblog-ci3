<?php 
    if ($this->uri->segment(2) == 'login' || $this->uri->segment(2) == 'daftar')
    {
        ?>
        <div class="main-page py-5 text-center d-flex flex-column flex-fill">
            <div class="container">
                <div class="row">
        <?php
    } else {
        ?>
        <!-- isi postingan -->
        <div class="container-fluid ngeblog">
            <div class="row">
        <?php
    }
?>