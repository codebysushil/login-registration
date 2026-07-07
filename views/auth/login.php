<?php
addPage('include/header.php');
?>

<h3 class="center pink uppercase">
login
</h3>
<form action="/submit-login" method="POST">
email: <input name="email">
password: <input name="password">
<button>Login</button>
</form>

<?php
addPage('include/footer.php');
?>
