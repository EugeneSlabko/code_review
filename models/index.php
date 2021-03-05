<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use yii\db\ActiveRecord;

/**
 * Class GoodsProcess
 */
class GoodsProcess extends Goods implements InterfaceGood
{
// $var=12;
// магические числа
// двойной return
// отсутствие типизации и возвращаемого типа
// не правильная типизация
// где-то присвоение в if
// цикл объектом
// незакрытая транзакция
// дублирование кода
// обращение не через getter, в котором зашита часть логики
// Слишком длинный метод, который делает пару вещей
// Обращения к базе не вынесены в отдельные методы (страдает тестируемость кода)
// Обращение к all без batch
// Что-то попробовать с генераторами
// Не соответствие входящего типа в конструктор класса


// можно что-то взять отсюда https://gist.github.com/vudaltsov/e6f7dd83a88b349cd5ee0e0d1795e5aa
}

class Goods extends BaseClass extends ActiveRecord
{

}

abstract class BaseClass
{

}


interface InterfaceGood
{
    public function findGood();
}