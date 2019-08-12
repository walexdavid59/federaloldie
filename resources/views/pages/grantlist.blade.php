<!doctype html>
<html lang="en">

<!-- Mirrored from www.federaoldagecare.com/home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 19:55:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

@include('includes.css')

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d1da0ca7a48df6da242e364/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>

<!--Loader-->
{{-- <div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div> --}}

@include('includes.topbar')



@include('includes.header')

{{--  @include('includes.howto_feature')  --}}

<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Our Grant Offers</h2>
      </div>
    </div>
  </div>
</div>  
</section>

<section id="overview" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2 class="heading">Check out &nbsp; different ranges of grants</h2>
         <hr class="heading_space">
         <p>You are to choose the amount you wish to claim from us. And you will pay for the Winning clearance cost , Delivery cost and Homeland Security tax charges... We will make every effort to ship your order as soon as possible. You are to choose below amount you want to claim.</p>
      </div>
    </div>
  </div>
</section>
<section id="gallery">
  <div class="container">
    
    <div class="row">
      <div class="zerogrid">
        <div class="wrap-container">
          <div class="wrap-content clearfix">
            @foreach($lists as $grantlist) 
                      <div class="col-1-4 mix work-item drinks heading_space">
                        {{-- @foreach($listChunk as $grantlist) --}}
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/our-cheffs1.jpg" border="0" align="center" />
                  </div> 
                  <div class="gallery_content">
                    <h3>YOU PAY ${{ $grantlist->amount}}</h3>
               <small><b>TO GET ${{ $grantlist->cashout}} Grant</b></small>
         <p><a href="/order/pid/{{ $grantlist->id}}" class="btn-common-white page-scroll">Place Order</a></p>
                  </div>
                </div>
              </div>
           
            </div>
            @endforeach

                       </div>
        </div>
      </div>
      </div>
      <p>As soon as the payment is facilitated through Bank Cash Deposit, Postal Money Order, Walmart (2) Walmart Postal, Western Union or Money Gram to our accountant details your Claimed Money will be delivered to you in less than 12 hours and as soon as you are ready to proceed your claim make sure you get back to Agent on our official facebook page.</p>
      <p><br>
      </p>
  </div>
</section>


@include('includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('includes.js')
 
</body>

<!-- Mirrored from www.federaoldagecare.com/home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 19:56:52 GMT -->
</html>
