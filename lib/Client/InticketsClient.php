<?php

namespace ExploitIt\Intickets\Client;

use ExploitIt\Intickets\Request;

class InticketsClient {
    
    /**
     *
     * @var \SoapClient
     */
    private $soapClient;

    public function __construct($username, $password, $demo = false) {
        $classmap = [
            'Event'                         => \ExploitIt\Intickets\Models\Event::class,
            'Hall'                          => \ExploitIt\Intickets\Models\Hall::class,
            'NumberedShowSeat'              => \ExploitIt\Intickets\Models\NumberedShowSeat::class,
            'NumberedShowSeatToLock'        => \ExploitIt\Intickets\Models\NumberedShowSeatToLock::class,
            'Order'                         => \ExploitIt\Intickets\Models\Order::class,
            'Schema'                        => \ExploitIt\Intickets\Models\Schema::class,
            'SchemaFragment'                => \ExploitIt\Intickets\Models\SchemaFragment::class,
            'SchemaSVG'                     => \ExploitIt\Intickets\Models\SchemaSVG::class,
            'SchemaSeat'                    => \ExploitIt\Intickets\Models\SchemaSeat::class,
            'Show'                          => \ExploitIt\Intickets\Models\Show::class,
            'ShowFragment'                  => \ExploitIt\Intickets\Models\ShowFragment::class,
            'ShowSeats'                     => \ExploitIt\Intickets\Models\ShowSeats::class,
            'Ticket'                        => \ExploitIt\Intickets\Models\Ticket::class,
            'UnnumberedShowSeatsPortion'    => \ExploitIt\Intickets\Models\UnnumberedShowSeatsPortion::class,
            
            //Request
            'getShowsRequestObj'            => \ExploitIt\Intickets\Request\GetShowsRequestObj::class,
            'getEventsRequestObj'           => \ExploitIt\Intickets\Request\GetEventsRequestObj::class,
            'getHallsRequestObj'            => \ExploitIt\Intickets\Request\GetHallsRequestObj::class,
            'getFullDescriptionRequestObj'  => \ExploitIt\Intickets\Request\GetFullDescriptionRequestObj::class,
            'getSchemaRequestObj'           => \ExploitIt\Intickets\Request\GetSchemaRequestObj::class,
            'getShowFragmentsRequestObj'    => \ExploitIt\Intickets\Request\GetShowFragmentsRequestObj::class,
            'getShowSeatsRequestObj'        => \ExploitIt\Intickets\Request\GetShowSeatsRequestObj::class,
            'lockSeatsRequestObj'           => \ExploitIt\Intickets\Request\LockSeatsRequestObj::class,
            'unLockSeatsRequestObj'         => \ExploitIt\Intickets\Request\UnLockSeatsRequestObj::class,
            'cancelTicketsRequestObj'       => \ExploitIt\Intickets\Request\CancelTicketsRequestObj::class,
            'getOrderRequestObj'            => \ExploitIt\Intickets\Request\GetOrderRequestObj::class,
            'prolongOrderRequestObj'        => \ExploitIt\Intickets\Request\ProlongOrderRequestObj::class,
            'cancelOrderRequestObj'         => \ExploitIt\Intickets\Request\CancelOrderRequestObj::class,
            'payOrderRequestObj'            => \ExploitIt\Intickets\Request\PayOrderRequestObj::class,
            'refundTicketsRequestObj'       => \ExploitIt\Intickets\Request\RefundTicketsRequestObj::class,
            
            
            //Response
            'getShowsResponseObj'           => \ExploitIt\Intickets\Response\GetShowsResponseObj::class,
            'getEventsResponseObj'          => \ExploitIt\Intickets\Response\GetEventsResponseObj::class,
            'getHallsResponseObj'           => \ExploitIt\Intickets\Response\GetHallsResponseObj::class,
            'getEventsResponseObj'          => \ExploitIt\Intickets\Response\GetEventsResponseObj::class,
            'getFullDescriptionResponseObj' => \ExploitIt\Intickets\Response\GetFullDescriptionResponseObj::class,
            'lockSeatsResponseObj'          => \ExploitIt\Intickets\Response\LockSeatsResponseObj::class,
            'unLockSeatsResponseObj'        => \ExploitIt\Intickets\Response\UnLockSeatsResponseObj::class,
            'cancelTicketsResponseObj'      => \ExploitIt\Intickets\Response\CancelTicketsResponseObj::class,
            'getOrderResponseObj'           => \ExploitIt\Intickets\Response\GetOrderResponseObj::class,
            'prolongOrderResponseObj'       => \ExploitIt\Intickets\Response\ProlongOrderResponseObj::class,
            'cancelOrderResponseObj'        => \ExploitIt\Intickets\Response\CancelOrderResponseObj::class,
            'payOrderResponseObj'           => \ExploitIt\Intickets\Response\PayOrderResponseObj::class,
            'refundTicketsResponseObj'      => \ExploitIt\Intickets\Response\RefundTicketsResponseObj::class,
            
            //Type
            'ShowsArr'                      => \ExploitIt\Intickets\Types\ShowsArr::class,
            'EventsArr'                     => \ExploitIt\Intickets\Types\EventsArr::class,
            'HallsArr'                      => \ExploitIt\Intickets\Types\HallsArr::class,
            'SchemaFragmentsArr'            => \ExploitIt\Intickets\Types\SchemaFragmentsArr::class,
            'SchemaSeatsArr'                => \ExploitIt\Intickets\Types\SchemaSeatsArr::class,
            'ShowFragmentsArr'              => \ExploitIt\Intickets\Types\ShowFragmentsArr::class,
            'NumberedShowSeatsArr'          => \ExploitIt\Intickets\Types\NumberedShowSeatsArr::class,
            'UnnumberedShowSeatsPortionsArr'=> \ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr::class,
            'NumberedShowSeatToLockArr'     => \ExploitIt\Intickets\Types\NumberedShowSeatToLockArr::class,
            'TicketsArr'                    => \ExploitIt\Intickets\Types\TicketsArr::class,
            'TicketIdsArr'                  => \ExploitIt\Intickets\Types\TicketIdsArr::class,
            
            
        ];
        $Auth = new Auth;
        $Auth->username = trim($username);
        $Auth->password_md5 = md5(trim($password));
        $header = new \SoapHeader('urn:InticketsAPI', 'Auth', $Auth);
        $uri = $demo ? 'https://demoapi.intickets.ru/soap/?wsdl&ver=1.7':'https://api.intickets.ru/soap/?wsdl&ver=1.7';
        $this->soapClient = new \SoapClient($uri,['classmap'=>$classmap]);
        $this->soapClient->__setSoapHeaders($header);
    }
    
