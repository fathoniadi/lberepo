<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LBE - AJK</title>
	<link href="{{url('/assets')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('/assets')}}/css/datepicker3.css" rel="stylesheet">
	<link href="{{url('/assets')}}/css/styles.css" rel="stylesheet">
	<link href="{{url('/assets')}}/css/bootstrap-multiselect.css" rel="stylesheet">
	<link href="{{url('/assets')}}/css/bootstrap-table.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<script src="{{url('/assets')}}/js/lumino.glyphs.js"></script>
</head>

<body>
	
	@yield('navbar')
	@yield('sidebar')
	@yield('content')

	<script src="{{url('/assets')}}/js/jquery-1.11.1.min.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap-multiselect.js"></script>
	<script src="{{url('/assets')}}/js/chart.min.js"></script>
	<script src="{{url('/assets')}}/js/chart-data.js"></script>
	<script src="{{url('/assets')}}/js/easypiechart.js"></script>
	<script src="{{url('/assets')}}/js/easypiechart-data.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap-datepicker.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap-table.js"></script>
	<script src="{{url('/bower_components')}}/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: '#eventNote',
			height: 250,
			theme: 'modern',
		  	plugins: [
			    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			    'searchreplace wordcount visualblocks visualchars code fullscreen',
			    'insertdatetime media nonbreaking save table contextmenu directionality',
			    'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
		  	],
		  	toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  	toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
		  	image_advtab: true,
		 	templates: [
				{ title: 'Test template 1', content: 'Test 1' },
			  	{ title: 'Test template 2', content: 'Test 2' }
		  	],
		  	content_css: [
			    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			    '//www.tinymce.com/css/codepen.min.css'
		  	],
		  	file_browser_callback: function(field_name, url, type, win) {
        	if(type=='image') $('#my_form input').click();
    		}
		 });
	</script>
	<script type="text/javascript">
	    $(document).ready(function() {
	       $('.selectpicker').multiselect({
	       	includeSelectAllOption: true,
            enableFiltering: true
	       });
	    });
	</script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>
</html>