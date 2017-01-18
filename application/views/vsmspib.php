<?php $this->load->view('header');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Daftar sms preprocessing</b></div>
          <div class="panel-body">
            <p><?php $this->session->flashdata('pesan')?> </p>
              <a href="<?php base_url()?>filterpib" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Filter</a>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($smspib)){ ?>
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  <?php }else{
                    $no =0;
                    foreach($smspib as $row){ $no++;?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $row->content?></td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
        </div>
      </div>    <!-- /panel -->

    </div> <!-- /container -->
<?php $this->load->view('footer');?>