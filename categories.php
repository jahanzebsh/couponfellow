<?php include 'header.php'; ?>
<style>
.category-index,.category-index .main {
    display: flex;
    flex-direction: column
}

.category-index .main .section {
    width: 100%
}

.category-index .main .section:nth-of-type(2n) {
    background-color: #fff
}

.category-index .main .section:last-of-type {
    border-bottom: 1px solid #bcc6d7
}

.category-index .main .section-content {
    margin: 0 auto;
    max-width: 75rem;
    padding: 1.5rem .5rem
}

@media (min-width: 768px) {
    .category-index .main .section-content {
        padding:2rem 1.25rem
    }
}

.additional-categories .section-heading {
    font-size: 1.125rem;
    line-height: 1.33;
    margin-bottom: 1.25rem
}

@media (min-width: 768px) {
    .additional-categories .section-heading {
        font-size:1.625rem;
        line-height: 1.23
    }
}

.additional-categories .categories {
    display: grid;
    gap: 1.25rem .75rem;
    grid-template-columns: 1fr;
    list-style: none
}

@media (min-width: 576px) {
    .additional-categories .categories {
        grid-template-columns:repeat(2,1fr)
    }
}

@media (min-width: 768px) {
    .additional-categories .categories {
        grid-template-columns:repeat(3,1fr)
    }
}

@media (min-width: 992px) {
    .additional-categories .categories {
        grid-template-columns:repeat(4,1fr)
    }
}

.additional-categories .categories .link {
    display: inline-block;
    font-family: Poppins,sans-serif;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: .75rem;
    text-decoration: none
}

@media (min-width: 768px) {
    .additional-categories .categories .link {
        font-size:1.125rem;
        line-height: 1.56
    }
}

.additional-categories .subcategories {
    margin-left: 1.25rem
}

.additional-categories .subcategories .link {
    font-family: Open Sans,sans-serif;
    font-size: 1rem;
    line-height: 1.25
}
.common-heading {
    background-color: #fff;
    border-bottom: 1px solid #bcc6d7
}

.common-heading .common-heading-content {
    margin: 0 auto;
    max-width: 75rem;
    padding: 1rem .5rem
}

@media (min-width: 768px) {
    .common-heading .common-heading-content {
        padding:1.5rem 1.25rem
    }
}

.common-heading .heading-description {
    max-width: 42.5rem
}

h1 {
    font-size: 1.25rem;
    font-weight: 600;
    line-height: 1.4
}

@media (min-width: 768px) {
    h1 {
        font-size:2.25rem;
        line-height: 1.17
    }
}

h2 {
    font-size: 1.125rem;
    font-weight: 600;
    line-height: 1.33
}

@media (min-width: 768px) {
    h2 {
        font-size:1.625rem;
        line-height: 1.23
    }
}

h3 {
    font-size: 1rem;
    line-height: 1.5
}

@media (min-width: 768px) {
    h3 {
        font-size:1.125rem;
        line-height: 1.56
    }
}

h4 {
    font-size: .875rem;
    line-height: 1.71
}

@media (min-width: 768px) {
    h4 {
        font-size:1rem;
        line-height: 1.5
    }
}

h5 {
    font-size: .75rem;
    line-height: 1.5
}

@media (min-width: 768px) {
    h5 {
        font-size:.875rem;
        line-height: 1.29
    }
}

p {
    font-size: 1rem;
    line-height: 1.5
}

img {
    block-size: auto;
    max-inline-size: 100%
}

b,strong {
    font-weight: 600
}

:focus-visible {
    outline-color: #1d3266
}

.screen-reader {
    clip: rect(0,0,0,0);
    border-width: 0;
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 1px
}

.section-heading {
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.5
}

@media (min-width: 768px) {
    .section-heading {
        font-size:1.125rem;
        line-height: 1.56
    }
}

.link-card {
    align-items: center;
    background-color: #fff;
    border: 2px solid transparent;
    border-radius: 4px;
    color: #333;
    display: inline-flex;
    font-family: Poppins,sans-serif;
    font-size: .875rem;
    font-weight: 500;
    height: 3.75rem;
    line-height: 1.71;
    padding: 0 .5rem;
    width: 100%
}

@media (min-width: 768px) {
    .link-card {
        font-size:1rem;
        line-height: 1.5
    }
}

.link-card.with-img {
    padding-left: 0
}

@media (hover: hover) and (pointer:fine) {
    .link-card:hover {
        color:#3258b3
    }
}

.link-card:focus-visible {
    background-color: #1d3266;
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    outline: 2px solid #1d3266
}

