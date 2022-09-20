<div> Табличка менеджера </div>

<!-- Выводим через цикл значения из массива -->

<table>
    <thead>
    <th>Тема</th>
    <th>Сообщение</th>
    <th>Имя</th>
    <th>Email</th>
    <th>Ссылка</th>
    <th>Статус</th>
    <th>Дата создания</th>
    </thead>
     @foreach($applications as $info)
     
     <form action="{{route('update')}}" method="post">
         @csrf
     
         <tr><td>{{$info->topic}}</td>
             <td>{{$info->message}}</td>
             <td>{{$info->name}}</td>
             <td>{{$info->email}}</td>
             <td><a href="{{$info->link}}">Ссылка</a></td>
             @if ($info->condition == 1)
             <td>Рассмотрен</td>
             @else
              <td>Не рассмотрен</td>
             
             @endif

             <td>{{$info->created_at}}</td>
         <input type="hidden" name="id" value="{{$info->id}}">
         <td><button type="submit" name="action" values="update" >Рассмотрен</button></td></tr>
  
     </form>
     
     @endforeach
     </table>

