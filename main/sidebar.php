<nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="../../assets/img/logobaru.jpg" alt="logo_img" />
            </span>
            <span class="logo_name">Materi Coding</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>

        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <li class="item">
                        <a href="../home_tutorial.php" class="link flex">
                          <i class="bx bx-home-alt"></i>
                          <span>Home</span>
                        </a>
                      </li>
                    <div class="menu_title flex">
                        <span class="title">LANGUAGE</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex" data-target="html.html" onclick="toggleSubMenu(event, 'html-submenu')">
                            <i class="bx bx-grid-alt"></i>
                            <span>HTML</span>
                            <i class="bx bx-chevron-down toggle-icon"></i>
                        </a>
                        <div id="html-submenu" class="submenu">
                            <a href="../materi_html/materi_1.php">HTML Materi 1</a>
                            <a href="../materi_html/materi_2.php">HTML Materi 2</a>
                            <a href="../materi_html/materi_3.php">HTML Materi 3</a>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex" data-target="css.html" onclick="toggleSubMenu(event, 'css-submenu')">
                            <i class="bx bx-grid-alt"></i>
                            <span>CSS</span>
                            <i class="bx bx-chevron-down toggle-icon"></i>
                        </a>
                        <div id="css-submenu" class="submenu">
                            <a href="../materi_css/cssbackround.php">CSS Materi 1</a>
                            <a href="../materi_css/cssmargin.php">CSS Materi 2</a>
                            <a href="../materi_css/csspadding.php">CSS Materi 3</a>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex" data-target="javascript.html" onclick="toggleSubMenu(event, 'js-submenu')">
                            <i class="bx bx-grid-alt"></i>
                            <span>JavaScript</span>
                            <i class="bx bx-chevron-down toggle-icon"></i>
                        </a>
                        <div id="js-submenu" class="submenu">
                            <a href="../materi_js/sintaksjs.php">JavaScript Materi 1</a>
                            <a href="../materi_js/variabeljs.php">JavaScript Materi 2</a>
                            <a href="../materi_js/outputjs.php">JavaScript Materi 3</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="logout_item">
                <ul class="menu_item">
                    <li class="item">
                        <a href="../../logout.php" class="link flex">
                            <i class="bx bx-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>