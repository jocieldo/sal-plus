    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
	<?php
	foreach ($modelSchema as $field => $attributes): 
            echo '<tr>';
            echo '<td data-title="'.__d('report_manager','Add',true).'">';
            if (isset($this->data[$modelClass][$field]['Add']))
                $modelFieldAdd = $this->data[$modelClass][$field]['Add'];
            else
                $modelFieldAdd = true;
            echo $this->Form->checkbox($modelClass.'.'.$field.'.'.'Add',array('hiddenField' => true,'checked'=>$modelFieldAdd,'class'=>'form-control'));
            echo '</td>';
            echo '<td data-title="'.__d('report_manager','Model.Field',true).'">';
            echo '<b><span class="checkAll">'.$modelClass.'</span></b>.';
            echo ( isset($labelFieldList[$modelClass][$field]) ? $labelFieldList[$modelClass][$field] : ( isset($labelFieldList['*'][$field]) ? $labelFieldList['*'][$field] : $field ));
            echo '</td>';
            echo '<td data-title="'.__d('report_manager','Position',true).'">';
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Position',array('type'=>'text','label'=>'','size'=>'4','maxlength'=>'4','class'=>'position form-control'));
            $currType = ( isset($attributes['type']) ? $attributes['type'] : $attributes['Type'] );
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Type',array('type'=>'hidden','value'=>$currType,'class'=>'form-control'));
            $currLength = ( isset($attributes['length']) ? $attributes['length'] : 
                ( isset($attributes['Length']) ? $attributes['Length'] : 10) );
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Length',array('type'=>'hidden','value'=>$currLength));
            echo '</td>';          
            echo '</tr>';
        endforeach;
        ?>