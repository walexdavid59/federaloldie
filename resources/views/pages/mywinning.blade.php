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

{{--  @include('includes.mywinning_feature')  --}}
<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">My Winning</h2>
         <p> </p>
      </div>
    </div>
  </div>
</div>  
</section>


<section id="order-form" class="order-page">
  <div class="container order_form padding">
    <div class="row">
      <div class="col-md-12 appointment_form">
        <h2 class="heading">Winning Verification Form</h2>
        <hr class="heading_space">
      <div class="row">  
       <div class="col-md-8">

           @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                                @endif
                                                @if(Session::has('fail'))
                                                <p class="alert alert-danger">{{ Session::get('fail') }}</p>

                                                @endif                               
          
       <form method="post" action="{{ url('create_verify') }}" id="order_form" class="callus">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Full Name"  name="name" id="name"  required>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Address"  name="address" id="address"  required>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Cell Phone No" name="phone" id="phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="email" class="form-control" placeholder="Winner's Email address" name="email" id="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Mothers Name" name="mother" id="mother" required>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Occupation" name="job" id="job" required>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Worth of Income" name="income" id="income" required>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Winner's Next Of Kin" name="nextofkin" id="nextofkin" required>
                  </div>
                </div>
                
                <div class="col-md-12">
                  
                  <div class="form-group">
                     <div class="btn-submit btn-common-white">
                    <input name="hdnCmd" type="hidden"   value="Add">
                    <input type="submit" value="Submit" id="btn_order_submit" />
                    </div>
                  </div>
                </div>
              </div>
              
            </form>
           </div> 
           </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>


@include('includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('includes.js')
 
</body>

<!-- Mirrored from www.federaoldagecare.com/home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 19:56:52 GMT -->
</html>
