<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
   
   
</head>
<body>
           

           <div class="container at-blank" style="max-width: 600px">            
        	<div id="alert_success" style="display:none;">
        		<div class="row">
        			<div class="col-md-12">
                    	<div class="alert alert-square alert-dismissable">
                      		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      		<div id="alert_success_text">
                    			<h3>Vielen Dank für Ihre Registrierung!</h3><br>
                                <p>Sie erhalten in Kürze eine E-Mail mit Ihren Zugangsdaten und weiterführenden Informationen von uns.</p><br>
                                <p>Bitte haben Sie etwas Geduld. Sollten Sie noch Fragen haben oder keine E-Mail erhalten, wenden Sie sich bitte an unseren Support.</p><br>
                                <p>Ihr Team ATHLETIQ</p><br><br><br><br><br><br><br><br><br><br><br>						
                            </div>
                    	</div>
                  	</div>
        		</div>
        	</div>
        	<div id="alert_error" style="display:none;">
        		<div class="row">
        			<div class="col-md-12">
                    	<div class="alert alert-danger alert-square alert-dismissable">
                      		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      		<div id="alert_error_text"></div>
                    	</div>
                  	</div>
        		</div>
        	</div>
        
        	<div class="row post_text">
        		<div class="col-sm-12">
        			<h3>Registrierung</h3>
        			<p>Legen Sie sich hier in wenigen Schritten einen ATHLETIQ-Account für Ihren Verein an.</p>
        		</div>
        	</div>
        	<form method="post" action="inc/post/mini_register.php" id="register_form" name="register_form" novalidate="novalidate">
        		<input type="hidden" id="settings_language" name="settings_language" value="DE">						    
        			    
        		<div id="sf1" class="frm post_text">
        			<fieldset>
        				<div class="row">
        					<div class="col-sm-12">
        					<div class="form-group">
        						<h4 class="at-uppercase">Ihr Verein</h4>
        						<label class="label label-square label-success" id="label-name">Vereinsname</label>
        						<div class="input-group input-group-square has-success" id="input-group-name" style="width: 100%;">
        							<input class="form-control validate unloadmsg valid" name="customer_name" type="text" aria-required="true" aria-invalid="false"><label id="customer_name-error" class="error" for="customer_name"></label>
        						</div>
        						<div class="error_validate">&nbsp;</div>
        
        						<label class="label label-square label-success" id="label-contact">Name (Verantwortlicher/Vorsitzender)</label>
        						<div class="input-group input-group-square has-success" id="input-group-contact" style="width: 100%;">
        							<input class="form-control validate valid" id="customer_contact" name="customer_contact" type="text" aria-required="true" aria-invalid="false"><label id="customer_contact-error" class="error" for="customer_contact"></label>
        						</div>
        						<div class="error_validate">&nbsp;</div>
        
        						<h4 class="at-uppercase">ATHLETIQ Administrator Zugang</h4>
        						<label class="label label-square label-success" id="label-email">E-Mail</label>
        						<div class="input-group input-group-square has-success" id="input-group-email" style="width: 100%;">
        							<input class="form-control validate valid" id="account_email" name="account_email" type="email" aria-required="true" aria-invalid="false"><label id="account_email-error" class="error" for="account_email"></label>
        						</div>
        						<div class="error_validate">&nbsp;</div>
        
        						<h4 class="at-uppercase">Ihre Domain</h4>
        						<span class="small">
        							Sie erhalten bei ATHLETIQ eine eigene Subdomain, so dass ihr Zugang über die Adresse https://<b>Subdomain</b>.ATHLETIQ.de erreichbar ist. Sie darf <b>4 bis 12</b> Zeichen lang sein. (Erlaubte Zeichen: A-Z, a-z, 0-9, - )
        						</span>
        						<br>
        						<label class="label label-square label-danger" id="label-domain">Subdomain</label>
        						<div class="input-group input-group-square has-error" id="input-group-domain" style="width: 100%;">
        							<input class="form-control validate" id="account_domain" name="account_domain" type="text" maxlength="12" aria-required="true" aria-invalid="true"><label id="account_domain-error" class="error" for="account_domain">&nbsp;Eingabe erforderlich.</label>
        						</div>
        						<br>
        						<div class="error_validate"></div>
        						<div id="check-domain-result" class="at-red"></div> 							
                                
                         
       					        </div>
                			        <p>
                			        </p><label id="confirm_agb-error" class="error" for="confirm_agb">Bitte die AGBs bestätigen</label><div class="input-group has-error" style="width: 100%;">
                						&nbsp;<div class="icheckbox_square-blue" style="position: relative;"><input name="confirm_agb" value="1" type="checkbox" class="validate" aria-required="true" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;&nbsp;Ich/wir akzeptiere/n die 
                                        <a style="text-decoration: underline" href="img/nutzungsbedingungen.pdf" title="NUTZUNGSBEDINGUNGEN" target="_blank">Nutzungsbedingungen</a>,
                                          den 
                            			<a style="text-decoration: underline" href="img/vertrag.pdf" title="VERTRAG ZUR AUFTRAGSVERARBEITUNG" target="_blank">&nbsp;Vertrag &nbsp;zur Auftragsverarbeitung</a>
                                        und die
                                      <a style="text-decoration: underline " href="img/datenschutzerklärung.pdf" title="Datenschutzerklärung" target="_blank">Datenschutzerklärung</a>
                					</div>
                			        <p></p>

	                          </div>
        						</div>
                    						    
        						<div class="form-group">
        						<button type="submit" class="btn btn-square at-uppercase enableOnInput um_button at-top-20">Registrieren</button>
        						</div>
        						    
        						</fieldset></div>
        					</form>
							</div>
							
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    <script src="main.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
</body>
</html>