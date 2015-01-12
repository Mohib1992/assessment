<?php

class Employee extends Eloquent implements Serializable
{

    protected $fillable = array('name', 'employee_description_id', 'image');

    protected $table = 'employee';

    public function team()
    {
        return $this->belongsTo('team');
    }

    // return content in all language

    public function getAllContent()
    {
        $translations = Translation::where('translation_key_id','=', $this->employee_description_id)->get();
        return $translations;
    }


    // this will return the content into english
    public function getContentEnglish()
    {
        $id = Language::where('code','eng')->first()->id;
        $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id',$id)->first();
        return $content['content'];
    }


    // this will return the content into german
    public function getContentGerman()
    {
        $id = Language::where('code','ger')->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){

            $content = 'No Translation found';
        }

        return $content;
    }

    // auto translater the content
    public function autoContentTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->empployee_description_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){
            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id', $id)->first()->content;
        }

        return $content;
    }

    public function getEmployeeDescription()
    {
        $content = Translation::getTranslation($this->employee_description_id)->content;
        return $content;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
        return serialize(array(
            $this->id,
            $this->name,
            $this->employee_description_id,
            $this->image
        ));
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
        list($this->id,$this->name,$this->employee_description_id,$this->image) = unserialize($serialized);
    }
}
?>