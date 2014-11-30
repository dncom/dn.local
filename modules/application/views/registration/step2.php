<div id = "registry"> 
   <form id ="border" action ="" method = "post">
    <div id="title">
    Пол <br/>
    Семейное положение <br/>
    Не показываеть СП<br/>
    День рождения <br/>
    Родной город <br/>
    Страна <br/>
    Город <br/>
    Улица и дом<br/>
    
    </div>
        
    <div id ="field">
	
        <select id = "cell" ><option>Я мужчина</option><option>Я женщина</option></select><br/>
        <select id = "cell" ><option>в браке</option><option>влюблен(а)</option><option>встречаюсь</option><option>все сложно</option><option>не женат</option></select> <br/>
	<input type = "checkbox" id = "cell1" /> <br/>
        
	<select><option>1</option><option>2</option></select>
        <select><option>январь</option><option>февраль</option></select>
        <select><option>1900</option><option>1902</option></select></br>
        
        
	<select id = "cell"><option>Выбрать</option><option>Город</option></select> <br/>
        <select id = "cell"><option>Выбрать</option><option>Страну</option></select> <br/>
	<select id = "cell"><option>Выбрать</option><option>Город</option></select></br> 
	<input type = "text" name = "nickname" size = "20" value = "Улица" id = "cell2"/><input type = "text" name = "nickname" size = "20" value = "Дом" id = "cell1"/>  <br/>
       
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

