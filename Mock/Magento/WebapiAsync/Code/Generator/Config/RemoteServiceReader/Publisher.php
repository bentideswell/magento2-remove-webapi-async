<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\WebapiAsync\Code\Generator\Config\RemoteServiceReader;

use Magento\AsynchronousOperations\Model\ConfigInterface as WebApiAsyncConfig;

class Publisher implements \Magento\Framework\Config\ReaderInterface
{
    /**
     * Generate publisher configuration based on remote services declarations
     *
     * @param string|null $scope
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function read($scope = null)
    {
        return [];
    }
}
