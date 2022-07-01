<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

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
                'image' => 'https://infosourcehub.com/wp-content/uploads/2022/06/GFHBNPOIHGFTH32KL.jpg?v=sessd',
                'link' => 'https://infosourcehub.com/keir-starmers-injunction-not-to-join-train-employees-on-the-picket-line-is-defied-by-two-labour-frontbenchers/'
            ],

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
                'image' => 'https://infosourcehub.com/wp-content/uploads/2022/06/GFHBNPOIHGFTH32KL.jpg?v=sessd',
                'link' => 'https://infosourcehub.com/keir-starmers-injunction-not-to-join-train-employees-on-the-picket-line-is-defied-by-two-labour-frontbenchers/'
            ],

        ];
        ?>
        <img src="<?php echo $item['image'] ?>" alt="">
        <div id="sponsored-content" class="carousel-slide-wrapper" data-carousel-item-width="400">
            <div class="carousel-slide">
                <div class="carousel-slide-content">
                    <?php foreach ($sponsored as $item) : ?>
                        <div class="carousel-slide-item shadow p-1">
                            <div class="row">
                                <div class="col-6">
                                    <a class="link-primary" href="<?php echo $item['link'] ?>" target="_blank">
                                        <h5>
                                            <?php echo $item['title'] ?>
                                        </h5>
                                        <p>
                                            <?php echo $item['content'] ?>
                                        </p>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="link-primary d-block" href="<?php echo $item['link'] ?>" target="_blank">
                                        <div class="col-sm-9 col-12 mx-auto">
                                            <?php
                                            $image = 'http://localhost/infosourcehub/wp-content/uploads/2022/06/jskhfiuejknf3dd.jpg';
                                            ?>
                                            <img width="100%" height="auto" src="<?php echo $image ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="carousel-slide-nav-prev">
                <button class="carousel-slide-prev"><i class="fa fa-chevron-left"></i></button>
            </div>
            <div class="carousel-slide-nav-next">
                <button class="carousel-slide-next"><i class="fa fa-chevron-right"></i></button>
            </div>

        </div>
    </div>
</div>
<script>
    const target = "#sponsored-content"
    carousel(target)
</script>