
<footer class="default-footer">
    <script>
        document.addEventListener('DOMContentLoaded', function(){

var slideImages = document.querySelectorAll('.slide'),
    dirRight = document.getElementById('dir-control-right'),
    dirLeft = document.getElementById('dir-control-left'),
    current = 0;
//if javascript is on apply styling
function jsActive(){
    for(var i = 0; i < slideImages.length; i++){
        slideImages[i].classList.add('slider-active');
    }  
}
// Clear images
function reset(){
    for(var i = 0; i < slideImages.length; i++){
        slideImages[i].classList.remove('slide-is-active');
    }
}
//init slider
function startSlide(){
    reset();
    slideImages[0].classList.add('slide-is-active');
    setTimeout(function() {
        for(var i = 0; i < slideImages.length; i++){
            slideImages[i].classList.add('slide-transition');
        }
    }, 20);
        

}

//slide lft
function slideLeft(){
    reset();
    slideImages[current - 1].classList.add('slide-is-active');
    current--;
}
//slide right
function slideRight(){
    reset();
    slideImages[current + 1].classList.add('slide-is-active');
    current++;
}

dirLeft.addEventListener('click', function(){
    if(current === 0){
        current = slideImages.length;
    }
    slideLeft();
})

dirRight.addEventListener('click', function(){
    if(current === slideImages.length-1){
        current = -1;
    }
    slideRight();
})
//apply styling
jsActive();
startSlide();


});
        </script>
    <section class="content">
        <section class="logo">
            <img class="couponfollow-logo" src="http://localhost/CouponFellow/assets/img/logo.png" alt="Coupon Follow" width="333" height="44" loading="lazy" decoding="async">
            
<!-- <div class="region-select">
    <div class="change-country">
        Change country:
        <button class="flag selected-region us" data-func="openRegionDropdown" data-selected-region=""></button>
    </div>
    <ul class="switch-region dropdown" data-switch-region-dropdown="">
            <li key="US">
                <a class="dropdown-item" href="/" data-func="changeRegion">
                    <span class="flag us"></span>
                    <p class="region-code">US Coupons</p>
                </a>
            </li>
            <li key="UK">
                <a class="dropdown-item" href="/uk" data-func="changeRegion">
                    <span class="flag uk"></span>
                    <p class="region-code">UK Coupons</p>
                </a>
            </li>
            <li key="CA">
                <a class="dropdown-item" href="/ca" data-func="changeRegion">
                    <span class="flag ca"></span>
                    <p class="region-code">CA Coupons</p>
                </a>
            </li>
            <li key="AU">
                <a class="dropdown-item" href="/au" data-func="changeRegion">
                    <span class="flag au"></span>
                    <p class="region-code">AU Coupons</p>
                </a>
            </li>
    </ul>
</div> -->
        </section>
        <section id="siteFooter" class="footer-links active">
            <span class="footer-links-header" data-func="collapse" data-elem="#siteFooter">
                Site Links
                <span class="icon-arrow up light"></span>
                <span class="icon-arrow down light"></span>
            </span>
            <ul class="list">
                    <li class="list-item">
                        <a class="item" href="/about">
                            
About us

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/docs/privacy-policy">
                            
Privacy Policy

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/ccpa">
                            
CCPA Privacy Notice

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/docs/terms-of-use">
                            
Terms of Use

                        </a>
                    </li>
                    <!-- <li class="list-item">
                        <a class="item" href="/accessibility">
                            
Accessibility

                        </a>
                    </li> -->
                    <li class="list-item">
                        <a class="item" href="/category">
                            
Categories

                        </a>
                    </li>
            </ul>
        </section>
        <section id="infoFooter" class="footer-links">
            <span class="footer-links-header" data-func="collapse" data-elem="#infoFooter">
                Info &amp; Tools
                <span class="icon-arrow up light"></span>
                <span class="icon-arrow down light"></span>
            </span>
            <ul class="list">
                    <li class="list-item">
                        <a class="item" href="/research">
                            
Research &amp; Data

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/student-discounts">
                            
Student Discount Hub

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/mediakit">
                            
Press &amp; Media Kit

                        </a>
                    </li>
                    <!-- <li class="list-item">
                        <a class="item" href="/checkout">
                            
Cently

                        </a>
                    </li> -->
                    <li class="list-item">
                        <a class="item" href="/smilematic">
                            
Smilematic

                        </a>
                    </li>
                    <li class="list-item">
                        <a class="item" href="/editorial">
                            
Editorial Guidelines

                        </a>
                    </li>
            </ul>
        </section>
        <section id="contactFooter" class="footer-links">
            <span class="footer-links-header" data-func="collapse" data-elem="#contactFooter">
                Get in Touch
                <span class="icon-arrow up light"></span>
                <span class="icon-arrow down light"></span>
            </span>
            <ul class="list">
                <!-- <li class="list-item">
                    <a target="_self" class="item" href="https://support.couponfollow.com">
                        
Support &amp; Feedback

                    </a>
                </li> -->
                <li class="list-item">
                    <a target="_self" class="item" href="https://x.com/couponfollow">
                        
X

                    </a>
                </li>
                <li class="list-item">
                    <a target="_self" class="item" href="https://facebook.com/couponfollow">
                        
Facebook

                    </a>
                </li>
                <li class="list-item">
                    <a target="_blank" class="item" href="https://support.couponfollow.com/article/109-how-do-i-give-feedback-or-make-suggestions">
                        
Contact Us

                    </a>
                </li>
            </ul>
        </section>
        <section class="info">
            <span class="info-header">About</span>
            <p class="info-content">
                CouponFollow tracks coupon codes from online merchants to help consumers
                save money. We may earn a commission when you use one of our coupons/links to
                make a purchase. You should check any coupon or promo code of interest on the
                merchant website to ensure validity before making a purchase.
            </p>
            <!-- <div class="tools">
                <div class="footer-links">
                    <a class="item" href="javascript:void(0);" rel="nofollow" role="button" data-acsb-custom-trigger="true">Open Accessibility Tools</a>
                    <button type="button" class="item ch2-open-settings-btn btn btn-link hidden">Open Cookie Settings</button>
                </div>
            </div> -->
        </section>
    </section>
    <p class="copyright">Copyright © 2024 CouponFellow</p>
</footer>

    


</body></html>