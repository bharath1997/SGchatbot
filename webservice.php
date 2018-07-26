<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$temp="abc";
	$intentname = $json->queryResult->intent->displayName;
	$text =  $json->queryResult->intent->displayName;
	//$gameurl = "https://www.usa-dev.usa.nyxop.net/games/table-games/blackjack-atlantic-city-multihand/play/real/";
	
	switch ($intentname) {
		
		case 'HomePage':
			$speech = '{"text": "Redirecting you to the home Page", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
			break;
		
		case 'SportsBetting':
			$speech = '{"text": "Redirecting you to the Sports betting Page", "URL":"https://www.usa-dev.usa.nyxop.net/sports/"}';
			break;
			
		case 'multiplebonus':
			$speech = '{"text": "Redirecting you to the bonus page", "URL":"https://www.usa-dev.usa.nyxop.net/p/bonus-policy/"}';
			break;
		
		case 'bonuspolicy':
			$speech = '{"text": "Redirecting you to the bonus page", "URL":"https://www.usa-dev.usa.nyxop.net/p/bonus-policy/"}';
			break;
		
		case 'bonuspromotion':
			$speech = '{"text": "Redirecting you to the Promotion Page", "URL":"https://www.usa-dev.usa.nyxop.net/promotions/"}';
			break;
		
		case 'cancelbonus':
			$speech = '{"text": "Redirecting you to the bonus page", "URL":"https://www.usa-dev.usa.nyxop.net/p/bonus-policy/"}';
			break;
		
		case 'Responsiblegamblingpolicy':
			$speech = '{"text": "Redirecting you to the Gambling policies Page", "URL":"https://www.caesarscasino.com/en/policies/responsible-gaming-policy"}';
			break;
		
		case 'ChangeDetails':
			$speech = '{"text": "Redirecting you.. Enter your new details here", "URL":"https://www.usa-dev.usa.nyxop.net/login/change-email/"}';
			break;
		
		case 'Strong Authentication':
			$speech = '{"text": "Redirecting you to strong authentication ", "URL":"https://www.usa-dev.usa.nyxop.net/login/strong-auth-change/ "}';
			break;
		
		case 'Forgot Password':
			$speech = '{"text": "Redirecting you.. Enter your Email id here", "URL":"https://www.usa-dev.usa.nyxop.net/login/forgotten-password-step-one/"}';
			break;
		
		case 'My account':
			$speech = '{"text": "Redirecting you to your account statement", "URL":"https://www.usa-dev.usa.nyxop.net/account-statement/transactions/"}';
			break;
		
		case 'TransactionHistory':
			$speech = '{"text": "Ok. Check your tax forms statement here.", "URL":"https://www.usa-dev.usa.nyxop.net/account-statement/transactions/"}';
			break;
		
		case 'WinLoss':
			$speech = '{"text": "Ok. Check your win or loss statement here.", "URL":"https://www.usa-dev.usa.nyxop.net/account-statement/win-loss/"}';
			break;
		
		case 'Taxforms':
			$speech = '{"text": "Ok. Check your tax forms statement here.", "URL":"https://www.usa-dev.usa.nyxop.net/account-statement/tax-events/"}';
			break;
		
		case 'ContactPreferences':
			$speech = '{"text": "Ok. Check your Contact Preferences  here.", "URL":"https://www.usa-dev.usa.nyxop.net/contact-preferences/"}';
			break;
			
		
		
		
		case 'Deposit':
		    $deposittype = $json->queryResult->parameters->depositType;
			switch ($deposittype){
				
				case 'VISA':
					$speech = '{"text": "Redirecting you to the VISA Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=3&existing=0"}';
					break;
				
				case 'Mastercard':
					$speech = '{"text": "Redirecting you to the mastercard Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=2&existing=0"}';
					break;
				
				case 'Neteller':
					$speech = '{"text": "Redirecting you to the Neteller Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=2&existing=0"}';
					break;					
				
				case 'Paypal':
					$speech = '{"text": "Redirecting you to the Paypal Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=10&existing=0"}';
					break;
				
				default:
					$speech = '{"text": "Redirecting you to the Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/"}';
					break;
				}
			break;
			
		case 'Withdraw':
		    $deposittype = $json->queryResult->parameters->WithdrawTypes;
			switch ($deposittype){
				
				case 'VISA':
					$speech = '{"text": "Redirecting you to the VISA Withdraw Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=3&existing=0"}';
					break;
				
				case 'Mastercard':
					$speech = '{"text": "Redirecting you to the mastercard Withdraw Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=2&existing=0"}';
					break;
				
				case 'Neteller':
					$speech = '{"text": "Redirecting you to the Neteller Withdraw Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=2&existing=0"}';
					break;					
				
				case 'Paypal':
					$speech = '{"text": "Redirecting you to the Paypal Withdraw Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=10&existing=0"}';
					break;
				
				default:
					$speech = '{"text": "Redirecting you to the Withdraw Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/"}';
					break;
				}
			break;
			
		case 'Money Deposit':
			$speech =  '{"text": "Redirecting you to the MasterCard Deposit Page, Please make sure that you have logged in", "URL":"https://www.usa-dev.usa.nyxop.net/cashier/deposit/amount/?quick=0&secondary=0&payment_sort=2&existing=0"}';

		case 'Login':
			$speech = '{"text": "Redirecting to the Login Page.., Please make sure that you have created an account", "URL":"https://www.usa-dev.usa.nyxop.net/login/"}';
			//$URL = "https://www.uat01.oper.czr.us-east-1.sportsbook.sgdigital.com/signup/";
			break;

		case 'Sign up':
			$speech = '{"text": "Redirecting to the Sign up Page.", "URL":"https://www.usa-dev.usa.nyxop.net/signup/"}';
			break;
		
		case 'game queries - custom':
			$gametype = $json->queryResult->parameters->gametypes;
			
			//echo $gametype;
			//$temp = $gametype;
			//echo $temp;
			switch ($gametype){
				case 'featured':
					$speech = '{"text": "Sorry currently featured games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'slots':
					//$gameurl=$gameurl."/working-games";
					$speech = '{"text": "ok..look at the slot games we have. What game you want to play under slots?", "URL":"https://www.usa-dev.usa.nyxop.net/games/working-games/"}';
					break;
				case 'roulette':
					$speech = '{"text": "Sorry currently roulette games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'blackjack':
					$speech = '{"text": "Sorry currently blackjack games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'videopoker':
					$speech = '{"text": "Sorry currently video poker games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'tablegames':
					$speech = '{"text": "ok..look at the table games we have. What game you want to play under table games", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/"}';
					break;
				case 'virtualsports':
					$speech = '{"text": "Sorry currently virtual sports games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'new':
					$speech = '{"text": "ok..Look at the new games we have. What new game you want to play?", "URL":"https://www.usa-dev.usa.nyxop.net/games/new/"}';
					break;
				default:
					$speech = '{"text": "Sorry that game is not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				}
			break;
		default:
			$speech = '{"text": "Sorry we dont have that type", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
			break;
			
		
		case 'game queries - custom - custom':
			
			//$temp = $json->queryResult->parameters;
			//echo $gametype;
			
    		//if(isset($json->queryResult->parameters->slots){
			//	$gametype = 'slots';
					
			//}
			//else {
			//	$gametype = 'table-games';	
			//}
			$gametype = $json->queryResult->outputContexts[0]->parameters->gametypes;
			//echo $gametype;
			
			
			
			switch ($gametype){
				case 'featured':
					$speech = '{"text": "OK. Enjoy Playing Blackjack Atlantic City Multihand. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/blackjack-atlantic-city-multihand/play/real/"}';
					break;
				case 'slots':
					$game = $json->queryResult->parameters->slots;
					//echo $game;
					switch($game){
						case '1can 2 can':
							$speech = '{"text": "OK. Enjoy Playing 1can 2 can. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/1can-2can/play/real/"}';
							break;
						case 'Doctor love':
							$speech = '{"text": "OK. Enjoy Playing Doctor love. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/3-reel-slots/doctor-love/play/real/"}';
							break;
						case 'Dragon drop':
							$speech = '{"text": "OK. Enjoy Playing Dragon drop. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/3-reel-slots/dragon-drop/play/real/"}';
							break;
						case 'EasySlider':
							$speech = '{"text": "OK. Enjoy Playing EasySlider. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/easy-slider-slot/play/real/"}';
							break;
						case 'Foxin Wins':
							$speech = '{"text": "OK. Enjoy Playing Foxin Wins. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/foxin-wins/play/real/"}';
							break;
						case 'Medusa':
							$speech = '{"text": "OK. Enjoy Playing Medusa. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/medusa-slot/play/real/"}';
							break;
						case 'Merlins magic respins':
							$speech = '{"text": "OK. Enjoy Playing Merlins magic respins. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/merlins-magic-respins/play/real/"}';
							break;
						case 'Merlins Millions':
							$speech = '{"text": "OK. Enjoy Playing Merlins Millions. Please make sure that you have logged in.", "URL":" https://www.usa-dev.usa.nyxop.net/games/new/merlins-millions-slot/play/real/"}';
							break;
						case 'Shark superbet':
							$speech = '{"text": "OK. Enjoy Playing Shark superbet. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/shaaark-superbet-slot/play/real/"}';
							break;
						case 'Blood lore vampire':
							$speech = '{"text": "OK. Enjoy Playing Blood lore vampire. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/slot-working-games/blood-lore-vampire-clan/play/real/"}';
							break;
						default:
							$speech = '{"text": "Sorry i think we dont have that game. Check for the game listed under slots", "URL":"https://www.usa-dev.usa.nyxop.net/games/working-games"}';
							break;
						
						}
					
					break;
				case 'roulette':
					$speech = '{"text": "Sorry currently roulette games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'blackjack':
					$speech = '{"text": "Sorry currently blackjack games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'video-poker':
					$speech = '{"text": "Sorry currently video poker games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'table-games':
					$game = $json->queryResult->parameters->table-games;
					switch($game){
						case 'Blackjack altantic city':
							$speech = '{"text": "OK. Enjoy Playing Blackjack altantic city. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/blackjack-atlantic-city-multihand/play/real/"}';
							break;
						case 'American roulette':
							$speech = '{"text": "OK. Enjoy Playing American roulette love. Please make sure that you have logged in.", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/american-roulette/play/real/"}';
							break;
						
						default:
							$speech = '{"text": "Sorry i think we dont have that game. Check for the game listed under Table games.", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/"}';
							break;
						
						}
					//$speech = '{"text": "ok..look at the table games we have. What game you want to play under table games", "URL":"https://www.usa-dev.usa.nyxop.net/games/table-games/"}';
					break;
				case 'virtual-sports':
					$speech = '{"text": "Sorry currently virtual sports games are not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
					break;
				case 'new':
					$speech = '{"text": "ok..Look at the new games we have. What new game you want to play?", "URL":"https://www.usa-dev.usa.nyxop.net/games/new/"}';
					break;
				//default:
				//	$speech = '{"text": "Sorry that game is not available", "URL":"https://www.usa-dev.usa.nyxop.net/"}';
				//	break;
				}
			break;
			
		
		default:
			$speech = "Sorry, I didn't get that. Please ask me something else.";
			break;
	}

	$response = new \stdClass();
	$response->fulfillmentMessages[]->text->text[] = $speech;
	//$response->fulfillmentMessages[]->text->url = $URL;
	$response->source = "Caesers_webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>
