@extends('master_page')
@section('css_ref')
@parent
@stop

@section('content')

        <!DOCTYPE html>
<html>
<head>
    <title>Weekend a People and Society Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
    <link href="{{asset('/client/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('/client/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('/client/css/component.css')}}" rel="stylesheet" type="text/css"  />

    <!-- Search Box CSS-->
    <link href="{{asset('/client/css/searchBox.css')}}" rel="stylesheet" type="text/css"  />

    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Weekend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="{{asset('/client/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('/client/js/bootstrap.js')}}"> </script>
    <script src="{{asset('/client/js/modernizr.custom.js')}}"></script>
    <!--//js-->
    <script type="text/javascript" src="{{asset('/client/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('/client/js/easing.js')}}"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>


</head>
<!--start-home-->
<body class="cbp-spmenu-push">
<!--top-header-->
<!--<div id="house" class="top-header">
			  <div class="container">
				 <p class="col-md-3 location"><i class="glyphicon glyphicon-map-marker"></i>16A, Honey Street</p>
				 <p class="col-md-3 phone"><i class="glyphicon glyphicon-phone"></i> 655 7758 2068 54892</p>
				 <p class="col-md-3 mail"><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@example.com</a></p>
				<div class="col-md-3 search">
					<form>
						<input type="submit" value="">
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					</form>
				</div>


				<div class="clearfix"></div>
			 </div>
		</div>-->
<!--bottom-->
<!--<section class="button">
          <button id="showLeftPush"><img src="images/menu-icon.png" alt=""></button>
 </section>-->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>Menu</h3>
    <a href="index.html" class="active">Home</a>
    <a href="about.html">About us</a>
    <a href="typography.html">services</a>
    <a href="news.html">News</a>
    <a href="gallery.html">Gallery</a>
    <a href="contact.html">Contact</a>

</nav>
<div class="banner">
    <div class="logo">
        <!-- Search Box Starts -->

        <div class="searchBox">
            <h1 style=" margin-top: 30px; ">Find Your Soulmate Here...</h1>
            <form action="searchResults.blade.php" method="post">
                <table name= "searchBox_table" style="margin-top: 20px; margin-left: 30px; margin-right: 30px">
                    <tr>
                        <td>I am a </td>
                        <td>
                            <select name="usersGender">
                                <option>Man</option>
                                <option>Women</option>
                            </select>
                        </td>
                        <td>looking for a</td>
                        <td>
                            <select name="lookingGender">
                                <option>Man</option>
                                <option>Women</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>My partner should be,<td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td>
                            <select name="places">
                                <option>Ampara</option>
                                <option>Anuradhapura</option>
                                <option>Badulla</option>
                                <option>Batticaloa</option>
                                <option>Colombo</option>
                                <option>Galle</option>
                                <option>Gampaha</option>
                                <option>Hambantota</option>
                                <option>Jaffna</option>
                                <option>Kalutara</option>
                                <option>Kandy</option>
                                <option>Kilinochchi</option>
                                <option>Kurunegala</option>
                                <option>Manner</option>
                                <option>Matale</option>
                                <option>Matale</option>
                                <option>Monaragala</option>
                                <option>Mullativu</option>
                                <option>Nuwara Eliya</option>
                                <option>Polonnaruwa</option>
                                <option>Puttalam</option>
                                <option>Ratnapura</option>
                                <option>Trincomalee</option>
                                <option>Vavuniya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <select name="ageStart">
                                <option>18</option><option>19</option>
                                <option>20</option><option>21</option>
                                <option>22</option><option>23</option>
                                <option>24</option><option>25</option>
                                <option>27</option><option>28</option>
                                <option>29</option><option>30</option>
                                <option>31</option><option>32</option>
                                <option>33</option><option>34</option>
                                <option>35</option><option>36</option>
                                <option>37</option><option>38</option>
                                <option>39</option><option>40</option>
                                <option>41</option><option>42</option>
                                <option>43</option><option>44</option>
                                <option>45</option><option>46</option>
                                <option>47</option><option>48</option>
                                <option>49</option><option>50</option>
                                <option>51</option><option>52</option>
                                <option>53</option><option>54</option>
                                <option>55</option><option>56</option>
                                <option>57</option><option>58</option>
                                <option>59</option><option>60</option>
                                <option>61</option><option>62</option>
                                <option>63</option><option>64</option>
                                <option>65</option><option>66</option>
                                <option>67</option><option>68</option>
                                <option>69</option><option>70</option>
                            </select>
                        </td>
                        <td>to</td>
                        <td>
                            <select name="ageEnd" >
                                <option>18</option><option>19</option>
                                <option>20</option><option>21</option>
                                <option>22</option><option>23</option>
                                <option>24</option><option>25</option>
                                <option>27</option><option>28</option>
                                <option>29</option><option>30</option>
                                <option>31</option><option>32</option>
                                <option>33</option><option>34</option>
                                <option>35</option><option>36</option>
                                <option>37</option><option>38</option>
                                <option>39</option><option>40</option>
                                <option>41</option><option>42</option>
                                <option>43</option><option>44</option>
                                <option>45</option><option>46</option>
                                <option>47</option><option>48</option>
                                <option>49</option><option>50</option>
                                <option>51</option><option>52</option>
                                <option>53</option><option>54</option>
                                <option>55</option><option>56</option>
                                <option>57</option><option>58</option>
                                <option>59</option><option>60</option>
                                <option>61</option><option>62</option>
                                <option>63</option><option>64</option>
                                <option>65</option><option>66</option>
                                <option>67</option><option>68</option>
                                <option>69</option><option>70</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Religion</td>
                        <td>
                            <select name="religion">
                                <option>Buddhist</option>
                                <option>Christian</option>
                                <option>Muslim</option>
                                <option>Hindu</option>
                                <option>Doesn't Matter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mother Tongue</td>
                        <td>
                            <select name="motherTongue">
                                <option>Sinhala</option>
                                <option>English</option>
                                <option>Tamil</option>
                                <option>Hindi</option>
                                <option>Doesn't Matter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="button" id="searchBox_submit" class ="button" value="Search"></td>
                    </tr>
                </table>
            </form>

        </div>

        <!-- Search Box Ends -->

    </div>
