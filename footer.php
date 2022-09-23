<!-- Footer Area Start -->
<?php global $redux_sepleen_global ?>
<footer class="footer-area pt-50 pb-50">
    <div class="container">
    <div class="row">
        
        <div class="col-lg-3 col-md-6">
            <?php dynamic_sidebar('footer1'); ?>
        </div>
        

        <div class="col-lg-2 col-md-6">
        <?php dynamic_sidebar('footer2'); ?>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="single-footer">
                <?php dynamic_sidebar('footer3'); ?>
            </div>


        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-footer">
                <?php dynamic_sidebar('footer4'); ?>
            </div>
        </div>
    </div>
    <div class="row copyright">
        <div class="col-md-6">
            <?php echo $redux_sepleen_global['copyright-title'] ?>
        </div>
        <div class="col-md-6 footer-social">
            <?php dynamic_sidebar('footer5'); ?>
        </div>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>