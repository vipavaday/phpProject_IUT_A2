<?php

class FormManager {
    
    public static function beginForm($method,$action,$css_class="",$extraOptions=""){
        if(!empty($css_class)){
            $css_class_option="class=\"".$css_class."\" ";
        }
        return "<form method=\"".$method."\" action=\"".$action."\" ".$css_class_option.$extraOptions.">\n";
    } 
    
    public static function endForm(){
        return "</form>";
    }
    
    public static function addInput ($labelText,$type,$name,$id,$value=null,$extraOption="",$noBr=false){
        $valueOption = ($value ===null) ? "" : " value=\"".$value."\" ";
        
        if($extraOption === null){
            $extraOption="";
        }
        
        if($labelText != null && $labelText!=""){
            $returnText .= "<label for=\"".$id."\">".$labelText."</label><br/>\n";
        }
        $returnText .= "<input type=\"".$type."\" name=\"".$name."\" id=\"".$id."\" ".$valueOption." ".$extraOption." />\n";
        
        if($noBr){
            $returnText .= "<br/>\n";
        }

        return $returnText;
    }
    
    public static function addTextInput($labelText,$name,$id,$size,$value=null,$extraOptions=""){
        return self::addInput($labelText,"text", $name, $id,$value,"size =\"".$size."\" ".$extraOptions);
    }
    
    public static function addEmailInput($labelText,$name,$id,$size,$value=null,$extraOptions=""){
        return self::addInput($labelText,"email", $name, $id,$value,"size =\"".$size."\" ".$extraOptions);
    }
    
    public static function addDateInput($labelText,$name,$id,$size,$value=null,$extraOptions=""){
        return self::addInput($labelText,"date", $name, $id,$value,"size =\"".$size."\" ".$extraOptions);
    }
    
    public static function addPasswordInput ($labelText,$name,$id,$size,$value=null,$extraOptions=""){
        return self::addInput($labelText,"password", $name, $id, $value, "size =\"".$size."\" ".$extraOptions);  
    }
    
    public static function addRatioInput($labelText,$name,$id,$checked,$value=null,$extraOptions=""){
        return self::addInput($labelText,"radio", $name, $id, $value,(strcmp($checked,'checked')==0) ? "checked =\"checked\" ":" ".$extraOptions);
    }
    
    public static function addCheckBoxInput($labelText,$name,$id,$checked,$value,$extraOptions=""){
        return self::addInput($labelText,"checkbox", $name, $id, $value,(strcmp($checked,'checked')==0) ? "checked =\"checked\" ":" ".$extraOptions);
    }
    
    public static function addTextAreaInput($labelText,$name,$id,$rows,$cols,$value=null,$extraOptions=""){
        $valueOption=($value === null) ? "" : $value;
        if($extraOptions === null){
            $extraOptions="";
        }
        $returnText .= "<p>\n";
        if($labelText !=null && $labelText !=""){
            $returnText .= "<label for=\"".$id."\">".$labelText."</label>\n";
        }
        $returnText .= "<textarea name=\"".$name."\" id=\"".$id."\" rows=\"".$rows."\" cols=\"".$cols."\" ".$extraOptions." >".$valueOption."</textarea>\n";
        $returnText .= "</p>\n";
        return $returnText;
    }
    
    public static function addUploadInput($labelText,$name,$id,$size,$value="",$extraOptions=""){
        $valueOption =($value === null) ? "value=\"\"" : " value=\"".$value."\" ";
        if($extraOptions === null){
            $extraOptions="";
        }
        return self::addInput($labelText,"file", $name, $id,$value,"size =\"".$size."\" ".$valueOption." ".$extraOptions);
    }
    
    public static function beginSelect($labelText,$name,$id,$multiple=false,$size=6) {
        $returnText="";
        if($multiple){
            $multipleOption="multiple=\"multiple\" size=\"".$size."\"";
        }else{
            $multipleOption="";
        }
        if($labelText!=null && $labelText!=""){
            $returnText .= "<p><label for=\"".$id."\">".$labelText."</label>\n";
        }
        $returnText .= "<select name=\"".$name."\" id=\"".$id."\"".$multipleOption.">\n";
        return $returnText;
    }
    
    public static function endSelect(){
        $returnText= "</select></p>\n";
        return $returnText;
    }
    
    public static function addSelectOption($value,$displayText,$selected=false){
        $returnText ="";
        if($selected){
            $selectedOption="selected=\"selected\"";
        }  else {
            $selectedOption="";
        }
        $returnText .= "<option value=\"".$value."\" ".$selectedOption.">".$displayText."</option>\n";
        return $returnText;
    }
    
    public static function addHiddenInput($name,$id,$value,$extraOptions=""){
        return self::addInput("","hidden", $name, $id,"".$value,$extraOptions,true);
    }
    
    public static function addSubmitButton($value="Envoyer",$extraOptions=""){
        return self::addInput(null,"submit","","",$value," ".$extraOptions);
    }
    
}

?>
