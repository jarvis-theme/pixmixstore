<!-- Section Five Starts-->
<section class="section-five newsletter">
    <div class="container">
        <div class="title-wrap">
            <h2 class="section-title text-center pt-10">get the latest from Femme Outfit</h2>
            <p class="sub-title">Sign up for our Newsletter !</p>
        </div>
        <form action="{{ @$mailing->action }}" method="post" id="mc-embedded-subscribe-form subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="newsletter-form">
            <div class="form-group col-sm-12 form-alert"></div>
            <div class="form-group">
                <div class="mail-info" style="margin: 30px auto 20px;position: relative;width: 49%;">
                    <input type="email" value="" class="form-control text" placeholder="Enter your email address" name="EMAIL" id="mail" aria-label="email@example.com" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }} >
                    <button id="subscribe" class="btn small-btn btn-black subscribe-btn"  type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }} >Subscribe</button>
                </div>
            </div>                                       
        </form>                        
    </div>
</section>
<!-- / Section Five Ends -->  