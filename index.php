<!DOCTYPE html>
<html>
	<head>
		<title>{%title}</title>

		<meta charset="utf-8">
		<meta name="keywords" content="{%keywords}">
		<meta name="description" content="{%description}">
		<meta name="publisher" content="{%publisher}">
		<meta name="language" content="de">
		<meta name="robots" content="index,follow">
		
		<meta name="viewport" content="width=device-width">
		
		<link rel="stylesheet/less" type="text/css" href="./core/css/UI.less">

		<!-- Google Webfont Support -->
		<link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" type="text/css">		
		<!-- @end -->
	
		<!-- prefere jquery? -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- @end -->

		<!-- prefere zepto? -->
		<!-- <script src="http://zeptojs.com/zepto.min.js"></script>-->   
		<!-- @end -->

		<!-- less clientseitig -->
		<script src="http://lesscss.googlecode.com/files/less-1.3.0.min.js"></script>
		<!-- @end -->

    <script src="./core/js/jquery.plugin.js"></script>

    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	</head>
	<body>
	 
	 <header>
  	   	 {%header code}
	 </header>

	 <section>
  	 <article class="txt">
    	 <h1>Lorem ipsum dolor ist amet</h1>
    	 <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
  	 </article>
	 </section>
	 
	 <footer>
  	 {%footer code}
	 </footer>
	 
	</body>
</html>