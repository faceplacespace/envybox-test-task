<!DOCTYPE html>
<html lang="ru">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

        <title>Обратная связь</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">
                            <h1>Обратная связь</h1>
                        </div>
                        
                        <form>
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="name" name="name" id="name" class="form-control" placeholder="Имя">
                                <small class="text-danger small name-invalid">Не менее 3 символов</small>  
                            </div>
                            <div class="form-group">
                                <label for="phone">Номер телефона</label>
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Номер телефона">
                                <small class="text-danger small phone-invalid">Неправильный номер телефона</small>  
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Текст обращения</label>
                                <textarea class="form-control" name="appeal" id="appeal" rows="3"></textarea>
                                <small class="text-danger small appeal-invalid">Не менее 10 символов</small>  
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Куда отправить заявку</label>
                                <select class="form-control" name="storage" id="storage">
                                    <option value="db">База данных</option>
                                    <option value="csv">Файл</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>