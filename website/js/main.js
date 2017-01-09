			var w = $(window).width();
			var h = $(window).height();
			var counter = 0;
			var current = 0;
			var old_current = -1;
			var l = 0;
			animationcom = true;
			slideanistop = true;
			resizestop = true;
			headerclosed = true;
			issliding = true;
			
$(document).ready(function(){
	
	$(".slides").each(function(){$(this).attr("id","slide_num"+(l++))})
				
			
	var resize = function()
	
		{
			w = $(window).width();
			h = $(window).height();
			

			
			$(".wrapper").css({"width":w+"px","height":h+"px"});
			$("header").css({"width":(33*w)/100+"px","height":h+"px"});
			$(".content,.slides,.madness,.contact").css({"width":(67*w)/100+"px","height":h+"px"});
			$(".head").css({"left":(((33*w)/100)-250)/2 +"px","top":(h-570)/2+"px"});
			$(".slides div").css({"left":(((33*w)/100)*30)/100 +"px","top":(h-110)/2+"px"});
			$(".allslides").css({"width":((68*w)/100)*3+"px","height":h+"px"});
			$("#beautifi,#packages,#massa").css({"height":h+"px","left":((33*w)/100)-360+"px"});
			$("#madness").css({"height":h+"px"});
			$(".beauti-inner").css({"top":(h-570)/2+"px"});
			$(".madness-inner").css({"top":(h-250)/2+"px"});
			$(".about").css({"left":(((67*w)/100)-845)/2 +"px","top":(h-365)/2+"px"});
			$(".contact-inner").css({"left":(((67*w)/100)-775)/2 +"px","top":(h-510)/2+"px"});
			
	//responsive	
			if($(window).width()<1301)	
			{
				$(".about").css({"left":(((67*w)/100)-705)/2 +"px","top":(h-385)/2+"px"});
			}
			

			
			if($(window).width()<1200)	
			{
				$(".contact-inner").css({"left":(((67*w)/100)-580)/2 +"px","top":(h-510)/2+"px"});
			}
			
			if($(window).width()<1100)	
			{
				$(".about").css({"left":(((67*w)/100)-600)/2 +"px","top":(h-385)/2+"px"});
			}
			
			if($(window).width()<900)	
			{
				$(".contact-inner").css({"left":(((67*w)/100)-280)/2 +"px","top":(h-510)/2+"px"});
				$(".content-contact").parent().css({"overflow":"visible"});
				$(".content-contact,.contact").css({"width":((67*w)/100)+"px","height":1135+"px"});
				$(".content-contact").parent().find("header").css({"height":1135+"px"});
				// top pos of menu
				$(".content-contact").parent().find("header").find(".head").css({"top":(1135-570)/2+"px"});
			}
			
			if($(window).width()<850)
			
			{
				$(".head").css({"left":(((33*w)/100)-200)/2 +"px","top":(h-570)/2+"px"});
				$(".allslides").css({"width":((67*w)/100)*3+30+"px","height":h+"px"});
				$(".content-contact").parent().find("header").find(".head").css({"top":(1135-570)/2+"px"});
			}
			
			if($(window).height()<650 && $(window).width()<650)
			{	
				$(".content").parent().css({"overflow-y":"visible"});
				$(".contact-inner").css({"left":30+"px","top":50+"px"});
				$(".content-contact,.contact").css({"width":(67*w)/100+"px","height":1200+"px"});
				$("header").css({"width":(33*w)/100+"px","height":600+"px"});
				$(".content-contact").parent().find("header").css({"height":1200+"px"});
				$(".head").css({"left":0+"px","top":30+"px"});
				$(".content-contact").parent().find("header").find(".head").css({"top":100+"px"});
				$(".about").css({"left":20 +"px","top":35+"px"});
				
				
				$(".wrapper").css({"width":w+"px","height":$(".content").height()+"px"});
				$(".content-monday").parent().css({"width":w+"px","height":600+"px"});
				$(".content").parent().css({"width":w+"px","height":600+"px"});
				
				$(".content,.slides,.madness").css({"width":(67*w)/100+"px","height":600+"px"});
				$(".slides div").css({"left":(((33*w)/100)*30)/100 +"px","top":(h-110)/2+"px"});
				$(".allslides").css({"width":((67*w)/100)*3+"px","height":600+"px"});
				$("#beautifi,#packages,#massa").css({"height":600+"px","left":((33*w)/100)-560+"px"});
				$("#madness").css({"height":600+"px"});
				$(".beauti-inner").css({"top":0+"px"});
				
			$(".madness-inner").css({"top":(h-250)/2+"px"});
			
			

			}
			if($(window).width()<545)
			
			{
				$(".head").css({"left":(((33*w)/100)-140)/2 +"px","top":(h-570)/2+"px"});
				$(".slides div").css({"left":(((1*w)/100)*30)/100 +"px","top":(h-110)/2+"px"});
				$(".content-contact").parent().find("header").find(".head").css({"top":(1135-570)/2+"px"});
				//$(".allslides").css({"width":((67*w)/100)*3+30+"px","height":h+"px"});
			}
			
			if($(window).width()<500)
			
			{
				$("header").css({"width":w+"px","height":100+"px"});
				$(".content,.slides,.contact").css({"width":w+"px","height":h+"px"});
				$(".madness,.content-monday").css({"width":w+"px","height":h-100+"px"});
				$(".head").css({"left":0 +"px","top":10+"px"});
				$(".slides div").css({"left":(w-315)/2+"px","top":(h-110)/2+"px"});
				$(".logo").css({"left":((w-140)/2)-50 +"px"});
				$("nav").css({"left":((w-165)/2)+"px"});
				$(".allslides").css({"width":w*3+"px","height":h+"px"});
				$(".about").css({"left":(w-400)/2 +"px","top":(h-385)/2+"px"});
				$(".contact-inner").css({"left":(w-280)/2+"px","top":(h-510)/2+"px"});
				
				$(".content-contact,.contact").css({"width":w+"px","height":1200+"px"});
				
				$("#beautifi,#packages,#massa").css({"height":h+"px","left":((33*w)/100)-560+"px"});
				$("#madness").css({"height":h+"px"});
				
				$(".beauti-inner").css({"top":(h-570)/2+"px"});
				$(".madness-inner").css({"top":(h-250)/2+"px"});;
				
			}
			
			if($(window).width()<420)
			{	
				$(".about").css({"left":(w-290)/2 +"px","top":20+"px"});
			}
			
			if($(window).width()<370)
			{	
				$(".content-about").parent().css({"overflow":"visible"});
			}
			


					
			
			
		//	
			
			$(".slide1 div,#beauti").click(function(){
				
				slideanistop = true;
				current = 0;
				if(animationcom)
				{
					animationcom = false;
					
					if($(window).width()<359)
			
					{
						$("#beautifi,#packages,#massa").css({"height":605+"px"});
						$(".beauti-inner").css({"top":30+"px"});
					}
					
					if($(window).width()>500)
					{
						$("#packages,#massa").animate({"left":((33*w)/100)-360+"px","z-index":10},
							  {
								 duration: 500,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slide1 div").fadeOut(500);
										$(".slide2 div,.slide3 div").css("display","block");
										$("#beautifi").animate({"left":((32*w)/100)+"px","z-index":200},1500,"easeInOutQuint");
										animationcom = true;
										slideanistop = false;
							  	    }
						});
					}
					else
					{
						$("header").animate({"margin-top":"-100px","width":w+"px","height":100+"px"},700,"easeInOutQuint");
						$("nav").css("display","none");
						$("#beautifi").fadeIn(1);
						$("#packages,#massa").animate({"left":((33*w)/100)-560+"px","z-index":10},
							  {
								 duration: 500,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slide1 div").fadeOut(500);
										$(".slide2 div,.slide3 div").css("display","block");
										$("#massa,#packages").css("display","none");
										$("#beautifi").animate({"left":0+"px","z-index":200},1500,"easeInOutQuint");
										animationcom = true;
										slideanistop = false;
							  	    }
						});
					}

				}
				
			});
			
			$("#pack,.slide3 div").click(function(){
				
				slideanistop = true;
				current = 2;
				if(animationcom)
				{
					animationcom = false;
										
					if($(window).width()<359)
			
					{
						$("#beautifi,#packages,#massa").css({"height":605+"px"});
						$(".beauti-inner").css({"top":30+"px"});
					}
					
					if($(window).width()>500)
					{
					$("#beautifi,#massa").animate({"left":((33*w)/100)-360+"px","z-index":10},
								  {
									 duration: 500,
									 ease:"easeInOutQuint",
									 complete: function ()
										{
											
											$(".slide3 div").fadeOut(500);
											$(".slide2 div,.slide1 div").css("display","block");
											$("#packages").animate({"left":((32*w)/100)+"px","z-index":200},1500,"easeInOutQuint");
											animationcom = true;
											slideanistop = false;
										}
								});
					}
					else
					{
						 $("header").animate({"margin-top":"-100px","width":w+"px","height":100+"px"},700,"easeInOutQuint");
						 $("nav").css("display","none");
						 $("#packages").fadeIn(1);
						$("#beautifi,#massa").animate({"left":((33*w)/100)-560+"px","z-index":10},
								  {
									 duration: 500,
									 ease:"easeInOutQuint",
									 complete: function ()
										{
											
											$(".slide3 div").fadeOut(500);
											$(".slide2 div,.slide1 div").css("display","block");
											$("#beautifi,#massa").css("display","none");
											$("#packages").animate({"left":0+"px","z-index":200},1500,"easeInOutQuint");
											animationcom = true;
											slideanistop = false;
										}
								});
					}
				}
				
			});
			
			$("#massage,.slide2 div").click(function(){
				
				slideanistop = true;
				current = 1;
				if(animationcom)
				{
					animationcom = false;
										
					if($(window).width()<359)
			
					{
						$("#beautifi,#packages,#massa").css({"height":605+"px"});
						$(".beauti-inner").css({"top":30+"px"});
					}
					
					if($(window).width()>500)
					{
						$("#beautifi,#packages").animate({"left":((33*w)/100)-360+"px","z-index":10},
							  {
								 duration: 500,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slide2 div").fadeOut(500);
										$(".slide1 div,.slide3 div").css("display","block");
										$("#massa").animate({"left":((32*w)/100)+"px","z-index":200},1500,"easeInOutQuint");
										animationcom = true;
										slideanistop = false;
							  	    }
							});
					}
					else
					{
						  $("header").animate({"margin-top":"-100px","width":w+"px","height":100+"px"},700,"easeInOutQuint");
						  $("nav").css("display","none");
						  $("#massa").fadeIn(1);
						  $("#beautifi,#packages").animate({"left":((33*w)/100)-560+"px","z-index":10},
							  {
								 duration: 500,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										
										$(".slide2 div").fadeOut(500);
										$("#beautifi,#packages").css("display","none");
										$(".slide1 div,.slide3 div").css("display","block");
										$("#massa").animate({"left":0+"px","z-index":200},1500,"easeInOutQuint");
										animationcom = true;
										slideanistop = false;
							  	    }
							});
					}
				
				}
			});
			
			$(".xbtn").click(function(){
				
				if($(window).width()>500)
				
				{
					$(".allinfo").animate({"left":((33*w)/100)-360+"px","z-index":10},1000,"easeInOutQuint");
				}
				else
				{
					$(".allinfo").animate({"left":((33*w)/100)-560+"px","z-index":10},
					  {
						 duration: 10,
						 ease:"easeInOutQuint",
						 complete: function ()
							{
								$("header").animate({"margin-top":"0px"},10,"easeInOutQuint");
								$(".allinfo").fadeOut(200);
							}
					});
				}
				
				if(current == 0)
					$(".slide1 div").fadeIn(500);
					
				if(current == 1)
					$(".slide2 div").fadeIn(500);
					
				if(current == 2)
					$(".slide3 div").fadeIn(500);
					
				slideanistop = true;
					
				
			});
			
			
