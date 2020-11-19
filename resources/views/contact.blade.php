@extends('myaccount')
@section('buyerbody')
<div class="profile-content" style=" margin-bottom:15px;">
    <span style="margin-left:25px;"><h3 style="margin-left:25px;">Report a Seller . . .</h3></span>
    <hr style="width:95%">
    <div class="row">
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="contact_info">
                <div class=" col-lg-4 info_item">
                    <i class="lnr lnr-home"></i>
                    <h6>California, United States</h6>
                    <p>Santa monica bullevard</p>
                </div>
                <div class="col-lg-4 info_item">
                    <i class="lnr lnr-phone-handset"></i>
                    <h6><a href="#">00 (440) 9865 562</a></h6>
                    <p>Mon to Fri 9am to 6 pm</p>
                </div>
                <div class="col-lg-4 info_item">
                    <i class="lnr lnr-envelope"></i>
                    <h6><a href="#">support@colorlib.com</a></h6>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-12">
            <br>
            <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'selec a seller'">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter reason'">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="primary-btn">Denunciar a un vendedor</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
