<?php

namespace RA7\Framework\System\Enums;

/**
 * Список доступних ініціаторів подій.
 *
 * Ініціатор - місце або компонент, де щось відбувається
 * (наприклад, де буде викликатись подія, звідки буде викидатись виняток або робитися запис в журнал).
 *
 * Подія - будь-яка дія чи подія, що відбувається в додатку або фреймворку
 * (наприклад, створення event, викидання винятків, журналювання та інше).
 *
 * Для правильної роботи, а також кращої сумісності між модулями фреймворка та додатків на його основі,
 * рекомендується дотримуватись опису кожного ініціатора та місця звідки його можна використовувати,
 * віддаючи перевагу конкретнішому варіанту над загальним!
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
enum InitiatorsEnum {

    /** Загальний ініціатор подій, що відбуваються в додатку, будь-якому його модулі, розширенні та віджеті */
    case App;

    /** Ініціатор подій, що відбуваються в будь-якому розширенні додатку */
    case App_Extension;

    /** Ініціатор подій, що відбуваються в будь-якому модулі додатку */
    case App_Module;

    /** Ініціатор подій, що відбуваються в будь-якому віджеті додатку */
    case App_Widget;

    /** Ініціатор подій, що відбуваються в системі кешування */
    case Cache;

    /** Ініціатор подій, що відбуваються в системі конфігурації фреймворка, його модулів та частини */
    case Config;

    /** Ініціатор подій, що відбуваються в будь-якому контейнері */
    case Container;

    /** Ініціатор подій, що відбуваються при роботі з куками */
    case Cookie;

    /** Ініціатор подій, що відбуваються в базі даних та DatabaseManager */
    case Database;

    /** Ініціатор подій, що відбуваються в файловій системі */
    case Filesystem;

    /** Загальний ініціатор подій, що відбуваються у фреймворку (будь-який його модуль або частина, що не мають окремого варіанта в цьому списку) */
    case Framework;

    /** Ініціатор подій, що відбуваються в компоненті для отримання http-запиту, формування і відправки http-відповіді */
    case HTTP;

    /** Ініціатор подій, що відбуваються в локалізації (наприклад: мова, перекладач, локація та інші) */
    case Localization;

    /** Ініціатор подій, що відбуваються в модулі логування */
    case Logger;

    /** Ініціатор подій, що відбуваються в будь-якому компоненті, що відповідає за рендер (окрім компонентів шаблонізатора Templosaur адже для них є окремий пункт) */
    case Rendering;

    /** Ініціатор подій, що відбуваються в системі маршрутизації */
    case Routing;

    /** Ініціатор подій, що відбуваються в будь-якому компоненті системи безпеки */
    case Security;

    /** Ініціатор подій, що відбуваються при роботі з сесіями */
    case Session;

    /** Ініціатор подій, що відбуваються в системі налаштувань додатку та в користувацьких налаштуваннях */
    case Settings;

    /** Ініціатор подій, що відбуваються в системі обробки сховища даних, що немає окремого варіанта в цьому списку (наприклад: ServerStorage, LocalStorage, UserStorage) */
    case Storage;

    /** Ініціатор подій, що відбуваються в шаблонізаторі Templosaur */
    case Templosaur;

    /** Ініціатор подій, що відбуваються під час тестування */
    case Test;

}