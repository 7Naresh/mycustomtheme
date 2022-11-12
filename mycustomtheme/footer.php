<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                    if(function_exists('register_custom_menus')){
                        if(has_nav_menu('footer')){
                            wp_nav_menu(
                                array(
                                    "theme_location" => "footer"
                                )
                            );
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>