<?php get_header(); ?>
<div id="main" role="main">
        <div class="mainDownload">
            <?php
                $args = [
                    'post_type' => 'download',
                ];
                $mftDownload = new WP_Query ($args);
                if (have_posts(  )) :
                    while (have_posts(  )) : the_posts ();
                        
                    endwhile;
                endif;
            ?>
            <section class="download">
                <h3 class="downloadTitle"><a href="#">آموزش دوره‌ی اول</a></h3>
                <div class="downloadImage">
                    <a class="downloadImageLink" href=""><img src="images/f1.jpg" alt=""></a>
                </div>
                <div class="downloadDescription">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.
                    </p>
                </div>
                <div class="downloadFooter">
                    <a class="downloadPrice" href="#"><p>2500</p>تومان</a>
                    <a class="downloadShopping" href="#">خرید محصول</a>
                </div>
            </section>
            <section class="download">
                <h3 class="downloadTitle"><a href="#">آموزش دوره‌ی دوم</a></h3>
                <div class="downloadImage">
                    <a class="downloadImageLink" href=""><img src="images/f2.jpg" alt=""></a>
                </div>
                <div class="downloadDescription">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.
                    </p>
                </div>
                <div class="downloadFooter">
                    <a class="downloadPrice" href="#"><p>3000</p>تومان</a>
                    <a class="downloadShopping" href="#">خرید محصول</a>
                </div>
            </section>
            <div id="pagination">
                <div class="pagination">
                    <span class="pages"><a>25</a>صفحه</span>
                    <span class="current">2</span>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>