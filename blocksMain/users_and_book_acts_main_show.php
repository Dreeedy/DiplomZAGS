<div class="container" style="min-height: 873px;">
    <!--01 Горизонтальное меню-->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1 pt-5">
        <div class="col">
            <a href=<?echo"getAction.php?customer_id=".$_GET['customer_id']?>>
                <button class="w-100 btn btn-md btn-primary text-start">хуй</button>
            </a>
        </div>
        <div class="col">
            <a href="">
                <button class="w-100 btn btn-md btn-primary text-start">Добавить акт о бракосочетании</button>
            </a>
        </div>
        <div class="col">
            <a href="../index.php">
                <button class="w-100 btn btn-md btn-outline-danger text-start">Назад</button>
            </a>
        </div>
        <div class="col">
            <a href="">
                <button class="w-100 btn btn-md btn-primary text-start">Добавить акт о бракосочетании</button>
            </a>
        </div>
        <div class="col">
            <a href="">
                <button class="w-100 btn btn-md btn-primary text-start">Добавить акт о бракосочетании</button>
            </a>
        </div>
    </div>
    <!--02 Горизонтальное меню-->
    <!--01 Кусок таблицы-->
    <div class="pt-2 pb-1 row">
        <h2 class="col-auto">Клиенты</h2>
        <div class="col btn-outline-primary btn text-start my-auto visually-hidden">
            Выбран: <? echo $_GET['customer_surname'].' '.
                $_GET['customer_name'].' '.
                $_GET['customer_middle_name'].' '.
                $_GET['customer_phone_number'].' '.
                $_GET['customer_address'];?>
        </div>
    </div>

    <div class="overflow-auto" style="max-height: 663px">
<!--        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        2020
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                        2020
                    </button>
                </h2>
                <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                    <div class="accordion-body">
                        а я внутри, тута хехе
                    </div>
                </div>
            </div>

        </div>-->
        <? require_once "./tables/users_and_book_acts_mian_show_table.php" ?>
    </div>
    <!--02 Кусок таблицы-->
</div>