<?php
/**
 * OcBannerImageDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{banner_image_description}}
 * @property integer $banner_image_id
 * @property integer $language_id
 * @property integer $banner_id
 * @property string $title
 *
 * Relations
 * @property OcBanner $banner
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcBannerImageDescription find() find($condition, array $params = array())
 * @method OcBannerImageDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcBannerImageDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBannerImageDescription findBySql() findBySql($sql, array $params = array())
 * @method OcBannerImageDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcBannerImageDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcBannerImageDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBannerImageDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcBannerImageDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcBannerImageDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBannerImageDescription the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{banner_image_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'banner' => array(self::BELONGS_TO, 'OcBanner', 'banner_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'banner_image_id' => Yii::t('app', 'Banner Image'),
            'language_id' => Yii::t('app', 'Language'),
            'banner_id' => Yii::t('app', 'Banner'),
            'title' => Yii::t('app', 'Title'),
        );
    }

}

