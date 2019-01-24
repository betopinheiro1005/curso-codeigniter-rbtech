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
                    <h2>Nossos <span>Contatos</span></h2>
                    <!-- .contacts -->
                    <ul class="contacts">
                        <li><strong>Zip Code:</strong>50122</li>
                        <li><strong>Country:</strong>USA</li>
                        <li><strong>City:</strong>New York</li>
                        <li><strong>Telephone 1:</strong>+354 5635600</li>
                        <li><strong>Fax:</strong>+354 5635620</li>
                        <li><strong>Email:</strong><a href="#">businessco@mail.com</a></li>
                    </ul>
                    <!-- /.contacts -->
                    <h3>Miscellaneous info:</h3>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                </aside>
                <!-- content -->
                <section id="content">
                    <article>
                        <h2>Formulário <span>Contato</span></h2>
                        <?php
                        if ($form_error) {
                            echo '<p>' . $form_error . '</p>';
                        }
                        echo form_open('pagina/contacts');
                        echo form_label('Seu nome:', 'nome') . '<br />';
                        echo form_input('nome', set_value('nome')) . '<br />';
                        echo form_label('Seu E-mail:', 'email') . '<br />';
                        echo form_input('email', set_value('email')) . '<br />';
                        echo form_label('Assunto:', 'assunto') . '<br />';
                        echo form_input('assunto', set_value('assunto')) . '<br />';
                        echo form_label('Sua mensagem:', 'mensagem') . '<br />';
                        echo form_textarea('mensagem', set_value('mensagem')) . '<br /><br />';
                        echo form_submit('enviar', 'Enviar', array('class' => 'botao'));
                        echo form_close();
                        ?>
                    </article> 
                </section>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('footer'); ?>
<!-- /footer -->		
