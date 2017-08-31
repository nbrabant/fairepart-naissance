<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Configuration;
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
        if (Configuration::onMaintenanceMode()) {
            return false;
        }

        $emails = Email::where('sended', 0)->limit(10)->get();
        foreach ($emails as $email) {
            try {
                $mailer = new Mailer();
                $mailer->setSubject('Heureux événement en vue!');
                $mailer->setReceiver($email->email, $email->email);
                $mailer->send();

                $email->sended = 1;
                $email->save();
            } catch (Exception $e) {
                $email->sended = -1;
                $email->save();
            }
        }

    }
}
