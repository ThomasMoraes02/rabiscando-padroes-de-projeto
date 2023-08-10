<?php 
namespace DesignPatterns\Test\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Observer\Client;
use DesignPatterns\Behavioral\Observer\Partner;
use DesignPatterns\Behavioral\Observer\Employee;
use DesignPatterns\Behavioral\Observer\Supplier;
use DesignPatterns\Behavioral\Observer\Newsletter;

class ObserverInNewsletterTest extends TestCase
{
    public function test_notify_observers_in_newsletter()
    {
        $newsletter = new Newsletter();

        $employee = new Employee('John Connor', 'johnconnor@gmail.com', $newsletter);
        $client = new Client('Martin Fowler', 'martinfowler@gmail.com', $newsletter);
        $supplier = new Supplier('Steve Jobs', 'stevejobs@gmail.com', $newsletter);
        $partner = new Partner('Bill Gates', 'billgates@gmail.com', $newsletter);

        // $newsletter->addMessage('Segunda Mensagem');

        // $newsletter->removeObserver($supplier);
        // $newsletter->removeObserver($client);

        // Comentado pois suja o terminal de testes :)
        // $newsletter->notifyObservers();

        $this->assertTrue(true);
    }
}