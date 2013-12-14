<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_related}}
 * @property integer $product_id
 * @property integer $related_id
 *
 * Relations
 * @property OcProduct $related
 * @property OcProduct $product
 *
 * @see CActiveRecord
 * @method OcProductRelated find() find($condition, array $params = array())
 * @method OcProductRelated findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductRelated findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRelated findBySql() findBySql($sql, array $params = array())
 * @method OcProductRelated[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductRelated[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductRelated[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRelated[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductRelated with() with()
 *
 * --- END GenerateProperties ---
 */

class OcProductRelated extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductRelated the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{product_related}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'related' => array(self::BELONGS_TO, 'OcProduct', 'related_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'related_id' => Yii::t('app', 'Related'),
        );
    }

}
