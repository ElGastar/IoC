<?php
namespace App\Exceptions;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

 class NotFoundException extends \Exception implements NotFoundExceptionInterface{

 }