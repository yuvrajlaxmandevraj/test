<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Set up Your Business in RAK DAO</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

</head>

<body>
	<form method="POST">
		<input type="tel" id="phone" name="phone-full">
		<button>submit</button>
		<label id="message"></label>
	</form>

	<script>
		const input = document.querySelector("#phone");
		const form = document.querySelector("#form");
		const message = document.querySelector("#message");

		jQuery(document).ready(function($) {
			const iti = window.intlTelInput(input, {
				hiddenInput: "full_phone",
			});
		});
	</script>
</body>

</html>

<?php

if(isset($_POST) && count($_POST)){
	p($_POST);
}

function p($p, $exit = 1)
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    if ($exit == 1)
    {
        exit;
    }
} 

?>