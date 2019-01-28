<div class="container-fluid">
<div class="block-header">
    <h2 style="color: #000; margin-left: 0px;">
        DAFTAR PELANGGAN
    </h2>
</div>
<!-- Basic Validation -->
<div class="row clearfix" style="margin-top: 40px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        

                <?php 
                    $notifikasi = $this->session->flashdata('notif');
                    if($notifikasi != null){
                        echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                    }
                ?>
            
            <div class="body">
                <form id="form_validation" method="POST" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>">
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label" style="color: blue;">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="NamaPelanggan">
                    
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label" style="color: blue;">No Telepon</label>
                            <input type="text" class="form-control" name="NoTelp">
                            
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label" style="color: blue;">Username</label>
                            <input type="text" class="form-control" name="Username">
                           
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label" style="color: blue; ">Password</label>
                            <input type="password" class="form-control" name="Password">
                            
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label" style="color: blue; ">Alamat</label>
                            <textarea name="Alamat" cols="30" rows="5" class="form-control no-resize"></textarea>
                            
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>


       
    </div>
</div>
<!-- #END# Basic Validation -->
</div>