<?
namespace app\models;

use Yii;

class Order extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return 
        [
            [['id','pol','feetsize','samesocks','chosensocks','answers','date','text','time'],'fields']
        ];
    }
}