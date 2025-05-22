<?php

namespace RA7\Framework\System\Enums\Separators;

/**
 * Список доступних роздільників вкладеності, що використовується при побудові шляхів без використання стандартного роздільника каталогів,
 * а також для масивів та інших структур що мають вкладеність.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
enum NestingSeparatorsEnum: string {

    /** Знак більше */
    case MORE = '>';

    /** Крапка */
    case DOT = '.';

}