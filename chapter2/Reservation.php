<?php

class Reservation
{
    private $host = 'Host class'; //Host Class
    private $guest = 'Guest class'; //Guest Class
    public function cancel()
    {
// check whether cancellation is an option
// refund the gues...if refunds application [Guest]
// make the room available again [Room]
// notify the host [Host]
//   in app notification [Notification]
//   send them an email / sms [Email, SMS]
//   send confirmation to guest [Email, SMS]

        $this->sendCancellationNotification();
        $this->refundGuest();
    }

    private function sendCancellationNotification()
    {
        echo "Sending notification to " . $this->host . "<br";
    }

    private function refundGuest()
    {
        echo "Refunding " . $this->guest . "<br";
    }

}
