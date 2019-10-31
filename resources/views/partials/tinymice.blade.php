<script type="text/javascript" src="{{asset('assets/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
    tinyMCE.init({
        // General options
        mode: "exact",
        elements: "body",
        theme: "silver",
        width: 800,
        height: 400,
        plugins: "advlink,advlist,autoresize,autosave,contextmenu,fullscreen,iespell,inlinepopups,media,paste,preview,safari,searchreplace,visualchars,wordcount,xhtmlxtras ",
        theme_advanced_buttons1: "cut,copy,paste,pastetext,pasteword,|,undo,redo, removeformat, | , search, replace, |,cleanup, help,code,preview,visualaid,fullscreen ",
        theme_advanced_buttons2: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,| ,bullist,numlist,| ,outdent,indent,blockquote,| ,sub,sup,cite,abbr ",
        theme_advanced_buttons3: "hr,|,link,unlink,anchor,image,|,charmap,emotions,iespell,media ",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "left",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        content_css: {{ asset('css/app.css') }},
    });
</script>
