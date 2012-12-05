<?php

/**
 * This is the model class for table "problem".
 *
 * The followings are the available columns in table 'problem':
 * @property integer $id
 * @property integer $keyword_id
 * @property string $title
 * @property string $createtime
 * @property string $nickname
 * @property string $email
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Keyword $keyword
 * @property Reply[] $replys
 */
class Problem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Problem the static model class
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
		return 'problem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),
			array('id, keyword_id, status', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('nickname', 'length', 'max'=>50),
			array('email', 'length', 'max'=>32),
			array('createtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, keyword_id, title, createtime, nickname, email, status', 'safe', 'on'=>'search'),
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
			'replys' => array(self::HAS_MANY, 'Reply', 'problem_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '编号',
			'keyword_id' => '关键词',
			'title' => '问题标题',
			'createtime' => '提问时间',
			'nickname' => '昵称',
			'email' => '邮箱',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('keyword_id',$this->keyword_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}