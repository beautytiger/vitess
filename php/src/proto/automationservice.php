<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: automationservice.proto
//   Date: 2015-10-27 20:47:01

namespace automationservice {

  class AutomationClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param automation\EnqueueClusterOperationRequest $input
     */
    public function EnqueueClusterOperation(\automation\EnqueueClusterOperationRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/automationservice.Automation/EnqueueClusterOperation', $argument, '\automation\EnqueueClusterOperationResponse::deserialize', $metadata, $options);
    }
    /**
     * @param automation\GetClusterOperationDetailsRequest $input
     */
    public function GetClusterOperationDetails(\automation\GetClusterOperationDetailsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/automationservice.Automation/GetClusterOperationDetails', $argument, '\automation\GetClusterOperationDetailsResponse::deserialize', $metadata, $options);
    }
  }
}
