<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Island+Moments&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<style>
	.w-100{
	    width: 100%!important;
	    max-width: 100%;
	    height: 100%;
	    max-height: 100%;
	    background-size: contain;
	    background-position: center;
	    background-repeat: no-repeat;
	}

	.hide{
		display: none !important;
	}
	nav{
		left: 50%;
	    position: relative;
	    top: 50%;
	    transform: translate(-50%,-50%);
	    width: 265px;
	}
	.nav {
	  list-style: none;
	  margin: 0;
	  padding: 0;
	  text-align: center;

	}
	.nav li {
	  display: inline-block;
	  margin-right: -4px;
	  position: relative;
	}
	.nav li:before {
	      border-top: 1px solid #008723;
	  border-bottom: 1px solid #fff;
	  content: '';
	  display: block;
	  position: absolute;
	  top: 50%;
	  width: 100%;
	  height: 1px;
	  z-index: -1;
	}
	.nav a {
	  background-color: #f7f7f7;
	  background-image: linear-gradient(#00ff37, #ffffff);
	  border-radius: 50%;
	  box-shadow: 0 3px 8px #00440f, inset 0 2px 3px #81f59a;
	  color: #262174;
	  display: block;
	  font-family: 'Poiret One', cursive;
	  font-size: 32px;
	  line-height: 54px;
	  text-decoration: none;
	  margin: 36px;
	  position: relative;
	  width: 190px;
	  height: 190px;
	}
	.nav a:before {
	      background: #1f3bfb;
	    border-top: 2px solid #7a62ff;
	    border-radius: 50%;
	    box-shadow: inset 0 8px 48px #d9d4ff;
	  content: '';
	  display: block;
	  position: absolute;
	  left: -18px;
	  right: -18px;
	  top: -18px;
	  bottom: -18px;
	  z-index: -1;
	}
	.nav a:visited {
	  color: #a7a7a7;
	}
	.nav a:hover {
	  color: hsl(30, 70%, 50%);
	}
	.nav a:active {
	  background: #f5f5f5;
	}

	span{
	  position:relative;
	  top:40px
	}
	#countdown{
		font-family: 'Island Moments', cursive;
		font-family: 'Inspiration', cursive;
		font-size: 420px;
	    display: block;
	    left: 50%;
	    top: 50%;
	    transform: translate(-50%,-50%);
	    position: relative;
	    width: 490px;
	    color: #027e4a;
	}

</style>


<div id="ff" class="carousel slide carousel-fade hide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
  </div>
</div>

<script>
	
$(function() {
    console.log( "ready!" );
    var container = $("#ff div")[0];
    var html = "";
    let i = 1;
    let intervalMilliseconds = "5000"
    let interval = 'data-bs-interval="'+intervalMilliseconds+'"';

    html += '<div class="carousel-item active" '+ interval +'>';
    html +=  '<div style="background-image: url(foto/' + i + '.jpg)" class="d-block w-100" alt="..."></div>';
    html +=  '</div>';
    for(i=2; i<37; i++){
    	html += '<div class="carousel-item" '+ interval +'>';
    	html +=  '<div style="background-image: url(foto/' + i + '.jpg)" class="d-block w-100" alt="..."></div>';
    	html +=  '</div>';
    }
    container.innerHTML = html;

});
</script>
<script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
        $("nav")[0].classList.add("hide");
        var timeleft = 4;
        document.getElementById("countdown").innerHTML = "5...";
		var downloadTimer = setInterval(function(){
		  if(timeleft <= 0){
		    clearInterval(downloadTimer);
		    document.getElementById("countdown").innerHTML = "Finished";
		     document.getElementById("countdown").classList.add("hide");
		    $("#ff")[0].classList.remove("hide");
		  } else {
		    document.getElementById("countdown").innerHTML = timeleft + "...";
		  }
		  timeleft -= 1;
		}, 1000);
       


      }
</script>

    
<audio id="audio" src="audio.aac"></audio>
<div id="countdown"></div>
<nav>
  	<ul class="nav">
    	<li>
    		<a href="#" onclick="play()" >
    			<span>Start the Magic</span>
    		</a>
    	</li>
  	</ul>
</nav>
    
