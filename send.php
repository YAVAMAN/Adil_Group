<?php 
/*
ВНИМАНИЕ! Лучше всего в переменную myemail прописать почту домена, который использует сайт. А не mail.ru, gmail и тд.
*/
if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */   
$to = "fincc2020@mail.ru"; // Здесь нужно написать e-mail, куда будут приходить письма   
$from = "noreply@adilgroup.kz"; // Здесь нужно написать e-mail, от кого будут приходить письма.
 
/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$subject = "Форма отправки сообщений с сайта AdilGroup.kz";
     
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = 
"Имя отправителя: $first_name
Номер телефона: $phone";
     
$headers = "From: $from \r\n";
     
/* Отправка сообщения, с помощью функции mail() */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='https://adilgroup.kz'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://adilgroup.kz/");}
window.setTimeout("changeurl();",3000);
</script>