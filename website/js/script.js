var wh = 0;
var old_wh = -1;
		
$(document).ready(function(){
		
var TempInterval = setInterval(function() {
				
				if(slideanistop && resizestop)
				{
						counter++;
   						resizestop = true;
					   if(counter > 400) 
					   {
						var x = 3;
						if(current + 1 < x)
						 current++;
						 
						else
						 current = 0;
						
					   } 
					   if(old_current != current)
					   {
						  	//$("#slide_num" + current).css("z-index",100);
							//$("#slide_num" + old_current).css("z-index",-1);
							wh = $(window).width() + " : " + $(window).height();
									if(old_wh != wh)
									{
										
									   old_wh = wh;
									}
							if($(window).width()>500)

							{
								w = $(window).width()
							$(".allslides").animate({"left":-((67*w)/100)*current+"px"},
							  {
								 duration: 1000,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slides div h1").css({"top":"-50px","opacity":0});
										$(".slides div h2").css({"top":"50px","opacity":0});
										$("#slide_num" + current).find("h1").animate({"top":"0px","opacity":1},1000,"easeInOutQuint")
										$("#slide_num" + current).find("h2").animate({"top":"0px","opacity":1},1000,"easeInOutQuint")

							  	    }
							});
						 	}
							
							if($(window).width()<500)
							{
							$(".allslides").animate({"left":-w*current+"px"},
							  {
								 duration: 1000,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slides div h1").css({"top":"-50px","opacity":0});
										$(".slides div h2").css({"top":"50px","opacity":0});
										$("#slide_num" + current).find("h1").animate({"top":"0px","opacity":1},1000,"easeInOutQuint")
										$("#slide_num" + current).find("h2").animate({"top":"0px","opacity":1},1000,"easeInOutQuint")

							  	    }
							});
						 	}
		
							  
						counter = 0;
						old_current = current;
						
						if(current == 0)
						
						  {
							$("nav ul li a").removeClass("active");
							$("#beauti a").addClass("active");
						  }
						  
						if(current == 1)
						
						  {
							$("nav ul li a").removeClass("active");
							$("#massage a").addClass("active");
						  }
						  
						if(current == 2)
						
						  {
							$("nav ul li a").removeClass("active");
							$("#pack a").addClass("active");
						  }
								
					   } 
					   
				}
				
				},20);


//var doit;


	$(window).load(function(){
			//alert(window.location)
	 var url = window.location
	 //var prevURL1 = (window.location.search ).contains("packages");
	 //var prevURL2 = (window.location.search ).contains("beautycare");
	// alert(url)
		  if(window.location.search =="?massage")
		  {
			 // alert("wef")
			 current==1;
			 old_current==0;
			 $("#massage").trigger("click");
			 
			 if($(window).width()>500)
			 {
			 	$(".allslides").animate({"left":-((67*w)/100)*1+"px"},1000);
			 }
			 	else
				{
					$(".allslides").animate({"left":-w*1+"px"},1000);
				}
		  }
		  
		if(window.location.search =="?packages")
		  {
			 // alert("wefwefwef")
			 current==2;
			 old_current==1;
			 $("#pack").trigger("click");
			 
			 if($(window).width()>500)
			 {
			 	$(".allslides").animate({"left":-((67*w)/100)*2+"px"},1000);
			 }
			 	else
				{
					$(".allslides").animate({"left":-w*2+"px"},1000);
				}
		  }
		  
		  if(window.location.search =="?beautycare")
		  {
			 current==2;
			 old_current==1;
			 $("#beauti").trigger("click");
			 
			 if($(window).width()>500)
			 {
			 	$(".allslides").animate({"left":-((67*w)/100)*0+"px"},1000);
			 }
			 	else
				{
					$(".allslides").animate({"left":-w*0+"px"},1000);
				}
		  }
	});
								 
								 
	
$(window).resize(function(){

				current = 0;
			 old_current = -1;

		
	 // clearTimeout(doit);
 // doit = setTimeout(resize, 100);
  
	//$(".allslides").animate({"left":-((67*w)/100)*current+"px"},1);


	//resizestop = false;	
	
});/// resize function
	
// contact form

		
});//document ready