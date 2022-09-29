<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Email
	const EMAILISREQUIRED = true;
	const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
	const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// Файл
	const FILEISREQUIRED = false;
	const MSGSFILEERROR = "⚠ Забыли добавить файл";

	// Соглашение
	const AGGREMENTISREQUIRED = true;
	const MSGSAGGREMENTERROR = "⚠ Примите пользовательское соглашение"; 

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

//// *** SMTP *** //

//    require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
//    const HOST = 'smtp.gmail.com';
//    const LOGIN = 'vip.golovanets@gmail.com';
//    const PASS = '12p16e24a';
//    const PORT = '465';

//  // *** /SMTP *** //

  // Почта с которой будет приходить письмо
  const SENDER = 'vip.golovanets@gmail.com';
  
  // Почта на которую будет приходить письмо
  const CATCHER = 'yurs_@ukr.net';
  
  // Тема письма
  const SUBJECT = 'Заявка с сайта';
  
  // Кодировка
  const CHARSET = 'UTF-8';
