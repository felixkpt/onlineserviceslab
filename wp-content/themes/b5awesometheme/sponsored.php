<div id="sponsored" class="row">
    <div class="col-12">
        <hr class="pt-1">
        <h3>Sponsored Articles</h3>
    </div>
    <div class="col-12">
        <?php
        $sponsored = [
            [
                'title' => 'Review of State Farm Car Insurance in 2022',
                'content' => 'It\'s critical to inquire about vehicle insurance savings while looking for coverage',
                'image' => 'https://legalpremiums.com/public/uploads/2022/06/BIxmwvREREJeTEaIap0U8aV0M5c3guWdCUIdqThi.png',
                'link' => 'https://legalpremiums.com/companies/state-farm-car-insurance'
            ],
            [
                'title' => 'Kanye West makes a surprise appearance',
                'content' => 'The creator of SKIMS has moved on with former Saturday Night Live comic Pete Davidson',
                'image' => 'https://celebritiesnation.com/public/uploads/2022/06/E42NFT0jMM8VIK5ykS95LYmvs2Q1AwobXfJUwufE.jpg',
                'link' => 'https://celebritiesnation.com/posts/kanye-west-makes-a-surprise-appearance-at-the-bet-awards-and-mentions-the-kim-kardashian-divorce'
            ],
            [
                'title' => 'MassMutual Life Insurance',
                'content' => 'MassMutual is situated in Springfield, Massachusetts, and was founded in 1851',
                'image' => 'https://legalpremiums.com/public/uploads/2022/06/qtLeS1jgH07fWTIQT3YDi0ldvTlLNeDAUlYMOhuw.jpg',
                'link' => 'https://legalpremiums.com/companies/massmutual-life-insurance'
            ],
            [
                'title' => 'Keir Starmer’s injunction',
                'content' => 'Keir Starmer’s injunction not to join train employees on the picket line is defied by two Labour frontbenchers',
                'image' => 'http://www.infosourcehub.com/wp-content/uploads/2022/06/GFHBNPOIHGFTH32KL.jpg?v=sessd',
                'link' => 'http://www.infosourcehub.com/keir-starmers-injunction-not-to-join-train-employees-on-the-picket-line-is-defied-by-two-labour-frontbenchers/'
            ],

        ]
        ?>
        <div class="d-flex gap-2 overflow-auto">
            <?php foreach ($sponsored as $item) : ?>
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 shadow p-1">
                    <div class="row">
                        <div class="col-7">
                            <a class="link-primary" href="<?php echo $item['link'] ?>" target="_blank">
                                <h5>
                                    <?php echo $item['title'] ?>
                                </h5>
                                <p>
                                    <?php echo $item['content'] ?>
                                </p>
                            </a>
                        </div>
                        <div class="col-5">
                            <a class="link-primary" href="<?php echo $item['link'] ?>" target="_blank">
                                <div class="image-wrapper-sm">
                                    <img src="<?php echo $item['image'] ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>