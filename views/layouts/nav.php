<nav class="navbar">
    <div class="branding">Sorter</div>
    <!-- nav menu starts here -->
    <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle"/>
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- nav menu items -->
        <div class="menu-items">
            <li class="<?= $page == '' || $page == 'home' ? 'active' : null ?>"><a href="?page=home" >Home</a></li>
            <li><a href="https://relcode.github.io" target="_blank">Portfolio</a></li>
        </div>
    </ul>
    <!-- nav menu ends here -->
</nav>