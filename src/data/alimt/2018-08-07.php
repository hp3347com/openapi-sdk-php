<?php
return [ 'product' => [ 'name' => 'alimt', 'domain' => 'mt.aliyuncs.com,mt.[RegionId].aliyuncs.com,mt-inner.[RegionId].aliyuncs.com,mt-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'alimt', 'isolationType' => 'outer', 'name' => '2018-08-07', 'apiStyle' => 'RPC', ], 'api' => [ 'MachineTranslateGeneral' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'MachineTranslateGeneral', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'disable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'alimt', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'FieldType' => [ 'name' => 'fieldType', 'tagName' => 'FieldType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'defaultValue' => 'general', 'visibility' => 'Private', ], 'SourceText' => [ 'name' => 'sourceText', 'tagName' => 'SourceText', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceLanguage' => [ 'name' => 'sourceLanguage', 'tagName' => 'SourceLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TargetLanguage' => [ 'name' => 'targetLanguage', 'tagName' => 'TargetLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'ContentFormat' => [ 'name' => 'format', 'tagName' => 'ContentFormat', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'AppName' => [ 'name' => 'appName', 'tagName' => 'AppName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'defaultValue' => 'cloud-standard-common', 'visibility' => 'Private', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.intl.translate.service.CloudTranslateService', 'method' => 'translate', 'group' => 'HSF', 'invokeType' => 'com.alibaba.intl.translate.dto.CloudTranslateDTO', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'apiDefault' => '100000', 'controlUnit' => 'Second', ], 'name' => 'MachineTranslateGeneral', ], 'MachineTranslateECommerce' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'MachineTranslateECommerce', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'disable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'alimt', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'FieldType' => [ 'name' => 'fieldType', 'tagName' => 'FieldType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'defaultValue' => 'general', 'visibility' => 'Private', ], 'SourceText' => [ 'name' => 'sourceText', 'tagName' => 'SourceText', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceLanguage' => [ 'name' => 'sourceLanguage', 'tagName' => 'SourceLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TargetLanguage' => [ 'name' => 'targetLanguage', 'tagName' => 'TargetLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'ContentFormat' => [ 'name' => 'format', 'tagName' => 'ContentFormat', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'AppName' => [ 'name' => 'appName', 'tagName' => 'AppName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Body', 'checkBlank' => 'false', 'defaultValue' => 'cloud-standard-common', 'visibility' => 'Private', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.intl.translate.service.CloudTranslateService', 'method' => 'translate', 'group' => 'HSF', 'invokeType' => 'com.alibaba.intl.translate.dto.CloudTranslateDTO', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'apiDefault' => '100000', 'controlUnit' => 'Second', ], 'name' => 'MachineTranslateECommerce', ], ],];