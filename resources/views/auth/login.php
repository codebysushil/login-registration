<?php
addPage('include/header.php');
?>

<h3 class="center pink uppercase">
login
</h3>
<form action="/submit-login" method="POST">
<div>
<label> Email </label>
<input name="email">
</div>
<div>
<label> Password </label>
<input name="password">
</div>
<button class="btn">Login</button>
<a href="/register">Register now ?</a>
</form>

<?php
addPage('include/footer.php');
?>
