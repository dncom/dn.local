<div id = "registry"> 
   <form id ="border" action ="" method = "post">
       
    <div id="title">
    Логин <br/>
    Пароль <br/>
    Повторите пароль<br/>
    Имя <br/>
    Фамилия <br/>
    Отчество <br/>
    Девичья фамилия/Никнейм<br/>
    
    </div>
        
    <div id ="field">
	<input type = "text" name = "login" size = "20" value = "Логин..." id = "cell" /> <br/>
	<input type = "text" name = "password" size = "20" value = "Пароль..." id = "cell"/> <br/>
	<input type = "text" name = "password1" size = "20" value = "Повторите пароль..." id = "cell" /> <br/>
	<input type = "text" name = "name" size = "20" value = "Имя..." id = "cell"/> <br/>
	<input type = "text" name = "surname" size = "20" value = "Фамилия..." id = "cell"/> <br/>
	<input type = "text" name = "patronomyc" size = "20" value = "(Отчество)..." id = "cell"/> <br/>
	<input type = "text" name = "nickname" size = "20" value = "nick..." id = "cell"/> <br/>
        </div>
  
       
    <div id="button"> 
        <input type ="submit" id ="next" name = "submit" value = ">" />
    </div>
       <div id ="mistakes">
           Тут будут выводится ошибки валидации </br>
           Сделать что-нибудь красивенькое
       </div>
	  </form>
	</div>
