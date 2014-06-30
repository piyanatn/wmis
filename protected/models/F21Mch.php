<?php

/**
 * This is the model class for table "f21_mch".
 *
 * The followings are the available columns in table 'f21_mch':
 * @property string $pcucode
 * @property string $pid
 * @property string $gravida
 * @property string $lmp
 * @property string $edc
 * @property string $vdrl_rs
 * @property string $hb_rs
 * @property string $hiv_rs
 * @property string $datehct
 * @property string $hct_rs
 * @property string $thalass
 * @property string $dental
 * @property string $tcaries
 * @property string $tartar
 * @property string $guminf
 * @property string $bdate
 * @property string $bresult
 * @property string $bplace
 * @property string $bhosp
 * @property string $btype
 * @property string $bdoctor
 * @property string $lborn
 * @property string $sborn
 * @property string $ppcare1
 * @property string $ppcare2
 * @property string $ppres
 * @property string $d_update
 * @property string $cid
 */
class F21Mch extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'f21_mch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pcucode', 'required'),
			array('pcucode, bhosp', 'length', 'max'=>5),
			array('pid', 'length', 'max'=>15),
			array('gravida, hct_rs, tcaries', 'length', 'max'=>2),
			array('lmp, edc, vdrl_rs, datehct, bdate, ppcare1, ppcare2', 'length', 'max'=>8),
			array('hb_rs, hiv_rs, thalass, dental, tartar, guminf, bplace, btype, bdoctor, lborn, sborn, ppres', 'length', 'max'=>1),
			array('bresult', 'length', 'max'=>6),
			array('d_update', 'length', 'max'=>14),
			array('cid', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pcucode, pid, gravida, lmp, edc, vdrl_rs, hb_rs, hiv_rs, datehct, hct_rs, thalass, dental, tcaries, tartar, guminf, bdate, bresult, bplace, bhosp, btype, bdoctor, lborn, sborn, ppcare1, ppcare2, ppres, d_update, cid', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pcucode' => 'Pcucode',
			'pid' => 'Pid',
			'gravida' => 'Gravida',
			'lmp' => 'Lmp',
			'edc' => 'Edc',
			'vdrl_rs' => 'Vdrl Rs',
			'hb_rs' => 'Hb Rs',
			'hiv_rs' => 'Hiv Rs',
			'datehct' => 'Datehct',
			'hct_rs' => 'Hct Rs',
			'thalass' => 'Thalass',
			'dental' => 'Dental',
			'tcaries' => 'Tcaries',
			'tartar' => 'Tartar',
			'guminf' => 'Guminf',
			'bdate' => 'Bdate',
			'bresult' => 'Bresult',
			'bplace' => 'Bplace',
			'bhosp' => 'Bhosp',
			'btype' => 'Btype',
			'bdoctor' => 'Bdoctor',
			'lborn' => 'Lborn',
			'sborn' => 'Sborn',
			'ppcare1' => 'Ppcare1',
			'ppcare2' => 'Ppcare2',
			'ppres' => 'Ppres',
			'd_update' => 'D Update',
			'cid' => 'Cid',
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

		$criteria->compare('pcucode',$this->pcucode,true);
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('gravida',$this->gravida,true);
		$criteria->compare('lmp',$this->lmp,true);
		$criteria->compare('edc',$this->edc,true);
		$criteria->compare('vdrl_rs',$this->vdrl_rs,true);
		$criteria->compare('hb_rs',$this->hb_rs,true);
		$criteria->compare('hiv_rs',$this->hiv_rs,true);
		$criteria->compare('datehct',$this->datehct,true);
		$criteria->compare('hct_rs',$this->hct_rs,true);
		$criteria->compare('thalass',$this->thalass,true);
		$criteria->compare('dental',$this->dental,true);
		$criteria->compare('tcaries',$this->tcaries,true);
		$criteria->compare('tartar',$this->tartar,true);
		$criteria->compare('guminf',$this->guminf,true);
		$criteria->compare('bdate',$this->bdate,true);
		$criteria->compare('bresult',$this->bresult,true);
		$criteria->compare('bplace',$this->bplace,true);
		$criteria->compare('bhosp',$this->bhosp,true);
		$criteria->compare('btype',$this->btype,true);
		$criteria->compare('bdoctor',$this->bdoctor,true);
		$criteria->compare('lborn',$this->lborn,true);
		$criteria->compare('sborn',$this->sborn,true);
		$criteria->compare('ppcare1',$this->ppcare1,true);
		$criteria->compare('ppcare2',$this->ppcare2,true);
		$criteria->compare('ppres',$this->ppres,true);
		$criteria->compare('d_update',$this->d_update,true);
		$criteria->compare('cid',$this->cid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return F21Mch the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
