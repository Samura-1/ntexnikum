-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 07 2020 г., 14:00
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `2`
--

CREATE TABLE `2` (
  `1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `2`
--

INSERT INTO `2` (`1`) VALUES
('/var/www/foxyffox/data/www/foxy.ffox.site/admin/.htpasswd');

-- --------------------------------------------------------

--
-- Структура таблицы `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `pred` text NOT NULL,
  `tel` text NOT NULL,
  `dignity1` text NOT NULL,
  `dignity2` text NOT NULL,
  `dignity3` text NOT NULL,
  `dignity4` text NOT NULL,
  `dignity5` text NOT NULL,
  `desrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `administration`
--

INSERT INTO `administration` (`id`, `name`, `img`, `pred`, `tel`, `dignity1`, `dignity2`, `dignity3`, `dignity4`, `dignity5`, `desrip`) VALUES
(1, 'Разуваева Любовь Александровна', '../assets/img/moreimg/Razuwaewa.jpg', 'Директор техникума Имеет звание', 'телефон 8(84562)2-80-91', '«Отличник народного просвещения»«Заслуженный учитель школы Российской Федерации\"', '«Заслуженный учитель школы Российской Федерации\"', '«Почетный работник среднего профессионального образования\"', '\"За заслуги перед Отечеством II степени\"', '', 'награждена медалью ордена'),
(2, 'Лещенко Татьяна Алексеевна', '../assets/img/moreimg/leshhenko_tatjana_alekseevna.jpg', 'заместитель Директора по учебной работе. Имеет звание', 'телефон 8(84562)2-80-90', '«Заслуженный учитель Российской Федерации»', '', '', '', '', ''),
(3, 'Андриянова Галина Владимировна', '../assets/img/moreimg/andrijanova_galina_vladimirovna.jpg', 'заместитель Директора  по воспитательной работе Имеет звание', 'телефон 8(84562)2-80-91', '«Почетный работник среднего профессионального образования»', '', '', '', '', ''),
(4, 'Саблин Федор Владимирович', '../assets/img/moreimg/foto_sablina.jpg', 'аместитель Директора по внебюджетной деятельности', 'телефон:(84562) 2-90-77 ', '\"Заслуженный работник физической культуры РФ\"', '', '', '', '', ''),
(5, 'Волков Дмитрий Николаевич', '../assets/img/moreimg/volkov_dmitrij_nikolaevich.jpg', 'специалист по охране труда', 'телефон 8(84562)2-80-91', '', '', '', '', '', ''),
(6, 'Ионова Анастасия Владимировна', '../assets/img/moreimg/994816753.jpg', 'главный бухгалтер', 'телефон 8(84562) 2-80-93', '', '', '', '', '', ''),
(7, 'Столбушкина Татьяна Александровна', '../assets/img/moreimg/stolbushkina_tatjana_aleksandrovna.jpg', 'заместитель Директора по производственному обучению', 'телефон 8(84562)2-80-91', '\"Почетный работник среднего профессионального  образования\"', '', '', '', '', ''),
(8, 'Синицын Сергей Владимирович', '../assets/img/moreimg/sinicyn_sergej_vladimirovich.jpg', 'заместитель Директора по АХР. Имеет звание', 'телефон: 8(84562)2-80-91', '«Почетный работник  среднего профессионального образования»', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `imge` text NOT NULL,
  `imge2` text NOT NULL,
  `imge3` text NOT NULL,
  `introtext` varchar(244) NOT NULL,
  `fulltext` text NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `imge`, `imge2`, `imge3`, `introtext`, `fulltext`, `datetime`) VALUES
(27, 'ВЕТЕРИНАРИЯ УЧЕБНАЯ ПРАКТИКА сентябрь 2020 ', '../assets/img/upload/77451425.jpg', '../assets/img/upload/103900071.jpg', '../assets/img/upload/992654829.jpg', 'Учебный год у студентов 4 курса Ветеринарного о...', 'Учебный год у студентов 4 курса Ветеринарного отделения начался с Учебной практики. Предыдущий учебный год закончился сложно, и не было возможности отработать многие практические занятия, приобрести навыки. 4 сентября обучающиеся вместе с руководителями Кочегаровой А.В и Паниным М.Ю посетили личное подсобное хозяйство. Здесь были проведены ветеринарные мероприятия по кастрации хряков, дегельминтизации и витаминизация свинопоголовья, ввели витамины бройлерам, а также провели профилактику расклева у мулардов. После проведения ветеринарных мероприятий проведена беседа по зоогигиеническим нормам содержания сельскохозяйственного скота и норм кормления', '2020-09-04'),
(28, 'КЛАССНЫЕ ЧАСЫ 3 СЕНТЯБРЯ ', '../assets/img/upload/507454057.jpg', '../assets/img/upload/704393845.jpg', '../assets/img/upload/', '3 сентября – день солидарности борьбы с террори...', '3 сентября – день солидарности борьбы с терроризмом. В связи с этим в ГАПОУ СО «Новоузенский агротехнологический техникум» проведена радиогазета о терроре в Беслане, классные часы, посвященные этой дате, информационно-пропагандистская акция «Наш Мир» с демонстрацией видеоматериалов «Терроризм». Во время проведения радиогазеты студенты и преподаватели застыли в «минуте молчания».\r\n\r\nМорозов В.А. преподаватель-организатор ОБЖ', '2020-09-03');

-- --------------------------------------------------------

--
-- Структура таблицы `proffesion`
--

CREATE TABLE `proffesion` (
  `idprof` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `proffesion`
--

INSERT INTO `proffesion` (`idprof`, `image`, `name`, `content`) VALUES
(1, 'veterinarian.png', 'Ветеринария', ''),
(2, 'cooker.png', 'Технология продукции общественного питания', ''),
(3, 'programmer.png', 'Информационные системы и программирование', 'ПРОГРАММИРОВАНИЕ В КОМПЬЮТЕРНЫХ СИСТЕМАХ Получение среднего профессионального образования допускается только в образовательной организации (СПО). Сроки получения СПО по специальности 09.02.03 Программирование в компьютерных системах базовой подготовки в очной форме обучения и присваиваемая квалификация Объектами профессиональной деятельности выпускников являются:\r\nКомпьютерные системы;\r\nАвтоматизированные системы обработки информации и управления;\r\nПрограммное обеспечение компьютерных систем (программы, программные комплексы и системы);\r\nМатематическое, информационное, техническое, эргономическое, организационное и правовое обеспечение компьютерных систем;\r\nПервичные трудовые коллективы.'),
(4, 'maintenance.png', 'Эксплуатация и ремонт сельскохозяйственной техники и оборудования', ''),
(5, 'car.png', 'Автомеханик', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `status`) VALUES
(1, 'Wolf', '$2y$10$7.H2lw7Blmlaz3oPMNTmPOa54UilE24vK/68duu5Kv5vlIaKrnyaS', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `proffesion`
--
ALTER TABLE `proffesion`
  ADD PRIMARY KEY (`idprof`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `proffesion`
--
ALTER TABLE `proffesion`
  MODIFY `idprof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
