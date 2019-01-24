<!-- header -->
<?php $this->load->view('header'); ?>
<!-- /header -->	

<body>

    <!-- slides -->
    <?php $this->load->view('slides'); ?>
    <!-- slides -->	

    <div class="main-box">
        <div class="container">
            <div class="inside">
                <h2>Site <span>Map</span></h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <ul class="list1">
                    <li><a href="<?= base_url(); ?>" class="current">Home</a></li>
                    <li><a href="<?= base_url('about'); ?>">About</a></li>
                    <li><a href="<?= base_url('privacy'); ?>">Privacy</a></li>
                    <li><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
                    <li><a href="<?= base_url('contacts'); ?>">Contact</a></li>
                    <li><a href="<?= base_url('sitemap'); ?>">Sitemap</a></li>
                    <li><a href="<?= base_url('login'); ?>" target="_blank">Login</a></li>
                </ul>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non.
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('footer'); ?>
    <!-- /footer -->		

</body>
</html>
