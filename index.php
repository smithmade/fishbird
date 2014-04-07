<!DOCTYPE html>

<!--

MADE BY
                                                                     
   _|_|_|      _|      _|      _|_|_|      _|_|_|_|_|      _|    _|  
 _|            _|_|  _|_|        _|            _|          _|    _|  
   _|_|        _|  _|  _|        _|            _|          _|_|_|_|  
       _|      _|      _|        _|            _|          _|    _|  
 _|_|_|        _|      _|      _|_|_|          _|          _|    _|  
                                                                     
                                                        ASBURY PARK                 

-->


<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title>fishbird</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


</head>
<body class="home">
	
	<header class="top">
		
		<p class="red">
			what is this?
		</p>

		<p class="light-blue">
			clients
		</p>

	</header>


	<div class="content">

		<h1>
			<a class="purple" href="the-new-disruptors">The New Disruptors</a>
		</h1>

		<h1>
			<a class="yellow" href="imagine-that">Imagine That</a>
		</h1>
		

	</div><!-- content -->

	<article class="what-is-this opacity">
		<h3>
			What Is Fishbird?
		</h2>
		<h4>
			A true story
		</h3>

		<section>
			We were standing in Times Square, bathing ourselves in neon and the warm night air. In less than 10 hours, we’d be starting Fishbird with one of the largest pharma companies in the world. One of us looked at our watch. The other took out his cell and gave our hotel&nbsp;a&nbsp;call.
			<br><br>
			A man at the front desk&nbsp;answered. 
			<br><br>
			Could we check out the conference room we’d be in tomorrow&nbsp;morning?
			<br><br>
			No, he said. We couldn’t check out the room. It was too late and the conference rooms were already locked. And besides, our names weren’t on his security clearance list. Then he hung&nbsp;up.
			<br><br>
			We called again. A different man answered this time. Same&nbsp;answer.
		</section>

		<section>
			So we started walking. The hotel was 30 minutes away on foot. It was a good night to&nbsp;walk.
			<br><br>
			We passed through the grand entrance doors a little before midnight. Past the man at the front desk, we found a sign pointing us toward the conference rooms. The hallway was cool&nbsp;and&nbsp;empty.
			<br><br>
			Every door to every conference room was wide open. We looked inside the room we’d be in&nbsp;for&nbsp;Fishbird. 
			<br><br>
			We had access to everything.<br> 
			We saw everything.
			<br><br>
			And when we finally slept, we imagined great&nbsp;things. 
			<br><br>
			This is Fishbird.
		</section>


		<span class="what-close">
			<img src="images/red-close.svg">
		</span>
	</article>

	<article class="clients opacity">
		<h3>
			select clients
		</h3>
		<section>
			<span>Amicus&nbsp;Therapeutics</span>
			<span>Cambium</span>
			<span>Eneractive&nbsp;Solutions</span>
			<span>Harley-Davidson</span>
			<span>Johnson&nbsp;&amp;&nbsp;Johnson</span>
		</section>
		<section>
			<span>Modern&nbsp;Drummer</span>
			<span>Monmouth&nbsp;University</span>
			<span class="less-height">New&nbsp;Jersey&nbsp;Sports&nbsp;&amp;<br>
				Exposition&nbsp;Authority</span>
			<span>RSI&nbsp;Bank</span>
		</section>
		<section>
			<span>Sony</span>
			<span>Strategies&nbsp;for&nbsp;Wealth</span>
			<span>Virgin&nbsp;Mobile</span>
		</section>
		<span class="clients-close">
			<img src="images/blue-close.svg">
		</span>
	</article>
		

	<footer>
		<div class="phone-number">
			732.774.3331
		</div>
		<div class="email-address">
			<a href="mailto:info@fishbird.org">info@fishbird.org</a>
		</div>
	</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		resizeDiv();
	});

	window.onresize = function(event) {
		resizeDiv();
	}

	function resizeDiv() {
		vpw = $(window).width();
		vph = $(window).height();
		$('.content').css({'height': vph});
	}
</script>


<script type="text/javascript">

$(document).ready(function() {
    if ($('.what-is-this').hasClass('opacity')) {
        $('body').addClass('overflow')
    }
});

$(document).ready(function() {
    if ($('.clients').hasClass('opacity')) {
        $('body').addClass('overflow')
    }
});

jQuery( ".light-blue" ).hover(function() {
  jQuery( "body" ).toggleClass( "light-blue-border", function() {
  });
});

jQuery( ".red" ).hover(function() {
  jQuery( "body" ).toggleClass( "red-border", function() {
  });
});

jQuery( ".yellow" ).hover(function() {
  jQuery( "body" ).toggleClass( "yellow-border", function() {
  });
});

jQuery( ".purple" ).hover(function() {
  jQuery( "body" ).toggleClass( "purple-border", function() {
  });
});

jQuery( "p.light-blue" ).click(function() {
  jQuery( ".clients" ).toggleClass( "opacity", function() {
  });
  jQuery( "h1" ).toggleClass( "opacity", function() {
  });
  jQuery( "footer" ).toggleClass( "opacity", function() {
  });
  jQuery( "header" ).toggleClass( "opacity", function() {
  });
  jQuery( "body" ).toggleClass( "overflow", function() {
  });

});

jQuery( ".clients-close" ).click(function() {
  jQuery( ".clients" ).toggleClass( "opacity", function() {
  });
  jQuery( "h1" ).toggleClass( "opacity", function() {
  });
  jQuery( "footer" ).toggleClass( "opacity", function() {
  });
  jQuery( "header" ).toggleClass( "opacity", function() {
  });
  jQuery( "body" ).toggleClass( "overflow", function() {
  });
  $('html,body').animate({scrollTop: 0});
});

jQuery( "p.red" ).click(function() {
  jQuery( ".what-is-this" ).toggleClass( "opacity", function() {
  });
  jQuery( "h1" ).toggleClass( "opacity", function() {
  });
  jQuery( "footer" ).toggleClass( "opacity", function() {
  });
  jQuery( "header" ).toggleClass( "opacity", function() {
  });
  jQuery( "body" ).toggleClass( "overflow", function() {
  });
});

jQuery( ".what-close" ).click(function() {
  jQuery( ".what-is-this" ).toggleClass( "opacity", function() {
  });
  jQuery( "h1" ).toggleClass( "opacity", function() {
  });
  jQuery( "footer" ).toggleClass( "opacity", function() {
  });
  jQuery( "header" ).toggleClass( "opacity", function() {
  });
  jQuery( "body" ).toggleClass( "overflow", function() {
  });
    $('html,body').animate({scrollTop: 0});
});



</script>

<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49787918-1', 'fishbird.org');
  ga('send', 'pageview');

</script>

</body>
</html>