<?php
namespace Egoi;

use Egoi\Protocol;
use Egoi\Api;
use Egoi\Api\RestImpl;
use Egoi\Api\SoapImpl;
use Egoi\Api\XmlRpcImpl;

abstract class Factory {

    static function getApi($protocol) {
        switch($protocol) {
            case Protocol::Rest:
                return new RestImpl();
            case Protocol::Soap;
                return new SoapImpl();
            case Protocol::XmlRpc:
                return new XmlRpcImpl();
        }
    }

}
