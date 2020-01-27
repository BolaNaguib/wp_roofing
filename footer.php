<?php 
// ACF Fields 
$cert = get_field( 'cert', 'option' );
?>
<!-- START  -->
<footer class='section_type-footer' style="padding-top: 75px;">

    <div class="uk-container">
    
    <img style="width:100%;" src="<?php echo $cert['url'] ;?>" alt="<?php echo $cert['alt'] ;?>" title="<?php echo $cert['title'] ;?>">
        <div class="uk-margin-large">

            <h3 style="color:#fff;"> Cities we serve </h3>
            <hr>
            <?php 

$posts = get_field('cities_we_serve', 'option');

if( $posts ): ?>
            <div class="uk-child-width-1-6@m uk-child-width-1-2 uk-grid" uk-grid="">

    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
        <li class="uk-margin-remove uk-first-column">
                    <a class="footer__link footer__link_type_city uk-button-text" href="<?php echo get_permalink( $p->ID ); ?>">
                    <?php echo get_the_title( $p->ID ); ?> </a></li>
	<?php endforeach; ?>
               

                



            </div>
            <?php endif; ?>

        </div>

   <br>
   <br>

    </div>

    <!-- START uk-container -->
    <div class='uk-container'>
    <hr>

        <!-- START uk-grid -->
        <div class='uk-grid' uk-grid="uk-margin">
            <!-- START uk-width-1-2@m -->
            <div class='uk-width-1-2@m'>
                <!-- START uk-text-center uk-text-left@m -->
                <div class='uk-text-center uk-text-left@m'>
                    <span>© 2020 Master Builders LLC.</span>
                </div>
                <!-- END uk-text-center uk-text-left@m -->
            </div>
            <!-- END uk-width-1-2@m -->
            <!-- START uk-width-1-2@m -->
            <div class='uk-width-1-2@m'>
                <!-- START uk-text-center uk-text-right@m -->
                <div class="uk-text-right@m uk-text-center">
                    Made with <i style="color:red" class="fas fa-heart"></i> By <a target="_blank" href="https://www.xvxlabs.com"> xvxlabs.com</a>
                </div>
                <!-- END uk-text-center uk-text-right@m -->
            </div>
            <!-- END uk-width-1-2@m -->
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</footer>
<!-- END  -->

<style>
    .footer__link {
        color: #fff;
    }
</style>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>


<?php wp_footer(  ) ?>


</body>

</html>