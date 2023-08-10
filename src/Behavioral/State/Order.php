<?php 
namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\State;
use DesignPatterns\Behavioral\State\PaidState;
use DesignPatterns\Behavioral\State\CancelState;
use DesignPatterns\Behavioral\State\PendingState;
use DesignPatterns\Behavioral\State\DispatchState;

class Order
{
    private State $pending;

    private State $paid;

    private State $canceled;

    private State $dispatched;

    private State $currentState;
    
    public function __construct()
    {
        $this->pending = new PendingState($this);
        $this->paid = new PaidState($this);
        $this->canceled = new CancelState($this);
        $this->dispatched = new DispatchState($this);

        $this->currentState = $this->pending;
    }

    public function paid(): void
    {
        $this->currentState->paid();
    }

    public function cancel(): void
    {
        $this->currentState->cancel();
    }

    public function dispatch(): void
    {
        $this->currentState->dispatch();
    }

    /**
     * @param State $state
     * @return void
     */
    public function setState(State $state): void
    {
        $this->currentState = $state;
    }

    public function getPending()
    {
        return $this->pending;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function getCanceled()
    {
        return $this->canceled;
    }

    public function getDispatched()
    {
        return $this->dispatched;
    }

    public function getCurrentState()
    {
        return $this->currentState;
    }
}