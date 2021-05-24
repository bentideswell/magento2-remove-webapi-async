<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\WebapiAsync\Code\Generator\Config\RemoteServiceReader;

use Magento\Framework\Communication\ConfigInterface as CommunicationConfig;
use Magento\AsynchronousOperations\Model\ConfigInterface as WebApiAsyncConfig;
use Magento\Framework\Communication\Config\ReflectionGenerator;

/**
 * Remote service reader with auto generated configuration for communication.xml
 */
class Communication implements \Magento\Framework\Config\ReaderInterface
{
    /**
     * Generate communication configuration based on remote services declarations
     *
     * @param string|null $scope
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function read($scope = null)
    {
        return [CommunicationConfig::TOPICS => []];
    }
}
