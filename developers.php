<?php
include_once('config/db/data-base.php');


$db = new DataBase();
include_once('header.php');
$res = $db->query("SELECT * FROM `developers` ORDER BY `dev_id` LIMIT 3");

?>
<div class="content m0">
    <div class="container">
        <div class="developer">
            <h1 class="main-title">Developers</h1>
            <div class="developer-container">
                <?php
                if ($res) {
                    for ($i = 0; $i < count($res); $i++) {
                        echo
                            "<a href=\"/developers/" . $res[$i]['dev_id'] . "\" class=\"developer-item\">
                    <div class=\"profile_img no-box-shadow\">
                        <div class=\"profile_img-container\">
                            <div class=\"profile_img-img\" style=\"background-image: url('/" . $res[$i]['dev_img'] . "') \">
                            </div>
                        </div>
                    </div>
                    <div class=\"dev-info\">
                        <div class=\"dev-name\"><h1>" . $res[$i]['dev_name'] . "</h1></div>
                        <div class=\"dev-description\"><p>" . $res[$i]['dev_short_descr'] . "</p></div>
                    </div>
                </a>";
                    }
                } else {
                    echo "<p>There are no developers!</p>";
                }

                ?>
                <a href="/" class="developer-item">
                    <div class="profile_img no-box-shadow">
                        <div class="profile_img-container">
                            <div class="profile_img-img" style="background-image: url('/assets/img/prof.png') ">
                            </div>
                        </div>
                    </div>
                    <div class="dev-info">
                        <div class="dev-name"><h1>Volodymyr Korol</h1></div>
                        <div class="dev-description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolores, soluta.</p></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>

