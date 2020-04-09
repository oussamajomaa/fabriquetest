<div class="container-fluid h-100 mt-1 mb-1">
    <div class="row h-100">
        <aside class="col-12 col-md-3 p-0 bg-danger pt-2">
            <ul class="sidebar-nav text-light sideAdmin" id="sidebar">
                <li class="sub-sidebar-brand nav-item ">
                    <a class="nav-link" href="#/abc">PROMOTION <i class="fa fa-chevron-down"></i></a>

                    <ul class="sub-menu">
                        <li class="sub-sidebar-brand nav-item">
                            <a class="nav-link ml-2" href="#/web">Créer Une promotion</a>
                        </li>
                        <li class="sub-sidebar-brand nav-item">
                            <a class="nav-link ml-2" href="#/social">Social</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
                <li class="sub-sidebar-brand  ">
                    <a class="nav-link" href="#/System">FORMATION <i class="fa fa-chevron-down"></i></a>

                    <ul class="sub-menu">
                        <li class="sub-sidebar-brand ">
                            <a class="nav-link ml-2" href="#/web">Créer Une promotion</a>
                        </li>
                        <li class="sub-sidebar-brand ">
                            <a class="nav-link ml-2" href="#/social">Social</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
                <li class="sub-sidebar-brand">
                    <a class="nav-link" href="#/abc">APPRENANT <i class="fa fa-chevron-down"></i></a>

                    <ul class="sub-menu">
                        <li class="sub-sidebar-brand ">
                            <a class="nav-link ml-2" href="#/web">Web</a>
                        </li>
                        <li class="sub-sidebar-brand">
                            <a class="nav-link ml-2" href="#/social">Social</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
                <li class="sub-sidebar-brand ">
                    <a class="nav-link" href="#/abc">PARTENAIRE <i class="fa fa-chevron-down"></i></a>

                    <ul class="sub-menu">
                        <li class="sub-sidebar-brand ">
                            <a class="nav-link ml-2" href="#/web">Web</a>
                        </li>
                        <li class="sub-sidebar-brand ">
                            <a class="nav-link ml-2" href="#/social">Social</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
            </ul>
        </aside>
        <main class="col-12 col-md-9 m-0" style="background-color: #E9ECEF">
            <div>
                <?php
                if ($_GET['page'] == 'admin/formateur') {
                    require 'formateur.php';
                }
                if ($_GET['page'] == 'admin/apprenant') {
                    require 'apprenant.php';
                }
                if ($_GET['page'] == 'admin') {
                    require 'adminA.php';
                }
                if ($_GET['page'] == 'admin/apprenant/propos') {
                    require 'apropos.php';
                }
                ?>
            </div>
        </main>
    </div>
</div>
<script>
    $('.sidebar-nav li a').click(function() {
        $(this).parent().toggleClass('active')
        let icon = $(this).children()
        console.log(icon)
        if (icon.attr('class') == 'fa fa-chevron-down') {
            icon.attr('class', 'fa fa-chevron-up')
        } else {
            icon.attr('class', 'fa fa-chevron-down')
        }
    })
</script>