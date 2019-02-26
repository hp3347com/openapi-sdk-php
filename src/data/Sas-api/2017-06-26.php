<?php
return [ 'product' => [ 'name' => 'Sas-api', 'domain' => 'sas-api.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Sas-api', 'name' => '2017-06-26', ], 'api' => [ 'GetIpHumanClientProbability' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-06-26', 'showJsonItemName' => 'true', 'name' => 'GetIpHumanClientProbability', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sas-api', ], 'parameters' => [ 'Parameter' => [ 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SensType' => [ 'name' => 'sensType', 'tagName' => 'SensType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BusinessType' => [ 'name' => 'businessType', 'tagName' => 'BusinessType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RequestUrl' => [ 'name' => 'requestUrl', 'tagName' => 'RequestUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserAgent' => [ 'name' => 'ua', 'tagName' => 'UserAgent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DeviceIdMd5' => [ 'name' => 'didMd5', 'tagName' => 'DeviceIdMd5', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Os' => [ 'name' => 'os', 'tagName' => 'Os', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DeviceType' => [ 'name' => 'deviceType', 'tagName' => 'DeviceType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ConnectionType' => [ 'name' => 'connectionType', 'tagName' => 'ConnectionType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Carrier' => [ 'name' => 'carrier', 'tagName' => 'Carrier', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.aliyun.anonymous.api.IpHumanRateService', 'method' => 'getIpHumanRate', 'group' => 'HSF', 'invokeType' => 'com.aliyun.anonymous.api.request.GetIpHumanRateRequest', 'timeout' => '5000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '120', 'apiDefault' => '5000', 'controlUnit' => 'Second', ], 'name' => 'GetIpHumanClientProbability', ], ],];