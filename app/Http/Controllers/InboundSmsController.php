<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Company;
use App\Subscriber;
use App\Message;
use Carbon\Carbon;
use App\Jobs\RetrieveTextMessage;

class InboundSmsController extends Controller
{
    public function receive(){
    	$inbound = \Nexmo\Message\InboundMessage::createFromGlobals();
		$code = $inbound['to'];
		$keyword = strtolower($inbound['keyword']);
		$from = $inbound['msisdn'];
		$text = $inbound['text'];
		$misc = array($inbound['messageId']);


		$companies = Company::where('code', $code)->get();
		foreach ($companies as $company) {
			$keywords = $company->keywords->where('keyword', $keyword);
			if($keywords->count() > 0){
				$inboxMessage = Message::create([
					'number' => $from,
					'message' => $text,
					'misc' => json_encode($misc),
					'type' => 'incoming',
					'campaign_id' => $keywords->first()->campaign_id,
					'company_id' => $keywords->first()->company_id
				]);

				$subscriber = Subscriber::where('number', $from)->first();
				if($subscriber == null){
					$subscriber = Subscriber::create([
						'number' => $from
					]);
					$subscriber->companies()->attach($company);
				}else{
					if(!$subscriber->companies->contains($company)){
						$subscriber->companies()->attach($company);
					}
				}
			}

			foreach ($keywords as $keyword) {
				$result = Nexmo::message()->send([
				    'to' => $inbound['msisdn'],
				    'from' => $code,
				    'text' => $keyword->reply
				]);

				foreach ($result as $key => $value) {
					$message = Message::create([
			            'number' => $from,
			            'price' => $value['message-price'],
			            'type' => 'outgoing',
			            'origin' => 'keyword',
			            'campaign_id' => $keyword->campaign_id,
			            'company_id' => $keyword->company_id
			        ]);
					$job = (new RetrieveTextMessage($message->id, $value['message-id']))->delay(Carbon::now()->addSeconds(5));
					dispatch($job);
				}
			}
		}
    }
}