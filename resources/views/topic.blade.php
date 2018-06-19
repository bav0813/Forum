@extends('base')

@section('content')

    <div class="categorytopic">

            <h6>Незаконченный ремонт</h6>
    </div>


        <div class="aboutauthor">
            <div class="authorabout">
                <span>Автор</span>
                <br>
                <p style="color: orangered">Name</p>
                <p>Пол:</p>
                <p>Возраст:</p>
                <p>Зарегестрирован:</p>
                <p>Сообщения:</p>
                <p>Откуда:</p>
            </div>
        </div>
            <div class="topic">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet mauris risus. Duis tempor
                    risus et leo consectetur, in luctus erat gravida. Donec gravida, ante sit amet consequat semper,
                    orci magna fringilla dolor, ut mollis neque eros non dui. Praesent porta porta enim, ac accumsan
                    sapien gravida eu. Aliquam interdum aliquam mi eget euismod. Maecenas sit amet ultrices nunc.
                    Donec sit amet efficitur dui. Aliquam vel risus at orci auctor semper. Aenean lobortis interdum
                    semper. Vivamus ac massa quis est porttitor dapibus. Vestibulum vitae ipsum eleifend, mattis augue
                    non, auctor nisi. Nam eget fringilla felis.

                    Donec vitae urna in augue pellentesque vulputate et nec augue. Phasellus sit amet cursus justo,
                    quis pulvinar enim. Nam sit amet elit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur rhoncus ante neque, ultricies cursus massa scelerisque eget. Integer id laoreet ipsum.
                    Vivamus ut rutrum quam, sollicitudin laoreet sapien. Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Morbi vehicula, leo eget suscipit rutrum, dolor ante
                    feugiat felis, sed vestibulum sem turpis at nisl. Nullam cursus erat diam. Nulla facilisi. Curabitur
                    scelerisque justo non consequat tristique. Quisque suscipit euismod sem, et semper ligula imperdiet
                    id. Cras blandit eget justo sed pharetra.
                    Donec vitae urna in augue pellentesque vulputate et nec augue. Phasellus sit amet cursus justo,
                    quis pulvinar enim. Nam sit amet elit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur rhoncus ante neque, ultricies cursus massa scelerisque eget. Integer id laoreet ipsum.
                    Vivamus ut rutrum quam, sollicitudin laoreet sapien. Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Morbi vehicula, leo eget suscipit rutrum, dolor ante
                    feugiat felis, sed vestibulum sem turpis at nisl. Nullam cursus erat diam. Nulla facilisi. Curabitur
                    scelerisque justo non consequat tristique. Quisque suscipit euismod sem, et semper ligula imperdiet
                    id. Cras blandit eget justo sed pharetra.
                </p>
            </div>



        <div class="aboutauthor">
            <div class="authorabout">
                <span>Автор</span>
                <br>
                <p style="color: orangered">Name</p>
                <p>Пол:</p>
                <p>Возраст:</p>
                <p>Зарегестрирован:</p>
                <p>Сообщения:</p>
                <p>Откуда:</p>
            </div>
        </div>
        <div class="topic">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet mauris risus. Duis tempor
                risus et leo consectetur, in luctus erat gravida. Donec gravida, ante sit amet consequat semper,
                orci magna fringilla dolor, ut mollis neque eros non dui. Praesent porta porta enim, ac accumsan
                sapien gravida eu. Aliquam interdum aliquam mi eget euismod. Maecenas sit amet ultrices nunc.
                Donec sit amet efficitur dui. Aliquam vel risus at orci auctor semper. Aenean lobortis interdum
                semper. Vivamus ac massa quis est porttitor dapibus. Vestibulum vitae ipsum eleifend, mattis augue
                non, auctor nisi. Nam eget fringilla felis.

                Donec vitae urna in augue pellentesque vulputate et nec augue. Phasellus sit amet cursus justo,
                quis pulvinar enim. Nam sit amet elit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Curabitur rhoncus ante neque, ultricies cursus massa scelerisque eget. Integer id laoreet ipsum.
                Vivamus ut rutrum quam, sollicitudin laoreet sapien. Orci varius natoque penatibus et magnis dis
                parturient montes, nascetur ridiculus mus. Morbi vehicula, leo eget suscipit rutrum, dolor ante
                feugiat felis, sed vestibulum sem turpis at nisl. Nullam cursus erat diam. Nulla facilisi. Curabitur
                scelerisque justo non consequat tristique. Quisque suscipit euismod sem, et semper ligula imperdiet
                id. Cras blandit eget justo sed pharetra.</p>
        </div>

    <div class="aboutauthor">
        <div class="authorabout">
            <span>Автор</span>
            <br>
            <p style="color: orangered">Name</p>
            <p>Пол:</p>
            <p>Возраст:</p>
            <p>Зарегестрирован:</p>
            <p>Сообщения:</p>
            <p>Откуда:</p>
        </div>
    </div>
    <div class="topic">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet mauris risus. Duis tempor
            risus et leo consectetur, in luctus erat gravida. Donec gravida, ante sit amet consequat semper,
            orci magna fringilla dolor</p>
    </div>


    <div class="message">

    <form action="textarea.php" method="post" id="message">
        <p><b>Введите сообщение:</b></p>
        <p><textarea rows="5" cols="100" name="text"></textarea></p>
        <p><input type="submit" value="Отправить"></p>
    </form>

    </div>




@endsection