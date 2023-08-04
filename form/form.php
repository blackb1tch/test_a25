<div class="container">
    <div class="row row-body">
        <div class="col-3">
            <span style="text-align: center">Форма расчета</span>
            <i class="bi bi-activity"></i>
        </div>
        <div class="col-9">
            <form action="/" method="post" id="form" name="calculate-form">
                <label class="form-label" for="product">Выберите продукт:</label>
                <select class="form-select" name="product" id="product">
                    <?php
                    foreach ($products as $day => $price) {
                        ?>
                        <option value="<?= $price ?>" <?php if (intval($product) === $price) {
                            echo "selected='selected'";
                        } ?>>
                            <?= $day ?> дней: <?= $price ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>

                <label for="customRange1" class="form-label">Количество дней:</label>
                <input type="text" name="quantity" value="<?= $quantity ?>" class="form-control" id="customRange1"
                       min="1" max="30">

                <label for="customRange1" class="form-label">Дополнительно:</label>

                <?php
                $count = 0;
                foreach ($services as $key => $service) {


                    ?>
                    <div class="form-check">
                        <input class="form-check-input" name="<?= $key ?>" type="checkbox" value="<?= $service ?>"
                               id="flexCheckChecked-<?= $count ?>" checked>
                        <label class="form-check-label" for="flexCheckChecked-<?= $count ?>">
                            <?= $key ?>: <?= $service ?>
                        </label>
                    </div>
                    <?php
                    $count++;
                }

                ?>
                <button type="submit" class="btn btn-primary">Рассчитать</button>
                <div id="sum">
                    Итого: <?= $sum ?>
                </div>
            </form>
        </div>
    </div>
</div>
