
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-latest.js">
    </script>
<script src='https://www.google.com/recaptcha/api.js'>
    </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="jquery.particleground.min.js">
    </script>
<script>
       function onSubmit(token) {
         document.getElementById("form").submit();
       }
     </script>
<script>
jQuery(document).ready(function() {
    $('.grecaptcha-badge').appendTo("body"); //fix recaptcha positioning to body
			$('#body').particleground({
    dotColor: '#f19066',
    lineColor: '#f19066',
    density: "70000"
    });
});
$.initialize(".grecaptcha-badge", function() {
    $(this).appendTo("body"); //fix recaptcha positioning to body, even if it loads after the page
});
</script>
<link rel="stylesheet" type="text/css" href="adesigns.css">
<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>
      CSGO_FANTA | get' gooder
    </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<meta name="robots" content="index, follow" />
<meta name="mediapartners" content="index, follow" />
<title>CSGO_FANTA - Home</title>
<style>
.grecaptcha-badge{
    display: none;
}
</style>
<body id="body" name="body" style="background-color: #1B1B1D; color: #bdc3c7">
<center>
<div class="panel panel-default" id="loginL" style=" background-color: #1B1B1D; height: auto; width: 35%; display: inline; border-radius:0; border:0; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0px 0px 9px 4px rgba(0,0,0,0.27);">
<br><br><font color="#f19066"><h3> Become a sipper' </h3></font> <font size="2">FANTA.CLUB | <a href="index.php"> Sipper Cave' </a></font>
<div class="panel-body">
<div class="loader" id="load" style="display:none"></div><br><br>
<form class="form-horizontal" id="form" name="form" method="POST" action="/lib/lol.php">
<div class="form-group" id="boxes">
<input type="username" class="form-control" id="username" placeholder="Username" name="username" minlength=4 maxlength=12 style="background-color: #1B1B1D; color: #bdc3c7; width:85%; height:10%; border: none; text-align: center;" required>
<br><br>
<input type="password" class="form-control input-md" id="password" placeholder="Password" name="password" minlength=6 maxlength=24 style="background-color: #1B1B1D; color: #bdc3c7; width:85%; height:10%; border: none; text-align: center;" required>
<br><br>
<input type="email" class="form-control input-md" id="email" placeholder="Email Address" name="email" minlength=5 maxlength=40 style="background-color: #1B1B1D; color: #bdc3c7; width:85%; height:10%; border: none; text-align: center;" required>
<br><br>
<input type="text" class="form-control input-md" id="invitecode" placeholder="sipper-invitecode" name="invitecode" style="background-color: #1B1B1D; color: #bdc3c7; width:85%; height:10%; border: none; text-align: center;" required>
<br><br>
<button class="g-recaptcha btn btn-acchub2" data-badge="inline" data-sitekey="6LexNGQUAAAAAM85aSn76tkCa8-9ihTzytcGhpwS" data-callback='onSubmit' name="enter" id="enter" style="width:85%; height:15%;"> Request Fanta' Drink</button>
<br><br></div>
</form>
</div>
</div>
</center>
</body>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128981020-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128981020-1');
</script>
