<aside class="app-sidebar sticky" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ url('/') }}" class="header-logo">
            <img src="noa-assets/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="noa-assets/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="noa-assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="noa-assets/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="noa-assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-white">
            <img src="noa-assets/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -11.2px 0px -80px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 11.2px 0px 80px;">
                            <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills flex-column sub-open active">
                                <div class="slide-left active d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="main-menu active" style="margin-left: 0px; margin-right: 0px;">
                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">MENU</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide active">
                                        <a href="{{ url('/') }}" class="side-menu__item active">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="25px"
                                                height="25px">
                                                <path
                                                    d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Dashboard</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">User</span>
                                    </li> <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            
                                            <i class="fa-regular fa-user fa-lg " style="opacity: .7" ></i>
                                            <span class="side-menu__label" style="margin-left: 8px">User</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(134.4px, 183.2px, 0px);"
                                            data-popper-placement="bottom">

                                            <li class="slide">
                                                <a href={{ url('/user') }} class="side-menu__item">Form
                                                    User</a>
                                            </li>
                                            <li class="slide">
                                                <a href={{ url('/userview') }} class="side-menu__item">Table User</a>
                                            </li>

                                        </ul>
                                    </li> <!-- End::slide -->

                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">Transaksi</span>
                                    </li> <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Pemasukan</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(134.4px, 183.2px, 0px);"
                                            data-popper-placement="bottom">

                                            <li class="slide">
                                                <a href={{ url('/pemasukancreate') }} class="side-menu__item">Form
                                                    Pemasukan</a>
                                            </li>
                                           

                                        </ul>
                                    </li> <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Pengeluaran</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(134.4px, 224px, 0px);"
                                            data-popper-placement="bottom">

                                            <li class="slide">
                                                <a href={{ url('pengeluaran') }} class="side-menu__item">Form
                                                    Pengeluaran</a>
                                            </li>
                                          
                                           
                                        </ul>
                                        <li class="slide" >
                                            <a href="{{ url('/pemasukanview') }}"
                                                class="side-menu__item d-flex  align-items-center justify-content-center">
                                                <i class="fa-solid fa-lg fa-clock-rotate-left" style="opacity: .8;margin-right: 12px;margin-left: 3px"></i>
                                                <span class=" side-menu__label" >History Transaksi</span>

                                            </a>
                                        </li>
                                    </li> <!-- End::slide -->


                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">Tingkatan
                                            kelas</span>
                                    </li>
                                    <!-- End::slide__category --> <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z">
                                                </path>
                                            </svg> <span class="side-menu__label">Tingkatan Kelas</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1"
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(134.4px, 608px, 0px);"
                                            data-popper-placement="bottom">

                                            <li class="slide">
                                                <a href="{{ url('tingkatankelas') }}" class="side-menu__item">Form
                                                    tingkatan kelas</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{ url('tingkatankelasview') }}"
                                                    class="side-menu__item">Table tingkatan
                                                    kelas</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- End::slide -->

                                    <!-- Start::slide__category -->
                                    <li class="slide__category">
                                        <span class="category-name">LOGOUT</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->



                                    <!-- End::slide -->

                                    <li class="slide">
                                        <a href="{{ url('logout') }}"
                                            class="side-menu__item d-flex  align-items-center justify-content-center">
                                            <i class="side-menu__icon custom-sidebar-icon ri-logout-box-line"></i>
                                            <span class=" side-menu__label" style="padding-top: 9px">Logout</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="slide-right d-none" id="slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg>
                                </div>
                            </nav>
                            <!-- End::nav -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 900px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 605px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
    </div>
    <!-- End::main-sidebar -->
</aside>
