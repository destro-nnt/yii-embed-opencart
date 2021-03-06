<?php
/**
 * OcManufacturer
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{manufacturer}}
 * @property integer $manufacturer_id
 * @property string $name
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property OcStore[] $stores
 * @property OcProduct[] $products
 *
 * @see CActiveRecord
 * @method OcManufacturer find() find($condition, array $params = array())
 * @method OcManufacturer findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcManufacturer findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcManufacturer findBySql() findBySql($sql, array $params = array())
 * @method OcManufacturer[] findAll() findAll($condition = '', array $params = array())
 * @method OcManufacturer[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcManufacturer[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcManufacturer[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcManufacturer with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcManufacturer extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcManufacturer the static model class
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
        return '{{manufacturer}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'stores' => array(self::MANY_MANY, 'OcStore', '{{manufacturer_to_store}}(manufacturer_id, store_id)'),
            'products' => array(self::HAS_MANY, 'OcProduct', 'manufacturer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'manufacturer_id' => Yii::t('app', 'Manufacturer'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

