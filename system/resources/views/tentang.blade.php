<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Uas DPW2</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ url('public') }}/client/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{ url('public') }}/client/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('public') }}/client/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{ url('public') }}/client/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url('public') }}/client/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url('public') }}/client/images/loading.gif" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="{{ url('templateclient') }}">Beranda</a>
                </li>
                <li class="active">
                    <a href="{{ url('tentang') }}">Tentang</a>
                </li>
                <li>
                    <a href="{{ url('user/client') }}">Produk</a>
                </li>
                <li>
                    <a href="{{ url('kontak') }}">Kontak</a>
                </li>
            </ul>

        </nav>
      </div>
     
     <div id="content">
      <!-- header -->
  @include('templateclient.section.header')
      <!-- end header -->
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Tentang</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>



<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <h3>Tentang Kami</h3>
        <p>Kami menjual furniture funiture yang berkualitas dengan harga yang terjangkau
            <a href="#">Lebih Banyak</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <figure><img src="{{ url('public') }}/client/images/Avangarda_klu.jpg"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
      <!--  footer --> 
@include('templateclient.section.footer')
   </div>

</div>

   <div class="overlay"></div>

      <!-- Javascript files--> 
      <script src="{{ url('public') }}/client/js/jquery.min.js"></script> 
      <script src="{{ url('public') }}/client/js/popper.min.js"></script> 
      <script src="{{ url('public') }}/client/js/bootstrap.bundle.min.js"></script> 
      <script src="{{ url('public') }}/client/js/jquery-3.0.0.min.js"></script> 
      <script src="{{ url('public') }}/client/js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="{{ url('public') }}/client/js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="{{ url('public') }}/client/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>