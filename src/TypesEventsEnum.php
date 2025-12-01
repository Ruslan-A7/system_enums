<?php

namespace RA7\Framework\System\Enums;

/**
 * Список доступних типів подій.
 *
 * Дозволяє розділити події в залежності від їх призначення.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
enum TypesEventsEnum {

    /** Інформування */
    case Info;

    /** Сповіщення */
    case Notice;

    /** Попередження */
    case Warning;

    /** Сповіщення про застарілий функціонал */
    case Deprecated;

    /** Сповіщення про експериментальний функціонал */
    case Experimental;

    /** Трапилась виняткова ситуація */
    case Exception;

    /** Трапилась критична помилка але її можна обробити */
    case RecoverableError;

    /** Трапилась фатальна помилка без можливості обробки */
    case Error;

    /** Налагодження (тільки для тестування та розробки) */
    case Debug;

    /** Невідома або непередбачена подія */
    case Unknown;

}