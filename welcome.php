<?php
// Initialize session
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <!--<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">-->
          <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="app/css/handle-counter.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin:0;
            background-color: #d9f9c9;
        }
        .flex-container {
  display: flex;
  
  align-items: center;
  
}
.topbar {
    background-color: #e5e4e4;
    padding: 2em 2em 2em 0em;    
}

.flex-container > .id {    
    text-align: center;
    flex: 1;
    font-size: 4em; 
    line-height: 1em;   
}
.flex-container > .section {
    text-align: left;
    flex: 10;
    font-size: 2em;
    background-color: #c4c4c4;
    line-height: 0%;
    padding-left: 0.5em;   
}
.main-container {
    flex-direction: column;  
    align-items: flex-start;  
    /* margin:0.5em; */
    padding: 0.5em;
    width: 100%;
    background-color: #d9f9c9;
}
.form-control {
    text-align: center; 
    width: 40vw;   
    margin: 1em 0 1em 0 ;
}
.main-container .form-control .label {
    font-weight: bold;
    flex: 4;
}
.main-container .form-control .input {    
    flex: 1;    
}

.main-container .form-control .input > div input {
    background-color: #c4c4c4;
    border: #c4c4c4;    
    color: black;
}
.main-container .form-control .input > div button {
    background-color: #c4c4c4;
    color: black;
    border: #d9f9c9; 
}
#sub_btn {
    float: right;
    background-color: #c4c4c4;
    color: black;
    border: #d9f9c9; 
}
@media screen and (max-width: 1400px) {
    .form-control {
        width: 90vw; 
    }
}
@media screen and (max-width: 600px) {
    .form-control {
        flex-direction: column;
    }
    .main-container .form-control .input > div > input {
        width:70vw;
}
@media screen and (max-width: 350px) {
    .form-control {
        flex-direction: column;
    }
    .main-container .form-control .input > div input {
        width:60vw;
}
 </style>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</head>
<body>


<div class="flex-container topbar">
  <div class="id">
      <label><strong><? echo php echo $_SESSION['id']>1</strong></label>
  </div>
  <div class="section">
    <p>SECTION</p>
</div>
</div>
<div class="flex-container main-container">
    <forn action="" method="post" id="elect_form">
        
    <div class="form-control flex-container">
        <div class="label">
            VITALE
    </div>
    <div class="input">        
        <div class="input">        
            <div class="handle-counter" id="handleCounter1">
                <button class="counter-minus btn">-</button>
                  <input type="text" value="0" name="vitale">
                  <button class="counter-plus btn">+</button>
            </div>
        </div> 
    </div>        
    </div>
    <div class="form-control flex-container">
        <div class="label">
            CORALLO
    </div>
    <div class="input">        
        <div class="input">        
            <div class="handle-counter" id="handleCounter2">
                <button class="counter-minus btn">-</button>
                  <input type="text" value="0" name="corallo">
                  <button class="counter-plus btn">+</button>
            </div>
        </div> 
    </div>        
    </div>
    <div class="form-control flex-container">
        <div class="label">
            LIMOLI
    </div>
    <div class="input">        
        <div class="input">        
            <div class="handle-counter" id="handleCounter3">
                <button class="counter-minus btn">-</button>
                  <input type="text" value="0" name="limoli">
                  <button class="counter-plus btn">+</button>
            </div>
        </div> 
    </div>        
    </div>
    <div class="form-control flex-container">
        <div class="label">
            ALBELICI
    </div>
    <div class="input">        
        <div class="input">        
            <div class="handle-counter" id="handleCounter4">
                <button class="counter-minus btn">-</button>
                  <input type="text" value="0" name="albelici">
                  <button class="counter-plus btn">+</button>
            </div>
        </div> 
    </div>        
    </div>
    <div class="form-control flex-container">
        <div class="label">
            LANZAFEME
    </div>
    <div class="input">        
        <div class="input">        
            <div class="handle-counter" id="handleCounter5">
                <button class="counter-minus btn">-</button>
                  <input type="text" name="lanzafeme" value="0">
                  <button class="counter-plus btn">+</button>
            </div>
        </div> 
    </div>        
    </div>
    <div class="form-control flex-container">
        <div class="label">
            TOTAL
    </div>
    <div class="input">        
        <div class="handle-counter" id="handleCounter6">
            <button class="counter-minus btn">-</button>
              <input type="text" value="0" id="total">
              <button class="counter-plus btn">+</button>
        </div>
    </div>            
    </div>    

    
    
</form>
</div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="app/js/handleCounter.js"></script>
<script>
    $(function ($) {
        var options = {
            minimum: 0,
            maximize: 10,
            onChange: valChanged,
            onMinimum: function(e) {
                console.log('reached minimum: '+e)
            },
            onMaximize: function(e) {
                console.log('reached maximize'+e)
            }
        }
        $('#handleCounter1').handleCounter(options)
        $('#handleCounter2').handleCounter(options)
        $('#handleCounter3').handleCounter(options)
        $('#handleCounter4').handleCounter(options)
        $('#handleCounter5').handleCounter(options)
        $('#handleCounter6').handleCounter(options)
        
    })
    function valChanged(d) {
//            console.log(d)
    }
</script>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

$('.counter-minus').on('click', function() {
    alert();
    $('#elect_form').trigger('submit');
});

</script>
</body>
</html>