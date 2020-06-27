<?php
include_once ('config/db/data-base.php');

$db = new DataBase();
include_once('header.php');
?>
<div class="main">
    <div class="banner">
        <div class="banner-back" style="background: url('/assets/img/backTop.png') no-repeat scroll center -100px / cover"></div>
    </div>

    <div class="profile-header">
        <div class="container">
            <div class="profile-header_container">
                <div class="profile_img">
                    <div class="profile_img-container">
                        <div class="profile_img-img" style="background-image: url('/assets/img/prof.png') ">
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <div class="profile-text flex-1"><h1 class="profile-name">Krishnanunni</h1>
                        <p class="profile-name"> Freelance Web designer & developer</p></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="content-container">
            <div class="description flex-1"><h1 class="description-title">Web Design & Development</h1>
                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                    aliquid consequatur cupiditate distinctio esse est ex explicabo fuga fugiat, illum ipsum magnam modi
                    nesciunt nisi nobis, non nulla obcaecati possimus quasi qui quia quisquam recusandae reprehenderit
                    totam vitae voluptas voluptates?
                </p>
            </div>
            <div class="latest-projects flex-1">
                <div class="last_prj-title">
                    <h1>Last projects</h1>
                </div>
                <div class="projects">
                    <div class="project-item"><a href="#"><img src="/assets/img/cap.png" alt="prj"></a>
                        <div class="project-title"><h4>Project: first</h4></div>
                    </div>
                    <div class="project-item"><a href="#"><img src="/assets/img/iphone4.png" alt="prj"></a>
                        <div class="project-title"><h4>Project: second</h4></div>
                    </div>
                    <div class="project-item"><a href="#"><img src="/assets/img/yacht.png" alt="prj"></a>
                        <div class="project-title"><h4>Project: third</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php');?>
</body>
</html>

