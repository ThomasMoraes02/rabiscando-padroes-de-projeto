<?php 
namespace DesignPatterns\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\Email;

class Supplier implements Observer
{
    private string $name;

    private string $email;

    private Subject $subject;

    public function __construct(string $name, string $email, Subject $subject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    /**
     * @param string $message
     * @return void
     */
    public function update(string $message): void
    {
        Email::sendMail($this, $message);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}