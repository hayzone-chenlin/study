<?php

/**
 * This is the model class for table "reply".
 *
 * The followings are the available columns in table 'reply':
 * @property integer $id
 * @property integer $problem_id
 * @property string $content
 * @property string $nickname
 * @property integer $answerbad
 * @property integer $answergood
 * @property string $email
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Problem $problem
 */
class Reply extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Reply the static model class
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
		return 'reply';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, problem_id, answerbad, answergood, status', 'numerical', 'integerOnly'=>true),
			array('content', 'length', 'max'=>100),
			array('nickname', 'length', 'max'=>50),
			array('email', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, problem_id, content, nickname, answerbad, answergood, email, status', 'safe', 'on'=>'search'),
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
			'problem' => array(self::BELONGS_TO, 'Problem', 'problem_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'problem_id' => 'Problem',
			'content' => 'Content',
			'nickname' => 'Nickname',
			'answerbad' => 'Answerbad',
			'answergood' => 'Answergood',
			'email' => 'Email',
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
		$criteria->select = "t.*";
//		$criteria->compare('t.keyword_id',$this->keyword_id,false);
		$criteria->compare('t.status',0);
		$criteria->order = 't.createtime desc';	

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}