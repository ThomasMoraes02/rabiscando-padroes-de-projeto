<?php 
namespace DesignPatterns\Behavioral\Observer;

class Newsletter implements Subject
{
    private array $observers = [];

    private array $messages = [];

    /**
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer): void
    {
        $key = array_search($observer, $this->observers);
        unset($this->observers[$key]);
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update(end($this->messages));
        }
    }

    public function addMessage(string $message): void
    {
        $this->messages[] = $message;
        $this->notifyObservers();
    }
}