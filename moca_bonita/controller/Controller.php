<?php

namespace MocaBonita\controller;
/**
* Interface for Moça Bonita controllers.
*
* @author Rômulo Batista
* @category WordPress
* @package moca_bonita\controller
* @copyright Copyright (c) 2015-2016 Núcleo de Tecnologia da Informação - NTI, Universidade Estadual do Maranhão - UEMA
*/

interface Controller {
	/**
    * Treats the GET request
    *
    * @param array $get The GET array
    */
	public function getRequest(array $get);
	/**
    * Treats the POST request
    *
    * @param array $post The POST array
    */
	public function postRequest(array $post);
	/**
    * Treats the PUT request
    *
    * @param array $put The PUT array
    */
	public function putRequest(array $put);
	/**
    * Treats the DELETE request
    *
    * @param array $delete The DELETE array
    */
	public function deleteRequest(array $delete);
}
