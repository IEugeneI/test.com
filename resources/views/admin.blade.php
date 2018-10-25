<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">
        <script src="../public/js/jquery-3.3.1.js"></script>
        <script src="../public/js/admin.js"></script>
        <title>adminpanel</title>
    </head>
    <body>
        <div class="menu"> 
            <ul>
            <ul class="booksmenu"><a href="#" >Книги</a>

                <li class="bookstwomenu"><a href='<?=URL::to('/')?>/admin/addbook'>Добавить</a></li>
                <li class="bookstwomenu"><a href='<?=URL::to('/')?>/admin/updatebook'>Редактировать</a></li>
                <li class="bookstwomenu"><a href='<?=URL::to('/')?>/admin/deletebook''>Удалить</a></li>
            </ul>
              <ul class="authormenu"><a href="#" >Авторы</a>
                <li class="authortowmenu"><a href='<?=URL::to('/')?>/admin/addauthor'>Добавить</a></li>
                <li class="authortowmenu"><a href='<?=URL::to('/')?>/admin/updateauthor'>Редактировать</a></li>
                <li class="authortowmenu"><a href='<?=URL::to('/')?>/admin/deleteauthor'>Удалить</a></li>
            </ul>
        </ul>
        </div>


        <div class="content">
            @yield('content')
        </div>

    </body>
    </html>