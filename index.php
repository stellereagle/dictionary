<head>
  <?php session_start();  require('connection.inc.php');
  if(isset($_SESSION['id'])){
  include('header.inc.php');
  }
  <link rel='stylesheet' type='text/css' href='css/index.css' />
  <script type="text/javascript" src='js/index.js' > </script>
    <title>Beautiful Dictionary</title>
</head>
<body>
<div class='header'>
	<div class='nav'>
		<ul>
			<li>Home</li>
			<li>About</li>
		</ul>
	</div>
	<div class='logo'>
		<div class='h_l'>Dictionary Cool</div>
	</div>
</div>
</body>
