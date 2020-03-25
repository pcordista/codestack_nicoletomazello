<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<?php include 'components/menu-internal.php'; ?>

<?php include 'components/sidebar.php'; ?>

<?php include 'components/banner-blog.php'; ?>

<div class="blog-page">
    <div class="container">
        <div class="grid">
            <div>
                <div class="item">
                    <a href="./single.php">
                        <img src="assets/images/post.jpg" alt="" class="widthfull">
                        <div class="content">
                            <div class="category">
                                <span>Novidades</span>, <span>Coach</span>
                            </div>
                            <h5 class="title">
                                Business & Executive Coaching
                            </h5>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                            <div class="button">
                                <a href="/single.php">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <img src="assets/images/post.jpg" alt="" class="widthfull">
                    <div class="content">
                        <div class="category">
                            <span>Novidades</span>, <span>Coach</span>
                        </div>
                        <h3 class="title">
                            Business & Executive Coaching
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </div>
                        <div class="button">
                            <a href="/single.php">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="shape">
                    <h5>Categorias</h5>

                    <ul>
                        <li>&#62;&nbsp;coach</li>
                        <li>&#62;&nbsp;novidades</li>
                        <li>&#62;&nbsp;curso</li>
                    </ul>
                </div>

                <div class="shape hide-on-med-and-down">
                    <h5>Artigos & Posts</h5>
                    <div class="post-item">
                        <div class="image">
                            <img src="assets/images/post.jpg">
                        </div>
                        <div>
                            <div class="title">Business & Executive Coaching</div>
                            <div class="date">16 Dez, 2019</div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image">
                            <img src="assets/images/post.jpg">
                        </div>
                        <div>
                            <div class="title">Business & Executive Coaching</div>
                            <div class="date">16 Dez, 2019</div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image">
                            <img src="assets/images/post.jpg">
                        </div>
                        <div>
                            <div class="title">Business & Executive Coaching</div>
                            <div class="date">16 Dez, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>
<script>
    document.addEventListener("load", startHome())
</script>

</body>

</html>