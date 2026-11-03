<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Optimizer Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور optimizer — همهٔ کلیدهای مستندشده در `docs/03-engines/optimizer.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/optimizer.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('OPTIMIZER_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('OPTIMIZER_PREFIX', 'optimizer:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('OPTIMIZER_LOG_CHANNEL', 'optimizer'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];