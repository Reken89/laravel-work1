<!-- Форма добавления заявок -->
<form action="{{route('add_applications')}}" method="post">
             @csrf
         
               <div class="form-group">
 
               <label for="subject">Тема</label>
               <input type="text" name="topic" placeholder="Тема" id="subject" class="form-control">
 
               <label for="message">Сообщение</label>
               <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
               
               <label for="subject">Прикрепите файл</label>
               <input type="text" name="category_id" placeholder="Введите номер категории" id="subject" class="form-control">

           <input class="btn btn-success" type="submit" value="Отправить">
</form>


