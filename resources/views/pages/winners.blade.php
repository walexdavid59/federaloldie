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

{{--  @include('includes.winners_feature')  --}}
<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Successful&nbsp; Applicants &nbsp;List</h2>
      </div>
    </div>
  </div>
</div>  
</section>

<section id="overview" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2 class="heading">Winners List</h2>
         <hr class="heading_space">
         <table cellpadding="30" cellspacing="30" width="100%">
                    
                    <tr height="30">
                      <td width="45%" bgcolor="#CC0000">
						<font color="#fff" size="2">&nbsp;&nbsp;<b>Beneficiary Name</b></font></td>
                      <td width="24%" align="center" bgcolor="#CC0000">
						<font color="#fff" size="2"><b>Gender</b></font></td>
                      <td width="28%" align="center" bgcolor="#CC0000">
						<font color="#fff" size="2"><b>Status</b></font></td>
                      </tr>
                        
                       @foreach($listwin as $list)
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp; {{ $list->name }}</td>
                      <td width="24%" align="center">{{ $list->gender }}</td>
                      <td width="28%" align="center"> 
                        @if( $list->status ==1)  
                       {{ 'Delivered'  }}
                       @else
                       {{ 'Unhold' }}
                       @endif
                      </td>
                      </tr>	
                      @endforeach
                     
					 			 {{-- <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Kay Allen</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Brenda Brinson</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Darlene crosby</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Kim Ramsey</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Debra Lynn Crompton</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Gloria DeBerry</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Marcos Phillips</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Lisa Ann Robbins</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Betty Varner</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Erica Dawn Whitfield</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Donald Mayo</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Richard Lynn Arrington</td>
                      <td width="24%" align="center">Family</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Jane A Bower</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Betsy Darracott</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Stephanie Kratko-Baker</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Evelyn S. Erwin</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Jan B. Fangorn</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Johanna McCoon</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Debbi Kenyon Mc Nulty</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Darryl J. Root</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Dora Lawson</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Ellen Daily</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Bill &amp; Marty Slightom</td>
                      <td width="24%" align="center">Couple</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Janet Mike</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Bob Midd</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Jola Wrzesien</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Joe kersjes</td>
                      <td width="24%" align="center">Male</td>
                      <td width="28%" align="center">Delivered</td>
                      </tr>	
                      
                      
					
                    <tr class="even" bgcolor="#FF6600" height="30" style="color:#FFF; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Angela Lombard</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	
                     
					 			 <tr class="even2" height="30" style="color:#000; font-size:17px; font-weight:700;">
                      <td width="45%">&nbsp;&nbsp;Cheryl Alexandre</td>
                      <td width="24%" align="center">Female</td>
                      <td width="28%" align="center">On Hold</td>
                      </tr>	 --}}
                      
                                            
                    
                  
                    </table><br /><br />
                    <div class="pagination">
        <div class='pagination'><span class='disabled'>previous</span><span class='current'>1</span><a href='winners4658.html?page=2'>2</a><a href='winners9ba9.html?page=3'>3</a><a href='winners4658.html?page=2'>next</a></div>    <br /><br />
        </div> 
   
         <br><br style="line-height:200px;">
      </div>
    </div>
  </div>
</section>



@include('includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('includes.js')
 
</body>

<!-- Mirrored from www.federaoldagecare.com/home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 19:56:52 GMT -->
</html>
