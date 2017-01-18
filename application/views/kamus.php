<?php $this->load->view('header');?>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><b>DICTIONARY</b></div>
          <div class="panel-body">
            <p><?php $this->session->flashdata('pesan')?> </p>
              <a href="<?php base_url()?>barang/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Filter</a>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($kamus)){ ?>
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  <?php }else{
                    $no=0;
                    foreach($kamus as $row){ $no++;?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $row->content?></td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <?php echo $pagination; ?>
          </div>
        </div>
      </div>

    </div>
    </div> <!-- /container -->
<?php $this->load->view('footer');?>
