<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>My navbar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="index.blade.php" />
</head>
<body>
  
<nav>
  <div class="logo">
    <h4>ANISA SAFITRI</h4>
  </div>

  <ul class="slide">
    <li><a href="">Home</a></li>
    <li><a href="">Profile</a></li>
    <li><a href="">History</a></li>
    <li><a href="">About</a></li>
  </ul>

  <div class="menu-toggle">
    <input type="checkbox" name="" id="">
    <span></span>
    <span></span>
    <span></span>

  </div>
</nav>
<style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Montserrat', sans-serif;
    overflow-x: hidden;
  }

  /* Navbar */
  nav {
    display: flex;
    background-color: blueviolet;
    justify-content: space-around;
    /* padding: 20px 0; */
    color: white;
    height: 50px;
    align-items: center;
  }

  nav .logo {
    font-family: 'Pacifico', cursive;
    letter-spacing: 3px;

  }


  nav ul {
    display: flex;
    list-style: none;
    width: 40%;
    justify-content: space-between;
  }

  nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 0.8em;
  }

  nav ul li a:hover {
    color: white;
  }




/* hamburger menu */
.menu-toggle {
display: none;
flex-direction: column;
height: 20px;
justify-content: space-between;
position: relative;
}

.menu-toggle input {
  position: absolute;
  width: 40px;
  height: 28px;
  left: -5px;
  top: -3px;
  opacity: 0;
  cursor: pointer;
  z-index: 2;
}

.menu-toggle span {
  display: block;
  width: 28px;
  height: 3px;
  background-color: white;
  border-radius: 3px;
  transition: all 0.5s;
}

/* Hamburger menu animation */
.menu-toggle span:nth-child(4) {
  transform-origin: 0 100;
  
}

.menu-toggle input:checked ~span:nth-child(2) {
  background-color: white;
  transform: rotate(45deg) translate(-1px, -1px);
}

.menu-toggle input:checked ~span:nth-child(4) {
  background-color: white;
  transform: rotate(-45deg) translate(-1px, 0);
}

.menu-toggle input:checked ~span:nth-child(3) {
  opacity: 0;
  transform: scale(0);
}

  /* Responsive Breakpoint */

  /* ukuran tablet */
  @media screen and (max-width: 768px) {
    nav ul {
      width: 50%;
    }
  }

  /* ukuran mobile */
  @media screen and (max-width: 576px) {
    .menu-toggle{
      display: flex;
    }
    nav ul {
      position: absolute;
      right: 0;
      top: 0;
      width: 80%;
      height: 100vh;
      justify-content: space-evenly;
      flex-direction: column;
      align-items: center;
      background-color: blueviolet;
      z-index: -1;
      transform: translateX(100%);
      transition: all 1s;
      opacity: 0;
    }

    nav ul.slide {
      opacity: 1;
      transform: translateX(0);
    }
  }
</style>
<script src="script.js">
  const menuToggle = document.querySelector('.menu-toggle input');
  const nav = document.querySelector('nav ul');

  menuToggle.addEventListener('click', function () {
    nav.classList.toggle('slide');
  });
</script>

</body>
</html>