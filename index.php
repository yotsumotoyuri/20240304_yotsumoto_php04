<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <!--php-->
    <?php 
    require_once('config/status_codes.php');
    $random_numbers = array_rand($status_codes, 4);
    echo('<pre>');
    var_dump($random_numbers);
    echo('</pre>');
    ?>

</head>
<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/php04">
            Status Code Quiz
        </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text"></p>
            </div>
        </div>
        <form action="result.php" class="quiz-form" method="post">
            <input type="hidden" name="answer_code" value="">
            <div class="quiz-form__item">
                <div class="quiz-form__group">
                    <input type="radio" class="quiz-form__radio" name="option" value="">
                    <label class="quiz-form__label" for=""></label>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>