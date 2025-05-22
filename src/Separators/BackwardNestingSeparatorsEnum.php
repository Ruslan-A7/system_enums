<?php

namespace RA7\Framework\System\Enums\Separators;

/**
 * Список доступних зворотних роздільників вкладеності (для зворотного порядку - тобто для підйому на попередній/батьківський рівень),
 * що використовується при побудові шляхів без використання стандартного роздільника каталогів,
 * а також для масивів та інших структур що мають вкладеність.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
enum BackwardNestingSeparatorsEnum: string {

    /** Знак менше */
    case LESS = '<';

    /** Символ "карет" (стрілочка вверх) */
    case CARET = '^';

}