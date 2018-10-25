<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
  font-family: bahnschrift;
}

header {
  position: fixed;
  width: 100%;
  background-color: rgba(255,255,255,0.90);
  z-index: 1;
  top: 0;
  right: 0;
  left: 0;
  box-shadow: 0 4px 5px 0 rgba(0,0,0,0.16),
              0 4px 10px 0 rgba(0,0,0,0.12);
  border-bottom: 15px solid #303030;
  outline: 3px solid #ce1818;
}

header .logo {
  margin-left: 9%;
  margin-top: .6%;
}

header nav {
  width: 70%;
  display: inline-block;
  vertical-align: top;
  margin-top: 1.7%;
}

header nav a {
  text-decoration: none;
  background: none;
  font-size: 26px;
  font-weight: bold;
  font-stretch: condensed;
  padding: 0 50px;
  color: #252525;
}

header nav a:hover {
  color: #ce1818;
}

nav ul {
  margin-left: 33%;
}

nav ul li {
  display: inline;
}

.container {
	max-width: 900px;
	margin: 0 auto;
}

footer {
  background: white;
  opacity: 80%;
  text-align: left;
  padding: 10px 0;
}

footer img {
  width: 50px;
}

</style>

<header class="top-nav">
  <div>
    <img  class="logo" src="./images/ntlogo1.png" width="150px" />
      <nav>
        <ul>
          <li><a href="#hero">home</a></li>
          <li><a href="#work">work</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
      </nav>
  </div>
</header>


	<div class="container">
		<h1>Missing fields</h1>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

		<ul>
			<?php
				for($i=0; $i<count($this->missing_required_fields); $i++){
					echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
			?>
		</ul>

		<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

	</div>

<footer>
  <div class="socialmedia">
    <a href="https://twitter.com"><img src="images/twitter.png" alt="twitter" title="twitter" /></a>
    <a href="https://instagram.com"><img src="images/instagram.png" alt="instagram" title="instagram" /></a>
    <a href="https://twitter.com"><img src="images/facebook.png" alt="facebook" title="facebook" /></a>
  </div>
</footer>
