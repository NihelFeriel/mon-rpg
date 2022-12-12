

<link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
<div class="container">
<div class="fire">
<h1> <span class="fire">R</span><span class="burn">P</span><span class="burn">G</span><span class="fire">-</span><span class="burn">Bocal</span></h1>
</div>
<div class="button">
<a  href="#" onclick="document.getElementById('inscription-form').submit()">
<form action="inscription" method="'post" id="inscription-form">
</form>
<span class="fire">Inscription</span>
</a>

<a href="#" onclick="document.getElementById('login-form').submit()">
<form action="login" method="'post" id="login-form">
</form>
<span class="fire">Connexion</span>
</a>
</div>
</div>


<style>
  body {
  background-color: #111;
  color: #FFF;
  padding: 140px 0px 0px 0px;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
   
}

.button{
    display: flex;
    margin-top: 200px;
     margin-right: 5px;
}
a{
    margin-left: 30px;
}
h1 {
    align-content: center;
  background-color: rgba(256,256,256,.03);
  background-image: -webkit-linear-gradient(top, #111, #0c0c0c);
  background-image: -moz-linear-gradient(top, #111, #0c0c0c);
  background-image: -ms-linear-gradient(top, #111, #0c0c0c);
  background-image: -o-linear-gradient(top, #111, #0c0c0c);
  font-size: 2em;
  font-family: 'Amethysta', serif;
  text-align: center;
  line-height: 1.4em;
  text-transform: uppercase;
  letter-spacing: .3em;
  white-space:nowrap;
}

span {
  color: #000;
  font-family: 'Caesar Dressing', cursive;
  font-size: 5em;
  text-transform: lowercase;
  vertical-align: middle;
  letter-spacing: .2em;
}

.fire {
  animation: animation 1s ease-in-out infinite alternate;
  -moz-animation: animation 1s ease-in-out infinite alternate;
  -webkit-animation: animation 1s ease-in-out infinite alternate;
  -o-animation: animation 1s ease-in-out infinite alternate;
}

.burn {
  animation: animation .65s ease-in-out infinite alternate;
  -moz-animation: animation .65s ease-in-out infinite alternate;
  -webkit-animation: animation .65s ease-in-out infinite alternate;
  -o-animation: animation .65s ease-in-out infinite alternate;
}

@keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-moz-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-webkit-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-o-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}  
</style>