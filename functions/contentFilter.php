<?php 
class contentFilter{
    public function contentFilter(){
        
    add_filter('the_content', 'add_text_input_classes', 20);
        
        function add_text_input_classes($content)
        {
            $doc = new DOMDocument(); //Instantiate DOMDocument
            $doc->loadHTML($content); //Load the Post/Page Content as HTML
            $textareas = $doc->getElementsByTagName('h2'); //Find all Textareas
            $inputs = $doc->getElementsByTagName('h2'); //Find all Inputs
            
            foreach($textareas as $textarea)
            {
                append_attr_to_element($textarea, 'class', 'input');
            }
            
            foreach($inputs as $input)
            {
                $setClass = false;
                if($input->getAttribute('type') === 'submit') //Is the input of type submit?
                    $setClass = 'btn';
                else if($input->getAttribute('type') === 'text') //Is the input of type text?
                    $setClass = 'input';

                if($setClass)
                    append_attr_to_element($input, 'class', $setClass);
            }
            return $doc->saveHTML(); //Return modified content as string
        }
        
        function append_attr_to_element(&$element, $attr, $value)
        {
            if($element->hasAttribute($attr)) //If the element has the specified attribute
            {
                $attrs = explode(' ', $element->getAttribute($attr)); //Explode existing values
                if(!in_array($value, $attrs))
                    $attrs[] = $value; //Append the new value
                $attrs = array_map('trim', array_filter($attrs)); //Clean existing values
                $element->setAttribute($attr, implode(' ', $attrs)); //Set cleaned attribute
            }
            else
                $element->setAttribute($attr, $value); //Set attribute
        }

    }
}
?>