<?php

//is a fucntion
class WidgetFactory
{
    var $oink = 'moo';

}

$WF=new WidgetFactory();
if (is_a($WF, 'WidgetFactory')){
    echo 'Yes, \$WF is stil a WidgetFactory Object';
}