.link-card .card-img {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    height: 3.55rem;
    margin-right: .75rem;
    width: 3.55rem
}

.link-card.size-medium {
    border: none;
    border-radius: 10px;
    height: 6.25rem
}

.link-card.size-medium .card-img {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    height: 6.25rem;
    width: 6.25rem
}

.link-card .card-text {
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    overflow: hidden;
    text-overflow: ellipsis;
    word-break: break-word
}

.link-card.text-center .card-text {
    text-align: center;
    width: 100%
}

.link-card-list .link-card-list-header {
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 1.25rem
}

@media (min-width: 768px) {
    .link-card-list .link-card-list-header {
        font-size:1.125rem
    }
}

.link-card-list.size-medium .link-card-list-header {
    font-size: 1.125rem;
    line-height: 1.33
}

@media (min-width: 768px) {
    .link-card-list.size-medium .link-card-list-header {
        font-size:1.625rem;
        line-height: 1.23
    }
}

.link-card-list .link-cards {
    display: grid;
    gap: .5rem .75rem;
    grid-template-columns: 1fr
}

@media (min-width: 576px) {
    .link-card-list .link-cards {
        grid-template-columns:repeat(2,1fr)
    }
}

@media (min-width: 768px) {
    .link-card-list .link-cards {
        grid-template-columns:repeat(3,1fr)
    }
}

@media (min-width: 992px) {
    .link-card-list .link-cards {
        grid-template-columns:repeat(4,1fr)
    }
}


