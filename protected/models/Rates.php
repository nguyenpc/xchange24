<?php

/**
 * This is the model class for table "rates".
 *
 * The followings are the available columns in table 'rates':
 * @property integer $id
 * @property integer $from_proc
 * @property integer $to_proc
 * @property double $rate
 * @property integer $level
 * @property integer $min
 * @property integer $max
 * @property integer $extra_fees
 *
 * The followings are the available model relations:
 * @property PaymentProcessor $fromProc
 * @property PaymentProcessor $toProc
 * @property Level $level0
 */
class Rates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('from_proc, to_proc, rate, level, min, extra_fees', 'required'),
			array('from_proc, to_proc, level, min, max, extra_fees', 'numerical', 'integerOnly'=>true),
			array('rate', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, from_proc, to_proc, rate, level, min, max, extra_fees', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fromProc' => array(self::BELONGS_TO, 'PaymentProcessor', 'from_proc'),
			'toProc' => array(self::BELONGS_TO, 'PaymentProcessor', 'to_proc'),
			'level0' => array(self::BELONGS_TO, 'Level', 'level'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'from_proc' => 'From Proc',
			'to_proc' => 'To Proc',
			'rate' => 'Rate',
			'level' => 'Level',
			'min' => 'Min',
			'max' => 'Max',
			'extra_fees' => 'Extra Fees',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('from_proc',$this->from_proc);
		$criteria->compare('to_proc',$this->to_proc);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('level',$this->level);
		$criteria->compare('min',$this->min);
		$criteria->compare('max',$this->max);
		$criteria->compare('extra_fees',$this->extra_fees);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
