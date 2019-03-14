<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api SetDeviceDesiredProperty
 *
 * @method string getIotId()
 * @method string getVersions()
 * @method string getIotInstanceId()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getItems()
 */
class SetDeviceDesiredProperty extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $versions
     *
     * @return $this
     */
    public function withVersions($versions)
    {
        $this->data['Versions'] = $versions;
        $this->options['query']['Versions'] = $versions;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $items
     *
     * @return $this
     */
    public function withItems($items)
    {
        $this->data['Items'] = $items;
        $this->options['query']['Items'] = $items;

        return $this;
    }
}