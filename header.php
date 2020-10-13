

<html>
    <head>
        <meta charset="UTF-8">
        <title>цветно PI</title>
    </head>
    
    <body bgcolor="yellow">
        <!--bgcolor="008833"-->
        <!--bgcolor="bb5533"-->
            
<?php
/**
 * задай параметри с $params
 * примерен код:✔👀
 *         $form=new Form();     
           $form->create_field(['name' => 'rows', 'type' => 'text', 'description' => 'редове'],value="");
           $form->create_field(['name' => 'colls', 'type' => 'text', 'description' => 'колони']);
           $form->show();
 * 
 * 
 */

class Form{
    public $fields=[];     //
    public $color="0088aa";//
   public $params=[        //
       'type'=>'text',
       'name'=>'name',
       'value'=>'value'
         ];
    /**
     * 
     * @param array $params 
     * $params=[    
       'type'=>'text',
       'name'=>'name',
       'value'=>'value'
         ];
     */
    public function create_field(array $params){
        $type=$params['type'];
        if(isset($params['name'])){
            $name=$params['name'];
        }else{
            $name='name';
        }
        if(isset($params['type'])){
           $type=$params['type'];
        }else{
            $type='type';
        }
        if(isset($params['value'])){
            $value=$params['value'];
        }else{
            $value=null;
        }
        if(isset($params['description'])){
            $description=$params['description'];
        }else{
            $description=null;
        }
        
       
        if(isset($params['type'])&&(($params['type']=='text'||$params['type']=='submit'||$params['type']=='password'))){
        $form='<p>'.$description.'<input type="'.$type.'" name="'.$name.'" value="'.$value.'"></p>';
        //$form е временна помощна променлива която  кратко държи полето
        $this->fields[]=$form;
      
        }elseif(key_exists('select', $params)){
            
            $option=null;
            foreach($params['select'] as $k=>$opt){
                $option=$option.'<option value='.$opt.'>'.$opt.'</option>';
            }
            $select='<select name='.$params['name'].'>'.$option.'</select>';
            $this->fields[]=$select;
            
        }
    }
 
    public function show(){
        echo  '<form>';
        foreach($this->fields as $v){
           
           echo $v;
           
        }
        echo'</form>';
    }
    /**
     * 
     * @param type $name
     * @param type $value
     * @param type $color
     * @param type $size_width
     * @param type $size_heght
     */
    public function button($name,$value,$color,$size_width,$size_height){//съава бутоните
        $this->fields[]='<button name='.$name.' value='.$value.' style="background-color:'.$color.'; width:'.$size_width.'; height:'.$size_height.';">hello</button>';
    }
    public function __get($name) {
        
    }
    public function __set($name, $value) {
        $this->{$name}=$value;
    }
}

