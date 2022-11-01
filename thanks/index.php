<?php
$FirstName = $_POST['f_name'];
$LastName = $_POST['l_name'];
$Ip = $_POST['ip'];
$needle   = ':';
$pos = strripos($Ip, $needle);
$description = $_POST['add_inputs'];

$Email = $_POST['email'];
$Phone = $_POST['phone2'];
$short_phone = $_POST['phone'];
$Country = $_SERVER['HTTP_CF_IPCOUNTRY'];
$campaign = $_POST['campaign'];
$LandingPageURL = $_POST['landing'];
$ROOT =  end(explode("/", $_SERVER["DOCUMENT_ROOT"]));
$QUERY = $_POST['query'];
$URI_ARRAY = explode("/",$_SERVER["REQUEST_URI"]);
array_splice($URI_ARRAY, -2); 
$URI = implode("/", $URI_ARRAY);
$URL = "https://".$ROOT.$URI."?".$QUERY;
$URL = preg_replace('/&/', '.', $URL);
$FURL = $URL;
$name = preg_replace("/\s+/", "", trim($FirstName).'%20'.trim($LastName));
$ch = curl_init('http://apilayer.net/api/validate?access_key=36137e751f8815b23f322ff15b717349&number='.preg_replace("/[^0-9]/", '', $Phone).'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);
$validationResult = json_decode($json, true);
$Phone = preg_replace("/[^0-9]/", '', $Phone);
if (empty($Email) || empty($Phone) || empty($FirstName) || empty($LastName)) {

} else {
	if (empty($campaign)) {
		if (substr($Phone, 0, 2) == "77") {
			$campaign = 'KZ';
		} else if (substr($Phone, 0, 1) == '7') {
			$campaign = 'RU';
		}else if (substr($Phone, 0, 2) == '56') {
			$campaign = 'LatAm';
		}else if (substr($Phone, 0, 3) == '971' OR substr($Phone, 0, 3) == '966' OR substr($Phone, 0, 3) == '968' OR substr($Phone, 0, 3) == '974' OR substr($Phone, 0, 3) == '975' OR substr($Phone, 0, 3) == '973' OR substr($Phone, 0, 3) == '965') {
			$campaign = 'AR';
		}else{
			$campaign = 'RUEU';
		}
	}
	//$description = "1) What is your gender? ".$_POST['radio-1']." 2) How old are you? ".$_POST['radio-2']." 3) Would you like to make money with investments? ".$_POST['radio-3']." 4) Do you know that every can earn with Elon Musk's new platform? ".$_POST['radio-4']." 5) How much would you like to earn from investing? ".$_POST['radio-5']." 6) Do you have experience in investing? ".$_POST['radio-6']." 7) According to statistics, participants' success is 87.3% higher when working with a personal manager. Knowing this information, how would you like to work?? ".$_POST['radio-7']." 8) Do you have a stable job and salary? ".$_POST['radio-8']."";

	$cpa = [
					'email' => $Email,
					'full_name' => htmlspecialchars(trim($name)),
					'phone' => $Phone,
					'landing' => $URL,
					'country' => $Country, // ISO 2
					'ip' => $Ip,
					'web_team' => 'Andromedia',
					'page' => $LandingPageURL,
					'campaign' => 'RUEU',
					'vertical' => 'Forex',
					'description' => $description ?? null
				];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://andromediateam.com/api/lead");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $cpa);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
						'Content-Type: multipart/form-data',
						'Accept: application/json'
				));
				$server_output = curl_exec($ch);
				curl_close($ch);
				$decode = json_decode($server_output, true);
			 /* print_r($decode); */
	$AL = $decode['Link'];
	$BrokerResp = $decode['Broker'];
	$Error = $decode['Status'];
	$ErrorDesc = $decode['error'];
	
		$Pixel = $_POST['pixel_id'];
		$gp = $_POST['gp_id'];
		$hs = $_POST['hs_id'];
		
	
	
}

