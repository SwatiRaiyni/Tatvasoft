<!-- header -->
<header class="site-header">
            <div class="header-wrapper d-flex justify-content-between align-items-center">
                <a href="#" title="Helper hand" class="logo-block">
                    <img src="./assets/images/site-logo-large.png" alt="Helper hand logo">
                </a>
                <div class="header-right-block">
                    <div class="right-block-inner d-flex align-items-center">
                        <nav class="navbar navbar-expand-lg align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"  style="background-image: url('./assets/images/menu-icon.svg');"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="#" title="Book a Cleaner">Book a
                                            Cleaner</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=price'?>" title="Prices">Prices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" title="Our Guarantee">Our Guarantee</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" title="Blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $base_url.'?controller=Contact&function=ContactUs'?>" title="Contact us">Contact us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="#" title="Login" data-bs-toggle="modal" data-bs-target="#ModalFormlogin">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-btn" href="<?= $base_url.'?controller=Contact&function=spr'?>" title="Become a Helper">Become a
                                            Helper</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="custom-dropdown">
                            
                            <select class="country-dropdown">
                                <option value="India" data-image="./assets/images/india.svg">India</option>
                                <option value="Australia" data-image="./assets/images/australia.svg">Australia</option>      
                                <option value="United States" data-image="./assets/images/united-states.svg">United States</option>
                                
                            </select>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>