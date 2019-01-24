<!-- header -->
<?php $this->load->view('header'); ?>
<!-- /header -->	

<!-- slides -->
<?php $this->load->view('slides'); ?>
<!-- slides -->	


<div class="main-box">
    <div class="container">
        <div class="inside">
            <div class="wrapper">
                <!-- aside -->
                <aside>
                    <h2>Outras Notícias</h2>
                    <!-- .news -->
                    <ul class="news post-justify">
                        <li>
                            <figure><strong>22</strong>June</figure>
                            <h3><a href="#">Sed ut perspiciatis unde</a></h3>
                            Domnis iste natus error sit voluptam accusa doloremque <a href="#">...</a>
                        </li>
                        <li>
                            <figure><strong>09</strong>June</figure>
                            <h3><a href="#">Totam rem aperiam</a></h3>
                            Eaqueipsa quae abillo inventoretis et quasi architecto beatae <a href="#">...</a>
                        </li>
                        <li>
                            <figure><strong>31</strong>May</figure>
                            <h3><a href="#">Inventore veritatis et quasi</a></h3>
                            Architecto beatae vitae dicta sunt explicabo <a href="#">...</a>
                        </li>
                        <li>
                            <figure><strong>25</strong>May</figure>
                            <h3><a href="#">Nemo enim ipsam</a></h3>
                            Voluptatem quia voluptas sit asper natur aut odit aut fugit <a href="#">...</a>
                        </li>
                    </ul>
                    <!-- /.news -->
                </aside>
                <!-- content -->
                <section id="content">
                    <article>
                        <h2><?= $not_titulo; ?></h2>
                        <img src="<?= base_url('uploads/' . $not_imagem); ?>" class="post-edicao" alt="" />
                        <div  class="post-justify">
                            <p><?= $not_conteudo; ?></p>
                        </div>
                    </article> 
                </section>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('footer'); ?>
<!-- /footer -->		
