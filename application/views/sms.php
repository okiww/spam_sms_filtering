<? $this->load->view('header');?>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><b>MASTER SMS</b></div>
          <div class="panel-body">
            <p><?=$this->session->flashdata('pesan')?> </p>
              <a href="<?=base_url()?>filter" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Filter</a>
            <table class="table table-striped table-hover">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($master_sms); ++$i) { ?>
                    <tr>
                        <td><?php echo ($page+$i+1); ?></td>
                        <td><?php echo $master_sms[$i]->content; ?></td>
                    </tr>
                    <?php } ?>
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

<? $this->load->view('footer');?>