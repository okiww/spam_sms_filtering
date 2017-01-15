<? $this->load->view('header');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Daftar Barang</b></div>
          <div class="panel-body">
            <p><?=$this->session->flashdata('pesan')?> </p>
              <a href="<?=base_url()?>barang/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Filter</a>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <? if(empty($kamus)){ ?>
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  <? }else{
                    $no=0;
                    foreach($kamus as $row){ $no++;?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$row->content?></td>
                  </tr>
                <? }}?>
              </tbody>
            </table>
        </div>
      </div>    <!-- /panel -->

    </div> <!-- /container -->
<? $this->load->view('footer');?>