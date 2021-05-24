<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\WebapiAsync\Model;

class Config implements \Magento\AsynchronousOperations\Model\ConfigInterface
{
    /**
     * @inheritdoc
     */
    public function getServices()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getTopicName($routeUrl, $httpMethod)
    {
        return '';
    }
}
