<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListClusterType
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 */
class ListClusterType extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ots';

    /**
     * @var string
     */
    public $version = '2016-06-20';

    /**
     * @var string
     */
    public $action = 'ListClusterType';

    /**
     * @var string
     */
    public $serviceCode = 'ots';

    /**
     * @deprecated deprecated since version 2.0, Use getAccessKeyId() instead.
     *
     * @return string
     */
    public function getaccess_key_id()
    {
        return $this->getAccessKeyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessKeyId() instead.
     *
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        return $this->withAccessKeyId($access_key_id);
    }

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }
}
