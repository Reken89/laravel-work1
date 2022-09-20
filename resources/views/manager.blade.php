<div> Табличка менеджера </div>

<!-- Выводим через цикл значения из массива -->
<table>
    <thead>
    <th>Тема</th>
    <th>Сообщение</th>
    <th>Имя</th>
    <th>Email</th>
    <th>Ссылка</th>
    <th>Состояние</th>
    <th>Дата создания</th>
    </thead>
     @foreach($applications as $info)
     
         <tr><td>{{$info->topic}}</td>
             <td>{{$info->message}}</td>
             <td>{{$info->name}}</td>
             <td>{{$info->email}}</td>
             <td><a href="{{$info->link}}">Ссылка</a></td>
             <td>{{$info->condition}}</td>
             <td>{{$info->created_at}}</td></tr>
  
     @endforeach
     </table>