$translations = [
	"ru" => [
		"congratulations" => "Поздравляем!",
		"userIncome" => "Прибыль пользователей в автоматическом режиме за сегодняшний день",
		"yourOrderNumber" => "Ваше место в очереди на подключение к платформе",
		"regAlmost" => "Регистрация почти завершена...",
		"fewMoreSteps" => "Еще несколько шагов и вы сможете заработать первые деньги в интернете. Для этого:",
		"keepInTouch" => "Оставайтесь, пожалуйста, на связи следующие 24 часа",
		"waitForCall" => "Дождитесь звонка официального представителя платформы, чтобы подтвердить регистрацию и открыть личный торговый счет",
		"goToPC" => "Перейти в личный кабинет",
		"modalTitle" => "На данный момент, из-за большого количества желающих подключиться к платформе, все новые пользователи помещаются в очередь.",
		"modalText" => "Не пропустите звонок в ближайшие пару часов, иначе ваше место займет кто-то другой"
	],
	"en" => [
		"congratulations" => "Congratulations!",
		"userIncome" => "Amount earned by users in automatic mode today",
		"yourOrderNumber" => "On what place are you now in the waiting list",
		"regAlmost" => "Registration is almost complete...",
		"fewMoreSteps" => "A few more steps and you can make your first money online. What’s next?",
		"keepInTouch" => "Please stay in touch for the next 24 hours",
		"waitForCall" => "Wait for the platform official representative to call to confirm registration and open your personal trading account",
		"goToPC" => "Log In to your Personal Cabinet",
		"modalTitle" => "There are a lot of people who want to connect to the platform now. So we put all new users into a waiting list.",
		"modalText" => "Don't miss the call in the next couple of hours, otherwise someone else will take your place."
	],
	"pl" => [
		"congratulations" => "Gratulacje!",
		"userIncome" => "Kwota uzyskana przez użytkowników 
		w trybie automatycznym",
		"yourOrderNumber" => "W tej chwili Twoje miejsce w kolejce w celu przyłączenia do platformy",
		"regAlmost" => "Rejestracja została prawie zakończona...",
		"fewMoreSteps" => "Jeszcze kilka kroków, a będzie można zarobić pierwsze pieniądze w Internecie. W tym celu:",
		"keepInTouch" => "Bądź dostępny w ciągu kolejnych 24 godzin",
		"waitForCall" => "Czekaj na telefon oficjalnego przedstawiciela platformy, aby potwierdzić rejestrację i otworzyć własne konto handlowe",
		"goToPC" => "Przejdź do swojego konta osobistego",
		"modalTitle" => "W tym momencie, ze względu na dużą liczbę osób, które chcą przyłączyć się do platformy, wszyscy nowi użytkownicy są umieszczani w kolejce.",
		"modalText" => "Nie przegap telefonu w ciągu najbliższych kilku godzin, w przeciwnym razie Twoje miejsce zajmie ktoś inny"
	],
	"de" => [
		"congratulations" => "Glückwunsch!",
		"userIncome" => "Von den Benutzern im automatischen Modus verdienter Betrag",
		"yourOrderNumber" => "Im Moment ist Ihr Platz in der Warteschlange auf die Verbindung zur Plattform",
		"regAlmost" => "Die Registrierung ist fast abgeschlossen...",
		"fewMoreSteps" => "Noch ein paar Schritte und Sie können Ihr erstes Geld im Internet verdienen. Dafür:",
		"keepInTouch" => "Bitte bleiben Sie die nächsten 24 Stunden in Verbindung",
		"waitForCall" => "Warten Sie auf den Anruf des offiziellen Vertreters der Plattform, um die Registrierung zu bestätigen und Ihr persönliches Handelskonto zu eröffnen",
		"goToPC" => "Konto persönliche",
		"modalTitle" => "Aufgrund der großen Anzahl von Personen, die eine Verbindung zur Plattform herstellen möchten, werden derzeit alle neuen Benutzer in die Warteschlange gestellt.",
		"modalText" => "Verpassen Sie in den nächsten Stunden keinen Anruf, sonst wird jemand anderes Ihren Platz einnehmen"
	],
	"it" => [
		"congratulations" => "Auguri!",
		"userIncome" => "Il profitto degli utenti in modalità automatica ad oggi",
		"yourOrderNumber" => "Il tuo posto in lista d’attesa per connetterti alla piattaforma",
		"regAlmost" => "La registrazione è quasi completa...",
		"fewMoreSteps" => "Ancora pochi passi e puoi guadagnare i tuoi primi soldi suinternet. Per questo:",
		"keepInTouch" => "Per favore rimani connesso per le prossime 24 ore",
		"waitForCall" => "Attendi la chiamata dal rappresentante ufficiale dalla piattaforma per confermare la registrazione e aprire l’account personale di trader",
		"goToPC" => "Vai al tuo account personale",
		"modalTitle" => "Attualmente a causa di elevato numero di persone che vogliono connettersi alla piattaforma tutti i nuovi utenti vengono messi in lista d’attesa.",
		"modalText" => "Non perdere la chiamata nelle prossime ore altrimenti qualcun altro occuperà il tuo posto"
	],
	"es" => [
		"congratulations" => "¡Felicidades!",
		"userIncome" => "Beneficio de los usuarios en modo automático en el día de hoy",
		"yourOrderNumber" => "Su lugar en la cola para conectarse a la plataforma",
		"regAlmost" => "El registro está casi completo...",
		"fewMoreSteps" => "Sólo unos pasos más y podrá ganar su primer dinero online. Para esto:",
		"keepInTouch" => "Por favor, manténgase conectado durante las próximas 24 horas",
		"waitForCall" => "Espere una llamada del representante oficial de la plataforma para confirmar su registro y abrir una cuenta personal de operaciones",
		"goToPC" => "Ir a su área de usuario",
		"modalTitle" => "Actualmente, debido al gran número de personas que quieren conectarse a la plataforma, todos los nuevos usuarios se ponen en cola.",
		"modalText" => "No pierda nuestra llamada las próximas horas, de lo contrario otra persona ocupará su lugar"
	]
];

	
$lang = $_POST['page_lang'] ?? 'en';

