<html>
<head>
	<link rel="stylesheet" type="text/less" href="less/base.less" />
	<link rel="stylesheet" type="text/css" href="http://gregoryloucas.github.io/Fontstrap/assets/font-awesome/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">
	<script type="text/javascript">
		less = { env: "development" };
	</script>
	<script src="less.js" type="text/javascript"></script>
	<script src="countdown.js" type="text/javascript"></script>	
	
	<script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1/prototype.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/effects.js"></script>	
	<script src="//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/controls.js"></script>	
</head>
<body>

<? foreach(
	array(
		array(
			"code" => "london",
			"tagline" => "The UK's<br/>Biggest &amp;<br/>Best Games<br/>Show",
			"aka" => "Eurogamer Expo",
			"date" => "25-28 September 2014, Earls Court, London, UK",
			"countdown" => "September 25, 2014 10:00:00"
		),
		array(
			"code" => "rezzed",
			"tagline" => "PC /<br/>INDIE/<br/>NEXT-GEN/<br/>GAMING CULTURE",
			"aka" => "Rezzed",
			"date" => "28-30 March 2014, The NEC, Birmingham, UK",
			"countdown" => "March 28, 2014 10:00:00"
		)
	)
	as $event
) { ?>	
	<div class="event <?=$event["code"]?>">	
			<section>
				<div>
					<a href="http://www.egx<?=$event["code"]?>.net" class="logo">
						<img src="splash-<?=$event["code"]?>.png"/>
					</a>
				</div>
				
				<div>
					<h2>
						<?=$event["tagline"]?>
					</h2>
					
					<p>
						Formerly known<br/>
						as <?=$event["aka"]?>
					</p>

					<div id="<?=$event["code"]?>-countdown" class="countdown">
						<div>
							<script>
								var counter<?=$event["code"]?> = countdown("<?=$event["code"]?>-countdown", "<?=$event["countdown"]?>");
							</script>
						</div>					
					</div>
				</div>
				
				<div>
					<ul>
						<li><a href="http://www.egx<?=$event["code"]?>.net"><i class="icon-external-link"></i> Visit website</a></li>
						<li><a href="http://www.egx<?=$event["code"]?>.net/tickets"><i class="icon-ticket"></i> Buy tickets</a></li>
						<li><a href="http://www.egx<?=$event["code"]?>.net/faq"><i class="icon-info"></i> Exhibitor information</a></li>
					</ul>

					<h3><?=implode(",<br/>", explode(",", $event["date"]))?></h3>
				</div>				

			</section>
	</div>
<? } ?>


</body>
</html>