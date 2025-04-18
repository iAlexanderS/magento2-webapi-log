<?php

declare(strict_types=1);

namespace VladFlonta\WebApiLog\Model\ResourceModel\WebApiError;

use DateTime;
use VladFlonta\WebApiLog\Model\ResourceModel\WebApiError as ResourceModel;
use VladFlonta\WebApiLog\Model\WebApiError as Model;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Collection construct
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
