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
                    <?php $this->load->view('noticias'); ?>
                </aside>
                <!-- /aside -->		  

                <!-- content -->
                <?php $this->load->view('conteudo'); ?>
                <!-- /content -->

            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('footer'); ?>
<!-- /footer -->		
