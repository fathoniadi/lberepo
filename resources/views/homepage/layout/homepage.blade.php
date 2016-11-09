<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="{{url('/assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{url('/assets')}}/css/datepicker3.css" rel="stylesheet">
<link href="{{url('/assets')}}/css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	@yield('content')
	
	
		

	<script src="{{url('/assets')}}/js/jquery-1.11.1.min.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/assets')}}/js/chart.min.js"></script>
	<script src="{{url('/assets')}}/js/chart-data.js"></script>
	<script src="{{url('/assets')}}/js/easypiechart.js"></script>
	<script src="{{url('/assets')}}/js/easypiechart-data.js"></script>
	<script src="{{url('/assets')}}/js/bootstrap-datepicker.js"></script>
	<script>
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

		$(document).on('click','.close-notif', function()
		{
			$('.notif').hide();
		});

		$(document).on('change', '#labLbe', function()
		{
			var labLbe = $(this).val();
			var data = {'lab':labLbe};
			if(labLbe=='')
			{
				$('#bidangminat').html('');
	            $('#bidangminat').css('display','none');
			}
			else {
				$.ajax({
	            type:'POST',
	            url:'{{url('/')}}/getbidang',
	            data: data,
	            dataType:"json",
	            success:function(response){
	                       console.log(response);
	                       if(!response.length==0)
	                       {
	                       		for(i=0;i<response.length;i++)
	                       		{
	                       			$('#bidangminat').css('display','');
	                       			if(i==0) $('#bidangminat').html("<option value=''>Pilih Bidang</option>");
	                       			$('#bidangminat').append("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
	                       		}
	                       		//alert("asasd");
	                       }
	                       else
	                       {
	                       		$('#bidangminat').html('');
	                       		$('#bidangminat').css('display','none');
	                       }
	                    },
	            error: function(response){
	                      
	                }
	            });

			}
		});
	</script>	
</body>

</html>
