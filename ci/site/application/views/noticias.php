<h2>Recent <span>News</span></h2>
<!-- .news -->
<ul class="news">
    <?php
    if ($noticias = $this->noticia->get(3)):
        foreach ($noticias as $linha):
            ?>
            <li>
                <img src="<?= base_url('uploads/' . $linha->imagem); ?>" class="thumb-edicao" alt="" />
                <h4><?= to_html($linha->titulo); ?></h4>
                <p><?= resumo_post($linha->conteudo); ?>...
                    <div class="leia_mais">
                        <a href="<?= base_url('post/'.$linha->id); ?>">Leia mais &raquo;</a>
                    </div>
                </p>
            </li>
            <?php
        endforeach;
    else:
        echo '<p>Nenhuma notícia cadastrada!</p>';
    endif;
    ?>

</ul>
<!-- /.news -->
