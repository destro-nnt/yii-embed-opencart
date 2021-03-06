<?php
/**
 * OcInformationDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{information_description}}
 * @property integer $information_id
 * @property integer $language_id
 * @property string $title
 * @property string $description
 *
 * @see CActiveRecord
 * @method OcInformationDescription find() find($condition, array $params = array())
 * @method OcInformationDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcInformationDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationDescription findBySql() findBySql($sql, array $params = array())
 * @method OcInformationDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcInformationDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcInformationDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcInformationDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcInformationDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformationDescription the static model class
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
        return '{{information_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'language_id' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        );
    }

}