    /**
     * Получение списка сеансов мероприятий
     * 
     * Метод предназначен для получения списка сеансов мероприятий вместе с информацией о мероприятиях и залах. 
     * Метод возвращает только актуальные (доступные для бронирования) сеансы. 
     * Возможна выборка по ID сеанса, мероприятия, зала и дате начала сеанса. 
     * Получение информации о мероприятиях и залах можно отключить.
     * 
     * @return ExploitIt\Intickets\Request\GetShowsRequestObj
     */    
    public function getShows() {
        return new Request\GetShowsRequestObj($this->soapClient);
    }
    
    /**
     * Получение списка мероприятий
     * Метод предназначен для получения списка мероприятий, у которых есть актуальные (доступные для бронирования) сеансы. 
     * Возможна выборка по ID мероприятия.
     * 
     * @return \ExploitIt\Intickets\Request\GetEventsRequestObj
     */    
    public function getEvents() {
        return new Request\GetEventsRequestObj($this->soapClient);
    }
    
    /**
     * Получение списка залов
     * Метод предназначен для получения списка залов, в которых есть актуальные (доступные для бронирования) сеансы. 
     * Возможна выборка по ID зала.
     * 
     * @return \ExploitIt\Intickets\Request\GetHallsRequestObj
     */
    public function getHalls() {
        return new Request\GetHallsRequestObj($this->soapClient);
    }
    
    public function getFullDescription() {
        return new Request\GetFullDescriptionRequestObj($this->soapClient);
    }
    
    public function getSchema() {
        return new Request\GetSchemaRequestObj($this->soapClient);
    }
    
    public function getSchemaSVG() {
        return new Request\GetSchemaSvgRequestObj($this->soapClient);
    }
    
    public function getShowFragments() {
        return new Request\GetShowFragmentsRequestObj($this->soapClient);
    }
    
    public function getShowSeats() {
        return new Request\GetShowSeatsRequestObj($this->soapClient);
    }
    
    public function lockSeats() {
        return new Request\LockSeatsRequestObj($this->soapClient);
    }
    
    public function unLockSeats() {
        return new Request\UnLockSeatsRequestObj($this->soapClient);
    }
    
    public function cancelTickets() {
        return new Request\CancelTicketsRequestObj($this->soapClient);
    }
    
    public function getOrder() {
        return new Request\GetOrderRequestObj($this->soapClient);
    }
    
    public function prolongOrder() {
        return new Request\ProlongOrderRequestObj($this->soapClient);
    }
    
    public function cancelOrder() {
        return new Request\CancelOrderRequestObj($this->soapClient);
    }
    
    public function payOrder() {
        return new Request\PayOrderRequestObj($this->soapClient);
    }
    
    public function refundTickets() {
        return new Request\RefundTicketsRequestObj($this->soapClient);
    }
    
}
