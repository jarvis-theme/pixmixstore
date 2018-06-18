<section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Contact us</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->
<div class="panel-map">
    <div class="container">
    <div class="panel-map-size"></div>
    </div>
    @if($kontak->lat!='0' || $kontak->lat!='0')
        <iframe class="maplocation" width="1170" height="470" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;oq={{ $kontak->alamat }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed" allowfullscreen></iframe><br />
    @else
        <iframe class="maplocation" width="1170"  height="470" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq={{ $kontak->alamat }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" allowfullscreen></iframe><br />
    @endif
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1187.653663851252!2d-0.17532816080641583!3d51.51496985724751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876054d4945d8f7%3A0x847dc2a3dee34061!2s64+Spring+St%2C+London%2C+UK!5e0!3m2!1sen!2s!4v1477197488149" allowfullscreen></iframe> --}}
</div><!--/.panel-map-->
<div class="panel-contact">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
        <h2 class="panel-contact-heading">Store Information</h2>
        <div class="panel-contact-list panel-contact-list2">
            <div class="row">
                <div class="col-xs-12" data-mh="contact">
                    <article class="panel-contact-item">
                        <h3 class="panel-contact-title">{{$kontak->nama}}</h3>
                        <p class="panel-contact-info"><span class="panel-contact-label"></span>{{ ucwords($kontak->alamat) }}</p>
                        <p class="panel-contact-info"><span class="panel-contact-label">Telpon : </span>{{ !empty($kontak->telepon) ? $kontak->telepon : '-' }}</p>
                        <p class="panel-contact-info"><span class="panel-contact-label">Mobile : </span>{{ !empty($kontak->hp) ? $kontak->hp : '-' }}</p>
                        <p class="panel-contact-info"><span class="panel-contact-label">Email : </span>{{ ucwords($kontak->email) }}</p>
                    </article>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="panel-contact-form">
            <h2 class="panel-contact-heading">Send our a message</h2>
            <form method="post" action="{{ url('kontak') }}">
                <div class="panel-review-group">
                    <div class="panel-review-control">
                    <input type="text" placeholder="Name *" class="form-control" name="name" id="your_name" required/>
                    </div>
                </div>
                <div class="panel-review-group">
                    <div class="panel-review-control">
                    <input type="text" placeholder="Email *" class="form-control" name="email" id="your_email" required/>
                    </div>
                </div>
                <div class="panel-review-group">
                    <div class="panel-review-control">
                    <textarea class="form-control" placeholder="Content" name="messageKontak" id="your_content"></textarea>
                    </div>
                </div>
                <div class="panel-contact-actions">
                    <button class="panel-contact-submit" type="submit">Submit</button>
                    <span class="panel-contact-notice">* Required fileds</span>
                </div>
            </form>
            
        </div>
    </div>
    </div>
</div><!--/.panel-contact-->