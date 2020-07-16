<?
namespace app\models;

use Yii;

class Question extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'question';
    }

    public function rules()
    {
        return 
        [
            [['id','text','type','answers_qnt','url_image','fact','answers'],'fields']
        ];
    }
}