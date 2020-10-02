
<?php echo $this->load->view('templates/header') ?>
<?php echo $this->load->view('templates/sidebar') ?>


<div class="main-content container-fluid">
<div class="row" id="table-striped">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Managemen User</h2>
        <div class="float-right">
          <a href="<?= site_url('user/add')?>" class="btn btn-primary btn-xs">Tambah User</a>
        </div>
      </div>
        <!-- table striped -->
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Name</th>
                <th>Address</th>
                <th>Role</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?=$data->username ?></td>
                    <td><?=$data->password ?></td>
                    <td><?=$data->name ?></td>
                    <td><?=$data->address ?></td>
                    <td><?=$data->role ?></td>
                    <td>
                    <form action="<?= base_url('user/delete/'); ?>" method="POST">
                        <a href="<?= base_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs btn-sm"><i class="fa fa-pencil">Edit</i></a>
                        <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                        <button class="btn btn-danger btn-xs btn-sm"><i class="fa fa-trash">Delete</i></button>
                      </form>
                    </td>
                </tr>
                <?php
                } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php echo $this->load->view('templates/footer') ?>

