<script>
	$(document).ready(function(){
	  $("input").iCheck({
	    checkboxClass: "icheckbox_square-blue",
	    radioClass: "iradio_square-blue",
	    increaseArea: "20%" // optional
	  });
	});
						    
	$.fn.insertAt = function(index, $parent) {
	    return this.each(function() {
	        if (index === 0) {
	            $parent.prepend(this);
	        } else {
	            $parent.children().eq(index - 1).after(this);
	        }
	    });
	}
						    
	// Select Language
	$(document.body).on(\'click\',\'#dropdown_language li\', function(event) {
	   var $target = $(event.currentTarget);
	   $target.closest(\'.btn-group\')
	      .find(\'[data-bind="label"]\').text($target.text())
	         .end()
	      .children(\'.dropdown-toggle\').dropdown(\'toggle\');
	   $("#settings_language").val($target.data("value"));
	   return false;
	});
						    
	$(document.body).on(\'click\',\'#dropdown_country li\', function(event) {
	   var $target = $(event.currentTarget);
	   $target.closest(\'.btn-group\')
	      .find(\'[data-bind="label"]\').text($target.text())
	         .end()
	      .children(\'.dropdown-toggle\').dropdown(\'toggle\');
	   $("#contact_country").val($target.data("value"));
	   return false;
	});
						    
						    
	var valform = $("#register_form").validate({
		groups: {
	        checks: checkbox_names
	    },
    	rules: {
			customer_name: {
				required: true
			},
			customer_contact: {
				required: true
			},
			contact_street: {
				required: true
			},
			contact_zip: {
				required: true
			},
			contact_city: {
				required: true
			},
			contact_country: {
				required: true,
			},
			contact_email: {
				required: true,
				email: true
			},
			contact_phone_1: {
				required: true,
			},
			account_firstname: {
				required: true,
			},
			account_lastname: {
				required: true,
			},
			account_email: {
				required: true,
				email: true
			},
			account_pw_1: {
				required: true,
				minlength: 8
			},
			account_pw_2: {
				required: true,
				minlength: 8,
				equalTo : "#account_pw_1"
			},
			account_domain: {
				required: true,
				minlength: 4,
				maxlength: 12
			},
			account_logo : {
				required: true,
				minlength: 1
			},
			"settings_discipline[]": {
                required: true,
            },
			"confirm_agb": {
                required: true,
            }
		},
		messages: {
			customer_name: {
				required: "&nbsp;'.ERROR_REQUIRED_NAME.'"
			},
			customer_contact: {
				required: "&nbsp;'.ERROR_REQUIRED_CONTACT.'"
			},
			contact_street: {
				required: "&nbsp;'.ERROR_REQUIRED_STREET.'"
			},
			contact_zip: {
				required: "&nbsp;'.ERROR_REQUIRED_PLZ.'"
			},
			contact_city: {
				required: "&nbsp;'.ERROR_REQUIRED_CITY.'"
			},
			contact_country: {
				required: "&nbsp;'.ERROR_REQUIRED_COUNTRY.'"
			},
			contact_email: {
				required: "&nbsp;'.ERROR_REQUIRED_EMAIL.'",
				email: "&nbsp;'.ERROR_REQUIRED_EMAIL.'",
			},
			contact_phone_1: {
				required: "&nbsp;'.ERROR_REQUIRED_PHONE.'"
			},
			account_firstname: {
				required: "&nbsp;'.ERROR_REQUIRED_NAME.'"
			},
			account_lastname: {
				required: "&nbsp;'.ERROR_REQUIRED_NAME.'"
			},
			account_email: {
				required: "&nbsp;'.ERROR_REQUIRED_EMAIL.'",
				email: "&nbsp;'.ERROR_REQUIRED_EMAIL.'",
			},
			account_pw_1: {
				required: "&nbsp;'.ERROR_REQUIRED_PW.'",
				minlength: "&nbsp;'.ERROR_PW_LENGTH.'"
			},
			account_pw_2: {
				required: "&nbsp;'.ERROR_REQUIRED_PW.'",
				minlength: "&nbsp;'.ERROR_PW_LENGTH.'",
				equalTo : "&nbsp;'.ERROR_PW_CONFIRM.'"
			},
			account_domain: {
				required: "&nbsp;'.ERROR_REQUIRED.'",
				minlength: "&nbsp;'.ERROR_REQUIRED.'",
				maxlength: "&nbsp;'.ERROR_REQUIRED.'"
			},
			account_logo : {
				required: "'.ERROR_NO_LOGO.'",
				minlength: "'.ERROR_NO_LOGO.'"
			},
			"settings_discipline[]": {
                required: "'.ERROR_REQUIRED_DISCIPLINES.'"
            },
            "confirm_agb": {
                required: "'.ERROR_REQUIRED_AGB.'"
            }
		},
		errorPlacement: function(error, element) {
			if (element.attr("type") == "checkbox") {
				error.insertBefore($(element).closest(".input-group"));
			}
        	else error.insertAfter($(element));
		},
		highlight: function(element) {
			SubmitLoadingHide();
		    $(element).closest(".input-group").removeClass("has-success").addClass("has-error");
			$(element).closest(".input-group").prev(".label").removeClass("label-success").addClass("label-danger");
		},
		success: function(element) {
		    $(element).closest(".input-group").removeClass("has-error").addClass("has-success");
			$(element).closest(".input-group").prev(".label").removeClass("label-danger").addClass("label-success");
			$("#register_form").data("submitted", false);
		}
	});
                    
                    
                    
	$("#register_form").preventDoubleSubmission();
	$("#register_form").ajaxForm({
		beforeSubmit: validateForm,
		success: showResponse
	});

	$.validator.addMethod("require-one", function(value) {
	    return $(".require-one:checked").size() > 0;
	}, "'.ERROR_REQUIRED_SELECT.'");
	    
	var checkboxes = $(".require-one");
	var checkbox_names = $.map(checkboxes, function(e, i) {
	    return $(e).attr("name")
	}).join(" ");
	    
    function validateForm(formData, jqForm, options) {
			SubmitLoadingShow(\''.BUTTON_REGISTER.'\');						
		    return true;
	}

	function showResponse(responseText, statusText, xhr, $form)  {
		if(responseText == "success")
		{
			$(window).unbind("beforeunload");
			$("#register_form").data("submitted", false);
			//$("#alert_success_text").load("inc/load/registersuccess.php");
			//$("#register_container").hide();
			//$("#alert_error").show();
			$("#alert_success").show();
            $(".success_text").show();
            $(".post_text").hide();

		}
		else
		{
			$("#register_form").data("submitted", false);
			$("#alert_error_text").html(responseText);
			$("#alert_success").hide();
			$("#alert_error").show();
		}
		SubmitLoadingHide();
	}
	    
	function checkDomain(domain)
	{
		$.post( "inc/post/check_domain.php", { domain: domain })
		  .done(function( data ) {
		    if(data != "success") {
				return true;
			} else {
				return false;
			}
		});
	}
	    
	$( "#account_domain" ).keyup(function() {
		var domain = $( "#account_domain" ).val();
		$.post( "inc/post/check_domain.php", { domain: domain })
		  .done(function( data ) {
		    if(data != "success") {
				$( "#check-domain-result" ).html(data);
				$( "#input-group-domain" ).removeClass("has-success").addClass("has-error");
				$( "#label-domain" ).removeClass("label-success").addClass("label-danger");
                $(".enableOnInput").prop("disabled", true);
			} else {
				$( "#check-domain-result" ).html("");
				$( "#input-group-domain" ).removeClass("has-error").addClass("has-success");
				$( "#label-domain" ).removeClass("label-danger").addClass("label-success");
                $(".enableOnInput").prop("disabled", false);
			}
		});
	});
	    

	    
	$("#uploadImage").bootstrapFileInput();
	function add_image() {
		$("#modal-title").text("Logo Upload");
		$("#modal-body-content").load("inc/load/upload_image.php");
		$("#modal-dialog").modal({show:true});
	}
	    
	$("#modal-dialog").on(\'hidden.bs.modal\', function () {
		$.get( "inc/load/get_image.php", function( data ) {
			$("#account_logo").val(data);
		});
	})

	// check sub-Domain validity
	$(".checkdomainvalidity").click(function() { 
		var domain = $( "#account_domain" ).val();
		$.post( "inc/post/check_domain.php", { domain: domain })
		  .done(function( data ) {
		    if(data != "success") {
				$( "#check-domain-result" ).html(data);
				$( "#input-group-domain" ).removeClass("has-success").addClass("has-error");
				$( "#label-domain" ).removeClass("label-success").addClass("label-danger");
			} else {
				$( "#check-domain-result" ).html("");
				$( "#input-group-domain" ).removeClass("has-error").addClass("has-success");
				$( "#label-domain" ).removeClass("label-danger").addClass("label-success");
								
				if (valform.form()) {
					$(".frm").hide("fast");
					$("#sf5").show("slow");
				}
			}
		});						
	});	


	    
	$(".unloadmsg").change(function() {
      $(window).bind("beforeunload", function() {
         return "Wollen Sie die Seite wirklich verlassen?";
      });
	});

// accordion

//$(document).ready(function(){

//var i;

//for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function() {
        
//        var panel = this.nextElementSibling;
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });
//}

//});
  
</script>