<?php
/**
 * OcProductDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_description}}
 * @property integer $product_id
 * @property integer $language_id
 * @property string $name
 * @property string $description
 * @property string $tag
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 *
 * @see CActiveRecord
 * @method OcProductDescription find() find($condition, array $params = array())
 * @method OcProductDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductDescription findBySql() findBySql($sql, array $params = array())
 * @method OcProductDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcProductDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductDescription the static model class
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
        return '{{product_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'tag' => Yii::t('app', 'Tag'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'meta_keyword' => Yii::t('app', 'Meta Keyword'),
        );
    }

}

