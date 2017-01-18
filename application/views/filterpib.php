<?php $this->load->view('header');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Result SPAM</b> <b class="pull-right">TOTAL : <?php echo $count_spam ?></b></div>
          <div class="panel-body">
            <p><?php $this->session->flashdata('pesan')?> </p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($spam)){ ?>
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  <?php }else{
                    $no=0;
                    foreach($spam as $row){ $no++;?>
                  <tr>
                    <td><?php  echo $no?></td>
                    <td><?php echo $row->content?></td>
                    <td>SPAM</td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
        </div>
      </div>

       <!-- <div class="panel panel-default">
        <div class="panel-heading"><b>Result HAM</b> <b class="pull-right">TOTAL : <?phpphp echo $count_ham ?></b></div>
          <div class="panel-body">
            <p><?php=$this->session->flashdata('pesan')?> </p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($ham)){ ?>
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  <?php }else{
                    $no=0;
                    foreach($ham as $row){ $no++;?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $row->content?></td>
                    <td>HAM</td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
        </div>
      </div> -->
        <div class="table table-striped">
          <tr>
           <th>    <!-- /panel -->

    </div> <!-- /container -->
<?php $this->load->view('footer');?>