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
                    <h2>Template <span>Subpages</span></h2>
                    <!-- loopedSlider begin -->
                    <div id="loopedSlider">	
                        <div class="wrap">
                            <div class="slides">
                                <div><a href="#"><img src="<?= base_url('assets/images/thumb3.jpg'); ?>" alt=""></a></div>
                                <div><a href="#"><img src="<?= base_url('assets/images/thumb2.jpg'); ?>" alt=""></a></div>
                                <div><a href="#"><img src="<?= base_url('assets/images/thumb5.jpg'); ?>" alt=""></a></div>
                                <div><a href="#"><img src="<?= base_url('assets/images/thumb1.jpg'); ?>" alt=""></a></div>
                                <div><a href="#"><img src="<?= base_url('assets/images/thumb4.jpg'); ?>" alt=""></a></div>
                            </div>
                        </div>
                        <ul class="nav-controls">
                            <li><a href="#" class="previous">Previous Page</a></li>
                            <li><a href="#" class="next">Next Page</a></li>
                        </ul>
                    </div>
                    <!-- loopedSlider end -->
                </aside>
                <!-- content -->
                <section id="content">
                    <article>
                        <h2>About <span>Template</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudansam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                    </article> 
                </section>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('footer'); ?>
<!-- /footer -->		
