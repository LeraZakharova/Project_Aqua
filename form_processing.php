<?php 
/* Осуществляем проверку вводимых данных и их защиту от враждебных  
скриптов */ 
$Name = htmlspecialchars($_POST["Name"]); 
$Email = htmlspecialchars($_POST["Email"]); 
$Phone = htmlspecialchars($_POST["Phone"]); 
$Description = htmlspecialchars($_POST["Description"]); 
/* Устанавливаем e-mail адресата */ 
$myemail = "lera.lewis@gmail.com"; 
/* Проверяем заполнены ли обязательные поля ввода, используя check_input  
функцию */ 
$Name = htmlspecialchars($_POST["Name"], "Введите Ваше имя!"); 
$Email = htmlspecialchars($_POST["Email"], "Введите Ваш E-mail!"); 
$Phone = htmlspecialchars($_POST["Phone"], "Введите номер телефона!");  
/* Проверяем правильно ли записан e-mail */ 
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $Email)) 
{ 
show_error("<br /> Е-mail адрес не существует"); 
} 
/* Создаем новую переменную, присвоив ей значение */ 
$message_to_myemail = "Здравствуйте!  
В форме обратной свзи на Aquacube новое сообщение.  
Имя отправителя: $Name  
E-mail: $Email  
Номер телефона: $Phone
Текст сообщения: $Description  
Конец"; 
/* Отправляем сообщение, используя mail() функцию */ 
$from  = "From: $Name <$Email> \r\n Reply-To: $Email \r\n";  
mail($myemail, $message_to_myemail, $from); 
?> 
<p>Ваше сообщение было успешно отправлено!</p> 
<p>На <a href="index.php">Главную >>></a></p> 
<?php 
/* Если при заполнении формы были допущены ошибки сработает  
следующий код: */ 
function check_input($data, $problem = "") 
{ 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
if ($problem && strlen($data) == 0) 
{ 
show_error($problem); 
} 
return $data; 
} 
function show_error($myError) 
{ 
?> 
<html> 
<body> 
<p>Пожалуйста исправьте следующую ошибку:</p> 
<?php echo $myError; ?> 
</body> 
</html> 
<?php 
exit(); 
} 
?>