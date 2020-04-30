@if(isset($user))
    <H1>Заявка отправлена успешно</H1>
    @foreach($user as $key => $value)
        <H3>{{$key." => ".$value}}</H3>
    @endforeach
@else
    <H1>Не удалось отправить заявку</H1>
@endif
