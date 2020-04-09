<div class=" bg-danger pt-2">
    <footer class="page-footer font-small unique-color-dark">
        <div class="container text-center text-md-left">
            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-light">
                    <h6 class="text-uppercase font-weight-bold">FABRIQUE ADMIN</h6>
                    <p>Aujourd’hui, nous formons des développeurs à portée des entreprises en quête de talents. Demain nous bousculerons les codes de l’enseignement.
                        www.simplon.co</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-light">
                    <h6 class="text-uppercase font-weight-bold">FRMATIONS</h6>
                    <p><a class="text-light" href="#!">Dev Web / Mobile</a></p>
                    <p><a class="text-light" href="#!">Réseaux</a></p>
                    <p><a class="text-light" href="#!">Dev Web / Mobile</a></p>
                    <p><a class="text-light" href="#!">DATA ANALYTICS</a></p>

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-light">


                    <h6 class="text-uppercase font-weight-bold">Liens Utiles</h6>
                    <p><a class="text-light" href="#!">Votre Compte</a></p>
                    <p><a class="text-light" href="#!">Votre Compte</a></p>
                    <p><a class="text-light" href="#!">Votre Compte</a></p>
                    <p><a class="text-light" href="#!">Votre Compte</a></p>

                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">


                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p><i class="fa fa-home"></i> PAU Cedex 9, France</p>
                    <p><i class="fa fa-envelope"></i> contact@fabriqueadmin.fr</p>
                    <p><i class="fa fa-phone"></i> 05 59 14 78 79</p>


                </div>


            </div>


        </div>





        <h4 class="font-weight-bold text-center text-light m-0
        mt-1 mb-1">Nos partenanires</h4>
        <div class="owl-carousel">

            <img src="img/logo/1.png" alt="">
            <img src="img/logo/2.png" alt="">
            <img src="img/logo/3.png" alt="">
            <img src="img/logo/4.png" alt="">
            <img src="img/logo/5.png" alt="">
            <img src="img/logo/6.png" alt="">
            <img src="img/logo/7.png" alt="">
            <img src="img/logo/8.png" alt="">
            <img src="img/logo/9.png" alt="">
            <img src="img/logo/10.png" alt="">
            <img src="img/logo/11.png" alt="">
        </div>

        <!-- Copyright -->
        <div class="text-light text-center">© 2020 Copyright:
            <a href="https://simplon.co/" class="text-warning"> Simplon.co</a>
        </div>

    </footer>

</div>
<!--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
-->


<script src="owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            lazyLoad: true,
            loop: true,
            items: 10,
            margin: 0,
            center: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsiveClass: true,
            autoHeight: true,
            smartSpeed: 1000
        })
    });


    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>

</body>

</html>