<?php namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use DB;

class LogDemo extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'log:demo';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	/*public function fire()
	{
		//
	}*/

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
/*	protected function getArguments()
	{
		return [
			['example', InputArgument::REQUIRED, 'An example argument.'],
		];
	}*/

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	/*protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}*/


	public function handle(){


	$output='';

		set_time_limit(4000);

		// Connect to gmail
		$imapPath = '{imap.gmail.com:993/imap/ssl}INBOX';
		$username = 'prageethkalhara17@gmail.com';
		$password = 'kumarirathnayaka33';

		$imap = imap_open($imapPath, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());

		$numMessages = imap_num_msg($imap);


		for ($i = $numMessages; $i > ($numMessages - 1); $i--) {
			$header = imap_header($imap, $i);

			$message = imap_fetchbody($imap,$i, 1);


			$fromInfo = $header->from[0];
			$replyInfo = $header->reply_to[0];

			$details = array(
				"fromAddr" => (isset($fromInfo->mailbox) && isset($fromInfo->host))
					? $fromInfo->mailbox . "@" . $fromInfo->host : "",
				"fromName" => (isset($fromInfo->personal))
					? $fromInfo->personal : "",
				"replyAddr" => (isset($replyInfo->mailbox) && isset($replyInfo->host))
					? $replyInfo->mailbox . "@" . $replyInfo->host : "",
				"subject" => (isset($header->subject))
					? $header->subject : "",
				"udate" => (isset($header->udate))
					? $header->udate : ""
			);



			echo $message;
			echo $from=$details["fromAddr"];
			echo $name=$details["fromName"];
			echo $subject=$details["subject"];
			$time=Carbon::now();

			$id = DB::table('adminemailbox')->insertGetId(
				array('subject' => $subject, 'email' =>$message,'time' =>$time,'from' =>$from )
			);

		}





	}


}
