-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 23 2019 г., 22:11
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `duocorp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `idArticle` int(11) NOT NULL,
  `articleName` varchar(255) NOT NULL,
  `articleText` text NOT NULL,
  `articleDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`idArticle`, `articleName`, `articleText`, `articleDate`) VALUES
(3, 'Готовая структура для разных типов статей', 'Оказывается, люди считают, что писать надо уметь. Нынешняя статья должна развеять этот стереотип. Я сама не умею писать, у меня нет ни стиля, ни слога, и я завидую тем, кто хорошо пишет. Кстати, в блоге Email Soldiers делала подборку интересных авторов. Думаю, моё главное преимущество в том, что я пишу просто и понятно. Этому можно научиться.\r\n\r\nЯ подготовила готовую структуру для разных типов статей. По ней можно написать пост, даже если вы считаете, что не умеете писать. Эти советы подходят для профессиональных блогов. Про другие я мало что знаю.\r\n\r\n\r\nДля начала несколько общих правил:\r\n\r\nПеред тем, как писать статью, разберитесь, какую мысль вы хотите донести до читателя. Только одну мысль. Что выиграет читатель от прочтения статьи? Почему ваша статья для него лучше, чем видео с енотом? Не можете сформулировать, — получится никому не интересный поток сознания. Поэтому, когда садитесь писать пост, заполните пропуск: «после прочтения моей статьи читатель научится / поменяет подход к / вдохновится _______________»\r\nСтруктура любой статьи:\r\nпроблема;\r\nпогружение в проблему (нужно не всегда);\r\nрешение;\r\nдоказательства, что решение работает (нужно не всегда);\r\nвывод (нужно не всегда).\r\nЧасто достаточно только обозначить проблему и показать решение. Уже тогда читатели будут вам благодарны.\r\n\r\nПроблема должна быть реальной. Чтобы писать о реальных проблемах, нужно хорошо знать своих клиентов. Однажды я написала статью «как писать, если ты левополушарный». Не понимаю, о чём я тогда думала. Во-первых, мало кто знает, какое полушарие мозга у него доминирует. Во-вторых, никто не задаётся вопросом, как же ему теперь писать статьи, если у него доминирует левое. В оправдание могу сказать, что в статье просто дельные советы по написанию постов, и я приложила тест, чтобы узнать, какое полушарие доминирует. Кстати, этот тест — самый популярный мой материал на Мидиуме.\r\n\r\nВсё, что не помогает донести главную мысль, нужно выкидывать.\r\nА теперь — готовые структуры для разных типов статей. Я уместила их в одной таблице (кликабельна, откроется в новой вкладке), а дальше даю расшифровку. Так что можно не читать весь пост.', '2019-09-23 19:10:10'),
(5, 'Название статьи 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-09-23 19:36:22');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `idRole` int(1) NOT NULL,
  `roleName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`) VALUES
(1, 'admin'),
(2, 'authedGuest');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `idRole` int(1) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userNickName` varchar(50) NOT NULL,
  `regDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userId`, `idRole`, `userEmail`, `userPassword`, `userNickName`, `regDate`) VALUES
(1, 1, 'example@mail.ru', 'qwerty', 'NickNack Admin', '2019-09-10 06:39:18'),
(2, 2, 'qwerty@mail.ru', 'qwerty', 'NackNick Guest', '2019-09-27 16:12:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idArticle`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
