<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AvailabilityGuiExtension\Dependency\Plugin;

/**
 * Allows to expand view data of product availabilities list at AvailabilityGui/IndexController::indexAction().
 */
interface AvailabilityListActionViewDataExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands view data for list of product availabilities with new data.
     *
     * @api
     *
     * @param array<string, mixed> $viewData
     *
     * @return array<string, mixed>
     */
    public function expand(array $viewData): array;
}
