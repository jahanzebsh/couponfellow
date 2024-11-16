<?php include 'header.php'; ?>
<style>
.page-title {
                background-color: #eef3fb
            }

            .page-title .title {
                color: #2d3e50;
                font-size: 36px;
                font-weight: 700;
                letter-spacing: -.5px;
                line-height: 42px;
                padding: 45px 0;
                text-align: center
            }

            @media (max-width: 991px) {
                .page-title .title {
                    color:#2d3e50;
                    font-size: 22px;
                    font-weight: 700;
                    letter-spacing: -1px;
                    line-height: 28px;
                    padding: 35px 0
                }
            }

            .merchant-tile {
                box-sizing: content-box;
                height: 200px;
                width: 175px
            }

            @media (max-width: 767px) {
                .merchant-tile {
                    height:185px;
                    width: 160px
                }
            }

            .merchant-tile .click {
                background-color: #fff;
                border: 1px solid #e8eef7;
                border-radius: 4px;
                display: block;
                height: 100%;
                outline: none;
                padding: 35px;
                text-align: center;
                width: 100%
            }

            .merchant-tile .click:focus-visible {
                outline: 1px solid #2bc9c9;
                outline-offset: -2px
            }

            @media (max-width: 767px) {
                .merchant-tile .click {
                    padding:25px
                }
            }

            .merchant-tile .logo {
                height: 100px;
                width: 100px
            }

            .merchant-tile .merchant {
                color:  #3fa9a9;
                display: block;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: -.3px;
                line-height: 24px;
                margin-top: 15px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            @media (max-width: 767px) {
                .merchant-tile .merchant {
                    color: #3fa9a9;
                    font-size: 12px;
                    font-weight: 600;
                    letter-spacing: -.3px;
                    line-height: 22px
                }
            }

            .browse-stores {
                background-color: #fff
            }

            .browse-stores .stores-list {
                -moz-columns: 3;
                column-count: 3;
                -moz-column-gap: 35px;
                column-gap: 35px;
                padding: 15px 0
            }

            @media (max-width: 1599px) {
                .browse-stores .stores-list {
                    padding-left:25px
                }
            }

            @media (max-width: 1199px) {
                .browse-stores .stores-list {
                    -moz-columns:2;
                    column-count: 2
                }
            }

            @media (max-width: 767px) {
                .browse-stores .stores-list {
                    -moz-columns:1;
                    column-count: 1
                }
            }

            .browse-stores .stores-list .stores-item {
                color:  #3fa9a9;
                display: inline-block;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: -.34px;
                line-height: 24px;
                margin-bottom: 15px;
                width: 100%;
                word-wrap: break-word
            }

            .browse-stores .stores-list .stores-item .store-link:focus,.browse-stores .stores-list .stores-item .store-link:hover {
                color: #009be1
            }

            .browse-stores .stores-list .stores-item .store-link:focus-visible {
                outline: 1px solid #009be1
            }

            .browse-stores.popular {
                background-color: inherit
            }

            .browse-stores.popular .content {
                padding: 0
            }

            .browse-stores.popular .stores-list {
                background-image: repeating-linear-gradient(0deg,rgba(0,0,0,.2),rgba(0,0,0,.2) 6px,transparent 0,transparent 10px,rgba(0,0,0,.2) 0),repeating-linear-gradient(90deg,rgba(0,0,0,.2),rgba(0,0,0,.2) 6px,transparent 0,transparent 10px,rgba(0,0,0,.2) 0),repeating-linear-gradient(180deg,rgba(0,0,0,.2),rgba(0,0,0,.2) 6px,transparent 0,transparent 10px,rgba(0,0,0,.2) 0),repeating-linear-gradient(270deg,rgba(0,0,0,.2),rgba(0,0,0,.2) 6px,transparent 0,transparent 10px,rgba(0,0,0,.2) 0);
                background-position: 0 0,0 0,100% 0,0 100%;
                background-repeat: no-repeat;
                background-size: 1px 100%,100% 1px,1px 100%,100% 1px;
                border-radius: 5px;
                -moz-columns: 5;
                column-count: 5;
                padding: 25px 0
            }

            @media (max-width: 1199px) {
                .browse-stores.popular .stores-list {
                    -moz-columns:3;
                    column-count: 3
                }
            }

            @media (max-width: 767px) {
                .browse-stores.popular .stores-list {
                    -moz-columns:1;
                    column-count: 1
                }
            }

            .browse-stores.popular .stores-list .stores-item {
                margin: 5px 0 5px 45px
            }

            @media (max-width: 1199px) {
                .browse-stores.popular .stores-list .stores-item {
                    margin-left:45px
                }
            }

            @media (max-width: 767px) {
                .browse-stores.popular .stores-list .stores-item {
                    margin-left:0;
                    text-align: center
                }
            }
            .modal-overlay {
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 8000
            }

            @media (min-width: 768px) {
                .modal-overlay {
                    align-items:center;
                    background: rgba(0,0,0,.35);
                    display: flex;
                    justify-content: center
                }
            }

            .modal {
                align-content: space-between;
                background: #fff;
                bottom: 0;
                display: flex;
                flex-direction: column;
                left: 0;
                max-height: 100vh;
                overflow-y: auto;
                overscroll-behavior: contain;
                position: absolute;
                right: 0;
                top: 0
            }

            @media (min-width: 768px) {
                .modal {
                    bottom:auto;
                    flex: 1 1 auto;
                    left: auto;
                    right: auto;
                    top: auto
                }
            }

            @media (max-width: 992px) and (orientation:landscape) {
                .modal {
                    bottom:0;
                    left: 0;
                    right: 0;
                    top: 0
                }
            }

            .modal .close {
                background: none;
                border: none;
                height: 24px;
                margin: 0;
                padding: 0;
                position: fixed;
                right: 25px;
                top: 25px;
                width: 24px
            }

            .modal .close:focus-visible {
                outline: 1px solid #009be1
            }

            @media (min-width: 768px) {
                .modal .close {
                    position:absolute
                }
            }

            .modal .content {
                align-items: center;
                display: flex;
                flex: 1 1 100%;
                justify-content: center;
                padding: 25px
            }

            .modal.no-paddings .content {
                padding: 0
            }

            .modal .footer {
                align-items: center;
                background: #f9fafd;
                border: none;
                border-top: 1px solid #e8eef7;
                display: none;
                justify-content: center;
                min-height: 71px;
                width: 100%
            }

            .modal.with-footer .footer {
                display: flex
            }

            .browse-all-stores .merchant-tiles {
                box-sizing: content-box;
                margin: 0 auto 45px;
                max-width: 1200px;
                padding: 0 15px
            }

            .browse-all-stores .merchant-tiles .merchant-tile {
                margin: 0 15px 25px
            }

            @media (max-width: 767px) {
                .browse-all-stores .merchant-tiles .merchant-tile {
                    margin:0 5px 15px
                }
            }

            .browse-all-stores .merchant-tiles-wrapper {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin: 0 -15px
            }

            .browse-all-stores .big-cont {
                background-color: #fff;
                padding-top: 45px
            }

            .browse-all-stores .browse-content {
                margin: 0 auto;
                max-width: 1200px
            }

            .browse-all-stores .browse-content .title {
                box-sizing: content-box;
                color: #2d3e50;
                font-size: 42px;
                font-weight: 700;
                letter-spacing: -.5px;
                line-height: 46px;
                padding: 45px 0 15px
            }

            @media (max-width: 1599px) {
                .browse-all-stores .browse-content .title {
                    padding-bottom:0;
                    padding-left: 25px
                }
            }

            @media (max-width: 1199px) {
                .browse-all-stores .browse-content .title {
                    color:#2d3e50;
                    font-size: 36px;
                    font-weight: 700;
                    letter-spacing: -.5px;
                    line-height: 42px;
                    padding: 0 25px
                }
            }

            @media (max-width: 767px) {
                .browse-all-stores .browse-content .title {
                    font-size:22px
                }
            }

            .browse-all-stores .browse-content .view-more {
                margin: 0 auto;
                max-width: 1200px;
                padding: 45px 0
            }

            @media (max-width: 1599px) {
                .browse-all-stores .browse-content .view-more {
                    padding:45px 25px
                }
            }

            .browse-all-stores .browse-content .view-more .more-link {
                color: #2bc9c9;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 0;
                line-height: 16px;
                text-transform: uppercase
            }

            [data-func=goto] {
                cursor: pointer
            }
            .letters-filter {
                background-color: #fff;
                border-top: 1px solid #eef3fb
            }

            .letters-filter .title {
                display: none
            }

            @media (max-width: 768px) {
                .letters-filter .title {
                    color:#2d3e50;
                    display: block;
                    font-size: 18px;
                    font-weight: 700;
                    letter-spacing: -.3px;
                    line-height: 24px;
                    margin: 25px 25px 0
                }
            }

            .letters-filter .list-wrap {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                margin: auto;
                max-width: 1200px;
                padding-bottom: 0;
                padding-top: 15px
            }

            @media (max-width: 1599px) {
                .letters-filter .list-wrap {
                    padding-left:25px;
                    padding-right: 25px
                }
            }

            @media (max-width: 768px) {
                .letters-filter .list-wrap {
                    justify-content:space-between;
                    padding: 25px
                }
            }

            .letters-filter .letters-list {
                color: #2d3e50;
                display: flex;
                flex-direction: row;
                font-size: 18px;
                font-weight: 700;
                justify-content: space-around;
                letter-spacing: -.3px;
                line-height: 24px;
                margin-left: -25px;
                max-width: 1200px;
                width: 100%
            }

            @media (max-width: 768px) {
                .letters-filter .letters-list {
                    display:grid;
                    grid-template-columns: repeat(auto-fill,45px);
                    justify-content: space-between;
                    margin: 0 -15px
                }
            }

            @media (max-width: 576px) {
                .letters-filter .letters-list {
                    grid-template-columns:repeat(auto-fill,35px)
                }
            }

            .letters-filter .anchor {
                display: flex;
                justify-content: center;
                padding-bottom: 15px;
                width: 100%
            }

            @media (max-width: 768px) {
                .letters-filter .anchor {
                    padding-bottom:0
                }
            }

            .letters-filter .letter {
                display: flex;
                justify-content: center;
                width: 100%
            }

            @media (max-width: 768px) {
                .letters-filter .letter {
                    margin:5px;
                    min-width: 35px;
                    padding: 5px 0;
                    width: unset
                }
            }

            .letters-filter .letter.selected {
                border-bottom: 1px solid #2bc9c9;
                color: #2bc9c9;
                font-size: 18px;
                font-weight: 700;
                letter-spacing: -.3px;
                line-height: 24px
            }

            @media (max-width: 768px) {
                .letters-filter .letter.selected {
                    border-bottom:none
                }
            }

            .letters-filter .letter:hover {
                color: #2bc9c9;
                font-size: 18px;
                font-weight: 700;
                letter-spacing: -.3px;
                line-height: 24px
            }

</style>
<main class="browse-all-stores">
    

        <header class="page-title">
            <h1 class="title">All Stores</h1>
        </header>
        <section class="merchant-tiles">
            <div class="merchant-tiles-wrapper">
                    <div class="merchant-tile">
                        <a href="/site/ae.com" class="click" aria-label="American Eagle coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="American Eagle" class="logo">
                            <p class="merchant">American Eagle</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/chewy.com" class="click" aria-label="Chewy coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Chewy" class="logo">
                            <p class="merchant">Chewy</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/ebay.com" class="click" aria-label="eBay coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="eBay" class="logo">
                            <p class="merchant">eBay</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/macys.com" class="click" aria-label="Macy's coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Macy's" class="logo">
                            <p class="merchant">Macy's</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/michaelkors.com" class="click" aria-label="Michael Kors coupons page">
                            <img src="hhttp://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Michael Kors" class="logo">
                            <p class="merchant">Michael Kors</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/target.com" class="click" aria-label="Target coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.png" alt="Target" class="logo">
                            <p class="merchant">Target</p>
                        </a>
                    </div>
            </div>
        </section>
    
        <section class="merchant-tiles">
            <div class="merchant-tiles-wrapper">
                    <div class="merchant-tile">
                        <a href="/site/ae.com" class="click" aria-label="American Eagle coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="American Eagle" class="logo">
                            <p class="merchant">American Eagle</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/chewy.com" class="click" aria-label="Chewy coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Chewy" class="logo">
                            <p class="merchant">Chewy</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/ebay.com" class="click" aria-label="eBay coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="eBay" class="logo">
                            <p class="merchant">eBay</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/macys.com" class="click" aria-label="Macy's coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Macy's" class="logo">
                            <p class="merchant">Macy's</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/michaelkors.com" class="click" aria-label="Michael Kors coupons page">
                            <img src="hhttp://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Michael Kors" class="logo">
                            <p class="merchant">Michael Kors</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/target.com" class="click" aria-label="Target coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.png" alt="Target" class="logo">
                            <p class="merchant">Target</p>
                        </a>
                    </div>
            </div>
        </section>
    
        <section class="merchant-tiles">
            <div class="merchant-tiles-wrapper">
                    <div class="merchant-tile">
                        <a href="/site/ae.com" class="click" aria-label="American Eagle coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="American Eagle" class="logo">
                            <p class="merchant">American Eagle</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/chewy.com" class="click" aria-label="Chewy coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Chewy" class="logo">
                            <p class="merchant">Chewy</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/ebay.com" class="click" aria-label="eBay coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="eBay" class="logo">
                            <p class="merchant">eBay</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/macys.com" class="click" aria-label="Macy's coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Macy's" class="logo">
                            <p class="merchant">Macy's</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/michaelkors.com" class="click" aria-label="Michael Kors coupons page">
                            <img src="hhttp://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Michael Kors" class="logo">
                            <p class="merchant">Michael Kors</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/target.com" class="click" aria-label="Target coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.png" alt="Target" class="logo">
                            <p class="merchant">Target</p>
                        </a>
                    </div>
            </div>
        </section>
    
        <section class="merchant-tiles">
            <div class="merchant-tiles-wrapper">
                    <div class="merchant-tile">
                        <a href="/site/ae.com" class="click" aria-label="American Eagle coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="American Eagle" class="logo">
                            <p class="merchant">American Eagle</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/chewy.com" class="click" aria-label="Chewy coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Chewy" class="logo">
                            <p class="merchant">Chewy</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/ebay.com" class="click" aria-label="eBay coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="eBay" class="logo">
                            <p class="merchant">eBay</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/macys.com" class="click" aria-label="Macy's coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Macy's" class="logo">
                            <p class="merchant">Macy's</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/michaelkors.com" class="click" aria-label="Michael Kors coupons page">
                            <img src="hhttp://localhost/CouponFellow/assets/img/storelogo.jpeg" alt="Michael Kors" class="logo">
                            <p class="merchant">Michael Kors</p>
                        </a>
                    </div>
                    <div class="merchant-tile">
                        <a href="/site/target.com" class="click" aria-label="Target coupons page">
                            <img src="http://localhost/CouponFellow/assets/img/storelogo.png" alt="Target" class="logo">
                            <p class="merchant">Target</p>
                        </a>
                    </div>
            </div>
        </section>
    
  
</main>
<?php include 'footer.php'; ?>
