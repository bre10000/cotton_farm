<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Gasha Studios: Home</title>
  <link rel="stylesheet" href="style/style.css" type="text/css" />
  <meta name="viewport" content="width=device-width, inital-scale=1.0"
</head>
<body>
  
  <img src="images/front.png" id="background"/>
  <header>
    
        
    <nav>
      <a href="#" id="menu-icon"></a>
      <ul>
        <li><a href="#" class="current">HOME</a></li>
        <li><a href="#services" >SERVICES</a></li>
        <li><a href="#about" >ABOUT</a></li>
      </ul>
    </nav>
  </header>
  <section id="main">
    
  </section>

<div id="services">
  <section>
    <img src="images/webpage.png" width="244.3" height="169"/>
    <h1>WEBPAGE <br> DESIGN</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>
  <section>
    <form action="/home" method="post">
      <?php echo csrf_field(); ?>
      <label> Name <input type="text" name="name" /> <br/> </label>
      <label> email <input type="text" name="email" /> <br/> </label>
      <label> Description <textarea name="description"></textarea><br/> </label>
      <input type="submit" value="submit"/>
    </form>
  </section>
  <section>
    <img src="images/graphics.png" width="244.3" height="169"/>
    <h1>GRAPHICS <br> STUDIO</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>



  <section>
    <img src="images/android.png" width="245" height="236"/>
    <h1>ANDROID <br/> APPLICATION <br/> DEVELOPMENT</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>
  <section>
    <img src="images/software.png" width="264" height="241.3"/>
    <h1>SOFTWARE <br> DEVELOPMENT</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>
  <section>
    <img src="images/networking.png" width="311.6" height="216"/>
    <h1>NETWORKING</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>
  <section>
    <img src="images/interior.png" width="311.6" height="216"/>
    <h1>INTERIOR <br> DESIGN</h1>
    <p>Lorem ipsum dolor sit amet,consecttur adipisicing elit, sed
        do eiusmod tempor incididunt</p>
  </section>
</div>
  <footer id="about">
    <section>
      <h3>CONTACT US</h3>
    </section>
    <section>
      <p><b>E-mail: </b>burukaddis@gmail.com</p>
      <p><b >Mobile Phone: </b>+251912349399</p>
    </section>

  </footer>
  <footer class="second">
      <p>&copy Copyright 2015 Gasha Studios Plc. All Rights Reserved</p>
  </footer>
</body>
</html>
