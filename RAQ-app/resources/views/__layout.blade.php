
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--To get the app name which stored on .env -->
    <title>{{ config('app.name','RAQ') }} </title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <!-- to add assets relative url : put the folders in public folder then use the url as following -->
    <link rel="stylesheet" href={{ URL::asset('css/fontawesome.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/templatemo-sixteen.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/owl.css')}}>

</head>

<body>

    <!-- ***** Preloader Start ***** 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>-->
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><h2>RAQ <em>Store</em></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <!-- <a class="nav-link" href="index.html">
                                Home
                                <span class="sr-only">(current)</span>
                            </a> -->
                            
                            <a href="#" class="nav-link">Home</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                        
                            <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>Every Week New Sale </h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Here is the place</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>For every one</h4>
                <h2>Find Your needs</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->
<!--Content-->
<div class="">
    @RenderBody()



    <!--HR and Footer-->
    <hr />
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>
                            &copy; @DateTime.Now.Year -RAQ Store Asp.Net Application<br />
                            Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<!-- Additional Scripts -->
<script src={{ URL::asset('js/custom.js') }}></script>
<script src={{ URL::asset('js/owl.js') }}></script>
<script src={{ URL::asset('js/slick.js') }}></script>
<script src={{ URL::asset('js/isotope.js') }}></script>
<script src={{ URL::asset('js/accordions.js') }}></script>


<script language="text/Javascript">

    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

</body>


</html>
<!-- modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalCenterTitle">Cart List</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!--{Html.RenderAction("Cart", "Products");}-->
            </div>  
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

