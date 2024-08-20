<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>

<script>
	function createNotification(title, icon, body, url) {
		var notification = new Notification(title, {
			icon: icon,
			body: body,
		});
		// url that needs to be opened on clicking the notification
		// finally everything boils down to click and visits right
		notification.onclick = function() {
			window.open(url);
		};
		return notification;
	}
</script>

</html>

