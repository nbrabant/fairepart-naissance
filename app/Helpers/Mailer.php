<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\OAuth as OAuth;
use PHPMailer\PHPMailer\PHPMailer as PHPMailer;
use League\OAuth2\Client\Provider\Google;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    protected $subject          = 'Nouveau message';
    protected $datas            = [];
    protected $sender_mail      = '';
    protected $sender_name      = '';
    protected $receiver_mail    = '';
    protected $receiver_name    = '';
    protected $header           = [];
    protected $message          = '';
    private $credentials        = null;

    public function __construct($template = 'emails/default')
    {
        $this->template     = $template;
        $this->sender_mail  = 'noreply@hellotheworld.net';
        $this->sender_name  = 'HAL';

        $this->parseCredentials();
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setDatas($datas) {
        $this->datas = $datas;
    }

    public function setSender($senderEmail, $senderName) {
        $this->sender_mail = $senderEmail;
        $this->sender_name = $senderName;
    }

    public function setLogo($logo) {
        $this->datas['logo'] = $logo;
    }

    public function setReceiver($receiverEmail, $receiverName) {
        $this->receiver_mail = $receiverEmail;
        $this->receiver_name = $receiverName;
    }

    private function parseCredentials() {
        if (!is_file(base_path('resources/credentials.json'))) {
            return false;
        }

        if ( ($file = file_get_contents(base_path('resources/credentials.json'))) === false ) {
            return false;
        }

        $this->credentials = json_decode($file);
    }

    private function getOauth()
    {
        if (!isset($this->credentials)) {
            throw new Exception('Unknow credentials', 1);
        }

        $params = [
            'clientId'      => $this->credentials->client_key,
            'clientSecret'  => $this->credentials->client_secret_code,
            // 'redirectUri'   => $redirectUri,
            'accessType'    => 'offline'
        ];

        return new OAuth([
            'provider'      => new Google($params),
            'userName'      => 'brabantnicolas59@gmail.com',
            'clientSecret'  => $this->credentials->client_secret_code,
            'clientId'      => $this->credentials->client_key,
            'refreshToken'  => $this->credentials->refresh_token,
        ]);
    }

    /**
     * Send email to the given recipient with the given dynamic values.
     *
     * @param mixed $recipient     Recipient
     * @param array $dynamicValues Dynamic values
     */
    public function send()
    {
        try {
            $mail = new PHPMailer();

            $mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;

            $mail->setOAuth = $this->getOauth();


            $mail->Username = "brabantnicolas59@gmail.com";
            $mail->Password = "Y0ushalln0tpass";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;

            $mail->AddReplyTo($this->sender_mail, $this->sender_name);
            $mail->SetFrom($this->sender_mail, $this->sender_name);
            $mail->AddAddress($this->receiver_mail, $this->receiver_mail);
            $mail->Subject = $this->subject;
            $mail->MsgHTML( view($this->template) );

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        } catch (\Exception $e) {
            \Log::error('Mailing error : '.$e->getMessage());
        }
    }

}
