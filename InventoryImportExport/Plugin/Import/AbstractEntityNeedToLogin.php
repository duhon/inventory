<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryImportExport\Plugin\Import;

use Magento\ImportExport\Model\Import\Entity\AbstractEntity;

/**
 * Assigning products to default source
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class AbstractEntityNeedToLogin
{
    /**
     * Need to log in import history
     *
     * @var bool
     */
    private $logInHistory = true;

    /**
     * After plugin Import to import Stock Data to Source Items
     *
     * @param AbstractEntity $subject
     * @param mixed $result
     * @return bool
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterIsNeedToLogInHistory(
        AbstractEntity $subject,
        mixed $result
    ): bool {
        return $this->logInHistory;
    }
}
