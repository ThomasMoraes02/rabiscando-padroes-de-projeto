<?php 
namespace DesignPatterns\Behavioral\Observer;

interface Observer
{
    public function update(string $message): void;

    public function getName(): string;

    public function getEmail(): string;
}