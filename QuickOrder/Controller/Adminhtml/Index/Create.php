<?php

namespace Thesis\QuickOrder\Controller\Adminhtml\Index;

use Thesis\QuickOrder\Api\Model\Data\QuickOrderInterface;
use Thesis\QuickOrder\Controller\Adminhtml\Order as BaseAction;

class Create extends BaseAction
{
    const ACL_RESOURCE      = 'Thesis_QuickOrder::all';
    const MENU_ITEM         = 'Thesis_QuickOrder::all';
    const PAGE_TITLE        = 'Add Order';
    const BREADCRUMB_TITLE  = 'Add Order';

    /** {@inheritdoc} */
    public function execute()
    {
        $model = $this->getModel();

        $data = $this->_session->getFormData(true);

        if (!empty($data)) {
            $model->setData($data);
        }
        $this->registry->register(QuickOrderInterface::REGISTRY_KEY, $model);

        return parent::execute();
    }
}
