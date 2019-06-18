<!DOCTYPE html>
<html lang="fr-FR">
    <head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Réinitialisation du mot de passe</h2>

		<div>
			Pour réinitialiser votre mot de passe {{ link_to('password/reset/' . $token, 'cliquez sur ce lien') }}.
			Ce lien expire dans {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
	</body>
</html>
