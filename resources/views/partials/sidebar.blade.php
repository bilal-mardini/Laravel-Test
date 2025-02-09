 <!-- SIDEBAR -->
        <aside class="app-sidebar" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="{{ route('admin.home.index') }}" class="header-logo">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo" class="desktop-logo">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo" class="toggle-logo">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo" class="desktop-dark">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo" class="toggle-dark">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo"
                        class="desktop-white">
                    <img src="{{ asset('build/assets/images/media/logo-light.webp') }}" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->
            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">
                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">الصفحات الرئيسية</span></li>
                        <!-- End::slide__category -->
                          <li class="slide">
                            <a href="{{ route('admin.home.index') }}" class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">لوحة التحكم 
                            </a>
                        </li>
                          <li class="slide">
                            <a href="{{ route('admin.students.index') }}" class="side-menu__item">
                                <i class="bx bx-user side-menu__icon"></i>
                                <span class="side-menu__label">الطلاب  
                            </a>
                        </li>
                          <li class="slide">
                            <a href="{{ route('admin.teachers.index') }}" class="side-menu__item">
                                <i class="las la-chalkboard-teacher side-menu__icon"></i>
                                <span class="side-menu__label">المعلمين  
                            </a>
                        </li>
                          <li class="slide">
                            <a href="{{ route('admin.sections.index') }}" class="side-menu__item">
                                <i class="las la-layer-group side-menu__icon"></i>
                                <span class="side-menu__label">الأفرع  
                            </a>
                        </li>
                          <li class="slide">
                            <a href="{{ route('admin.subjects.index') }}" class="side-menu__item">
                                <i class="las la-book side-menu__icon"></i>
                                <span class="side-menu__label">المواد  
                            </a>
                        </li>
                      <li class="slide">
                        <a href="{{ route('admin.units.index') }}" class="side-menu__item">
                            <i class="las la-cogs side-menu__icon"></i>
                            <span class="side-menu__label">الوحدات</span>
                        </a>
                    </li>
                      <li class="slide">
                        <a href="{{ route('admin.courses.index') }}" class="side-menu__item">
                            <i class="las la-box side-menu__icon"></i>
                            <span class="side-menu__label">الدورات</span>
                        </a>
                      </li>
                      <li class="slide">
                        <a href="{{ route('admin.questions.index') }}" class="side-menu__item">
                            <i class="las la-question side-menu__icon"></i>
                            <span class="side-menu__label">بنك الأسئلة</span>
                        </a>
                      </li>
                      <li class="slide">
                        <a href="{{ route('admin.tests.index') }}" class="side-menu__item">
                            <i class="las la-clipboard side-menu__icon"></i>
                            <span class="side-menu__label">الاختبارات </span>
                        </a>
                      </li>
                    
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-task side-menu__icon"></i>
                                <span class="side-menu__label">Task<span
                                        class="text-secondary text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-secondary/10 ms-2">New</span></span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Task</a>
                                </li>
                                <li class="slide">
                                    <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                                </li>
                                <li class="slide">
                                    <a href="task-listview.html" class="side-menu__item">List View</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Task Details</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-fingerprint side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide"><a href="comingsoon.html" class="side-menu__item">Coming
                                        Soon</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Create
                                        Password<i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="createpassword-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="createpassword-cover.html"
                                                class="side-menu__item">Cover</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Lockscreen<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="lockscreen-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="lockscreen-cover.html"
                                                class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Reset Password<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="resetpassword-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="resetpassword-cover.html"
                                                class="side-menu__item">Cover</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Sign Up<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="signup-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="signup-cover.html"
                                                class="side-menu__item">Cover</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Sign In<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="signin-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="signin-cover.html"
                                                class="side-menu__item">Cover</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Two Step
                                        Verfication<i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="twostep-verification-basic.html"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="twostep-verification-cover.html"
                                                class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide"><a href="under-maintenance.html" class="side-menu__item">Under
                                        Maintenance</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-error side-menu__icon"></i>
                                <span class="side-menu__label">Error</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Error</a>
                                </li>
                                <li class="slide">
                                    <a href="error401.html" class="side-menu__item">401 - Error</a>
                                </li>
                                <li class="slide">
                                    <a href="error404.html" class="side-menu__item">404 - Error</a>
                                </li>
                                <li class="slide">
                                    <a href="error500.html" class="side-menu__item">500 - Error</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-box side-menu__icon"></i>
                                <span class="side-menu__label">Ui Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ui Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="badges.html" class="side-menu__item">Badges</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumbs.html" class="side-menu__item">Breadcrumbs</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroups.html" class="side-menu__item">Button Groups</a>
                                </li>
                                <li class="slide">
                                    <a href="blockquotes.html" class="side-menu__item">Blockquotes</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="indicators.html" class="side-menu__item">Indicators</a>
                                </li>
                                <li class="slide">
                                    <a href="images-figures.html" class="side-menu__item">Images &amp; Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroups.html" class="side-menu__item">List Groups</a>
                                </li>
                                <li class="slide">
                                    <a href="navs-tabs.html" class="side-menu__item">Navs &amp; Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="paginations.html" class="side-menu__item">Paginations</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-medal side-menu__icon"></i>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="grids.html" class="side-menu__item">Grids</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-file  side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-check-radios.html" class="side-menu__item">Checks &amp;
                                                Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-switches.html" class="side-menu__item">Form Switches</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-groups.html" class="side-menu__item">Input
                                                Groups</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-range.html" class="side-menu__item">Range Sliders</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-file-uploads.html" class="side-menu__item">File
                                                Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-datetime-pickers.html" class="side-menu__item">Date, Time
                                                Pickers</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-color-pickers.html" class="side-menu__item">Color
                                                Pickers</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-advanced-select.html" class="side-menu__item">Advanced
                                                Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-numbers.html" class="side-menu__item">Input
                                                Numbers</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-passwords.html" class="side-menu__item">Passwords</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-counters-markup.html" class="side-menu__item">Counters &
                                                markup</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-layouts.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill-editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-validations.html" class="side-menu__item">Validations</a>
                                </li>
                                <li class="slide">
                                    <a href="form-select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-party side-menu__icon"></i>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions-collapse.html" class="side-menu__item">Accordions &amp;
                                        Collapse</a>
                                </li>
                                <li class="slide"><a href="custom-scrollbar.html" class="side-menu__item">Custom
                                        Scrollbar</a></li>
                                <li class="slide"><a href="draggable-cards.html"
                                        class="side-menu__item">Draggable Cards</a></li>
                                <li class="slide">
                                    <a href="modals-closes.html" class="side-menu__item">Modals &amp; Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbars.html" class="side-menu__item">Navbars</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide"><a href="ratings.html" class="side-menu__item">Ratings</a></li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="stepper.html" class="side-menu__item">Stepper</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <i class="bx bx-gift side-menu__icon"></i>
                                <span class="side-menu__label">Widgets <span
                                        class="text-danger text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-danger/10 ms-2">Hot</span></span>
                            </a>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-grid-alt side-menu__icon"></i>
                                <span class="side-menu__label">Apps<span
                                        class="text-secondary text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-secondary/10 ms-2">New</span></span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                        </li>
                        <li class="slide">
                            <a href="sweetalerts.html" class="side-menu__item">Sweetalerts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Projects
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.html" class="side-menu__item">Projects Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-create.html" class="side-menu__item">Projects Create</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Jobs
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="job-details.html" class="side-menu__item">Job Details</a>
                                </li>
                                <li class="slide">
                                    <a href="job-company-search.html" class="side-menu__item">Company Search</a>
                                </li>
                                <li class="slide">
                                    <a href="job-search.html" class="side-menu__item">Job Search </a>
                                </li>
                                <li class="slide">
                                    <a href="job-post.html" class="side-menu__item">Job Post</a>
                                </li>
                                <li class="slide">
                                    <a href="job-list.html" class="side-menu__item">Job List</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-search.html" class="side-menu__item">Candidate Search</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-details.html" class="side-menu__item">Candidate
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">NFT
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-wallet-integration.html" class="side-menu__item">Wallet
                                        Integration</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">CRM
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Crypto
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currency-exchange.html" class="side-menu__item">Currency
                                        Exchange</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-buy-sell.html" class="side-menu__item">Buy &amp; Sell</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Nested Menu</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Nested Menu</a>
                            </li>
                            <li class="slide">
                                <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child3">
                                            <li class="slide">
                                                <a href="javascript:void(0);"
                                                    class="side-menu__item">Nested-2-2-1</a>
                                            </li>
                                            <li class="slide">
                                                <a href="javascript:void(0);"
                                                    class="side-menu__item">Nested-2-2-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Tables &amp; Charts</span></li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-table side-menu__icon"></i>
                            <span class="side-menu__label">Tables<span
                                    class="text-success text-[0.75em] badge !py-[0.25rem] !px-[0.45rem] rounded-sm bg-success/10 ms-2">3</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Tables</a>
                            </li>
                            <li class="slide">
                                <a href="tables.html" class="side-menu__item">Tables</a>
                            </li>
                            <li class="slide">
                                <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                            </li>
                            <li class="slide">
                                <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-bar-chart-square side-menu__icon"></i>
                            <span class="side-menu__label">Charts</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Charts</a></li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-timeline-charts.html" class="side-menu__item">Timeline
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-candlestick-charts.html" class="side-menu__item">Candlestick
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-scatter-charts.html" class="side-menu__item">Scatter
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-treemap-charts.html" class="side-menu__item">Treemap
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-polararea-charts.html" class="side-menu__item">Polararea
                                            Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide"><a href="chartjs.html" class="side-menu__item">Chart JS</a></li>
                            <li class="slide"><a href="echartjs.html" class="side-menu__item">Echarts</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Maps &amp; Icons</span></li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-map side-menu__icon"></i>
                            <span class="side-menu__label">Maps</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Maps</a></li>
                            <li class="slide"><a href="google-maps.html" class="side-menu__item">Google Maps</a>
                            </li>
                            <li class="slide"><a href="leaflet-maps.html" class="side-menu__item">Leaflet
                                    Maps</a></li>
                            <li class="slide"><a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="icons.html" class="side-menu__item">
                            <i class="bx bx-store-alt side-menu__icon"></i>
                            <span class="side-menu__label">Icons</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </div>
                </nav>
                <!-- End::nav -->
            </div>
            <!-- End::main-sidebar -->
        </aside>
        <!-- END SIDEBAR -->