</style>
<div class="category-index">
        <section class="common-heading"><div class="common-heading-content"><h1 class="heading-title">couponfellow Store Categories</h1><p class="heading-description">Below you can find an extensive list of coupons, promo codes, and discounts for over a hundred different shopping categories including health &amp; beauty, petcare, electronics, and much more! Each link below will take you to a page of hand-tested coupons for whatever shopping category you need. Browse through the lists below to discover new promos, discounts, and other ways to save!</p></div></section>
        <main class="main">
            <section class="section">
                <div class="section-content">
                    <section class="link-card-list size-medium"><h2 class="link-card-list-header">Explore top categories</h2><div class="link-cards"><a href="/category/arts-entertainment" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/arts-entertainment.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/arts-entertainment.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/arts-entertainment.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/arts-entertainment.png?width=300&amp;height=300 3x"><span class="card-text">Arts &amp; Entertainment</span></a><a href="/category/business" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/business.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/business.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/business.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/business.png?width=300&amp;height=300 3x"><span class="card-text">Business</span></a><a href="/category/clothing-accessories" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/clothing-accessories.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/clothing-accessories.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/clothing-accessories.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/clothing-accessories.png?width=300&amp;height=300 3x"><span class="card-text">Clothing &amp; Accessories</span></a><a href="/category/food-gifts" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/food-gifts.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/food-gifts.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/food-gifts.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/food-gifts.png?width=300&amp;height=300 3x"><span class="card-text">Food &amp; Gifts</span></a><a href="/category/health-beauty" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/health-beauty.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/health-beauty.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/health-beauty.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/health-beauty.png?width=300&amp;height=300 3x"><span class="card-text">Health &amp; Beauty</span></a><a href="/category/home-garden" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/home-garden.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/home-garden.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/home-garden.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/home-garden.png?width=300&amp;height=300 3x"><span class="card-text">Home &amp; Garden</span></a><a href="/category/life-family" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/life-family.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/life-family.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/life-family.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/life-family.png?width=300&amp;height=300 3x"><span class="card-text">Life &amp; Family</span></a><a href="/category/sports-fitness" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/sports-fitness.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/sports-fitness.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/sports-fitness.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/sports-fitness.png?width=300&amp;height=300 3x"><span class="card-text">Sports &amp; Fitness</span></a><a href="/category/tech-electronics" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/tech-electronics.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/tech-electronics.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/tech-electronics.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/tech-electronics.png?width=300&amp;height=300 3x"><span class="card-text">Tech &amp; Electronics</span></a><a href="/category/travel" class="link-card with-img text-center size-medium"><img class="card-img" src="//static.couponfollow.com/_cf/img/category/travel.png?width=100&amp;height=100" alt="" width="57" height="57" srcset="//static.couponfollow.com/_cf/img/category/travel.png?width=100&amp;height=100 1x, //static.couponfollow.com/_cf/img/category/travel.png?width=200&amp;height=200 2x, //static.couponfollow.com/_cf/img/category/travel.png?width=300&amp;height=300 3x"><span class="card-text">Travel</span></a></div></section>
                </div>
            </section>
            <section class="section">
                <div class="section-content">
                    <section class="additional-categories"><h2 class="section-heading">Discover additional categories</h2><ul class="categories"><li><a class="link" href="/category/arts-entertainment">Arts &amp; Entertainment</a><ul class="subcategories"><li><a class="link" href="/category/arts-entertainment/books-magazines">Books &amp; Magazines</a></li><li><a class="link" href="/category/arts-entertainment/collectibles">Collectibles</a></li><li><a class="link" href="/category/arts-entertainment/crafts-hobbies">Crafts &amp; Hobbies</a></li><li><a class="link" href="/category/arts-entertainment/dvds-movies">DVDs &amp; Movies</a></li><li><a class="link" href="/category/arts-entertainment/general-entertainment">General Entertainment</a></li><li><a class="link" href="/category/arts-entertainment/movie-events-tickets">Movie &amp; Events Tickets</a></li><li><a class="link" href="/category/arts-entertainment/music">Music</a></li><li><a class="link" href="/category/arts-entertainment/musical-instruments">Musical Instruments</a></li><li><a class="link" href="/category/arts-entertainment/things-to-do">Things To Do</a></li></ul></li><li><a class="link" href="/category/business">Business</a><ul class="subcategories"><li><a class="link" href="/category/business/business-services">Business Services</a></li><li><a class="link" href="/category/business/career-services">Career Services</a></li><li><a class="link" href="/category/business/financial-services">Financial Services</a></li><li><a class="link" href="/category/business/general-business">General Business</a></li><li><a class="link" href="/category/business/office-supplies">Office Supplies</a></li><li><a class="link" href="/category/business/tax-services">Tax Services</a></li></ul></li><li><a class="link" href="/category/clothing-accessories">Clothing &amp; Accessories</a><ul class="subcategories"><li><a class="link" href="/category/clothing-accessories/accessories">Accessories</a></li><li><a class="link" href="/category/clothing-accessories/children-s-clothing">Children's Clothing</a></li><li><a class="link" href="/category/clothing-accessories/costumes">Costumes</a></li><li><a class="link" href="/category/clothing-accessories/handbags">Handbags</a></li><li><a class="link" href="/category/clothing-accessories/jewelry-watches">Jewelry &amp; Watches</a></li><li><a class="link" href="/category/clothing-accessories/men-s-clothing">Men's Clothing</a></li><li><a class="link" href="/category/clothing-accessories/plus-size">Plus Size</a></li><li><a class="link" href="/category/clothing-accessories/shoes">Shoes</a></li><li><a class="link" href="/category/clothing-accessories/sleepwear-intimates">Sleepwear &amp; Intimates</a></li><li><a class="link" href="/category/clothing-accessories/uniforms">Uniforms</a></li><li><a class="link" href="/category/clothing-accessories/women-s-clothing">Women's Clothing</a></li></ul></li><li><a class="link" href="/category/food-gifts">Food &amp; Gifts</a><ul class="subcategories"><li><a class="link" href="/category/food-gifts/baked-goods-candy">Baked Goods &amp; Candy</a></li><li><a class="link" href="/category/food-gifts/coffee-tea">Coffee &amp; Tea</a></li><li><a class="link" href="/category/food-gifts/cooking-grocery">Cooking &amp; Grocery</a></li><li><a class="link" href="/category/food-gifts/food-delivery">Food Delivery</a></li><li><a class="link" href="/category/food-gifts/general-foods-gifts">General Foods &amp; Gifts</a></li><li><a class="link" href="/category/food-gifts/gift-baskets">Gift Baskets</a></li><li><a class="link" href="/category/food-gifts/gift-cards">Gift Cards</a></li><li><a class="link" href="/category/food-gifts/personalized-gifts">Personalized Gifts</a></li><li><a class="link" href="/category/food-gifts/restaurants">Restaurants</a></li><li><a class="link" href="/category/food-gifts/wine">Wine</a></li></ul></li><li><a class="link" href="/category/health-beauty">Health &amp; Beauty</a><ul class="subcategories"><li><a class="link" href="/category/health-beauty/beauty-cosmetics">Beauty &amp; Cosmetics</a></li><li><a class="link" href="/category/health-beauty/general-health">General Health</a></li><li><a class="link" href="/category/health-beauty/medical-supplies">Medical Supplies</a></li><li><a class="link" href="/category/health-beauty/personal-health">Personal Health</a></li><li><a class="link" href="/category/health-beauty/sexual-wellness">Sexual Wellness</a></li><li><a class="link" href="/category/health-beauty/vision-dental-care">Vision &amp; Dental Care</a></li></ul></li><li><a class="link" href="/category/home-garden">Home &amp; Garden</a><ul class="subcategories"><li><a class="link" href="/category/home-garden/bed-bath">Bed &amp; Bath</a></li><li><a class="link" href="/category/home-garden/home-appliances">Home Appliances</a></li><li><a class="link" href="/category/home-garden/home-decor">Home Decor</a></li><li><a class="link" href="/category/home-garden/home-improvement-tools">Home Improvement &amp; Tools</a></li><li><a class="link" href="/category/home-garden/outdoor-patio">Outdoor &amp; Patio</a></li></ul></li><li><a class="link" href="/category/life-family">Life &amp; Family</a><ul class="subcategories"><li><a class="link" href="/category/life-family/automotive">Automotive</a></li><li><a class="link" href="/category/life-family/babies-kids">Babies &amp; Kids</a></li><li><a class="link" href="/category/life-family/department-stores">Department Stores</a></li><li><a class="link" href="/category/life-family/education">Education</a></li><li><a class="link" href="/category/life-family/general-home-family">General Home / Family</a></li><li><a class="link" href="/category/life-family/megastores">Megastores</a></li><li><a class="link" href="/category/life-family/party-supplies">Party Supplies</a></li><li><a class="link" href="/category/life-family/personal-services">Personal Services</a></li><li><a class="link" href="/category/life-family/pets">Pets</a></li></ul></li><li><a class="link" href="/category/other">Other</a><ul class="subcategories"><li><a class="link" href="/category/other/daily-deals">Daily Deals</a></li><li><a class="link" href="/category/other/ecigs-cigars">eCigs &amp; Cigars</a></li><li><a class="link" href="/category/other/general">General</a></li><li><a class="link" href="/category/other/non-english-site">Non English Site</a></li><li><a class="link" href="/category/other/seasonal">Seasonal</a></li></ul></li><li><a class="link" href="/category/sports-fitness">Sports &amp; Fitness</a><ul class="subcategories"><li><a class="link" href="/category/sports-fitness/exercise-equipment">Exercise Equipment</a></li><li><a class="link" href="/category/sports-fitness/fitness-services">Fitness Services</a></li><li><a class="link" href="/category/sports-fitness/general-sports-fitness">General Sports / Fitness</a></li><li><a class="link" href="/category/sports-fitness/outdoor">Outdoor</a></li><li><a class="link" href="/category/sports-fitness/sports-apparel">Sports Apparel</a></li><li><a class="link" href="/category/sports-fitness/sports-equipment">Sports Equipment</a></li></ul></li><li><a class="link" href="/category/tech-electronics">Tech &amp; Electronics</a><ul class="subcategories"><li><a class="link" href="/category/tech-electronics/cell-phones">Cell Phones</a></li><li><a class="link" href="/category/tech-electronics/computers-accessories">Computers &amp; Accessories</a></li><li><a class="link" href="/category/tech-electronics/consumer-electronics">Consumer Electronics</a></li><li><a class="link" href="/category/tech-electronics/general-tech">General Tech</a></li><li><a class="link" href="/category/tech-electronics/software">Software</a></li><li><a class="link" href="/category/tech-electronics/tv-internet-providers">TV/Internet Providers</a></li><li><a class="link" href="/category/tech-electronics/video-games">Video Games</a></li><li><a class="link" href="/category/tech-electronics/web-design-hosting">Web Design &amp; Hosting</a></li></ul></li><li><a class="link" href="/category/travel">Travel</a><ul class="subcategories"><li><a class="link" href="/category/travel/air">Air</a></li><li><a class="link" href="/category/travel/car-rental">Car Rental</a></li><li><a class="link" href="/category/travel/cruises">Cruises</a></li><li><a class="link" href="/category/travel/general-travel">General Travel</a></li><li><a class="link" href="/category/travel/hotels">Hotels</a></li><li><a class="link" href="/category/travel/luggage-supplies">Luggage &amp; Supplies</a></li><li><a class="link" href="/category/travel/theme-parks">Theme Parks</a></li><li><a class="link" href="/category/travel/vacation-packages">Vacation &amp; Packages</a></li></ul></li></ul></section>
                </div>
            </section>
        </main>
        <div class="footer-breadcrumbs"><ul class="breadcrumb"><li class="segment"><a class="link" href="/" id="home">Home</a></li><li class="segment">Categories</li></ul></div>
    </div>
    <?php include 'footer.php'; ?>
