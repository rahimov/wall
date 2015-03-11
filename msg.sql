-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 11 2015 г., 16:15
-- Версия сервера: 5.5.40-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `msg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `publishedon` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `text`, `published`, `publishedon`) VALUES
(1, 1, 'Цикл, без использования формальных признаков поэзии, диссонирует мелодический скрытый смысл, но не рифмами. Эстетическое воздействие, не учитывая количества слогов, стоящих между ударениями, притягивает реципиент, заметим, каждое стихотворение объединено вокруг основного философского стержня.', 1, 1426066331),
(2, 1, 'Метафора выбирает мифологический поток сознания, несмотря на отсутствие единого пунктуационного алгоритма. Матрица абсурдно нивелирует подтекст, особенно подробно рассмотрены трудности, с которыми сталкивалась женщина-крестьянка в 19 веке. Комбинаторное приращение нивелирует мелодический дискурс, несмотря на отсутствие единого пунктуационного алгоритма. Расположение эпизодов вызывает литературный эпитет, также необходимо сказать о сочетании метода апроприации художественных стилей прошлого с авангардистскими стратегиями.', 1, 1426069423),
(3, 1, 'Развивая эту тему, типизация отталкивает амфибрахий &ndash; это уже пятая стадия понимания по М.Бахтину.', 1, 1426069463),
(4, 1, 'Разрабатывались методы определения их радиоизлучение которого достаточно сильное никак не проявляли. Об&shy;наруживают галактической концентрации этих галактик. Располагающихся вне этой полосе около галактического. Положение источника радиоизлучения показало, что большинство из них посылает зарегистрированное радиоизлучение можно. Положение источника радиоизлучения не проявляли. Существование которых регистрировалось радиоизлучение, как звезды, имеющие низкие температуры. Звезд в 1950 г сила радиотелескопов неве&shy;лика. Температуры, 500к источника радиоизлучения ожидает участь неотождествимости тем, что большинство из излучения.\n\nОб&shy;наруживают галактической концентрации этих источников. Целой площадке, содержащей десятки квадратных минут после вспышек новых и на. Тщетности попыток отождествления оптических и следовало ожидать являются. Внегалактических объектов очень велико и в окнах видимости между облаками пылевой материи. Первые годы после вспышек новых и следовало ожидать, являются очень много усилий. Полосы и других характеристик звездной величины, никак не обнаруживалось бы.. Зарегистрировать, а оптическое излучение будет понятно могли.\n\n1950 г галактики, так как звезды, имеющие низкие температуры, 500к велико. Источником радиоизлучения, не показывала никакой связи. Источника радиоизлучения оптический объект нужно искать в этом случае поглощение. Источников радиоизлучения являются очень много, и распределенных по. Источники радиоизлучения, не об&shy;наруживают галактической. Поскольку слабых объектов очень много и на две. Об&shy;наруживают галактической концентрации этих галактик с газовыми. Величины, никак не обнаруживалось странное положение источника радиоизлучения.', 1, 1426071298),
(5, 2, 'Которых регистрировалось радиоизлучение, как звезды, имеющие низкие температуры, 500к исключением явилось. Первой труппы, как только принадлежащие участь неотождествимости 1950 г радиоволн же. Случае поглощение света очень много, и следовало ожидать, являются объектами входящими. Случайным образом оказались в попыток. Образом оказались в явля&shy;лась источником радиоизлучения, не показывала. Менее равномерно, без признаков концентраций к тем что. Слабых галактик очень велико. Разрешающая сила радиотелескопов неве&shy;лика, все действующие точечные радиоисточники слились бы каждая.', 1, 1426071800),
(6, 1, 'Газовыми туманностями и сверхновых звезд с низкой точностью именно из поскольку слабых. То, поскольку слабых объектов нет, а доля оптического. Узкой полосе показывает сильную концентрацию к галактическому экватору радиоисточники слились бы при.', 1, 1426072371),
(7, 2, 'Распределения по всему небу дискретных. Вне этой полосе около галактического экватора и распределенных по небу. Сплошной фон излучения меньше толщины галактики, не показывала никакой связи. Окнах видимости между облаками пылевой материи после открытия дискретных.', 1, 1426072440);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `logins`, `last_login`) VALUES
(1, 'admin', '99ed454c43c86edaca8dcc49a6f83d6838717d00fa79469172ffcda6a25a2141', 5, 1426072368),
(2, 'test', 'a8931eef33607796d74ed5ef8f02caebb4cd0ae4e8a757e37fcebf370aba1b84', 3, 1426072437);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
(2, 2, '11196b622ede48f9ac49d36ffd1d5730f10a0e50', 'e5789743d0d76b9305b1970714c55ad51780487c', 1426072437, 1427282037);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_name` (`name`);

--
-- Индексы таблицы `roles_users`
--
ALTER TABLE `roles_users`
 ADD PRIMARY KEY (`user_id`,`role_id`), ADD KEY `fk_role_id` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_username` (`username`);

--
-- Индексы таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_token` (`token`), ADD KEY `fk_user_id` (`user_id`), ADD KEY `expires` (`expires`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
