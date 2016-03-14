<!DOCTYPE html>
<html>
	<head>
		
		<title>Librería</title>
		<link rel="stylesheet" href="/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	</head>
<body>


	 <nav class="#64b5f6 blue lighten-2">
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo">Ambientes de Programación</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a href="sass.html">Sass</a></li>
        		<li><a href="badges.html">Components</a></li>
        		<li><a href="collapsible.html">JavaScript</a></li>
      		</ul>
    	</div>
  	</nav>

	 <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-navigation-menu"></i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
      
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6"></br>
       	  <i class="material-icons prefix">account_circle</i>
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
         <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
       <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
        </div>
       </div>

    </form>
  	</div>

  	<div class="col s6">
  	<table>
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
      </div>        
</body>

</html>