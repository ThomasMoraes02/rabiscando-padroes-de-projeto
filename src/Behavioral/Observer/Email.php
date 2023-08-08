<?php 
namespace DesignPatterns\Behavioral\Observer;

class Email
{
    public static function sendMail(Observer $observer, string $message): void
    {
        echo "-------------------------------------------------------" . PHP_EOL;
        echo "E-mail enviado para {$observer->getName()} - {$observer->getEmail()}" . PHP_EOL;
        echo "Mensagem: {$message}" . PHP_EOL;
    }
}