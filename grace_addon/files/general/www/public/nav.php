        <?php
        $base_url = '/GRACe_repo/grace_addon/files/general/www/public/';
        ?>
        <nav>
            <ul>
                <li><strong>GRACe by Chill Division</strong></li>
            </ul>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label">
                <span class="hamburger"></span>
            </label>
            <ul>
                <li><a href="<?php echo $base_url; ?>tracking.php">Plant Tracking</a></li>
                <li><a href="<?php echo $base_url; ?>reporting.php">Reporting</a></li>
                <li><a href="<?php echo $base_url; ?>administration.php">Administration</a></li>
                <li><a href="#" id="theme_switcher">Toggle theme</a></li>
            </ul>
        </nav>
