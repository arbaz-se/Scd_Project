<?php
function getHeroImagePath($page) {
    switch ($page) {
        case 'index.php':
            return "./resources/home_hero.png";
        case 'serviceAreas.php':
            return "./resources/areas_hero.png";
        default:
            return "./resources/home_hero.png"; 
    }
}

$page = basename($_SERVER['PHP_SELF']);
$hero_image_path = getHeroImagePath($page);
?>

<div class="row">
    <div class="col-md-12 hero-section">
        <img src="<?php echo $hero_image_path; ?>" alt="Hero Image">
    </div>
</div>
