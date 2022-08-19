<?php

class Reservation
{
    private $host = "Host Class"; //Host class
    private $guest = "Guest class"; //Guest class
    public function cancel(){
        $this->sendCancellationNotification();
        $this->refundGuest();
    }

    private function sendCancellationNotification(){
        echo "sending notificatio to " . $this->host . "<br>";
    }

    private function refundGuest(){
        echo "Refunding this " . $this->guest . "<br>";
    }
}
