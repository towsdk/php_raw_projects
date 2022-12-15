</div>
                    <!-- // END drawer-layout__content -->

                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                                 data-perfect-scrollbar>
                                <div class="sidebar-heading">Menu</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="<?=siteUrl()?>/admin/index.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                            <span class="sidebar-menu-text">Dashboards</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#banner_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Banner</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="banner_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/banner/addbanner.php">
                                                    <span class="sidebar-menu-text">Add Banner</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/banner/bannerIndex.php">
                                                    <span class="sidebar-menu-text">All Banner</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#service_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">service</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="service_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/service/addservice.php">
                                                    <span class="sidebar-menu-text">Add service</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/service/serviceIndex.php">
                                                    <span class="sidebar-menu-text">All service</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="<?=siteUrl()?>/admin/why_us/index.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Why_us</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#features_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Features</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="features_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/features/addfeatures.php">
                                                    <span class="sidebar-menu-text">Add Features</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="<?=siteUrl()?>/admin/features/featuresIndex.php">
                                                    <span class="sidebar-menu-text">All Features</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- These are for contact page -->
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#contact_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Contact Page</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="contact_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                href="<?=siteUrl()?>/admin/contact/contactIndex.php">
                                                    <span class="sidebar-menu-text">Contact Show</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                href="<?=siteUrl()?>/admin/contact/contactMessage.php">
                                                    <span class="sidebar-menu-text">Contact Message</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                         href="<?=siteUrl()?>/admin/subscribeEmail/subscribeEmail.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Subscribe Email</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                         href="<?=siteUrl()?>/admin/user/user.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Registered User</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                    </li>
                                   
                                </ul>
                                

                                <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                    <a href="profile.html"
                                       class="flex d-flex align-items-center text-underline-0 text-body">
                                        <span class="avatar avatar-sm mr-2">
                                        <img src="../../assets/img/portfolio/<?=$_SESSION['login_user']['photo']?>"
                                                 alt="avatar"
                                                 class="avatar-img rounded-circle">
                                        </span>
                                        <span class="flex d-flex flex-column">
                                            <strong><?=$_SESSION['login_user']['name']?></strong>
                                            <small class="text-muted text-uppercase">Site Manager</small>
                                        </span>
                                    </a>
                                    <div class="dropdown ml-auto">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item-text dropdown-item-text--lh">
                                                <div><strong><?=$_SESSION['login_user']['name']?></strong></div>
                                                <div>@<?=$_SESSION['login_user']['name']?></div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active"
                                               href="index.php">Dashboard</a>
                                            <a class="dropdown-item"
                                               href="profile.html">My profile</a>
                                            <a class="dropdown-item"
                                               href="edit-account.html">Edit account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                               href="../auth/logout.php">Logout</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                          :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="http://localhost/Moderna/admin/js/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="http://localhost/Moderna/admin/js/popper.min.js"></script>
        <script src="http://localhost/Moderna/admin/js/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="http://localhost/Moderna/admin/js/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="http://localhost/Moderna/admin/js/dom-factory.js"></script>

        <!-- MDK -->
        <script src="http://localhost/Moderna/admin/js/material-design-kit.js"></script>

        <!-- App -->
        <script src="http://localhost/Moderna/admin/js/toggle-check-all.js"></script>
        <script src="http://localhost/Moderna/admin/js/check-selected-row.js"></script>
        <script src="http://localhost/Moderna/admin/js/dropdown.js"></script>
        <script src="http://localhost/Moderna/admin/js/sidebar-mini.js"></script>
        <script src="http://localhost/Moderna/admin/js/app.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="http://localhost/Moderna/admin/js/app-settings.js"></script>

        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

                    <script>$(document).ready( function () {
                $('.myTable').DataTable();
} );</script>
    </body>
</html>