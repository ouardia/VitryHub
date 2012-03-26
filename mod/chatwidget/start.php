<?php
function chat_widget_init() {        
    elgg_register_widget_type('chatwidget', 'Chat Widget', 'Chat "Widget" widget');
}

elgg_register_event_handler('init', 'system', 'chat_widget_init');       
?>
