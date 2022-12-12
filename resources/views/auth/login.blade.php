<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    @foreach($errors->all() as $errors)
     {{$errors}}
     @endforeach
   

    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        
        <label for="pseudo">Email :</label>
        <input type="email" name="email" id="email"  placeholder="email" />
        <label for="password">Password :</label>
        <input type="password" name="password" id="password"  placeholder="Password" />
        <input type="submit" value="Envoyer" />
    </form>
    <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
  </div>
</body>
</html>

<style>
    body {
 background-image: url(https://images7.alphacoders.com/125/1250524.jpg);
 background-repeat: no-repeat;
 background-size: cover;
  height: 100vh;
  font-family: arial, sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  position: relative;
   
}
form {
   
  background: rgba(255, 255, 255, .3);
  padding: 3rem;
  margin-left: 500px;
  height: 320px;
  width: 300px;
  border-radius: 20px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  -moz-backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
  text-align: center;
}
input {
  background: transparent;
  border: none;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  padding: 1rem;
  width: 200px;
  border-radius: 50px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  -moz-backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
  color: white;
  font-weight: 500;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  transition: all .3s;
  margin-bottom: 2em;
}
input:hover,
input[type="email"]:focus,
input[type="password"]:focus{
  background: rgba(255,255,255,0.1);
  box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
    
input[type="button"] {
  margin-top: 10px;
  width: 150px;
  font-size: 1rem;
  cursor: pointer;
}

::placeholder {
  color: #fff;
}
.drop {
  background: rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
  position: absolute;
  transition: all 0.2s ease;
}

.drop-1 {
  height: 80px; width: 80px;
  top: -20px; left: -40px;
  z-index: -1;
}

.drop-2 {
  height: 80px; width: 80px;
  bottom: -30px; right: -10px;
}

.drop-3 {
  height: 100px; width: 100px;
  bottom: 120px; right: -50px;
  z-index: -1;
}

.drop-4 {
  height: 120px; width: 120px;
  top: -60px; right: -60px;
}

.drop-5 {
  height: 60px; width: 60px;
  bottom: 170px; left: 90px;
  z-index: -1;
}
  </style>


