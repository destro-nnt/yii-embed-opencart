<?php
/**
 * OcBanner
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{banner}}
 * @property integer $banner_id
 * @property string $name
 * @property integer $status
 *
 * Relations
 * @property OcBannerImage[] $bannerImages
 *
 * @see CActiveRecord
 * @method OcBanner find() find($condition, array $params = array())
 * @method OcBanner findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcBanner findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBanner findBySql() findBySql($sql, array $params = array())
 * @method OcBanner[] findAll() findAll($condition = '', array $params = array())
 * @method OcBanner[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcBanner[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBanner[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcBanner with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcBanner extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBanner the static model class
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
        return '{{banner}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'bannerImages' => array(self::HAS_MANY, 'OcBannerImage', 'banner_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'banner_id' => Yii::t('app', 'Banner'),
            'name' => Yii::t('app', 'Name'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

