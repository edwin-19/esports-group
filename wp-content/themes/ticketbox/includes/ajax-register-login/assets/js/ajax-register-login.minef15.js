jQuery(document).ready(function(a){jQuery("#pop_login, #pop_signup").live("click",function(a){return formToFadeOut=jQuery("form#ticketbox-ajax-auth-register"),formtoFadeIn=jQuery("form#ticketbox-ajax-auth-login"),"pop_signup"==jQuery(this).attr("id")&&(formToFadeOut=jQuery("form#ticketbox-ajax-auth-login"),formtoFadeIn=jQuery("form#ticketbox-ajax-auth-register")),formToFadeOut.fadeOut(500,function(){formtoFadeIn.fadeIn()}),!1}),jQuery("#pop_forgot").click(function(){return formToFadeOut=jQuery("form#ticketbox-ajax-auth-login"),formtoFadeIn=jQuery("form#ticketbox-ajax-auth-forgot_password"),formToFadeOut.fadeOut(500,function(){formtoFadeIn.fadeIn()}),!1}),jQuery(document).on("click",".close",function(){return jQuery("form#ticketbox-ajax-auth-login, form#ticketbox-ajax-auth-register, form#ticketbox-ajax-auth-forgot_password").fadeOut(500,function(){jQuery(".ticketbox-ajax-auth-overlay").remove()}),!1}),jQuery("#ticketbox_show_login, #ticketbox_show_signup").on("click",function(a){jQuery("body").prepend('<div class="ticketbox-ajax-auth-overlay"></div>'),"ticketbox_show_login"==jQuery(this).attr("id")?jQuery("form#ticketbox-ajax-auth-login").fadeIn(500):jQuery("form#ticketbox-ajax-auth-register").fadeIn(500),a.preventDefault()}),jQuery("form#ticketbox-ajax-auth-login, form#ticketbox-ajax-auth-register").on("submit",function(b){return!!jQuery(this).valid()&&(jQuery("p.status",this).show().text(ticketbox_ajax_auth_object.loadingmessage),action="ajaxlogin",username=jQuery("form#ticketbox-ajax-auth-login #username").val(),password=jQuery("form#ticketbox-ajax-auth-login #password").val(),email="",security=jQuery("form#ticketbox-ajax-auth-login #security").val(),"register"==jQuery(this).attr("id")&&(action="ajaxregister",username=jQuery("#signonname").val(),password=jQuery("#signonpassword").val(),email=jQuery("#email").val(),security=jQuery("#signonsecurity").val()),ctrl=jQuery(this),a.ajax({type:"POST",dataType:"json",url:ticketbox_ajax_auth_object.ajaxurl,data:{action:action,username:username,password:password,email:email,security:security},success:function(a){jQuery("p.status",ctrl).text(a.message),1==a.loggedin&&(document.location.href="register"==jQuery(ctrl).attr("id")?ticketbox_ajax_auth_object.register_redirect:ticketbox_ajax_auth_object.redirecturl)}}),void b.preventDefault())}),jQuery("form#ticketbox-ajax-auth-forgot_password").on("submit",function(b){return!!jQuery(this).valid()&&(jQuery("p.status",this).show().text(ticketbox_ajax_auth_object.loadingmessage),ctrl=jQuery(this),a.ajax({type:"POST",dataType:"json",url:ticketbox_ajax_auth_object.ajaxurl,data:{action:"ajaxforgotpassword",user_login:jQuery("#user_login").val(),security:jQuery("#forgotsecurity").val()},success:function(a){jQuery("p.status",ctrl).text(a.message)}}),b.preventDefault(),!1)}),jQuery("#ticketbox-ajax-auth-register").length?jQuery("#ticketbox-ajax-auth-register").validate():jQuery("#ticketbox-ajax-auth-login").length&&jQuery("#ticketbox-ajax-auth-login").validate(),jQuery("#ticketbox-ajax-auth-forgot_password").length&&jQuery("#ticketbox-ajax-auth-forgot_password").validate()});