//		$(".resp-nav").click(function(){
//			
//			$("header").animate({"width":w+"px","height":h+"px"},1000,"easeInOutQuint");
//		
//		});

/*			$(".resp-nav").toggle(function() {
				 $(".content-about").parent().css({"overflow":"hidden"});
				 $("header").animate({"width":w+"px","height":h+"px"} ,
				 			{
								 duration: 500,
								 ease:"easeInOutQuint",
								 complete: function ()
								  	{
										$("nav").css({"top":(h-320)/2+"px"});
										$("nav").fadeIn(3000);
										//$("nav").animate({"margin-top":"0px"},700,"easeInOutQuint");
							  	    }
							});
							
			}, function() {
				 $("nav").css("display","none");
				 $("header").animate({"width":w+"px","height":100+"px"},1000,"easeInOutQuint");
				 $(".content-about").parent().css({"overflow":"visible"});
			});*/
			
			$(".resp-nav").toggle(function() {
				if(headerclosed && issliding)
				{
				 headerclosed = false;
				 issliding = false;
				 $(".content-about").parent().css({"overflow":"hidden"});
				 $("header").css({"width":w+"px","height":h+"px"});
				 	setTimeout( function() {
          				$("nav").css({"top":(h-320)/2+"px"});
						$("nav").fadeIn(700);
												
       				}, 500)
				}
			}, function() {
				if(!headerclosed)
				{
				 $(".content-about").parent().css({"overflow":"visible"});
				 
						//$("nav").css("display","none");
				 headerclosed = true;
				 	setTimeout( function() {
						
				 		$("header").css({"width":w+"px","height":100+"px"});
						$("nav").css("display","none");
						issliding = true;
												
       				}, 200)
				}
			});
			
		}
	


	
	resize();
	
