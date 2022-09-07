<?php session_start(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
<script type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
<script type="text/javascript" src="https://comet-server.ru/doc/html_chat.js" ></script>
<link rel="stylesheet" type="text/css" href="https://comet-server.ru/doc/html_chat.css"></link>

<!-- Осталось настроить сам чат и запустить, для этого пишем небольшой скрипт. -->
<div id="html-chat" class="xyz"></div>
<style>
/* Здесь настроим css стили для чата*/
.holder-html-chat{     
    padding: 0 !important;
    width: 588px;
    border: none !important;
    background-color: #e5edff !important;
    
}
.html-chat-history{ overflow: auto;
    height: 505px;
    border: none !important;
    padding: 23px;
    position: absolute;
    left: 10px;
    width: -webkit-fill-available;
    
}
.html-chat-js-name{ margin-top:10px; display: none;}
/* .html-chat-js-input{ max-width: 600px;max-height: 100px;width: 600px;margin-top:10px; } */
.html-chat-js-input{
    width: 820px;
    height: 7rem;
    border: 0;
    font-size: 1.5rem;
    color: #000;
    outline: none;
    -webkit-transition: 320ms;
    transition: 320ms;
    resize: none;
    max-width: 100%;
    box-shadow: none;
    border-radius: 20px;
    margin-right: 2px;
    position: absolute;
    bottom: 18px;
    padding: 11px;
    left: 18px;

}

@media (min-width: 300px) and (max-width: 320px){
  .html-chat-js-input{
      width: 200px;
  }
  .html-chat-js-button-holder input{
      width: 45px !important;
      height: 45px !important;
  }
  .html-chat-history{
      height: 350px;
      padding: 10px !important;
  }
  .holder-html-chat{
      height: 420px;
  }
}

@media (min-width: 321px) and (max-width: 375px){
  .html-chat-js-input{
      width: 240px;
  }
  .html-chat-js-button-holder input{
      width: 45px !important;
      height: 45px !important;
  }
  .html-chat-history{
      height: 350px;
      padding: 10px !important;
  }
  .holder-html-chat{
      height: 420px;
  }
}

@media (min-width: 376px) and (max-width: 425px){
  .html-chat-js-input{
      width: 275px;
  }
  .html-chat-js-button-holder input{
     width: 55px !important;
     height: 55px !important;
  }
  .html-chat-history{
      height: 350px;
      padding: 10px !important;
  }
  .holder-html-chat{
      height: 420px;
  }
}

@media (min-width: 426px) and (max-width: 768px){
  .html-chat-js-input{
      width: 575px;
  }
  .html-chat-js-button-holder input{
     width: 55px !important;
     height: 55px !important;
  }
}

@media (min-width: 769px) and (max-width: 1024px){
  .html-chat-js-input{
      width: 725px;
  }
  .html-chat-js-button-holder input{
     width: 55px !important;
     height: 55px !important;
  }
}

.html-chat-js-button-holder{ margin-bottom: 0px;margin-top: 0px;}

.html-chat-js-button-holder input{     width: 65px;
    height: 65px;
    border: none;
    position: absolute;
    right: 19px;
    bottom: 19px;
    align-items: center;
    background-color: #4a5fa6;
    border-radius: 50px;
    box-sizing: border-box;
    cursor: pointer;
    font-size: 24px;
    color: #ffffff;
   
    text-align: center;
    text-decoration: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    
    
}
.html-chat-js-answer{ float:right; display: none;}
.html-chat-js-answer a{ color: #777;font-size: 12px; font-family: cursive;}
.html-chat-js-answer a:hover{ color: #338;font-size: 12px; font-family: cursive;}
.html-chat-msg{ margin: 5px; border: solid 1px white; background-color: white; border-radius: 5px; width: fit-content; padding: 3px;}
.xyz{display: flex; justify-content: center;}
</style>

<?php $test = $_SESSION['user']['name']; ?>

<script>

   /**
    * Чат работает на comet-server.ru
    * По любым вопросам обращайтесь support@comet-server.ru или на сайт comet-server.ru
    */
    $(document).ready(function()
    {
       // Запуск api комет сервера
       CometServer().start({dev_id: 3755 }) // Идентификатор разработчика на comet-server.ru

       // Запуск чата. Передаём ему элемент в котором надо создать окно чата.
       htmljs_Chat_Init( $("#html-chat") )
    });

   //  var test=' echo $session_value;?>';

   var testTwo = '<?php echo $test; ?>';

     $('#html-chat').ready(function() {
       $('#WebChatNameID').val(testTwo);
     });
     
     $('#html-chat').ready(function() {
       $('.html-chat-js-button-holder input').val('>');
     });
     
   

   // setTimeout(()=> {
   //    $('#WebChatNameID').val('Oleg');
   // }, 5000);



</script>
