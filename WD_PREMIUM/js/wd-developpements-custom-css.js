var editor = ace.edit("customCss");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/css");

jQuery(document).ready(function($){
        $("#wd-save-custom-css-form").submit(function(){ $("#wd_css").val( editor.getValue() ); });
    });