$(window).resize(function(){
	resize();	
	
});/// resize function
	
	

	
	$("#InputEmail").focus(function(){
		if(this.value == this.defaultValue || this.value == "Please enter a valid email address")
		{
			$("#InputEmail").attr("value","");
		}
	}); // input email focus
	
	
	
	$("#InputEmail").focusout(function(){
		if(this.value == "")
			$("#InputEmail").attr("value","Email");
		else
		{
		  var Check = this.value.toString();
			if (Check.indexOf("@") != -1 && Check.indexOf(".") != -1 && Check.lastIndexOf("@")<Check.lastIndexOf(".")) 
			{
				// valid email format do nothing
			} 
			else 
			{
				$("#InputEmail").attr("value","Please enter a valid email address");
			} // if else  check email format
		} // if(this.value == "")
	}); // email focus out
	/////////////  sender email field


	$("#InputName").focus(function(){
		if(this.value == this.defaultValue || this.value == "Full name required")
		{
			$("#InputName").attr("value","");
		}
	}); // input first name focus
	
	
	
	$("#InputName").focusout(function(){
		if(this.value == "")
		{
			$("#InputName").attr("value","Full Name");
		}
		else
		{
			//inputName.attr("value","First and Last Name Required");
			//sym.getSymbol("cf1").play(sym.getSymbol("cf1").getPosition());
		}
	}); // inputName focus out
	////////// First name
	
	$("#InputPhone").focus(function(){
		if(this.value == this.defaultValue || this.value == "Phone number required")
		{
			$("#InputPhone").attr("value","");
		}
	}); // input name focus
	
	
	
	$("#InputPhone").focusout(function(){
		if(this.value == "")
		{
			$("#InputPhone").attr("value","Phone");
		}
		else
		{
			//inputPhone.attr("value","Phone number required");
			//sym.getSymbol("cf2").play(sym.getSymbol("cf2").getPosition());
		}
	}); // inputphone focus out
	////////// phone number

	formValidate = function()
	{
			var valid=true;
			var emailInfo = $("#InputEmail").attr("value").toString();
			var email_validate = false;
			if (emailInfo.indexOf("@") != -1 && emailInfo.indexOf(".") != -1 && emailInfo.lastIndexOf("@")<emailInfo.lastIndexOf(".")) 
			{
				email_validate = true;
			} 
			else 
			{
				$("#InputEmail").attr("value","Please enter a valid email address");
				valid=false;
			} // if else  check email format



			var firstnameInfo = $("#InputName").attr("value").toString();
			var firstname_validate = false;
			if(firstnameInfo == "Full Name")
			{
				$("#InputName").attr("value","Full name required");
				valid=false;
			}
			if($("#InputName").attr("value").toString() != "Full name required")
				firstname_validate = true;





			var phoneInfo = $("#InputPhone").attr("value").toString();
			var phone_validate = false;
			if(phoneInfo == "Phone")
			{
				$("#InputPhone").attr("value","Phone number required");
				valid=false;
			}
			if($("#InputPhone").attr("value").toString() != "Phone number required")
				phone_validate = true;


			var messageInfo = $("#InputMessage").attr("value").toString();
			

	/*		if(email_validate && firstname_validate && phone_validate)
			{

				var fullname = $("#InputName").attr("value").toString();
				var email = $("#InputEmail").attr("value").toString();
				var phoneNumber = $("#InputPhone").attr("value").toString();
				var message = $("#InputMessage").attr("value").toString();


				$.ajax({
					 type: "POST",
					 url:"http://www.admate.me/webmate/spadevie/basic_mail.asp", 
					 data: "Full Name=" + fullname + "&email=" + email + "&phoneNumber=" + phoneNumber + "&message=" + message ,
					 success: function(msg) {
						alert("Thank You")
					 },
					 error: function(err) {
						//alert("fuck u")
					 }
				}); // $.ajax

			} // if validated
			else
			{
				//sym.getSymbol("cf7").play(sym.getSymbol("cf7").getPosition());
			}*/	
			if(!valid)
			{
				$(".sent").html("Please Correct the missing fields...");
			}
		return valid;
	}
	//formValidate
	
	
/*$(window).bind("orientationchange", function(){
    var orientation = window.orientation;
    var new_orientation = (orientation) ? -90 : 90 + orientation;
    $('body').css({
        "-webkit-transform": "rotate(" + new_orientation + "deg)"
    });
});*/

$(window).bind('orientationchange', function(event) {
	
	if((navigator.userAgent.match(/Android/i)
     || navigator.userAgent.match(/webOS/i)
     || navigator.userAgent.match(/iPhone/i)
     || navigator.userAgent.match(/iPod/i)
     || navigator.userAgent.match(/BlackBerry/i)
     || navigator.userAgent.match(/Windows Phone/i)
     ))
	 
	 {
		 
			if (window.orientation == 90 || window.orientation == -90 || window.orientation == 270) 
			{
				$('meta[name="viewport"]').attr('content', 'height=device-width,width=device-height,initial-scale=0.4,maximum-scale=0.4');
				$(window).resize();
			} 
			else {
				$('meta[name="viewport"]').attr('content', 'height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0');
				$(window).resize();
			}
	}
    }).trigger('orientationchange'); 
	

});//document ready