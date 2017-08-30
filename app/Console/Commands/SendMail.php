<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Email;
use App\Helpers\Mailer;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending mail from emails table';

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
    public function handle()
    {
        $email = Email::first();

        try {
            $mailer = new Mailer();
            $mailer->setSubject('Nouveau message concernant le procès verbal');
            $mailer->setReceiver($email->email, $email->email);
            $mailer->send();

            // $email->sended = 1;
            // $email->save();
        } catch (Exception $e) {
            dd($e);
        }
    }
}
