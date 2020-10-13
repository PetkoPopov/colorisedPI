<?php
//namespace table;
?>
<meta charset='utf8'/>
<body style='background-color: #3333ff'></body>
<?php


/**
 *  незбравяй да подадеш колони и редове
 */
class Table {//шрави таблица с желате ни бутони и размери 
    

    public $colls = 5;
    public $rows = 8;
    public $td_help = [];
    public $size_height_button=77;
    public $size_width_button=77;
    public $size=77;
    public $border=1;
    public $color ='yellowgreen';// 'blue';//yellowgreen';
    public $td = [];
    public $tr = null;
    public $th = null;
   
    public $button;
    public $buttons = [];
    public $table = [];
    public $array_info=[];

    /**
     * 
     *$rows=5
     *colls =8 
     *$size=77
     *$color=string 'bbbbbb'for examp:
     */
    public function __construct(int $rows=5,int $colls=8) {
        $this->rows=$rows;
        $this->colls=$colls;
      
        
        
//        for($i=0;$i<=($rows*$colls);$i++){
//            $this->array_info[$i]='';
//        }
    }
    public function make_buttons(){
        
        for ($i = 1; $i <=($this->colls * $this->rows); $i++) {
            if(count($this->array_info)!==0){
            $this->buttons[$i]='<td bgcolor="darkgreen"><button style="background-color:'.$this->color.';width:'.$this->size_width_button.';height:'.$this->size_height_button.'">'.$this->array_info[$i-1].'</button></td>';
        }else{
             $this->buttons[$i]='<td bgcolor="darkgreen"><button style="background-color:'.$this->color.';width:'.$this->size_width_button.';height:'.$this->size_height_button.'"></button></td>';
        }
        
            }
      
    }
    /**
     * показва таблицата
     * @param type $count
     */
    public function show($count = 0) {
      
     $h=$this->colls * $this->rows;
       
         //echo $h;die;
        for ($i = 1; $i <=$h ; $i++) {

         $this->td_help[$count][$i] = $this->buttons[$i];
            
            if ($i % $this->colls == 0) {
                $this->td = implode($this->td_help[$count]);
                $this->tr[($i / $this->colls) - 1] = '<tr>' . $this->td . '</tr>';

                $count++;
            }
        }
    
        ?>
<div><form method='post' charset='UTF-8'><table border='<?= $this->border?>'>
                <?php
                if($this->th!==0){
                    echo '<tr>'.$this->th.'</tr>';
                }
                if($this->tr!==null){
                foreach ($this->tr as $v) {
                    echo $v;
                    
                }}
                ?>

            </table></form></div>
        <?php
    }
/**
 * 
 * @param array $array_info
 * @param type $key
 */
    public function insert(array $array_info = [], $key = 0) {
          for($i=0;$i<=$this->rows*$this->colls;$i++)
          {
              if(isset($array_info[$i])){
              $this->array_info[$i]=$array_info[$i];
          }else{
                  $this->array_info[$i]='';
              }
          }
              
     }
}


