<?php

/**
 * This is the model class for table "payment_processor".
 *
 * The followings are the available columns in table 'payment_processor':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $is_send
 * @property double $is_receive
 * @property double $send_fees
 * @property integer $receive_fees
 * @property integer $Reserve
 * @property double $send_extra
 * @property double $receive_extra
 *
 * The followings are the available model relations:
 * @property Rates[] $rates
 * @property Rates[] $rates1
 */
class PaymentProcessor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payment_processor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, is_send, is_receive, send_fees, receive_fees, Reserve, send_extra, receive_extra', 'required'),
			array('is_send, receive_fees, Reserve', 'numerical', 'integerOnly'=>true),
			array('is_receive, send_fees, send_extra, receive_extra', 'numerical'),
			array('code', 'length', 'max'=>10),
			array('name', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, name, is_send, is_receive, send_fees, receive_fees, Reserve, send_extra, receive_extra', 'safe', 'on'=>'search'),
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
			'rates' => array(self::HAS_MANY, 'Rates', 'from_proc'),
			'rates1' => array(self::HAS_MANY, 'Rates', 'to_proc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'is_send' => 'Is Send',
			'is_receive' => 'Is Receive',
			'send_fees' => 'Send Fees',
			'receive_fees' => 'Receive Fees',
			'Reserve' => 'Reserve',
			'send_extra' => 'Send Extra',
			'receive_extra' => 'Receive Extra',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('is_send',$this->is_send);
		$criteria->compare('is_receive',$this->is_receive);
		$criteria->compare('send_fees',$this->send_fees);
		$criteria->compare('receive_fees',$this->receive_fees);
		$criteria->compare('Reserve',$this->Reserve);
		$criteria->compare('send_extra',$this->send_extra);
		$criteria->compare('receive_extra',$this->receive_extra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PaymentProcessor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
