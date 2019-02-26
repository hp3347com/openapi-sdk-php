<?php
return [ 'product' => [ 'name' => 'Ots', 'domain' => 'ots.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Ots', 'name' => '2018-05-20', ], 'api' => [ 'DoLogicalDeleteResource' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'DoLogicalDeleteResource', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Interrupt' => [ 'name' => 'interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Invoker' => [ 'name' => 'invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Pk' => [ 'name' => 'pk', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Bid' => [ 'name' => 'bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Hid' => [ 'name' => 'hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Country' => [ 'name' => 'country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskIdentifier' => [ 'name' => 'taskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskExtraData' => [ 'name' => 'taskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'GmtWakeup' => [ 'name' => 'gmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Success' => [ 'name' => 'success', 'tagName' => 'Success', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Message' => [ 'name' => 'message', 'tagName' => 'Message', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DoLogicalDeleteResource', ], 'DeleteTags' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'DeleteTags', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'DeleteTags', ], 'ListClusterType' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'ListClusterType', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListClusterType', ], 'DeleteInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'DeleteInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'DeleteInstance', ], 'ListTags' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'ListTags', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'ListTags', ], 'InsertInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'InsertInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClusterType' => [ 'name' => 'ClusterType', 'tagName' => 'ClusterType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Description' => [ 'name' => 'Description', 'tagName' => 'Description', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'InsertInstance', ], 'UpdateInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'UpdateInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'UpdateInstance', ], 'BindInstance2Vpc' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'BindInstance2Vpc', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VpcId' => [ 'name' => 'VpcId', 'tagName' => 'VpcId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VirtualSwitchId' => [ 'name' => 'VirtualSwitchId', 'tagName' => 'VirtualSwitchId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceVpcName' => [ 'name' => 'InstanceVpcName', 'tagName' => 'InstanceVpcName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegionNo' => [ 'name' => 'RegionNo', 'tagName' => 'RegionNo', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'BindInstance2Vpc', ], 'UnbindInstance2Vpc' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'UnbindInstance2Vpc', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceVpcName' => [ 'name' => 'InstanceVpcName', 'tagName' => 'InstanceVpcName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegionNo' => [ 'name' => 'RegionNo', 'tagName' => 'RegionNo', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'UnbindInstance2Vpc', ], 'ListVpcInfoByVpc' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'ListVpcInfoByVpc', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VpcId' => [ 'name' => 'VpcId', 'tagName' => 'VpcId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListVpcInfoByVpc', ], 'ListInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'ListInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListInstance', ], 'GetInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'GetInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'GetInstance', ], 'DoCheckResource' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'DoCheckResource', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Interrupt' => [ 'name' => 'interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Invoker' => [ 'name' => 'invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Pk' => [ 'name' => 'pk', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Bid' => [ 'name' => 'bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Hid' => [ 'name' => 'hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Country' => [ 'name' => 'country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskIdentifier' => [ 'name' => 'taskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskExtraData' => [ 'name' => 'taskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'GmtWakeup' => [ 'name' => 'gmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Success' => [ 'name' => 'success', 'tagName' => 'Success', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Message' => [ 'name' => 'message', 'tagName' => 'Message', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Level' => [ 'name' => 'level', 'tagName' => 'Level', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Url' => [ 'name' => 'url', 'tagName' => 'Url', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Prompt' => [ 'name' => 'prompt', 'tagName' => 'Prompt', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DoCheckResource', ], 'DoPhysicalDeleteResource' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'DoPhysicalDeleteResource', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Interrupt' => [ 'name' => 'interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Invoker' => [ 'name' => 'invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Pk' => [ 'name' => 'pk', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Bid' => [ 'name' => 'bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Hid' => [ 'name' => 'hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Country' => [ 'name' => 'country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskIdentifier' => [ 'name' => 'taskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'TaskExtraData' => [ 'name' => 'taskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'GmtWakeup' => [ 'name' => 'gmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'Success' => [ 'name' => 'success', 'tagName' => 'Success', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Message' => [ 'name' => 'message', 'tagName' => 'Message', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DoPhysicalDeleteResource', ], 'InsertTags' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'InsertTags', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'InsertTags', ], 'ListVpcInfoByInstance' => [ 'attributes' => [ 'version' => '2018-05-20', 'showJsonItemName' => 'true', 'name' => 'ListVpcInfoByInstance', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListVpcInfoByInstance', ], ],];