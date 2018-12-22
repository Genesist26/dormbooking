<link rel="stylesheet" href="public/css/homepate.css">
<div class="site-main">
    <section class="page-section">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="public/images/intro.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <br> <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Fresh Coffee</span>
                    <span class="section-heading-lower">Worth Drinking</span>
                </h2>
                <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
                </p><br>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="<?= base_url('signup');?>">Signup and Booking</a>
                </div>
            </div>
        </div>
    </section>

</div>

<!--    <!-- CONTENT -->
<!--    --><?php //foreach ($posts as $item) : ?>
<!--        <article class="post">-->
<!--            <span class="post-avatar--><?//= $item['sticky'] ? ' bg-green' : '' ; ?><!--">-->
<!--                <img src="--><?//= base_url('public/images');?><!--/avatar.jpg">-->
<!--            </span>-->
<!--            <span class="post-content--><?//= $item['sticky'] ? ' bg-green' : '' ; ?><!--">-->
<!--                <p>--><?//= $item['post']; ?><!--</p>-->
<!--                <div>-->
<!--                    --><?php //if ($this->session->logged_in) : ?>
<!--                        --><?php //if ($item['status'] == 'private') : ?>
<!--                            <i class="fa fa-lock" aria-hidden="true"></i>-->
<!--                        --><?php //else: ?>
<!--                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>-->
<!--                        --><?php //endif; ?>
<!--                    --><?php //endif; ?>
<!--                    <span class="date">--><?//= date('d/m/Y H:i:s', strtotime($item['timestamp'])); ?><!--</span>-->
<!--                    --><?php //if ($this->session->logged_in) : ?>
<!--                        <span class="icons">-->
<!--                            --><?php //$post_id = $item['post_id']; ?>
<!--                            <a href="--><?//= base_url("form/update/$post_id"); ?><!--"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>-->
<!--                            <a href="--><?//= base_url("form/delete/$post_id"); ?><!--" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
<!---->
<!--                            --><?php //if ($item['sticky']) : ?>
<!--                                <a href="--><?//= base_url("form/update_sticky/$post_id/off"); ?><!--"><i class="fa fa-flag"-->
<!--                                                                                                 aria-hidden="true"></i></a>-->
<!--                            --><?php //else: ?>
<!--                                <a href="--><?//= base_url("form/update_sticky/$post_id/on"); ?><!--"><i class="fa fa-flag-o"-->
<!--                                                                                                aria-hidden="true"></i></a>-->
<!--                            --><?php //endif; ?>
<!--                        </span>-->
<!--                    --><?php //endif; ?>
<!--                </div>-->
<!--            </span>-->
<!--        </article>-->
<!--    --><?php //endforeach; ?>
<!---->
<!--    <div class="pagination">-->
<!--<!--        <a href="#">Older »</a>-->
<!--        --><?//= $pagination_link; ?>
<!--    </div>-->
<!---->
<!---->
<!--    <!-- /CONTENT -->

