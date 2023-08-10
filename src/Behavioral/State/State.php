<?php 
namespace DesignPatterns\Behavioral\State;

interface State
{
    public function paid(): void;
    
    public function cancel(): void;

    public function dispatch(): void;
}