</div>
<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="{{asset('js/classie.js')}}"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
            showLeftPush = document.getElementById( 'showLeftPush' ),
            showRightPush = document.getElementById( 'showRightPush' ),
            body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
        if( button !== 'showRightPush' ) {
            classie.toggle( showRightPush, 'disabled' );
        }
    }
</script>
<!--bottom-grids-->
<div class="banner-bottom">
    <div class="container">
        <h3 class="tittle">Happy Life</h3>
        <div class="slider">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="bottom">
                                <div class=" bottom-in bottom-grid">
                                    <a href="{{URL::to('abc')}}">
                                    <img class="img-responsive " src="{{asset('/client/images/s1.jpg')}}" alt="" />
                                    </a>
                                </div>
                                <div class=" bottom-in bottom-grid1">
                                    <img class="img-responsive" src="{{asset('/client/images/s2.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid2">
                                    <img class="img-responsive " src="{{asset('/client/images/s3.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid3">
                                    <img class="img-responsive " src="{{asset('/client/images/s4.jpg')}}" alt="" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="bottom">
                                <div class=" bottom-in bottom-grid">
                                    <img class="img-responsive " src="{{asset('/client/images/s3.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid1">
                                    <img class="img-responsive" src="{{asset('/client/images/s4.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid2">
                                    <img class="img-responsive " src="{{asset('/client/images/s1.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid3">
                                    <img class="img-responsive " src="{{asset('/client/images/s2.jpg')}}" alt="" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="bottom">
                                <div class=" bottom-in bottom-grid">
                                    <img class="img-responsive " src="{{asset('/client/images/s2.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid1">
                                    <img class="img-responsive" src="{{asset('/client/images/s1.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid2">
                                    <img class="img-responsive " src="{{asset('/client/images/s4.jpg')}}" alt="" />
                                </div>
                                <div class=" bottom-in bottom-grid3">
                                    <img class="img-responsive " src="{{asset('/client/images/s3.jpg')}}" alt="" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <script>window.jQuery || document.write('<script src="{{asset('/client/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>
            <!--flexslider-->
            <link rel="stylesheet" href="{{asset('/client/css/flexslider.css')}}" type="text/css" media="screen" />
            <script defer src="{{asset('/client/js/jquery.flexslider.js')}}"></script>
            <script type="text/javascript">
                $(function(){
                    SyntaxHighlighter.all();
                });
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>

        </div>
    </div>
</div>
<!--/services-->
<div class="services">
    <div class="container">
        <h3 class="tittle">Our Services</h3>
        <div class="serve-top">
            <div class="col-md-6 serve-section grid">
                <div class="col-md-6 serve-grid">
                    <figure class="effect-goliath">
                        <img class="img-responsive " src="{{asset('/client/images/ser1.jpg')}}" alt="" />
                        <figcaption>
                            <h2>weeke<span>nd</span></h2>
                            <a href="#">View more</a>
                            <p>Happy Life...</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 serve-grid">
                    <figure class="effect-goliath">
                        <img class="img-responsive " src="{{asset('/client/images/ser2.jpg')}}" alt="" />
                        <figcaption>
                            <h2>weeke<span>nd</span></h2>
                            <a href="#">View more</a>
                            <p>Happy Life...</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 serve-grid">
                    <figure class="effect-goliath">
                        <img class="img-responsive " src="{{asset('/client/images/ser3.jpg')}}" alt="" />
                        <figcaption>
                            <h2>weeke<span>nd</span></h2>
                            <a href="#">View more</a>
                            <p>Happy Life...</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 serve-grid">
                    <figure class="effect-goliath">
                        <img class="img-responsive " src="{{asset('/client/images/ser4.jpg')}}" alt="" />
                        <figcaption>
                            <h2>weeke<span>nd</span></h2>
                            <a href="#">View more</a>
                            <p>Happy Life...</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 serve-icons">
                <h4 class="sub">How to Plan for your Weekend...</h4>
                <div class="s-sub">
                    <div class="col-md-2 icon">
                        <a href="www.google.com">
                            <i class="glyphicon glyphicon-globe"></i>
                        </a>
                    </div>
                    <div class="col-md-10 serve-text">
                        <p> Duis quis risus a nunc ultricies varius. Aenean aliquam pellentesque magna consectetur hendrerit. Cum sociis natoque penatibus. </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="s-sub">
                    <div class="col-md-2 icon">
                        <i class="glyphicon glyphicon-ice-lolly-tasted"></i>
                    </div>
                    <div class="col-md-10 serve-text">
                        <p> Duis quis risus a nunc ultricies varius. Aenean aliquam pellentesque magna consectetur hendrerit. Cum sociis natoque penatibus. </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="s-sub">
                    <div class="col-md-2 icon">
                        <i class="glyphicon glyphicon-send"></i>
                    </div>
                    <div class="col-md-10 serve-text">
                        <p> Duis quis risus a nunc ultricies varius. Aenean aliquam pellentesque magna consectetur hendrerit. Cum sociis natoque penatibus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div><div class="s-sub">
                    <div class="col-md-2 icon">
                        <i class="glyphicon glyphicon-briefcase"></i>
                    </div>
                    <div class="col-md-10 serve-text">
                        <p> Duis quis risus a nunc ultricies varius. Aenean aliquam pellentesque magna consectetur hendrerit. Cum sociis natoque penatibus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--start-events-->
<div class="news">
    <div class="container">
        <h3 class="tittle">News & Events</h3>
        <div class="news-article">
            <div class="col-md-6 article-post">
                <div class="col-md-3 post-meta">
                    <div class="meta-icon">
                        <div class="pic">
                            <a href="single.html" > <i class="glyphicon glyphicon-picture"></i></a>
                        </div>
                    </div>
                    <ul class="ad-info">
                        <li>21 Aug'15</li>
                        <li> <a href="#">Author</a></li>
                        <li> <a href="#">24 Comments</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-9 post-details">
                    <a href="single.html" class="mask"><img src="{{asset('/client/images/b2.jpg')}}" alt="image" class="img-responsive zoom-img"></a>
                    <a href="single.html"><h4>News tittle Lorem Ipsump</h4></a>
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                    <div class="read">
                        <a class="button" href="single.html"><img src="{{asset('/client/images/read.png')}}" alt="" /></a>
                    </div>
                </div>
                <!--post-details-->
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 article-post">
                <div class="col-md-3 post-meta">
                    <div class="meta-icon">
                        <div class="pic">
                            <a href="single.html" > <i class="glyphicon glyphicon-picture"></i></a>
                        </div>
                    </div>
                    <ul class="ad-info">
                        <li>21 Aug'15</li>
                        <li> <a href="#">Author</a></li>
                        <li> <a href="#">24 Comments</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-9 post-details">
                    <a href="single.html" class="mask"><img src="{{asset('/client/images/b1.jpg')}}" alt="image" class="img-responsive zoom-img"></a>

                    <a href="single.html"><h4>News tittle Lorem Ipsump</h4></a>
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                    <div class="read">
                        <a class="button" href="single.html"><img src="{{asset('/client/images/read.png')}}" alt="" /></a>
                    </div>
                </div>
                <!--post-details-->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!--/team-->
<div class="testi-m">
    <div class="container">
        <h3 class="tittle three">Testimonials</h3>
        <div class="test">
            <img src="{{asset('/client/images/t1.jpg')}}" alt="name" />
            <div class="test-text">
                <h4>David son</h4>
                <p><span> </span>Duis quis risus a nunc ultricies varius.Duis quis risus a nunc ultricies varius. Aenean aliquam pellentesque magna consectetur hendrerit. Cum sociis natoque penatibus.</p>
            </div>
        </div>
    </div>
</div>
<!--contact-->
<div class="contact">
    <div class="col-md-6 contact-top">
        <div class="point"> <i class="glyphicon glyphicon-map-marker"></i></div>
        <h3 class="tittle two">Find Us</h3>
        <h4>For Any questions, Please feel free to Contact us by mail.</h4>
        <div class="contact-ad">
            <p>Address:Newyork Still Road.756 gt globel Place.<p>
            <p>Phone:Newyork Still Road.756 gt globel Place.<p>
            <p>E-mail :<a href="mailto:info@example.com">mail@example.com</a></p>

        </div>
    </div>
    <div class="col-md-6 map">
        <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>
        <div class="black">
            <div class="map-l"> <i class="glyphicon glyphicon-map-marker"></i></div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--//contact-->

<!--/footer-->
<div class="copy">
    <p>&copy; 2015 Weekend. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
</div>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>


@stop


@section('js_ref')
    @parent

@stop
