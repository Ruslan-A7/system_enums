<?php

namespace RA7\Framework\System\Enums\Separators;

/**
 * Список роздільників директорій в різних операційних системах.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
enum DirectorySeparatorsEnum: string {

    /** Роздільник директорій Windows */
    case SLASH = '/';

    /** Роздільник директорій Unix/Linux/macOS */
    case BACKSLASH = '\\';

}