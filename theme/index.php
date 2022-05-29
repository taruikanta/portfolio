<?php get_header();?>
    <div class="container index">
      <section class="section first-view">
        <div class="slider-area">
          <ul class="slider">
            <li class="slider-item slider-item1">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/first-view01.jpg" alt="" />
            </li>
            <li class="slider-item slider-item2">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/first-view02.jpeg" alt="" />
            </li>
            <li class="slider-item slider-item3">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/first-view03.jpeg" alt="" />
            </li>
          </ul>
        </div>
        <h2 class="title">WELCOME TO <br class="sp-visible" />MY PORTFOLIO SITE</h2>
      </section>
      <section class="section about" id="about">
        <div class="contents-wrap">
          <h2 class="title" id="about">ABOUT ME</h2>
          <div class="content">
            <div class="introduction-text">
              <p class="text">
                Creator Profile<br />垂井幹太 Kanta Tarui<br />
                和歌山生まれ。佛教大学卒業。小中高生向けの個別指導塾で半年の研修をした後に、新規事業として初の完全オンライン型の学習塾の教室責任者を約1年間担当。<br />その後にエンジニアとして働きたい思いから、１年間、スクールにてWEB制作のカリキュラムを学んだ後に、現在のPIXEL
                HEARTSに就職。
              </p>
            </div>
            <div class="introduction-image">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/my-profile.jpeg" alt="" />
            </div>
          </div>
        </div>
      </section>
      <section class="section works" id="works">
        <div class="contents-wrap">
          <h2 class="title">WORKS</h2>
          <div class="content">
            <ul class="work-list">
              <?php
                  $wp_query = get_subloop(4);
                  if ($wp_query->have_posts()):
                  while($wp_query->have_posts()): $wp_query->the_post();
                ?>
              <li class="work-item">
                <div class="fade-wrap">
                  <a href="<?php the_permalink();?>" class="text">
                  <p>
                    <?php the_title();?>
                  </p>
                </a>
                </div>
                  <?php
                    if (has_post_thumbnail()):
                      the_post_thumbnail();
                      else:?>
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/l_e_others_501.png"/>
                  <?php endif; ?>
              </li>
                <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </section>
      <section class="section contact">
        <div class="contents-wrap">
          <h2 class="title">CONTACT</h2>
          <p class="description">お問合せの際は下記のページよりお願いします</p>
          <div class="button-wrap">
            <button class="button"><a href="<?php echo home_url('/contact_form/'); ?>" class="text">CONTACT PAGE</a></button>
          </div>
          <div class="sns-wrap">
            <a href="https://twitter.com/?lang=ja" class="twitter"></a>
            <a href="https://www.instagram.com/" class="instagram"></a>
          </div>
        </div>
      </section>
    </div>
    <?php get_footer();?>
