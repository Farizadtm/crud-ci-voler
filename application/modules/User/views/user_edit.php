
<?php echo $this->load->view('templates/header') ?>
<?php echo $this->load->view('templates/sidebar') ?>


<div class="main-content container-fluid">
      <!-- Basic Horizontal form layout section start -->
      <section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Edit User</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="<?= base_url('user/add') ?>" method="post">
                    <div class="form-body">
                 
                        <div class="row">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" value="<?= $this->input->post('name') ? $row->name : null ?>" placeholder="Masukkan Nama">
                            <?= form_error('name') ?>
                        </div>
                        <div class="col-md-4">
                            <label>Username</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="username" class="form-control" name="username" value="<?= set_value('username') ?>" placeholder="Masukkan Username">
                            <?= form_error('username') ?>
                        </div>
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="password" id="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Masukkan Password">
                            <?= form_error('password') ?>
                        </div>

                        <div class="col-md-4">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="address" class="form-control" name="address" value="<?= set_value('address') ?>" placeholder="Masukkan Alamat">
                            <?= form_error('address') ?>
                        </div>
                        <div class="col-md-4">
                            <label>No Telp</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="number" id="telp" class="form-control" name="telp" value="<?= set_value('telp') ?>" placeholder="Masukkan No Telp">
                            <?= form_error('telp') ?>
                        </div>
                        <div class="col-md-4">
                            <label>Role</label>
                        </div>
                        <div class="col-md-8 form-group">
                        <select name="role" id="role" class="form-control" >
                            <option value="1" <?= set_value('role') == 1 ? "selected" : null?>>Admin</option>
                            <option value="2" <?= set_value('role') == 2 ? "selected" : null?>>Customer Service</option>
                            
                        </select>
                        <?= form_error('role') ?>
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                            <?= form_error('email') ?>
                        </div>
                        

                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
</div>


<?php echo $this->load->view('templates/footer') ?>

