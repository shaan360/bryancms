<?php

namespace common\models;

use Yii;
use trntv\filekit\behaviors\UploadBehavior;
/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $title
 * @property string $tag_line
 * @property string $short_description
 * @property string $about
 * @property string $seo_description
 * @property string $tags
 * @property string $email
 * @property string $phone
 * @property string $facebook
 * @property string $instagram
 * @property string $twitter
 * @property string $address
 * @property string $last_updated
 * @property string $photo_base
 * @property string $photo_url
 */
class Settings extends \yii\db\ActiveRecord
{
      public $thumbnail;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
  [
                'class' => UploadBehavior::class,
                'attribute' => 'thumbnail',
                'pathAttribute' => 'thumbnail_path',
                'baseUrlAttribute' => 'thumbnail_base_url',
            ],
        ];
    }
    public function rules()
    {
        return [
            [['short_description', 'about', 'seo_description', 'tags', 'address'], 'string'],
            [['last_updated','thumbnail'], 'safe'],
            [['title', 'tag_line', 'email', 'phone', 'facebook', 'instagram', 'twitter', 'thumbnail_path', 'thumbnail_base_url'], 'string', 'max' => 255],
        ];
    }
      

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'thumbnail' => 'Photo/Logo',
            'tag_line' => 'Tag Line',
            'short_description' => 'Short Description',
            'about' => 'About',
            'seo_description' => 'Seo Description',
            'tags' => 'Tags',
            'email' => 'Email',
            'phone' => 'Phone',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'twitter' => 'Twitter',
            'address' => 'Address',
            'last_updated' => 'Last Updated',
            'thumbnail_path' => 'Photo Base',
            'thumbnail_base_url' => 'Photo Url',
        ];
    }
}
