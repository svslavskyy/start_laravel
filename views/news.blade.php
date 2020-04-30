<h1>
    Новости
</h1>
</div>
<div class="last">
    <div class="last_content">
        <div class="last_background">
            <h4>Оставить заявку</h4>
            <form class="last_text" action="/index" method="post">
                @csrf
                <input type="text" placeholder="Ім'я:" name="name" value="@yield('form_name')">
                <input type="text" placeholder="Телефон:" name="phone" value="@yield('form_phone')">
                <input type="text" placeholder="Email:" name="email" value="@yield('form_email.')">

                <button type="submit">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>

