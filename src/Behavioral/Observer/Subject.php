<?php 
namespace DesignPatterns\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\Observer;

interface Subject
{
    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers(): void;
}