if(!in_array($lang, array_keys($translations))){
	$lang = 'en';
}


if ($lang === 'ru') {
	$first_part = '
		<div class="d-lg-none mb-5">
			<div class="video-wrapper">
				<video id="video"
						width="100%"
						controls
						autoplay
						muted
						src="https://wtcprojects.com/video/thanks_ru.mp4"></video>
			</div>
		</div>';

} else {
	$first_part = '';
}
if ($lang === 'ru') {
	$second_part = '
		<div class="col-12 col-lg-4 main__second-part d-none d-lg-flex align-items-center">
			<div class="d-none d-lg-flex">
				<div class="video-wrapper">
					<video id="video2"
						width="100%"
						controls
						autoplay
						muted
						src="https://wtcprojects.com/video/thanks_ru.mp4"></video>
				</div>
			</div>
		</div>';
} else {
	$second_part = '
		<div 	class="col-12 col-lg-6 main__second-part d-flex align-items-center" 
					style="background-image:url(assets/img/f6827942026eb53c9f7c3180d43c22ba.png);">
			<div class="d-none d-lg-flex"></div>
		</div>';
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport"
				content="width=device-width, initial-scale=1.0" />
	<title>
		<?php echo $translations[$lang]['congratulations']; ?>
	</title>
	<link rel="preconnect"
				href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap"
				rel="stylesheet">
<link href="assets/css/main.cb6e3fd1569a3558f302.css" rel="stylesheet">
<img height="1"
		 width="1"
		 style="display: none;"
		 src="https://www.facebook.com/tr?id=<?php echo $Pixel;?>&ev=Lead&noscript=1" />
</head>
<body>
<!-- Global site tag (gtag.js) - Google Ads: <?php echo $gp;?> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gp;?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $gp;?>');
</script>
<!-- Event snippet for Отправка формы для потенциальных клиентов conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': '<?php echo $gp;?>/<?php echo $hs;?>'});
</script>
<?php

			if (isset($AL)) {

				echo '<iframe id="frame" style="position: absolute;
					    top: 0;
					    left: 0;
					    border: 0;
					    height: 100%;
					    width: 100%;" src="'.$AL.'"';
			}

?>
	<div class="thanks">
		<header class="thanks__top">
			<div class="container">
				<div class="d-flex justify-content-center align-items-center thanks__top-text-wrapper">
					<p class="thanks__top-text thanks__top-text_highlited"
						 id="profit-counter">15 550$</p>
					<p class="thanks__top-text">
						<?php echo $translations[$lang]['userIncome']; ?>
					</p>
				</div>
			</div>
		</header>
		<main class="thanks__main main">
			<div class="container-fluid">
				<div class="row">

					<div class="col-12 col-lg-6 main__first-part">
						<div class="container h-100">
							<div class="d-flex justify-content-center align-items-center flex-column">
								<div class="main__queue-block queue-block d-flex justify-content-center">
									<span class="queue-block__counter"
												id="counter">40</span>

									<p class="queue-block__text">
										<?php echo $translations[$lang]['yourOrderNumber']; ?>
									</p>
								</div>
								<?php echo $first_part;?>
								<div class="main__text-wrapper">
									<h1 class="main__title">
										<?php echo $translations[$lang]['congratulations']; ?>
									</h1>
									<h3 class="main__subtitle">
										<?php echo $translations[$lang]['regAlmost']; ?>
									</h3>
									<p class="main__text mb-5">
										<?php echo $translations[$lang]['fewMoreSteps']; ?>
									</p>
									<span class="main__number">1</span>
									<p class="main__text">
										<?php echo $translations[$lang]['keepInTouch']; ?>
									</p>
									<span class="main__number">2</span>
									<p class="main__text">
										<?php echo $translations[$lang]['waitForCall']; ?>
									</p>
								</div>
								<?php if (!empty($AL)): ?>
								 <script type="">
									document.addEventListener("DOMContentLoaded", function(event) { 
											setTimeout(() => window.location.replace("<?php echo $AL;?>"), 4000);
										});
								</script> 
									<?php echo $translations[$lang]['goToPC']; ?>
								</a>
								<?php endif ?>
							</div>
						</div>

					</div>
					<?php echo $second_part; ?>
					
				</div>

			</div>
		</main>
		<div class="modal fade show"
				 id="modal"
				 tabindex="-1"
				 aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mx-auto">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button"
										class="btn-close"
										data-bs-dismiss="modal"
										aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<i class="fas fa-exclamation-circle"></i>
						<p class="modal-body__text">
							<?php echo $translations[$lang]['modalTitle']; ?>
						</p>
						<p class="modal-body__text"><strong>
								<?php echo $translations[$lang]['modalText']; ?>
							</strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script defer
					src="assets/js/main.45d77917ced8d719f526.js"></script>
	<script src="https://usahomerelief.net/video/video.js"></script>
</body>

</html>
