<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace InnoShop\Common\Models;

use InnoShop\Common\Traits\Translatable;

class Page extends BaseModel
{
    use Translatable;

    protected $fillable = [
        'slug', 'viewed', 'active',
    ];
}
