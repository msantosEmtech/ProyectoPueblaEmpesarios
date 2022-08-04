<footer class="container-fluid" style="background-color: #E9E7E1;">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 <?= isset($centrado) ? $centrado : "" ?> text-muted" style="padding-top: 2rem;padding-left: 1rem;font-style: italic;">
                    © Copyright FIMPES Digital 2022 I Powered by Emtech Institute I Sponsored by Santander universidades
                </small>
            </div>
        </div>
        <div class="row d-block wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
            
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.min.js') ?>"></script>
    <?php if(isset($scriptVista)){ echo $scriptVista; } ?>
    <script>
        new WOW().init();
    </script>
</body>
</html>