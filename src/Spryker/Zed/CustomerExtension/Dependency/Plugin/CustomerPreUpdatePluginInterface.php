<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerTransfer;

/**
 * Provides an ability to execute additional actions before a customer is updated.
 */
interface CustomerPreUpdatePluginInterface
{
    /**
     * Specification:
     * - Executes additional actions before a customer is updated.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return void
     */
    public function execute(CustomerTransfer $customerTransfer);
}
