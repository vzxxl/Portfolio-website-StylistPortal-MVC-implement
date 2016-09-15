<div class="menu">
    <div class="menu-element-container menu-element-container-1">
        <?php
        //making buttons for the first container (nav is not solid, its 2 pieces with logo in between) 
        foreach ($navItems as $Item) {

            //if no slug or the current page, then hightlight with css. If not, then don't
            if ((basename($_SERVER['REQUEST_URI']) == 'andrMVC') && ($Item['slug'] == 'main')) {
                $currentPage = 'selected';
            } elseif ($Item['slug'] == basename($_SERVER['REQUEST_URI'])) {
                $currentPage = 'selected';
            } else {
                $currentPage = '';
            }

          
            //making buttons using data from arrays.php
            if (key_exists('slug', $Item)) {

                echo "<a href=\"$Item[slug]\"><span class=\"menu-element menu-element-1 $currentPage\">$Item[title]</span></a>";
            }
        }
        ?>

    </div>

    <!--LOGO--> <img src="templates/img/andriana-style.png" alt="" class="logo menu-element-container">

    <div class="menu-element-container menu-element-container-2">

<?php
//making buttons for the second container (nav is not solid, its 2 pieces with logo in between) 
foreach ($navItems as $Item) {

    if ($Item['slug2'] == basename($_SERVER['REQUEST_URI'])) {
        $currentPage = 'selected';
    } else {
        $currentPage = '';
    }

    ////making buttons using data from arrays.php
    if (key_exists('slug2', $Item)) {

        echo "
        <a href=\"$Item[slug2]\"><span class=\"menu-element menu-element-2 $currentPage\">$Item[title2]</span></a>";
    }
}
?>

    </div>

</div>




