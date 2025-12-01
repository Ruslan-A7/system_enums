<?php

namespace RA7\Framework\System\Enums;

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