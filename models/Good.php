<?php


namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods() {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 10);
        }

        return $goods;
    }
}