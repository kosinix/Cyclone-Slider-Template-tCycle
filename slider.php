<div class="tcycle"
     data-fx="<?php echo esc_attr( ($slider_settings['fx']=='scrollHorz') ? 'scroll' : 'fade' ); ?>"
     data-speed="<?php echo esc_attr( $slider_settings['speed'] ); ?>"
     data-timeout="<?php echo esc_attr( $slider_settings['timeout'] ); ?>"
>
    <?php foreach($slides as $slide): ?>
        <img src="<?php echo $slide['image_url']; ?>" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" />
    <?php endforeach; ?>
</div>