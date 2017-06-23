<?php
namespace JRCouto\Asaas\Adapter;

use JRCouto\Asaas\Exception\HttpException;

/**
 * Adapter Http Interface
 *
 * @author Jeandro Couto
 */
interface AdapterInterface
{
    /**
     * GET Request
     *
     * @param   string  $url  Request Url
     * @throws  HttpException
     * @return  string
     */
    public function get($url);

    /**
     * DELETE Request
     *
     * @param   string  $url  Request Url
     * @throws  HttpException
     */
    public function delete($url);

    /**
     * PUT Request
     *
     * @param   string  $url      Request Url
     * @param   mixed   $content  Request Content
     * @throws  HttpException
     * @return  string
     */
    public function put($url, $content = '');

    /**
     * POST Request
     *
     * @param   string  $url      Request Url
     * @param   mixed   $content  Request Content
     * @throws  HttpException
     * @return  string
     */
    public function post($url, $content = '');

    /**
     * Get last response headers
     *
     * @return array|null
     */
    public function getLatestResponseHeaders();
}