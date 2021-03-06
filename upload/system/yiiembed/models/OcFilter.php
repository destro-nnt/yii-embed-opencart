<?php
/**
 * OcFilter
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{filter}}
 * @property integer $filter_id
 * @property integer $filter_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property OcCategory[] $categories
 * @property OcFilterGroup $filterGroup
 * @property OcLanguage[] $languages
 * @property OcProduct[] $products
 *
 * @see CActiveRecord
 * @method OcFilter find() find($condition, array $params = array())
 * @method OcFilter findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcFilter findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilter findBySql() findBySql($sql, array $params = array())
 * @method OcFilter[] findAll() findAll($condition = '', array $params = array())
 * @method OcFilter[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcFilter[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilter[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcFilter with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcFilter extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilter the static model class
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
        return '{{filter}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{category_filter}}(filter_id, category_id)'),
            'filterGroup' => array(self::BELONGS_TO, 'OcFilterGroup', 'filter_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{filter_description}}(filter_id, language_id)'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_filter}}(filter_id, product_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_id' => Yii::t('app', 'Filter'),
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

