<? $this->load->view('header');?>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><b>DICTIONARY</b></div>
          <div class="panel-body">
            <p><?=$this->session->flashdata('pesan')?> </p>
            <table class="table table-striped table-hover">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($kamus); ++$i) { ?>
                    <tr>
                        <td><?php echo ($page+$i+1); ?></td>
                        <td><?php echo $kamus[$i]->content; ?></td>
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