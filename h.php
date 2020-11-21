<?php include('backend/condb.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
   integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
   <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">

<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

  </head>
  <style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
@import url("https://fonts.googleapis.com/css?family=Cairo&display=swap");

body{
  background-color: #004c40;
}
#login-container{
  width: 450px;
  height: 375px;
  background-color: #00796b;
  border-radius: 10px;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
}
#login-container h3{
  font-family: 'Cairo', sans-serif;
  font-weight: normal;
  text-align: center;
  color: #ffffff;
  font-size: 2rem;
  margin-top: 25px;
  margin-bottom: 5px;
}
#login-container hr{
  margin-top: 15px;
  margin-bottom: 2.7rem;
  width: 250px;
  border-color: #ffffff;
}
#login-container .input-group{
  padding-left: 30px;
  padding-right: 30px;
}
#login-container .input-group span{
  background-color: #004c40;
  color: #ffffff;
  border-color: #004c40;
  border-radius: 10px 0px 0px 10px;
}
#login-container .input-group input{
  border: 1px solid #00796b;
  border-radius: 0px 10px 10px 0px;
  font-family: 'Cairo', sans-serif;
}
#login-container .input-group input:focus{
  box-shadow: none;
  border: 1px solid #00796b;
}

.container-checkbox {
  display: block;
  position: relative;
  padding-left: 55px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #ffffff;
  font-size: 15px;
}

.container-checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 30px;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 5px;
}

.container-checkbox:hover input ~ .checkmark {
  background-color: #ccc;
}

.container-checkbox input:checked ~ .checkmark {
  background-color: #004c40;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container-checkbox input:checked ~ .checkmark:after {
  display: block;
}

.container-checkbox .checkmark:after {
  left: 8px;
  top: 4px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.btn-customized{
  background-color: #004c40;
  margin-top: 30px;
  color: #ffffff;
  border-color: #004c40;
  font-family: 'Cairo', sans-serif;
  border-radius: 10px;
}

.btn-customized:hover, .btn-customized:focus, .btn-customized:active{
  color: #ffffff;
  border-color: #004c40;
}
  </style>
  <body>
