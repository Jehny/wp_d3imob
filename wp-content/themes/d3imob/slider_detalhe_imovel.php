    <?php 
        $images = easy_image_gallery_get_image_ids();
        if($images){
    ?>

<ul class="pgwSlideshow">
    <?php  foreach ($images as $id) { ?>
    <?php $imagefull = wp_get_attachment_image_src($id, ''); ?>
    <?php $image = wp_get_attachment_image_src($id, 'thumb'); ?>

                <li><img src="<?php echo $image[0]; ?>" alt="" data-description=""></li>
           
     <?php  } ?>
    <!-- <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt="Rio de Janeiro, Brazil"></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt="" data-large-src="london.jpg"></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt=""></li>
    <li>
        <a href="http://en.wikipedia.org/wiki/Monaco" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/img/miniatura_imovel.png" alt="Monaco">
        </a>
    </li> -->
</ul>
<?php } ?>