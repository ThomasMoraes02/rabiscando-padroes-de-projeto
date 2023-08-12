<?php 
namespace DesignPatterns\Structural\Adapter\Adapters;

use DesignPatterns\Structural\Adapter\Gateway;
use DesignPatterns\Structural\Adapter\Gateways\PagFacil;

class PagFacilAdapter extends PagFacil implements Gateway
{

}